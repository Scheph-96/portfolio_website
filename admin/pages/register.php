<?php 
    include '../configuration/accounts_administration.php';
    $message = register();
?>

<!DOCTYPE html>
<html lang="en">

<head>

    <!-- Title Page-->
    <title>Register</title>

    <?php include '../include/dependencies.php' ?>

</head>

<body class="animsition">
    <div class="page-wrapper">
        <div class="page-content--bge5">
            <div class="container">
                <div class="login-wrap">
                    <div class="login-content">
                        <!-- <div class="login-logo">
                            <h1>Inscrivez-vous</h1>
                        </div> -->
                        <div class="login-form">
                            <form action="" method="post">
                                <div class="form-group">
                                    <label>Username</label>
                                    <input class="form-control" type="text" name="username" placeholder="Username" value="<?php echo isset($_REQUEST['username']) ? $_REQUEST['username'] : '' ?>" required>
                                </div>
                                <div class="form-group">
                                    <label>Email Address</label>
                                    <input class="form-control" type="email" name="email" placeholder="Email" value="<?php echo isset($_REQUEST['email']) ? $_REQUEST['email'] : '' ?>" required>
                                </div>
                                <div class="form-group">
                                    <label>Password</label>
                                    <input class="form-control" type="password" name="pass" placeholder="Password" required>
                                </div>
                                <div class="form-group">
                                    <label>Confirm Password</label>
                                    <input class="form-control" type="password" name="passConfirm" placeholder="Confirm Password" required>
                                </div>
                                <div class="form-group">
                                    <label>Code Secret</label>
                                    <input class="form-control" type="password" name="secret_code" placeholder="Secret Code" required>
                                </div>
                                <p style="color: red; font-size: 13px; margin-bottom: 10px"><?php echo isset($message) && $message != '' ? $message : '' ?></p>
                                <button class="au-btn au-btn--block au-btn--purple m-b-20" name="submit" type="submit">register</button>
                            </form>
                            <div class="register-link">
                                <p>
                                    Already have account?
                                    <a href="login.php">Sign In</a>
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