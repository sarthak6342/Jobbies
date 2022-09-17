<!DOCTYPE html>

<head>
    <meta charset="utf-8">
    <title>Jobbies</title>
    <link rel="stylesheet" href="nav.css">
    <script src="https://code.jquery.com/jquery-3.4.1.js"></script>
    <script src="https://kit.fontawesome.com/a076d05399.js"></script>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat:400,500,600,700&display=swap">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>

<body>
    <nav>
        <ul>
            <li class="logo">JOBBIES</li>
            <li class="items"><a href="Jobbies.html">Home</a></li>
            <li class="items"><a href="about.html">About</a></li>
            <li class="items"><a href="contactus.html">Contact</a></li>
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
    </script>
    <?php
    // include'login3.php';
    ?>
</body>

</html>