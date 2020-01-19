@extends('./layouts/all')
@section('content')
[
@foreach ($Internals as $Internal)
<span>"{{$Internal->token}}",</span>
<br/>
@endforeach
]
<br>
<br>
[
@foreach ($Internals as $Internal)
<span>"{{$Internal->qrcodePath}}",</span>
<br>
@endforeach
]

@endsection


