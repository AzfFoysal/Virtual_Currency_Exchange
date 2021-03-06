@include('layouts.app')
@extends('layouts.AdminDashboard')

@section('pageTitle', 'admin')


@section('header', 'User Info')

@section('container')
<br><br>
    
    <center>
        <a href="{{ route('addAdmin') }}"><button type="button"
            class="btn btn-primary">Add Another Admin</button></a>
    </center><br><br>

    <nav class="navbar navbar-light bg-light">
        <div class="container-fluid">
            <form class="d-flex" type="get" action= "{{ route('userSearch') }}">
            <input class="form-control me-2" name=query type="search" placeholder="Search User by Name" aria-label="Search">
            <button class="btn btn-outline-success" type="submit">Search</button>
            </form>
    </div>
    </nav>


    <table class="table table-striped mt-5">
        <thead>
            <tr>
                <th scope="col">ID</th>
                <th scope="col">Name</th>
                <th scope="col">Email</th>
                <th scope="col">Password</th>
                <th scope="col">Address</th>
                <th scope="col">Phone Number</th>
                <th scope="col">NID Picture</th>
                <th scope="col">NID Number</th>
                <th scope="col">Prime Status</th>
                <th scope="col">Approved By</th>
                <th scope="col">Profile Picture</th>
                <th scope="col">Status</th>
                <th scope="col">Points</th>
                <th scope="col">Type</th>
                <th scope="col">CREATED_AT</th>
                <th scope="col">UPDATED_AT</th>
                <th scope="col">Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($adminViewAllUserInfo as $users)
                <tr>
                    <td>{{ $users->id }}</td>
                    <td>{{ $users->name }}</td>
                    <td>{{ $users->email }}</td>
                    <td>{{ $users->password }}</td>
                    <td>{{ $users->address }}</td>
                    <td>{{ $users->phone_number }}</td>
                    <td>{{ $users->nid_card_picture }}</td>
                    <td>{{ $users->nid_number }}</td>
                    <td>{{ $users->prime_status }}</td>
                    <td>{{ $users->aproved_by }}</td>
                    <td>{{ $users->profile_picture }}</td>
                    <td>{{ $users->status }}</td>
                    <td>{{ $users->points }}</td>
                    <td>{{ $users->type }}</td>
                    <td>{{ $users->created_at }}</td>
                    <td>{{ $users->updated_at }}</td>
                    <td>
                        <a href="{{ route('adminEditUserInfo',$users->id) }}"><button type="button"
                                class="btn btn-warning">Edit</button></a>
                        <a href="{{ route('adminDeleteUserInfo',$users->id) }}"><button type="button"
                                class="btn btn-danger">Delete</button></a>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>



@endsection
