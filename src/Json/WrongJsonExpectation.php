<?php

namespace Rezzza\RestApiBehatExtension\Json;

use Rezzza\RestApiBehatExtension\ExpectationFailed;

class WrongJsonExpectation extends ExpectationFailed
{
    private $json;

    public function __construct($message, Json $json, $previous = null)
    {
        $this->json = $json;
        parent::__construct($message, 0, $previous);
    }

    public function getContextText()
    {
        return $this->json->encode(true);
    }
}
