@include('layouts.app')
@extends('layouts.buyer')

@section('pageTitle',"Seller Home")

@section('profileImage')
{{ asset('argon/img/theme/natsu.jpg') }}
@endsection
@section('profileName')
Mahbubur Rahman
@endsection


@section('header','History')
@section('showHistory','hidden')

@section('container')

    <table  class="table table-striped align-items-center table-dark">
        <thead class="thead-dark">
            <tr>
                <th scope="col">Seller Name</th>
                <th scope="col">Rating</th>
                <th></th>

              </tr>
            </thead>
            <tbody>
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

              <tr>
                <td>C</td>
                <td>4.7</td>
                <td><a href="#"><button class="btn btn-primary">Profile</button></a>
                </td>
              </tr>

              <tr>
                <td>D</td>
                <td>4.7</td>
                <td><a href="#"><button class="btn btn-primary">Profile</button></a>
                </td>
              </tr>
        </tbody>
    </table>


@endsection




