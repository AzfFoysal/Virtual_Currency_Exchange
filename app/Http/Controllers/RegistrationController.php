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

<<<<<<< HEAD
            if ($req->has('nidp')){
=======
                if ($req->has('nidp')){

                    Validator::make($req->all(), [
                        'name' => 'required',
                        'email' => 'required|email',
                        'phone' => 'required|min:11|max:11',
                        'address' => 'required',
                        'photo' => 'required|image',
                        'nidp' => 'required',
                        'nidn' => 'required',
                        'password' => 'required|confirmed|min:8|max:20',
                    ])->validate();
                    $imageName = time().'.'.$req->photo->extension();

                    $req->photo->move(public_path('buyer'), $imageName);

                    $nidImage = time().'.'.$req->photo->extension();

                    $req->photo->move(public_path('buyer'), $nidImage);
                    User::insert([
                        'name' => $req->name,
                        'email' => $req->email,
                        'password' => $req->password,
                        'address' => $req->address,
                        'phone_number' => $req->phone,
                        'nid_number' => $req->nidn,
                        'profile_picture' => $imageName,
                        'nid_card_picture' => $nidImage,
                        'aproved_by' => '2',
                        'status' => 'active',
                        'type' => 'seller'
                    ]);
                }
                else{
>>>>>>> 1b19f41f168ec30c148880b6ef63b89f1702e2fb
                Validator::make($req->all(), [
                    'name' => 'required',
                    'email' => 'required|email',
                    'phone' => 'required|min:11|max:11',
                    'address' => 'required',
<<<<<<< HEAD
                    'photo' => 'required',
                    'nidp' => 'required',
                    'nidn' => 'required',
                    'password' => 'required|confirmPassword|min:8|max:20',
                ])->validate();
            }
            else{
            Validator::make($req->all(), [
                'name' => 'required',
                'email' => 'required|email',
                'phone' => 'required|min:11|max:11',
                'address' => 'required',
                'photo' => 'required',
                'password' => 'required',
                'confirmPassword' => 'required|confirmPassword|min:8|max:20',
            ])->validate();
            }
            return redirect()->route('login');
=======
                    'photo' => 'required|image',
                    'password' => 'required|confirmed|min:8|max:20',
                ])->validate();
                $imageName = time().'.'.$req->photo->extension();

                $req->photo->move(public_path('buyer'), $imageName);
                User::insert([
                    'name' => $req->name,
                    'email' => $req->email,
                    'password' => $req->password,
                    'address' => $req->address,
                    'phone_number' => $req->phone,
                    'profile_picture' => $imageName,
                    'aproved_by' => '1',
                    'status' => 'active',
                    'type' => 'buyer'
                ]);
                }
                return redirect()->route('login');
             }
             else{
                $req->session()->flash('msg', 'Email is already used!');
                return redirect()->back();
             }


>>>>>>> 1b19f41f168ec30c148880b6ef63b89f1702e2fb
        }
}
