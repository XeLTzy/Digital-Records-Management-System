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
