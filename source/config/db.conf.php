<?php
define('STDERR',dirname(dirname(__FILE__)).'/temp/sql_queries.txt');
return array(
	'default' => array(
		'dsn'  =>  "mysql:host=".DB_HOST.";port=".DB_PORT.";dbname=greenphpdb",
		'username' => DB_USER,
		'password' => DB_PASS,
		'charset'  => 'UTF8',
	),
);
