<?php
	
	session_start();
	$con=mysqli_connect('localhost','root','root');
	if($con)
	{
		#echo"connection done"; 
	}
	else{
		#echo "No connection";
	}
	
	mysqli_select_db($con,'my_doctor_friend');
	$date_selected1=$_POST['date_selected1'];
    
    $username=$_SESSION['Username'];
    $qy="select apt_id from appointment where apt_date_given='$date_selected1';";
    $result = mysqli_query($con,$qy);
    if(mysqli_num_rows($result) > 0)
    {
        while($row = mysqli_fetch_array($result))  
        {
            $apt_id=$row["apt_id"];
                
            $q = "select patient.Patient_ID,history.apt_id,patient.Patient_Name,bill.total from patient,history ,bill
            where history.apt_id='$apt_id' and history.Patient_ID=patient.Patient_ID and bill.apt_id=history.apt_id and bill.apt_id='$apt_id' and history.Username='$username';";
            $result2 = mysqli_query($con,$q);          
		    if(mysqli_num_rows($result2) > 0)  
            {  
                while($row2 = mysqli_fetch_array($result2))  
                {  
                    
                    echo "<div style='padding:25px'>";
                    $patient_id=$row2['Patient_ID'];
                    $apt_id=$row2['apt_id'];
                    $Patient_Name=$row2['Patient_Name'];
                    $Total=$row2['total'];
                    echo "<div class='card' style='width: 18rem;'>";
                        
                    echo "<div class='card-body'>";
                    
                    echo '<br>';
                            echo '<br>';
                            echo "<img class='card-img-top' src='./upload/patients.jpg' alt='Card image cap'>";
            
                            echo "<h5 class='card-title' align='center'>Patient Details</h6>";
                    
                            echo "<h6>Patient ID:".$patient_id."</h6>";
                            echo "<h6>Appointment ID:".$apt_id."</h6> " ;
                            echo "<h6>Patient Name:".$Patient_Name."</h6>";
                            echo "<h6>Total Charges:".$Total."</h6>";
                    
                    
                            echo "</div>";
                    
                        echo "</div>";
                    echo"</br>";
                    echo "</div>";
                    
                }    
            }
            else{
            
                echo '<h1  style="color:white">'. "NO DATA AVAILABLE....".'</h1>';
                echo '<h1  style="color:white">'."Either Checked By Another Doctor....".'</h1>';     
            break;    
            }	   
              
        }
    
    }

    else{
            
        echo '<h1  style="color:white">'. "NO DATA AVAILABLE....".'</h1>';
        echo '<h1  style="color:white">'."Either Checked By Another Doctor....".'</h1>';     
    }
	
      
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <link rel="stylesheet" href="index.css">

    <title>Document</title>
    <style>
        body{
            background-color:black;
            background-repeat: no-repeat;
            background-position: right top;
            margin-right: 200px;
        }
		.table1{
			color:red;
			font-size:20px;
			border:2px solid black;
		}
		.table2{
			font-size:18px;
			color:yellow;
			border:2px solid black;
		}
		.table3{
			font-size:25px;
			color:red;
			
		}
    </style>

</head>
<body>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>


        
</body>
</html>
