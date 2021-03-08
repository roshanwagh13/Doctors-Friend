<?php
    header("Cache-Control: no cache");
    session_cache_limiter("private_no_expire");
    session_start();
    
    $con=mysqli_connect('localhost','root','root');
    if($con)
    {
        #echo "connection done";
    }
    else{
        #echo "Connection fail";
    }
    mysqli_select_db($con,'my_doctor_friend');
    
    $blood_pressure=$_POST['blood_pressure'];
    $Weight=$_POST['Weight'];
    $Temperature=$_POST['Temperature'];
    $Pulse=$_POST['Pulse'];
    $Medicine_Daily=$_POST['Medicine_Daily'];
    $Disease1=$_POST['Disease1'];
    $Disease2=$_POST['Disease2'];
    $Disease3=$_POST['Disease3'];
    $Test1=$_POST['Test1'];
    $Test2=$_POST['Test2'];
    $Test3=$_POST['Test3'];
    $Medicine=$_POST['Medicine'];
    $Patient_ID=$_POST['Patient_ID'];
    $apt_id=$_POST['apt_id'];
    
    
    $Username_of_doctor=$_SESSION['Username'];
    $qy="select D_ID from doctor where Username='$Username_of_doctor';";
    $result=mysqli_query($con,$qy);
    if(mysqli_num_rows($result)==1)
	{
		$row = mysqli_fetch_array($result);
		$d_id=$row['D_ID'];
    }
		
    /*
    INSERT INTO `history`(`History_ID`, `Patient_ID`, `apt_id`, `blood_pressure`, `Weight`, `Temperature`, `Pulse`, `Medicine_Daily`, `Disease1`, `Disease2`, `Disease3`, `Test1`, `Test2`, `Test3`, `Medicine`) VALUES ([value-1],[value-2],[value-3],[value-4],[value-5],[value-6],[value-7],[value-8],[value-9],[value-10],[value-11],[value-12],[value-13],[value-14],[value-15])
    */

    $qy="INSERT INTO history(Patient_ID,apt_id,D_Id,Username,blood_pressure, Weight, Temperature, Pulse,Medicine_Daily,Disease1, Disease2, Disease3, Test1,Test2,Test3,Medicine)VALUES('$Patient_ID','$apt_id','$d_id','$Username_of_doctor','$blood_pressure','$Weight','$Temperature','$Pulse','$Medicine_Daily','$Disease1','$Disease2','$Disease3','$Test1','$Test2','$Test3','$Medicine'); ";
    
    mysqli_query($con,$qy);
     
    header("location:nextpage6.php");


?>