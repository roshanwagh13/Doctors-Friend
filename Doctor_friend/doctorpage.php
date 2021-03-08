<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
	<link rel="stylesheet" href="index.css">
	<style>
        body{
            background-image:url("./upload/m19.jpg");
	        background-repeat:no-repeat;
        	background-size:cover;
        }
    </style>
    <title>Doctor page</title>
</head>
 

<body>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
	<div class="container">
		<div class="row">
			<div class="col-lg-6">
				<h1 class="heading1">Login Form</h1>	
				<h5 style="color:green;">Hey Doctor Lets Verify Its You....</h5>
				<form action="validation.php" method="post">
					<div class="form-group">
						<label>Username</label>
						<br>
						<input type="text" name="Username" class="form-control" placeholder="Username" required>
					</div>
					<div class="form-group">
						<label>Password</label>
						<br>
						<input type="Password" name="Password" class="form-control" placeholder="Password" required>
					</div>
					<br>
					<button type="submit" class="btn btn-danger">login</button>
					<br>
					<br>
									
					
				</form>
				<!--
				<form action="forgotpassword.php">
				<div class="form-group">
						<label>forgot password</label>
						
						<h3 style="color:red;">Forgot Password?<h3>
						<button type="submit" class="btn btn-danger">Reset</button>
						
				</div>
				</form>	
				-->
				<div style="padding-left:25%;">
					<div class="card" style="width: 18rem;" >
  						<img class="card-img-top" src="./upload/m3.jpg" alt="Card image cap">
  							<div class="card-body">
    							<h5 class="card-title" align="center">Forgot Password</h5>
								<form action="forgotpassword.php">
									<button type="submit" class="btn btn-danger">Reset</button>
								</form>
							</div>
					</div>
				</div>

			</div>

			<div class="col-lg-6">
			<h1 class="heading1">sign up Form</h1>
			<h5 style="color:greenyellow;">Hey Doctor ARE YOU NEW????THEN CREATE ACCOUNT </h5>
			<div>
				<form action="registration.php" method="post">
					<div class="form-group">
						<label>Username</label>
						<br>
						<input type="text" name="Username" class="form-control" placeholder="Username" required>
					</div>
					<div class="form-group">
						<label>Password</label>
						<br>
						<input type="Password" name="Password" class="form-control" placeholder="Password" required>
					</div>
					<div class="form-group">
						<label>First_Name</label>
						<br>
						<input type="text" name="First_Name" class="form-control" placeholder="First Name" required>
					</div>
					<div class="form-group">
						<label>Last_name</label>
						<br>
						<input type="text" name="Last_name" class="form-control" placeholder="Last Name" required>
					</div>
					<div class="form-group">
						<label>Phone_no</label>
						<br>
						<input type="tel" pattern="[789][0-9]{9}" name="Phone_no" class="form-control" placeholder="Mobile Number" required>
					</div>
					<div class="form-group">
						<label>Education</label>
						<br>
						<input type="text" name="Education" class="form-control" placeholder="Education" required>
					</div>
					<div class="form-group">
						<label>Specialization</label>
						<br>
						<input type="text" name="Specialization" class="form-control" placeholder="Specialization" required>
					</div>
					<br>
					<button type="submit" class="btn btn-danger">signin</button>
				</form>
			</div>
		</div>
		</div>
</div>
</body>
</html>

<!--
        TIll NOW Code by Roshan Manik Wagh Please dont change it without discussion......
        rights.

-->
