<?php 
  $con=mysqli_connect('localhost','root','','leave_management');
  session_start();
 
 
 ?>

<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <title>Sign Up</title>
        <link rel="stylesheet" type="text/css" href="style.css" > 
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" >
    <!--jQuery library--> 
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <!--Latest compiled and minified JavaScript--> 
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    </head>
    
    
    <body>
        
         
                   <div class="header">
           <nav class="navbar navbar-fixed-top" style="background-color: #E94022 ">
            <div class="container">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>                        
                    </button>
                    <a class="navbar-brand" href="index.php" style="color: #FFFFFF"><b>Leave Management</b></a>
                </div>
                <div class="collapse navbar-collapse" id="myNavbar" >
                    <ul class="nav navbar-nav navbar-right" >
                        <li><a href="signup.php"><span class="glyphicon glyphicon-user" style="color:#FFFFFF"></span> <b style="color:#FFFFFF">Sign Up</b></a></li>
                        <li><a href="login.php"><span class="glyphicon glyphicon-log-in" style="color:#FFFFFF"></span><b style="color:#FFFFFF"> Login</b></a></li>
                    </ul>
                </div>
            </div>
        </nav>
                   </div>
           
        
      <div class="banner" >
       <div class="container" style="max-width:500px;margin-left:auto;margin-right:auto; margin-top:100px;margin-bottom:175px">
                   
                    <form action='signup.php' method='post' align= 'center'>
                         <h1> SIGN UP </h1>
                        <div class="form-group">
                            <input type="text"  class="form-control" name="name"  placeholder="Emplyee-Name" required = "true" pattern="^[A-Za-z\s]{1,}[\.]{0,1}[A-Za-z\s]{0,}$" >
                        </div>
                         <div class="form-group">
                            <input type="text"  class="form-control" name="id"  placeholder="Employee-ID" >
                        </div>
                        <div class="form-group">
                            <input type="text"  class="form-control" name="email" placeholder="Email" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,3}$"  name="e-mail" required = "true">
                        </div>
                         <div class="form-group">
                            <input type="password" id="myInput" name="password" class="form-control" placeholder="password" pattern=".{6,}"  required = "true">
                        </div>
                         <div class="form-group">
                            <input type="text"  class="form-control" name="contact" placeholder="Contact" maxlength="10" size="10">
                        </div>
                         <div class="form-group">
                            <input type="text"  class="form-control" name="city" placeholder="City" required = "true">
                        </div>
                         <div class="form-group">
                            <input type="text"  class="form-control" name="address" placeholder="Address" required = "true">
                        </div>
                              <button type="submit" name="submit" class="signupbtn" onclick="alert('you have signed up successfully')">Sign Up</button>
              <?php 
					
		$name="rucha";
        $id=1;
        $email="patanirucha@gmail.com";
        $password="hi@1234";
        $contact=1234567890;
        $city="bangalore";
        $address="india";
		
			if(isset($_POST['submit']))
    {
		$name=$_POST['name'];
        $id=$_POST['id'];
        $email=$_POST['email'];
        $password=$_POST['password'];
        $contact=$_POST['contact'];
        $city=$_POST['city'];
        $address=$_POST['address'];
        $query="INSERT INTO signup VALUES ('$name','$id','$email','$password','$contact','$city','$address')";
        $data=mysqli_query($con,$query);
    //echo("Error description: " . mysqli_error($name));
         
    }
	
	
	?>
				   </form>
       </div>
        </div>
    </body>
     <footer><div class="container" style="color:#FFFFFF"><b>Leave Management System</b></div></footer>
    
</html>