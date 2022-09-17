<!DOCTYPE html>
<html>
<head>
	<title>Post A Job</title>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
  
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<?php
include 'nav.php';
?>
<body style="background-color: #f9f9f9;">
    
	<section class="body mx-auto">
		<h1 >Post a Job</h1>
      <form action="upload.php" method="POST" enctype="multipart/form-data">
  <div class="form-group">
    <label for="exampleInputEmail1">Company Name:</label>
    <input type="text" class="form-control" name="uname" value="" placeholder="Enter Job Name">
  </div>
  <div class="form-group">
    <label for="exampleInputEmail1">Job Description</label>
    <textarea type="text" class="form-control" name="des" value=""  placeholder="Enter Job Description"></textarea>
  </div>
  <div class="form-group">
    <label for="exampleInputEmail1">Phone Number:</label>
    <input type="tel" class="form-control" name="num" value="" placeholder="Enter Phone Number">
  </div>
  <div class="form-group">
    <label for="exampleInputEmail1">Location:</label>
    <input type="text" class="form-control" name="location" value="" placeholder="Enter Job Location">
  </div>
  <div class="form-group">
    <label for="exampleInputEmail1">Upload Image</label>
    <input type="file" class="form-control image-resize"  name="pic" value="" placeholder="Upload Image">
    
  </div>
  <input type="submit" name="submit" value="Post"  class="btn btn-primary">
</form>
	</section>



<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>
</html>