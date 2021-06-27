@include('layouts.app')
@extends('layouts.buyer')

@section('pageTitle',"Order")


@section('profileImage')
{{ asset('argon/img/theme/natsu.jpg') }}
@endsection
@section('profileName')
Mahbubur Rahman
@endsection

@yield('showSearch','none')

@section('header','Order')

@section('container')

<form method="post" action='/user/order' enctype="multipart/form-data">
    @csrf
    <div class="form-group">
        <img class="card-img-top" src="https://i2.wp.com/pebelize.com/wp-content/uploads/2019/09/steam_10.jpg" alt="Card image cap">
    </div>


    <div class="form-group">
        <label class="form-label">Google play card</label>
    </div>

    <div class="form-group">
        <label class="form-label">Product Desciption</label> <br>
        <label class="form-label">I am selling google play card at cheap rate.</label>
    </div>

    <div class="form-group">
        <label class="form-label">Price</label>
        <label class="form-label">350</label>
    </div>
    <div class="form-group">
        <label class="form-label">Quantity</label>
        <select class="form-control" name="quantity" aria-label="Default select example">
            <option selected value="0">0</option>
            @for ($i=1;$i<100;$i++)
                <option value=" {{$i}} "> {{$i}} </option>
            @endfor
          </select>
    </div>

    <div class="form-group">
        <label class="form-label">Payment method</label>
        <select class="form-control" aria-label="Default select example">
            <option selected>none</option>
            <option value="1">Bikash</option>
            <option value="2">Rocket</option>
            <option value="3">bank</option>
          </select>

    </div>

    <div class="form-group">
        <label for="exampleInputEmail1" class="form-label">Phone no</label>
        <input type="number" name="phone" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
    </div>

    <div class="form-group">
        <label for="exampleInputEmail1" class="form-label">Transection number</label>
        <input type="number" name="tno" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
    </div>

    <div class="form-group">
        <label for="exampleInputEmail1" class="form-label">Game ID</label>
        <input type="number" name="gameID" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
    </div>

    <div class="form-group">
        <label for="exampleInputEmail1" class="form-label">Reply</label>
        <input type="number" name="reply" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
    </div>

    <div class="form-group">
        <button type="submit" class="btn btn-success">Confirm Order</button>
    </div>
</form>

@endsection




