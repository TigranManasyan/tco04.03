<?php
	require_once '../config/Database.php';
	session_start();
	class User extends Database {
		public function register($firstname, $lastname, $date, $email, $password, $avatar) {
			$sql = $this -> sql_db -> query("INSERT INTO `users` VALUES (Null, '$firstname', '$lastname', '$date', '$email', '$password', '$avatar')");
			if($sql) {
				$_SESSION['success'] = "Registered!";
				header("location:../views/auth/Login.php");
			} else {
				$_SESSION['error'] = "Register faild!";
				header("location:../views/auth/Register.php");
			}
		}
	}