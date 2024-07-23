<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="main.css">
    <link rel="stylesheet" href="contactus.css">
    <title>Contact us Page</title>
    
</head>
<body>
    <header>
        <img src="images/cinnamon-lakeside-drk.svg" alt="" class="h-logo">
        <div class="nav-buttons">
         <button type="button" class="sign-in-btn">Sign In</button>
     </div>
     </header>
     <nav class="nav">
        <ul class="nav-container">  
            <li >
                <a href="index.html">
                    <img src="images/Editable-Cafe-Restaurant-Logo.jpg" alt="" srcset="" class="restaurant-logo">
                </a>
            </li>

            <a href="index.html"><li class="item">Home</li></a>

            <li class="item">Rooms & Suites
                <ul class="dropdown">     
                    <li><a href="x.html">All</a></li>
                    <li><a href="x.html">Suites</a></li>
                    <li><a href="x.html">Rooms</a></li>
                </ul>
            </li>

            <li class="item">Dining
                <ul class="dropdown">
                    <li><a href="x.html">Foods & Beverages</a></li>
                    <li><a href="x.html">bar</a></li>
                </ul>
            </li>
            <a href="index.html"><li class="item">Foods & Beverages</li></a>
            <a href="index.html"><li class="item">Spa</li></a>
            <a href="index.html"><li class="item">Bar</li></a>
            <a href="index.html"><li class="item">About Us</li></a>
            <a href="contactUsPage.php"><li class="item">Contact Us</li></a>
        </ul>
        <div class="box">
        </div>
    </nav>
    
    <img src="images/LeadOberoi-1366x768.jpg" alt="" srcset="" class="wel-img">

    <section class="contactus-container">
        <div class="contact">
            <h2 class="c-h2">How can we help?</h2>

            <div class="tel">
                <h3 class="c-h3">Call Us now</h3>
                <p class="para">+94 11 2454 765</p>
            </div>

            <div class="mail">
                <h3 class="c-h3">Email Us</h3>
                <p class="para">cinnomonlake@gmail.com</p>
            </div>

        </div>

    </section>

    <section class="form-container">
        <form method="post" class="form">
            <h1>Send us a message</h1>
        
            <label for="f-name" class="lab">First Name: </label> <br>
            <input type="text" placeholder="First name" name="f-name" id="f-name" required>
            <br>
            
            <label for="l-name" class="lab">Last Name: </label> <br>
            <input type="text" placeholder="Last name" name="l-name" id="l-name" required>
            <br>
            
            <label for="email">Email Address:</label> <br>
            <input type="email" placeholder="Eg: abc@gmail.com" name="email" id="email" required>
            <br>
            
            <label for="tp">Phone:</label> <br>
            <input type="tel" placeholder="+94 78 452 4356" name="tp" id="tp" required>
            <br>
            
            <label for="subject">Subject:</label> <br>
            <input type="text" placeholder="Enter your subject" name="subject" id="subject" required>
            <br>
            
            <label for="message">Message:</label> <br>
            <textarea placeholder="Enter your message here*" name="message" id="message" required></textarea>
            <br>
            
            <button type="submit" name="submit">Submit</button>
        </form>
        
    </section>

   

     <footer>
        <div class="f1">
            <img src="images/cinnamon-lakeside-drk.svg" alt="">
           <div class="hr"></div>
    
        
               <div class="det">
                <h3>Find & Book</h3>
                <p>nearby locationns</p>
                <p>reservations</p>
               </div>
    
               <div class="det">
                <h3>Shangri-La Circle</h3>
                <p>Programme Overview</p>
                <p>Join Shangri-La Circle</p>
                <p>Account Overview</p>
                <p>Book A Table</p>
               </div>
        
               <div class="det">
                <h3>About Lakeside</h3>
                <p>about us</p>
                <p>contact us</p>
               </div>
          
               <div class="qr">  
                <img src="images/qr-code-generator-free-download-getintopc.com_.jpg" alt="">
                <h3>scan for more details...</h3>
               </div>
        </div>
       <div class="f2">
        <p class="f">Privacy Policy | Terms & Conditions | Disclaimer | Supplier Code Of Conduct </p>
        <p class="t">© 2024 Lakeside International Hotel Management Ltd. All Rights Reserved. ICP license: 17055189</p>
       </div>

    </footer>
    <script src="main.js"></script>
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
</body>
</html>

<?php
   
    include "connection.php";

      if(isset($_POST['submit'])){

        $firstName = $_POST['f-name'];
        $lastName = $_POST['l-name'];
        $email = $_POST['email'];
        $tp = $_POST['tp'];
        $subject = $_POST['subject'];
        $message = $_POST['message'];  

        $stmt = $conn->prepare("INSERT INTO contactUs (fname, lname, email, tp, subject, message) VALUES (?, ?, ?, ?, ?, ?)");
        $stmt->bind_param("ssssss", $firstName, $lastName, $email, $tp, $subject, $message);
        
        if($stmt->execute()){

            // close php tag
            ?> 

            <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>

            <script>
            
            swal("Success", "Message Submitted", "success");
            
            </script>


            <!-- open php tag again. -->
            <?php

        }


        $stmt->close();
        $conn->close();
    }


?>