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

<table  class="table table-striped align-items-center">
    <thead class="thead-light">
      <tr>
        <th scope="col">Order NO</th>
        <th scope="col">Date</th>
        <th scope="col">Details</th>
        <th scope="col">Actions</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <td>0123</td>
        <td>2/05/2020</td>
        <td>xyz</td>
        <td><a class="btn btn-primary" href="{{ route('seller.order.details') }}"> Details</a>
            <a class="btn btn-danger" href="#cancel">Cancel</a>

            </td>
      </tr>
      <td>1123</td>
      <td>3/06/2020</td>
      <td>yst</td>
      <td><a class="btn btn-primary" href="{{ route('seller.order.details') }}"> Details</a>
        <a class="btn btn-danger" href="#cancel">Cancel</a>

        </td>
      </tr>

    </tbody>
</table>

@endsection




