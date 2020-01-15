@extends('./layouts/all')
@section('title', 'Sucika untuk {{$Internal->name}}')
<main class="sucika">
    <div class="sucika__container">
        <h1 class="sucika__header">Hello {{$Internal->name}}</h1>
        <p class="sucika__body">{{$Internal->motivation}}</p>
        <span class="sucika__footer">dari Richard</span>
    </div>
</main>
