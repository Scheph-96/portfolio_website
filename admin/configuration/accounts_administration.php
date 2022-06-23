<?php
    session_start();
    $path =  realpath($_SERVER["DOCUMENT_ROOT"]);
    require($path.'/Moreira/admin/configuration/database_config.php');
    require($path.'/Moreira/admin/modal/admin.php');
    require($path.'/Moreira/admin/modal/service.php');
    require($path.'/Moreira/admin/modal/client.php');
    require($path.'/Moreira/admin/modal/appointement.php');
    
    $dbConfig = new DbConfig();
    $dbConfig->database_connection();

    function register() {
        global $dbConfig;
        $message = "";

        if(isset($_REQUEST['submit'])){
            if(admin_register_checking($_REQUEST['secret_code'])){
                if ($_REQUEST['pass'] == $_REQUEST['passConfirm']) { 
                    $admin = new Admin($_REQUEST['username'], $_REQUEST['email'], $_REQUEST['pass']);
    
                    $message = $dbConfig->check_admin_exist($admin);
    
                    if(empty($message)){
                        $dbConfig->insert_admin($admin);
                        
                        unset($admin);
    
                        header("Location:../pages/login.php");
                    }
    
                } else {
                    $message = "Le mot de passe n'est pas identique";
                }
            }else{
                $message = "Invalid Secret Code !";
            }
        }
        return $message;
    }

    function login() {
        global $dbConfig;
        $message = "";

        if (isset($_REQUEST['submit'])) {
            $username = $_REQUEST['username'];
            $password = $_REQUEST['password'];

            $processingReturn = $dbConfig->select_admin($username, $password);
            
            if (gettype($processingReturn) == "array") {
                $adminData = $processingReturn;
                if (password_verify($password, $adminData['password'])) {
                    $_SESSION['idAmin'] = $adminData['idAdmin'];
                    $_SESSION['username'] = $adminData['username'];
                    $_SESSION['email'] = $adminData['email'];
    
                    header("Location:../pages/rdv-home.php");
                }else{
                    $message = "Mot de passe incorrect";
                }
            } else if(gettype($processingReturn) == "string"){
                $message = $processingReturn;
            }
            
        }

        return $message;
    }

    function loginStatus(){
        if(empty($_SESSION["idAmin"])){
            header("Location:../pages/login.php");
        }
    }

    function admin_register_checking($secret_code) {
        $status=false;

        $admin_confirmation = "Sx/4+u]5B)~Da@(;";
        $admin_confirmation_hash = password_hash($admin_confirmation, PASSWORD_ARGON2I);

        if (password_verify($secret_code, $admin_confirmation_hash)) {
            $status=true;
        } else {
            $status=false;
        }

        return $status;
        
    }

    function service_adding() {
        global $dbConfig;

        if (isset($_REQUEST['submit-service'])) {
            $service = $_REQUEST['service'];

            $is_insert = $dbConfig->insert_service($service);

            if ($is_insert) {
                return alert_success("Service ajouté");
            }else{
                return alert_error("Veuillez actualiser la page et réessayer, si le problème persiste consultez le développeur");
            }
            
        }
    }

    function service_removing() {
        global $dbConfig;

        if (isset($_REQUEST['delete-service'])) {
            $service = $_REQUEST['service'];

            $is_delete = $dbConfig->delete_service($service);

            if($is_delete) {
                return alert_success("Service supprimé");
            }else{
                return alert_error("Veuillez actualiser la page et réessayer, si le problème persiste consultez le développeur");
            }
        }
        
    }

    function get_service() {
        global $dbConfig;
        $service_array = array();
        $result = array();

        $result = $dbConfig->select_service();

        for ($i=0; $i < count($result); $i++) { 
            array_push($service_array, new Service($result[$i]['idService'], $result[$i]['libelle'], $result[$i]['dateCreation']));        
        }

        return $service_array;
    }

    function upload_logo() {
        global $dbConfig;

        if (isset($_REQUEST['submit-logo'])) {
            if ($_FILES['upload-file']['error'] == 0) {
                $allowed = array("jpg", "jpeg", "png");
                $max_size = 5 * 1024 * 1024;

                $file_name = $_FILES["upload-file"]["name"];
                $file_type = $_FILES["upload-file"]["type"];
                $file_size = $_FILES["upload-file"]["size"];

                $file_extension = pathinfo($file_name, PATHINFO_EXTENSION);

                if (in_array($file_extension, $allowed)) {
                    $dimension = getimagesize($_FILES["upload-file"]["tmp_name"]);
    
                    $width = $dimension[0];
                    $height = $dimension[1];

                    if ($file_size <= $max_size) {
                        if ($width <= 200 && $height <= 70) {
                            $is_update = $dbConfig->update_logo($file_name);
                            if ($is_update) {
                                move_uploaded_file($_FILES["upload-file"]["tmp_name"], "../images/icon/$file_name");
                                return alert_success("Image téléchargé avec succès");
                            } else {
                                return alert_error("Veuillez actualiser la page et réessayer, si le problème persiste consultez le développeur");
                            }
                        } else {
                            return alert_error("Les dimensions de l'image doivent faire au moins 200x70");
                        }
                    } else {
                        return alert_error("La taille de votre image ne doit pas dépasser 5MB");
                    }
                } else {
                    return alert_error("Format de fichier invalid! Vous devez télécharger une image au format JPG, JPEG ou PNG");
                }
            } else {
                return alert_error("Veuillez actualiser la page et réessayer, si le problème persiste consultez le développeur");
            }
            
        }
    }

    function get_logo() {
        global $dbConfig;

        $result = $dbConfig->select_logo();
        $libelle = $result['libelle'];

        return $libelle;
    }

    function register_client() {
        global $dbConfig;

        if ($_POST['customer-username'] != "" && $_POST['customer-email'] != "" && $_POST['select-service'] !="") {
            $client = new Client($_POST['customer-username'], $_POST['customer-email'], $_POST['select-service']);
            $is_insert = $dbConfig->insert_appointement($client);

            if ($is_insert) {
                return alert_success("Votre demande a été soumise, vous recevrai très bientôt un retour");
            } else {
                return alert_error("Une erreur est servenue, veuillez actualiser la page et réessayer !");
            }
            
        }
        
    }

    function get_appointement() {
        global $dbConfig;
        $appointements = array();
        $result = array();

        $result = $dbConfig->select_appointement();

        for ($i=0; $i < count($result); $i++) { 
            array_push($appointements, new Appointement($result[$i]['idRdv'], $result[$i]['username'], $result[$i]['email'], $result[$i]['libelle'], $result[$i]['seen'], $result[$i]['dateCreation']));
        }

        return $appointements;
    }

    function seen() {
       global $dbConfig;

       if ($_POST['divID'] != 0) {
           $result = $dbConfig->update_appointement($_POST['divID']);
       }
    }

    function get_email_by_id() {
        global $dbConfig;

        if ($_POST['divID'] != 0) {
            $result = $dbConfig->select_customer_email($_POST['divID']);
            $email = $result['email'];

            return $email;
        }
    }

    function send_email() {

        if ($_POST['email'] != "" && $_POST['email_to'] != "" && $_POST['subject'] != "" && $_POST['message'] != "") {

            //we need to get our variables first

             // ini_set("SMTP", "smtp.gmail.com");
        
            $email_to =   $_POST['email_to']; //the address to which the email will be sent
            $email    =   $_POST['email'];
            $subject  =   $_POST['subject'];
            $message  =   $_POST['message'];
            
            /*the $header variable is for the additional headers in the mail function,
            we are asigning 2 values, first one is FROM and the second one is REPLY-TO.
            That way when we want to reply the email gmail(or yahoo or hotmail...) will know 
            who are we replying to. */
            // $headers  = "From: $email\r\n";
            // $headers .= "Reply-To: $email\r\n";
            
            if(mail($email_to, $subject, $message)){
                echo 'sent'; // we are sending this text to the ajax request telling it that the mail is sent..      
            }else{
                echo 'failed';// ... or this one to tell it that it wasn't sent    
            }
        }
    }

    function alert_success($message) {
        $alert_success = "<div class='container'>
                        <div class='alert alert-success alert-dismissible fade show'>
                        <button type='button' class='close' data-dismiss='alert'>&times;</button>
                        <span class='badge badge-pill badge-success'>Success</span> $message
                        </div>
                    </div>";

        return $alert_success;
    }

    function alert_error($message) {
        $alert_error = "<div class='container'>
                            <div class='alert alert-danger alert-dismissible fade show'>
                            <button type='button' class='close' data-dismiss='alert'>&times;</button>
                            <span class='badge badge-pill badge-danger'>Error</span> $message
                            </div>
                        </div>";

        return $alert_error;
    }

    /*
        SELECT r.username, r.email, r.dateCreation, r.seen, s.libelle 
        FROM rdv r inner join services s on r.idService = s.idService 
        WHERE r.idService = s.idService
    */

?>