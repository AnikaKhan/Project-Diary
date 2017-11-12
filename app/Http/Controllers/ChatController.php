<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Group;
use Auth;
use App\User;
use App\Chat;


class ChatController extends Controller
{

	public function store(Request $request)
    {
        $this->validate($request, [
            'chat'=>'required|max:1000'
            ]);

        $ddd = new Chat();
        $ddd->chat = $request->chat;
        $ddd->user_id = Auth::user()->first_name;
        $ddd->group_id = $request->group_id;
        $ddd->save();
        
        return redirect()->back();
            }

   public function index(){
   	return view('home');
   	   }

}
