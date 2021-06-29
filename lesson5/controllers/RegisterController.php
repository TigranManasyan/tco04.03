<?php 
	require_once "../Models/User.php";

	$firstname = $lastname = $date = $email = $password = $rec_password = $avater = "";

	if(isset($_POST['first_name']) && isset($_POST['last_name']) && isset($_POST['birth_date']) && isset($_POST['email']) && isset($_POST['password']) && isset($_POST['rec_password'])) {

		$firstname = $_POST['first_name'];
		$lastname = $_POST['last_name'];
		$date = $_POST['birth_date'];
		$email = $_POST['email'];
		$password = $_POST['password'];
		$rec_password = $_POST['rec_password'];
		$avatar_url = $_FILES['img']['tmp_name'];
		$avatar = $_FILES['img']['name'];
		@mkdir("../views/images");
		move_uploaded_file($avatar_url, "../views/images/" . $avatar);
			if($password === $rec_password) {
				$user = new User;
				$password = md5($password);
				$user -> register($firstname, $lastname, $date, $email, $password, $avatar);
			}
		

	} 


 ?>