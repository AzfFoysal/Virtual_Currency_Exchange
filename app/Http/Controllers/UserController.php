<?php

namespace App\Http\Controllers;

use App\Models\Follow;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\Models\User;
use App\Models\Order;
use App\Models\Product;

class UserController extends Controller
{
    public function dashboard(Request $req){
        $user = User::find($req->session()->get('id'));
        $products = Product::orderBy('created_at','ASC')->get();

        return view('user.dashboard',compact('user','products'));
    }
    public function profile(Request $req){
        $user = User::find($req->session()->get('id'));
        return view('user.profile',compact('user'));
    }
    public function history(Request $req){
        return view('user.history');
    }

    public function details(Request $req){
        return view('user.detailsHistory');
    }

    public function follow(Request $req){
        // $follows = Follow::join('users','users.id','=','follow.seller_id')
        //                 ->join('users','users.id','=','follow.user_id')
        //                 ->where('users.user_id',$req->session()->get('id'))
        //                 ->where('orders.status','completed')
        //                 ->get();
        $follows = Follow::where('follows.user_id',$req->session()->get('id'))->get();

        //dd($follows);

        $follow_list = User::find($follows[0]->seller_id)->get();
        return view('user.followList',compact('follow_list'));
    }
    public function orders(Request $req){
        return view('user.orders');
    }

    public function order(Request $req){
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

    public function notification(Request $req){
        return view('user.notification');
    }
    public function messages(Request $req){
        return view('user.messages');
    }
}
