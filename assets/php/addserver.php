<?php
session_start();

if (!isset($_SESSION['data']['name'])) {
header('Location: index.html'); 
}


// echo $_REQUEST['name'].$_REQUEST['address'].$_REQUEST['group'];
// $_REQUEST['name'] = "NVR1";
// $_REQUEST['group'] = "AIA";
// $_REQUEST['address'] = "192.168.1.1";

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

$insert_server = "
		INSERT
		INTO
		  `server`(
		  	`created_by`,
		    `name`,
		    `group`,
		    `address`
		  )
		VALUES(
			'".$_SESSION['data']['username']."',
		  	'".$_REQUEST['name']."',
		  	'".$_REQUEST['group']."',
		  	'".$_REQUEST['address']."'
		)";

try {
	  $dbh->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	  $dbh->setAttribute(PDO::MYSQL_ATTR_USE_BUFFERED_QUERY, true);      
	  $dbh->beginTransaction();
	  $stmt = $dbh->prepare($insert_server);
	  $stmt -> execute(); 	                      
	  $dbh->commit();
	  $return['message'] = "Insert completed";

	} catch (Exception $e) {
	  $dbh->rollBack();
	  $return['status']  = "error";
	  $return['message'] = "Rollback Transaction";
	  $return['data']['error'] = $e->getMessage();
	  $dbh = null;
	} 

echo json_encode($return);

?>