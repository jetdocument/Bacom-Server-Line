<?php
include ('bot.php');

$channelSecret = 'd14174dc7931918c4f6c2a7504ecc4e4';
$access_token  = 'nLj7f1f8jId5ySXJsSIPCCukWAvCmC5NWp0OkkwU/Fe7GItfHoqg0K1xJ0NMaRbg5Tt0DLX98SnF68t14MDA4f/NINhO11h6WFm23QHd9bxr0cUC6NKxTIi3GhOcCUBNthtmtF/S3PUsH6bV0jByLQdB04t89/1O/w1cDnyilFU=';

#$url = 'https://api.line.me/v1/oauth/verify';
#$headers = array('Authorization: Bearer ' . $access_token);
#$ch = curl_init($url);
#curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
#curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
#curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
#$result = curl_exec($ch);
#curl_close($ch);
#$curl_obj = json_decode($result);
#echo $curl_obj->{'channelId'}."<br/>";
#echo $curl_obj->{'mid'}."<br/>";

#    public $content         = null;
#    public $events          = null;	
#    public $isEvents        = false;
#    public $isText          = false;
#    public $isImage         = false;
#    public $isSticker       = false;
	
#    public $text            = null;
#    public $replyToken      = null;
#    public $source          = null;
#    public $userId          = null;
#    public $userType        = null;    
#    public $message         = null;
#    public $timestamp       = null;
	
#    public $response        = null;


$bot = new BOT_API($channelSecret, $access_token);

$bot->verify(access_token);
	
if (!empty($bot->isEvents)) {

	if ($bot->text == "getEvent") {
		# code...
		$bot->replyMessageNew($bot->replyToken, json_encode($bot->events));
	} else {
		# code...
			function availableUrl($host, $port=80, $timeout=10) {
			  $fp = fSockOpen($host, $port, $errno, $errstr, $timeout); 
			  return $fp!=false;
			}

			if ($bot->text == "Signup") {
				# code...
				$bot->replyMessageNew	($bot->replyToken, 
					"Your ID : "
					."\n".$bot->userId
					."\n"."Link to signup : "		
				);
			} else {
				# code...
				$bot->replyMessageNew	($bot->replyToken, 
					"Hi"
					."\n"."Welcome to Bacom Internetwork"
					."\n"."List of action below"
					."\n".": Signup"
				);
			}
			
		
	  //       $linkState = availableUrl($bot->text);
	        
	  //       if ($linkState == true) {

	  //       	$bot->replyMessageNew	($bot->replyToken, 
			// 		"Your ID : ".$bot->userId
			// 		."\n"."Link UP"
			// 		."\n"."Your Link : ".$bot->text					
			// 		."\n"."Link IP : ".gethostbyname($bot->text)
			// 	);					
			// } else {

			// 	$bot->replyMessageNew	($bot->replyToken, 
			// 		"Your ID : ".$bot->userId
			// 		."\n"."Link DOWN"
			// 		."\n"."Your Link : ".$bot->text					
			// 		."\n"."Link IP : ".gethostbyname($bot->text)
			// 	);				
			// }
		
	}	

	

	//Return "true" if the url is available, false if not.
		
	
	#$bot->replyMessageNew($bot->replyToken, json_encode($bot->events));
	
		
	if ($bot->isSuccess()) {
		echo 'Succeeded!';
		exit();
	}

	// Failed
	echo $bot->response->getHTTPStatus . ' ' . $bot->response->getRawBody(); 
	exit();
}


?>
