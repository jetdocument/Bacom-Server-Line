<?php

require( "../config/php_config.cfg" );
require( "../config/php_function.fun" );
$dbh = new PDO('mysql:host='.$servername.';dbname='.$dbname, $username, $password);
$dbh->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
$dbh->setAttribute(PDO::MYSQL_ATTR_USE_BUFFERED_QUERY, true);
$dbh->exec("set names utf8");

$username = $_REQUEST['username'];

$delete_by_name = "DELETE FROM `user` WHERE `username` = '".$username."'";
$delete_server = "DELETE FROM `server` WHERE `created_by` = '".$username."'";

$stmt = $dbh -> prepare($delete_server);
$stmt -> execute(); 

$stmt = $dbh -> prepare($delete_by_name);
$stmt -> execute(); 

if ($stmt -> execute()>0) {
	# code...
	echo "Success";
} else {
	# code...
	echo "Please try again";
}

