@extends('./layouts/all')

@section('content')
<div class="d-flex justify-content-start align-items-center flex-row flex-wrap">
    @foreach ( $Internals as $Internal)
    <div class="d-flex justify-content-center align-items-center flex-column m-2">
        <div>{{$Internal->name}}</div>
        <div>scan this please :)</div>
        <div class="d-flex justify-content-center align-items-center flex-row nowrap">
            <span>&rarr;</span><img src="{{asset($Internal->qrcodePath)}}" alt="qrcode">
        </div>
        <i>or</i>
        <div>Your secret token is : <strong>{{$Internal->token}}</strong></div>
        <div>The website is http://richarddelbert.epizy.com/sucika/</div>
    </div>
    @endforeach
</div>
@endsection
