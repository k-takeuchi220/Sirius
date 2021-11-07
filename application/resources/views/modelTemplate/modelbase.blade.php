
namespace App\Models\Base;

use Illuminate\Database\Eloquent\Model;

class {{$class}} extends Model
{
    protected $table = '{{$table}}';

@foreach ($columns as $column)
    public function get{{App\StringUtil::convertSnakeToUpperCamel($column)}}()
    {
        return $this->{{$column}};
    }

    public function set{{App\StringUtil::convertSnakeToUpperCamel($column)}}(${{App\StringUtil::convertSnakeToLowerCamel($table)}})
    {
        $this->{{$column}} = ${{App\StringUtil::convertSnakeToLowerCamel($table)}};
    }
@endforeach
}
