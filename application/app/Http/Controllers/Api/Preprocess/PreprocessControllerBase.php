<?php

namespace App\Http\Controllers\Api\Preprocess;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

class PreprocessControllerBase extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;
}
