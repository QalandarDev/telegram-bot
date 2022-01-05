<?php
namespace H_Soft\telegram;

use H_Soft\telegram\base\Input;
use H_Soft\telegram\base\TelegramBase;
use H_Soft\telegram\Traits\Method;
use H_Soft\telegram\Traits\Request;

class Telegram extends TelegramBase
{
    use Method,
        Request;
    public ?Input $_input;
    protected function getInput()
    {
        if (empty($this->_input)) {
            $input = file_get_contents('php://input');
            if (!$input) {
                $this->_input = null;

            } else {
                try {

                    $array = json_decode($input, true, 512, JSON_THROW_ON_ERROR);
                    $this->_input = new Input($array);

                }
                catch (\Exception $ex) {
                    return $ex->getMessage();
                }
            }
        }

        return $this->_input;
    }
}