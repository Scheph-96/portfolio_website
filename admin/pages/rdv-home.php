<?php
    include '../configuration/accounts_administration.php';
    loginStatus();
    $appointements = get_appointement();
?>

<!DOCTYPE html>
<html lang="en">

<head>

    <!-- Title Page-->
    <title>Appointement</title>

    <?php include '../include/dependencies.php' ?>

</head>

<body class="animsition">
    <div class="page-wrapper">

    <?php include '../include/header.php' ?>

        <!-- PAGE CONTAINER-->
        <div class="page-container">
            <?php include '../include/header-desktop.php';?>
            <p class="message"></p>
            <!-- MAIN CONTENT-->
            <div class="main-content">
                <div class="section__content section__content--p30">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="au-card au-card--no-shadow au-card--no-pad m-b-40">
                                    <div class="au-card-title" style="background-image:url('../images/bg-title-01.jpg');">
                                        <div class="bg-overlay bg-overlay--purple"></div>
                                        <h3>
                                            <i class="zmdi zmdi-account-calendar"></i>Mes Rendez-Vous
                                        </h3>
                                    </div>
                                    <div class="au-task js-list-load">
                                        <div class="au-task-list js-scrollbar3">
                                            <?php for ($i=0; $i < count($appointements); $i++) { ?>
                                            <div id="<?php echo $appointements[$i]->get_idRdv(); ?>" class="au-task__item <?php echo $appointements[$i]->get_seen() == 0 ? "au-task__item--success" : "au-task__item--secondary" ?> " data-toggle="modal" data-target="#mediumModal">
                                                <div class="au-task__item-inner">
                                                    <h5 class=""><?php echo $appointements[$i]->get_username(); ?></h5>
                                                    <h5 class="task"><?php echo $appointements[$i]->get_service(); ?></h5>
                                                    <span class="time"><?php echo $appointements[$i]->get_date(); ?></span>
                                                </div>
                                            </div>
                                            <?php } ?>
                                        </div>
                                        <div class="au-task__footer">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <?php include '../include/footer.php' ?>

                    </div>
                </div>
            </div>
            <!-- END MAIN CONTENT-->
            <!-- END PAGE CONTAINER-->
        </div>
    </div>
    <!-- modal medium -->
    <div class="modal fade" id="mediumModal" tabindex="-1" role="dialog" aria-labelledby="mediumModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="mediumModalLabel">Envoyer une réponse</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <form method="post" id="myForm">
                    <div class="modal-body">
                        <div class="form-group">
                            <label for="customer-username" class="control-label mb-1" style="font-size: 14px">From</label>
                            <input name="customer-username" id="admin-email" type="email" class="form-control form-control-sm" value="<?php echo $_SESSION['email'] ?>" required>
                        </div>
                        <div class="form-group">
                            <label for="customer-email" class="control-label mb-1" style="font-size: 14px">To</label>
                            <input name="customer-email" id="customer-email" type="email" class="form-control form-control-sm" value="" required>
                        </div>
                        <div class="form-group">
                            <label for="customer-email" class="control-label mb-1" style="font-size: 14px">Subject</label>
                            <input name="customer-email" id="email-subject" type="text" class="form-control form-control-sm" value="" required>
                        </div>
                        <div class="form-group">
                            <label for="textarea-input" class=" form-control-label" style="font-size: 14px">Content</label>
                            <textarea name="textarea-input" id="textarea-input" rows="8" placeholder="Content..." class="form-control form-control-sm" value="" required></textarea>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button id="payment-button" name="submit-email" type="submit" class="btn btn-lg btn-block" style="background-color: #db0171; color:white">Envoyer</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <!-- end modal medium -->
    <?php include '../include/js-dependencies.php' ?>

    <script>
        $('.au-task__item').click(function() {
            var divID = $(this).attr('id');
            
            $.ajax({
                type: "POST",
                url: "../configuration/appointement-traitement.php",
                data: "divID="+divID,
                success: function(data){
                            if ($('#'+divID).hasClass("au-task__item--success")) {
                                $('#'+divID).removeClass("au-task__item--success").addClass("au-task__item--secondary");
                            }

                            $('#customer-email').val(data);

                        }
            });
        });

        $('#payment-button').click(function(e) {
    		var delay = 2000;
            e.preventDefault();

            var email = $('#admin-email').val();
            var email_to = $('#customer-email').val();
            var subject = $('#email-subject').val();
            var message = $('#textarea-input').val();

            $.ajax({
                type: "POST",
                url: "../configuration/appointement-traitement.php",
                data: "email="+email+"&email_to="+email_to+"&subject="+subject+"&message="+message,
                success: function(data) {
                          setTimeout(function() {
                            $('.message').html(data);
      	                  }, delay);
                        }
                // success: On_success
            });
            // function On_success(data){
            //     console.log(data);
            // }
        });
    </script>

</body>

</html>
<!-- end document-->
