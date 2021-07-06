<?php
class Database {
	const DATABASE_HOST = 'localhost';
	const DATABASE_ROOT = 'root';
	const DATABASE_PASSWORD = '';
	const DATABASE_NAME = 'edo';
	protected $conn;
	static public function connect() {
		return mysqli_connect(self::DATABASE_HOST, self::DATABASE_ROOT, self::DATABASE_PASSWORD, self::DATABASE_NAME);
	}
}