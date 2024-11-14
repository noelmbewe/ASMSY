<!doctype html>
<html class="no-js" lang="">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>ASMSY</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Favicon -->
    <link rel="shortcut icon" type="image/x-icon" href="img/favicon.png ') }}">
    <!-- Normalize CSS -->
    <link rel="stylesheet" href="{{ asset('asmsy_assets/css/normalize.css ') }}">
    <!-- Main CSS -->
    <link rel="stylesheet" href="{{ asset('asmsy_assets/css/main.css ') }}">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="{{ asset('asmsy_assets/css/bootstrap.min.css ') }}">
    <!-- Fontawesome CSS -->
    <link rel="stylesheet" href="{{ asset('asmsy_assets/css/all.min.css ') }}">
    <!-- Flaticon CSS -->
    <link rel="stylesheet" href="{{ asset('asmsy_assets/fonts/flaticon.css ') }}">
    <!-- Animate CSS -->
    <link rel="stylesheet" href="{{ asset('asmsy_assets/css/animate.min.css ') }}">
    <!-- Custom CSS -->
    <link rel="stylesheet" href="{{ asset('asmsy_assets/style.css ') }}">
    <!-- Modernize js -->
    <script src="{{ asset('asmsy_assets/js/modernizr-3.6.0.min.js ') }}"></script>
</head>

<body>
    <!-- Preloader Start Here -->
    <div id="preloader"></div>
    <!-- Preloader End Here -->
    <!-- Login Page Start Here -->
    <div class="login-page-wrap">
        <div class="login-page-content">
            <div class="login-box">
                <div class="item-logo">
                    <img src="{{ asset('asmsy_assets/img/1.png ') }}" alt="logo">
                </div>
                <form action="{{ route('login.action') }}" method="POST"  class="login-form">
                @csrf
                    @if ($errors->any())
                      <div class="alert alert-danger">
                          <ul>
                            @foreach ($errors->all() as $error)
                              <li>{{ $error }}</li>
                            @endforeach
                          </ul>
                      </div>
                    @endif

                    <div class="form-group">
                        <label>Email</label>
                        <input  name="email" type="email" placeholder="Enter Email" class="form-control">
                        <i class="far fa-envelope"></i>
                    </div>
                    <div class="form-group">
                        <label>Password</label>
                        <input  name="password" type="password" placeholder="Enter Password" class="form-control">
                        <i class="fas fa-lock"></i>
                    </div>
                    <div class="form-group d-flex align-items-center justify-content-between">
                        <div class="form-check">
                            <input    name="remember" type="checkbox" class="form-check-input" id="remember-me">
                            <label for="remember-me" class="form-check-label">Remember Me</label>
                        </div>
                        <a href="#" class="forgot-btn">Forgot Password?</a>
                    </div>
                    <div class="form-group">
                        <button type="submit" class="login-btn">Login</button>
                    </div>
                </form>
               
            </div>
            <div class="sign-up">Don't have an account ? <a href="#">Signup now!</a></div>
        </div>
    </div>
    <!-- Login Page End Here -->
    <!-- jquery-->
    <script src="{{ asset('asmsy_assets/js/jquery-3.3.1.min.js ') }}"></script>
    <!-- Plugins js -->
    <script src="{{ asset('asmsy_assets/js/plugins.js ') }}"></script>
    <!-- Popper js -->
    <script src="{{ asset('asmsy_assets/js/popper.min.js ') }}"></script>
    <!-- Bootstrap js -->
    <script src="{{ asset('asmsy_assets/js/bootstrap.min.js ') }}"></script>
    <!-- Scroll Up Js -->
    <script src="{{ asset('asmsy_assets/js/jquery.scrollUp.min.js ') }}"></script>
    <!-- Custom Js -->
    <script src="{{ asset('asmsy_assets/js/main.js ') }}"></script>

</body>

</html>