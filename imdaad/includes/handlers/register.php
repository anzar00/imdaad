<?php


// Declaring variables to prevent errors

$name = ""; // Variable for storing name
$email = ""; // Variable for storing email
$role = ""; // Variable for storing role
$password = ""; // Variable for storing password
$password2 = ""; // Variable for storing password 2
$date = ""; // Variable for storing sign up date 
$error_array = array(); // Variable that holds error messages


if(isset($_POST['register_button'])){

	// Registration form values

	// name

	$name = strip_tags($_POST['name']); // For removing html tags from input
	$_SESSION['name'] = $name; // Stores first name into session variable

	// Email

	$email = strip_tags($_POST['email']); // For removing html tags from input
	$email = str_replace(' ', '', $email); // To replace the spaces in the input
	$_SESSION['email'] = $email; // Stores email into session variable


	// Password

	$password = strip_tags($_POST['password']); // For removing html tags from input
	$password2 = strip_tags($_POST['c-password']); // For removing html tags from input

	// Sign Up date 

	$date = date("Y-m-d"); // Current date

    // Email Validation

    // Check if email is in valid format 

    if (filter_var($email, FILTER_VALIDATE_EMAIL)) {

        $email = filter_var($email, FILTER_VALIDATE_EMAIL);

        // Check if email already exists 

        $e_check = mysqli_query($con, "SELECT email FROM users WHERE email='$email'");

        //Count the number of rows returned

        $num_rows = mysqli_num_rows($e_check);

        if ($num_rows > 0) {

            array_push($error_array,
                "Email already in use</br>"
            );
        }
    } else {
        array_push($error_array, "Invalid email format</br>");
    }

	
	

	// Name length Validation


	if(strlen($name) > 25 || strlen($name) < 2) {

		array_push($error_array, "Your Name should be in between 2-25 characters</br>");
	}


	// Password validation

	if($password != $password2) {

		array_push($error_array,  "Passwords doesn't match</br>");
	}
	else {
		if(preg_match('/[^A-Za-z0-9]/', $password)) {

			array_push($error_array, "Your password should contain only letters and numbers</br>");
		}
	}

	// Password length Validation

	if(strlen($password) > 30 || strlen($password) < 5) {

		array_push($error_array, "Your Password should be in between 5-30 characters</br>");
	}
    
    // Triggers when no errors in $error_array

	if(empty($error_array)) {

		$password = md5($password); // Encrypt password before sending to database

		// Profile picture assignment randomly

		$rand = rand(1, 2); // Random number generation between 1 and 2

		if($rand == 1)
			$profile_pic = "assets/img/profile_pics/defaults/1.jpg";
		else if($rand == 2)
			$profile_pic = "assets/img/profile_pics/defaults/2.jpg";

		// Inserting values into the database after all succesfull validations

		$query = mysqli_query($con, "INSERT INTO users VALUES ('', '$name', '$email', '$role', '$password', '$date', '$profile_pic')");

		array_push($error_array, "<span style='color: #14C800;'>You're all set! Go ahead and login!</span><br>");

		// Clear session variables 

		$_SESSION['name'] = "";
		$_SESSION['email'] = "";
	}

}
?>
