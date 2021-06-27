@include('layouts.app')
@extends('layouts.seller')

@section('pageTitle',"change password")


@section('profileImage')
{{ asset('argon/img/theme/team-1-800x800.jpg') }}
@endsection
@section('visitProfile')
{{ route('seller.profile.index') }}
@endsection


@section('header','Change Password')

@section('container')
<form method="post" action='{{ route('seller.profile.update.password') }}' >

    @if (session()->has('msg'))
        <br>
        <div class="alert alert-primary" role="alert">
            <strong>{{session('msg')}}</strong>
        </div>
    @endif




    <div class="form-group">
        <label  class="form-label">Old password:</label>
        <input type="text" name="old_password" class="form-control" >
        <label class="errorText"> {{ $errors->first('old_password')}}</label>
    </div>

    <div class="form-group">
        <label " class="form-label">new password:</label>
        <input type="text" name="new_password" class="form-control" >
        <label class="errorText"> {{ $errors->first('new_password')}}</label>
    </div>

    <div class="form-group">
        <label  class="form-label">confrim new password:</label>
        <input type="text" name="new_password_confirmation" class="form-control" >
        <label class="errorText"> {{ $errors->first('confirm_new_password')}}</label>
    </div>



    <div class="form-group">
        <button type="submit" class="btn btn-primary">Post</button>
    </div>
</form>
@endsection




