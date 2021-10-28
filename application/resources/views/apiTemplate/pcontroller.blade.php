namespace App\Http\Controllers\Api\Preprocess\{{$dir}};

use App\Http\Controllers\Api\Preprocess\PreprocessControllerBase;
use App\Http\Controllers\Api\{{$dir}}\{{$name}}Controller;
use App\Http\Requests\Api\{{$dir}}\{{$name}}Request;

class {{$name}}PreprocessController extends PreprocessControllerBase
{
    public function index({{$name}}Request $request, {{$name}}Controller $controller)
    {
        $requestData = $request->getRequest();
        $controller->setRequest($requestData);
        $controller->main();

        return $controller->getResponse();
    }
}
