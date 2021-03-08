<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="index.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
	<style>
        body{
            background-image:url("./upload/m18.jpg");
	        background-repeat:no-repeat;
        	background-size:cover;
        }
    </style>
	

    <title>Patient page</title>
</head>
<body>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>

    <div class=container>
        <div class="col-lg-6">
				<h1 class="heading1">YOU ARE WELCOME WE ARE HAPPY TO HELP YOU </h1>	
				<h5 class="heading5">LETS GO THROUGH THE SMALL FORM </h5>
				<form action="registerpatient.php" method="post">
					<div class="form-group">
						<label>Your Name</label>
						<br>
						<input type="text" name="Patient_Name" class="form-control" placeholder="Enter your Name" required>
					</div>
					
        			<div class="form-group">
						<label>Your Date OF Birth</label>
						<br>
						<input type="text" name="Patient_DOB" class="form-control" placeholder="Enter your Date Of Birth" required>
					</div>
        
        			<div class="form-group">
						<label>Your Age</label>
						<br>
						<input type="text" name="Patient_Age" class="form-control" placeholder="Enter your Age" >
					</div>
        
                	<div class="form-group">
						<label>Mobile No</label>
						<br>
						<input type="tel" pattern="[789][0-9]{9}" name="Patient_Mobile" class="form-control" placeholder="Enter Mobile No " required>
						 
					</div>
		
					<div class="form-group">
						<label>Any References</label>
						<br>
						<input type="text" name="A_reference" class="form-control" placeholder="Enter Reference if any ">
					</div>
		
        			<br>
					<form action="registerpatient.php" >
						<button type="submit" class="btn btn-danger">Book Appointment</button>			
					</form>		
				</form>	
		</div>

    </div>    
	
</body>
</html>
<!--
        TIll NOW Code by Roshan Manik Wagh Please dont change it without discussion......
        rights.

-->
