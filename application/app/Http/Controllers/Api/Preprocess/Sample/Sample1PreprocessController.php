<?php
namespace App\Http\Controllers\Api\Preprocess\Sample;

use App\Http\Controllers\Api\Preprocess\PreprocessControllerBase;
use App\Http\Controllers\Api\Sample\Sample1Controller;
use App\Http\Requests\Api\Sample\Sample1Request;

class Sample1PreprocessController extends PreprocessControllerBase
{
    public function index(Sample1Request $request, Sample1Controller $controller)
    {
        $result = $controller->main();
        return $result;
    }
}
