<?php
namespace App\Http\Controllers\Api\Preprocess\Sample;

use App\Http\Controllers\Api\Preprocess\PreprocessControllerBase;
use App\Http\Controllers\Api\Sample\Sample3Controller;
use App\Http\Requests\Api\Sample\Sample3Request;

class Sample3PreprocessController extends PreprocessControllerBase
{
    public function index(Sample3Request $request, Sample3Controller $controller)
    {
        $requestData = $request->getRequest();
        $controller->setRequest($requestData);
        $controller->main();

        return $controller->getResponse();
    }
}
