<?php

namespace H_Soft\telegram\methods;


use aki\telegram\types\File;
use H_Soft\telegram\base\Methods;
use yii\helpers\VarDumper;

class SendVideo extends Methods
{
    protected string|int $chat_id;
    protected string $video;

    protected ?int $duration = null;
    protected ?int $width=null;
    protected ?int $height=null;
    protected ?bool $supports_streaming=null;
    protected ?string $thumb = null;
    protected ?string $caption = null;
    protected ?string $parse_mode=null;
    protected ?array $caption_entities = null;
    protected ?bool $disable_content_type_detection=null;
    protected ?bool $disable_notification = null;
    protected ?bool $protect_content = null;
    protected ?int $reply_to_message_id = null;
    protected ?bool $allow_sending_without_reply = null;

    public function __construct($url, $chat_id, $document)
    {
        $this->SetUrl($url);
        $this->chat_id = $chat_id;
        $this->document = $document;
    }

    public function duration(int $int){
        $this->duration = $int;
        return $this;
    }
    public function width(int $int){
        $this->width = $int;
        return $this;
    }
    public function height(int $int){
        $this->height = $int;
        return $this;
    }
    public function supports_streaming(bool $bool){
        $this->supports_streaming=$bool;
        return $this;
    }
    public function thumb(string $string){
        $this->thumb = $string;
        return $this;
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
    public function disable_content_type_detection(bool $bool){
        $this->disable_content_type_detection=$bool;
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