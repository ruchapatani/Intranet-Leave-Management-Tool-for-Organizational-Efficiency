<?php
 $con=mysqli_connect('localhost','root','','leave_management');
  session_start();
if (!isset($_SESSION['email'])) {
    header('location: index.php');
}
?>


<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
  <head>
         <title>Settings</title>
        <link rel="stylesheet" type="text/css" href="style.css" >
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" >
    <!--jQuery library-->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <!--Latest compiled and minified JavaScript-->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    </head>
    <body>
        <div class="navbar navbar-inverse navbar-fixed-top" style="background-color: #E94022">
            <div class="container">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="index.php"><b style="color: #FFFFFF">Leave Management</b></a>
                </div>
                <div class="collapse navbar-collapse" id="myNavbar">
                    <ul class="nav navbar-nav navbar-right">
                        <li><a href="history.php"><span class="glyphicon glyphicon-time" style="color: #FFFFFF"></span><b style="color: #FFFFFF">History</b></a></li>
                        <li><a href="settings.php"><span class="glyphicon glyphicon-user" style="color: #FFFFFF"></span><b style="color: #FFFFFF">Settings</b></a></li>
                        <li><a href="logout.php"><span class="glyphicon glyphicon-log-out" style="color: #FFFFFF"></span><b style="color: #FFFFFF">Logout</b></a></li>
                    </ul>
                </div>
            </div>
        </div>
    <div class="banner" >
    <div class="container" style="max-width:500px;margin-left:auto;margin-right:auto; margin-top:100px;margin-bottom:350px">
                   
                    <form action='settings.php' method='post' align='center'>
                         <h1> Change Password </h1>

                        <div class="form-group">
                            <input type="password" id="myInput" name="old" class="form-control" placeholder="Old password" pattern=".{6,}"  required = "true">
                        </div>
                        <div class="form-group">
                            <input type="password" id="myInput" name="pass" class="form-control" placeholder="New password" pattern=".{6,}"  required = "true">
                        </div>
                         <div class="form-group">
                            <input type="password" id="myInput" name="pass1" class="form-control" placeholder="Re-Type New password" pattern=".{6,}"  required = "true">
                        </div>
                                                   <button class="btn btn-primary" name="change" onclick="alert('Password successfully Changed')">Change</button>
												   
						<?php 
	$old="ok@1234";				
	$pass="ok@1234";
    $pass1="ok@1234";
	
    if(isset($_POST['change']))
	{
	$old = $_POST['old'];
	$pass = $_POST['pass'];
	$pass1 = $_POST['pass1'];
	
	$query = "SELECT email, password FROM signup WHERE email ='" . $_SESSION['email'] . "'";
$result = mysqli_query($con, $query);
$row = mysqli_fetch_array($result);
$orig = $row['password'];
if ($pass != $pass1) {
    header('location: settings.php?error=The two passwords don\'t match');
} else {
    if ($old == $orig) {
        $query = "UPDATE  signup SET password = '" . $pass . "' WHERE email = '" . $_SESSION['email'] . "'";
        mysqli_query($con, $query) or die($mysqli_error($con));
		$queryy="INSERT INTO settings(email,old_password,new_password) VALUES ('" . $_SESSION['email'] . "','$old','$pass1')";
        $data=mysqli_query($con,$queryy);
	}
   }
	}
	
	?>
                    </form>
       </div> </div>
    </body>
<footer><div class="container" style="color:#FFFFFF"><b>Leave Management System</b></div></footer>
</html>
