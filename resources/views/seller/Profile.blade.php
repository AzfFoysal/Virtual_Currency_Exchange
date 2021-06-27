@include('layouts.app')
@extends('layouts.seller')

@section('pageTitle',"Profile")


@section('profileImage')
{{ asset('argon/img/theme/team-1-800x800.jpg') }}
@endsection
@section('profileName')
Fahad Molla
@endsection


@section('header','Profile')
@section('visitProfile')
{{ route('seller.profile.index') }}
@endsection

@section('container')


        <div class="form-group">
            <label for="formFile" class="form-label">Profile Picture:</label> <br>
            <img style="max-height:270px" src="@if ($user->profile_picture) {{asset($user->profile_picture)}} @else {{asset('seller/image/demo_profile.png')}} @endif" class="rounded" alt="Cinque Terre" >
            <br>
            {{-- <input class="form-control" type="file" > --}}
        </div>
        <div class="form-group">
            <label class="form-label">Name</label>
            <p>{{ $user->name }}</p>
        </div>

        <div class="form-group">
            <label class="form-label">Address</label>
            <p>{{ $user->address }}</p>
        </div>

        <div class="form-group">
            <label class="form-label">Email Address</label>
            <p>{{ $user->email }}</p>
        </div>


        <div class="form-group">
            <label class="form-label">Phone Number</label>
            <p>{{ $user->phone_number }}</p>
        </div>
        <div class="form-group">
            <label class="form-label">NID Number</label>
            <p>{{ $user->nid_number }}</p>
        </div>
        <div class="form-group">
            <label class="form-label">You have </label>
            <p>{{ $user->points }} Points</p>
        </div>
        <div class="form-group">
            <label class="form-label">Prime status</label>
            <p>{{ $user->prime_status }}</p>
        </div>

        <a href="{{ route('seller.profile.edit',$user->id) }}" class="btn btn-primary">Edit Profile</a>
        <a href="{{ route('seller.profile.change.password',$user->id) }}"class="btn btn-danger">Change password</a>



@endsection




