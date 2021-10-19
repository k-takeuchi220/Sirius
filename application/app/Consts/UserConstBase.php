<?php

namespace App\Consts;

class UserConstBase
{
    // file paths
    public const REQUEST_PATH = './App/Http/Requests/Api';

    public const PCONTROLLER_PATH = './App/Http/Controllers/Api/Preprocess';

    public const CONTROLLER_PATH = './App/Http/Controllers/Api';

    public const API_JSON_PATH = './generator/api';

    public const API_MD_PATH = './md/api';

    public const CLASS_MD_PATH = './md/class';

    // file output mode
    public const MODE_OVERRIDE = 1;

    public const MODE_CREATE_NEW = 2;
    


}