<h1 align="center">
H-Soft/Telegram-Bot
</h1>
<p align="center">
	<img width="200px" src="https://i.ibb.co/JQxDZWH/telegram.png">
</p>
<p align="center">
	
[![Latest Stable Version](http://poser.pugx.org/h-soft/telegram-bot/v)](https://packagist.org/packages/h-soft/telegram-bot) 
[![Latest Unstable Version](http://poser.pugx.org/h-soft/telegram-bot/v/unstable)](https://packagist.org/packages/h-soft/telegram-bot)
[![Total Downloads](http://poser.pugx.org/h-soft/telegram-bot/downloads)](https://packagist.org/packages/h-soft/telegram-bot) 
[![Daily Downloads](http://poser.pugx.org/h-soft/telegram-bot/d/daily)](https://packagist.org/packages/h-soft/telegram-bot)


</p>

Installation
------------

The preferred way to install this extension is through [composer](http://getcomposer.org/download/).

Either run

```
composer require h-soft/telegram-bot
```

or add

```
"h-soft/telegram-bot": "*"
```

to the require section of your `composer.json` file.

Method list usable
-----
list methods
```
SendMessage
CopyMessage
ForwardMessage
SendAudio
SendDocument
SendPhoto
SendVideo
```

Usage
-----
first add to config.php
```php
<?php
'components' => [
	'bot' => [
            'class' => 'h-soft\telegram\Telegram',
            'botToken' =>'bot-token',
        ],
]
?>
```
Once the extension is installed, simply use it in your code by  :
```php
<?php 
  Yii::$app->telegram
      ->SendMessage($chat_id,'TEST')(); 
?>
```

send photo by :
```php
<?php 
  Yii::$app->telegram
      ->sendPhoto($chat_id,Yii::$app->getBaseUrl().'/uploads/test.jpg')
      ->caption('this is a caption')
      ->parse_mode('html')
      ->protect_content(true)
      ->allow_sending_without_reply(true)(); 
?>
```



Usage in controller
-----

First of all you need to disable the enableCsrfValidation feature in the controller

The robot is currently running from your server
But when we start /start run the robot from the telegram application on the mobile, the request does not reach the action inside the controller because the telegram sends the request to the POST and yii requests it without csrf
Sends Bad Request (# 400). So then the code doesn't run inside your method

Consider the following example
```php
class SiteController extends Controller
{
	public $enableCsrfValidation = false;

	public function actionIndex()
    {
        $res = Yii::$app->bot->sendMessage($chat_id,'Hello World H-Soft')();
       
    }
}
```

## :bulb: Sample Code:


### How to get user chat_id from the bot ?
>__You can use : `$telegram->input->message->chat->id` to get chat_id__

Sample widget class :
```php
$res = Yii::$app->bot->sendMessage($bot->input->message->chat->id,"Hello QalandarDev")();
```

