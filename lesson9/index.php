<?php 
// PDO -> PHP Database Object

class  Database {
	protected $db;
	public function __construct() {
		try {
			$this -> db = new PDO("mysql:host=localhost;dbname=edu", "root", "");
			// echo "Connected";
			$this -> db ->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
			$this -> db -> setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
			return $this -> db;
		} catch (PDOException $error) {
			echo "Dont connected ~ " . $error -> getMessage();
		}
	}

	public function select() {
		$sql = "SELECT * FROM `categories`";
		$result = $this -> db -> query($sql);
		return json_encode($result -> fetchAll());
	}

	public function insert($name) {
		try{
			$sql = "INSERT INTO `catedsgories` (`name`) VALUES ('$name')";
			$this -> db -> query($sql);
			// echo "Inserted";
		} catch(PDOException $error) {
			echo "Faild! MySQL error ~ " . $error -> getMessage();
		}
		
	}
}

$x = new Database;
// echo $x -> select();
$x -> insert("Book");


 ?>