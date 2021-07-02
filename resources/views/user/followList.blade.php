@include('layouts.app')
@extends('layouts.buyer')

@section('pageTitle',"Seller Home")

@section('profileImage')
{{ asset('buyer/'.Session::get('photo')) }}
@endsection
@section('profileName')
{{ Session::get('name') }}
@endsection


@section('header','History')
@section('showHistory','hidden')

@section('container')

    <table  class="table table-striped align-items-center table-dark">
        <thead class="thead-dark">
            <tr>
                <th scope="col">Seller Name</th>
                <th scope="col">Phone Number</th>

              </tr>
            </thead>
            <tbody>
<<<<<<< HEAD
              <tr>
                <td>A</td>
                <td>4.7</td>
                <td><a href="#"><button class="btn btn-primary">Profile</button></a>
                </td>
              </tr>

              <tr>
                <td>B</td>
                <td>4.3</td>
                <td><a href="#"><button class="btn btn-primary">Profile</button></a>
                </td>
              </tr>
=======
                @foreach ($follows as $follow)

                <tr>
                    <td> {{ $follow->userName }} </td>
                    <td> {{ $follow->phone_number }} </td>
                </tr>
>>>>>>> 1b19f41f168ec30c148880b6ef63b89f1702e2fb

            @endforeach
        </tbody>
    </table>


@endsection




