<?php
namespace App\Http\Controllers\Api\Preprocess\Sample;

use App\Http\Controllers\Api\Preprocess\PreprocessControllerBase;
use App\Http\Controllers\Api\Sample\Sample1Controller;
use App\Http\Requests\Api\Sample\Sample1Request;

class Sample1PreprocessController extends PreprocessControllerBase
{
    public function index(Sample1Request $request, Sample1Controller $controller)
    {
        $requestData = $request->getRequestData();
        $controller->setRequest($requestData);
        $result = $controller->main();

        return $controller->getResponse();
    }
}
