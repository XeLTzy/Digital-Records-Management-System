<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Appointment</title>
    <link rel="stylesheet" href="{{ asset('frameworks/bootstrap-5.3.3/dist/css/bootstrap.min.css') }}">

    <style>
        html,
        body {
            height: 100%;
        }
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #ffffff;
            line-height: 1.6;
        }

        header{
            background: #3a3a88;
            color: #fff;
            padding: 15px 0;
        }

        .applogo {
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
        }

        .logo h1{
            font-size: 25px;
            display: flex;
            align-items: center;
        }

        header h1{
            color: white;
            font-size: 1.5rem;
        }

        nav ul {
            list-style: none;
            display: flex;
        }

        nav ul li {
            margin-left: 20px;
        }

        nav ul li a {
            color: white;
            text-decoration: none;
            font-size: 18px;
        }

        nav ul li a:hover {
            color: #00bfff;
        }

        .container .logos{
            width: 100%;
            display: flex;
            justify-content: center;
            align-items: center;
            padding: 20px 0;
        }

        .logos img {
            max-width: 500px; /* Adjust based on your logo size */
            height: auto;
        }

        .appointment-form {
            background-color: rgb(194, 187, 187);
            max-width: 600px;
            margin: 40px auto;
            padding: 50px 50px;
            border-radius: 30px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            align-items: center;
        }

        .appointment-form h1 {
            text-align: center;
            margin-bottom: 20px;
        }

        .appointment-form label {
            display: block;
            margin-bottom: 10px;
            align-items: center;
        }

        .appointment-form input {
            width: 100%;
            padding: 10px;
            margin-bottom: 20px;
            border: 1px solid #ccc;
            border-radius: 5px;
            align-items: center;
        }

        .time-picker {
            display: inline-flex;
            align-items: center;
        }

        select {
            border: 1px solid #d1d5db;
            background-color: #f9fafb;
            padding: 5px;
            margin-right: 2px;
            font-size: 16px;
            border-radius: 5px;
            outline: none;
            appearance: none;
            text-align: center;
        }

        select:focus {
            border-color: #2563eb;
        }

        #hours, #minutes {
            width: 100px;
        }

        #ampm {
            width: 60px;
        }


        .appointment-form button {
            width: 100%;
            padding: 10px;
            background-color: #00aaff;
            border: none;
            color: white;
            font-size: 16px;
            border-radius: 5px;
            cursor: pointer;
        }

        .appointment-form button:hover {
            background-color: #0088cc;
        }

        footer {
            background: #3a3a88;
            color: #fff;
            padding: 20px 0;
            text-align: center;
        }

        footer .footer-content {
            display: flex;
            justify-content: space-between;
            padding: 20px;
        }

        footer .foot {
            width: 30%;
        }

        footer .foot a{
            color: white;
            font-size: 18px;
            margin-bottom: 10px;
        }

        .footer-bottom {
            text-align: center;
            margin-top: 20px;
        }

        .footer-bottom p {
            font-size: 14px;
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
    </style>
</head>

<body>

    <!-- Dark, light and auto  mode -->
    <header>
        <div class="applogo">
            <div class="logo">
                <img src="assets/images/Icons/dental-logo.png" alt="Dentista Royale Logo">
                <h1>Dentista Royale D.W</h1>
            </div>
            <nav>
                <ul>
                    <li><a href="{{url('/home')}}">Home</a></li>
                    <li><a href="{{url('/appointment')}}">Appointment</a></li>
                    <li><a href="#bot">About Us</a></li>
                </ul>
            </nav>
        </div>
    </header>

    <main>
        <div class="container">
            <div class="logos">
                <img src="assets/images/Icons/dental-logo-v2.jpg" alt="Dentista Royale Dental Works Logo">
            </div>
            <form class="appointment-form">
                <div class="input-group">
                    <label for="firstname">First Name *</label>
                    <input type="text" id="firstname" name="firstname" required>
                </div>
                <div class="input-group">
                    <label for="lastname">Last Name *</label>
                    <input type="text" id="lastname" name="lastname" required>
                </div>
                <div class="input-group">
                    <label for="contactnumber">Contact Number *</label>
                    <input type="tel" id="contactnumber" name="contactnumber" required>
                </div>
                <div class="input-group">
                    <label for="email">Email</label>
                    <input type="email" id="email" name="email">
                </div>
                <div class="input-group">
                    <label for="date">Date *</label>
                    <input type="date" id="date" name="date" required>
                </div>
                <div class="time-picker">
                    <select id="hours" name="hours" required>
                    <option value="09:00">9:00 AM</option>
                                    <option value="09:30">9:30 AM</option>
                                    <option value="10:00">10:00 AM</option>
                                    <option value="10:30">10:30 AM</option>
                                    <option value="11:00">11:00 AM</option>
                                    <option value="11:30">11:30 AM</option>
                                    <option value="12:00">12:00 PM</option>
                                    <option value="12:30">12:30 PM</option>
                                    <option value="13:00">1:00 PM</option>
                                    <option value="13:30">1:30 PM</option>
                                    <option value="14:00">2:00 PM</option>
                                    <option value="14:30">2:30 PM</option>
                                    <option value="15:00">3:00 PM</option>
                                    <option value="15:30">3:30 PM</option>
                                    <option value="16:00">4:00 PM</option>
                                    <option value="16:30">4:30 PM</option>
                    </select>
                </div>
                <div class="info">
                    <p>Closed (Friday)</p>
                </div>
                <button type="submit">Submit</button>
            </form>
        </div>
    
    </main>

    <footer>
            <h1>About Us</h1>

        <div class="footer-content" id="bot">
            <div class="foot">
                <h3>Address</h3>
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3858.063827781006!2d120.99064597510947!3d14.76543408574074!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3397b1f9f38671f1%3A0xcd451d6b083fe9d8!2sEMA%20Town%20Center!5e0!3m2!1sen!2sph!4v1726650067987!5m2!1sen!2sph" width="300"height="200"style="border:0;"allowfullscreen=""loading="lazy"referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
            <div class="foot">
                <h3>Working hours</h3>
                <p>Monday - Thursday: 8 AM - 5 PM<br>
                Saturday - Sunday: 9 AM - 5 PM<br>
                Closed: Friday</p>
            </div>
            <div class="foot">
                <h3>Contact Us</h3>
                <p>
                    <img src="assets/images/Icons/icons8-phone-20.png" alt="phone-log">0917 839 1624<br>
                    <img src="assets/images/Icons/icons8-facebook-20.png" alt="Facebook-logo"><a href="https://web.facebook.com/DentistaRoyaleDW">Dentista Royale D.W </a></p>
            </div>
            <div class="foot">
                <h3>Links</h3>
                    <a href="{{url('/home')}}">Home</a><br>
                    <a href="{{url('/appointment')}}">Booking</a>
            </div>
        </div>
        <div class="footer-bottom">
            <p>&copy; 2024 by Dentista Royale Dental Works. Website</p>
        </div>
    </footer>

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


    <!-- <script src="{{ asset('frameworks/bootstrap-5.3.3/dist/js/bootstrap.bundle.min.js') }}"></script> -->
</body>

</html>