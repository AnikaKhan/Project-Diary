<!DOCTYPE html>
<html>
<head>
	<title> Online Project Diary</title>
	<link rel="stylesheet" type="text/css" href="{{ asset('css/stylsheet.css') }}">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/meyer-reset/2.0/reset.min.css">
</head>
<body       
		@if(count($errors)>0)
	<div class="error">
		<ul>
			@foreach($errors->all() as $errors)
			<li>{{$errors}}</li>
			@endforeach
		</ul>
	</div>
	@endif
		
		 <div id="main_conteiner">

       	 <div id= "header">
       	 <img  id="pic" src={{asset('picture/diary.png')}}>
		

<button class = "submit1" onclick="document.getElementById('id01').style.display='block'" >LOG IN</button>

<div id="id01" class="modal">
  
  <form class="modal-content animate" action="{{URL('/login')}}" method="post">
    <div class="imgcontainer">
      <span onclick="document.getElementById('id01').style.display='none'" class="close" title="Close Modal">&times;</span>
    </div>

    <div class="container">
      <label><b>Email</b></label>
      <input type="text" placeholder="Enter Email" name="email" required>

      <label><b>Password</b></label>
      <input type="password" placeholder="Enter Password" name="password" required>
        
      <button class="submit" type="submit">Login</button>

		<input type="hidden" name="_token" value="{{Session::token()}}">
      
    </div>
	
    
  </form>
</div>

<script>
// Get the modal
var modal = document.getElementById('id01');

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
    if (event.target == modal) {
        modal.style.display = "none";
    }
}
</script>



		 <button class="submit2" onclick="window.location.href='{{URL('/regpage')}}';"> REG IN </button>
		 <div id="Project_Logo">
		         Project Diary
		 	
		 </div>
       	  </div>



       	   <h1 id="about"> About</h1>
		 <p id="paragraph">  Project Diary is a new addition to the field of Web application. It represents 
		 a relatively new trend in the field of web application and involves the use of mobile and personal 
		 computer. Project Diary which is an amazement in the field of web application and involves the use 
		 of mobile devices as a source of any team work with any coordinator. While much of the underlying 
		 technology is already available, there are still open challenges with respect to design, usability, 
		 portability and functionality and implementation aspects.  </p>
       	</div>
       	 
		


</body>

</html>