<?php

declare(strict_types=1);

namespace App\Adapter\Converter;

use App\Constants\JsonStatus;
use App\Constants\ResponseStatusCode;

class JsonConverter
{
    protected $json;

    public function __construct()
    {
        $this->json = [
            'result' => true,
            'message' => __(JsonStatus::RESPONSE_OK_MESSAGE),
            'code' => JsonStatus::RESPONSE_OK,
            'data' => [],
        ];

        $this->status = ResponseStatusCode::RESPONSE_OK;
    }

    protected function returnResponse(): array
    {
        $response['json'] = $this->json;
        $response['status'] = $this->status;

        return $response;
    }
}
