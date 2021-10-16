
namespace App\Http\Requests\Api\{{$dir}};

use App\Http\Requests\Api\RequestBase;

class {{$name}}Request extends RequestBase
{
    public function rules()
    {
        return [
@foreach ($request as $req)
            <?php
                $type = BladeFunc::convertToRequest($req['type']);
                $name = $req['name'];
                echo empty($type) ?: "'${name}' => '${type}',";
            ?>   
@endforeach
        ];
    }
}