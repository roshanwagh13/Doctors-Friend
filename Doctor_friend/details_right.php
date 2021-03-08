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

    $First_Name=$_POST['First_Name'];
    $Last_Name=$_POST['Last_Name'];
    $Phone_no=$_POST['Phone_no'];
    
    
    
    $qy="select First_Name,Last_Name,Phone_no from doctor where First_Name='$First_Name' and Last_Name='$Last_Name' and Phone_no='$Phone_no';";

    $result=mysqli_query($con,$qy);
    $num=mysqli_num_rows($result);
    if($num==1)
    {
        $var1=true;
        $qy2="select Username,Password from doctor where First_Name='$First_Name' and Last_Name='$Last_Name' and Phone_no='$Phone_no';";
        $result1=mysqli_query($con,$qy2);
        $num1 = mysqli_fetch_array($result1);
        #$num = mysqli_fetch_assoc($patientid);
        $Username=$num1['Username'];
        $Password=$num1['Password'];

        $_SESSION['USERNAME']=$Username;
        $_SESSION['PASSWORD']=$Password;
        header('location:Your_details.php');        
    }
    else
    {
        $var1=false;
        header('location:Not_found.php');

    }

?>
