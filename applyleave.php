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
         <title>Apply Leave</title>
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
	<div class="inbanner">
    <div class="container" style="max-width:500px;margin-left:220px; margin-top:100px;margin-bottom:235px; ">
                   
      
         	<table class="table " style="max-width:500px;margin-right:auto;margin-top :50px;margin-bottom:50px; align:center; color:white">
	            <tbody>
	            <b>
	                <tr>
	                	<th>Date of Applying Leave</th>
	                	<th>Leave Starting </th>
	                	<th> Leave Ending</th>
	                	<th>No.of Days</th>
	                </tr> </b>
	          		<form action="applyleave.php" method="post" align=" center">
	                <tr>
					
		                
					
	                	<td> 
		                 	<div class="form-group">
		                        <input type="date"  class="form-control" name="date_of_applying"  > 

		                    </div>
	                    </td> 
	                    <td>
	                        <div class="form-group">
	                            <input type="date"  class="form-control" name="leave_starting"  > 
	                        </div>
	                    </td>
	                    <td>
	                    	<div class="form-group">
	                            <input type="date"  class="form-control" name="leave_ending"  > 
	                        </div>
	                    </td>
	                    <td>
	                    	<div class="form-group">
	                            <input type="text"  class="form-control" name="no_days"  >
	                        </div>
	                	</td>
	            	</tr>
	            </tbody>
            </table>
                    
        <div class="form-group" >
            <h4 style="color: white"> Type Of Leave:</h4>
            <select name="type_of_leave" class="form-control" >
            	  <option value="">Select</option>
				  <option value="Casual Leave">Casual Leave</option>
				  <option value="On Official Duty">On Official Duty</option>
				  <option value="Comp Off">Comp Off</option>
				  <option value="Sick Leave"> Sick Leave</option>
				  <option value="Maternity/Paternity"> Maternity/Paternity</option>
			</select> 
			
        </div>
                   
        <div class="form-group" >
        	<input type="text"  class="form-control" name="reason"  placeholder="Reason for leave" >  
        </div>
                        
        
     <button type="submit" name="apply" class="signupbtn" onclick="alert('Leave Applied')"> Apply </button>
	   <?php
	 
	   $email= "patanirucha@gmail.com";
        $date_of_applying= "10-10-2019";
        $leave_starting= "10-10-2019";
        $leave_ending = "10-10-2019";
        $no_days = 1;
        $type_of_leave = "Sick Leave";
        $reason = "reason"; 
	   
	   if(isset($_POST['apply']))
    {
		
        $date_of_applying= $_POST['date_of_applying'];
        $leave_starting= $_POST['leave_starting'];
        $leave_ending = $_POST['leave_ending'];
        $no_days = $_POST['no_days'];
        $type_of_leave = $_POST['type_of_leave'];
        $reason = $_POST['reason']; 
		$query = "INSERT INTO history(email, date_of_applying ,leave_starting ,leave_ending , no_days , type_of_leave , reason) VALUES('" .$_SESSION['email']."','" . $date_of_applying . "','" . $leave_starting . "','" . $leave_ending . "','" . $no_days . "','" . $type_of_leave . "','" . $reason . "')";
   $data=mysqli_query($con,$query);  
     
    }
?>
</form>
       </div>
     </div> </div>
    </body>
     <footer><div class="container" style="color:#FFFFFF"><b>Leave Management System</b></div></footer>

     	
</html>

