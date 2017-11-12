<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Group;
use Auth;
use App\User;
use App\File;
use Illuminate\Support\Facades\Input;  
use Illuminate\Support\Facades\Storage;



class FileController extends Controller
{
    
    public function store(Request $request)
    {
       

        $upload = new File();
        $upload->filepath = $request->filepath.'.'.$request->file('upload')->getClientOriginalExtension();
        $upload->group_id = $request->group_id;

        $filename=$upload->filepath;
        if(Input::file('upload')){
        $request->file('upload')->move(base_path() . '/public/pdfjs/web/bookstore', $filename);
        }

        $upload->save();
    

        return redirect()->back();
    }
    


    

   
}
