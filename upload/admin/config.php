<?php
// Error Reporting Turn On
ini_set('error_reporting', E_ALL);

// Setting up the time zone
date_default_timezone_set('Asia/Dhaka');

// Host Name
$dbhost = 'localhost';

// Database Name
$dbname = 'epulsecart';
	
// Database Username
$dbuser = 'root';

// Database Password --(Abdul didn't put password in db phpmyadmin--- password is blank.)
$dbpass = '';

// Defining base url
define("BASE_URL", "http://yourwebsite.com/");

// Getting Admin url
define("ADMIN_URL", BASE_URL . "admin" . "/");


// Abdul trying to connect my sql
// mysql_connect("$dbhost", "$dbname", "$dbpass"); 

try {
	$pdo = new PDO("mysql:host={$dbhost};dbname={$dbname}" , $dbuser, $dbpass);
	$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
}
catch( PDOException $ex ) {
    echo "Connection error :" . $ex->getMessage();
}
?>