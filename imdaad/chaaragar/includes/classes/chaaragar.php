<?php

class Yaavar {
	private $yaavar;
	private $con;

	// constructor

	public function __construct($con, $yaavar){
		$email = $_SESSION['email'];
		$this->con = $con;
		$yaavar_details_query = mysqli_query($con, "SELECT * FROM users WHERE email='$email'");
		$this->yaavar = mysqli_fetch_array($yaavar_details_query);
	}

	// To get the name

	public function getName() {
		$email = $_SESSION['email'];
		$yaavar = $this->yaavar['email'];
		$query = mysqli_query($this->con, "SELECT name FROM users WHERE email='$email'");
		$row = mysqli_fetch_array($query);
		return $row['name'];
	}

	// To get the profile_pic of user

	public function getProfilePic() {
		$email = $_SESSION['email'];
		$yaavar = $this->yaavar['email'];
		$query = mysqli_query($this->con, "SELECT profile_pic FROM users WHERE email='$email'");
		$row = mysqli_fetch_array($query);
		return $row['profile_pic'];
	}

}
