<?php

namespace H_Soft\telegram\base;

use H_Soft\telegram\Traits\Url;
use yii\base\Component;

class TelegramBase extends Component
{
    use Url;

    private string $apiUrl = "https://api.telegram.org/bot";

    public string $botToken;

    public string $method;

    private string $url;

}