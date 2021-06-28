<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

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
    public function orderConfirm(Request $req){
        // addtional database work

        Validator::make($req->all(), [
            'phone' => 'required|min:11',
            'transection_number' => 'required',
            'gameId' => 'required',
            'reply' => 'required',
        ])->validate();

        // if($validator->fails()){
        //     return back()->withErrors($validator)->withInput();
        // }

        return redirect('user/orders');
    }

    public function notification(){
        return view('user.notification');
    }
    public function chat(){
        return view('user.chat');
    }
}
