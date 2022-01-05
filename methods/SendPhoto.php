<?php

namespace H_Soft\telegram\methods;


use aki\telegram\types\File;
use H_Soft\telegram\base\Methods;
use yii\helpers\VarDumper;

class SendPhoto extends Methods
{
    protected string|int $chat_id;

    protected string $photo;

    protected ?string $caption = null;

    protected ?string $parse_mode = null;

    protected ?array $caption_entities = null;

    protected ?bool $disable_notification = null;

    protected ?bool $protect_content = null;

    protected ?int $reply_to_message_id = null;

    protected ?bool $allow_sending_without_reply = null;

    public function __construct($url, $chat_id, $photo)
    {
        $this->SetUrl($url);
        $this->chat_id = $chat_id;
        $this->photo = $photo;
    }

    public function caption(string $string)
    {
        $this->caption = $string;
        return $this;
    }

    public function parse_mode(string $string)
    {
        $this->parse_mode = $string;
        return $this;
    }

    public function caption_entities(array $array)
    {
        $this->caption_entities = $array;
        return $this;
    }

    public function disable_notification(bool $bool)
    {
        $this->disable_notification = $bool;
        return $this;
    }

    public function protect_content(bool $bool)
    {
        $this->protect_content = $bool;
        return $this;
    }

    public function reply_to_message_id(int $int)
    {
        $this->reply_to_message_id = $int;
    }

    public function allow_sending_without_reply(bool $bool)
    {
        $this->allow_sending_without_reply = $bool;
        return $this;
    }
}