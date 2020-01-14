@extends('../layouts/all')


<form class="form-group p-5" enctype="multipart/form-data" action={{route($route,$keyValue ?? '') }} method="POST">
    @yield('method')
    @csrf
  <label for="name">Name</label>
  <input value='{{ $Internal->name  ?? ''}}' type="text" name="name" id="name" class="form-control my-" placeholder="Input name here">

  <label for="motivation">Motivation</label>
  <textarea name="motivation" id="motivation" class="form-control my-" placeholder="Input Motivation here" rows="5">{{ $Internal->motivation ?? '' }}</textarea>

  <label for="token">token</label>
  <input value='{{ $Internal->token  ?? ''}}' type="text" disabled="disabled" name="token" id="token" class="form-control my-" placeholder="Token will be auto generate">

  <label for="role">role</label>
  <input value='{{ $Internal->role ?? '' }}' type="text"  name="role" id="role" class="form-control my-" placeholder="Input role here">

  <button type="submit" class="btn btn-primary">Submit</button>
</form>



