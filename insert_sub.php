<?php
session_start(); 
if(isset($_POST['insert'])){
	$firstname = $_POST['first_name'];
	$email = $_POST['email'];
	$pswd = $_POST['pswd'];
	$mobile = $_POST['mobile'];
	$city = $_POST['city'];
	$gender = $_POST['gender'];

//storeing values in session so they will not remove once field is filled

	$_SESSION['first_name'] = $firstname;
	$_SESSION['user_email'] = $email;
	$_SESSION['user_mob'] = $mobile;



if($firstname == "" || $email == "" || $pswd == "" || $mobile == "" || $city == "" || $gender == ""){
	$_SESSION['all_req'] ='<div class="alert alert-danger">
  <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
  <strong>Error!</strong> All fields are required!!!.
</div>';
	header('location:index.php');

}

else if(empty($firstname)){
		$_SESSION['firstname_error'] = '<div class="alert alert-danger">
  <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
  <strong>Error!</strong> First Name can not be blank!!!.
</div>';;
		header("location:index.php");

	}
	else if(!preg_match("/^[a-zA-Z ]*$/", $firstname)){

		
		$_SESSION['firstname_error'] = '<div class="alert alert-danger">
  <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
  <strong>Error!</strong>Only letters are allowed!!!.
</div>';
		header("location:index.php");
	}
	else if(!filter_var($email, FILTER_VALIDATE_EMAIL)) {
 		echo "Enter a valid email";	
 	}
 	else if(!preg_match("/^[1-9][0-9]*$/", $mobile)){

 		$_SESSION['only_number'] ='<div class="col-md-6"><div class="alert alert-danger">
  <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
  <strong>Error!</strong> Only Numbers are allowed in mobile number field!!!.
</div></div>';
 		
 		header('location:index.php');
 		

	}

	else{
		//email checking 
	}
 	}





?>