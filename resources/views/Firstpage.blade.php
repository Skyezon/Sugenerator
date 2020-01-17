
@extends('./layouts/loading')
@section('title','Sucika dari Delbert')

@section('content')
<main class="d-flex justify-content-center flex-column align-items-center vh-100 ">
    <div id="scene" class="position-absolute vh-100 vw-100 bg-Img">
        <div data-depth="1">

        </div>
    </div>
    <div class="d-flex justify-content-center flex-column align-items-center isi">
        <label for="har">
            <h1 class="display-5 ">
                Malas scan barcode? input kodemu disini
            </h1>
        </label>
        <form enctype="multipart/form-data" method="POST" class="form-group d-flex flex-column" action={{ route('first.search') }}>
            @csrf
            @method('POST')
            <input id="har" type="text" maxlength="7" class="px-2 text-center my-3" name="token">
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>


</main>
@endsection
