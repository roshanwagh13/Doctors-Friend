<?php
    //session_cache_limiter('public'); // works too
    header("Cache-Control: no cache");
    session_cache_limiter("private_no_expire");
    session_start();
    
    
    $con=mysqli_connect('localhost','root','root');
    if($con)
        echo "Connection Done";
    else
        echo "Connection Fail";  
        
    mysqli_select_db($con,"my_doctor_friend");

    $Patient_ID=$_POST['Patient_ID'];
    $qy="select * from history where history.Patient_ID='$Patient_ID';";
    $result=mysqli_query($con,$qy);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">

    <title>Document</title>
    <style>
        body{
            background-color:black;
        }
		
		.table1{
			color:orange;
			font-size:20px;
			padding:2px;
		}
		
    </style>
</head>
<body>
    <h1 style="color:white">The History</h1>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>


    
    <table  class="table table-bordered table-striped">
        <tr class="table1">
          	<th>History ID &nbsp</th>  
            <th>Patient ID &nbsp</th>
	        <th>Appointment ID &nbsp</th>
            <th>Doctor ID &nbsp</th>
            <th>Doctor Username &nbsp</th>  
            <th>Blood Pressure &nbsp</th>
	        <th>Weight &nbsp</th>  
            <th>Temperature &nbsp</th>
           	<th>Pulse &nbsp</th>  
           	<th>Medicine Daily &nbsp</th>
        	<th>Disease1 &nbsp</th>
            <th>Disease2 &nbsp</th>
            <th>Disease3 &nbsp</th>
            <th>Test1 &nbsp</th>
            <th>Test2 &nbsp</th>
            <th>Test3 &nbsp</th>
            <th>Medicine &nbsp</th>
        </tr> 
    <?php  
    	if(mysqli_num_rows($result) > 0)  
        {  
        	while($row = mysqli_fetch_array($result))  
            {  
    ?>  
        <tr class="border border-table" style="font-size:18px ; color:red;">  
			<td><?php echo $row["History_ID"];?></td>  
            <td><?php echo $row["Patient_ID"]; ?></td>
            <td><?php echo $row["apt_id"]; ?></td>
            <td><?php echo $row["D_ID"]; ?></td>
            <td><?php echo $row["Username"]; ?></td>
		    <td><?php echo $row["blood_pressure"];?></td>  
		    <td><?php echo $row["Weight"];?></td>  
            <td><?php echo $row["Temperature"]; ?></td>
		    <td><?php echo $row["Pulse"];?></td>  
            <td><?php echo $row["Medicine_Daily"]; ?></td>
            <td><?php echo $row["Disease1"];?></td>
            <td><?php echo $row["Disease2"];?></td>
            <td><?php echo $row["Disease3"];?></td>
            <td><?php echo $row["Test1"];?></td>
            <td><?php echo $row["Test2"];?></td>
            <td><?php echo $row["Test3"];?></td>
            <td><?php echo $row["Medicine"];?></td>  
        </tr>  
        <?php  
            }  
        }  
		
		else{
	?>		
        
			<h1 class="table3" style="color:white;"><?php echo "NO DATA AVAILABEL CHECK IT AGAIN"?></h1>
		
        <?php
		}	   
	?>
    	
	</table>
</body>
</html>