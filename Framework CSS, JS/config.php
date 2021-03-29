<?php

$pdo = new PDO(
		'mysql:host=localhost;dbname=framework;',
		'root',
		'',
		array(PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8')
	);
	$pdo->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_WARNING);
  $white = "";
  $btnclr =  " light-green accent-3";
 ?>
