<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!-->
<html> <!--<![endif]-->
<head>

  <title>Florence Moreira Service</title>


    <?php
      $path =  realpath($_SERVER["DOCUMENT_ROOT"]);

      $menu_status_service = "active";
      include $path.'/Moreira/includes/pages-head.php';

      include $path.'/Moreira/admin/configuration/accounts_administration.php';
      $service_array = get_service();

    ?>
  <!-- Bootstrap CSS-->
	<link href="../admin/vendor/bootstrap-4.1/bootstrap.min.css" rel="stylesheet" media="all">

</head>

<body id="body">

  <?php include '../includes/preloader.php'; ?>

  <?php include '../includes/menu.php'; ?>

<section class="single-page-header">
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<h2>Nos Services</h2>

			</div>
		</div>
	</div>
</section>


	<!-- Start Services Section
		==================================== -->

<section class="services" id="services">
	<div class="container">
		<div class="row no-gutters">
			<!-- section title -->
			<div class="col-12">
				<div class="title text-center">
					<h2>Nos Services</h2>
					<p>Vestibulum nisl tortor, consectetur quis imperdiet bibendum, laoreet sed arcu. Sed condimentum iaculis ex,
						in faucibus lorem accumsan non. Donec mattis tincidunt metus. Morbi sed tortor a risus luctus dignissim.</p>
					<div class="border"></div>
				</div>
			</div>
			<!-- /section title -->

			<!-- Single Service Item -->
			<div class="col-lg-4 col-sm-6 mb-4 mb-lg-0">
				<div class="service-block p-4 color-bg text-center">
					<div class="service-icon text-center">
						<i class="tf-ion-ios-copy-outline"></i>
					</div>
					<h3>Finance</h3>
					<p>Lorem ipsum dolor sit amet, consectetur.. Sed id lorem eget orci dictum facilisis vel id tellus. Nullam
						iaculis arcu at mauris dapibus consectetur.</p>
				</div>
			</div>
			<!-- End Single Service Item -->

			<!-- Single Service Item -->
			<div class="col-lg-4 col-sm-6 mb-4 mb-lg-0">
				<div class="service-block p-4 text-center">
					<div class="service-icon text-center">
						<i class="tf-ion-ios-alarm-outline"></i>
					</div>
					<h3>Accompagnement</h3>
					<p>Lorem ipsum dolor sit amet, consectetur.. Sed id lorem eget orci dictum facilisis vel id tellus. Nullam
						iaculis arcu at mauris dapibus consectetur.</p>
				</div>
			</div>
			<!-- End Single Service Item -->

			<!-- Single Service Item -->
			<div class="col-lg-4 col-sm-6 mb-4 mb-lg-0">
				<div class="service-block p-4 color-bg text-center">
					<div class="service-icon text-center">
						<i class="tf-ion-ios-book-outline"></i>
					</div>
					<h3>Pret &amp; Conduite</h3>
					<p>Lorem ipsum dolor sit amet, consectetur.. Sed id lorem eget orci dictum facilisis vel id tellus. Nullam
						iaculis arcu at mauris dapibus consectetur.</p>
				</div>
			</div>
			<!-- End Single Service Item -->

			<!-- Single Service Item -->
			<div class="col-lg-4 col-sm-6 mb-4 mb-lg-0">
				<div class="service-block p-4  text-center">
					<div class="service-icon text-center">
						<i class="tf-ion-ios-briefcase-outline"></i>
					</div>
					<h3>Gestion de compte</h3>
					<p>Lorem ipsum dolor sit amet, consectetur.. Sed id lorem eget orci dictum facilisis vel id tellus. Nullam
						iaculis arcu at mauris dapibus consectetur.</p>
				</div>
			</div>
			<!-- End Single Service Item -->

			<!-- Single Service Item -->
			<div class="col-lg-4 col-sm-6 mb-4 mb-lg-0">
				<div class="service-block p-4 color-bg text-center">
					<div class="service-icon text-center">
						<i class="tf-ion-ios-crop"></i>
					</div>
					<h3>Appuit familial</h3>
					<p>Lorem ipsum dolor sit amet, consectetur.. Sed id lorem eget orci dictum facilisis vel id tellus. Nullam
						iaculis arcu at mauris dapibus consectetur.</p>
				</div>
			</div>
			<!-- End Single Service Item -->

			<!-- Single Service Item -->
			<div class="col-lg-4 col-sm-6 mb-4 mb-lg-0">
				<div class="service-block p-4 text-center">
					<div class="service-icon text-center">
						<i class="tf-ion-ios-home-outline"></i>
					</div>
					<h3>Banque</h3>
					<p>Lorem ipsum dolor sit amet, consectetur.. Sed id lorem eget orci dictum facilisis vel id tellus. Nullam
						iaculis arcu at mauris dapibus consectetur.</p>
				</div>
			</div>
			<!-- End Single Service Item -->

		</div> <!-- End row -->
		<br>
		<div class="" style="align-content: center; text-align: center; margin-top: 6%;">
      <button type="button" class="btn btn-lg mb-1" data-toggle="modal" data-target="#mediumModal" style="background-color: #db0171; color: white">
				Prendre rendez-vous
			</button>
		</div>
	</div> <!-- End container -->

  <!-- modal medium -->
  <div class="modal fade" id="mediumModal" tabindex="-1" role="dialog" aria-labelledby="mediumModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="mediumModalLabel">Prendre rendez-vous</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <form method="post" id="myForm">
          <div class="modal-body">
            <div class="form-group">
              <label for="customer-username" class="control-label mb-1">Nom</label>
              <input name="customer-username" id="customer-username" type="text" class="form-control" value="" required>
            </div>
            <div class="form-group">
              <label for="customer-email" class="control-label mb-1">Email</label>
              <input name="customer-email" id="customer-email" type="email" class="form-control" value="" required>
            </div>
            <div class="form-group">
              <label for="select-service" class=" form-control-label">Sélectionner un service</label>
              <select name="select-service" id="select-service" class="form-control" onfocus='this.size=5;' onblur='this.size=1;' onchange='this.size=1; this.blur();' required>
                <option selected>Sélectionnez</option>
                <?php for ($i=0; $i < count($service_array); $i++) { ?>
                <option value="<?php echo $service_array[$i]->get_idService() ?>"><?php echo $service_array[$i]->get_libelle() ?></option>
                <?php } ?>
              </select>
            </div>
            <div class="message-box">
            </div>
          </div>
          <div class="modal-footer">
            <button id="payment-button" name="submit-appointement" type="submit" class="btn btn-lg btn-block" style="background-color: #db0171; color:white">Envoyer</button>
          </div>
        </form>
      </div>
    </div>
  </div>
  <!-- end modal medium -->

</section> <!-- End section -->

<!-- Start call section -->

<section class="call-to-action-2 section">
	<div class="container">
		<div class="row">
			<div class="col-md-12 text-center">
				<h2>Pour tout ............, et ......., une brochure à remplir a été mise a votre disposition. Après scan vous devriez scanner et nous le renvoyer par mail au <span>hello@zero.com</span></h2>
				<a href="" style="background-color: #db0171; color: white" class="btn"><i class="tf-ion-ios-download-outline"></i> Télécharger</a>
			</div>
		</div> 		<!-- End row -->
	</div>   	<!-- End container -->
</section> <!-- End Section -->

<br><br>
<?php include '../includes/footer.php'; ?>


<!-- Evite le reload de la page a la soumission de formulaire de rendez-vous -->
    <!-- Jquery JS-->
  	<script src="../admin/vendor/jquery-3.2.1.min.js"></script>
    <script>
      $(document).ready(function(){
    			var delay = 2000;
          $('#payment-button').click(function(e) {
    				 e.preventDefault();
				     var username = $('#customer-username').val();
				     var email = $('#customer-email').val();
				     var service = $('#select-service').val();
             $.ajax({
               type: "POST",
               url: "../includes/service-form-traitement.php",
               data: "customer-username="+username+"&customer-email="+email+"&select-service="+service,
    					 beforeSend: function() {
      					 $('.message-box').html(
      					 '<img src="../images/Loader.gif" width="25" height="25"/>'
      					 );
    					 },
               success: function(data){
                          setTimeout(function() {
      	                    $('.message-box').html(data);
      	                  }, delay);
                        }
             });
          });
       });
    </script>

  	<!-- Bootstrap JS-->
  	<script src="../admin/vendor/bootstrap-4.1/popper.min.js"></script>
  	<script src="../admin/vendor/bootstrap-4.1/bootstrap.min.js"></script>


    <?php include '../includes/js-dependencies.php'; ?>

  </body>
  </html>
