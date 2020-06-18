<?php
$koneksi = mysqli_connect("localhost","root","","akademik");
function open_connection() {
	$hostname = "localhost";
	$username = "root";
	$password = "";
	$dbname   = "akademik";
	$koneksi  = mysqli_connect($hostname, $username, $password, $dbname);
	return $koneksi;

	try
		{
		$dbh = new PDO("mysql:host=".hostname.";dbname=".dbname,username, password,array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES 'utf8'"));
		}
	catch (PDOException $e)
		{
		exit("Error: " . $e->getMessage());
		}
}
?> 