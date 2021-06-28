<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class RegistrationController extends Controller
{

    public function register(){
        return view('registration');
    }

        public function comfirmRegister(Request $req){

            if ($req->has('nidp')){
                Validator::make($req->all(), [
                    'name' => 'required',
                    'email' => 'required|email',
                    'phone' => 'required|min:11|max:11',
                    'address' => 'required',
                    'photo' => 'required',
                    'nidp' => 'required',
                    'nidn' => 'required',
                    'password' => 'required|confirmed|min:8|max:20',
                ])->validate();
            }
            else{
            Validator::make($req->all(), [
                'name' => 'required',
                'email' => 'required|email',
                'phone' => 'required|min:11|max:11',
                'address' => 'required',
                'photo' => 'required',
                'password' => 'required|confirmed|min:8|max:20',
            ])->validate();
            }
            return redirect()->route('login');
        }
}
