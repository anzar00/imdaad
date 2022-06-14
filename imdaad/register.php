<?php

require './includes/config.php';
require './includes/handlers/register.php'
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>Register - Imdaad</title>
    <meta content="" name="description">
    <meta content="" name="keywords">

    <?php include 'header.php' ?>

</head>

<body>

    <main>
        <div class="container">

            <section class="section register min-vh-100 d-flex flex-column align-items-center justify-content-center py-4">
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-lg-4 col-md-6 d-flex flex-column align-items-center justify-content-center">

                            <div class="d-flex justify-content-center py-4">
                                <a href="../index.php" class="logo d-flex align-items-center w-auto">
                                    <img src="assets/img/logo.png" alt="">
                                    <span class="d-none d-lg-block">Imdaad</span>
                                </a>
                            </div>
                            <!-- End Logo -->

                            <div class="card mb-3">

                                <div class="card-body">

                                    <div class="pt-4 pb-2">
                                        <h5 class="card-title text-center pb-0 fs-4">Create an Account</h5>
                                        <p class="text-center small">Enter your personal details to create account</p>
                                    </div>

                                    <form class="row g-3 needs-validation" action="register.php" method="POST">
                                        <div class="col-12">
                                            <label for="yourName" class="form-label">Your Name</label>
                                            <input type="text" name="name" class="form-control" id="yourName" 
                                                value="<?php
                                                if (isset($_SESSION['name'])) {
                                                    echo $_SESSION['name'];
                                                }
                                                ?>" required>
                                            <?php if(in_array("Your First Name should be in between 2-25 characters</br>",$error_array)) echo "Your First Name should be in between 2-25 characters</br>"; ?>
                                            <div class="invalid-feedback">Please, enter your name!</div>
                                        </div>

                                        <div class="col-12">
                                            <label for="yourEmail" class="form-label">Your Email</label>
                                            <input type="email" name="email" class="form-control" id="yourEmail"
                                                value="<?php 
                                                if(isset($_SESSION['email'])) {
                                                    echo $_SESSION['email'];
                                                } 
                                                ?>" required>
                                            <?php if(in_array("Email already in use</br>",$error_array)) echo "Email already in use</br>"; ?>
					                        <?php if(in_array("Invalid email format</br>",$error_array)) echo "Invalid email format</br>"; ?>
                                            <div class="invalid-feedback">Please enter a valid Email adddress!</div>
                                        </div>

                                        <div class="col-12">
                                            <label for="yourUsername" class="form-label">Role</label>
                                            <div class="input-group has-validation">
                                                <input list="role" name="role" class="form-control" id="yourRole" required>
                                                <datalist id="role">
                                                    <option value="Yaavar">
                                                    <option value="Chaaragar">
                                                </datalist>
                                            </div>
                                        </div>

                                        <div class="col-12">
                                            <label for="yourPassword" class="form-label">Password</label>
                                            <input type="password" name="password" class="form-control" id="yourPassword" required>
                                            <div class="invalid-feedback">Please enter your password!</div>
                                        </div>

                                        <div class="col-12">
                                            <label for="yourPassword" class="form-label">Confirm Password</label>
                                            <input type="password" name="c-password" class="form-control" id="yourPassword" required>
                                            <div class="invalid-feedback">Please enter your password!</div>
                                        </div>

                                        <?php if(in_array("Passwords doesn't match</br>",$error_array)) echo "Passwords doesn't match</br>"; ?>
                                        <?php if(in_array("Your password should contain only letters and numbers</br>",$error_array)) echo "Your password should contain only letters and numbers</br>"; ?>
                                        <?php if(in_array("Your Password should be in between 5-30 characters</br>",$error_array)) echo "Your Password should be in between 5-30 characters</br>"; ?>

                                        <div class="col-12">
                                            <input class="btn btn-primary w-100" type="submit" name="register_button" value="Create Account">
                                        </div>
                                        <div class="col-12">
                                            <?php if(in_array("<span style='color: #14C800;'>You're all set! Go ahead and login!</span><br>", $error_array)) echo "<span style='color: #14C800;'>You're all set! Go ahead and login!</span><br>"; ?>
                                            <p class="small mb-0">Already have an account? <a href="login.php">Log in</a></p>
                                        </div>
                                    </form>

                                </div>
                            </div>

                        </div>
                    </div>
                </div>

            </section>

        </div>
    </main><!-- End #main -->

    <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

    <?php include 'footer.php' ?>

</body>

</html>