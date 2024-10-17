<?php include('header.html'); ?>

    <link rel="stylesheet" href="contactus.css">
    <link rel="stylesheet" href="styles.css">

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
        <form method="post" class="form" onsubmit="return validate()">
                    <h1>Send us a message</h1>
                
                    <label for="f-name" class="lab">First Name: </label> <br>
                    <input type="text" placeholder="First name" name="f-name" id="f-name" required>
                    <img src="images/greentick.png" alt="valid" id="tick-fname" class="validate tick">
                    <img src="images/redcross.webp" alt="invalid" id="cross-fname" class="validate cross">
                    <br>
                
                    <label for="l-name" class="lab">Last Name: </label> <br>
                    <input type="text" placeholder="Last name" name="l-name" id="l-name" required>
                    <img src="images/greentick.png" alt="valid" id="tick-lname" class="validate tick">
                    <img src="images/redcross.webp" alt="invalid" id="cross-lname" class="validate cross">
                    <br>
                
                    <label for="email">Email Address:</label> <br>
                    <input type="email" placeholder="Eg: abc@gmail.com" name="email" id="email" required>
                    <img src="images/greentick.png" alt="valid" id="tick-email" class="validate tick">
                    <img src="images/redcross.webp" alt="invalid" id="cross-email" class="validate cross">
                    <br>
                
                    <label for="tp">Phone:</label> <br>
                    <input type="tel" placeholder="+94 78 452 4356" name="tp" id="tp" required>
                    <img src="images/greentick.png" alt="valid" id="tick-tp" class="validate tick">
                    <img src="images/redcross.webp" alt="invalid" id="cross-tp" class="validate cross">
                    <br>
                
                    <label for="subject">Subject:</label> <br>
                    <input type="text" placeholder="Enter your subject" name="subject" id="subject" required>
                    <img src="images/greentick.png" alt="valid" id="tick-subject" class="validate tick">
                    <img src="images/redcross.webp" alt="invalid" id="cross-subject" class="validate cross">
                    <br>
                
                    <label for="message">Message:</label> <br>
                    <textarea placeholder="Enter your message here*" name="message" id="message" required></textarea>
                    <img src="images/greentick.png" alt="valid" id="tick-message" class="validate tick">
                    <img src="images/redcross.webp" alt="invalid" id="cross-message" class="validate cross">
                    <br>
                
                    <button type="submit" name="submit" id="submit" class="sub">Submit</button>
        </form>

        
    </section>

    <div class="btn">
        <img src="images/up-arrow.png" alt="" srcset="">
    </div>

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
    <script src="contactUsPage.js"></script>
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