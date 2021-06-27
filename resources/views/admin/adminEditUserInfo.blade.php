@include('layouts.app')
@extends('layouts.AdminDashboard')

@section('pageTitle', 'admin Deshboard')


@section('header', 'Edit Profile')

@section('container')
    <br>
    <form>
        <div class="form-group">
            <label class="form-label">Name</label>
            <input type="text" class="form-control" id="sName" value="">
        </div>

        <div class="form-group">
            <label class="form-label">Email Address</label>
            <input type="email" class="form-control" id="sEmail" value="">
        </div>

        <div class="form-group">
            <label class="form-label">Password</label>
            <input type="password" class="form-control" id="sPassword">
        </div>

        <div class="form-group">
            <label class="form-label">Address</label>
            <input type="text" class="form-control" id="sAddress" value="">
        </div>

        <div class="form-group">
            <label class="form-label">Phone Number</label>
            <input type="number" class="form-control" id="sPhone" aria-describedby="emailHelp" value="">
            <div id="mobileNoConstrainText" class="form-text">Must be 11 digits</div>
        </div>

        <div class="form-group">
            <label class="visually-hidden" for="inlineFormSelectPref">Preference</label>
            <select class="form-select" id="inlineFormSelectPref">
                <option selected>Prime Status</option>
                <option value="1">Normal</option>
                <option value="2">Prime</option>
            </select>
        </div>

        <div class="form-group">
            <label class="visually-hidden" for="inlineFormSelectPref">Preference</label>
            <select class="form-select" id="inlineFormSelectPref">
                <option selected>Status</option>
                <option value="1">Active</option>
                <option value="2">Deactive</option>
            </select>
        </div>
        <br>

        <button type="submit" class="btn btn-primary">Save</button>
    </form>



@endsection
