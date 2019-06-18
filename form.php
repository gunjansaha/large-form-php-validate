<?php
   
	if(isset($_POST["submitt"]))
{   
    $con=mysqli_connect('localhost','root','','demo');
    $first_name=$_POST['first_name'];                           
	 $last_name=$_POST['last_name'];
	$gender=$_POST['gender'];
	$age=$_POST['age'];
	$phone=$_POST['phone'];
	$address=$_POST['address'];
	$city=$_POST['city'];
	$state=$_POST['state'];
	$zip=$_POST['zip'];
	$about=$_POST['about'];
    $email=$_POST['email'];
	$password=$_POST['password'];
	$confirmPassword=$_POST['confirmPassword'];
	
	   $imagename=$_FILES['img1']['name'];
	  $tempimagename=$_FILES['img1']['tmp_name'];
	  move_uploaded_file($tempimagename,"images/$imagename");
	  	




/*php form validation */

      if(empty($first_name))
	  {
		
		  $error['first_name']="firstname is emplty";
		  
	  }
	   $firstname=$_POST['first_name']; 
	   
		   if(!preg_match("/^[a-zA-Z '.-]*$/",$firstname))
		   {
			   $error['first_name']="only letter allowed";
		   }
			   
	  
	  
	   if(empty($last_name))
	  {
		
		  $error['last_name']="lastname is emplty";
		  
	  }
	    $lastname=$_POST['last_name']; 
	   
		   if(!preg_match("/^[a-zA-Z '.-]*$/",$lastname))
		   {
			   $error['last_name']="only letter allowed";
		   }
		   
		   if(empty($_POST['genter']))
	      {
		 
	      $error['gender']="gender is emplty"; 
			 
	      }
			  
			    if(empty($age))
	      {
		 
	      $error['age']="age is emplty"; 
			 
	      }
		  	    if(empty($imagename))
	      {
		 
	      $error['imagename']="file is emplty"; 
			 
	      }
		    
			
			
			
		    	    if(empty($phone))
	      {
		 
	      $error['phone']="phone number is emplty"; 
			 
	      }
		  
		  $phone=$_POST['phone'];
              if(!is_numeric($phone))
			  {
				  $error['phone']="only digit are allowed";
			  }
			  
			  if((strlen($phone)!=10))
			  {
				  $error['phone']="phone number must be 10 digit";
			  }
				  
			  
			  
			  
			  
		     	    if(empty($address))
	      {
		 
	      $error['address']="address  is emplty"; 
			 
	      }
			    	    if(empty($city))
	      {
		 
	      $error['city']="city is emplty"; 
			 
	      }
		  $state=$_POST['state'];
		    if($state == "NULL")
	      {
		 
	      $error['state']="state is empty"; 
			 
	      }
		  	    	    if(empty($zip))
	      {
		 
	      $error['zip']="zip is emplty"; 
			 
	      }
		      if(empty($about))
	      {
		 
	      $error['about']="about
		  is emplty"; 
			 
	      }
		   if(empty($email))
	      {
		 
	       $error['email']="email is emplty";
			 
	      }
		
		  $password=$_POST['password'];
	$confirmPassword=$_POST['confirmPassword'];
		    if($confirmPassword!==$password)
	      {
		 
	  echo"password mot matching";
			 
	      }
	}
		  
if(isset($_POST["submit"]))
{	
	 $con=mysqli_connect('localhost','root','','demo');
    $first_name=$_POST['first_name'];                           
	 $last_name=$_POST['last_name'];
	$gender=$_POST['gender'];
	$age=$_POST['age'];
	$phone=$_POST['phone'];
	$address=$_POST['address'];
	$city=$_POST['city'];
	$state=$_POST['state'];
	$zip=$_POST['zip'];
	$about=$_POST['about'];
    $email=$_POST['email'];
	$password=$_POST['password'];
	$confirmPassword=$_POST['confirmPassword'];
	
	   $imagename=$_FILES['img1']['name'];
	  $tempimagename=$_FILES['img1']['tmp_name'];
	  move_uploaded_file($tempimagename,"images/$imagename");
	 $query=("select * from demo where email='$email'  ");
	$run=mysqli_query($con,$query);
	$num=mysqli_num_rows($run);
	
	    if($num==1)
	{   
		?>
		
		<script>alert("data is allready exist");</script>
		<?php
		
	}
	else{
	     $query="INSERT INTO demo(first_name,last_name,gender,age,phone,address,city,state,zip,about,email,password,imagename) VALUES ('$first_name','$last_name','$gender','$age','$phone','$address','$city','$state','$zip','$about','$email','$password','$imagename')" ;
	     $run1=mysqli_query($con,$query);
	
	
	        if($run1==true)
	        {
		    ?>
		      <script>alert("data is inserted");</script>
		    <?php
		
	       }
        }
}
?>
			
			
	

	



<html class="gr__localhost"><head><title>Demo</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="css.css">

<link type="text/css" rel="stylesheet" href="style.css">    
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Oswald">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open Sans">

<link rel="stylesheet" href="//code.jquery.com/ui/1.11.4/themes/smoothness/jquery-ui.css">
    <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css" />
<link href="css/bootstrap-theme.min.css" rel="stylesheet" type="text/css" />
<link href="css/style.css" rel="stylesheet" type="text/css" />

    
<style>
h1,h2,h3,h4,h5,h6 {font-family: "Oswald"}
body {font-family: "Open Sans"}
    
    
.select-boxes{text-align: center;}
select {
    background-color: #F5F5F5;
    border: 1px double #15a6c7;
    color: #1d93d1;
    font-family: Georgia;
    font-weight: bold;
    font-size: 14px;
    height: 39px;
    padding: 7px 8px;
    width: 250px;
    outline: none;
    margin: 10px 0 10px 0;
}
select option{
    font-family: Georgia;
    font-size: 14px;
}
    
    
/* Basic reset */
* {
	margin: 0;
	padding: 0;
	box-sizing: border-box;
	
	/* Better text styling */
	font: bold 14px Arial, sans-serif;
}
 
/* Finally adding some IE9 fallbacks for gradients to finish things up */
 
/* A nice BG gradient */
html {
	height: 100%;
	background: white;
	background: radial-gradient(circle, #fff 20%, #ccc);
	background-size: cover;
}
 
/* Using box shadows to create 3D effects */
#calculator {
    width: 325px;
    height: auto;
    margin: 0px auto;
    padding: 20px 20px 9px;
    background: #9dd2ea;
    background: linear-gradient(rgba(171, 183, 241, 0.87), #8bceec);
    border-radius: 20px;
    box-shadow: 0px 4px rgba(0, 104, 136, 0.53), 0px 10px 15px rgba(0, 0, 0, 0.2);
}
 
/* Top portion */
.top span.clear {
	float: left;
}
 
/* Inset shadow on the screen to create indent */
.top .screen {
	height: 40px;
	width: 212px;
	
	float: right;
	
	padding: 0 10px;
	
	background: rgba(0, 0, 0, 0.2);
	border-radius: 3px;
	box-shadow: inset 0px 4px rgba(0, 0, 0, 0.2);
	
	/* Typography */
	font-size: 17px;
	line-height: 40px;
	color: white;
	text-shadow: 1px 1px 2px rgba(0, 0, 0, 0.2);
	text-align: right;
	letter-spacing: 1px;
}
 
/* Clear floats */
.keys, .top {overflow: hidden;}
 
/* Applying same to the keys */
.keys span, .top span.clear {
	float: left;
	position: relative;
	top: 0;
	
	cursor: pointer;
	
	width: 66px;
	height: 36px;
	
	background: white;
	border-radius: 3px;
	box-shadow: 0px 4px rgba(0, 0, 0, 0.2);
	
	margin: 0 7px 11px 0;
	
	color: #888;
	line-height: 36px;
	text-align: center;
	
	/* prevent selection of text inside keys */
	user-select: none;
	
	/* Smoothing out hover and active states using css3 transitions */
	transition: all 0.2s ease;
}
 
/* Remove right margins from operator keys */
/* style different type of keys (operators/evaluate/clear) differently */
.keys span.operator {
	background: #FFF0F5;
	margin-right: 0;
}
 
.keys span.eval {
	background: #f1ff92;
	box-shadow: 0px 4px #9da853;
	color: #888e5f;
}
 
.top span.clear {
	background: #ff9fa8;
	box-shadow: 0px 4px #ff7c87;
	color: white;
}
 
/* Some hover effects */
.keys span:hover {
    background: #1d91d0;
    box-shadow: 0px 4px #0676b3;
    color: #f1f1f1;
}
 
.keys span.eval:hover {
	background: #abb850;
	box-shadow: 0px 4px #717a33;
	color: #ffffff;
}
 
.top span.clear:hover {
	background: #f68991;
	box-shadow: 0px 4px #d3545d;
	color: white;
}
 
/* Simulating "pressed" effect on active state of the keys by removing the box-shadow and moving the keys down a bit */
.keys span:active {
	box-shadow: 0px 0px #6b54d3;
	top: 4px;
}
 
.keys span.eval:active {
	box-shadow: 0px 0px #717a33;
	top: 4px;
}
 
.top span.clear:active {
	top: 4px;
	box-shadow: 0px 0px #d3545d;
}
.error{
	color:#cc0000;
	padding-top=5px;
	float:left;
	width:100%;
}
 
 
</style>
    
    
      
    
</head><body class="w3-light-grey" data-gr-c-s-loaded="true">
 
<!-- Navigation bar with social media icons -->
<div class="w3-bar w3-black w3-hide-small">
  <a href="https://www.facebook.com/lisenme/" class="w3-bar-item w3-button"><i class="fa fa-facebook-official"></i></a>
  <a href="https://twitter.com/LisenMee" class="w3-bar-item w3-button"><i class="fa fa-twitter"></i></a>
  <a href="https://www.youtube.com/channel/UCEdC6Qk_DZ9fX_gUYFJ1tsA" class="w3-bar-item w3-button"><i class="fa fa-youtube"></i></a>
  <a href="https://plus.google.com/115714479889692934329" class="w3-bar-item w3-button"><i class="fa fa-google"></i></a>
  <a href="https://www.linkedin.com/in/lisen-me-b017a8137/" class="w3-bar-item w3-button"><i class="fa fa-linkedin"></i></a>
</div>
  
<!-- w3-content defines a container for fixed size centered content, 
and is wrapped around the whole page content, except for the footer in this example -->
<div class="w3-content" style="max-width:1600px">
 

  
  <!-- Image header -->
 
 
  <!-- Grid -->
  <div class="w3-row w3-padding w3-border">
 
    <!-- Blog entries -->
    <div class="w3-col l12 s12">
    
      <!-- Blog entry -->
      <div class="w3-container w3-white w3-margin w3-padding-large">
        
          <h2 style="text-align: center" ;=""> Validation Form using Bootstrap by gunjan</h2>
          <br>
          <div class="select-boxes">
    
  <div class="container">
<div class="col-lg-9">
	        <br>
  
 
 
<br>
 
 
  <form class="form-horizontal" onsubmit="return validation()" action=" " method="post" enctype="multipart/form-data" >
    <fieldset>
      
      <!-- Form Name -->
      <legend> Personal Information </legend>
    
      <!-- Text input-->
      
      <div class="form-group">
        <label class="col-md-10 control-label">First Name</label>
        <div class="col-md-10  inputGroupContainer">
          <div class="input-group"> <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
            <input id="first_name" name="first_name" placeholder="First Name" class="form-control"  type="text"></br>
			<?php
			 if(isset($error['first_name']))
			 {
				 echo"<div class='error'>". $error['first_name']."</div>";
			 }
			 ?>
			<p id="rfirst_name" > </p>
          </div>
        </div>
      </div>
	  </br></br>
      
      <!-- Text input-->
      
      <div class="form-group">
        <label class="col-md-4 control-label" >Last Name</label>
        <div class="col-md-6  inputGroupContainer">
          <div class="input-group"> <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
            <input name="last_name" placeholder="Last Name" class="form-control"  type="text"></br>
			<?php
			 if(isset($error['last_name']))
			 {
				 echo"<div class='error'>". $error['last_name']."</div>";
			 }
			 ?>
			</br>
          </div>
        </div>
      </div>
	  </br>
	  <!-- radio buttom-->
	  
	   <div class="form-group">
       
        <div class="col-md-10  inputGroupContainer">
          <div class="input-group"> <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
           gender
           <label class="radio-inline"><input type="radio" value="male"  name="gender" <?phpif(isset($gender)&& $gender='male') echo'check="checked"';?>>male</label>
           <label class="radio-inline"><input type="radio" value="female" name="gender"<?phpif(isset($gender)&& $gender='female') echo'check="checked"';?>>female</label>
		   </br>
			<?php
			 if(isset($error['gender']))
			 {
				 echo"<div class='error'>". $error['gender']."</div>";
			 }
			 ?>
			</br>
		   	
          </div>
        </div>
      </div>
	  </br>
	  <!-- numeric input-->
      
    <div class="form-group">
      
        <div class="col-md-6  inputGroupContainer">
          <div class="input-group"> <span class="input-group-addon"><i class="glyphicon glyphicon-earphone"></i></span>
         age   <input type="number" name="age" min="1" max="150">
		 </br>
			<?php
			 if(isset($error['age']))
			 {
				 echo"<div class='error'>". $error['age']."</div>";
			 }
			 ?>
			</br>
		 
          </div>
        </div>
      </div>
	  </br>


 <!-- Text input-->
      
      <div class="form-group">
	  
        <div class="col-md-6  inputGroupContainer">
          <div class="input-group"> <span class="input-group-addon"><i class="glyphicon glyphicon-earphone"></i></span>
         <input type="file" name="img1" class="custom-file-input" id="customFile">
		  </br>
			<?php
			 if(isset($error['imagename']))
			 {
				 echo"<div class='error'>". $error['imagename']."</div>";
			 }
			 ?>
			</br>
          </div>
        </div>
      </div>	  
      
    
      <!-- Text input-->
      
      <div class="form-group">
        <label class="col-md-4 control-label">Phone</label>
        <div class="col-md-6  inputGroupContainer">
          <div class="input-group"> <span class="input-group-addon"><i class="glyphicon glyphicon-earphone"></i></span>
            <input name="phone" placeholder="(000)000-0000" class="form-control" type="text">
			 </br>
			<?php
			 if(isset($error['phone']))
			 {
				 echo"<div class='error'>". $error['phone']."</div>";
			 }
			 ?>
			</br>
				
			
          </div>
        </div>
      </div>
      
      <!-- Text input-->
      
      <div class="form-group">
        <label class="col-md-4 control-label">Address</label>
        <div class="col-md-6  inputGroupContainer">
          <div class="input-group"> <span class="input-group-addon"><i class="glyphicon glyphicon-home"></i></span>
            <input name="address" placeholder="Address" class="form-control" type="text">
			 </br>
			<?php
			 if(isset($error['address']))
			 {
				 echo"<div class='error'>". $error['address']."</div>";
			 }
			 ?>
			</br>
				
          </div>
        </div>
      </div>
      
      <!-- Text input-->
      
      <div class="form-group">
        <label class="col-md-4 control-label">City</label>
        <div class="col-md-6  inputGroupContainer">
          <div class="input-group"> <span class="input-group-addon"><i class="glyphicon glyphicon-home"></i></span>
            <input name="city" placeholder="city" class="form-control"  type="text">
			 </br>
			<?php
			 if(isset($error['city']))
			 {
				 echo"<div class='error'>". $error['city']."</div>";
			 }
			 ?>
			</br>
				
          </div>
        </div>
      </div>
      
      <!-- Select Basic -->
      
      <div class="form-group">
        <label class="col-md-4 control-label">State</label>
        <div class="col-md-6 selectContainer">
          <div class="input-group"> <span class="input-group-addon"><i class="glyphicon glyphicon-list"></i></span>
            <select name="state" class="form-control selectpicker" >
              <option value="null">Please select your state</option>
              <option>Alabama</option>
              <option>Alaska</option>
              <option >Arizona</option>
              <option >Arkansas</option>
              <option >California</option>
              <option >Colorado</option>
              <option >Connecticut</option>
              <option >Delaware</option>
              <option >District of Columbia</option>
              <option> Florida</option>
              <option >Georgia</option>
              <option >Hawaii</option>
              <option >daho</option>
              <option >Illinois</option>
              <option >Indiana</option>
            
            </select>
			<?php
			 if(isset($error['state']))
			 {
				 echo"<div class='error'>". $error['state']."</div>";
			 }
			 ?>
					 </br>
			
          </div>
        </div>
      </div>
	  
			</br>
      
      <!-- Text input-->
      
    <!-- Text input-->
      
      <div class="form-group">
        <label class="col-md-4 control-label">zip</label>
        <div class="col-md-6  inputGroupContainer">
          <div class="input-group"> <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
            <input  name="zip" placeholder="kol-700131" class="form-control"  type="text">
				 </br>
			<?php
			 if(isset($error['zip']))
			 {
				 echo"<div class='error'>". $error['zip']."</div>";
			 }
			 ?>
			</br>
          </div>
        </div>
      </div>
      
        <!-- Text area -->
      
      <div class="form-group">
        <label class="col-md-4 control-label">About </label>
        <div class="col-md-6  inputGroupContainer">
          <div class="input-group"> <span class="input-group-addon"><i class="glyphicon glyphicon-pencil"></i></span>
            
			<input  name="about" placeholder="i am good" class="form-control"  type="text">
				 </br>
			<?php
			 if(isset($error['about']))
			 {
				 echo"<div class='error'>". $error['about']."</div>";
			 }
			 ?>
			</br>
				
          </div>
        </div>
      </div>
      
	   
	  
	  
	  
     
       </fieldset>
       	<legend> Account information </legend>
        <fieldset>
        <!-- Text input-->
		
		
		
		
      <div class="form-group">
        <label class="col-md-4 control-label">email</label>
        <div class="col-md-6  inputGroupContainer">
          <div class="input-group"> <span class="input-group-addon"><i class="glyphicon glyphicon-pencil"></i></span>
            
			 <input type="email" name="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
				 </br>
			<?php
			 if(isset($error['email']))
			 {
				 echo"<div class='error'>". $error['email']."</div>";
			 }
			 ?>
			</br>
				
          </div>
        </div>
      </div>
      
      
    
        <div class="form-group has-feedback">
            <label for="password"  class="col-md-4 control-label">
                    Password
                </label>
                <div class="col-md-6  inputGroupContainer">
                <div class="input-group"> <span class="input-group-addon"><i class="glyphicon glyphicon-home"></i></span>
             <input class="form-control" id="userPw" type="password" placeholder="password" 
                       name="password" data-minLength="5"
                       data-error="some error"
                       required/>
					   	 
			
		
                <span class="glyphicon form-control-feedback"></span>
                <span class="help-block with-errors"></span>
                </div>
             </div>
        </div>
     
        <div class="form-group has-feedback">
            <label for="confirmPassword"  class="col-md-4 control-label">
                   Confirm Password
                </label>
                 <div class="col-md-6  inputGroupContainer">
                <div class="input-group"> <span class="input-group-addon"><i class="glyphicon glyphicon-home"></i></span>
            <input class="form-control {$borderColor}" id="userPw2" type="password" placeholder="Confirm password" 
                       name="confirmPassword" data-match="#confirmPassword" data-minLength="5"
                       data-match-error="some error 2"
                       required/>
		
                <span class="glyphicon form-control-feedback"></span>
                <span class="help-block with-errors"></span>
      			 </div>
             </div>
        </div>			   					   	 </br>
			
			</br>
     
  
      <!-- Button -->
      <div class="form-group">
        <label class="col-md-4 control-label"></label>
        <div class="col-auto my-1">
      <button type="submit"  name="submit" class="btn btn-primary">Submit</button>
	  <button type="submit"  name="submitt" class="btn btn-primary">validation</button>
    </div>
  </div>
      </div>
    </fieldset>
  </form>
</div>
 <a href="record.php">result</a>
</div>
   	 
     
<!-- PrefixFree -->

    
    </div>
 
          
            
      </div>
      
    </div>
 
  </div>
 
</div>
 
</body>
</html>


		
		
		
	<script type="text/javascript">
		

		function validation(){   

			var first_name = document.getElementById('first_name').value;
			



			if(first_name== ""){
				console.log("not");
				document.getElementById('rfirst_name').innerHTML =" ** Please fill the first_name field";
				return false;
			}
			if((first_name.length <= 2) || (user.length > 20)) {
				console.log("not");
				document.getElementById('rfirst_name').innerHTML =" ** first_name lenght must be between 2 and 20";
				return false;	
			}
			if(!isNaN(first_name)){
				console.log("not");
				document.getElementById('rfirst_name').innerHTML =" ** first_name characters are allowed";
				return false;
			}







	</script>


