<?php
	session_start();
	$con=mysqli_connect('localhost','root','root');
	if($con)
	{
		echo"connection done";
	}
	else{
		echo "No connection";
	}
	
	mysqli_select_db($con,'my_doctor_friend');
	$Username = $_POST['Username'];
	$Password= $_POST['Password'];
	
	$q = "select * from doctor where Username = '$Username'  && BINARY Password = '$Password' ";
	$result = mysqli_query($con,$q);
	$num = mysqli_num_rows($result);
	
	if($num==1)
	{
		$_SESSION['Username'] = $Username;
		#	echo "Already present try another";
		header('location:nextpage.php');
	}
	else{
		header('location:doctorpage.php');
	}
?>
<!--
        TIll NOW Code by Roshan Manik Wagh Please dont change it without discussion......
        rights.

-->

