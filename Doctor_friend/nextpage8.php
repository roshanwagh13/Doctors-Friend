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
	$date_selected=$_POST['date_selected'];
    
    $qy="select apt_id from appointment where apt_date_given='$date_selected';";
    $result = mysqli_query($con,$qy);
         
    if(mysqli_num_rows($result) > 0)
    {
        while($row = mysqli_fetch_array($result))  
        {
            $apt_id=$row["apt_id"];
                
            $q = "select patient.Patient_ID,history.apt_id,patient.Patient_Name,history.Username,patient.Patient_Mobile from patient inner join history on patient.Patient_ID where history.apt_id='$apt_id' and history.Patient_ID=patient.Patient_ID;";
            $result2 = mysqli_query($con,$q);
            
		if(mysqli_num_rows($result2) > 0)  
        {  
            while($row = mysqli_fetch_array($result2))  
            {  
                    echo "<div style='padding:25px'>";
                    $patient_id=$row['Patient_ID'];
                    $apt_id=$row['apt_id'];
                    $Patient_Name=$row['Patient_Name'];
                    $Patient_Mobile=$row['Patient_Mobile'];
                    $Username=$row['Username'];
                    echo "<div class='card' style='width: 18rem;''>";
                        echo "<div class='card-body'>";
                            echo '<br>';
                            echo '<br>';
                            echo '<h5 class="card-title" align="center">Patient Details</h6>';
            	            echo "<h6>Patient ID:".$patient_id."</h6>";
                            echo "<h6>Appointment ID:".$apt_id."</h6> " ;
                            echo "<h6>Patient Name:".$Patient_Name."</h6>";
		                    echo "<h6>Patient Mobile:".$Patient_Mobile."</h6>";
                            echo "<h6>Docotor Username:". $Username."</h6>";  
                        echo "</div>";
                    echo "</div>";
                    echo"</br>";
                    echo "</div>";
            }  
            
        }  
        
		else{
	
			echo '<h1 class="table3"><?php echo "NO DATA AVAILABLE CHECK IT AGAIN"?></h1>';
		
		}	   
	
       

        }    
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
            background-repeat:no-repeat;
			background-size:cover;
			background-color:black;
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
        <!--
	<table>  
       	<tr class="table1">  
          	<th>Patient ID |&nbsp</th>  
              <th>Appointment ID |&nbsp</th> 
    	   	<th>Patient Name |&nbsp</th>     
           	<th>Patient Mobile |&nbsp</th>
		   	<th>Docotor Username|&nbsp</th>
        </tr> 

	<?php  
    	if(mysqli_num_rows($result2) > 0)  
        {  
        	while($row = mysqli_fetch_array($result2))  
            {  
    ?>  
        <div class="card" style="width: 18rem;">
            <div class="card-body">
            <br>
            <br>
            <h5 class="card-title" align="center">Patient Details</h6>
            	<h6>Patient ID:<?php echo $row["Patient_ID"];?></h6>
                <h6>Appointment ID:<?php echo $row["apt_id"];?></h6>  
                <h6>Patient Name:<?php echo $row["Patient_Name"]; ?></h6>
		        <h6>Patient Mobile:<?php echo $row["Patient_Mobile"]; ?></h6>
                <h6>Docotor Username:<?php echo $row["Username"]; ?></h6>
                    
            </div>
        </div>
            
        <tr class="table2">  
                
			<td><?php echo $row["Patient_ID"];?></td>
            <td><?php echo $row["apt_id"];?></td>  
            <td><?php echo $row["Patient_Name"]; ?></td>
		    <td><?php echo $row["Patient_Mobile"]; ?></td>
            <td><?php echo $row["Username"]; ?></td>
		</tr>
        
         
        <?php  
            }  
        }  
		
		else{
	?>		
			<h1 class="table3"><?php echo "NO DATA AVAILABLE CHECK IT AGAIN"?></h1>
		<?php
		}	   
	?>	
	</table>
-->
</body>
</html>
