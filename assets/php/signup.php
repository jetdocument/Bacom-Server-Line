<?php

// echo "signup : ".$_REQUEST['token']."--".$_REQUEST['username']."--".$_REQUEST['password'];

// $_REQUEST['token'] = "dvsvs";
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

$insert = "
			INSERT
			INTO
			  `user`(
			    `token`,
			    `name`,
			    `username`,
			    `password`			    
			  )
			VALUES(
			  '".$_REQUEST['token']."',
			  '".$_REQUEST['name']."',
			  '".$_REQUEST['username']."',
			  '".md5($_REQUEST['password'])."'
			)";

try {          

	  $dbh->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	  $dbh->setAttribute(PDO::MYSQL_ATTR_USE_BUFFERED_QUERY, true);      
	  $dbh->beginTransaction();
	  $stmt = $dbh->prepare($insert);
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
