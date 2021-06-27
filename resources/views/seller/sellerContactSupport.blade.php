@include('layouts.app')
@extends('layouts.seller')

@section('pageTitle',"seller Contact Support")


@section('profileImage')
{{ asset('argon/img/theme/team-1-800x800.jpg') }}
@endsection
@section('profileName')
Fahad Molla
@endsection
@section('visitProfile')
{{ route('seller.profile.show','1') }}
@endsection

@section('header','Contact Support')

@section('container')

<form >

    <div class="form-group">
        <label for="floatingTextarea2">Write to Support...</label>
        <textarea class="form-control" placeholder="write.." id="floatingTextarea2" style="height: 100px"></textarea>

    </div>

    <button type="submit" class="btn btn-primary">Submit</button>
</form>

@endsection




