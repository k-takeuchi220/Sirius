<?php

namespace App;

class BladeFunc
{
    public static function convertToRequest(string $request): ?string
    {
        $type = null;
        switch ($request) {
            case 'int':
            case 'uint':
                $type = 'integer';
                break;
            
            case 'bool':
                $type = 'boolean';
                break;
    
            case 'string':
                $type = $request;
                break;

            default:
                if (strpos($request, '[]') !== false) {
                    $type = 'array';
                }
                break;
        }
        return $type;
    }
}
