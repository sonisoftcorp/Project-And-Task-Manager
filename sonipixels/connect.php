<?php

	session_start();
	$errors = array();
	$username = "";
	$password = "";

@$db = mysqli_connect('localhost', 'root', '', 'sonipixels');
    if (mysqli_connect_errno()) {
       echo '<p>Error: Could not connect to database.<br/>
       Please try again later.</p>';
       exit;
    }


if (isset($_POST['signup'])) {
	$username = htmlspecialchars($_POST['username']);
	$password = htmlspecialchars($_POST['password']);
	$first_name = htmlspecialchars($_POST['firstname']);
	$last_name = htmlspecialchars($_POST['lastname']);
	$phone_number = htmlspecialchars($_POST['phonenumber']);
	$email_addr = htmlspecialchars($_POST['email']);
	$confirmpass = htmlspecialchars($_POST['comfirmpass']);

	if (empty($username)) {
		array_push($errors, "Input Username!");
	}
		
	if (empty($password)) {
		array_push($errors, "Input Password!");
	}

	if (empty($first_name)) {
		array_push($errors, "Input first Name!");
	}

	if (empty($last_name)) {
		array_push($errors, "Input last Name!");
	}

	if (empty($email_addr)) {
		array_push($errors, "Input Email Address!");
	}

	if (empty($confirmpass)) {
		array_push($errors, "Confirm your Password!");
	}

	if ($password!=$confirmpass ) {
		array_push($errors, "Password does not match!");
	}
	
		$password = md5($password); //encrypt password
		$sql = "INSERT INTO users (username, password, first_name, last_name, phone_number, email_address) 
				 VALUES ('$username', '$password', '$first_name', '$last_name', '$phone_number', '$email_addr')";
			mysqli_query($db, $sql);
			$_SESSION['username'] = $username;
			header('location: login.php');
}


if (isset($_POST['login'])) {
	
		$username = htmlspecialchars($_POST['username']);
		$password = htmlspecialchars($_POST['password']);

	if (empty($username)) {
	array_push($errors, "Input Username!");
	}
		
	if (empty($password)) {
		array_push($errors, "Input Password!");
	}

		$password = md5($password); //encrypt the password 
		$query = "SELECT * FROM users WHERE  username= '$username' AND password= '$password'";
		$result = mysqli_query($db, $query);

		if (mysqli_num_rows($result) == 1) {
			$_SESSION['username'] = $username;
			header('location: Dashboard.php'); //redirect to welcome page

		}else{
			array_push($errors, "Wrong username or password!");
		}

}



if (isset($_POST['change_password'])) {
	$old_pass = htmlspecialchars($_POST['old_pass']);
	$new_pass = htmlspecialchars($_POST['new_pass']);
	$cfrm_pass = htmlspecialchars($_POST['cfrm_pass']);

	if (empty($old_pass)) {
			
			echo'<div class="container float-top">
	 				<div class="col-md-12">
						<div class="col-md-3"></div>
						<div class="col-md-6">
							<div class="alert alert-danger danger-alert alert-dismissable fade in mute-slide" id="alert_slide">
								<a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
								<strong>Input Error : </strong>You have to input your current password!
							</div>
						</div>
					</div>
				</div><br><br>';

	}

	if (empty($new_pass)) {
		
		echo '<div class="container float-top">
 				<div class="col-md-12">
					<div class="col-md-3"></div>
					<div class="col-md-6">
						<div class="alert alert-danger danger-alert alert-dismissable fade in mute-slide" id="alert_slide">
							<a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
							<strong>Input Error : </strong>You have to input a new password!
						</div>
					</div>
				</div>
			</div><br><br>';

	}

	if (empty($cfrm_pass)) {

		echo'<div class="container float-top">
 				<div class="col-md-12">
					<div class="col-md-3"></div>
					<div class="col-md-6">
						<div class="alert alert-danger danger-alert alert-dismissable fade in mute-slide" id="alert_slide">
							<a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
							<strong>Input Error : </strong> confirm your new password by typing your exact password again!
						</div>
					</div>
				</div>
			</div><br><br>';

	}

	if ($old_pass == $new_pass) {

		echo'<div class="container float-top">
 				<div class="col-md-12">
					<div class="col-md-3"></div>
					<div class="col-md-6">
						<div class="alert alert-danger danger-alert alert-dismissable fade in mute-slide" id="alert_slide">
							<a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
							<strong>Input Error : </strong> New password should not be thesame as old one!
						</div>
					</div>
				</div>
			</div><br><br>';

	}

	if ($cfrm_pass != $new_pass) {

		echo'<div class="container float-top">
 				<div class="col-md-12">
					<div class="col-md-3"></div>
					<div class="col-md-6">
						<div class="alert alert-danger danger-alert alert-dismissable fade in mute-slide" id="alert_slide">
							<a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
							<strong>Input Error : </strong> Your password does not match!
						</div>
					</div>
				</div>
			</div><br><br>';

	}


	$old_pass = md5($old_pass);
	$new_pass = md5($new_pass); //encrypt the password 
		// $query = "SELECT * FROM users WHERE password= '$old_pass'";
		$sql = "SELECT user_id, password FROM users WHERE password ='$old_pass'";
		$result = mysqli_query($db, $sql);

	if (mysqli_num_rows($result) > 0) {
		
		$sql = "UPDATE `users` SET `password` = '$new_pass' WHERE `users`.`user_id` = 1";

		if (mysqli_query($db, $sql)) {

    		echo'<div class="container float-top">
					<div class="col-md-12">
						<div class="col-md-3"></div>
						<div class="col-md-6">
							<div class="alert alert-success success-alert alert-dismissable fade in mute-slide" id="alert_slide">
							<a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
							<strong>Success : </strong>Password updated successfully!
							</div>
						</div>
					</div>	
				</div><br><br>';
		}

	}else{

		echo'<div class="container float-top">
 				<div class="col-md-12">
					<div class="col-md-3"></div>
					<div class="col-md-6">
						<div class="alert alert-danger danger-alert alert-dismissable fade in mute-slide" id="alert_slide">
							<a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
							<strong>Input Error : </strong> Failed to update password, make sure your old password is correct!
						</div>
					</div>
				</div>
			</div><br><br>';

	}
}







//logout

	if (isset($_GET['logout'])) {
		session_destroy();
		unset($_SESSION['username']);
		header('location: login.php');

	}
?>