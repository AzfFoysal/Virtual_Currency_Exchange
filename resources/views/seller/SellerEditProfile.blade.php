@include('layouts.app')
@extends('layouts.seller')

@section('pageTitle',"Seller Home")


@section('profileImage')
{{ asset('argon/img/theme/team-1-800x800.jpg') }}
@endsection
@section('profileName')
Fahad Molla
@endsection


@section('header','Home')

@section('container')

    <form>
        <div class="form-group">
            <label for="formFile" class="form-label">Change Profile Picture:</label> <br>
            <img src="https://supporthubstaffcom.lightningbasecdn.com/wp-content/uploads/2019/08/good-pic.png" class="rounded" alt="Cinque Terre" width="304" height="290">
            <br>
            <input class="form-control" type="file" id="sProfilePic">
        </div>
        <div class="form-group">
            <label class="form-label">Name</label>
            <input type="text" class="form-control" id="sName" value="Fahad Molla">
        </div>

        <div class="form-group">
            <label class="form-label">Address</label>
            <input type="text" class="form-control" id="sAddress" value="uttara,Dhaka 1230">
        </div>

        <div class="form-group">
            <label class="form-label">Email Address</label>
            <input type="email" class="form-control" id="sEmail" value="Fahad@gmail.com">
        </div>

        <div class="form-group">
            <label class="form-label">Password</label>
            <input type="password" class="form-control" id="sPassword">
        </div>
        <div class="form-group">
            <label class="form-label">Phone Number</label>
            <input type="number" class="form-control" id="sPhone" aria-describedby="emailHelp" value="0189333355545">
            <div id="mobileNoConstrainText" class="form-text">Must be 11 digits</div>
        </div>
        <button type="submit" class="btn btn-primary">Save</button>
        <a href="#"><button class="btn btn-danger">Cancel</button></a>
    </form>


@endsection




