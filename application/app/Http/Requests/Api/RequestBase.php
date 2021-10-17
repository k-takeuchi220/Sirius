<?php

namespace App\Http\Requests\Api;

use Illuminate\Http\Request;

use Illuminate\Foundation\Http\FormRequest;

class RequestBase extends FormRequest
{
    protected $requestData;
    // TODO : sessionチェックとvalidation

    public function __construct(Request $request)
    {
        $content = $request->getContent();
        $data = json_decode($content, true);
        $this->requestData = $data;

        // sessionチェックは一旦、行わない

        // if (!isset($data['cuid'])) {
        //     throw new \Exception('cuid not found.');
        // }

        // if ($data['cuid'] != $cuid) {
        //     throw new \Exception('cuid session check error.');
        // }
    }

    public function getRequestData(): array
    {
        return $this->requestData;
    }

    // /**
    //  * Determine if the user is authorized to make this request.
    //  *
    //  * @return bool
    //  */
    // public function authorize()
    // {
    //     return true;
    // }

    // /**
    //  * Get the validation rules that apply to the request.
    //  *
    //  * @return array
    //  */
    // public function rules()
    // {
    //     return self::$rules;
    // }
}
