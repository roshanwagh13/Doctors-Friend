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
	/*
	INSERT INTO `doctor`(`Username`, `Password`, `First_Name`, `Last_name`, 
	`Phone_no`, `Education`, `Specialization`, `Registration_date`) 
	VALUES ("roshan@1234","roshan123","Roshan","Wagh",9090909090,"MS","ENT",CURRENT_TIMESTAMP())
	*/
	$Username = $_POST['Username'];
	$Password = $_POST['Password'];
	$First_Name = $_POST['First_Name'];
	$Last_name = $_POST['Last_name'];
	$Phone_no = $_POST['Phone_no'];
	$Education = $_POST['Education'];
	$Specialization = $_POST['Specialization'];
	
	
	$q = "select * from doctor where Username = '$Username' ";
	$result = mysqli_query($con,$q);
	$num = mysqli_num_rows($result);
	
	if($num==1)
	{
		$_SESSION['Username'] = $Username;
		header('location:doctorpage.php');

		echo "Already present try another";
	}
	else{
	//	$qy=" insert into login(name , password) values ('$name','$password')";
		$qy= " insert into doctor(Username , Password, First_Name, Last_name, Phone_no, Education, Specialization, Registration_date) values ('$Username','$Password','$First_Name','$Last_name','$Phone_no','$Education','$Specialization',CURRENT_TIMESTAMP())";
		mysqli_query($con,$qy);
	}
	
?>
<!--
        TIll NOW Code by Roshan Manik Wagh Please dont change it without discussion......
        rights.

-->

