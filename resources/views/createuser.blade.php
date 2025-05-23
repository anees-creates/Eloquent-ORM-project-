<style>
form{
  width: 50%;
  margin: auto;
}
</style>

@extends('layout')

@section('content')
    <form action="{{route('users.store')}}" method = "POST" >
      @csrf
<div class="mb-3">
<label for="name" class="form-label">User Name</label>
<input type="text" class="form-control" name="name">
</div>
<div class="mb-3">
<label for="email" class="form-label">User Email</label>
<input type="email" class="form-control" name="email">
</div>
<div class="mb-3">
<label for="age" class="form-label">User Age</label>
<input type="number" class="form-control" name="age">
</div>
<div class="mb-3">
<label for="city" class="form-label">User City</label>
<input type="text" class="form-control" name="city">
</div>
<div class="mb-3">
<input type="submit" value="Save" class="btn btn-success">
</div>
</form>