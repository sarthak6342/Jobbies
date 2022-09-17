<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css2?family=Secular+One&display=swap" rel="stylesheet">
    <link
        href="https://fonts.googleapis.com/css2?family=Acme&family=Barlow:wght@500&family=Commissioner:wght@600&display=swap"
        rel="stylesheet"> <!-- home navbar fonts -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css"
        integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css2?family=Piazzolla:wght@600&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://kit.fontawesome.com/a076d05399.js"></script>
    <script src="https://code.jquery.com/jquery-3.4.1.js"></script>
    <link rel="stylesheet" href="css2.css">
    <title>JOBBIES</title>
    <link rel="icon" href="j.jpg" type="image/x-icon">
</head>

<body>
    <nav>
        <ul>
            <li class="logo">JOBBIES</li>
            <li class="items"><a href="Jobbies.php">Home</a></li>
            <li class="items"><a href="about.php">About</a></li>
            <li class="items"><a href="contactus.php" target="_blank">Contact</a></li>
            <li class="items"><a href="login3.php">Logout</a></li>
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
    <!-- <nav class="navbar" id="background">
        <ul class="navlist">
            <h2 class="head">JOBBIES</h2>
            <li><a href="Jobbies.html">Home</a></li>
            <li><a href="about.html">About</a></li>
            <li><a href="contactus.html">Contact Us</a></li>
            <li><a href="login2.html">Login</a></li>
        </ul> -->
        <!-- <div class="buscar-caja">
            <input type="text" name="" class="buscar-txt" id="search" placeholder="Search">
            <a class="buscar-btn">
                <i class="fas fa-search"></i>
            </a>
        </div> -->
    <!-- </nav> -->
    <section class="gyan">
        <div class="gyanmain">
            <p class="gyanbig">Best work from Home opportunies</p>
            <p class="gyansmall">We will help you to find your job easily</p>
            <p class="gyanshort">Post a job and find your likely employees</p>
        </div>
    </section>
    <!-- Upload your resume section -->
    <!-- <section class="contactus">
        <form action="/action_page.php">
            <input type="file" id="myFile" name="filename">
            <input type="submit">
        </form>
    </section> -->
     <section class="background firstsection">
        <div class="boxmain">
            <div class="firsthalf">
                <p class="textbig">Find open jobs or post a job</p>
                <p class="textsmall">The success of jobs search engines in bridging the gap between jobseekers and
                    employers has spawned this site, which list job opportunities in a specific sector, such as
                    education, health care, hospital management, academics and even in the non-governmental sector.</p>
                <div class="buttons">
                    <button class="btn" onclick="location.href='display.php'" >JOIN A JOB</button>
                    <!-- <a href="display.php" target="_blank">Join a Job</a> -->
                    <button class="btn" onclick="location.href='job_cms.php'">POST A JOB</button>
                </div>
            </div>
            <!-- <div class="secondhalf">
                <img src="img/jobkimg.jpg" alt="Choose image first">
            </div> -->
        </div>
    </section>
    
    <br>
    <section class="secright">
        <div class="paras">
            <p class="sectiontag textbig">The end of your search is here</p>
            <p class="sectionsubtag textsmall">While searching jobs, if you are here then no need to worry about your
                job because many job provider companies are regulary searching for employees and you can easily find a
                way here. For any job related query you can click on contact us button which will direct you to a
                webpage which will provide you the contact numbers of all the respected companies which are you
                searching.</p>
        </div>
        <div class="thumbnail">
            <img src="img11.jpg" alt="job image" class="imgfluid">
        </div>
    </section>
    <br>
    <section class="secleft">
        <div class="paras">
            <p class="sectiontag textbig">No Ads and No Charges</p>
            <p class="sectionsubtag textsmall">Employment sites typically charge fees to employers for listings job
                postings, Other sites can ask to pay but this a absolutely free website.</p>
        </div>
        <div class="thumbnail">
            <img src="no ads.png" alt="job image" class="imgfluid1">
        </div>
    </section>
    <br>
   
    <section class="social">
        <div class="soc">
            <a href="#" class="fa fa-facebook"></a>
            <a href="#" class="fa fa-twitter"></a>
            <a href="#" class="fa fa-instagram"></a>
        </div>
    </section> -->
</body>

</html>