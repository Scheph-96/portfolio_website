<!--
Fixed Navigation
==================================== -->
<header class="navigation fixed-top">
  <div class="container">
    <!-- main nav -->
    <nav class="navbar navbar-expand-lg navbar-light">
      <!-- logo -->
      <a class="navbar-brand logo" href="../index.html">
        <img class="logo-default" src="../images/logo.png" alt="logo"/>
        <img class="logo-white" src="../images/logo-white.png" alt="logo"/>
      </a>
      <!-- /logo -->
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navigation"
        aria-controls="navigation" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse" id="navigation">
        <ul class="navbar-nav ml-auto text-center">
        	<li class="nav-item">
            <a class="nav-link" href="../index.html">Accueil</a>
          </li>
          <li class="nav-item  <?php echo isset($menu_status_about) ? $menu_status_about : "" ; ?>">
            <a class="nav-link" href="../pages/about.php">A-propos</a>
          </li>
          <li class="nav-item  <?php echo isset($menu_status_service) ? $menu_status_service : "" ; ?>">
            <a class="nav-link" href="../pages/service.php">Services</a>
          </li>
          <li class="nav-item  <?php echo isset($menu_status_contact) ? $menu_status_contact : "" ; ?>">
            <a class="nav-link" href="../pages/contact.php">Contact</a>
          </li>
        </ul>
      </div>
    </nav>
    <!-- /main nav -->
  </div>
</header>
<!--
End Fixed Navigation
==================================== -->
