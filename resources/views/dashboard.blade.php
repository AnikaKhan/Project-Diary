<!DOCTYPE html>
<html>
<head>	
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
        
     </div>
     <br><br>

     <center>
     	<button class="Create" onclick="window.location.href='{{URL('/grouppage')}}';"> Create New Group </button>
     </center>
     <div>
		 <h2 style="text-align:center">Project list</h2>
		 <center>
		  @foreach($groups as $group)
		<li> <a href="/group_profile/{{ $group->groups->project_name}}"> {{ $group->groups->project_name}} </a> </li> 
		 @endforeach
		 </center>

		
		 
		 </div>
		 
		 
       	
		  
</body>

</html>