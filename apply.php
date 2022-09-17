<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css2?family=Noto+Serif:wght@700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="apply.css">
    <title>Registration page</title>
    <link rel="icon" href="j.jpg" type="image/x-icon">
    <script>
        function msg() {
            alert("values submitted");
        } 
    </script>
</head>

<body>
    <div class="registration">
        <h1>Sign Up</h1>
        <form action="apply1.php" method="POST">
            <input type="text" name="nm" id="as" placeholder="Full name">
            <i class="fas fa-user-tie" aria-hidden="true"></i>
            <input type="email" name="em" id="as" placeholder="Email">
            <i class="fas fa-envelope-square"></i>
            <input type="text" name="username" id="as" placeholder="User Name">
            <i class="fa fa-user" aria-hidden="true"></i>
            <input type="password" name="password" id="as" placeholder="Password">
            <i class="fa fa-lock" aria-hidden="true"></i>
            <input type="text" name="qualification" id="as" placeholder="Qualiification">
            <i class="fas fa-university"></i>
            <input placeholder="Date Of Birth" name="dob" class="textbox-n" type="text" onfocus="(this.type='date')"
                onblur="(this.type='text')" id="date">
                <i class="fas fa-birthday-cake"></i>
            <div class="button">
            <!-- <button id="az" onclick="msg()">Submit</button>
            <button id="az" href="login2.html">Already have an accout ?</button>
            <button id="az" onclick="location.href='jobbies.html'">Back to Home</button> -->
            <input id="az" class="" type="submit" onclick="" name="" value="Submit">
            <input id="az" class="" type="button" onclick="location.href='login2.html'" name="" value="Already have an Account ?">
            <!-- <input id="az" class="" type="button" onclick="location.href='jobbies.html'" name="" value="Back to Home"> -->
            </div>
        </form>
    </div>
</body>
</html>