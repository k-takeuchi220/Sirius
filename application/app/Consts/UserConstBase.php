<?php

namespace App\Consts;

class UserConstBase
{
    // file paths
    public const REQUEST_PATH = './App/Http/Requests/Api';

    public const PCONTROLLER_PATH = './App/Http/Controllers/Api/Preprocess';

    public const CONTROLLER_PATH = './App/Http/Controllers/Api';

    public const MODEL_PATH = './App/Models';
    
    public const MODEL_BASE_PATH = './App/Models/Base';

    public const API_JSON_PATH = './generator/api';

    public const API_MD_PATH = './md/api';

    public const CLASS_MD_PATH = './md/class';

    public const API_ROUTES_PATH = './routes/api.php';

    // file output mode
    public const FILE_MODE_OVERRIDE = 1;

    public const FILE_MODE_CREATE_NEW = 2;
    


}