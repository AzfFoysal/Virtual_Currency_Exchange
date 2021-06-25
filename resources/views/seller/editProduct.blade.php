@include('layouts.app')
@extends('layouts.seller')

@section('pageTitle',"Seller Edit Post")


@section('profileImage')
{{ asset('argon/img/theme/team-1-800x800.jpg') }}
@endsection
@section('profileName')
Fahad Molla
@endsection


@section('header','Edit Post')

@section('container')

    <form>

        {{-- <div class="form-group"> --}}
            <div class="form-group">
                <label for="formFile" class="form-label">Change Product photo:</label><br>
                <img src="https://i2.wp.com/pebelize.com/wp-content/uploads/2019/09/steam_10.jpg" class="rounded" alt="Cinque Terre" width="304" height="236">
                <br>
                <br>
                <input class="form-control" type="file" id="formFile">
            </div>


            <div class="form-group">
                <label for="exampleInputEmail1" class="form-label">Product Title</label>
                <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="steam 10.3 doller">
            </div>

            <div class="form-group">
                <label for="exampleInputEmail1" class="form-label">ADD price In Taka*</label>
                <input type="number" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="970">
            </div>


            <div class="form-group">
                <textarea class="form-control" placeholder="Leave a comment here" id="floatingTextarea2" style="height: 100px">steam 10.3 work on any regions without Argentina. fast delivery.</textarea>
                {{-- <label for="floatingTextarea2">Write Product Desciption</label> --}}
            </div>

            <div class="form-group">
                <button type="submit" class="btn btn-primary">Post</button>
                <a href="#delete" onclick="myDelete()" class="btn btn-danger">Delete</a>
            </div>
        {{-- </div> --}}
    </form>

@endsection
