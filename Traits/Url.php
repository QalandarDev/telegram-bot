<?php

namespace H_Soft\telegram\Traits;

trait Url{
    protected function SetUrl(string $url = null)
    {
        if ($url) {
            return $this->url = $url;
        }
        return $this->url = $this->apiUrl . $this->botToken . "/" . $this->method;
    }

    protected function GetUrl()
    {
        return $this->url;
    }

}