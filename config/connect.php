<?php

error_reporting(E_ALL);
ini_set('display_error', 1);

try{
	$con= new PDO("mysql:host=localhost;dbname=mon_site;charset=utf8", 'root', '');
}catch(PDOException $e){
	die("error".$e->getMessage());
}

?>
