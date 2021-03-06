<?php

require ("../config/php_config.cfg");
require ("../config/php_function.fun");
include ('bot.php');

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

	  		try {

	  			$update_stm = $dbh->prepare($update);
	  			$update_stm -> execute();
	  			$return['message'] = "UpdateComplete";

	  			$channelSecret = 'd14174dc7931918c4f6c2a7504ecc4e4';
				$access_token  = 'nLj7f1f8jId5ySXJsSIPCCukWAvCmC5NWp0OkkwU/Fe7GItfHoqg0K1xJ0NMaRbg5Tt0DLX98SnF68t14MDA4f/NINhO11h6WFm23QHd9bxr0cUC6NKxTIi3GhOcCUBNthtmtF/S3PUsH6bV0jByLQdB04t89/1O/w1cDnyilFU=';
				$bot = new BOT_API($channelSecret, $access_token);
				$bot->sendMessageNew(
					'Ua19821cd93141008d26221f16381d256', 
					'Send from Bacom Server !!');
				if ($bot->isSuccess()) {

				    $return['message'] = 'Line Succeeded!';
				    exit();
				}

				// Failed
				echo $bot->response->getHTTPStatus . ' ' . $bot->response->getRawBody(); 
				exit();
	  			
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