@extends('layout')
@section('title')
All users data   
@endsection
@section('content')
<h2 class="mb-0 text-primary">User List</h2>
            <a href="{{ route('users.create') }}" class="btn btn-success shadow-sm">
                <i class="bi bi-plus-lg me-2"></i> Add New User
            </a>
        </div>

        <div class="card shadow-sm rounded-3 overflow-hidden"> <div class="card-body p-0">
                <div class="table-responsive">
                    <table class="table table-striped table-hover align-middle mb-0">
                        <thead class="table-primary text-white"> <tr>
                                <th scope="col" class="py-3 px-4">#</th>
                                <th scope="col" class="py-3 px-4">Name</th>
                                <th scope="col" class="py-3 px-4">Email</th>
                                <th scope="col" class="py-3 px-4">Age</th>
                                <th scope="col" class="py-3 px-4">City</th>
                                <th scope="col" class="py-3 px-4 text-center">Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($users as $user)
                            <tr>
                                <th scope="row" class="py-3 px-4">{{ $user->id }}</th>
                                <td class="py-3 px-4">{{ $user->name }}</td>
                                <td class="py-3 px-4">{{ $user->email }}</td>
                                <td class="py-3 px-4">{{ $user->age }}</td>
                                <td class="py-3 px-4">{{ $user->city }}</td>
                                <td class="py-3 px-4 text-center">
                                    <a href="{{ route('users.show', $user->id) }}" class="btn btn-outline-info btn-sm me-2">View</a>
                                    <a href="{{ route('users.edit', $user->id) }}" class="btn btn-outline-primary btn-sm me-2">Edit</a>
                                    <form action="{{ route('users.destroy', $user->id) }}" method="POST" class="d-inline">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-outline-danger btn-sm" onclick="return confirm('Are you sure you want to delete this user?');">Delete</button>
                                    </form>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
            @endsection