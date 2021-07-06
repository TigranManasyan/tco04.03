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

		public function checkImage($id, $action) {
			$sql = "UPDATE `images` SET `checked` = $action WHERE `id` = '$id'";
			$result = $this -> sql_db -> query($sql);
		}

		public function oneDeleteImage($id) {
			$sql = "SELECT `name` FROM `images` WHERE `id` = '$id'";
			$result = $this -> sql_db -> query($sql);
			$img_name = $result -> fetch_all(MYSQLI_ASSOC);
			unlink("../images/" . $img_name[0]['name']);
			$sql1 = "DELETE FROM `images` WHERE `id` = '$id'";
			$result1 = $this -> sql_db -> query($sql1);
		}

		public function deleteCheckedImages() {
			$sql = "SELECT `name` FROM `images` WHERE `checked` = 1";
			$result = $this -> sql_db -> query($sql);
			$img_name = $result -> fetch_all(MYSQLI_ASSOC);
			for($i = 0; $i < count($img_name); $i++) {
				unlink("../images/" . $img_name[$i]['name']);
			}
 			
			$sql1 = "DELETE FROM `images` WHERE `checked` = 1";
			$result1 = $this -> sql_db -> query($sql1);
		}
	}

 ?>