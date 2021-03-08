<?php
    $Appt_checked=false;
    
    
    
    session_start();
    /*
    session_start() creates a session or resumes the current one based on a session identifier passed via a GET or POST request, or passed via a cookie.
    When session_start() is called or when a session auto starts, PHP will call the open and read session save handlers.
    
    */
    
    //header("location:firstpage.php");
    $server="localhost";
    $username="root";
    $password="root";
    //create connection
    $con =mysqli_connect($server,$username,$password);

    /*
    mysqli_connect() function opens a new connection to the MySQL server.
     In the previous version of the connection mysql_connect() was used for connection and then there comes mysqli_connect() where i means improved version of connection and is more secure than mysql_connect().
    */




    if($con)
	{
		#echo"connection done";
	}
	else{
		#echo "No connection";
	}
	

    mysqli_select_db($con,'my_doctor_friend');
    /*
    mysqli_select_db() function is used to change the default database for the connection.
    It returns true on success or false on failure
    */

    $apt_date_given=$_POST['apt_date_given'];
    $apt_time_given=$_POST['apt_time_given'];
   


    /*
        PHP $_POST is a PHP super global variable which is used to collect form data after submitting an HTML form with method="post". $_POST is also widely used to pass variables.
    */
    $qy2 = "select * from appointment where apt_date_given = '$apt_date_given'  && apt_time_given = '$apt_time_given' ";
    /*
        writing query and assigning to variable 
    */

    $result = mysqli_query($con,$qy2);
    /*
    mysqli_query() function performs a query against a database.
    The mysqli_query() function accepts a string value representing a query as one of the parameters and, executes/performs the given query on the database.

    storing the returned values into result variable
    */
    
    $num = mysqli_num_rows($result);
    /*
     mysqli_num_rows() function returns the number of rows in a result set.
     */
    

    
    if($num>0)
    {
        #header('location:appointmentpage.php');
        $Appt_checked=true;
    }
    else
    {
        #$qy="insert into appointment(A_Name, A_age, A_reference,apt_time,apt_date_given,apt_time_given) VALUES ('$A_Name', '$A_age', '$A_reference', current_timestamp(),'$apt_date_given','$apt_time_given')";
        #mysqli_query($con,$qy);    
        $Appt_checked=false;
        $_SESSION['apt_date_given'] = $apt_date_given;
        $_SESSION['apt_time_given'] = $apt_time_given;
        #header('location:firstpage.php');
      
        /*
        An associative array containing session variables available to the current script

        This is a 'superglobal', or automatic global, variable. This simply means that it is available in all scopes throughout a script. There is no need to do global $variable; to access it within functions or methods.
        */
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
            background-image:url("./upload/m15.png");
            
	        background-repeat:no-repeat;
        	background-size:cover;
        }
    </style>

</head>
<body>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>


    <?php
        if($Appt_checked==false)
        {
            echo '<h1 class="heading12">YOU CAN BOOK THIS  SLOT </h1>';
            echo '<form action="bookappointment.php">';
            echo '<button type="submit" class="btn btn-danger">NEXT</button>';
            echo '</form>';
            echo '<style>';
            echo 'body{';
            echo 'background-image:url("./upload/m15.png")';
            
	        echo 'background-repeat:no-repeat';
        	echo 'background-size:cover';
            echo '</style>';
            echo '}';
    
            #header("location:firstpage.php");
        }
        else
        {
            echo '<h1 class="heading12">THIS SLOT CANT BE BOOKED TRY OTHER</h1>';
            #echo '<button type="submit" class="btn btn-primary" onclick="appointmentpage.php"></button>';
            echo '<form action="appointmentpage.php">';
            echo '<button type="submit" class="btn btn-danger">GO BACK</button>';
            echo '</form>';
            echo '<style>';
            echo 'body{';
            echo 'background-image:url("./upload/m17.jpg");';
            
	        echo 'background-repeat:no-repeat;';
        	echo 'background-size:cover;';
            echo '</style>';
            echo '}';

            #header("location:appointmentpage.php");
        }
    
    ?>
</body>
</html>

<!--
        TIll NOW Code by Roshan Manik Wagh Please dont change it without discussion......
        rights.

-->


