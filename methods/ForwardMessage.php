<?php

namespace H_Soft\telegram\methods;


use H_Soft\telegram\base\Methods;

class ForwardMessage extends Methods
{
    protected string|int $chat_id;

    protected string|int $from_chat_id;

    protected int $message_id;

    protected bool|null $disable_notification = null;

    protected bool|null $protect_content = null;

    public function __construct($url, $chat_id, $from_chat_id, $message_id)
    {
        $this->SetUrl($url);
        $this->chat_id = $chat_id;
        $this->from_chat_id = $from_chat_id;
        $this->message_id = $message_id;
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
}