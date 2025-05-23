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
<input type="text" class="form-control @error ('name')is-invalid @enderror" name="name" value="{{$user->name}}">
<span class="text-danger">
                @error('name')
                    {{$message}}
                @enderror
            </span>
</div>
<div class="mb-3">
<label for="email" class="form-label">User Email</label>
<input type="email" class="form-control @error ('email')is-invalid @enderror" name="email" value="{{$user->email}}">
<span class="text-danger">
                @error('email')
                    {{$message}}
                @enderror
            </span>
</div>
<div class="mb-3">
<label for="age" class="form-label">User Age</label>
<input type="number" class="form-control @error ('age')is-invalid @enderror" name="age" value="{{$user->age}}">
<span class="text-danger">
                @error('age')
                    {{$message}}
                @enderror
            </span>
</div>
<div class="mb-3">
<label for="city" class="form-label">User City</label>
<input type="text"class="form-control @error ('city')is-invalid @enderror" name="city" value="{{$user->city}}">
<span class="text-danger">
                @error('city')
                    {{$message}}
                @enderror
            </span>
</div>
<div class="mb-3">
<input type="submit" value="Save" class="btn btn-success">
</div>
</form>