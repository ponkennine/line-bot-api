<?php

// example: https://github.com/onlinetuts/line-bot-api/blob/master/php/example/chapter-01.php

include ('line-bot-api/php/line-bot.php');

$channelSecret = 'f54c6247fd26356e3f5042386c6e0c23';
$access_token  = 'eof3VX2K98/3HGwzPk0J5ZeGPXY6knaQ3nHmEcJGTJVAVMIrkZ+ozc8m/OpTgxOuqoCoW5cAlHy8VQkLNZlqG9eWl/P7GwO+ccdRlqhIgjXizsKiBxbjSH6IDfIg7PTTJc+MzKkySOzeTr//6Qyn6wdB04t89/1O/w1cDnyilFU=';

$bot = new BOT_API($channelSecret, $access_token);
	
if (!empty($bot->isEvents)) {
		
	$bot->replyMessageNew($bot->replyToken, json_encode($bot->message));

	if ($bot->isSuccess()) {
		echo 'Succeeded!';
		exit();
	}

	// Failed
	echo $bot->response->getHTTPStatus . ' ' . $bot->response->getRawBody(); 
	exit();

}
