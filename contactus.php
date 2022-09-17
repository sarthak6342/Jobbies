<!DOCTYPE html>
 <html lang="en">
 <head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <meta http-equiv="X-UA-Compatible" content="ie=edge">
   <link rel="stylesheet" type="text/css" href="contactus.css">
    <!-- Add font awesome CDN-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://fonts.googleapis.com/css2?family=IM+Fell+French+Canon&display=swap" rel="stylesheet">
    <script src="https://code.jquery.com/jquery-3.4.1.js"></script>
    <script src="https://kit.fontawesome.com/a076d05399.js"></script>
   <title>Contact Us Form</title>
   <link rel="icon" href="j.jpg" type="image/x-icon">
    </head>
     <body>
     
   <!-- contact section -->
         <section id="contact-section">
           <div class="container">
           	 <h2>Contact Us</h2>
              <p>Your Feedback is important to us. Thanks for your valuable time.
              </p>
             <div class="contact-form">

                  <!-- First grid -->
               <div>
                 <i class="fa fa-map-marker"></i><span class="form-info">IIM Road, Eldeco City Breeze, Lucknow, Uttar Pradesh</span><br>
                 <i class="fa fa-phone" > </i><span class="form-info">  +91 9999454750</span><br>
                 <i class="fa fa-envelope"></i><span class="form-info">  Jobbies@Gmail.com</span>
               </div>
               
                   <!-- second grid -->
           <div>        
             <form action="contact.php" method="POST">
               <input type="text" placeholder="Your Name" name="fnm" required>
               <input type="text" placeholder="Last Name" name="lnm"><br>
               <input type="Email" placeholder="Email" name="em" required><br>
               <input type="text" placeholder="Subject of this message" name="sub"><br>
               <textarea name="msg" placeholder="Message" rows="5" required></textarea><br>
               <button type="submit"class="submit" >Send Message</button> 
             </form>   
               </div>
             </div>
           </div>
         </section>

         
     </body>