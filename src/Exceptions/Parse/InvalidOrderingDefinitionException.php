<?php

namespace IgniteCareers\RestAPI\Exceptions\Parse;

use IgniteCareers\RestAPI\Exceptions\ApiException;
use IgniteCareers\RestAPI\Exceptions\ErrorCodes;

class InvalidOrderingDefinitionException extends ApiException
{
    protected $code = ErrorCodes::REQUEST_PARSE_EXCEPTION;

    protected $innerError = ErrorCodes::INNER_ORDERING_INVALID;

    protected $message = "Ordering defined incorrectly";
}