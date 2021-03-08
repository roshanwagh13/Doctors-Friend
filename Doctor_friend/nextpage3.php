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
	$apt_date_selected=$_POST['apt_date_selected'];

	$q = "select * from appointment a inner join patient p on a.Patient_ID=p.Patient_ID where a.apt_date_given='$apt_date_selected';";
	$result = mysqli_query($con,$q);
	

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
            background-image:url("./upload/dark.jpg");            
	        background-repeat:no-repeat;
			background-size:cover;
			
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

	<table>  
       	<tr class="table1">  
          	<th>Patient ID |&nbsp</th>  
           	<th>Appointment ID |&nbsp</th>
		   	<th>Patient Name |&nbsp</th>  
           	<th>Patient DOB |&nbsp</th>
		   	<th>Patient Age |&nbsp</th>  
           	<th>Patient Mobile |&nbsp</th>
		   	<th>Appointment Date |&nbsp</th>  
           	<th>Appointment Time |&nbsp</th>
			<th>Reference |&nbsp</th>
        </tr> 

	<?php  
    	if(mysqli_num_rows($result) > 0)  
        {  
        	while($row = mysqli_fetch_array($result))  
            {  
    ?>  
        <tr class="table2">  
            	
			<td><?php echo $row["Patient_ID"];?></td>  
            <td><?php echo $row["apt_id"]; ?></td>
            <td><?php echo $row["Patient_Name"]; ?></td>
			<td><?php echo $row["Patient_DOB"];?></td>  
			<td><?php echo $row["Patient_Age"];?></td>  
            <td><?php echo $row["Patient_Mobile"]; ?></td>
			<td><?php echo $row["apt_date_given"];?></td>  
            <td><?php echo $row["apt_time_given"]; ?></td>
			<td><?php echo $row["A_reference"];?></td>  
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
	<br>
	<br>
	<form class="form-group" action="reports.php">
		<button type="submit" class="btn btn-danger">GO BACK</button>
	</form>
</body>
</html>


<!--
        TIll NOW Code by Roshan Manik Wagh Please dont change it without discussion......
        rights.

-->

