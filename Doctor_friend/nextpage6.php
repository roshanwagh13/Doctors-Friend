<?php
    session_start();
    $con=mysqli_connect('localhost','root','root');
    mysqli_select_db($con,'my_doctor_friend');
    $apt_id3=$_SESSION['apt_id2'];
    
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
   
    <title>Document</title>
    <style>
        body{
            background-image:url("./upload/m7.jpg");
	        background-repeat:no-repeat;
			background-size:cover;
			
        }
        .h{
            color:orange;
        }
    </style>    
        
</head>
<body>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>

    <div class=container>
        <div class="row">
            <div class="col-lg-6">
            <form style="padding:10px;"class="border border-white" action="nextpage7.php" method="post" >
                <h1 class="h">Enter Fees</h1>
                <div class="h">           
                    <h4 class="h">Appointment ID :<?php echo $apt_id3; ?></h4>
                </div>
                <div class="h">
                    <label>Checking FEE</label>
					<br>
					<input type="number" name="checking_fee" class="form-control" placeholder="Checking Fee">    
                </div>
                <div class="h">
                    <label>Injection FEE</label>
					<br>
					<input type="number" name="injection_fee" class="form-control" placeholder="Injection Fee">    
                </div>
                <div class="h">
                    <label>Test FEE</label>
					<br>
					<input type="number" name="test_fee" class="form-control" placeholder="Test Fee">    
                </div>
                <div class="h">
                    <label>OTHER</label>
					<br>
					<input type="number" name="other" class="form-control" placeholder="other">    
                </div>
                <br>
                <div style="text-align:center;">
                    <button type="submit" class="btn btn-danger">Proceed</button>    
                </div>
            </div>
        </div>
    </div>
</body>
</html>