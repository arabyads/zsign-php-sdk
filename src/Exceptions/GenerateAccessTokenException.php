<?php

namespace zsign\Exceptions;

use Exception;

class GenerateAccessTokenException extends Exception
{
    public function __construct($data)
    {
        $data = is_array($data) || is_object($data) ? json_encode($data) : $data;
        parent::__construct("error occurred while generating access token: {$data}");
    }
}