@include('layouts.app')
@extends('layouts.seller')

@section('pageTitle',"Seller Create Sell Post")


@section('profileImage')
{{ asset('argon/img/theme/team-1-800x800.jpg') }}
@endsection

@section('profileName')
Fahad Molla
@endsection

@section('header','Create sell post')

@section('container')

<form>


    <div class="form-group">
        <label for="formFile" class="form-label">Select photo</label>
        <input class="form-control" type="file" id="formFile">
    </div>


    <div class="form-group">
        <label for="exampleInputEmail1" class="form-label">Product Title</label>
        <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
    </div>

    <div class="form-group">
        <label for="exampleInputEmail1" class="form-label">ADD price In Taka*</label>
        <input type="number" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
    </div>


    <div class="form-group">
        <label for="exampleInputEmail1" class="form-label">Select Payment method</label>
        <select class="form-control" aria-label="Default select example">
            <option selected>none</option>
            <option value="1">Bikash</option>
            <option value="2">Rocket</option>
            <option value="3">bank</option>
          </select>
    </div>

    <div class="form-group">
        <label for="exampleInputEmail1" class="form-label">Payment recive NO:</label>
        <input type="number" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
    </div>

    <div class="form-group">
        <label for="exampleInputEmail1" class="form-label">whatinformation you need from the buyer</label>
        <select class="form-control" aria-label="Default select example">
            <option selected>Only Transection number</option>
            <option value="1">Transection number and phone number of money recive</option>
            <option value="2">Transection and Game ID</option>
            <option value="3">Transection and a other Info</option>
          </select>
    </div>

    <div class="form-floating">
        {{-- <label for="exampleInputEmail1" class="form-label">Write Product Desciption</label> --}}
        <textarea class="form-control" placeholder="Leave a comment here" id="floatingTextarea2" style="height: 100px"></textarea>
        <label for="floatingTextarea2">Write Product Desciption</label>
    </div>

    <div class="form-group">
        <button type="submit" class="btn btn-primary">Post</button>
    </div>
</form>

@endsection




