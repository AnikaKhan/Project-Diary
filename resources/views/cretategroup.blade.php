<!DOCTYPE html>
<html >
<head>
  <meta charset="UTF-8">
  <title>Create Group</title>
  
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/meyer-reset/2.0/reset.min.css">
  <link rel="stylesheet" type="text/css" href="{{ asset('css/stylsheet.css') }}">
  
     
  <script src="https://cdnjs.cloudflare.com/ajax/libs/prefixfree/1.0.7/prefixfree.min.js"></script>

</head>

<body>

  <div id="main_conteiner">

         <div id= "header"  style="overflow:auto">
         <img  id="pic" src={{asset('picture/diary.png')}} style="float:left">
     <button class="headerBtn1" onclick="window.location.href='{{URL('/profile')}}';"> Profile </button>
     <button class="headerBtn2" onclick="window.location.href='{{URL('/dashboard')}}';"> Dashboard </button>
     <button class="headerBtn3" onclick="window.location.href='{{URL('/homepage')}}';" > Home </button>
     <div id="Project_Logo">
             Project Diary
      
     </div>
        
     </div>
     <br>
  
     @if(count($errors)>0)
  <div class="error">
    <ul>
      @foreach($errors->all() as $errors)
      <li>{{$errors}}</li>
      @endforeach
    </ul>
  </div>
  @endif

  <br>
  <b>


	 <form action="/group" method="POST">

    <label>Project Name:</label>
    <input type="text" name="project_name"><br>
    <label>Semester:</label>
    <input type="text" name="semester"><br><br><br><br><br><br><br>
    <label>Course Code:</label>
    <input type="text" name="code">
    
 
   <div>
  <dl class="dropdown"> 
  
    <dt>
    <a href="#">
      <span class="hida">Select Member .....</span>    
      <p class="multiSel"></p>  
    </a>
    </dt>
  	
    
    <dd>

        <div class="mutliSelect"><br><br>
            <ul>
                <li>
                @foreach($users as $user)
                    <input type="checkbox" value="{{ $user -> id}}" name="users[]" />{{ $user->first_name }} ( {{ $user->email }} )<br></li>
                 @endforeach
                
            </ul>
        </div>
    </dd>
    </div>
  
    <input type="submit" name="submit" value="Submit"/>
		<input type="hidden" name="_token" value="{{Session::token()}}">

    </form>
  

</dl>
  <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>

    <script  src="js/test.js"></script>

</body>
</html>
