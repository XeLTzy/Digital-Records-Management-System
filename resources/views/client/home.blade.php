<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Appointment</title>
    <link rel="stylesheet" href="{{ asset('frameworks/bootstrap-5.3.3/dist/css/bootstrap.min.css') }}">

<style>
    * {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
    }

    body {
        font-family: Arial, sans-serif;
        line-height: 1.6;
    }

    header {
        background-color: #3a3a88;
        color: white;
        padding: 5px 0;
    }

    .navbar {
        display: flex;
        justify-content: space-between;
        align-items: center;
        max-width: 1200px;
        margin: 0 auto;
        padding: 0 20px;
    }

    .logo{
        display: flex;
        align-items: center;
    }

    .logo img {
        width: 30px;
        margin-bottom: 10px;
    }

    .logo h1{
        font-size: 25px;
        display: flex;
        align-items: center;
    }

    header h1{
        color: white;
        font-size: 1.5rem;
        font-weight: bold;
    }

    nav ul {
        list-style: none;
        display: flex;
    }

    nav ul li {
        margin-left: 20px;
        margin-top: 10px;
    }

    nav ul li a {
        color: white;
        text-decoration: none;
        font-size: 18px;
    }

    nav ul li a:hover {
        color: #00bfff;
    }

    .hero {
        background-image: url('assets/images/Icons/prices.png');
        background-size: cover;
        background-position: center;
        height: 400px;
        position: relative;
        display: flex;
        align-items: center;
        justify-content: center;
    }

    .overlay{
        background-color: rgba(0, 0, 0, 0.5); /* Semi-transparent overlay */
        align-items: center;
        justify-content: flex-start;
        padding-left: 50px;
        width: 100%;
        height: 99.9%;
    }

    .overlay h1 {
        font-size: 3rem;
        margin-top: 180px;
        font-weight: bold;
        color: white;
    }

    .overlay p {
        font-size: 1.2rem;
        margin-bottom: 30px;
        color:white;
    }

    .overlay a {
        font-size: 18px;
        margin-bottom: 50px;
        color: white;
        padding: 15px 30 px;
        font-size: 16px;
    }

    .hero img{
        width: 300px;
        height:auto;
    }

    .button {
        background-color: #00bfff;
        color: white;
        padding: 10px 20px;
        text-decoration: none;
        border-radius: 5px;
        display: inline-block;
    }

    .button:hover {
        background-color: #007acc;
    }

    .popup {
    display: none;
    position: fixed;
    z-index: 999;
    left: 0;
    top: 0;
    width: 100%;
    height: 100%;
    background-color: rgba(0, 0, 0, 0.5);
    justify-content: center;
    align-items: center;
    }

    .popup-content {
        background-color: white;
        padding: 30px;
        border-radius: 25px;
        width: 400px;
        margin-bottom: 15px;
    }

    .popup-content button {
            width: 100%;
            padding: 10px;
            background-color: #00aaff;
            border: none;
            color: white;
            font-size: 16px;
            border-radius: 5px;
            cursor: pointer;
        }

        .popup-content button:hover {
            background-color: #0088cc;
        }

    .close-btn {
        color: red;
        font-size: 20px;
        float: right;
        cursor: pointer;
    }

    .services {
        text-align: center;
        padding: 40px 20px;
    }

    .services h2 {
        font-size: 28px;
        margin-bottom: 20px;
        font-weight: bolder;
        color: black;
    }

    .service-cards {
        display: flex;
        grid-template-columns: repeat(3, 1fr);
        gap: 20px;
    }

    .service-card {
        background-color: lightgrey;
        padding: 20px;
        border-radius: 10px;
        text-align: center;
        width: 50%;
    }

    .service-card h3 {
        color: black;
        margin-bottom: 10px;
    }

    .service-card p {
        font-size: 16px;
    }

    .more-content{
        display: none;
    }

    .btn {
        display: inline-block;
        margin-top: 20px;
        padding: 10px 20px;
        background: #00bfff;
        color: #fff;
        text-decoration: none;
        border-radius: 5px;
    }

    .btn:hover{
        background-color: #007acc;
    }

    footer {
        background-color: #3a3a88;
        color: white;
        padding: 20px 0;
        text-align: center;
    }

    footer .footer-content {
        display: flex;
        justify-content: space-between;
        padding: 20px;
    }

    footer h1{
        display: center;
        font-size: 30px;
        text-align: center;
    }

    footer .footer-section {
        width: 30%;
    }

    footer .footer-section a {
        font-size: 15px;
        margin-bottom: 10px;
        color: white;
    }

    .footer-bottom {
        text-align: center;
        margin-top: 20px;
    }

    .footer-bottom p {
        font-size: 14px;
    }

@media (max-width: 768px) {
    .hero {
        height: 300px;
    }

    .overlay h1 {
        font-size: 2rem;
        margin-top: 80px;
    }

    .overlay p {
        font-size: 0.96rem;
    }

    .button{
        padding: 8px 18px;
        font-size: 0.9rem;
    }

    header nav {
        display: none;
    }
    .services-cards {
        grid-template-columns: 1fr;
    }

    .footer-content {
        flex-direction: column;
        text-align: center;
    }

    footer .footer-section {
        width: 100%;
        margin-bottom: 20px;
    }
    
    #Bookconfirm {
            display: none !important;
            min-height: 90svh;
        }

    #liveToast {
            display: none;
    }

    .dtop {
            min-height: 100svh;
    }
}

/* For Small Mobile Phones */
@media (max-width: 480px) {
    .navbar {
        flex-direction: column;
        align-items: flex-start;
    }
    
    header nav{
        display: none;
    }
    .logo {
        flex-direction: row;
        justify-content: flex-start;
    }

    .logo h1, .logo img {
        margin-right: 10px;
        display: inline-block;
    }

    .logo h1 {
        font-size: 1.2rem;
    }

    .logo img {
        width: 30px;
    }
branch
    .overlay h1 {
        font-size: 2rem;
        margin-top: 100px;
    }

    .overlay p {
        font-size: 1rem;
    }

    .button{
        margin-bottom: 20px;
    }
    .service-cards {
        grid-template-columns: 1fr;
    }

    .footer-content {
        flex-direction: column;
        text-align: center;
    }

    footer .footer-section {
        width: 100%;
        margin-bottom: 20px;
    }
}
    </style>
</head>
<body>
<header>
        <div class="navbar">
            <div class="logo">
                <img src="assets/images/Icons/dental-logo.png" alt="Dentista Royale Dental Works">
                <h1>Dentista Royale D.W </h1>
            </div>
            <nav>
                <ul>
                    <li><a href="{{url('/home')}}">Home</a></li>
                    <li><a href="" id="appointment-btn">Appointment</a></li>
                    <li><a href="#bot">About Us</a></li>
                </ul>
            </nav>
        </div>
    </header>

    <div id="appointment-popup" class="popup">
        <div class="popup-content">
            <span class="close-btn">&times;</span>
            <h2>Book an Appointment</h2>
            <form>
                <label for="name">Full Name *:</label>
                <input type="text" id="name" name="name" required><br>

                <label for="email">Phone Number *:</label>
                <input type="tel" id="phone" name="phone" pattern="[0-9]{10}" maxlength="10" required><br>

                <label for="date">Preferred Date:</label>
                <input type="date" id="date" name="date" required min=""><br>

                <label for="time">Preferred Time:</label>
                <input type="time" id="time" name="time" required><br>

                <div class="info">
                    <p>Closed (Friday)</p>
                </div>

                <button type="submit">Submit</button>
            </form>
        </div>
    </div>

    <section class="hero">
        <div class="overlay">
                <h1>Prevent. Save. Restore.</h1>
                <a href="#" id="book-now" class="button">Book now</a>
        </div>
    </section>

    <section class="services">
        <h2>Our services</h2>
        <div class="service-cards">
            <div class="service-card">
                <h3>Oral Examination</h3>
                <p>Consultation, Medical Certificate, Oral Prophylasis(Cleaning)</p>
            </div>
            <div class="service-card">
                <h3>Restorative Dentistry</h3>
                <p>Sealant, Temporary Filling, Light Cured Tooth Restoration</p>
            </div>
            <div class="service-card">
                <h3>Endodontic Treatment</h3>
                <p>Per Root Canal, Necessary Periapical Xrays</p>
            </div>
        <div class="service-cards more-content">
            <div class="service-card">
                <h3>Cosmetic Dentristry</h3>
                <p>Teeth Bleaching, Direct Composite Veneer, Zirconia Veneers, Plastic Crown etc.</p>
            </div>
            <div class="service-card">
                <h3>Oral Surgery</h3>
                <p>Simple Tooth Extraction, Regular Wisdom removal, Extraction with Crown etc.</p>
            </div>
            <div class="service-card">
                <h3>Others</h3>
                <p>Prosthodontics, Repair Dentures, Orthodontic Treatment etc.</p>
            </div>
        </div>
        </div>
        <button class="btn" id="viewmorebtn">View more</a>
    </section>

    <footer>
            <h1>About Us</h1>
        <div class="footer-content" id="bot">
                
            <div class="footer-section">
                <h3>Address</h3>
                <iframe 
                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3858.063827781006!2d120.99064597510947!3d14.76543408574074!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3397b1f9f38671f1%3A0xcd451d6b083fe9d8!2sEMA%20Town%20Center!5e0!3m2!1sen!2sph!4v1726650067987!5m2!1sen!2sph" 
                width="300" 
                height="200" 
                style="border:0;" 
                allowfullscreen="" 
                loading="lazy" 
                referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
            <div class="footer-section">
                <h3>Working hours</h3>
                <p>Monday - Thursday: 9 AM - 5 PM<br>
                 Saturday - Sunday: 8 AM - 5 PM<br>
                Friday: Closed</p>
            </div>
            <div class="footer-section">
                <h3>Contacts</h3>
                <p>
                <img src="assets/images/Icons/icons8-phone-20.png" alt="phone-log">0917 839 1624<br>
                <img src="assets/images/Icons/icons8-facebook-20.png" alt="Facebook-logo"><a href="https://web.facebook.com/DentistaRoyaleDW">Dentista Royale D.W </a></p>
            </div>
        </div>
        <div class="footer-bottom">
            <p>&copy; Website made for Dentista Royale D.W. 2024</p>
        </div>
    </footer> 

    <script>
        document.getElementById("viewmorebtn").addEventListener("click", function() {
        var moreContent = document.querySelector(".more-content");
        var btn = document.getElementById("viewmorebtn");

        if (moreContent.style.display === "none" || moreContent.style.display === "") {
            moreContent.style.display = "flex";
            btn.textContent = "View Less";
        } else {
            moreContent.style.display = "none";
            btn.textContent = "View More";
        }});
        </script>
    <script>
        // Get elements
            // Get elements
            const appointmentBtn = document.getElementById('appointment-btn');
            const bookNowBtn = document.getElementById('book-now');
            const popup = document.getElementById('appointment-popup');
            const closeBtn = document.querySelector('.close-btn');

            function openPopup(event) {
                event.preventDefault();
                popup.style.display = 'flex';
            }

            appointmentBtn.addEventListener('click', openPopup);
            bookNowBtn.addEventListener('click', openPopup);

            closeBtn.addEventListener('click', () => {
                popup.style.display = 'none';
            });

            window.addEventListener('click', (e) => {
                if (e.target == popup) {
                    popup.style.display = 'none';
                }
            });

        </script>

        <script>

            const dateInput = document.getElementById('date');
            const today = new Date().toISOString().split('T')[0];  // Get today's date in YYYY-MM-DD format
            dateInput.setAttribute('min', today);
        </script>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script>
        $(document).ready(function() {
            $('#appointmentForm').on('submit', function(e) {
                e.preventDefault(); // Prevent the default form submission

                // Capture form data
                let formData = $(this).serialize();

                // Send AJAX request
                $.ajax({
                    type: 'POST',
                    url: '/appointment/store', // Replace with your actual endpoint URL
                    data: formData,
                    success: function(response) {
                        // Show success toast notification
                        $('#liveToast').text(response.message).fadeIn().delay(3000).fadeOut();
                        // Optionally, you can reset the form
                        $('#appointmentForm')[0].reset();
                    },
                    error: function(xhr, status, error) {
                        // Handle error
                        $('#liveToast').text('Error submitting the appointment.').fadeIn().delay(3000).fadeOut();
                    }
                });
            });
        });
    </script>

    <script src="{{ asset('frameworks/bootstrap-5.3.3/dist/js/bootstrap.bundle.min.js') }}"></script>
</body>
</html>