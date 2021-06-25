@include('layouts.app')
@extends('layouts.AdminDashboard')

@section('pageTitle',"admin Deshboard")


@section('profileImage')
{{ asset('argon/img/theme/team-1-800x800.jpg') }}
@endsection



@section('header','Edit Profile')

@section('container')
<br>
<form>
  <div class="form-floating mb-3">
      <input type="email"  readonly class="form-control" id="floatingInput" placeholder="name@example.com">
      <label for="floatingInput">asd@gmail.com</label>
    </div>
    <div class="form-floating mb-3">
      <input type="password" class="form-control" id="floatingPassword" placeholder="Password">
      <label for="floatingPassword">Password</label>
    </div>
    <div class="form-floating mb-3">
      <input type="text" class="form-control" id="floatingInput" placeholder="name@example.com">
      <label for="floatingInput">Name</label>
    </div>
    <div class="form-floating mb-3">
      <input type="number" class="form-control" id="floatingInput" placeholder="name@example.com">
      <label for="floatingInput">Number</label>
    </div>
    <div class="form-floating mb-3">
      <input type="email"  readonly class="form-control" id="floatingInput" placeholder="name@example.com">
      <label for="floatingInput">buyer</label>
    </div>
    <div class="form-group">
      <label class="visually-hidden" for="inlineFormSelectPref">Preference</label>
      <select class="form-select" id="inlineFormSelectPref">
        <option selected>Prime Status</option>
        <option value="1">Prime</option>
        <option value="2">Normal</option>
      </select>
    </div>
    <div class="form-group">
      <label class="visually-hidden" for="inlineFormSelectPref">Preference</label>
      <select class="form-select" id="inlineFormSelectPref">
        <option selected>Seller Status</option>
        <option value="1">Verified</option>
        <option value="2">Unverified</option>
      </select>
    </div>
    <br>

  <button type="submit" class="btn btn-primary">Update</button>
</form>

        

@endsection
