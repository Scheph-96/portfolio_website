<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!-->
<html> <!--<![endif]-->
<head>

  <title>Florence Moreira Contact</title>

  <?php

    $menu_status_contact = "active";
    include '../includes/pages-head.php';

  ?>

</head>

<body id="body">

  <?php include '../includes/preloader.php'; ?>

  <?php include '../includes/menu.php'; ?>

<section class="single-page-header">
	<div class="container">
		<div class="row">
			<div class="col-md-12">

			</div>
		</div>
	</div>
</section>

 <!--Start Contact Us
	=========================================== -->
<section class="contact-us" id="contact">
	<div class="container">
		<div class="row">

			<!-- section title -->
			<div class="col-12">
			<div class="title text-center" >
				<h2>Nous vous repondons en un click ;)</h2>
				<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptate facilis eveniet maiores ab maxime nam ut numquam molestiae quaerat incidunt?</p>
				<div class="border"></div>
			</div>
			</div>
			<!-- /section title -->

			<!-- Contact Details -->
			<div class="contact-details col-md-6 " >
				<h3>Détails contacts</h3>
				<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ipsam, vero, provident, eum eligendi blanditiis ex explicabo vitae nostrum facilis asperiores dolorem illo officiis ratione vel fugiat dicta laboriosam labore adipisci.</p>
				<ul class="contact-short-info" >
					<li>
						<i class="tf-ion-ios-home"></i>
						<span>Lomé, TOGO, Rue Hanoucopé. </span>
					</li>
					<li>
						<i class="tf-ion-android-phone-portrait"></i>
						<span>Phone: +000-00-000-000</span>
					</li>
					<li>
						<i class="tf-ion-android-globe"></i>
						<span>Fax: +111-11-000-000</span>
					</li>
					<li>
						<i class="tf-ion-android-mail"></i>
						<span>Email: <a style="color: #db0171" href="#">hello@zero.com</a></span>
					</li>
				</ul>
				<!-- Footer Social Links -->
				<div class="social-icon">
					<ul>
						<li><a href="#"><i class="tf-ion-social-facebook"></i></a></li>
						<li><a href="#"><i class="tf-ion-social-twitter"></i></a></li>
						<li><a href="#"><i class="tf-ion-social-youtube"></i></a></li>
						<li><a href="#"><i class="tf-ion-social-linkedin-outline"></i></a></li>
					</ul>
				</div>
				<!--/. End Footer Social Links -->
			</div>
			<!-- / End Contact Details -->

			<!-- Contact Form -->
			<div class="contact-form col-md-6 " >
				<form id="contact-form" method="post" role="form">
					<div class="form-group">
						<input type="text" placeholder="Nom" class="form-control" name="name" id="name">
					</div>

					<div class="form-group">
						<input type="email" placeholder="Email" class="form-control" name="email" id="email">
					</div>

					<div class="form-group">
						<input type="text" placeholder="Sujet" class="form-control" name="subject" id="subject">
					</div>

					<div class="form-group">
						<textarea rows="6" placeholder="Message" class="form-control" name="message" id="message"></textarea>
					</div>

					<div id="success" class="success">
						Merçi, le mail a été bien envoyé :)
					</div>

					<div id="error" class="error">
						Désolé, n'a pas abouti, veillez réessayer :(
					</div>
					<div id="cf-submit">
						<input style="background-color: #db0171" type="submit" id="contact-submit" class="btn btn-transparent" value="Envoyer">
					</div>

				</form>
			</div>
			<!-- ./End Contact Form -->

		</div> <!-- end row -->
	</div> <!-- end container -->
</section> <!-- end section -->


<?php include '../includes/footer.php'; ?>


<?php include '../includes/js-dependencies.php'; ?>

  </body>
  </html>
