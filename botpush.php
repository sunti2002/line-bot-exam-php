<?php



require "vendor/autoload.php";

$access_token = 'd0BomhzWbUf6hYZZurDyZ4SuzEqAtKifunTlCKLm+in9Hui3oTWqrz0P8Dx2GHl++yCHvnKfBQJOG9K/xh0L0mp+ML7ohZf306509nMcUOa8HcSCtgq04BehM3FdJHpXQFS5SKBj/mOK/mzj0qIMxgdB04t89/1O/w1cDnyilFU=';

$channelSecret = '571e4863f1855c6bce55bddfc65e44ad';

$pushID = 'U961d86d4d527433a7ad4bba9cf6448d7';

$httpClient = new \LINE\LINEBot\HTTPClient\CurlHTTPClient($access_token);
$bot = new \LINE\LINEBot($httpClient, ['channelSecret' => $channelSecret]);

$textMessageBuilder = new \LINE\LINEBot\MessageBuilder\TextMessageBuilder('Hello World!!');
$response = $bot->pushMessage($pushID, $textMessageBuilder);

echo $response->getHTTPStatus() . ' ' . $response->getRawBody();







