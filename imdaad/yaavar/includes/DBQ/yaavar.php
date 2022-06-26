<?php
if(!isset($_SESSION)){ 
    session_start(); 
} 

	//Get username
	function getName(){
		$email = $_SESSION['email'];
		$con = mysqli_connect("localhost", "root", "", "imdaad");
		$query = mysqli_query($con, "SELECT name FROM users WHERE email='$email'");
		$row = mysqli_fetch_array($query);
		return $row['name'];
	}

	//Get profile picture
	function getProfilePic(){
		$email = $_SESSION['email'];
		$con = mysqli_connect("localhost", "root", "", "imdaad");
		$query = mysqli_query($con, "SELECT profile_pic FROM users WHERE email='$email'");
		$row = mysqli_fetch_array($query);
		return $row['profile_pic'];
	}

?>