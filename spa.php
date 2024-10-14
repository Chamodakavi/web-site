<?php include('header.html'); ?>

<link rel="stylesheet" href="spa.css">

<header class="hero">
        <div class="hero-text">
            <h1>Relax, Rejuvenate, Revive</h1>
            <p>Experience the ultimate wellness at Serene Spa</p>
            <a href="#" class="cta-button" id="openModalBtn2">Make an Appointment</a>
        </div>
    </header>

<section id="services" class="section">
        <h2>Our Services</h2>
        <div class="service-grid">
            <div class="service">
                <h3>Massage Therapy</h3>
                <p>Unwind with our relaxing massage therapy sessions.</p>
            </div>
            <div class="service">
                <h3>Aromatherapy</h3>
                <p>Breathe easy with our custom essential oil blends.</p>
            </div>
            <div class="service">
                <h3>Facial Treatments</h3>
                <p>Rejuvenate your skin with personalized facial care.</p>
            </div>
        </div>
    </section>

    <section id="about" class="section about">
        <div class="about-content">
            <h2>About Us</h2>
            <p>At Chi The Spa, we are committed to providing top-notch spa treatments in a relaxing and peaceful environment. Our expert therapists are dedicated to ensuring every client leaves feeling rejuvenated and revitalized.</p>
        </div>
    </section>

    <section id="offers" class="section">
        <h2>Special Offers</h2>
        <div class="offer-grid">
            <div class="offer">
                <h3>Relax & Refresh</h3>
                <p>Get 20% off on all full-body massage therapies this month.</p>
            </div>
            <div class="offer">
                <h3>Beauty & Wellness</h3>
                <p>Enjoy a free aromatherapy session with every facial treatment.</p>
            </div>
        </div>
    </section>

    <section id="contact" class="section contact">
        <h2>Contact Us</h2>
        <p>Email: info@chithespa.com | Phone: +94 311 2347</p>
        <p>Address: 123 Weliwita, Colombo</p>
    </section>

<div id="modal" class="modal">
    <div class="modal-content">
        <span class="close-btn" id="closeModalBtn">&times;</span>
        <h3>Book an Appointment</h2>
        <form>
            <label for="name">Full Name:</label>
            <input type="text" id="name" name="name" placeholder="Enter your full name" required>

            <label for="email">Email:</label>
            <input type="email" id="email" name="email" placeholder="Enter your email" required>

            <label for="service">Select Service:</label>
            <select id="service" name="service">
                <option value="massage">Massage Therapy</option>
                <option value="aromatherapy">Aromatherapy</option>
                <option value="facial">Facial Treatment</option>
            </select>

            <label for="date">Preferred Date:</label>
            <input type="date" id="date" name="date" required>

            <button type="submit" class="cta-button">Submit</button>
        </form>
    </div>
</div>

<br><br><br><br><br>
<script src="spa.js"></script>
<?php include('footer.html'); ?>