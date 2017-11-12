<!DOCTYPE html>
<html>
<head>
	<title>Registration</title>
	
	

	<link rel="stylesheet" type="text/css" href="{{ asset('css/stylsheet.css') }}">
	<link rel="stylesheet" type="text/css" href="{{ asset('css/reg.css') }}">
</head>
<body style="background: whitesmoke">

	<div id= "header"  style="overflow:auto">
       	 <img  id="pic" src={{asset('picture/diary.png')}} style="float:left">
		 <button class="headerBtn1" onclick="window.location.href='{{URL('/profile')}}';"> Profile </button>
		 <button class="headerBtn2" onclick="window.location.href='{{URL('/dashboard')}}';"> Dashboard </button>
		 <button class="headerBtn3" onclick="window.location.href='{{URL('/homepage')}}';" > Home </button>
		 <div id="Project_Logo">
		         Project Diary
		 	
		 </div>
       	
		 </div>

	@if(count($errors)>0)
	<div class="error">
		<ul>
			@foreach($errors->all() as $errors)
			<li>{{$errors}}</li>
			@endforeach
		</ul>
	</div>
	@endif
	<div id="formdiv">
	
		<form action="{{URL('/reg')}}" method="post">
		

		<label>First Name:</label>
		<input type="text" name="first_name"/><br><br>
		<label>Last Name:</label>
		<input type="text" name="last_name"/><br><br>
		<label>Institution:</label>
		<input type="text" name="inst"/><br><br>
		<label>Email:</label>
		<input type="text" name="email"/><br><br>
		<label>Password:</label>
		<input type="password" name="password"/><br><br>
		<label>Confirm Password:</label>
		<input type="password" name="password_confirmation"/><br><br>
		<label> Account Type:</label><br>
		<label>Student</label>
		<input type="radio" name="acctype" value="Student" checked="">
		<label>Instructor</label>
		<input type="radio" name="acctype" value="Instructor" checked=""><br><br>
		<input type="submit" name="submit" value="Register"/>
		<input type="hidden" name="_token" value="{{Session::token()}}">

			
		</form>
	</div>

</body>
</html>