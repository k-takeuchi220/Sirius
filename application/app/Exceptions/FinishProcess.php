<?php

namespace App\Exceptions;

use App\Consts\ExitCodeConst;
use Illuminate\Http\Exceptions\HttpResponseException;

class FinishProcess
{
    public function __construct(string $message, int $code = ExitCodeConst::NORMAL, int $status = 500)
    {
        $data = [
            'status' => $status,
            'code' => $code,
            'message' => $message,
        ];

        $response = response()->json($data, $status);
        throw new HttpResponseException($response);
    }
}
