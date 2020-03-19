<?php
$dbhost = 'localhost';
$dbname = 'arriva';
$dbuser = 'root';
$dbpass = '';

    $db = new PDO("mysql:host={$dbhost};dbname={$dbname};charset=utf8", $dbuser,$dbpass,
	array(PDO::ATTR_EMULATE_PREPARES => false,PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8" ,PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
