<?php

namespace H_Soft\telegram\types;




use H_Soft\telegram\base\Type;

class Message extends Type
{

    public $message_id;

    private $_from;

    private $_chat;

    public $date;

    public $forward_from;

    public $forward_from_chat;

    public $forward_from_message_id;

    public $forward_signature;

    public $forward_sender_name;

    public $forward_date;

    public $reply_to_message;

    public $edit_date;

    public $media_group_id;

    public $author_signature;

    public $text;

    public $entities;

    public $caption_entities;

    public $audio;

    public $document;

    public $animation;

    public $game;

    public $photo;

    public $sticker;

    public $video;

    public $voice;

    public $video_note;

    public $caption;

    public $contact;

    public $location;

    public $venue;

    public $poll;

    public $new_chat_members;

    public $left_chat_member;

    public $new_chat_title;

    public $new_chat_photo;

    public $delete_chat_photo;

    public $group_chat_created;

    public $supergroup_chat_created;

    public $channel_chat_created;

    public $migrate_to_chat_id;

    public $migrate_from_chat_id;

    public $pinned_message;

    public $invoice;

    public $successful_payment;

    public $connected_website;

    public $passport_data;

    public $reply_markup;








    /**
     *
     */
    public function getFrom()
    {
        return $this->_from;
    }

    /**
     *
     */
    public function setFrom($value)
    {
        $this->_from = new From($value);
    }

    /**
     *
     */
    public function getChat()
    {
        return $this->_chat;
    }

    /**
     *
     */
    public function setChat($value)
    {
        $this->_chat = new Chat($value);
    }

}