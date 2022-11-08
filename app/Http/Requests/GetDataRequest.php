<?php

namespace App\Http\Requests;

use App\Constants\JsonStatus;
use App\Constants\ResponseStatusCode;
use Domain\Model\ValueObject\baseObjects\ApiURL;
use Domain\Model\ValueObject\WidgetSetting\KeyValue;
use Illuminate\Contracts\Validation\Validator;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Exceptions\HttpResponseException;

class GetDataRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            ApiURL::CAMEL_COLUMN_NAME => ApiURL::getValidateRule(),
            KeyValue::CAMEL_COLUMN_NAME => ['present', 'array'],
        ];
    }

    /**
     * apiエラーハンドリング
     *
     * @param Validator $validator
     * @return HttpResponseException
     */
    protected function failedValidation(Validator $validator): HttpResponseException
    {
        $response['result'] = false;
        $response['message']  = __(JsonStatus::VALIDATION_ERROR_MESSAGE);
        $response['code'] = JsonStatus::VALIDATION_ERROR;
        $response['data']  = [];

        throw new HttpResponseException(
            response()->json($response, ResponseStatusCode::RESPONSE_BAD_REQUEST)
        );
    }
}
