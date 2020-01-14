@extends('./layouts/all')
@section('title','Sucika dari Delbert')

@section('content')
<main class="d-flex justify-content-center flex-column align-items-center vh-100 ">

    <label for="har">
        <h1 class="display-5 ">
            Malas scan barcode? input kodemu disini
        </h1>
    </label>
    <form enctype="multipart/form-data" method="POST" class="form-group">
        @csrf
        @method('POST')
        <input id="har" type="text" maxlength="5" class="px-2 text-center">
    </form>

</main>
@endsection
