<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class LoginController extends Controller
{
    public function login(){
        return view('login');
    }

    

    public function verify(Request $req){

        $result = DB::table('users')
                        ->where('email', $req->email)
                        ->where('password', $req->password)
                        ->first();

        if($result){

            if($result->status == "active"){
                
                $req->session()->put('id', $result->id);
    
                if($result->type == "admin"){
                    return redirect()->route('adminHome');
                }
                elseif($result->type == "buyer"){
                    $req->session()->put('id', $result->id);
                    return redirect()->route('user.dashboard');

                }
                elseif($result->type == "seller"){
                    $req->session()->put('id', $result->id);
                    return redirect()->route('seller.dashboard');
                }
            }else{
                $req->session()->flash('msg', 'Your Account is deactivated');
                return redirect('/login');
            }
        }
        else{
            $req->session()->flash('msg', 'Invalid email or password!');
            return redirect('/login');
        }
    }
}
