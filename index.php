<?php 
require_once('./vendor/autoload.php'); 
 
// Namespace 
use \LINE\LINEBot\HTTPClient\CurlHTTPClient; 
use \LINE\LINEBot; 
use \LINE\LINEBot\MessageBuilder\TextMessageBuilder; 
 
$channel_token = 'MtuO5Zd6bo/VhRyI1Ogmb0K5y0C9bZONXP7EjbyBgVT+Szfj1bNadQBxenEYwcrti5Be5cCkVl8FAauJx56toP2UpIyR7KBryEpqbnYg9cZUT/75mt4AlLyAUexIrPh1gvx+RbPp5XEmzUmpEt5wQwdB04t89/1O/w1cDnyilFU='; 
$channel_secret = 'c34130f0e652b1d103f620ed4c06b567'; 
 
// Get message from Line API $content = file_get_contents('php://input'); $events = json_decode($content, true); 

$content = file_get_contents('php://input'); 
$events = json_decode($content, true);
 
if (!is_null($events['events'])) {
	// Loop through each event     
	foreach ($events['events'] as $event) {
	//  Line API send a lot of event type, we interested in message only.         
	if ($event['type'] == 'message') {
		switch($event['message']['type']) {                  
			case 'text':                       
				// Get replyToken                       
				$replyToken = $event['replyToken']; 
	
				// Reply message                       
				// $respMessage = 'Hello, your message is '. $event['message']['text']; 
				$respMessage = 'Hello, World my name is Narongrit Malila'; 
 
				$httpClient = new CurlHTTPClient($channel_token);
				$bot = new LINEBot($httpClient, array('channelSecret' => $channel_secret));
				$textMessageBuilder = new TextMessageBuilder($respMessage);
				$response = $bot->replyMessage($replyToken, $textMessageBuilder); 
				break;
			}
        }
    } 
}
 
// echo "MyLineApiDEBUG"; 





// $httpClient = new CurlHTTPClient($channel_token);
// $bot = new LINEBot($httpClient, array('channelSecret' => $channel_secret));
// $textMessageBuilder = new TextMessageBuilder($respMessage);
// $response = $bot->replyMessage($replyToken, $textMessageBuilder); 

?>
