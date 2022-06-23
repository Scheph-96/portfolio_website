<?php 
    $libelle = get_logo();
?>

<!-- HEADER MOBILE-->
<header class="header-mobile d-block d-lg-none">
    <div class="header-mobile__bar">
        <div class="container-fluid">
            <div class="header-mobile-inner">
                <a class="logo" href="../pages/rdv-home.php">
                    <img src="../images/icon/<?php echo $libelle ?>" alt="CoolAdmin" />
                </a>
                <button class="hamburger hamburger--slider" type="button">
                    <span class="hamburger-box">
                        <span class="hamburger-inner"></span>
                    </span>
                </button>
            </div>
        </div>
    </div>
    <nav class="navbar-mobile">
        <div class="container-fluid">
            <ul class="navbar-mobile__list list-unstyled">
                <li>
                    <a class="js-arrow" href="../pages/rdv-home.php"><i class="fas fa-calendar-check"></i>Mes Rendez-Vous</a>
                </li>
                <li>
                    <a href="../pages/website-editing.php">
                        <i class="fas fa-check-square"></i>Modifier les contenus</a>
                </li>
            </ul>
        </div>
    </nav>
</header>
<!-- END HEADER MOBILE-->

<!-- MENU SIDEBAR-->
<aside class="menu-sidebar d-none d-lg-block">
    <div class="logo">
        <a href="#">
            <img src="../images/icon/<?php echo $libelle ?>" alt="Cool Admin" />
        </a>
    </div>
    <div class="menu-sidebar__content js-scrollbar1">
        <nav class="navbar-sidebar">
            <ul class="list-unstyled navbar__list">
                <li>
                    <a class="js-arrow" href="../pages/rdv-home.php"><i class="fas fa-calendar-check"></i>Mes Rendez-Vous</a>
                </li>
                <li>
                    <a href="../pages/website-editing.php">
                        <i class="fas fa-check-square"></i>Modifier les contenus</a>
                </li>
            </ul>
        </nav>
    </div>
</aside>
<!-- END MENU SIDEBAR-->