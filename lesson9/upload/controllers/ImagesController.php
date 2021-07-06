<?php 
	require_once "../models/Image.php";
	$image = new Image;
	if(isset($_FILES['img'])) {
		$img_name = $_FILES['img']['name'];
		$img_tmp_name = $_FILES['img']['tmp_name'];
		@mkdir("../images");
		if(isset($img_name) && isset($img_tmp_name)) {
			$upload = move_uploaded_file($img_tmp_name, "../images/" . $img_name);
			if($upload) {
				$image -> uploadImage($img_name);
				header("location:../views/home.php");
			} else {
				echo "Faild!";
			}
		}

	}

	if(isset($_GET['action']) && $_GET['action'] == 'show') {
		echo json_encode($image->showImages());
	} else if(isset($_GET['action']) && $_GET['action'] == 'checkin') {
		$image -> checkImage($_GET['id'], $_GET['check']);
	} else if(isset($_GET['action']) && $_GET['action'] == 'delete') {
		echo $image -> oneDeleteImage($_GET['id']);
	} else if(isset($_GET['action']) && $_GET['action'] == 'delete_checks') {
		$image -> deleteCheckedImages();
	} 
?>