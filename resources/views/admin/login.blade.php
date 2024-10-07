<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dental Royale Dental Works Login</title>

    <link rel="stylesheet" href="{{ asset('assets\css\LoginStyle.css')}}">

    <link href='https://unpkg.com/boxicons@2.1.2/css/boxicons.min.css' rel='stylesheet'>

</head>

<body>
    <section class="container forms">
        <div class="form login">
            <div class="form-content">
                @if(Session::has('error'))
                <div class="alert alert-danger" role="alert">
                    {{ Session::get('error') }}
                </div>
                @endif
                <img src="Icons/logo-v5.png" alt="Dental Icons" id="DentalIcons">
                <header>Welcome Back</header>
                <form action="{{ route('login') }}" method="POST">
                    @csrf
                    <div class="field input-field">
                        <input required="" type="text" id="emailphoneLogin" class="input" name="email">
                        <span>Email or Phone number</span>
                        <div class="errorLogin" id="emailErrorLogin"></div>
                    </div>
                    <div class="field input-field">
                        <input required="" type="password" class="password" name="password">
                        <span>Password</span>
                        <i class='bx bx-hide eye-icon1'></i>
                    </div>
                    <div class="form-link">
                        <a href="#" class="link link-forgot">Forgot password?</a>
                    </div>
                    <div class="field button-field">
                        <button type="submit">Login</button>
                    </div>
                </form>
                <div class="form-link">
                    <span>Don't have an account? <a href="#" class="link signup-link">Signup</a></span>
                </div>
            </div>
        </div>

        <div class="form signup">
            <div class="form-content">
                <!-- Display success message -->
                @if(Session::has('success'))
                    <div class="alert alert-success" role="alert">
                        {{ Session::get('success') }}
                    </div>
                @endif
                <img src="Icons/logo-v5.png" alt="Dental Icons" id="DentalIcons">
                <header>Signup</header>
                <form action="{{ route('register') }}" method="POST">
                    @csrf
                    <div class="fieldsignup input-field">
                        <input required type="text" class="input" name="name">
                        <span for="name">Username</span>
                    </div>
                    <div class="fieldsignup input-field">
                        <input required type="text" class="input" id="emailphoneSignup" name="email">
                        <span for="email">Email</span>
                        <div class="error" id="emailErrorSignup"></div>
                    </div>
                    <div class="fieldsignup input-field">
                        <input required type="password" class="password" id="passwordSignup1" name="password">
                        <span>Password (Must be 8 character)</span>
                        <i class='bx bx-hide eye-icon1'></i>
                        <div class="error" id="passwordErrorSignup1"></div>
                    </div>
                    <div class="fieldsignup input-field">
                        <input required type="password" class="password2" id="passwordSignup2" name="password">
                        <span>Confirm Password</span>
                        <div class="error" id="confirmPasswordErrorSignup2"></div>
                        <i class='bx bx-hide eye-icon2'></i>
                    </div>
                    <div class="fieldsignup button-field">
                        <button type="submit" id="signupbtn">Signup</button>
                    </div>
                </form>
                <div class="form-link">
                    <span>Already have an account? <a href="#" class="link login-link">Login</a></span>
                </div>
            </div>
        </div>


        <div class="form forgot-password">
            <div class="form-content">
                <img src="Icons/logo-v5.png" alt="Dental Icons" id="DentalIcons">
                <header>Reset Password</header>
                <form action="forgot-password">
                    <div class="field input-field">
                        <input required="" type="text" class="input">
                        <span>Email or Phone Number</span>
                    </div>
                    <div class="field button-field">
                        <button>Reset Password</button>
                    </div>
                </form>
                <div class="form-link">
                    <span>Remembered your password? <a href="#" class="link login-link">Login</a></span>
                </div>
            </div>
        </div>
    </section>

    <script src="{{asset('assets\js\LoginFunction.js')}}"></script>
    <script src=" {{asset('assets\js\SignupEmailPhoneValidation.js') }}"></script>
    <script src="{{asset('assets\js\LoginEmailPhoneValidation.js')}}"></script>
</body>

</html>
<!-- <!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Login Page</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
</head>

<body>
    <div class="row justify-content-center mt-5">
        <div class="col-lg-4">
            <div class="card">
                <div class="card-header">
                    <h1 class="card-title">Login</h1>
                </div>
                <div class="card-body">
                    @if(Session::has('error'))
                    <div class="alert alert-danger" role="alert">
                        {{ Session::get('error') }}
                    </div>
                    @endif
                    <form action="{{ route('login') }}" method="POST">
                        @csrf
                        <div class="mb-3">
                            <label for="email" class="form-label">Email address</label>
                            <input type="email" name="email" class="form-control" id="email" placeholder="name@example.com" required>
                        </div>
                        <div class="mb-3">
                            <label for="password" class="form-label">Password</label>
                            <input type="password" name="password" class="form-control" id="password" required>
                        </div>
                        <div class="mb-3">
                            <div class="d-grid">
                                <button class="btn btn-primary">Login</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
</body>

</html> -->

<!-- New -->

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dental Royale Dental Works Login</title>

    <link rel="stylesheet" href="{{ asset('assets\css\LoginStyle.css')}}">

    <link href='https://unpkg.com/boxicons@2.1.2/css/boxicons.min.css' rel='stylesheet'>

</head>

<body>
    <section class="container forms">
        <div class="form login">
            <div class="form-content">
                @if(Session::has('error'))
                <div class="alert alert-danger" role="alert">
                    {{ Session::get('error') }}
                </div>
                @endif
                <img src="Icons/logo-v5.png" alt="Dental Icons" id="DentalIcons">
                <header>Welcome Back</header>
                <form action="{{ route('login') }}" method="POST">
                    @csrf
                    <div class="field input-field">
                        <input required="" type="text" id="emailphoneLogin" class="input" name="email">
                        <span>Email or Phone number</span>
                        <div class="errorLogin" id="emailErrorLogin"></div>
                    </div>
                    <div class="field input-field">
                        <input required="" type="password" class="password" name="password">
                        <span>Password</span>
                        <i class='bx bx-hide eye-icon1'></i>
                    </div>
                    <div class="form-link">
                        <a href="#" class="link link-forgot">Forgot password?</a>
                    </div>
                    <div class="field button-field">
                        <button type="submit">Login</button>
                    </div>
                </form>
                <div class="form-link">
                    <span>Don't have an account? <a href="#" class="link signup-link">Signup</a></span>
                </div>
            </div>
        </div>

        <div class="form signup">
            <div class="form-content">
                <img src="Icons/logo-v5.png" alt="Dental Icons" id="DentalIcons">
                <header>Signup</header>
                <form onsubmit="return validateSignupForm()" action="Verification/Validation/indexValidation.html">
                    <div class="fieldsignup input-field">
                        <input required type="text" class="input">
                        <span>Username</span>
                    </div>
                    <div class="fieldsignup input-field">
                        <input required type="text" class="input" id="emailphoneSignup">
                        <span>Email or Phone number</span>
                        <div class="error" id="emailErrorSignup"></div>
                    </div>
                    <div class="fieldsignup input-field">
                        <input required type="password" class="password" id="passwordSignup1">
                        <span>Password (Must be 8 character)</span>
                        <i class='bx bx-hide eye-icon1'></i>
                        <div class="error" id="passwordErrorSignup1"></div>
                    </div>
                    <div class="fieldsignup input-field">
                        <input required type="password" class="password2" id="passwordSignup2">
                        <span>Confirm Password</span>
                        <div class="error" id="confirmPasswordErrorSignup2"></div>
                        <i class='bx bx-hide eye-icon2'></i>
                    </div>
                    <div class="fieldsignup button-field">
                        <button type="submit" id="signupbtn">Signup</button>
                    </div>
                </form>
                <div class="form-link">
                    <span>Already have an account? <a href="#" class="link login-link">Login</a></span>
                </div>
            </div>
        </div>


        <div class="form forgot-password">
            <div class="form-content">
                <img src="Icons/logo-v5.png" alt="Dental Icons" id="DentalIcons">
                <header>Reset Password</header>
                <form action="forgot-password">
                    <div class="field input-field">
                        <input required="" type="text" class="input">
                        <span>Email or Phone Number</span>
                    </div>
                    <div class="field button-field">
                        <button>Reset Password</button>
                    </div>
                </form>
                <div class="form-link">
                    <span>Remembered your password? <a href="#" class="link login-link">Login</a></span>
                </div>
            </div>
        </div>
    </section>

    <script src="{{asset('assets\js\LoginFunction.js')}}"></script>
    <script src=" {{asset('assets\js\SignupEmailPhoneValidation.js') }}"></script>
    <script src="{{asset('assets\js\LoginEmailPhoneValidation.js')}}"></script>
</body>

</html>