<!DOCTYPE html>
<html>
<head>
  <title>Group Profile</title>
  <style>


.col_container{
    display: table;
    width: 100%;
}

.col {
  display: table-cell;
  padding: 16px;
}
</style>

<link rel="stylesheet" type="text/css" href="{{ asset('css/testStyle.css') }}">

</head>
<body>

  

         <div id= "header"  style="overflow:auto">
         <img  id="pic" src={{asset('picture/diary.png')}} style="float:left">
     <button class="headerBtn1" onclick="window.location.href='{{URL('/profile')}}';"> Profile </button>
     <button class="headerBtn2" onclick="window.location.href='{{URL('/dashboard')}}';"> Dashboard </button>
     <button class="headerBtn3" onclick="window.location.href='{{URL('/homepage')}}';" > Home </button>
     <div id="Project_Logo">
             Project Diary
      
     </div>
        
     </div>  <br>
  <b>


<div>
    
  @foreach( $groups as $group)
      <center><h1> {{ $group->project_name }} <h1></center>
      <center>Members: @foreach($group->users as $user)
      <div>
      <li> {{ $user->email }} ( {{ $user->acctype }} )</li>
      </div><center>
      
      @endforeach
    @endforeach
 </div>

 <div class="col_container">
   <div class="col" style="background: #F0F0F0">
     <h1>To Do List: </h1>


        <form action="{{URL('/task')}}" method="post">
        

        <label>Task Title: </label><br>
        <input type="text" name="title"/><br>
        <label>Description: </label><br>
        <TEXTAREA  type="text" name="body"></TEXTAREA>
        <input type="hidden" name="group_id" value="{{ $group->id }}">
        <input type="submit" name="submit" value="Add"/>
        <input type="hidden" name="_token" value="{{Session::token()}}">
        </form>
        
                      @foreach($group->tasks as $task)
                      <br>    
                      Task Title:: {{ $task->title }} <br>
                            
                      Description :: {{ $task->body }}

                          
                        @endforeach

   </div>
   <div class="col" style="background: #CECECE">
     <h1>Upload File: </h1>

     <form action="{{URL('/file')}}" method="post" enctype="multipart/form-data">
        

        <label>Upload File: </label><br>
        <input type="file" name="upload"/><br>
        <input type="text" name="filepath" placeholder="File Name">
        <input type="hidden" name="group_id" value="{{ $group->id }}">
        <input type="submit" name="submit" value="Add"/>
        <input type="hidden" name="_token" value="{{Session::token()}}">
        </form>

        <div>
                  <table>
                    <thead>
                      <th>File Name</th>
                    </thead>
                    <tbody>
                      @foreach($group->files as $file)
                      <tr>
                      <td><a href="/pdfjs/web/bookstore/{{$file->filepath}}" download="{{$file->filepath}}"><h1>{{$file->filepath}}</h1></a>
</td> 
                      </tr> 
                      
                          
                     @endforeach

                    </tbody>

                  </table>
                  
        </div>

       
        

   </div>
 </div>
 <br>



<form action="{{URL('/chat')}}" method="POST" enctype="multipart/form-data">
{{ method_field('POST') }}

     <label><h1>Chat Box : </h1></label>
     <TEXTAREA type="text" name="chat" ></TEXTAREA>
     <input type="hidden" name="group_id" value="{{ $group->id }}">
     <input type="submit" name="submit1" value="Add"/>
     <input type="hidden" name="_token" value="{{Session::token()}}">
        

   </form>

   @foreach($group->chats as $chat)
                      <br>  {{ $chat->chat }} <br>
                            {{ $chat->user_id }} <br>
                            
                     

                          
                        @endforeach



</body>
</html>