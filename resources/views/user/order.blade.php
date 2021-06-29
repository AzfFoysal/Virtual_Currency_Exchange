@include('layouts.app')
@extends('layouts.buyer')

@section('pageTitle',"Order")


@section('profileImage')
{{ asset('argon/img/theme/natsu.jpg') }}
@endsection
@section('profileName')
{{ Session::get('name') }}
@endsection

@yield('showSearch','none')

@section('header','Order')

@section('container')

<form method="post" action='/user/order/{{$product->id}}' enctype="multipart/form-data">
    @csrf
    <div class="form-group">
        <img class="card-img-top" src="https://i2.wp.com/pebelize.com/wp-content/uploads/2019/09/steam_10.jpg" alt="Card image cap">
    </div>


    <div class="form-group">
        <label class="form-label">{{ $product->name }}</label>
    </div>

    <div class="form-group">
        <label class="form-label">Product Desciption</label> <br>
        <label class="form-label">{{ $product->description }}</label>
    </div>

    <div class="form-group">
        <label class="form-label">Price</label>
        <label class="form-label">{{ $product->price }}</label>
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
            <option value="1">Bkash</option>
            <option value="2">Rocket</option>
            <option value="3">bank</option>
          </select>

    </div>

    <div class="form-group">
        <label for="exampleInputEmail1" class="form-label">Phone no</label>
        <input type="number" name="phone" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value=" {{ old('phone') }}" >
        @if ($errors->has('phone'))
            @foreach ($errors->get('phone') as $message)
            <span class="alert invalid-feedback" style="display: block;" role="alert">
                <strong>{{ $message }}</strong>
            </span>
            @endforeach
        @endif
    </div>


    <div class="form-group">
        <label for="exampleInputEmail1" class="form-label">Transection number</label>
        <input type="text" name="transection_number" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value=" {{ old('transection_number') }} ">
        @if ($errors->has('transection_number'))
            @foreach ($errors->get('transection_number') as $message)
            <span class="alert invalid-feedback" style="display: block;" role="alert">
                    <strong>{{ $message }}</strong>
            </span>
            @endforeach
        @endif
    </div>

    @if ($product->number_of_info == 'game_id')
    <div class="form-group">
        <label for="exampleInputEmail1" class="form-label">Game ID</label>
        <input type="text" name="gameId" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value=" {{ old('gameId') }}" >
        @if ($errors->has('gameId'))
            @foreach ($errors->get('gameId') as $message)
            <span class="alert invalid-feedback" style="display: block;" role="alert">
                <strong>{{ $message }}</strong>
            </span>
            @endforeach
        @endif
    </div>
    @endif
    <div class="form-group">
        <label for="exampleInputEmail1" class="form-label">Reply</label>
        <input type="text" name="reply" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value=" {{ old('reply') }}" >
        @if ($errors->has('reply'))
            @foreach ($errors->get('reply') as $message)
            <span class="alert invalid-feedback" style="display: block;" role="alert">
                <strong>{{ $message }}</strong>
            </span>
            @endforeach
        @endif
    </div>

    <div class="form-group">
        <button type="submit" class="btn btn-success">Confirm Order</button>
    </div>
</form>

@endsection




