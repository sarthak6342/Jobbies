<?php
$name = $_POST['nm'];
$email = $_POST['em'];
$usernm= $_POST['username'];
$pass= $_POST['password'];
$qual= $_POST['qualification'];
$dob= $_POST['dob'];
// echo"<br>";
$servername = "localhost";
$username = "root";
$password = "";
$passw = password_hash($pass, PASSWORD_BCRYPT);
$database = "jobbies";
$conn = mysqli_connect($servername, $username, $password, $database);
if(!$conn){
die("Failed to connect". mysqli_connect_error());
}
else{
    ?>
    <script>
        alert("Connection Successful");
    </script>
    <?php
}
$emailquery = " select * from apply where email='$email' " ;
$query = mysqli_query($conn,$emailquery);
$emailcount = mysqli_num_rows($query);
if($emailcount>0){
    ?>
    <script>
    alert("Please try with a different email address");
    </script>
    <?php
    include 'apply.html';
    // echo "<br> But email already exists.<br>Sorry, we cannot let you in...<br> Try with a new Email address";
}

else{
    $unamequery = "select * from apply where username='$usernm'" ;
    $query = mysqli_query($conn,$unamequery);
    $unamecount = mysqli_num_rows($query);
    if($unamecount>0){
        ?>
        <script>
        alert("Please try with a different Username");
        </script>
        <?php
        include 'apply.html';
    }
    else{

$sql = "INSERT INTO `apply` (`name`, `email`, `username`, `password`, `qualifications`, `dob`) VALUES ('$name', '$email', '$usernm', '$pass', '$qual', '$dob')";
if(mysqli_query($conn, $sql))
{
    ?>
    <script>
        alert("Data saved");
    </script>
    <?php
    include 'login2.html';
}
else
{
    echo "error". mysqli_error($conn);
}
}
}
mysqli_close($conn);
?> 