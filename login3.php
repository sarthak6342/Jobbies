<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <script src="https://code.jquery.com/jquery-3.4.1.js"></script>
    <script src="https://kit.fontawesome.com/a076d05399.js"></script>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script> 
		function msg() { 
			alert("Login First"); 
		} 
	</script> 
    <link rel="stylesheet" href="login2.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>Login page</title>
    <link rel="icon" href="j.jpg" type="image/x-icon">
</head>
<body>
    <?php
    // include'nav.php';
    ?>
    <!-- <nav>
        <ul>
            <li class="logo">JOBBIES</li>
            <li class="items"><a href="#" onclick="msg()">Home</a></li>
            <li class="items"><a href="#"onclick="msg()">About</a></li>
            <li class="items"><a href="#"onclick="msg()">Contact</a></li>
            <li class="items"><a href="login2.html">Logout</a></li>
            <li class="btn"><a href="#"><i class="fas fa-bars"></i></a></li>
        </ul>
    </nav>
    <script>
        $(document).ready(function () {
            $('.btn').click(function () {
                $('.items').toggleClass("show");
                $('ul li').toggleClass("hide");
            });
        });
    </script> -->
    <form action="login2.php" method="POST">  
        <div class="loginbox">
        <h1>Login</h1>
        <div class="textbox">
            <i class="fa fa-user" aria-hidden="true"></i>
            <input type="text" placeholder="Username" name="nm" value="" required >
        </div>
        <div class="textbox">
            <i class="fa fa-lock" aria-hidden="true"></i>
            <input type="password" placeholder="Password" name="ps" value="" required>
        </div>
        <!-- onclick=msg() -->
        <input class="btn" type="submit" onclick="location.href='jobbies.php'" name="" value="Submit">
        <input class="btn" type="button" onclick="location.href='apply.html'" name="" value="Not Have an Account ?">
        <!-- <input class="btn" type="button" onclick="location.href='jobbies.html'" name="" value="Back to Home"> -->
    </div>
</form>
</body>
</html>