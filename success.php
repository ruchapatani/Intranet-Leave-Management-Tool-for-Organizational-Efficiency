<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <title>Success</title>
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
		<div class="banner">
        <div class="container" style=" margin-top:100px; margin-bottom:300px">
            <div class="jumbotron">
                <h1>Your Leave is Applied!</h1>
                <p>You can check your leave history <a href="history.php">here</a> </p>
            </div>
        </div> </div>
    </body>
    <footer><div class="container" style="color:#FFFFFF"><b>Leave Management System</b></div></footer>
</html>