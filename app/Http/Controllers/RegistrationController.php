<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\Models\User;

use function PHPUnit\Framework\isEmpty;

class RegistrationController extends Controller
{

    public function register(){
        return view('registration');
    }

        public function comfirmRegister(Request $req){
            $user = User::where('users.email',$req->email)->get();
             if (is_null($user->first())){

                if ($req->has('nidp')){
                    Validator::make($req->all(), [
                        'name' => 'required',
                        'email' => 'required|email',
                        'phone' => 'required|min:11|max:11',
                        'address' => 'required',
                        //'photo' => 'required',
                        //'nidp' => 'required',
                        'nidn' => 'required',
                        'password' => 'required|confirmed|min:8|max:20',
                    ])->validate();
                    User::insert([
                        'name' => $req->name,
                        'email' => $req->email,
                        'password' => $req->password,
                        'address' => $req->address,
                        'phone_number' => $req->phone,
                        'nid_number' => $req->nidn,
                        //'profile_picture' => $req->photo,
                        //'nid_card_picture' => $req->photo,
                        'aproved_by' => '2',
                        'status' => 'active',
                        'type' => 'seller'
                    ]);
                }
                else{
                Validator::make($req->all(), [
                    'name' => 'required',
                    'email' => 'required|email',
                    'phone' => 'required|min:11|max:11',
                    'address' => 'required',
                    //'photo' => 'required',
                    'password' => 'required|confirmed|min:8|max:20',
                ])->validate();
<<<<<<< HEAD
            }
            else{
            Validator::make($req->all(), [
                'name' => 'required',
                'email' => 'required|email',
                'phone' => 'required|min:11|max:11',
                'address' => 'required',
                'photo' => 'required',
                'password' => 'required',
            ])->validate();
            }
            return redirect()->route('login');
=======
                User::insert([
                    'name' => $req->name,
                    'email' => $req->email,
                    'password' => $req->password,
                    'address' => $req->address,
                    'phone_number' => $req->phone,
                    //'profile_picture' => $req->photo,
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


>>>>>>> 1899f4408df0c1b9703123be98c82b4723ec9020
        }
}
