<?php

namespace App\Http\Requests\Api;

use App\Consts\ExitCodeConst;
use App\Exceptions\FinishProcess;
use Illuminate\Http\Request;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Contracts\Validation\Validator;

class RequestBase extends FormRequest
{
    // TODO : sessionチェックとvalidation

    public function __construct(Request $request)
    {
        // sessionチェックは一旦、行わない

        // if (!isset($data['cuid'])) {
        //     throw new \Exception('cuid not found.');
        // }

        // if ($data['cuid'] != $cuid) {
        //     throw new \Exception('cuid session check error.');
        // }
    }

    public function getRequest(): array
    {
        return $this->validated();
    }

    public function failedValidation(Validator $validator): void
    {
        $errors = $validator->errors()->toArray();
        $message =  reset($errors)[0];
        $code = ExitCodeConst::FAILD_VALIDATION_REQUEST;
        $status = 422;

        throw new FinishProcess($message, $code, $status);
    }
}
