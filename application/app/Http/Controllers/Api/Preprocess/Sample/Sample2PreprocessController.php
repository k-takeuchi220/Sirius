<?php
namespace App\Http\Controllers\Api\Preprocess\Sample;

use App\Http\Controllers\Api\Preprocess\PreprocessControllerBase;
use App\Http\Controllers\Api\Sample\Sample2Controller;
use App\Http\Requests\Api\Sample\Sample2Request;

class Sample2PreprocessController extends PreprocessControllerBase
{
    public function index(Sample2Request $request, Sample2Controller $controller)
    {
        $requestData = $request->getRequest();
        $controller->setRequest($requestData);
        $controller->main();

        return $controller->getResponse();
    }
}
