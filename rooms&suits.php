<?php include('header.html'); ?>

<link rel="stylesheet" href="rooms&suits.css">

<div class="intro-container">
        <h1>The Perfect<br>Base For You</h1>
        
    
    <section class="booking">
        <div class ="Section container booking_Container">
          <form action="roomAvailable.php" method="post">
            <div class="input_group">
               <label for="arrival"> Check-in Date</label> 
               <input type="Date" name="arrival" placeholder="YOur Arrival Date">  
            </div>
            <div class="input_group">
                <label for="depature"> Check-out Date</label> 
                <input type="Date" name="depature" placeholder="YOur Depature Date">  
                </div>
            <div class="input_group">
              <label for="guest">Room/Executives/Suites Name</label> 
              <input type="text" name="roomName" placeholder="name">  
            </div>
            <button class="Btn">Check Availability</button>
          </form> 
        </section>
        </div>

        <div class="room-boxes">
            <div class="room-box">
                <h3>Rooms</h3>
                <img src="images/Images/R1.webp">
                <p>Cozy and well-equipped, our Standard Rooms offer modern amenities for a comfortable stay, perfect for both relaxation and productivity.</p>
                <a href="rooms.php"><h5>Explore</h5></a>
            </div>
            <div class="room-box">
                <h3>Suites</h3>
                <img src="images/Images/S1.webp">
                <p>Spacious and elegantly designed, our Suites provide a luxurious retreat with separate living areas and upgraded amenities for an exceptional experience.</p>
                <a href="suites.php"><h5>Explore</h5></a>
            </div>
            <div class="room-box">
                <h3>Executives</h3>
                <img src="images/Images/E1.webp">
                <p>Tailored for business travelers, our Executive Rooms feature premium comfort, enhanced workspace, and exclusive services for a seamless stay.</p>
                <a href="executives.php"><h5>Explore</h5></a>
            </div>
        </div>
        <!------------------------------------Offer Section------------------------------------------------->
        
        <div class="title">
            <h2>Special Offers</h2>
        </div>
        <div class="offer-paragrapgh">
            <p>Explore our selection of exclusive offers and transport yourself to a Resplendent world of pampering</p>
        </div>
        <div class="offer">
            <div class="Image-box">
                <img src="images/Images/offer2.jpg">
                <p class="additional-info">Stay fit during your visit with unlimited gym access, a fitness class, and a relaxing spa treatment. Perfect for guests looking to balance wellness and relaxation.</p>
            </div>
            <div class="Image-box">
                <img src="images/Images/offer3.jpg">
                <p class="additional-info">Book a family room and receive a complimentary welcome pack for kids, along with free access to our kids' activities and entertainment throughout your stay.</p>
            </div>
            <div class="Image-box">
                <img src="images/Images/offer4.jpg">
                <p class="additional-info">Extend your stay and save more! Stay for three nights or more and enjoy up to 25% off, plus additional perks such as free room upgrades (subject to availability).</p>
            </div>
            <div class="Image-box">
                <img src="images/Images/offer5.jpg">
                <p class="additional-info">Treat yourself to a relaxing weekend escape. Book a two-night stay over the weekend and get a complimentary breakfast and late check-out.</p>
            </div>
            

        </div>

        <!-- --------------------------------------customer feedback------------------------------------- -->
        <div class="customer-feedback-section">
            <h2>Customer Feedback</h2>
            <div class="feedback-container">
                <div class="feedback-box">
                    <img src="images/images/profile1.jpg" alt="Customer 1" class="customer-img">
                    <p class="feedback-text">"The hotel service was outstanding! The staff were friendly, and the rooms were incredibly comfortable."</p>
                    <p class="customer-name">- John Doe</p>
                </div>
                <div class="feedback-box" style="display: none;">
                    <img src="images/images/profile2.jpg" alt="Customer 2" class="customer-img">
                    <p class="feedback-text">"Amazing location, fantastic view, and a wide variety of dining options. Highly recommend!"</p>
                    <p class="customer-name">- Jane Smith</p>
                </div>
                <div class="feedback-box" style="display: none;">
                    <img src="images/images/profile3.jpg" alt="Customer 3" class="customer-img">
                    <p class="feedback-text">"A perfect getaway! The spa was very relaxing, and the room was exceptionally clean."</p>
                    <p class="customer-name">- Mike Johnson</p>
                </div>
            </div>
            <button id="prev-btn">←</button>
            <button id="next-btn">→</button>
        </div>
        
<script src="feedback.js"></script>
<script src="roomBook.js"></script>
<?php include('footer.html'); ?>