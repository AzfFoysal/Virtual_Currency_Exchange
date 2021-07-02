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
<<<<<<< HEAD
    public function history(){
        return view('user.history');
=======
    public function history(Request $req){

        $orders=Product::join('orders','orders.product_id','=','products.id')
                        ->join('users','users.id','=','products.seller_id')
                        ->where('orders.buyer_id',$req->session()->get('id'))
                        ->get(['orders.id','users.name as sellerName','orders.created_at','products.name as productName','orders.status']);
                        //dd($orders);

        return view('user.history',compact('orders'));
>>>>>>> 1b19f41f168ec30c148880b6ef63b89f1702e2fb
    }

    public function details(){
        return view('user.detailsHistory');
    }

<<<<<<< HEAD
    public function follow(){
        return view('user.followList');
=======
    public function follow(Request $req){
         $follows = Follow::join('users','users.id','=','follows.seller_id')
                        ->where('follows.user_id',$req->session()->get('id'))
                        //->get();
                        ->get(['users.name as userName','users.phone_number']);

       // $follows = Follow::where('follows.user_id',$req->session()->get('id'))->get();

        //dd($follows);

        //$follow_list = User::find($follows[0]->seller_id)->get();
        return view('user.followList',compact('follows'));
>>>>>>> 1b19f41f168ec30c148880b6ef63b89f1702e2fb
    }
    public function orders(){
        return view('user.orders');
    }
    public function followUser(Request $req, $id){
        Follow::insert([
            'user_id' => $req->session()->get('id'),
            'seller_id' => $id,
        ]);

        return back();
    }
    public function unfollow(Request $req, $id){
        Follow::where('user_id',$req->session()->get('id'))
                ->where('seller_id',$id)
                ->delete();

        return back();
    }

<<<<<<< HEAD
    public function order(){
        return view('user.order');
=======
    public function order(Request $req, $id){
        $product = Product::find($id);

        $seller = User::find($product->seller_id);

        $follows = Follow::where('user_id',$req->session()->get('id'))->get();
        //dd($follows);

        return view('user.order',compact('product','seller','follows'));
>>>>>>> 1b19f41f168ec30c148880b6ef63b89f1702e2fb
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

<<<<<<< HEAD
    public function notification(){
=======
    public function notification(Request $req){

        $list=Follow::join('users','users.id','=','follows.seller_id')
                        ->join('products','product.seller_id','=','user.id')
                        ->where('follows.buyer_id',$req->session()->get('id'))
                        ->get();
        dd($list);
>>>>>>> 1b19f41f168ec30c148880b6ef63b89f1702e2fb
        return view('user.notification');
        //return view('user.notification',compact('list'));
    }
    public function chat(){
        return view('user.chat');
    }
}
