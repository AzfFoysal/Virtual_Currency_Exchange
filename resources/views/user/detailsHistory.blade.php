@include('layouts.app')
@extends('layouts.buyer')

@section('pageTitle',"Seller Home")


@section('profileImage')
{{ asset('argon/img/theme/natsu.jpg') }}
@endsection
@section('profileName')
Mahbubur Rahman
@endsection

@section('showSearch','hidden')

@section('header','History')

@section('container')

    <table  class="table table-striped align-items-center table-dark">
        <tbody>
            <tr>
              <td>Order No</td>
              <td>1</td>
            </tr>
            <tr>
              <td>date</td>
              <td>1/2/2020</td>
            </tr>
            <tr>
              <td>Seller Name</td>
              <td>ABC</td>
            </tr>
            <tr>
              <td>Seller phone</td>
              <td>01734234624</td>
            </tr>
            <tr>
              <td>Transaction Method</td>
              <td>Bkash</td>
            </tr>
            <tr>
              <td>Details</td>
              <td>134</td>
            </tr>

          </tbody>
        </table>
    <form method="post">
        <div class="form-group">
            <label for="exampleInputEmail1" class="form-label">Give a review</label>
            <input type="number" name="review" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
        </div>
        <div class="form-group">
            <label for="exampleInputEmail1" class="form-label">Give a rating</label>
            <input type="number" name="rating" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
        </div>
        <div class="form-group">
            <button type="submit" class="btn btn-success">Ok</button>
        </div>
    </form>
        <a href="{{ route('user.history') }}"><button class="btn btn-danger">Back</button></a>
        </tbody>
    </table>


@endsection




