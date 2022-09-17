<?php
session_start();
$uname = $_POST['nm'];
$pass = $_POST['ps'];
$pas = password_hash($pass, PASSWORD_BCRYPT);
$servername = "localhost";
$username = "root";
$password = "";
$database = "jobbies";
$conn = mysqli_connect($servername, $username, $password, $database);
if(!$conn){
die("Failed to connect". mysqli_connect_error());
}
else{
    ?>
    <script>
        // alert("Connection Successful");
    </script>
    <?php
}

$emailquery = "select * from apply where username='$uname' ";
$query = mysqli_query($conn,$emailquery);
$emailcount = mysqli_num_rows($query);
if($emailcount){
    $emailpass = mysqli_fetch_assoc($query);
    $dbpass = $emailpass['password'];
    $_SESSION['username'] = $emailpass['username'];
    // $pass_decode = password_verify($pas,$dbpass);
    if($pass==$dbpass){
        ?>
        <script>
        alert("Login successful");
        </script>
        <?php
        include 'jobbies.php';
    }
    else{
        ?>
        <script>
        alert("Invalid Password");
        </script>
        <?php
        include 'login3.php';
    }
}
else{
    ?>
        <script>
        alert("Invalid Email");
        </script>
        <?php
        include 'login3.php'; 
}

$sql = "INSERT INTO `login2` (`name`, `password`) VALUES ('$uname', '$pas')";
if(mysqli_query($conn, $sql))
{
    // ?>
    // <script>
    //     alert("You are in...");
    // </script>
    // <?php
}
else
{
    echo "error". mysqli_error($conn);
}
mysqli_close($conn);
?> 