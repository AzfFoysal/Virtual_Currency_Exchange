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

<form enctype= "multipart/form-data" method="post" action='{{ route('seller.product.store') }}' >

    @if (session()->has('msg'))
        <br>
        <div class="alert alert-primary" role="alert">
            <strong>{{session('msg')}}</strong>
        </div>
    @endif

    <div class="form-group"  >
        <label for="formFile" class="form-label">Select photo</label>
        <input class="form-control" type="file" name='product_picture'>
    </div>


    <div class="form-group">
        <label for="exampleInputEmail1" class="form-label">Product Title</label>
        <input type="text" class="form-control" name="name" >
    </div>

    <div class="form-group">
        <label for="exampleInputEmail1" class="form-label">ADD price In Taka*</label>
        <input type="number" class="form-control" name="price" ">
    </div>


    <div class="form-group">
        <label for="exampleInputEmail1" class="form-label">From currency</label>
        <select class="form-control" aria-label="Default select example" name="from_currency">
            <option selected value="0">none</option>
            <option value="1" >Bikash</option>
            <option value="2">Nagod</option>
            <option value="3">roket</option>
            <option value="4">Mkash</option>
            <option value="5">Ukash</option>
            <option value="6">Gkash</option>
          </select>
    </div>
    <div class="form-group">
        <label for="exampleInputEmail1" class="form-label">To Currency</label>
        <select class="form-control" aria-label="Default select example" name="To_currency">
            <option selected value="0">none</option>
            <option value="1" >Bikash</option>
            <option value="2">Nagod</option>
            <option value="3">roket</option>
            <option value="4">Mkash</option>
            <option value="5">Ukash</option>
            <option value="6">Gkash</option>
          </select>
    </div>

    <div class="form-group">
        <label for="exampleInputEmail1" class="form-label">Payment recive NO:</label>
        <input type="number" name="Pyament_recive_no" class="form-control">
    </div>

    <div class="form-group">
        <label for="exampleInputEmail1" class="form-label">whatinformation you need from the buyer</label>
        <select class="form-control" aria-label="Default select example" name="number_of_info">
            <option selected value="transection">Only Transection number</option>
            <option value="phone">Transection number and phone number of money recive</option>
            <option value="game_id">Transection and Game ID</option>
          </select>
    </div>

    <div class="form-floating">
        <label for="floatingTextarea2">Write Product Desciption</label>
        <textarea class="form-control" placeholder="Leave a comment here" id="floatingTextarea2" style="height: 100px" name="description"></textarea>
    </div>

    <div class="form-group">
        <button type="submit" class="btn btn-primary">Post</button>
    </div>
</form>

@endsection




