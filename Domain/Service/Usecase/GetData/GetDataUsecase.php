<?php

namespace Domain\Service\Usecase\GetData;

use Domain\Model\ValueObject\baseObjects\ApiURL;
use Domain\Service\Usecase\UsecaseStatus;
use GuzzleHttp\Client;
use GuzzleHttp\Exception\GuzzleException;
use Illuminate\Database\Eloquent\Collection;

use Illuminate\Support\Facades\Log;

interface GetDataUsecase
{
    /**
     * API Serverのデータを取得する
     *
     * @param GetDataUsecaseInput $input
     * @return GetDataUsecaseOutput
     */
    public function execute(GetDataUsecaseInput $input): GetDataUsecaseOutput;
}

interface GetDataUsecaseInput
{
    /**
     * APIの呼び出しパラメータ
     *
     * @return array
     */
    public function getKeyValue(): array;

    /**
     * 呼び出したいAPIのurl
     *
     * @return string
     */
    public function getApiURL(): string;
}

interface GetDataUsecaseOutput
{
    /**
     * Usecaseの結果を返す
     *
     * @return UsecaseStatus
     */
    public function getUsecaseResult(): UsecaseStatus;

    /**
     * フェッチデータを返す
     *
     * @return Collection
     */
    public function getResults(): string;
}

class GetDataUsecaseImpl implements GetDataUsecase
{
    /**
     * instance作成
     *
     * @return self
     */
    public static function with(): self
    {
        $instance = new self;

        return $instance;
    }

    public function execute(GetDataUsecaseInput $input): GetDataUsecaseOutput
    {
        // 受け取ったパラメータの整形
        $params = [];
        foreach ($input->getKeyValue() as $value) {
            $params = array_merge($params, $value);
        }

        // APIを呼び出すURLを構築
        // $domain = config('app.insight_domain');

        // パラメータを、定義値の中から一致するものに置き換え
        // ※ 想定外の値でAPI呼び出さないようにするため
        // $api_url = ApiURL::with($input->getApiURL());
        // $path = '/' . $api_url->getValue() . '?';

        // $query = http_build_query($params);
        // $url =  $domain . $path . $query;

        try {
            // $client = new Client();
            // $response = $client->request('GET', $url);
            $body = "test";
            // Log::debug('ApiURL {url: ' . $url . ', status: ' . $response->getStatusCode() . ', result: ' . $body . '}');

            return GetDataUsecaseOutputImpl::with(UsecaseStatus::with(UsecaseStatus::SUCCESS), $body);
        } catch (GuzzleException $e) {
            // API通信時にエラーが発生した
            Log::error('GuzzleException:'.$e);

            return GetDataUsecaseOutputImpl::with(UsecaseStatus::with(UsecaseStatus::FAIL), $e->getTraceAsString());
        }
    }
}

class GetDataUsecaseInputImpl implements GetDataUsecaseInput
{
    private array $key_value;
    private string $api_url;

    public static function with(array $key_value, string $api_url): self
    {
        $instance = new self;

        $instance->key_value = $key_value;
        $instance->api_url = $api_url;

        return $instance;
    }

    public function getKeyValue(): array
    {
        return $this->key_value;
    }

    public function getApiURL(): string
    {
        return $this->api_url;
    }
}

class GetDataUsecaseOutputImpl implements GetDataUsecaseOutput
{
    private UsecaseStatus $status;
    private string $results;

    public static function with(UsecaseStatus $status, string $results): self
    {
        $instance = new self;

        $instance->status = $status;
        $instance->results = $results;

        return $instance;
    }

    public function getUsecaseResult(): UsecaseStatus
    {
        return $this->status;
    }

    public function getResults(): string
    {
        return $this->results;
    }
}
