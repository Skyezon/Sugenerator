@extends('./layouts/all')
@section('title', 'Sucika untuk {{$Internal->name}}')
<main>
    <h1>Hello {{$Internal->name}}</h1>
    <p>{{$Internal->motivation}}</p>
</main>
