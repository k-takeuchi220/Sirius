<?php

namespace App\Http\Controllers\Api;

class ControllerBase
{
    protected $request;

    protected $response;

    public function setRequest(array $request): void
    {
        $this->request = $request;
    }

    public function getResponse()
    {
        return response()->json($this->response);
    }
}
