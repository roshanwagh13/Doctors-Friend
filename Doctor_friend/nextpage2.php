<?php
	header("Cache-Control: no cache");
	session_cache_limiter("private_no_expire");	
	session_start();
	$con=mysqli_connect('localhost','root','root');
	$variable=FALSE;
	$variable2=FALSE;
	if($con)
	{
		#echo"connection done"; 
	}
	else{
		#echo "No connection";
	}
	

	mysqli_select_db($con,'my_doctor_friend');

	$Patient_Mobile= $_POST['Patient_Mobile'];
	$apt_date_given=$_POST['apt_date_given'];
	$Patient_DOB=$_POST['Patient_DOB'];
	

	$_SESSION['Patient_Mobile']=$Patient_Mobile;
	$_SESSION['apt_date_given']=$apt_date_given;
	$_SESSION['Patient_DOB']=$Patient_DOB;

	$q = " select * from appointment a inner join patient p on a.Patient_ID=p.Patient_ID where p.Patient_DOB='$_SESSION[Patient_DOB]' and p.Patient_Mobile='$_SESSION[Patient_Mobile]' and a.apt_date_given='$_SESSION[apt_date_given]';";
	$result = mysqli_query($con,$q);
	$result3 = mysqli_query($con,$q);

	if(mysqli_num_rows($result3)>0)
	{
		$row = mysqli_fetch_array($result3);
		$appt_id=$row['apt_id'];
		$pat_id=$row['Patient_ID'];
		$_SESSION['apt_id2']=$appt_id;
		$_SESSION['pat_id2']=$pat_id;
		$qy="select apt_id from history where apt_id='$appt_id';";
		$result2 = mysqli_query($con,$qy);
		$num2=mysqli_num_rows($result2);
		if($num2==0)
		{
			$variable2=FALSE;
		}
		else
		{
			$variable2=TRUE;
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
            background-image:url("./upload/m7.jpg");
	        background-repeat:no-repeat;
			background-size:cover;
			
		}
		
		.table1{
			color:orange;
			font-size:20px;
			padding:2px;
		}
		.table2{
			font-size:18px;
			color:red;
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

	<table   class="table table-bordered table-striped">  
       	<tr class="table1" >  
          	<th>Patient ID &nbsp</th>  
           	<th>Appointment ID &nbsp</th>
		   	<th>Patient Name &nbsp</th>  
           	<th>Patient DOB &nbsp</th>
		   	<th>Patient Age &nbsp</th>  
           	<th>Patient Mobile &nbsp</th>
		   	<th>Appointment Date &nbsp</th>  
           	<th>Appointment Time &nbsp</th>
			<th>Reference &nbsp</th>
        </tr> 

	<?php  
    	if(mysqli_num_rows($result) > 0)  
        {  
        	while($row1 = mysqli_fetch_array($result))  
            {  
    ?>  
        <tr class="border border-table" style="font-size:18px ; color:red;">  
            	
			<td><?php echo $row1["Patient_ID"];?></td>
            <td><?php echo $row1["apt_id"]; ?></td>
			
            <td><?php echo $row1["Patient_Name"]; ?></td>
			<td><?php echo $row1["Patient_DOB"];?></td>  
			<td><?php echo $row1["Patient_Age"];?></td>  
            <td><?php echo $row1["Patient_Mobile"]; ?></td>
			<td><?php echo $row1["apt_date_given"];?></td>  
            <td><?php echo $row1["apt_time_given"]; ?></td>
			<td><?php echo $row1["A_reference"];?></td>  
        </tr>  
        <?php  
			}
		$variable=TRUE;	  
        }  
		else{
	?>		
			<h1 class="table3"><?php echo "NO DATA AVAILABEL CHECK IT AGAIN"?></h1>
		<?php
		}	   
	?>	
	</table>
	<br>
	<?php 
	if($variable==TRUE && $variable2==FALSE)
	{?>
	<br>
	<div>
		<form action="nextpage5.php" method="post" >
				<div class="col-lg-3"class=container style=" border:3px solid white;padding:8px;text-align:center;width:500px;margin:auto;">
						<input type="text" name="Patient_ID" class="form-control" placeholder="Patient ID" required>
						<br>
						<button class="btn btn-danger"> CHECK HISTORY</button>
					
				</div>
		</form>
	</div>
	<br><br><br>
	<div>
		<h2 style="padding:2px;color:orange;text-align:center;border:3px solid white;border-radius:8px;">Hey Doc Fill The Information you Collected</h2>
	</div>
	<br>
	<br>	
	<div class=container >
		<form style="padding:10px"class="border border-white" action="nextpage4.php" method="post" >
			<div class="row">
        		<div class="col-lg-3">
				<h1 class="heading1">Checking Details</h1>
					<div class="form-group">
						<label>Blood Pressure</label>
						<br>
						<input type="number" name="blood_pressure" class="form-control" placeholder="Blood Pressure" >
					
					</div>
					
        			<div class="form-group">
						<label>Weight</label>
						<br>
						<input type="number" name="Weight" class="form-control" placeholder="Weight" >
					</div>
        
					<div class="form-group">
						<label>Temperature</label>
						<br>
						<input type="number" name="Temperature" class="form-control" placeholder="Temperature">
					</div>
		
        		</div>	
				<div class="col-lg-3">
				<h1 class="heading1">Checking Details</h1>				
        			<div class="form-group">
						<label>Pulse</label>
						<br>
						<input type="number" name="Pulse" class="form-control" placeholder="Pulse" >
					</div>
        
            		<div class="form-group">
						<label>Medicine Daily</label>
						<br>
						<input type="text" name="Medicine_Daily" class="form-control" placeholder="Any Medicine Patient Take Daily">
					</div>
		
									
				</div>
				<div class="col-lg-3">
				<h1 class="heading1">Diseases Dignosed</h1>
        			<div class="form-group">
						<label>Disease1</label>
						<br>
						<input type="text" name="Disease1" class="form-control" placeholder="Disease1" >
					</div>
        
            		<div class="form-group">
						<label>Disease2</label>
						<br>
						<input type="text" name="Disease2" class="form-control" placeholder="Disease2">
					</div>
		
					<div class="form-group">
						<label>Disease3</label>
						<br>
						<input type="text" name="Disease3" class="form-control" placeholder="Disease3">
					</div>
				
				</div>
				<div class="col-lg-3">
				
				<h1 class="heading1">Tests</h1>
        			<div class="form-group">
						<label>Test1</label>
						<br>
						<input type="text" name="Test1" class="form-control" placeholder="Test1" >
					</div>
        
            		<div class="form-group">
						<label>Test2</label>
						<br>
						<input type="text" name="Test2" class="form-control" placeholder="Test2">
					</div>
		
					<div class="form-group">
						<label>Test3</label>
						<br>
						<input type="text" name="Test3" class="form-control" placeholder="Test3">
					</div>
					
				</div>
				<div class="col-lg-12">
				<h1 class="heading1">Medicines</h1>

					<div class="form-group">
						<label>medicines</label>
						<br>
						<input type="text" name="Medicine" class="form-control" placeholder="Enter Medicine" >
					</div>	
				
				</div>	
				<br>
				
				<div class="col-lg-3">
				<h1 class="heading1">Enter Patient_id and Appointment Id</h1>

					<div class="form-group">
						<label>Patient id</label>
						<br>
						<input type="text" name="Patient_ID" class="form-control" placeholder="Patient ID" required>
						<label>Appointment id</label>
						<br>
						<input type="text" name="apt_id" class="form-control" placeholder="Appointment ID" required>
					</div>
				</div>	
				<br>
			</div>
			
			<div>
				<div class="col-lg-3">
					<button type="submit" class="btn btn-danger" action="nextpage4.php">Submit Details</button>	
				</div>
				
			</div>	
		</form>
		
	</div>
	<?php
	}
	else
	{
		?>
		<div >
		<form action="nextpage5.php" method="post" >
				<div class="col-lg-3"class=container style=" border:3px solid white;padding:8px;text-align:center;width:500px;margin:auto;">
						<input type="text" name="Patient_ID" class="form-control" placeholder="Patient ID" required>
						<br>
						<button class="btn btn-danger"> CHECK HISTORY</button>
				</div>
		</form>

	</div>

		<h1 style="color:white">Patient Already checked</h1>
	<?php
	}
	?>    
</body>
</html>


<!--
        TIll NOW Code by Roshan Manik Wagh Please dont change it without discussion......
        rights.

-->

