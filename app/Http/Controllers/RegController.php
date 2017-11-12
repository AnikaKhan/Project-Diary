<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Member;
use App\Group;
use App\UserGroup;
use Auth;
use Illuminate\Contracts\Auth\Authenticatable;

class RegController extends Controller
{
    public function getRegister(){
        return view('reg');
    }

    public function getProfile(){
        $user = Auth::user();
        return view('profile', ['user'=>$user]);
    }

         public function getHome(){
        return view('home');
    }


    public function getprojectname(){
        $user =Auth::user()->first();
        if($user)
          {
            $groups = UserGroup::where('user_id', Auth::user()->id)->get();
            //$groups = Group::where('user_id', $search->user_id);
            
          }
        return view('dashboard', ['user'=>$user, 'groups'=>$groups]);
    }


    public function registration(Request $request){

        $this->validate($request, [
            'first_name'=> 'required|max:50',
            'last_name' => 'required|max:50',
            'inst'=> 'required',
            'acctype' => 'required',
            'email' => 'required|email|unique:users',
            'password' =>'required|min:6|confirmed',
            'password_confirmation' =>'required|min:6|same:password',

            
            ]);

        $first_name = $request['first_name'];
        $last_name = $request['last_name'];
        $inst = $request['inst'];
        $email = $request['email'];
        $acctype = $request['acctype'];
        $password = bcrypt($request['password']);
        $password_confirmation = bcrypt($request['password_confirmation']);
       
        $user = new User();
        $user->first_name=$first_name;
        $user->last_name=$last_name;
        $user->inst=$inst;
        $user->email=$email;
        $user->password=$password;
        $user->acctype=$acctype;
        $user->password=$password_confirmation;

        $user->save();
        Auth::login($user);

        return redirect()->route('profile');
    }


    /*public function getlogin(){
        return view('id01');    
    }*/

   public function login(Request $request){
        $this->validate($request, [
            'email'=>'required|email',
            'password' => 'required|min:6'
            ]);

        if (Auth::attempt(['email'=>$request['email'], 'password'=>$request['password']])){
            return redirect()->route('profile');
        }
        return redirect()->back();
    }

    
    public function logout(){
        Auth::logout();
        return view('home');
    }

}
