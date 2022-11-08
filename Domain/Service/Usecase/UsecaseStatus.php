<?php

namespace Domain\Service\Usecase;

use Domain\Model\ValueObject\baseObjects\Enum;

class UsecaseStatus extends Enum
{
    const SUCCESS = 100;
    const FAIL = 200;
    const SAVE_ERROR = 201;
    const UPDATE_ERROR = 202;
    const DELETE_ERROR = 203;
    const ILLEGAL_ERROR = 204;
    const NO_DATA = 300;
    const DUPLICATE_EMAIL_REGISTRATION = 400;
    const AUTH_PASSWORD_ERROR = 500;
    const AUTH_ID_ERROR = 501;
    const UNIQUE_ERROR = 502;
    const MAX_USER_ERROR = 503;

    public static function with($value): UsecaseStatus
    {
        $instance = new self($value);

        return $instance;
    }
}
