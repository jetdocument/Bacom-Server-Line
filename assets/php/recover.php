<?php


function randomPassword() {
    $alphabet = 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ1234567890';
    $pass = array(); //remember to declare $pass as an array
    $alphaLength = strlen($alphabet) - 1; //put the length -1 in cache
    for ($i = 0; $i < 8; $i++) {
        $n = rand(0, $alphaLength);
        $pass[] = $alphabet[$n];
    }
    return implode($pass); //turn the array into a string
}

$randomPassword = randomPassword();
require ("../config/php_config.cfg");
require ("../config/php_function.fun");
include ('../../Line-Service-Bacom/bot.php');

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

$get_data_user = "SELECT * FROM `user` WHERE `token` = '".$_REQUEST['token']."'";
$checkToken = $dbh->prepare($get_data_user);
$checkToken -> execute();
if ($checkToken->rowCount() > 0) {
	$update_pass = "UPDATE `user` SET `password` = '".md5($randomPassword)."' WHERE `token` = '".$_REQUEST['token']."'";			  	

try { 	  
	  $stmt = $dbh->prepare($update_pass);
	  $stmt -> execute();
	  $return['status']	= "Update Complete";
	  $return['message'] = $randomPassword;
	  

		$channelSecret = 'd14174dc7931918c4f6c2a7504ecc4e4';
		$access_token  = 'nLj7f1f8jId5ySXJsSIPCCukWAvCmC5NWp0OkkwU/Fe7GItfHoqg0K1xJ0NMaRbg5Tt0DLX98SnF68t14MDA4f/NINhO11h6WFm23QHd9bxr0cUC6NKxTIi3GhOcCUBNthtmtF/S3PUsH6bV0jByLQdB04t89/1O/w1cDnyilFU=';
		$bot = new BOT_API($channelSecret, $access_token);
		$bot->sendMessageNew($_REQUEST['token'], 'Your new password');
		$bot->sendMessageNew($_REQUEST['token'], $randomPassword);
		if ($bot->isSuccess()) {
		$return['message'] = 'Password has been sent!';		
		}
	  

	} catch (Exception $e) {
	  
	  $return['status']  = "error";
	  $return['message'] = "Incorrected Token ID";
	  $return['data']['error'] = $e->getMessage();
	  $dbh = null;
	}

} else {
	$return['status']	= "Error";
	$return['message'] = "Your token incorrected";
}

echo json_encode($return);


?>