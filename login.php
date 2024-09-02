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
        <title>Login</title>
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
            
   <div class="banner">
      <div id="content" style="margin-top: 200px ; margin-bottom:147px">
	  
            <div class="container-fluid decor_bg" id="login-panel">
                <div class="row">
                    <div class="col-md-4 col-md-offset-4">
                        <div class="panel panel-primary" >
                            <div class="panel-heading">
                                <h4>LOGIN</h4>
                            </div>
                            <div class="panel-body">
                                <p class="text-warning"><i>Login to apply for leave</i><p>
                                <form action="login.php" method="POST">
                                    <div class="form-group">
                                        <input type="email" class="form-control"  placeholder="Email" name="email" required = "true">
                                    </div>
                                    <div class="form-group">
                                        <input type="password" class="form-control" placeholder="Password" name="password" required = "true">
                                    </div>
                                    <button type="submit" name="submit" class="btn btn-primary">Login</button><br><br>
									 <?php 
					
		
        $email="patanirucha@gmail.com";
        $password="hi@1234";
  
		
			if(isset($_POST['submit']))
    {
		
        $email=$_POST['email'];
		$_SESSION['email'] = $email ;
        $password=$_POST['password'];
        $queryy="INSERT INTO login VALUES ('$email','$password')";
        $data=mysqli_query($con,$queryy);
    //echo("Error description: " . mysqli_error($name));
		$query = "SELECT id, email FROM signup WHERE email='" . $email . "' AND password='" . $password . "'";
$result = mysqli_query($con, $query)or die($mysqli_error($con));
$num = mysqli_num_rows($result);
// If the email and password are not present in the database, the mysqli_num_rows returns 0, it is assigned to $num.
if ($num == 0) {
  $error = "<span class='red'>Please enter correct E-mail id and Password</span>";
  header('location: login.php?error=' . $error);
} else {  
  $row = mysqli_fetch_array($result);
  
		
           header('location:applyleave.php');
       
  
}
    }
	
	
	?>
                                   
                                </form><br/>
                            </div>
                            <div class="panel-footer"><p>Don't have an account? <a href="signup.php">Register</a></p></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </body>
<footer><div class="container" style="color:#FFFFFF"><b>Leave Management System</b></div></footer>
</html>
    	 
