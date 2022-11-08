<?php

namespace App\Adapter\Converter\GetData;

use App\Adapter\Converter\JsonConverter;
use App\Constants\JsonStatus;
use App\Constants\ResponseStatusCode;

class GetDataJsonConverter extends JsonConverter
{
    /**
     * jsonとして格納
     *
     * @param string $api_result
     * @return array
     */
    public function convert(string $api_result): array
    {
        $decoded = json_decode($api_result, true, 512);
        $this->json['data'] = $decoded;

        return $this->returnResponse();
    }

    /**
     * エラー時の配列として格納
     *
     * @return array
     */
    public function errorConvert(): array
    {
        $this->json['result'] = false;
        $this->json['message'] = __(JsonStatus::SERVER_ERROR_MESSAGE);
        $this->json['code'] = JsonStatus::SERVER_ERROR;
        $this->status = ResponseStatusCode::SERVER_ERROR;

        return $this->returnResponse();
    }
}
