<?php 
 
  $conn=mysqli_connect('localhost','root','','leave_management');
  session_start();
		 
if (isset($_SESSION['email'])) {
    header('location: login.php');
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
        <title>Leave Management</title>
     <!--  <link rel="stylesheet" type="text/css" href="style.css" > 
              Latest compiled and minified CSS -->
        <link rel="stylesheet" type="text/css" href="style.css" > 
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" >
    <!--jQuery library--> 
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <!--Latest compiled and minified JavaScript--> 
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script
       
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
             <div class="content">
                    <div class="banner-image">
                        <div class="inner-banner-image">
                            <div class="container">
                            <div class="banner-content">
                                <h1><b>Need a Break?</b></h1>
                                <p>Click here to apply for Leave</p>
                                <a class="btn btn-danger btn-lg active" href="login.php"> Apply Now!</a>
                            </div>
                            </div>
                        </div>
                </div>
                    </div>
                     
    </body>
    <footer><div class="container" style="color:#FFFFFF"><b>Leave Management System</b></div></footer>
</html>