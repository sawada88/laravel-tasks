<?php

namespace App\Constants;

class JsonStatus
{
    const RESPONSE_OK = 200;
    const RESPONSE_OK_MESSAGE = 'status_message.json_status.response_ok';
    const VALIDATION_ERROR = 1101;
    const VALIDATION_ERROR_MESSAGE = 'status_message.json_status.validation_error';
    const FORMAT_ERROR = 1601;
    const FORMAT_ERROR_MESSAGE = 'status_message.json_status.format_error';
    const ACCOUNT_LOCK_ERROR = 1602;
    const ACCOUNT_LOCK_ERROR_MESSAGE = 'status_message.json_status.account_lock_error';
    const LOCKED_ACCOUNT_ERROR = 1603;
    const LOCKED_ACCOUNT_ERROR_MESSAGE = 'status_message.json_status.locked_account_error';
    const AUTH_ERROR = 1604;
    const AUTH_ERROR_MESSAGE = 'status_message.json_status.locked_account_error';
    const UNIQUE_ERROR = 1605;
    const UNIQUE_ERROR_MESSAGE = 'status_message.json_status.unique_error';
    const MAX_USER_ERROR = 1606;
    const MAX_USER_ERROR_MESSAGE = 'status_message.json_status.max_user_error';
    const AUTHORITY_ERROR = 1607;
    const AUTHORITY_ERROR_MESSAGE = 'status_message.json_status.authority_error';
    const LOCK_ERROR = 1608;
    const LOCK_ERROR_MESSAGE = 'status_message.json_status.lock_error';
    const SERVER_ERROR = 9001;
    const SERVER_ERROR_MESSAGE = 'status_message.json_status.server_error';
}
