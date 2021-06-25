@include('layouts.app')
@extends('layouts.AdminDashboard')

@section('pageTitle',"admin Deshboard")


@section('profileImage')
{{ asset('argon/img/theme/team-1-800x800.jpg') }}
@endsection



@section('header','Edit Profile')

@section('container')
<form>
    <div class="form-group">
        <label for="exampleInputEmail1" class="form-label">Name</label>
        <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
    </div>
    <div class="form-group">
        <label for="exampleInputEmail1" class="form-label">Email address</label>
        <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
    </div>
    <div class="form-group">
        <label for="exampleInputPassword1" class="form-label">Password</label>
        <input type="password" class="form-control" id="exampleInputPassword1">
        <div id="emailHelp" class="form-text">Password must be 8 characters with a combination of capital&small letters,numbers&special characters</div>
    </div>
    <div class="form-group">
        <label for="exampleInputEmail1" class="form-label">Number</label>
        <input type="number" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
        <div id="emailHelp" class="form-text">Must be 11 digits</div>
    </div>
    <button type="submit" class="btn btn-primary">Update</button>
</form>

        

@endsection
