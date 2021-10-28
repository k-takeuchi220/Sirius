
namespace App\Http\Requests\Api\{{$dir}};

use App\Http\Requests\Api\RequestBase;

class {{$name}}Request extends RequestBase
{
    public function rules()
    {
        return [
@foreach ($request as $req)
            <?php
                $rule = $req['rule'];
                $name = $req['name'];
                empty($rule) ?: print "'${name}' => '${rule}',".PHP_EOL;
            ?>
@endforeach
@foreach ($params as $param)
            '{{$param}}' => 'required|string',
@endforeach
        ];
    }
@if(!empty($params))

    public function validationData()
    {
        return array_merge($this->request->all(), [
@foreach ($params as $param)
            '{{$param}}' => $this->{{$param}},
@endforeach
        ]);
    }
@endif
}