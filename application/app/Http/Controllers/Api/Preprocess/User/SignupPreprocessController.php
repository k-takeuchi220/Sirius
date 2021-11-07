<?php
namespace App\Http\Controllers\Api\Preprocess\User;

use App\Http\Controllers\Api\Preprocess\PreprocessControllerBase;
use App\Http\Controllers\Api\User\SignupController;
use App\Http\Requests\Api\User\SignupRequest;

class SignupPreprocessController extends PreprocessControllerBase
{
    public function index(SignupRequest $request, SignupController $controller)
    {
        $requestData = $request->getRequest();
        $controller->setRequest($requestData);
        $controller->main();

        return $controller->getResponse();
    }
}
