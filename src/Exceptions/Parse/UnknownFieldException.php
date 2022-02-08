<?php

namespace IgniteCareers\RestAPI\Exceptions\Parse;

use IgniteCareers\RestAPI\Exceptions\ApiException;
use IgniteCareers\RestAPI\Exceptions\ErrorCodes;

class UnknownFieldException extends ApiException
{

    protected $code = ErrorCodes::REQUEST_PARSE_EXCEPTION;

    protected $innerError = ErrorCodes::INNER_UNKNOWN_FILED_EXCEPTION;

    protected $message = "One of the specified fields does not exist";
}