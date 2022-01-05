<?php

namespace H_Soft\telegram\types;

class User
{
    public int $id;
    public bool $is_bot;
    public string $first_name;

    public ?string $last_name;
    public ?string $username;
    public ?string $language_code;
    public ?bool $can_join_groups;
    public ?bool $can_read_all_group_messages;
    public ?bool $supports_inline_queries;
}