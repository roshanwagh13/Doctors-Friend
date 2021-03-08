<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    
    <link rel="stylesheet" href="index.css">
    <style>
        body{
            background-image:url("./upload/m12.jpg");            
	        background-repeat:no-repeat;
        	background-size:cover;
        }
        
    </style>
    <title>Welcome Page</title>
</head>
<body>
        
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
    <div class="col-lg-10" align="center">
    <div class="col-lg-2"></div>
    <div class="col-lg-2" style="padding:50px;">
        <div class="card" style="width: 18rem;" >
  			<img class="card-img-top" src="./upload/cash.jpg" alt="Card image cap">
  		    <div class="card-body">
    			<h5 class="card-title" align="center">Total Collection</h5>
				<p>By Selecting date you will see collection of that day..</p>
                <form  method="post" action="nextpage9.php">
                    <div>
                        <label for="date_selected1" style="color:red;font-size:25px;">Date:</label>
                        <br>
			            <input name="date_selected1" type="date" id="date_selected1" class=heading1 required>
                    </div>
                    <div class="heading12">
                        <br>
                        <button type="submit" class="btn btn-danger">GET DATA</button>   
                    </div>
                </form>					
            </div>
		</div>
    </div>
        
    </div>                
</body>
</html>    