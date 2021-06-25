<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminHomeController extends Controller
{
    public function index(Request $req){

        $email = $req->session()->get('email');

        return view('admin.adminHome', compact('email'));
    }

    public function editProfile(Request $req){
        $email = $req->session()->get('email');

        return view('admin.adminEditProfile');
    }

    public function viewAllUserInfo(Request $req){
        $email = $req->session()->get('email');

        return view('admin.adminViewAllUserInfo');
    }

    public function viewAllTransaction(Request $req){
        $email = $req->session()->get('email');

        return view('admin.adminViewAllTransaction');
    }

    public function userReports(Request $req){
        $email = $req->session()->get('email');

        return view('admin.adminUserReports');
    }

    public function announcement(Request $req){
        $email = $req->session()->get('email');

        return view('admin.adminAnnouncement');
    }

    public function editUserInfo(Request $req){
        $email = $req->session()->get('email');

        return view('admin.adminEditUserInfo');
    }
}
