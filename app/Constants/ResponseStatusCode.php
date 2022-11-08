<?php

namespace App\Constants;

/**
 * レスポンスコード定数クラス
 */
class ResponseStatusCode
{
    // 各多言語化メッセージはconstに定義できないので別ファイル参照
    public const RESPONSE_OK = 200;
    public const RESPONSE_OK_MESSAGE = 'status_message.response_status.success';
    public const RESPONSE_CREATED = 201;
    public const RESPONSE_ACCEPTED = 202;
    public const RESPONSE_NO_CONTENT = 204;
    public const RESPONSE_NO_CONTENT_MESSAGE = 'status_message.response_status.no_content';
    public const RESPONSE_BAD_REQUEST = 400;
    public const RESPONSE_UNAUTHORIZED = 401;
    public const RESPONSE_FORBIDDEN = 403;
    public const RESPONSE_NOT_FOUND = 404;
    public const RESPONSE_NOT_ACCEPTABLE = 406;
    public const SERVER_ERROR = 500;
    public const SERVER_ERROR_MESSAGE = 'status_message.response_status.server_error';
}
