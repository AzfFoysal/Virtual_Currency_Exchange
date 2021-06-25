@include('layouts.app')
@extends('layouts.seller')

@section('pageTitle',"seller Posts")


@section('profileImage')
{{ asset('argon/img/theme/team-1-800x800.jpg') }}
@endsection

@section('profileName')
Fahad Molla
@endsection


@section('header','MY posts')

@section('container')

        <div class="row" align="left">
            @foreach ( $product as $item )


                <div class="col-sm  pt-4 px-2">
                    <div class="card" style="max-width: 16rem; min-width: 14rem;">
                        <img class="card-img-top" src="https://i2.wp.com/pebelize.com/wp-content/uploads/2019/09/steam_10.jpg" alt="Card image cap">
                        <div class="card-body">
                        <h5 class="card-title">{{ $item->name }}</h5>
                        <p class="card-text">{{ $item->description }}</p>
                        <ul class="list-group list-group-flush">
                            <li class="list-group-item">Price : {{ $item->price }}</li>
                            <li class="list-group-item">Ratting : 4.3/5</li>
                        </ul>
                        {{-- <a href="#" class="btn btn-primary">Go somewhere</a> --}}

                        <div class="card-body">
                            <a href="{{ route('seller.product.show',$item) }}" class="btn btn-primary">visit</a>
                            <a href="{{ route('seller.product.show',$item) }}" class="btn btn-info">Edit</a>
                    </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>






@endsection




