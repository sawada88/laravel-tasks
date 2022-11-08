<?php

namespace Domain\Model\Exception;

use Exception;

class ValueObjectException extends Exception
{
    public function __construct($message = 'データ引数が不正です', $code = 1000)
    {
        parent::__construct($message, $code);
    }
}
