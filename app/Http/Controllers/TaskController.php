<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Group;
use Auth;
use App\User;
use App\Task;


class TaskController extends Controller
{

    public function store(Request $request)
    {
        $this->validate($request, [
            'body'=>'required|max:1000'
            ]);

        $task = new Task();
         $task->title = $request->title;
        $task->body = $request->body;
        $task->user_id = Auth::user()->first_name;
        $task->group_id = $request->group_id;
        $task->save();
        //$group = Group::findOrFail($comment->group_id);
        
        //$comments = Conversation::orderby('created_at', 'desc')->get();


        return redirect()->back();
    }

       
   
}
