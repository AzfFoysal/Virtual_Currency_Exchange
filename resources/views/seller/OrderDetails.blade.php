@include('layouts.app')
@extends('layouts.seller')

@section('pageTitle',"Seller order Details")


@section('profileImage')
{{ asset('argon/img/theme/team-1-800x800.jpg') }}
@endsection

@section('profileName')
Fahad Molla
@endsection
@section('visitProfile')
{{ route('seller.profile.index') }}
@endsection
@section('header','Order Details')

@section('container')

<form>


    <div class="form-group">
        <label for="formFile" class="form-label">Product Photo:</label><br>
        {{-- <input class="form-control" type="file" id="formFile"> --}}
        <img src="https://i2.wp.com/pebelize.com/wp-content/uploads/2019/09/steam_10.jpg" class="rounded" alt="Cinque Terre" width="304" height="236">
    </div>


    <div class="form-group">
        <label for="exampleInputEmail1" class="form-label">Product Title</label>
        <h6>Steam wallet 10 doller</h6>
    </div>

      <div class="form-group">
        <label for="exampleInputEmail1" class="form-label">price In Taka:</label>
        <h6>960</h6>
    </div>

    <div class="form-group">
        <label for="exampleInputEmail1" class="form-label">Payment method:</label>
        <h6>Bikash</h6>
    </div>

    <div class="form-group">
        <label for="exampleInputEmail1" class="form-label">Payment recive NO:</label>
        <h6>01933444***</h6>
    </div>


    <div class="form-group">
        <label for="floatingTextarea2">Product Desciption:</label>
        <p>steam 10.3 work on any regions without Argentina. fast delivery.</p>
    </div>
    <div class="form-group">
        <label for="floatingTextarea2">Transaction NO:</label>
        <h6>77HDDIE2330</h6>
    </div>
    <div class="form-group">
        <label for="floatingTextarea2">Buyer Reply:</label>
        <p>roket no:0179443343. Please give fast delivery thank you.
        </p>
    </div>

    <div class="form-floating">
        <textarea class="form-control" placeholder="Leave a comment here" id="floatingTextarea2" style="height: 100px"></textarea>
        <label for="floatingTextarea2">Give reply and information like transection no ,code ,if needed.</label>
    </div>

    <div class="form-group">
        <button type="submit" class="btn btn-primary">Send</button>
    </div>
</form>

@endsection




