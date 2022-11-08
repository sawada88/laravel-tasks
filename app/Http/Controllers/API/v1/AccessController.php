<?php

namespace App\Http\Controllers\API\v1;

use App\Adapter\Converter\GetData\GetDataJsonConverter;
use App\Http\Controllers\Controller;
use App\Http\Requests\GetDataRequest;
use Domain\Model\ValueObject\baseObjects\ApiURL;
use Domain\Model\ValueObject\WidgetSetting\KeyValue;
use Domain\Service\Usecase\GetData\GetDataUsecaseInputImpl;
use Domain\Service\Usecase\UsecaseStatus;
use Domain\Service\UsecaseFactory\GetData\GetDataUsecaseFactory;
use Illuminate\Http\JsonResponse;
use Illuminate\Support\Facades\Log;

class AccessController extends Controller
{
    private $get_data_usecase;

    public function __construct()
    {
        $this->get_data_usecase = GetDataUsecaseFactory::createInstance();
    }

    /**
     * データ取得をAPI Serverに問い合わせる
     *
     * @param GetDataRequest       $request
     * @param GetDataJsonConverter $converter
     * @return JsonResponse
     */
    public function getData(GetDataRequest $request, GetDataJsonConverter $converter): JsonResponse
    {
        try {
            $input = GetDataUsecaseInputImpl::with(
                $request[KeyValue::CAMEL_COLUMN_NAME],
                $request[ApiURL::CAMEL_COLUMN_NAME],
            );
            $get_data_usecase_output = $this->get_data_usecase->execute($input);
            $results = $get_data_usecase_output->getResults();
            $usecase_results = $get_data_usecase_output->getUsecaseResult();
            if ($usecase_results->getValue() === UsecaseStatus::SUCCESS) {
                $response = $converter->convert($results);
            } else {
                $response = $converter->errorConvert();
            }
        } catch (\Exception $e) {
            $response = $converter->errorConvert();
            Log::error($e);
        }

        return $this->jsonResponse($response['json'], $response['status']);
    }
}
