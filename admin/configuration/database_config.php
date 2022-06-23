<?php

    //This is not a good practice. Use a backend instead of connecting directly the website to the database

    class DbConfig {
        private $serverName;
        private $userName;
        private $password;
        private $dbName;
        private $dbConnect;

        public function __construct() {
            $this -> serverName = $host;
            $this -> userName = $username;
            $this -> password = $pass;
            $this -> dbName = $dbname;
        }

        public function database_connection(){
            if (!$this->dbConnect) {
                $connection = new mysqli($this->serverName, $this->userName, $this->password, $this->dbName);
                if ($connection->connect_error) {
                    die("Error : Could not connect ". $connection->connect_error);
                } else {
                    $this->dbConnect = $connection;
                    $this->dbConnect->set_charset("utf8");
                }
            }

        }

        public function insert_admin($admin) {
            // Escape user inputs for security
            $username = $this->dbConnect->real_escape_string($admin->get_username());
            $email = $this->dbConnect->real_escape_string($admin->get_email());
            $pass = $this->dbConnect->real_escape_string($admin->get_password());
            $pass = $this->hashing($pass);

            // Attempt insert query execution
            $sql = "INSERT INTO admins (username, email, password) VALUES ('$username', '$email', '$pass')";
            $resultSet = $this->dbConnect->query($sql);

            if($resultSet){
                echo "Records inserted successfully.";
            } else {
                echo "ERROR: Could not able to execute $sql. " . $this->dbConnect->error;
            }

            // Close connection
            $this->dbConnect->close();

        }

        public function select_admin($username) {
            $username = $this->dbConnect->real_escape_string($username);
            $result = array();
            $message = "";
            $sql = "SELECT * FROM admins WHERE username = '$username'";
            $resultSet = $this->dbConnect->query($sql);
            if($resultSet){
                if($resultSet->num_rows > 0){
                    $result = $resultSet->fetch_array();
                    return $result;
                }else{
                    $message = "Aucun utilisateur ne correspond à ce nom.";
                    return $message;
                }
            }else{
                echo "ERROR: Could not able to execute $sql. " . $this->dbConnect->error;
            }

            // Close connection
            $this->dbConnect->close();
        }

        public function insert_service($service) {
            $status = false;
            $service = $this->dbConnect->real_escape_string($service);

            $sql = "INSERT INTO services (libelle) VALUES('$service')";
            $resultSet = $this->dbConnect->query($sql);

            if ($resultSet) {
                $status = true;
            }

            return $status;
        }

        public function delete_service($service) {
            $status = false;
            $service = $this->dbConnect->real_escape_string($service);

            $sql = "DELETE FROM services WHERE libelle = '$service' ";
            $resultSet = $this->dbConnect->query($sql);

            if ($resultSet) {
                $status = true;
            }

            return $status;
        }

        public function select_service() {
            $result = array();

            $sql = "SELECT * FROM services";
            $resultSet = $this->dbConnect->query($sql);
            if ($resultSet) {
                while ($row = $resultSet->fetch_array()) {
                    array_push($result, $row);
                }

                return $result;
            } else {
                echo "ERROR: Could not able to execute $sql. " . $this->dbConnect->error;
            }

        }

        public function update_logo($file_name) {
            $status = false;

            $sql = "UPDATE image SET libelle='$file_name'";
            $resultSet = $this->dbConnect->query($sql);

            if ($resultSet) {
                $status = true;
            }

            return $status;
        }

        public function select_logo(){
            $result = array();

            $sql = "SELECT * FROM image";
            $resultSet = $this->dbConnect->query($sql);

            if ($resultSet) {
                $result = $resultSet->fetch_array();

                return $result;
            } else {
                echo "ERROR: Could not able to execute $sql. " . $this->dbConnect->error;
            }

        }

        public function check_admin_exist($admin) {
            $username = $this->dbConnect->real_escape_string($admin->get_username());
            $email = $this->dbConnect->real_escape_string($admin->get_email());
            $message = "";
            $query = "SELECT * FROM admins WHERE username ='$username'";
            $resultSet = $this->dbConnect->query($query);
            if($resultSet){
                if($resultSet->num_rows > 0){
                    $message = "Un utilisater existe déjà avec ce nom.";
                    // $result = $resultSet->fetch_array();
                    // return $result;
                }else{
                    $query = "SELECT * FROM admins WHERE email ='$email'";
                    $resultSet = $this->dbConnect->query($query);
                    if ($resultSet) {
                        if($resultSet->num_rows > 0) {
                            $message = "Un utilisateur existe déjà avec cette adresse email.";
                        }
                    }else{
                        echo "ERROR: Could not able to execute $query. " . $this->dbConnect->error;
                    }
                }
            }else{
                echo "ERROR: Could not able to execute $query. " . $this->dbConnect->error;
            }

            return $message;
        }

        public function insert_appointement($client) {
            $status = false;

            $username = $this->dbConnect->real_escape_string($client->get_username());
            $email = $this->dbConnect->real_escape_string($client->get_email());
            $id_service = $client->get_id_service();

            $sql = "INSERT INTO rdv(idService, username, email, seen) VALUES('$id_service','$username', '$email', 0)";
            $resultSet = $this->dbConnect->query($sql);

            if ($resultSet) {
                $status = true;
            }else {
                echo "ERROR: Could not able to execute $sql. " . $this->dbConnect->error;
            }

            return $status;

        }

        public function select_appointement() {
            $result = array();

            $sql = "SELECT r.idRdv, r.username, r.email, r.dateCreation, r.seen, s.libelle
                    FROM rdv r inner join services s on r.idService = s.idService
                    WHERE r.idService = s.idService";
            $resultSet = $this->dbConnect->query($sql);

            if ($resultSet) {
                while ($row = $resultSet->fetch_array()) {
                    array_push($result, $row);
                }

                return $result;
            } else {
                echo "ERROR: Could not able to execute $sql. " . $this->dbConnect->error;
            }

        }

        function update_appointement($idRdv) {
            $status = false;

            $sql = "UPDATE rdv SET seen= 1 WHERE idRdv = '$idRdv'";
            $resultSet = $this->dbConnect->query($sql);

            if ($resultSet) {
                $status = true;
            } else {
                echo "ERROR: Could not able to execute $sql. " . $this->dbConnect->error;
            }

            return $status;
        }

        function select_customer_email($idRdv) {
            $result = array();

            $sql = "SELECT email FROM rdv WHERE idRdv = '$idRdv'";
            $resultSet = $this->dbConnect->query($sql);

            if ($resultSet) {
                $result = $resultSet->fetch_array();

                return $result;
            } else {
                echo "ERROR: Could not able to execute $sql. " . $this->dbConnect->error;
            }
        }

        private function hashing($password){
            $options = [
                'cost' => 12,
            ];
            $hashed = password_hash($password, PASSWORD_ARGON2ID, $options);

            return $hashed;
        }

    }
?>
