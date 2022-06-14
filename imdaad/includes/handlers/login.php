<?php

// Triggers when login button is pressed

if (isset($_POST['login_button'])) {

    $email = filter_var($_POST['email'], FILTER_SANITIZE_EMAIL); // Sanitizing email

    $_SESSION['email'] = $email; // Store email into session variable 

    $password = md5($_POST['password']); // Get password

    // Query to check email and password to log in

    $check_database_query = mysqli_query($con, "SELECT * FROM users WHERE email='$email' AND password='$password'");

    $check_login_query = mysqli_num_rows($check_database_query);

    if ($check_login_query == 1) {

        $row = mysqli_fetch_array($check_database_query);
        $email = $row['email'];
        $role = $row['role'];


        $_SESSION['email'] = $email; // Storing username into session variable
        $_SESSION['role'] = $role; // Storing username into session variable
        switch ($role) {
            case 'Yaavar':
                header('location: yaavar/index.php');
                break;
            case 'Chaaragar':
                header('location: chaaragar/index.php');
                break;
        }
        exit();
    } else {
        array_push($error_array, "Wrong Credentials..!!<br>");
    }
}
