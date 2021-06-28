@extends('layouts.reg')
@include('layouts.app')
@include('layouts.app-extra')

@yield('pageTitle','Registration')

@section('content')
<div class="header bg-gradient-primary py-7 py-lg-8">
</div>

    <div class="container mt--8 pb-5">
        <!-- Table -->
        <div class="row justify-content-center">
            <div class="col-lg-6 col-md-8">
                <div class="card bg-secondary shadow border-0">
                    <div class="card-body px-lg-5 py-lg-5">
                        <div class="text-center mb-4">
                            <h1 class="text-muted">Sign Up</h1>
                        </div>
                        <form role="form" method="POST" action="/register">
                            @csrf

                            {{-- name --}}
                            <div class="form-group{{ $errors->has('name') ? ' has-danger' : '' }}">
                                <div class="input-group input-group-alternative mb-3">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text"><i class="ni ni-hat-3"></i></span>
                                    </div>
                                    <input class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}" placeholder="Name" type="text" name="name" value="{{ old('name') }}" autofocus>
                                </div>
                                @if ($errors->has('name'))
                                    <span class="invalid-feedback" style="display: block;" role="alert">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                @endif
                            </div>

                            {{-- email --}}
                            <div class="form-group{{ $errors->has('email') ? ' has-danger' : '' }}">
                                <div class="input-group input-group-alternative mb-3">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text"><i class="ni ni-email-83"></i></span>
                                    </div>
                                    <input class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" placeholder="Email" type="email" name="email" value="{{ old('email') }}">
                                </div>
                                @if ($errors->has('email'))
                                    <span class="invalid-feedback" style="display: block;" role="alert">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>

                            {{-- phone --}}
                            <div class="form-group{{ $errors->has('phone') ? ' has-danger' : '' }}">
                                <div class="input-group input-group-alternative mb-3">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text"><i class="ni ni-mobile-button"></i></span>
                                    </div>
                                    <input class="form-control{{ $errors->has('phone') ? ' is-invalid' : '' }}" placeholder="Phone No" type="text" name="phone" value="{{ old('phone') }}">
                                </div>
                                @if ($errors->has('phone'))
                                    <span class="invalid-feedback" style="display: block;" role="alert">
                                        <strong>{{ $errors->first('phone') }}</strong>
                                    </span>
                                @endif
                            </div>

                            {{-- address --}}
                            <div class="form-group{{ $errors->has('address') ? ' has-danger' : '' }}">
                                <div class="input-group input-group-alternative mb-3">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text"><i class="ni ni-world-2"></i></span>
                                    </div>
                                    <input class="form-control{{ $errors->has('address') ? ' is-invalid' : '' }}" placeholder="address" type="text" name="address" value="{{ old('address') }}">
                                </div>
                                @if ($errors->has('address'))
                                    <span class="invalid-feedback" style="display: block;" role="alert">
                                        <strong>{{ $errors->first('address') }}</strong>
                                    </span>
                                @endif
                            </div>

                            {{-- photo --}}
                            <div class="form-group{{ $errors->has('photo') ? ' has-danger' : '' }}">
                                <div class="input-group input-group-alternative mb-3">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text"><i class="ni ni-image"></i></span>
                                    </div>
                                    <input class="form-control{{ $errors->has('photo') ? ' is-invalid' : '' }}" placeholder="photo" type="file" name="photo" value="{{ old('photo') }}">
                                </div>
                                @if ($errors->has('photo'))
                                    <span class="invalid-feedback" style="display: block;" role="alert">
                                        <strong>{{ $errors->first('photo') }}</strong>
                                    </span>
                                @endif
                            </div>

                            {{-- NID photo --}}
                            <div class="form-group{{ $errors->has('nidp') ? ' has-danger' : '' }}" id="nidPhote" style="display:none">
                                <div class="input-group input-group-alternative mb-3">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text"><i class="ni ni-paper-diploma"></i></span>
                                    </div>
                                    {{-- <label for="fileNID" style="display:block">NID CARD</label> --}}
                                         <input class="form-control{{ $errors->has('nidp') ? ' is-invalid' : '' }}" id="nidp" style="display:block" type="file" value="{{ old('nidp') }}">
                                    {{-- <input type="file" class="filestyle" data-classButton="btn btn-primary" data-input="false" data-classIcon="icon-plus" data-buttonText="Hello"> --}}
                                    {{-- <input class="form-control{{ $errors->has('nidPhoto') ? ' is-invalid' : '' }}" for="fileNID" placeholder="NID Card photo" type="text" required> --}}
                                </div>
                                @if ($errors->has('nidp'))
                                    <span class="invalid-feedback" style="display: block;" role="alert">
                                        <strong>{{ $errors->first('nidp') }}</strong>
                                    </span>
                                @endif
                            </div>

                            {{-- NID CARD NO --}}
                            <div class="form-group{{ $errors->has('nidn') ? ' has-danger' : '' }}" id="nidNo" style="display:none">
                                <div class="input-group input-group-alternative mb-3">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text"><i class="ni ni-single-copy-04"></i></span>
                                    </div>
                                    <input class="form-control{{ $errors->has('nidn') ? ' is-invalid' : '' }}" placeholder="nidNO" type="text" id="nidn" value="{{ old('nidn') }}">
                                </div>
                                @if ($errors->has('nidn'))
                                    <span class="invalid-feedback" style="display: block;" role="alert">
                                        <strong>{{ $errors->first('nidn') }}</strong>
                                    </span>
                                @endif
                            </div>

                            {{-- password --}}
                            <div class="form-group{{ $errors->has('password') ? ' has-danger' : '' }}">
                                <div class="input-group input-group-alternative">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text"><i class="ni ni-lock-circle-open"></i></span>
                                    </div>
                                    <input class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password"  placeholder="Password" type="password" >
                                </div>
                                @if ($errors->has('password'))
                                    <span class="invalid-feedback" style="display: block;" role="alert">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>

                            {{-- confirm password --}}
                            <div class="form-group{{ $errors->has('confirmPassword') ? ' has-danger' : '' }}">
                                <div class="input-group input-group-alternative">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text"><i class="ni ni-lock-circle-open"></i></span>
                                    </div>
                                    <input class="form-control{{ $errors->has('confirmPassword') ? ' is-invalid' : '' }}" name="confirmPassword"  placeholder="confirm Password" type="password" >
                                </div>
                                @if ($errors->has('confirmPassword'))
                                    <span class="invalid-feedback" style="display: block;" role="alert">
                                        <strong>{{ $errors->first('confirmPassword') }}</strong>
                                    </span>
                                @endif
                            </div>

                            <div class="row my-4">
                                <div class="col-12">
                                    <div class="custom-control custom-control-alternative custom-checkbox">
                                        <input class="custom-control-input" id="customCheckRegister" type="checkbox">
                                        <label class="custom-control-label" for="customCheckRegister">
                                            <span class="text-muted">I agree with the <a href="#!">Privacy Policy</a></span>
                                        </label>
                                    </div>
                                </div>
                            </div>
                            <div class="text-center">
                                <button type="button" class="btn btn-primary mt-4" onclick="showSellerField()" id="rsbtn" style="display:inline-block">Register as a Seller</button>
                               <button type="button" class="btn btn-primary mt-4" onclick="hideSellerField()" id="rubtn" style="display:none">Register as a Buyer</button>
                               <script>
                                    function showSellerField(){
                                       document.getElementById('nidPhote').style.display = 'block';
                                       document.getElementById('nidp').name = 'nidp';
                                       document.getElementById('nidNo').style.display = 'block';
                                       document.getElementById('nidn').name = 'nidn';
                                       document.getElementById('rsbtn').style.display = 'none';
                                       document.getElementById('rubtn').style.display = 'inline-block';
                                       }
                                  function hideSellerField(){
                                      document.getElementById('nidPhote').style.display = 'none';
                                      document.getElementById('nidp').name = ' ';
                                      document.getElementById('nidNo').style.display = 'none';
                                      document.getElementById('nidp').name = '';
                                      document.getElementById('rubtn').style.display = 'none';
                                      document.getElementById('rsbtn').style.display = 'inline-block';
                                    }

                              </script>
                                <button type="submit" class="btn btn-primary mt-4">Create account</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
