<?php
#    	header("Cache-Control: no cache");
#        session_cache_limiter("private_no_expire");	
        session_start();
        $con=mysqli_connect('localhost','root','root');
        mysqli_select_db($con , 'my_doctor_friend');    
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    
    <link rel="stylesheet" href="index.css">
    <style>
        body{
            background-image:url("./upload/m18.jpg");
	        background-repeat:no-repeat;
        	background-size:cover;
        }
    </style>
    <title>Welcome Page</title>
</head>
<body>
        
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>

    <?php    
    $Doctor_username=$_SESSION['Username'];
    ?>

    <h2 style="color:white;">
        Welcome Doctor ,
        <?php echo  $Doctor_username; ?>
    </h2>    

    <div class="container">
		<div class="row">
			<div class="col-lg-6">
                <form  method="post" action="nextpage2.php">
                    <div class="heading12">
                        <label >Enter The Mobile Number Provided </label>
                        <input type="text" name="Patient_Mobile" class="form-control" placeholder="Mobile Number" required>
                    </div>
                    <div class="heading12">
                        <label >Enter The Date Of Birth </label>
                        <input type="text" name="Patient_DOB" class="form-control" placeholder="DOB" required>
                    </div>
                    <div class="heading12">
                        <label >Enter The Appointment Date </label>
                        <input type="text" name="apt_date_given" class="form-control" placeholder="Appointment Date" required>
                    </div>
                    <br>
                    <button type="submit" class="btn btn-danger">Get INFORMATION</button>
                </form>
            </div>
            <div class="col-lg-5">
            </div>
            <div class="col-lg-1">
            
                <form  action="logout.php"  style="width:100px;height:60px;padding:10px;">
                    <button type="submit" class="btn btn-danger">Logout</button>
                </form>
            <!--
            		<div class="card" style="width: 18rem;" >
  						<img class="card-img-top" src="./upload/out.jpg" alt="Card image cap">
  							<div class="card-body">
    							<h5 class="card-title" align="center">Logout</h5>
								<form action="firstpage.php">
									<button type="submit" class="btn btn-danger">Logout</button>
								</form>
							</div>
					</div>
			-->	
                <br>
                <br>
                
                <form  action="changepassword.php"  style="width:150px;height:80px;padding:10px;">
                    <button type="submit" class="btn btn-danger">Change Password</button>
                </form>
             
                   
            </div>
           
        </div>
    </div>
    <br>
    
    <div class="container">
		<div class="row">
			<div class="col-lg-6">
                <!--
                <form  method="post" action="nextpage3.php">
                    <div>
                        <label for="appointment date" style="color:red;font-size:25px;">Date:</label>
                        <br>
					    <input name="apt_date_selected" type="date" id="apt_date_selected" class=heading1>
                    </div>
                    <div class="heading12">
                        <label>GET ALL INFORMATION</label>
                        <br>
                    <button type="submit" class="btn btn-danger">GET ALL INFORMATION</button>
                </form>
                -->
                <div style="padding-left:25%;">
					<div class="card" style="width: 18rem;" >
  						<img class="card-img-top" src="./upload/report.png" alt="Card image cap">
  							<div class="card-body">
    							<h5 class="card-title" align="center">Some Reports</h5>
								<form action="Reports.php">
									<button type="submit" class="btn btn-danger">Go</button>
								</form>
							</div>
					</div>
				</div>       
            </div>
            <!--
            <div class="col-lg-6">
                <div style="padding-left:25%;">
					<div class="card" style="width: 18rem;" >
  						<img class="card-img-top" src="./upload/changepassword.jpg" alt="Card image cap">
  							<div class="card-body">
    							<h5 class="card-title" align="center">change password</h5>
								<form  action="changepassword.php">
                                    <button type="submit" class="btn btn-danger">Change</button>
                                </form>
							</div>
					</div>
				</div>
            </div>  
            -->     
        </div>
                 
    </div>
        
    

</body>
</html>
<!--
        TIll NOW Code by Roshan Manik Wagh Please dont change it without discussion......
        rights.

-->
