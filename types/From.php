<?php

namespace H_Soft\telegram\types;

use H_Soft\telegram\base\Type;

class From extends Type
{
    public $id;

    public $update_id;

    public $is_bot;

    public $first_name;

    public $last_name;

    public $username;

    public $language_code;
}