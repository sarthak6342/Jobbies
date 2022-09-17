<!DOCTYPE html>
<html>
<head>
	<title>Jobs</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
    
	<section class="mx-auto">
		
			<?php
            include 'dbcon.php';
            include 'nav.php';
            $selectquery= "select * from post1";
            $query = mysqli_query($con, $selectquery);
            
            while ($result = mysqli_fetch_array($query)) {
            	?>
              <div class="card " style="width: 30%; float: left; margin: 1.6%; margin-top: 100px; ">
                 
                 <img class="card-img-top" src="<?php echo $result['pic']; ?>" width="500" height="300"alt="Image not found"/>
                    <div class="card-body">
                      <h5 class="card-title"><?php echo $result['name']; ?></h5>
                      <p class="card-text"><?php echo $result['description']; ?></p>
                      <h6><?php echo $result['number']; ?></h6>
                      <h6><?php echo $result['location']; ?></h6>
                      <a href="#" class="btn btn-primary">Join this Job</a>
                    </div>
                    </div>
                    
            	<?php
            }

            ?>
        
	</section>



<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>
</html>

