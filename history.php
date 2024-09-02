<?php $con=mysqli_connect('localhost','root','','leave_management');
			 session_start();
			
            
?>

<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
--><html>
  <head>
         <title>History</title>
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
	
     <table class="table" style="max-width:500px;margin-left:auto;margin-right:auto;margin-top :200px;margin-bottom:350PX;color:white; background-color: rgba(240, 96, 58, 0.7);">
            <tbody>
            
                <tr>
                
                	<th>Date of Applying Leave</th>
                	<th>Leave Starting </th>
                	<th> Leave Ending</th>
                	<th>No.of Days</th>
                	<th>Type of leave</th>
                	<th>Reason</th></tr>
            </tbody>

            <?php

	   
	  $sql="select  date_of_applying, leave_starting,leave_ending, no_days, type_of_leave , reason from history where email= '" .$_SESSION['email']."' ";
	  $result=$con-> query($sql);
	  if ($result-> num_rows > 0) {
	  	while ($row=$result-> fetch_assoc()) {
	  		echo "<tr><td>".$row["date_of_applying"]."</td><td>".$row["leave_starting"]."</td><td>".$row["leave_ending"].
	  		"</td><td>".$row["no_days"]."</td><td>".$row["type_of_leave"]."</td><td>".$row["reason"]."</td></tr>";
	  	}
	  	echo "</table>";
	  }
	  else{
	  	echo "No previous leave history available";
	  }
	  
	  
	 
	  $con->close();
	  ?>

 <a href="applyleave.php" > <button type="submit" name="submit" class="btn btn-primary"> Apply For Leave </button><br><br> </a>


	 

        </table>
</div> 
    </body>
    <footer><div class="container" style="color:#FFFFFF"><b>Leave Management System</b></div></footer>
</html>
