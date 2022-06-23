<!DOCTYPE html>
<html lang="en">

<head>

    <!-- Title Page-->
    <title>Edit website</title>
    
    <?php include '../include/dependencies.php' ?>

</head>

<?php
    include '../configuration/accounts_administration.php';
    loginStatus();
    $alert_service_add = service_adding();
    $alert_service_remove = service_removing();
    $alert_logo_upload = upload_logo();
?>

<body class="animsition">
    <div class="page-wrapper">

        <?php include '../include/header.php' ?>

        <!-- PAGE CONTAINER-->
        <div class="page-container">

            <?php include '../include/header-desktop.php' ?>

            <!-- MAIN CONTENT-->
            <div class="main-content">
                <div class="section__content section__content--p30">
                    <div class="container-fluid">
                        <div class="row">
                                <!-- Pictures edition section -->
                                <div class="col-lg-6">
                                    <div class="card">
                                        <div class="card-header">
                                            <strong>Modifier</strong> le logo
                                        </div>
                                        <form method="post"  enctype="multipart/form-data">
                                            <div class="card-body card-block">
                                                    <div class="form-group">
                                                        <label for="upload-file" class="form-control-label">Uploader une image</label>
                                                        <input type="file" id="file-input" name="upload-file" class="form-control-file" required>
                                                    </div>
                                                    <p style="font-size:14px"><span style="color: red">* </span>Télécharger une image au format JPG, JPEG ou PNG</p>
                                                    <p style="font-size:14px"><span style="color: red">* </span>La taille de votre image ne doit pas dépasser 5MB</p>
                                                    <p style="font-size:14px"><span style="color: red">* </span>Les dimensions de l'image doivent faire au plus 200x70</p>
                                            </div>
                                            <div class="card-footer">
                                                <button type="submit" name="submit-logo" class="btn btn-success btn-sm">
                                                    <i class="fa fa-dot-circle-o"></i> Confirmer
                                                </button>
                                            </div>
                                            <?php echo $alert_logo_upload; ?>
                                        </form>
                                    </div>
                                </div>

                                <!-- Add and delete service section -->
                                <div class="col-lg-6">
                                    <div class="card">
                                        <div class="card-header">
                                            <strong>Ajouter / Supprimer</strong> des services
                                        </div>
                                        <form action="" method="post" class="">
                                            <div class="card-body card-block">
                                                    <div class="form-group">
                                                        <label for="service" class="form-control-label">Service</label>
                                                        <input type="text" id="edit-service" name="service" placeholder="" class="form-control" required>
                                                        <span class="help-block">Entrer le nom du service</span>
                                                    </div>
                                            </div>
                                            <div class="card-footer">
                                                <button type="submit" name="submit-service" class="btn btn-success btn-sm">
                                                    <i class="fa fa-dot-circle-o"></i> Ajouter
                                                </button>
                                                <button type="submit" name="delete-service" class="btn btn-danger btn-sm">
                                                    <i class="fa fa-ban"></i> Supprimer
                                                </button>
                                            </div>
                                            <?php echo $alert_service_add ?>
                                            <?php echo $alert_service_remove ?>
                                        </form>
                                    </div>
                                </div>
                                                        
                        </div>

                        <?php include '../include/footer.php' ?>

                    </div>
                </div>
            </div>
        </div>

    </div>

    <?php include '../include/js-dependencies.php' ?>

</body>

<script>
    if ( window.history.replaceState ) {
            window.history.replaceState( null, null, window.location.href );
        }
</script>

</html>
<!-- end document-->
