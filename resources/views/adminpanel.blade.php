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

<table class="table table-striped table-responsive vw-75 d-table">
    <thead class="thead-inverse text-center">
        <tr class="table-head">
            <th>Name</th>
            <th>Motivation</th>
            <th>Token</th>
            <th>Role</th>
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
            <td style="height: 100px" class="d-flex justify-content-sm-around flex-row align-items-center">
                <button type="button" class="btn btn-primary w-25">Edit</button>
                <button type="button" class="btn btn-danger w-25">Delete</button>

            </td>
        </tr>
        @endforeach
    </tbody>
</table>
@endsection
