<?php
$fname = $_POST['fnm'];
$lname = $_POST['lnm'];
$email = $_POST['em'];
$sub = $_POST['sub'];
$msg = $_POST['msg'];
echo"Please go to the website";
// echo"<br>";
$servername = "localhost";
$username = "root";
$password = "";
$database = "jobbies";
$conn = mysqli_connect($servername, $username, $password, $database);
if(!$conn){
die("Failed to connect". mysqli_connect_error());
}
else{
    // echo"\tis sucessfully saved to ";
}

$sql = "INSERT INTO `contactus` (`firstname`, `lastname`, `email`, `subject`, `message`) VALUES ('$fname', '$lname', '$email', '$sub', '$msg')";
if(mysqli_query($conn, $sql))
{
    ?>
    <script>
    alert("Thank you for your feedback");
    </script>
    <?php
}
else
{
    echo "error". mysqli_error($conn);
}
mysqli_close($conn);
?> 