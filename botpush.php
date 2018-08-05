<?php



require "vendor/autoload.php";

$access_token = 'ZERwG1f0dxKME/RYFhBVwoYatwuiADOgkiqN8Eh4CixfXUxi/YB2cPJcGCUCyHdIMRYroHjqfoXdaki9gQ2Vf4ddeEWTlNtywhdeYgTmzHQyzNzjVZ94vjekkelPEjBvWOD+lH9So9wVr1q+BrCzFwdB04t89/1O/w1cDnyilFU=';

$channelSecret = '55609e9ab0f8bcc68afc9ac038f49db8';

$pushID = 'U15551ee4cd979277ac04bc9232c20caa';

$httpClient = new \LINE\LINEBot\HTTPClient\CurlHTTPClient($access_token);
$bot = new \LINE\LINEBot($httpClient, ['channelSecret' => $channelSecret]);

$textMessageBuilder = new \LINE\LINEBot\MessageBuilder\TextMessageBuilder('hello world');
$response = $bot->pushMessage($pushID, $textMessageBuilder);

echo $response->getHTTPStatus() . ' ' . $response->getRawBody();







