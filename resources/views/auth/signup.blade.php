@extends('layout')
@section('content')

@if($errors->any())
  @foreach($errors->all() as $error)
  <div class="alert alert-danger" role="alert">{{$error}}</div>
  @endforeach
@endif

<form action="/auth/registr" method="POST">
  @csrf
  <div class="mb-3">
    <label for="name" class="form-label">Name</label>
    <input type="text" class="form-control" id="name" name="name">
  </div>
  <div class="mb-3">
    <label for="email" class="form-label">Email</label>
    <input type="email" class="form-control" id="email" name="email">
  </div>
  <div class="mb-3">
    <label for="password" class="form-label">Password</label>
    <input type="password" class="form-control" id="password" name="password">
  </div>
  <div class="mb-3 form-check">
    <input type="checkbox" class="form-check-input" id="checkbox" name="checkbox">
    <label class="form-check-label" for="checkbox">Check me out</label>
  </div>
  <button type="submit" class="btn btn-primary">SignUp</button>
</form>
@endsection