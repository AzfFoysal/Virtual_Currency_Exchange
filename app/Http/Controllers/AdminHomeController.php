<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AdminHomeController extends Controller
{
    public function index(Request $req){

        $email = $req->session()->get('email');

        return view('admin.adminHome', compact('email'));
    }

    public function editProfile(Request $req){

        return view('admin.adminEditProfile');
    }

    public function viewAllUserInfo(Request $req){
        $users = DB::table('users')->get();

        return view('admin.adminViewAllUserInfo')->with('adminViewAllUserInfo',$users);
    }

    public function viewAllTransaction(Request $req){
        $orders = DB::table('orders')->get();

        return view('admin.adminViewAllTransaction')->with('adminViewAllTransaction',$orders);
    }

    public function userReports(Request $req){
        $reports = DB::table('reports')->get();

        return view('admin.adminUserReports')->with('adminUserReports',$reports);
    }

    public function announcement(Request $req){
        $announcements = DB::table('announcements')->get();

        return view('admin.adminAnnouncement')->with('adminAnnouncement',$announcements);
    }

    public function editUserInfo(Request $req){
        $email = $req->session()->get('email');

        return view('admin.adminEditUserInfo');
    }
}
