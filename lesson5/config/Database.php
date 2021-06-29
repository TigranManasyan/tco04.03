<?php


class Database {
	const DB_HOST = 'localhost';
	const DB_USER = 'root';
	const DB_PASSWORD = '';
	const DB_NAME = 'tm_blog';
	protected $sql_db;
	public function __construct() {
		$this -> sql_db = new mysqli(self::DB_HOST, self::DB_USER, self::DB_PASSWORD, self::DB_NAME);
	}
}