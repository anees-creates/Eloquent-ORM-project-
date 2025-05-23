<style>
form{
  width: 50%;
  margin: auto;
}
</style>

@extends('layout')

@section('content')
    <form action="{{route('users.update',$user->id)}}" method = "POST" >
      @csrf
      @method('PUT')
<div class="mb-3">
<label for="name" class="form-label">User Name</label>
<input type="text" class="form-control" name="name" value="{{$user->name}}">
</div>
<div class="mb-3">
<label for="email" class="form-label">User Email</label>
<input type="email" class="form-control" name="email" value="{{$user->email}}">
</div>
<div class="mb-3">
<label for="age" class="form-label">User Age</label>
<input type="number" class="form-control" name="age" value="{{$user->age}}">
</div>
<div class="mb-3">
<label for="city" class="form-label">User City</label>
<input type="text" class="form-control" name="city" value="{{$user->city}}">
</div>
<div class="mb-3">
<input type="submit" value="Save" class="btn btn-success">
</div>
</form>