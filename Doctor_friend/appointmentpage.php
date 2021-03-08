<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="index.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
	<style>
        body{
            background-image:url("./upload/m14.jpg");
	        background-repeat:no-repeat;
        	background-size:cover;
		}
		.heading1{
			margin:auto;
		}		
    </style>
	

    <title>Patient page</title>
</head>
<body>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>

	<h1 style="color:red;">YOU ARE WELCOME...WE ARE HAPPY TO HELP YOU </h1>	
    <br>
	<h3 style="color:white;">You Can Select Your Appointment from below</h3>
	<div align="left">
        <div class="col-lg-6" >
				<form action="registerappointment.php" method="post">
					<div class="form-group" >
						<label for="appointment date">Date:</label>
						<input name="apt_date_given"type="date" id="apt_date_given" class=heading1 required>
						
						<label for="days">Choose Time Slot</label>
						<select name="apt_time_given" id="apt_time_given" class=heading1>
							<option value="10-10:30">10-10:30</option>
							<option value="10:30-11">10:30-11</option>
							<option value="11-11:30">11-11:30</option>
							<option value="11:30-12">11:30-12</option>
							<option value="12-12:30">12-12:30</option>
							<option value="1-1:30">1-1:30</option>
							<option value="1:30-2">1:30-2</option>
							<option value="2-2:30">2-2:30</option>
							<option value="2:30-3">2:30-3</option>
							<option value="3:30-4">3:30-4</option>
							<option value="4-4:30">4-4:30</option>
							<option value="4:30-5">4:30-5</option>
						</select>
					</div>
					<button type="submit" class="btn btn-danger">Check Appointment</button>
				</form>	
		</div>
    </div>    
	
</body>
</html>
<!--
        TIll NOW Code by Roshan Manik Wagh Please dont change it without discussion......
        rights.

-->
