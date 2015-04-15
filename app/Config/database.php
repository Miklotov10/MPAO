<?php
class DATABASE_CONFIG {
	/*
	public $default = array(
		'datasource' => 'Database/Mysql',
		'persistent' => false,
		'host' => 'localhost',
		'login' => 'root',
		'password' => 'root',
		'database' => 'ateneo',
	);
	*/
	
	public $default = array(
		'datasource' => 'Database/Mysql',
		'persistent' => false,
		'host' => '127.0.0.1',
		'port' => 8889,
		'login' => 'root',
		'password' => 'root',
		'database' => 'ateneo',
		'unix_socket' => '/Applications/MAMP/tmp/mysql/mysql.sock',
		//'encoding' => 'utf8'
	);
	
	public $test = array(
		'datasource' => 'Database/Mysql',
		'persistent' => false,
		'host' => 'localhost',
		'login' => 'user',
		'password' => 'password',
		'database' => 'test_database_name',
	);
}
