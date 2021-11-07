<?php

namespace App;

class StringUtil
{
    public static function convertSnakeToUpperCamel($str) {
        return str_replace(' ', '', ucwords(str_replace('_', ' ', $str)));
    }
    
    public static function convertSnakeToLowerCamel($str) {
        return str_replace(' ', '', lcfirst(ucwords(str_replace('_', ' ', $str))));
    }
}
