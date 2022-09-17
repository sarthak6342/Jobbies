<?php

include 'dbcon.php';

if (isset($_POST['submit'])) {
	$name =$_POST['uname'];
   $des =$_POST['des'];
   $num = $_POST['num'];
   $loc = $_POST['location'];
	$pic =$_FILES['pic'];

//print_r($pic); 

   $filename = $pic['name'];
   $filepath = $pic['tmp_name'];
   $fileerror = $pic['error'];

   if ($fileerror == 0) {
   	$destfile='images/'.$filename;
   	move_uploaded_file($filepath, $destfile);
   

   $insertqery = " insert into post1 (name,description,number,location,pic ) values ('$name', '$des', '$num','$loc','$destfile' )";

   $query = mysqli_query($con, $insertqery);

   
   

   }
   ?>
   <script>
       alert("Job Posted");
   </script>
   <?php

   header('location: jobbies.php');
   



}

?>