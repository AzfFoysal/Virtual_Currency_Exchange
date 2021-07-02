@include('layouts.app')
@extends('layouts.buyer')

@section('pageTitle',"Buyer Profile")


@section('profileImage')
{{ asset('argon/img/theme/natsu.jpg') }}
@endsection
@section('profileName')
Mahbubur Rahman
@endsection

@section('showProfile','hidden')

@section('header','Profile')

@section('container')

    <form>
        <div class="form-group">
            <img src="https://supporthubstaffcom.lightningbasecdn.com/wp-content/uploads/2019/08/good-pic.png" class="rounded" alt="Cinque Terre" width="304" height="290">
            <br>
            <a href="#" onclick="picChange()">Change Profile picture</a>
            <input class="form-control" type="file" id="picChange" style="display:none">
        </div>
        <div class="form-group">
            <label class="form-label">Name</label>
            <input type="text" class="form-control" id="sName" value="Mahbubur Rahman" required>
        </div>

        <div class="form-group">
            <label class="form-label">Address</label>
            <input type="text" class="form-control" id="sAddress" value="Mirpur,Dhaka 1216" required>
        </div>

        <div class="form-group">
            <label class="form-label">Email Address</label>
            <input type="email" class="form-control" id="sEmail" value="mdsaon716@gmail.com" required>
        </div>

        <div class="form-group">
            <label class="form-label">Password</label>
            <input type="password" class="form-control" id="uPassword" value="123456" readonly required>
            <a href="#" onclick="passwordChange()" id="pChange">Change Password</a>
        </div>
        <div class="form-group">
            <label class="form-label">Phone Number</label>
            <input type="text" class="form-control" id="sPhone" aria-describedby="emailHelp" value="0111111111" required>
            {{-- <div id="mobileNoConstrainText" class="form-text">Must be 11 digits</div> --}}
        </div>
        <button type="submit" class="btn btn-primary">Save</button>
        <a href="#"><button class="btn btn-danger">Cancel</button></a>
    </form>

    <script>
         function picChange(){
            var text = "Sure about changing Picture?\nAfter changing photo you can't change it before 3 month.";
            if (confirm(text)) {
            var n = document.getElementById('picChange');
            n.style.display = 'block';
            }
        }
        function passwordChange(){
            var text = "Sure about changing password?\nAfter changing password please wait for admin approval.";
            if (confirm(text)) {
            var n = document.getElementById('uPassword');
            n.readOnly = false;
            }
        }

   </script>

@endsection




