@extends('./layouts/all')
@section('title', 'Admin panel')

@section('content')
@if (session('status'))
<div class="alert alert-success">
    {{ session('status') }}
</div>
@endif

@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

<a name="" id="" class="btn btn-primary d-flex justify-content-center" href={{ route('Internal.form-add') }} role="button">ADD</a>
<table class="table table-striped table-responsive vw-75 d-table">
    <thead class="thead-inverse text-center">
        <tr class="table-head">
            <th>Name</th>
            <th>Motivation</th>
            <th>Token</th>
            <th>Role</th>
            <th>Dekat?</th>
            <th>Qrcode</th>
            <th>Action</th>
        </tr>
    </thead>
    <tbody class="text-center">
        @foreach ($Internals as $Internal)
        <tr class="table-v-align-middle">
            <td scope="row" class="w-25">{{$Internal->name}}</td>
            <td class="w-25">{{$Internal->motivation}}</td>
            <td>{{$Internal->token}}</td>
            <td>{{$Internal->role}}</td>
            <td>{{$Internal->isClose ? 'yes' : 'no'}}</td>
            <td><img src={{asset($Internal->qrcodePath)}}></td>
            <td style="height: 100px" class="d-flex justify-content-sm-around flex-row align-items-center">
                <a href={{ route('Internal.form-edit',['id' => $Internal->id]) }} class="btn btn-primary w-25">Edit</a>
                <form method="POST" class="w-100" action={{ route('Internal.delete',['id' => $Internal->id]) }}>
                    @method('DELETE')
                    @csrf
                    <button type="submit" class="btn btn-danger w-25">Delete</button>
                </form>
            </td>
        </tr>
        @endforeach
    </tbody>
    {{ $Internals->links() }}

</table>
@endsection
