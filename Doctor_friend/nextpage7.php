<?php
    session_start();
    $con=mysqli_connect('localhost','root','root');
    mysqli_select_db($con,'my_doctor_friend');
    $checking_fee=$_POST['checking_fee'];
    $injection_fee=$_POST['injection_fee'];
    $test_fee=$_POST['test_fee'];
    $other=$_POST['other'];
    $apt_id4=$_SESSION['apt_id2'];
    $total=$checking_fee+$injection_fee+$test_fee+$other;
    
    /*
    INSERT INTO `bill`(`bill_id`, `apt_id`, `checking_fee`, `injection_fee`, `test_fee`, `other`, `total`) VALUES ([value-1],[value-2],[value-3],[value-4],[value-5],[value-6],[value-7])
    */
    $qy="insert into bill(apt_id,checking_fee,injection_fee,test_fee,total)values('$apt_id4','$checking_fee','$injection_fee','$test_fee','$total');";
    mysqli_query($con,$qy); 
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <link rel="stylesheet" href="index.css">
    <title>Document</title>
    <style>
        body{
            background-image:url("./upload/m22.webp");
	        background-repeat:no-repeat;
			background-size:cover;
			
		}
	</style>
</head>
<body>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>

    <div align:"center">        
        <h3 style="color:black;text-align:center;"><?php echo "Collect : ".$total." Rupees"?></h3>
        <form action="nextpage.php">
            <h1 style="color:black;">.........Thank You All Details Saved.......... </h1>
            <button class="btn btn-danger" type="submit" >GO BACK</submit>
        </form>
    </div>   
</body>
</html>

