<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Group;
use App\User;
use App\task;
use App\Conversation;
use App\File;
use Illuminate\Contracts\Auth\Authenticatable;
use DB;

class GroupController extends Controller
{


    
    public function getGroupProfile($project_name)
    {



        $groups= Group::where('project_name', $project_name)->get();
        $users = User::all();
        $tasks= Task::all();
        $files= File::all();
             
        return view('group_profile', ['groups'=>$groups , 'users'=>$users, 'tasks'=>$tasks, 'files' => $files]);
    }

    

    public function getGroup(){
    
        $users = User::all();
        return view('cretategroup', ['users'=>$users]);
    }


     public function createGroup(Request $request){

    

        $this->validate($request, [
            'project_name'=> 'required|unique:groups',
            'semester' => 'required',
            'code'=> 'required',
            ]);
        $data = new Group();
        
        $project_name = $request['project_name'];
        $semester = $request['semester'];
        $code = $request['code'];
        
        $data->project_name=$project_name;
        $data->semester=$semester;
        $data->code=$code;
        
        $data->save();

        $data->users()->sync($request->users);

        return redirect()->route('group_profile', [$project_name]);
    }
   
}