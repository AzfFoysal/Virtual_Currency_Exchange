@include('layouts.app')
@extends('layouts.seller')

@section('pageTitle',"Upgrade to prime seller")


@section('profileImage')
{{ asset('argon/img/theme/team-1-800x800.jpg') }}
@endsection
@section('profileName')
Fahad Molla
@endsection
@section('visitProfile')
{{ route('seller.profile.index') }}
@endsection
@section('header','Upgrade to prime seller')

@section('container')

<form>


    <div class="form-group">
        <label for="exampleInputEmail1" class="form-label">Select Package</label>
        <select class="form-control" aria-label="Default select example">
            <option selected>none</option>
            <option value="1">1 Month   900   Taka</option>
            <option value="2">3 Month   2500  Taka</option>
            <option value="3">6 Month   4700  Taka</option>
            <option value="3">1 Year    9000  Taka</option>
          </select>
    </div>

    <div class="form-group">
        <label for="exampleInputEmail1" class="form-label">Select Payment method</label>
        <select class="form-control" aria-label="Default select example">
            <option selected>none</option>
            <option value="1">Bikash</option>
            <option value="2">Rocket</option>
            <option value="3">Credit card</option>
          </select>
    </div>


    <div class="form-group">
        <label for="exampleInputEmail1" class="form-label">Pay money to 010443*****</label><br>
        <label for="exampleInputEmail1" class="form-label">Input Transection Number</label>
        <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
    </div>
    <div class="form-group">
        <button type="submit" class="btn btn-primary">Apply</button>
    </div>
</form>

@endsection




