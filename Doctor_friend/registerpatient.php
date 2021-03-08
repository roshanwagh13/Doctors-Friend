<?php
    $Appt_taken=false;
    session_start();
    #header("location:appointmentpage.php");
    $server="localhost";
    $username="root";
    $password="root";
    //create connection
    $con =mysqli_connect($server,$username,$password);
	if($con)
	{
		#echo"connection done";
	}
	else{
		#echo "No connection";
	}
	

    mysqli_select_db($con,'my_doctor_friend');
    
    $Patient_Name=$_POST['Patient_Name'];
    $Patient_Age=$_POST['Patient_Age'];
    $Patient_Mobile=$_POST['Patient_Mobile'];
    $Patient_DOB=$_POST['Patient_DOB'];
    $A_reference=$_POST['A_reference'];
#    $apt_date_given=$_POST['apt_date_given'];
#    $apt_time_given=$_POST['apt_time_given'];

    $qy3="select * from patient where Patient_Mobile='$Patient_Mobile' and Patient_DOB='$Patient_DOB'";
    $result3=mysqli_query($con,$qy3);
    $num3=mysqli_num_rows($result3);

    if($num3==0){
        $qy2="INSERT INTO patient(Patient_Name,Patient_Age,Patient_DOB,Patient_Mobile,A_reference) VALUES ( '$Patient_Name','$Patient_Age','$Patient_DOB','$Patient_Mobile','$A_reference');";
        mysqli_query($con,$qy2);

    }

    
    $qypatientid="SELECT Patient_ID FROM patient WHERE Patient_Mobile='$Patient_Mobile' and Patient_DOB='$Patient_DOB' and  Patient_Name='$Patient_Name';";
    $patientid=mysqli_query($con,$qypatientid);
    $num = mysqli_fetch_array($patientid);
        #$num = mysqli_fetch_assoc($patientid);
    $patient_id=$num['Patient_ID'];
    
        
    $qy="INSERT INTO appointment(Patient_ID,apt_time,apt_date_given,apt_time_given,Patient_Mobile,Patient_DOB) VALUES ('$patient_id',current_timestamp(),'$_SESSION[apt_date_given]','$_SESSION[apt_time_given]','$Patient_Mobile','$Patient_DOB');";
    
    mysqli_query($con,$qy);


    //$qy2="insert into patient(Patient_Name, apt_id) VALUES ('$A_Name', '$num[apt_id]');";
    
    header('location:firstpage.php');
        
    /*
    $strSQL = "SELECT name FROM TABLE WHERE UNIQUE_ID=Some unique ID";
$result = mysql_query($strSQL) or die('SQL Error :: '.mysql_error());
$row = mysql_fetch_assoc($result);
echo $row['name'];
*/
    
    
    
?>
<!--
        TIll NOW Code by Roshan Manik Wagh Please dont change it without discussion......
        rights.

-->
