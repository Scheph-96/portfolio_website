<?php 
    include '../configuration/accounts_administration.php';
    include '../configuration/logout.php';

    $message = login();
?>

<!DOCTYPE html>
<html lang="en">

<head>

    <!-- Title Page-->
    <title>Login</title>

    <?php include '../include/dependencies.php' ?>

</head>

<body class="animsition">
    <div class="page-wrapper">
        <div class="page-content--bge5">
            <div class="container">
                <div class="login-wrap">
                    <div class="login-content">
                        <!-- <div class="login-logo">
                            <a href="#">
                                <img src="../images/icon/logo.png" alt="CoolAdmin">
                            </a>
                        </div> -->
                        <div class="login-form">
                            <form action="" method="post">
                                <div class="form-group">
                                    <label>Username</label>
                                    <input class="au-input au-input--full" type="text" name="username" placeholder="Username" value="<?php echo isset($_REQUEST['username']) ? $_REQUEST['username'] : '' ?>" required>
                                </div>
                                <div class="form-group">
                                    <label>Password</label>
                                    <input class="au-input au-input--full" type="password" name="password" placeholder="Password" required>
                                </div>
                                <p style="color: red; font-size: 13px; margin-bottom: 10px"><?php echo isset($message) && $message != '' ? $message : '' ?></p>
                                <button class="au-btn au-btn--block au-btn--purple m-b-20" name="submit" type="submit">sign in</button>
                            </form>
                            <div class="register-link">
                                <p>
                                    Don't you have account?
                                    <a href="register.php">Sign Up Here</a>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>

    <?php include '../include/js-dependencies.php' ?>

</body>

</html>
<!-- end document-->