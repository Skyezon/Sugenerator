@extends('./layouts/all')
@extends('./layouts/loading')
@section('title', 'Sucika untuk ')
@section('content')


{{--
<h1 class="sucika__header">Hello {{$Internal->name}}</h1>
<p class="sucika__body">{{$Internal->motivation}}</p>
<span class="sucika__footer">dari Richard</span> --}}

<label id="scene" for="ini" style="display: none">
    <a href="" type="button" data-depth="0.1" class="btn btn-primary" style="z-index: 101">
        ini tombol
    </a>
</label>
<main class="cd-main" style="overflow: visible">


    <ul class="cd-gallery" style="list-style: none; padding: 2rem;">
        <li class="cd-item" style="z-index: 1000; overflow: visible !important;">
            <a href="" id="ini" class="buttonku buttonku-1">
                <div>
                    <h1 id="ubah-judul-1">
                        Hello {{$Internal->name}}
                    </h1>
                    <button type="button" class="btn btn-primary button" id="ubah-button-1" style="height: 3rem; font-size: 1.2rem">
                        Click me!
                    </button>
                </div>
            </a>
        </li>

        <li class="cd-item">
            <a href="" class="buttonku buttonku-2">
                <div>
                    <h1 id="ubah-judul-2">
                        Hello {{$Internal->name}}
                    </h1>
                    <button type="button" class="btn btn-primary button" id="ubah-button-2" style="height: 3rem; font-size: 1.2rem;">
                        Click me!
                    </button>
                </div>
            </a>
        </li>
    </ul> <!-- .cd-gallery -->
</main> <!-- .cd-main -->


<div class="cd-folding-panel">

    <div class="fold-left"></div> <!-- this is the left fold -->

    <div class="fold-right"></div> <!-- this is the right fold -->

    <div class="cd-fold-content" style="height: 100vh">
        <!-- content will be loaded using javascript -->
        <div class="sucika">
        <div class="sucika__container">
            <h1 class="sucika__header " style="margin-bottom: 1rem">Hello {{$Internal->name}},</h1>
            <p class="sucika__body" style="font-size: 1.3rem">{{$Internal->motivation}}</p>
            <span class="sucika__footer">dari Richard</span>
        </div>
        </div>
    </div>

    <a class="cd-close" href="#0"></a>
</div> <!-- .cd-folding-panel -->


@endsection
