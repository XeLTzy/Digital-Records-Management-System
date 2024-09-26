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
    <div id="dtop" class="mb-1">

        <div class="dropdown position-fixed bottom-0 end-0 mb-3 me-3 bd-mode-toggle">
            <button class="btn btn-bd-primary py-2 dropdown-toggle d-flex align-items-center" id="bd-theme"
                type="button" aria-expanded="false" data-bs-toggle="dropdown" aria-label="Toggle theme (dark)">
                <svg class="bi my-1 theme-icon-active" width="1em" height="1em">
                    <use href="#moon-stars-fill"></use>
                </svg>
                <span class="visually-hidden" id="bd-theme-text">Toggle theme</span>
            </button>
            <ul class="dropdown-menu dropdown-menu-end shadow" aria-labelledby="bd-theme-text">
                <li>
                    <button type="button" class="dropdown-item d-flex align-items-center" data-bs-theme-value="light"
                        aria-pressed="false">
                        <svg class="bi me-2 opacity-50" width="1em" height="1em">
                            <use href="#sun-fill"></use>
                        </svg>
                        Light
                        <svg class="bi ms-auto d-none" width="1em" height="1em">
                            <use href="#check2"></use>
                        </svg>
                    </button>
                </li>
                <li>
                    <button type="button" class="dropdown-item d-flex align-items-center active"
                        data-bs-theme-value="dark" aria-pressed="true">
                        <svg class="bi me-2 opacity-50" width="1em" height="1em">
                            <use href="#moon-stars-fill"></use>
                        </svg>
                        Dark
                        <svg class="bi ms-auto d-none" width="1em" height="1em">
                            <use href="#check2"></use>
                        </svg>
                    </button>
                </li>
                <li>
                    <button type="button" class="dropdown-item d-flex align-items-center" data-bs-theme-value="auto"
                        aria-pressed="false">
                        <svg class="bi me-2 opacity-50" width="1em" height="1em">
                            <use href="#circle-half"></use>
                        </svg>
                        Auto
                        <svg class="bi ms-auto d-none" width="1em" height="1em">
                            <use href="#check2"></use>
                        </svg>
                    </button>
                </li>
            </ul>
        </div>

        <header>
            <nav class="navbar navbar-expand-lg navbar-dark" aria-label="Offcanvas navbar large"
                style="background-color: #3a3a88;">
                <div class="container-fluid p-2">
                    <div class="navbar-brand ms-2" href="#"> <img src="assets/images/Icons/logo-v5.png" alt="" srcset=""
                            style="height: 32px;"> Dentista Royale Dental worls</div>
                    <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas"
                        data-bs-target="#offcanvasNavbar2" aria-controls="offcanvasNavbar2"
                        aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="offcanvas offcanvas-end text-bg-dark" tabindex="-1" id="offcanvasNavbar2"
                        aria-labelledby="offcanvasNavbar2Label">
                        <div class="offcanvas-header">
                            <h5 class="offcanvas-title" id="offcanvasNavbar2Label">Offcanvas</h5>
                            <button type="button" class="btn-close btn-close-white" data-bs-dismiss="offcanvas"
                                aria-label="Close"></button>
                        </div>
                        <div class="offcanvas-body">
                            <ul class="navbar-nav justify-content-end flex-grow-1 pe-3">
                                <li class="nav-item">
                                    <a class="nav-link" aria-current="page" href="#">Home</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="#">Services</a>
                                </li>
                                <li class="nav-item"></li>
                                <a class="nav-link active" href="#">Appointment</a>
                                </li>

                            </ul>
                        </div>
                    </div>
                </div>
            </nav>


            <!-- <div class="container py-2">
                <div class="d-flex flex-column align-items-center p-3">
                    <form action="{{ route('appointment.store') }}" method="POST" class="container" id="appointmentsubmit">
                        @csrf
                        <div class="col-5 mx-auto mb-2">
                            <label for="firstname" class="form-label">First Name *</label>
                            <input type="text" class="form-control " id="firstname" name="firstname">
                        </div>
                        <div class="col-5 mx-auto mb-2">
                            <label for="lastname" class="form-label">Last Name *</label>
                            <input type="text" class="form-control" id="lastname" name="lastname">
                        </div>
                        <div class="col-5 mx-auto mb-2">
                            <label for="number" class="form-label">Contact Number *</label>
                            <input type="tel" class="form-control" id="contactnumber" name="number">
                        </div>
                        <div class="col-5 mx-auto mb-2">
                            <label for="email" class="form-label">Email</label>
                            <input type="email" class="form-control" id="email" name="email">
                        </div>
                        <div class="col-5 mx-auto mb-2">
                            <label for="date" class="form-label">Date *</label>
                            <input type="date" class="form-control" id="date" name="date">
                        </div>
                        <div class="col-5 mx-auto mb-3">
                            <label for="time" class="form-label">Time *</label>
                            <select class="form-control" id="time" name="time">
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
                        <div class="col-5 mx-auto text-center">
                            <button type="submit" class="btn btn-secondary">Submit</button>
                        </div>
                    </form>

                </div>

            </div> -->


            <!-- New Modified form -->
            <div class="container d-flex py-4">
                <div class="container">
                    <form action="{{ route('appointment.store') }}" method="POST" class="container" id="appointmentForm">
                        @csrf
                        <div class="row text-center alert alert alert-dismissible alert-primary justify-content-center position-absolute top-1 start-50 translate-middle-x" id="liveToast">
                            <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
                            <strong>Appoinment!</strong>
                            <p> successfully</p>
                        </div>
                        <div class="row justify-content-center">
                            <div class="col-xl-4 mb-2">
                                <label for="firstname" class="form-label">First Name *</label>
                                <input type="text" class="form-control" id="firstname" name="firstname">
                            </div>
                        </div>
                        <div class="row justify-content-center mb-2">
                            <div class="col-xl-4">
                                <label for="lastname" class="form-label">Last Name *</label>
                                <input type="text" class="form-control" id="lastname" name="lastname">
                            </div>
                        </div>
                        <div class="row justify-content-center mb-2">
                            <div class="col-xl-4">
                                <label for="number" class="form-label">Contact Number *</label>
                                <input type="tel" class="form-control" id="contactnumber" name="number">
                            </div>
                        </div>
                        <div class="row justify-content-center mb-2">
                            <div class="col-xl-4">
                                <label for="email" class="form-label">Email</label>
                                <input type="email" class="form-control" id="email" name="email">
                            </div>
                        </div>
                        <div class="row justify-content-center mb-2">
                            <div class="col-xl-4">
                                <label for="date" class="form-label">Date *</label>
                                <input type="date" class="form-control" id="date" name="date">
                            </div>
                        </div>
                        <div class="row justify-content-center mb-3">
                            <div class="col-xl-4">
                                <label for="time" class="form-label">Time *</label>
                                <select class="form-control" id="time" name="time">
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
                        </div>
                        <div class="row justify-content-center mb-2">
                            <div class="col-xl-4 text-center">
                                <button type="submit" id="liveToastBtn" class="btn btn-secondary">Submit</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>

            <div class="container-fluid d-flex py-4" id="Bookconfirm">
                <div class="container text-center">
                    <div class="row py-3">
                        <div class="col g-3 align-items-center">
                            <img src="{{ asset('Icons\logo-v5.png')}}" alt="Icons" style="height: 100px;">
                            <h1>Book successfully</h1>
                            <h3 id="confirmationCode"> {{ session('confirmation_code') }} </h3>
                            <h6>Please keep and present this code upon clinic arrive this serve as your proof</h5>
                        </div>
                    </div>
                </div>
            </div>

        </header>
    </div>

    <footer style="background-color: #3a3a88;">

        <div class="container text-light">
            <footer class="py-5">
                <div class="row">
                    <div class="col-6 col-md-2 mb-3">
                        <h5>Address</h5>
                        <ul class="nav flex-column">
                            <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-body-secondary">Home</a></li>
                            <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-body-secondary">Features</a>
                            </li>
                            <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-body-secondary">Pricing</a>
                            </li>
                            <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-body-secondary">FAQs</a></li>
                            <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-body-secondary">About</a>
                            </li>
                        </ul>
                    </div>

                    <div class="col-5 col-md-2 mb-3">
                        <h5>Working Hours</h5>
                        <!-- <ul class="nav flex-column">
                            <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-body-secondary">Home</a></li>
                            <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-body-secondary">Features</a>
                            </li>
                            <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-body-secondary">Pricing</a>
                            </li>
                            <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-body-secondary">FAQs</a></li>
                            <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-body-secondary">About</a>
                            </li>
                        </ul> -->
                        <div class="ms-2">
                            <p> Monday - Thursday : 9 AM - 5 PM</p>
                            <p> Friday: Closed</p>
                            <p>

                                Saturday - Sunday. 9 AM - 5 PM
                            </p>
                        </div>
                    </div>

                    <div class="col-6 col-md-2 mb-3">
                        <h5>Section</h5>
                        <ul class="nav flex-column">
                            <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-body-secondary">Home</a></li>
                            <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-body-secondary">Features</a>
                            </li>
                            <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-body-secondary">Pricing</a>
                            </li>
                            <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-body-secondary">FAQs</a></li>
                            <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-body-secondary">About</a>
                            </li>
                        </ul>
                    </div>

                    <div class="col-md-5 offset-md-1 mb-3">
                        <form>
                            <h5>Subscribe to our newsletter</h5>
                            <p>Monthly digest of what's new and exciting from us.</p>
                            <div class="d-flex flex-column flex-sm-row w-100 gap-2">
                                <label for="newsletter1" class="visually-hidden">Email address</label>
                                <input id="newsletter1" type="text" class="form-control" placeholder="Email address"
                                    style="background-size: auto, 25px; background-image: none">
                                <button class="btn btn-primary" type="button">Subscribe</button>
                                <button type="button"
                                    style="border: 0px; clip: rect(0px, 0px, 0px, 0px); clip-path: inset(50%); height: 1px; margin: 0px -1px -1px 0px; overflow: hidden; padding: 0px; position: absolute; width: 1px; white-space: nowrap;">Generate
                                    new mask</button>
                            </div>
                        </form>
                    </div>
                </div>

                <div class="d-flex flex-column flex-sm-row justify-content-between py-4 my-4 border-top">
                    <p>© 2024 Company, Inc. All rights reserved.</p>
                    <ul class="list-unstyled d-flex">
                        <li class="ms-3"><a class="link-body-emphasis" href="#"><svg class="bi" width="24" height="24">
                                    <use xlink:href="#twitter"></use>
                                </svg></a></li>
                        <li class="ms-3"><a class="link-body-emphasis" href="#"><svg class="bi" width="24" height="24">
                                    <use xlink:href="#instagram"></use>
                                </svg></a></li>
                        <li class="ms-3"><a class="link-body-emphasis" href="#"><svg class="bi" width="24" height="24">
                                    <use xlink:href="#facebook"></use>
                                </svg></a></li>
                    </ul>
                </div>
            </footer>
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