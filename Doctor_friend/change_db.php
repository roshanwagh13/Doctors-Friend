<?php
	session_start();
	header('location:doctorpage.php');
	$con=mysqli_connect('localhost','root','root');
	if($con)
	{
		echo"connection done";
	}
	else
	{
		echo "No connection";
	}
	mysqli_select_db($con,'my_doctor_friend');

    $Password=$_POST['Password'];
    $Username=$_SESSION['username'];
    $Phone_no=$_SESSION['Phone_no'];
    $qy="update doctor set Password='$Password' where Username=$Username and Phone_no=$Phone_no";

    $result=mysqli_query($con,$qy);
    $num=mysqli_num_rows($result);
    if($num==1)
    {
        header('location:doctorpage.php');        
    }
    else
    {
        $var1=false;
        header('location:Not_found_1.php');

    }

?>
