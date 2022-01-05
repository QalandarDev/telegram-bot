<?php

namespace H_Soft\telegram\methods;


use H_Soft\telegram\base\Methods;

class SendMessage extends Methods
{
    protected string|int $chat_id;

    protected string $text;

    protected string|null $parse_mode = null;

    protected bool|null $disable_web_page_preview = null;

    protected bool|null $disable_notification = null;

    protected bool|null $protect_content = null;

    protected int|null $reply_to_message_id = null;

    protected bool|null $allow_sending_without_reply = null;

    public function __construct($url, $chat_id, $text)
    {
        $this->SetUrl($url);
        $this->chat_id = $chat_id;
        $this->text = $text;
    }

    public function parse_mode(string $string)
    {
        $this->parse_mode = $string;
        return $this;
    }

    public function disable_web_page_preview(bool $bool)
    {
        $this->disable_web_page_preview = $bool;
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
        return $this;
    }

    public function allow_sending_without_reply(bool $bool)
    {
        $this->allow_sending_without_reply = $bool;
        return $this;
    }
}