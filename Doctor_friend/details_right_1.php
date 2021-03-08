<?php
    $var1=false;
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
    $New_password=$_POST['New_password'];
    
    $qy="update doctor set Password='$New_password' where BINARY Password='$Password' ;";

    $result=mysqli_query($con,$qy);
    

    $qy2="select Password from doctor where BINARY Password='$New_password' ;";
    $result2=mysqli_query($con,$qy2);
    
    $num=mysqli_num_rows($result2);
    if($num==1)
    {
        header('location:changed.php');        
    }
    else{
        header('location:not_changed.php');
    }    
?>
