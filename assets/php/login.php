<?php

// echo "login : ".$_REQUEST['username']."--".$_REQUEST['password'];

// $_REQUEST['username'] = "master";
// $_REQUEST['password'] = "1234";

require ("../config/php_config.cfg");

try {
  $dbh = new PDO('mysql:host='.$servername.';dbname='.$dbname, $username, $password);
  $dbh->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  $dbh->setAttribute(PDO::MYSQL_ATTR_USE_BUFFERED_QUERY, true);
  $return['status'] = "Success";
  $return['message'] = "Mysqli Connected";
} catch (Exception $e) {
  $return['status'] = "error";
  $return['message'] = "Unable to connect to Mysql";
  $return['data']['error'] = $e->getMessage();
  die(json_encode($return));
}

$get_correct_user = "
				SELECT
				  *
				FROM
				  `user`
				WHERE
				  	`username` = '".$_REQUEST['username']."' AND `password` = '".md5($_REQUEST['password'])."'";

try { 
	  $dbh->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	  $dbh->setAttribute(PDO::MYSQL_ATTR_USE_BUFFERED_QUERY, true);
	  $stmt = $dbh->prepare($get_correct_user);
	  $stmt -> execute(); 

	  if ($stmt->rowCount() > 0) {

	  	session_start();
	  	$_SESSION['data'] = $stmt -> fetch();
	  	$return['message'] = "Valid User";
	  	// $return['message'] = $_SESSION['data']['name'];

	  }	                      
	  
	  

	} catch (Exception $e) {
	  
	  $return['status']  = "error";
	  $return['message'] = "Uncorrected user or password";
	  $return['data']['error'] = $e->getMessage();
	  $dbh = null;
	} 

echo json_encode($return);

?>