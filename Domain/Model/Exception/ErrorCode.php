<?php

namespace Domain\Model\Exception;

use Domain\Model\ValueObject\baseObjects\Enum;

class ErrorCode extends Enum
{
    const THE_STRING_IS_EMPTY                          = 1000;
    const THE_LENGTH_OF_THE_STRING_IS_INCORRECT        = 1001;
    const THE_NUMBER_IS_NOT_SPECIFIED                  = 1002;
    const THE_SPECIFIED_STRING_IS_NOT_THE_CORRECT_DATE = 1003;
    const THE_STRING_FORMAT_IS_INCORRECT               = 1004;
}
