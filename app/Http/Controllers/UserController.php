<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function dashboard(){
        return view('user.dashboard');
    }
    public function profile(){
        return view('user.profile');
    }
    public function history(){
        return view('user.history');
    }

    public function details(){
        return view('user.detailsHistory');
    }

    public function follow(){
        return view('user.followList');
    }
    public function orders(){
        return view('user.orders');
    }

    public function order(){
        return view('user.order');
    }
    public function orderConfirm(){
        // addtional database work
        //return view('user.order');
        return redirect('user/orders');
    }

    public function notification(){
        return view('user.notification');
    }
    public function messages(){
        return view('user.messages');
    }
}
