@include('layouts.app')
@extends('layouts.AdminDashboard')

@section('pageTitle',"admin Deshboard")


@section('profileImage')
{{ asset('argon/img/theme/team-1-800x800.jpg') }}
@endsection



@section('header','Dashboard')

@section('container')

<div class="text-center mt-5">
    <h1>Welcome Home {{$email}}</h1>
</div>

        

@endsection
