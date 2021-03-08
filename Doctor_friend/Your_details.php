
<?php
    session_start();
    
    
    $con=mysqli_connect('localhost','root','root');
        
    mysqli_select_db($con,"my_doctor_friend");

    $Username=$_SESSION['USERNAME'];
    $Password=$_SESSION['PASSWORD'];

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
            background-image:url("./upload/m19.jpg");
	        background-repeat:no-repeat;
        	background-size:cover;
        }
    </style>

    
    <title>Document</title>
</head>
<body>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
    
    <div align="center" style="padding:80px">    
    <div class="card" style="width: 18rem;" align="center"> 
                <img class="card-img-top" src="./upload/doctors.png" alt="Card image cap">
                <div class="card-body">
                <br>
                <br>
                    <h5 class="card-title" align="center">Your Details</h5>
                    <h5 style="color:green;">
    
                    Username:
                    <?php echo $Username;?>
                    <br>
                    Password:
                    <?php echo $Password;?>
                    </h5>
                    
                    <form action="doctorpage.php" class="form-group">
                        <button type="submit" class="btn btn-danger">Go Back</button>
                    </form>            
                </div>
            </div>
    </div>        
    
</body>
</html>