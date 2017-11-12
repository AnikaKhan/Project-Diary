
<!DOCTYPE html>
<html>

<head>
<link rel="stylesheet" type="text/css" href="{{ asset('css/stylsheet.css') }}">

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
	<b>
	<div id="ovrFlow" class="centr">
		<br>
	<p><img src={{asset('picture/pp.png')}} width="120" height="150" style="float:left"  >
	
	Name:
	<big>{{Auth::user()->first_name}}
	{{Auth::user()->last_name}}</big>
	<br><br>
	Email:
	{{Auth::user()->email}}
	<br><br>
	Instituion: 
	{{Auth::user()->inst}}
	<br><br>
	Recognition:
	{{Auth::user()->acctype}}
	<br><br>
	

	</b>
	<br><br>
	</p>
</div>
<div class="centr">
<button onclick="window.location.href='{{URL('/logout')}}';"> LOG OUT </button>
<!--<button onclick="window.location.href='{{URL('/grouppage')}}';"> Create Group </button>-->

</div>
</div>



</body>


</html>