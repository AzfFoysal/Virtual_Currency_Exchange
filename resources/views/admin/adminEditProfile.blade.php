@include('layouts.app')
@extends('layouts.AdminDashboard')

@section('pageTitle', 'admin Deshboard')




@section('header', 'Edit Profile')

@section('container')

    <form>
        <div class="form-group">
            <label for="formFile" class="form-label">Change Profile Picture:</label> <br>
            <img src="{{ asset('admin/default_pic.png') }}" class="rounded" alt="Cinque Terre" width="304" height="290">
            <br>
            <input class="form-control" type="file" id="sProfilePic">
        </div>
        <div class="form-group">
            <label class="form-label">Name</label>
            <input type="text" class="form-control" id="sName" value="">
        </div>

        <div class="form-group">
            <label class="form-label">Email Address</label>
            <input type="email" class="form-control" id="sEmail" value="">
        </div>

        <div class="form-group">
            <label class="form-label">Password</label>
            <input type="password" class="form-control" id="sPassword">
        </div>

        <div class="form-group">
            <label class="form-label">Address</label>
            <input type="text" class="form-control" id="sAddress" value="">
        </div>

        <div class="form-group">
            <label class="form-label">Phone Number</label>
            <input type="number" class="form-control" id="sPhone" aria-describedby="emailHelp" value="">
            <div id="mobileNoConstrainText" class="form-text">Must be 11 digits</div>
        </div>

        <div class="form-group">
            <label for="formFile" class="form-label">NID Picture:</label> <br>
            <img src="{{ asset('admin/default_pic.png') }}" class="rounded" alt="Cinque Terre" width="304" height="290">
            <br>
            <input class="form-control" type="file" id="sProfilePic">
        </div>

        <div class="form-group">
            <label class="form-label">NID Number</label>
            <input type="text" class="form-control" id="sAddress" value="">
        </div>

        <button type="submit" class="btn btn-primary">Save</button>
    </form>



@endsection
