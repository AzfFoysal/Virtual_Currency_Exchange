@include('layouts.app')
@extends('layouts.seller')

@section('pageTitle',"Seller Home")


@section('profileImage')
{{ asset('argon/img/theme/team-1-800x800.jpg') }}
@endsection
@section('profileName')
Fahad Molla
@endsection
@section('visitProfile')
{{ route('seller.profile.index') }}
@endsection

@section('header','Home')

@section('container')

    <table  class="table table-striped">
        <thead>
        <tr>
            <th scope="col">Order NO</th>
            <th scope="col">Date</th>
            <th scope="col">Details</th>
            <th scope="col">status</th>
            <th scope="col">View</th>
        </tr>
        </thead>
        <tbody>
        <tr>
            <td>0123</td>
            <td>2/05/2020</td>
            <td>xyz</td>
            <td>Completed</td>
            <td><a href="{{ route('seller.statement.details') }}" class="btn btn-primary">Details</a></td>
        </tr>
        <td>1123</td>
        <td>3/06/2020</td>
        <td>yst</td>
        <td>Cancel</td>
        <td></td>
        </tr>

        </tbody>
    </table>

@endsection




