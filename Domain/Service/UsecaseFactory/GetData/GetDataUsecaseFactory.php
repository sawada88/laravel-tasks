<?php

namespace Domain\Service\UsecaseFactory\GetData;

use Domain\Service\Usecase\GetData\GetDataUsecase;
use Domain\Service\Usecase\GetData\GetDataUsecaseImpl;

class GetDataUsecaseFactory
{
    public static function createInstance(): GetDataUsecase
    {
        return GetDataUsecaseImpl::with();
    }
}
