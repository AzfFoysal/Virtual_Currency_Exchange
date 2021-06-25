@include('layouts.app')
@extends('layouts.AdminDashboard')

@section('pageTitle',"admin Deshboard")


@section('profileImage')
{{ asset('argon/img/theme/team-1-800x800.jpg') }}
@endsection



@section('header','Transaction History')

@section('container')

<table class="table table-striped">
    <thead>
      <tr>
        <th scope="col">Product Name</th>
        <th scope="col">Buyer Email</th>
        <th scope="col">Seller Email</th>
        <th scope="col">Product Amount</th>
        <th scope="col">Price(TAKA)</th>
        <th scope="col">Date of Purchase</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <td>10$</td>
        <td>asd@gmail.com</td>
        <td>zxc@gmail.com</td>
        <td>2</td>
        <td>1700</td>
        <td>2-2-2021</td>
      </tr>
      <tr>
        <td>10rubel</td>
        <td>zxc@gmail.com</td>
        <td>qwe@gmail.com</td>
        <td>1</td>
        <td>1000</td>
        <td>7-6-2021</td>
      </tr>
      <tr>
        <td>10ars</td>
        <td>zxc@gmail.com</td>
        <td>asd@gmail.com</td>
        <td>5</td>
        <td>500</td>
        <td>9-7-2021</td>
      </tr>
    </tbody>
  </table>

        

@endsection
