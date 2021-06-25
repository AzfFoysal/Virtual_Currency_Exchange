@include('layouts.app')
@extends('layouts.AdminDashboard')

@section('pageTitle',"admin Deshboard")


@section('profileImage')
{{ asset('argon/img/theme/team-1-800x800.jpg') }}
@endsection



@section('header','User Info')

@section('container')

<table class="table table-striped">
    <thead>
      <tr>
        <th scope="col">Name</th>
        <th scope="col">Email</th>
        <th scope="col">Password</th>
        <th scope="col">Number</th>
        <th scope="col">Type</th>
        <th scope="col">Prime Status</th>
        <th scope="col">Seller Status</th>
        <th scope="col">Action</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <td>asd</td>
        <td>asd@gmail.com</td>
        <td>111</td>
        <td>01700000000</td>
        <td>admin</td>
        <td>-</td>
        <td>-</td>
        <td><a href="/adminEditUserInfo"><button type="button" class="btn btn-warning">Edit</button></a> <button type="button" class="btn btn-danger">Delete</button></td>
      </tr>
      <tr>
        <td>qwe</td>
        <td>qwe@gmail.com</td>
        <td>222</td>
        <td>01200000000</td>
        <td>user</td>
        <td>prime</td>
        <td>verified</td>
        <td><a href="/adminEditUserInfo"><button type="button" class="btn btn-warning">Edit</button></a> <button type="button" class="btn btn-danger">Delete</button></td>
      </tr>
      <tr>
        <td>zxc</td>
        <td>zxc@gmail.com</td>
        <td>333</td>
        <td>01900000000</td>
        <td>user</td>
        <td>normal</td>
        <td>unverified</td>
        <td><a href="/adminEditUserInfo"><button type="button" class="btn btn-warning">Edit</button></a> <button type="button" class="btn btn-danger">Delete</button></td>
      </tr>
    </tbody>
  </table>

        

@endsection
