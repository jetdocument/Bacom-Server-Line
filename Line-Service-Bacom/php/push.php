<?php

require ("php_config.cfg");
require ("php_function.fun");
include ('../bot.php');

try {
  $dbh = new PDO('mysql:host='.$servername.';dbname='.$dbname, $username, $password);
  $dbh->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  $dbh->setAttribute(PDO::MYSQL_ATTR_USE_BUFFERED_QUERY, true);
  $dbh->exec("set names utf8");
  $return['status'] = "Success";
  $return['message'] = "Mysqli Connected";
} catch (Exception $e) {
  $return['status'] = "error";
  $return['message'] = "Unable to connect to Mysql";
  $return['data']['error'] = $e->getMessage();
  die(json_encode($return));
}

$get_server_lists = "
		SELECT
		  *
		FROM
		  `server`
		WHERE
		  1
		ORDER BY `created_by`;";

try {	  
	  $stmt = $dbh->prepare($get_server_lists);
	  $stmt -> execute();
	  $result = $stmt->fetchAll();
	  foreach ($result as $key => $value) {
	  	
	  	$status = linkStatus($value['address']);	  	

	  	if ($status !== $value['status']) {
	  		
	  		$update = "UPDATE
	  		  `server`
	  		SET	  		  
	  		  `status` = '".$status."'	  		  
	  		WHERE
	  		`address` =  '".$value['address']."'";

	  		$get_token = "SELECT * FROM `user` WHERE `username` = '".$value['created_by']."'";
			$perpare = $dbh->prepare($get_token);
			$perpare -> execute();
			$token = $perpare->fetch();

	  		try {

	  			$update_stm = $dbh->prepare($update);
	  			$update_stm -> execute();
	  			$return['message'] = "UpdateComplete";
	  			
				$bot = new BOT_API($channelSecret, $access_token);
				$bot->sendMessageNew(
					$token['token'], 
					$value['name']." : ".$value['address']." : Status has been changed to ".$status);
				if ($bot->isSuccess()) {

				    $return['message'] = 'Line Succeeded!';				    
				} else {

					// Failed
					$return['message']  = $bot->response->getHTTPStatus . ' ' . $bot->response->getRawBody(); 

				}	
	  			
	  		} catch (Exception $e) {

	  			$return['message'] = "Cannot update";
	  			$return['data']['error'] = $e->getMessage();
	  			
	  		}


	  	}
	  }	  

	} catch (Exception $e) {
	  
	  $return['status']  = "error";
	  $return['message'] = "Can not get data";
	  $return['data']['error'] = $e->getMessage();
	  $dbh = null;
	} 

echo json_encode($return);


?>