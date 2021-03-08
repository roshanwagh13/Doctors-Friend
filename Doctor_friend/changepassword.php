<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
	<link rel="stylesheet" href="index.css">
	<style>
        body{
            background-image:url("./upload/m19.jpg");
	        background-repeat:no-repeat;
        	background-size:cover;
        }
    </style>
</head>
<body>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
    
    <div class="container">
		<div class="row">
			<div class="col-lg-6">
				<h1 class="heading1">Please fill details Form</h1>	
				<form action="details_right_1.php" method="post">
					<div class="form-group">
						<label>Old Password</label>
						<br>
						<input type="password" name="Password" class="form-control" placeholder="Old Password" required>
					</div>
					<div class="form-group">
						<label>New Password</label>
						<br>
						<input type="password"  name="New_password" class="form-control" placeholder="New Password" required></div>
                    <br>
					<button type="submit" class="btn btn-danger">Reset</button>
					<br>
					<br>
				</form >
                    
                <form action="forgotpassword.php" method="post">
                    <br>
					    <button type="submit" class="btn btn-danger">Forgot Password</button>
					<br>
					
                </form>
			</div>
        </div>
    </div>    


</body>
</html>