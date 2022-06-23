<?php
    function logout(){
        if (isset($_SESSION['idAmin'], $_SESSION['username'], $_SESSION['email'])) {
            unset($_SESSION['idAmin']);
            unset($_SESSION['username']);
            unset($_SESSION['email']);

            header("Location:../pages/login.php");
        }
    }

    logout();
?>