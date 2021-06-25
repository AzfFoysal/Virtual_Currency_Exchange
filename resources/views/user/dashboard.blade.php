@include('layouts.app')
@extends('layouts.buyer')

@section('pageTitle',"Buyer Home")


@section('profileImage')
{{ asset('argon/img/theme/natsu.jpg') }}
@endsection

@section('profileName')
Mahbubur Rahman
@endsection

@section('showDashboard','hidden')

@section('header','Home')

@section('container')

        <div class="row">
            @for ($i = 0; $i < 10; $i++)
                <div class="col-sm  pt-4 px-2">
                    <div class="card" style="max-width: 16rem; min-width: 14rem;">
                        <img class="card-img-top" src="https://i2.wp.com/pebelize.com/wp-content/uploads/2019/09/steam_10.jpg" alt="Card image cap">
                        <div class="card-body">
                        <h5 class="card-title">Post title</h5>
                        <p class="card-text">Some quick example text to build on the post title and make up the bulk of the post's content.</p>
                        <ul class="list-group list-group-flush">
                            <li class="list-group-item">Price : 760</li>
                            <li class="list-group-item">Ratting : 4.3/5</li>
                        </ul>
                        {{-- <a href="#" class="btn btn-primary">Go somewhere</a> --}}

                        <div class="card-body">
                            <a href=" {{ route('user.order') }} " class="btn btn-primary">Order</a>
                    </div>
                        </div>
                    </div>
                </div>
            @endfor
        </div>

@endsection




