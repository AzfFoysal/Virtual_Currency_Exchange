@include('layouts.app')
@extends('layouts.AdminDashboard')

@section('pageTitle',"admin Deshboard")


@section('profileImage')
{{ asset('argon/img/theme/team-1-800x800.jpg') }}
@endsection



@section('header','User Report')

@section('container')

<table class="table table-striped">
    <thead>
      <tr>
        <th scope="col">User Email</th>
        <th scope="col">Issue</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <td>asd@gmail.com</td>
        <td>Requesting for password recovery.</td>
      </tr>
      <tr>
        <td>qwe@gmail.com</td>
        <td>Seller did not devliver product in time. Seller name "zxc".</td>
      </tr>
      <tr>
        <td>zxc@gmail.com</td>
        <td>Prime feature is not working properly.</td>
      </tr>
    </tbody>
  </table>
        

@endsection
