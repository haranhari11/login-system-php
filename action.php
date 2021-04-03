<?php
	require "config.php";

	//Registeration

	if(isset($_POST['action']) && $_POST['action'] == 'register') {
		$fname=check_input($_POST['name']);
		$uname=check_input($_POST['username']);
		$email=check_input($_POST['email']);
		$pass=check_input($_POST['password']);
		$cpass=check_input($_POST['confirm_password']);
		$pass=sha1($pass);
		$cpass=sha1($cpass);
		$created=date('Y-m-d');

		if($pass != $cpass) {
			echo "password did not match!";
			exit();
		} else {
			$sql=$conn->prepare("SELECT username,email from users WHERE username=? OR email=?");
			$sql->bind_param('ss',$uname,$email);
			$sql->execute();
			$result=$sql->get_result();
			$row=$result->fetch_array(MYSQLI_ASSOC);

			if($row > 0) {
				if($row['username'] == $uname ) {
				echo "Username not available. Try different one!";
				} elseif($row['email'] == $email) {
				echo "Email is already registered. Try different one!";
				} else {
					echo "Username is available.";
				}
			} 
			else {
				$stmt=$conn->prepare("INSERT INTO users (name,username,email,password,created) VALUES (?,?,?,?,?)");
				$stmt->bind_param("sssss",$fname,$uname,$email,$pass,$created);
				if($stmt->execute()) {
					echo "Registeration is Successfull. Login Now";

				} else {
					echo "Something went wrong. Please try again.";
				}
			}
			
		}
	}

	//Login

	if(isset($_POST['action']) && $_POST['action'] == 'login') {
		session_start();

		$username = $_POST['username'];
		$password = sha1($_POST['password']);

		$stmt_l = $conn->prepare("SELECT * from users WHERE username=? AND password=?");
		$stmt_l->bind_param("ss",$username,$password);
		$stmt_l->execute();
		$user=$stmt_l->fetch();

		if($user != null) {
			$_SESSION['username']=$username;
			echo 'ok';

			if(!empty($_POST['remember'])) {
				setcookie('username',$_POST['username'],time()*(365*24*60*60));
				setcookie('password',$_POST['password'],time()*(365*24*60*60));
			}
			else {
				if(isset($_COOKIE["username"])) {
					setcookie("username","");
				}
				if(isset($_COOKIE["password"])) {
					setcookie("password","");
				}
			}
		}
		else {
			echo "Login Failed! Check the username and password. Try Again!";
		}
	}



	function check_input($data) {
		$data=trim($data);
		$data=stripslashes($data);
		$data=htmlspecialchars($data);
		return $data;
	}
?>