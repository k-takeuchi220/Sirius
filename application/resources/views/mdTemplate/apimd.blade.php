## {{strtoupper($method)}} {{$route}}

{{$comment}}  

Request  
| name | type | comment |
|:-----|:-----|:--------|
@if(empty($request))
| - | - | - |
@else
@foreach ($request as $req)
| {{$req['name']}} | {{$req['type']}} | {{$req['name']}} |
@endforeach
@endif

Response
| name | type | comment |
|:-----|:-----|:--------|
@if(empty($response))
| - | - | - |
@else
@foreach ($response as $res)
| {{$res['name']}} | {{$res['type']}} | {{$res['comment']}} |
@endforeach
@endif

