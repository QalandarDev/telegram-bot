<?php

namespace H_Soft\telegram\Traits;

use H_Soft\telegram\methods\CopyMessage;
use H_Soft\telegram\methods\ForwardMessage;
use H_Soft\telegram\methods\SendDocument;
use H_Soft\telegram\methods\SendMessage;
use H_Soft\telegram\methods\SendPhoto;
use H_Soft\telegram\methods\SendVideo;

trait Method
{
    public function SendMessage(int|string $chat_id, string $text): SendMessage
    {
        $this->method = __FUNCTION__;
        return new SendMessage($this->SetUrl(), $chat_id, $text);
    }

    public function ForwardMessage(int|string $chat_id, int|string $from_chat_id, int $message_id): ForwardMessage
    {
        $this->method = __FUNCTION__;
        return new ForwardMessage($this->SetUrl(), $chat_id, $from_chat_id, $message_id);
    }

    public function CopyMessage(int|string $chat_id, int|string $from_chat_id, int $message_id): CopyMessage
    {
        $this->method = __FUNCTION__;
        return new CopyMessage($this->SetUrl(), $chat_id, $from_chat_id, $message_id);
    }

    public function SendPhoto(int|string $chat_id, string $photo): SendPhoto
    {
        $this->method = __FUNCTION__;
        return new SendPhoto($this->SetUrl(), $chat_id, $photo);
    }

    public function SendDocument(int|string $chat_id, string $document): SendDocument{
        $this->method = __FUNCTION__;
        return new SendDocument($this->SetUrl(), $chat_id, $document);
    }
    public function SendVideo(int|string $chat_id, string $video): SendVideo{
        $this->method = __FUNCTION__;
        return new SendVideo($this->SetUrl(), $chat_id, $video);
    }
}