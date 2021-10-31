<?php

namespace App\Consts;

class ExitCodeConst
{
    public const NORMAL = 0;

    // request validation失敗
    public const FAILD_VALIDATION_REQUEST = 100;

    // アクセスしようとしたデータが見つからない
    public const NOT_FOUND = 200;

}