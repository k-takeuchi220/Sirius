<?php

namespace App\Console;

use App\Consts\UserConst;

class CommandUtil
{
    public static function makeFile(string $path, string $content, int $mode): void
    {
        switch ($mode) {
            case UserConst::FILE_MODE_OVERRIDE:
                file_put_contents($path, $content);
                break;

            case UserConst::FILE_MODE_CREATE_NEW:
                if (!file_exists($path)) {
                    file_put_contents($path, $content);
                }
                break;
        }
    }
}
