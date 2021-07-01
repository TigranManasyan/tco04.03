<?php 
	require_once "../config/Database.php";

	class Image extends Database {
		public function uploadImage($img_url) {
			$sql = "INSERT INTO `images` (`name`) VALUES ('$img_url')";
			$this -> sql_db -> query($sql);
		}

		public function showImages() {
			$sql = "SELECT * FROM `images`";
			$result = $this -> sql_db -> query($sql);
			return $result -> fetch_all(MYSQLI_ASSOC);
		}
	}


 ?>