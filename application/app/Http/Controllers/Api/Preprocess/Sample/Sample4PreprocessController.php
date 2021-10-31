<?php
namespace App\Http\Controllers\Api\Preprocess\Sample;

use App\Http\Controllers\Api\Preprocess\PreprocessControllerBase;
use App\Http\Controllers\Api\Sample\Sample4Controller;
use App\Http\Requests\Api\Sample\Sample4Request;

class Sample4PreprocessController extends PreprocessControllerBase
{
    public function index(Sample4Request $request, Sample4Controller $controller)
    {
        $requestData = $request->getRequest();
        $controller->setRequest($requestData);
        $controller->main();

        return $controller->getResponse();
    }
}
