<?php

include ('bot.php');

$channelSecret = 'd14174dc7931918c4f6c2a7504ecc4e4';
$access_token  = 'nLj7f1f8jId5ySXJsSIPCCukWAvCmC5NWp0OkkwU/Fe7GItfHoqg0K1xJ0NMaRbg5Tt0DLX98SnF68t14MDA4f/NINhO11h6WFm23QHd9bxr0cUC6NKxTIi3GhOcCUBNthtmtF/S3PUsH6bV0jByLQdB04t89/1O/w1cDnyilFU=';
$bot = new BOT_API($channelSecret, $access_token);
$bot->sendMessageNew(
	'Ua19821cd93141008d26221f16381d256', 
	'Send from Bacom Server !!');
if ($bot->isSuccess()) {
    echo 'Succeeded!';
    exit();
}
// Failed
echo $bot->response->getHTTPStatus . ' ' . $bot->response->getRawBody(); 
exit();

?>
