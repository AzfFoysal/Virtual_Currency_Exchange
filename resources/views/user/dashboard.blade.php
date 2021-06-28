@include('layouts.app')
@extends('layouts.buyer')

@section('pageTitle',"Buyer Home")


@section('profileImage')
{{ asset('argon/img/theme/natsu.jpg') }}
@endsection

@section('profileName')
{{ Session::get('name') }}
@endsection

@section('showDashboard','hidden')

@section('header','Home')

@section('container')

        <div class="row">
            @foreach ($products as $product)
                <div class="col-sm  pt-4 px-2">
                    <div class="card" style="max-width: 16rem; min-width: 14rem;">
                        <img class="card-img-top" src="https://i2.wp.com/pebelize.com/wp-content/uploads/2019/09/steam_10.jpg" alt="Card image cap">
                        <div class="card-body">
                        <h5 class="card-title">$product->name</h5>
                        <p class="card-text">$product->description</p>
                        <ul class="list-group list-group-flush">
                            <li class="list-group-item">$product->price</li>
                            <li class="list-group-item">Ratting : 5/5</li>
                        </ul>
                        {{-- <a href="#" class="btn btn-primary">Go somewhere</a> --}}

                        <div class="card-body">
                            <a href=" {{ route('user.order') }} " class="btn btn-primary">Order</a>
                    </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>

@endsection




