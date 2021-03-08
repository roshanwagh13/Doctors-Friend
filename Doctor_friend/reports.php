<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    
    <link rel="stylesheet" href="index.css">
    <style>
        body{
            background-image:url("./upload/m24.jpg");            
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

    <br>
    <br>
            
    <div class="row">
        &nbsp
        &nbsp
        &nbsp
        &nbsp
        &nbsp
        &nbsp
        &nbsp
        &nbsp
        &nbsp
        &nbsp
        <div class="col-lg-2" >

        <div class="card" style="width: 18rem;" >
  						<img class="card-img-top" src="./upload/appt.png" alt="Card image cap">
  							<div class="card-body">
    							<h5 class="card-title" align="center">Appointment Information</h5>
								<p>I will Provide you details of all booked appointments...</p>
                                <form action="appointments.php">
									<button type="submit" class="btn btn-danger">Go</button>
								</form>
							</div>
					</div>
        </div>
        <div class="col-lg-2"></div>
        <div class="col-lg-2" >
        <div class="card" style="width: 18rem;" >
  						<img class="card-img-top" src="./upload/checked.jpg" alt="Card image cap">
  							<div class="card-body">
    							<h5 class="card-title" align="center">Patients Checked</h5>
								<p>I will Provide you details of patients checked...</p>
                                <form action="patientschecked.php">
									<button type="submit" class="btn btn-danger">Go</button>
								</form>
							</div>
					</div>
        </div>
        <div class="col-lg-2"></div>
        <div class="col-lg-2" >
        <div class="card" style="width: 18rem;" >
  					<img class="card-img-top" src="./upload/fees.png" alt="Card image cap">
  							<div class="card-body">
    							<h5 class="card-title" align="center">Total fee collected</h5>
								<p>I will Provide you details of total fees collected...</p>
                                <form action="totalfee.php">
									<button type="submit" class="btn btn-danger">Go</button>
								</form>
							</div>
					</div>
        </div>
        
    </div>
    <br>
    <br>
    <br>
    <form class="form-group" action="nextpage.php">
        <button type="submit" class="btn btn-success">go back</button>
    </form>
</body>
</html>