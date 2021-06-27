<?php

namespace App\Http\Controllers\seller;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
class ProfileController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $user=User::find($request->session()->get('id'));
        // dd($user);
        return view('seller.profile',compact('user'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id,Request $request)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */

    public function editProfile(Request $request)
    {
         $user=User::find($request->session()->get('id'));
         return view('seller.sellerEditProfile',compact('user'));
    }
    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function updateProfile(Request $request)
    {
        $user=User::find($request->session()->get('id'));
        if($request->hasFile('profile_picture')){
        if($user->profile_picture)unlink($user->profile_picture);
        $extension = $request->profile_picture->getClientOriginalExtension();
        $newName = date('U').'.'.$extension;
        $folderPath = "seller/image/profile/";
        $user->profile_picture = $folderPath.$newName;
        $request->profile_picture->move($folderPath, $newName);
        }

        $user->name=$request->input('name');
        $user->email=$request->input('email');
        $user->address=$request->input('address');
        $user->phone_number=$request->input('phone_number');
        $user->update();
        $request->session()->flash('msg','Profile is Updated!');
        return redirect()->back();

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function changePassword(Request $request)
    {
        $user = User::find($request->session()->get('id'));
        // dd($request->session()->get('id'));
        return view('seller.changePassword',compact('user'));

    }
    public function updatePassword(Request $request)
    {
        $this->validate($request, [

            'old_password' => 'required',
            'new_password' => 'required|confirmed|max:50|min:4',
            ]);


            $user=User::find($request->session()->get('id'));

            if($user->password==$request->old_password){
                $user->password=$request->new_password;
                $user->update();
                $request->session()->flash('msg', "Password change successfully!");
            }
            else{
                $request->session()->flash('msg', "Wrong Password");
            }

            return redirect()->Back();




    }
    public function destroy($id)
    {
        //
    }
}
