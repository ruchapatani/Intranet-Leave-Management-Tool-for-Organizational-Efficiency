<?php session_start();
		session_unset();
		session_destroy(); ?>


<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <title>Log Out</title>
        <link rel="stylesheet" type="text/css" href="style.css" > 
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" >
    <!--jQuery library--> 
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <!--Latest compiled and minified JavaScript--> 
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    </head>
    <body>
        <div class="banner" >
        <div class="container" style=" margin-top:100px; margin-bottom: 350px">
            <div class="jumbotron">
                <h1>Logged Out Successfully!</h1>
                <p>You can Log In<a href="login.php">here</a> </p>
            </div>
        </div> </div>
    </body>
    <footer><div class="container" style="color:#FFFFFF"><b>Leave Management System</b></div></footer>
</html>