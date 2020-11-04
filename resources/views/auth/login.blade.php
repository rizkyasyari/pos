    <!doctype html>
<html>

<!-- Mirrored from www.lab.westilian.com/matmix-admin/list-view/login.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 04 Nov 2020 07:46:01 GMT -->
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="A Components Mix Bootstarp 3 Admin Dashboard Template">
    <meta name="author" content="Westilian">
    <title>MatMix - A Components Mix Admin Dashboard Template</title>
    <link rel="stylesheet" href="css/font-awesome.css" type="text/css">
    <link rel="stylesheet" href="css/bootstrap.css" type="text/css">
    <link rel="stylesheet" href="css/animate.css" type="text/css">
    <link rel="stylesheet" href="css/waves.html" type="text/css">
    <link rel="stylesheet" href="css/layout.css" type="text/css">
    <link rel="stylesheet" href="css/components.css" type="text/css">
    <link rel="stylesheet" href="css/plugins.css" type="text/css">
    <link rel="stylesheet" href="css/common-styles.css" type="text/css">
    <link rel="stylesheet" href="css/pages.css" type="text/css">
    <link rel="stylesheet" href="css/responsive.css" type="text/css">
    <link rel="stylesheet" href="css/matmix-iconfont.css" type="text/css">
    <link href="http://fonts.googleapis.com/css?family=Roboto:400,300,400italic,500,500italic" rel="stylesheet" type="text/css">
    <link href="http://fonts.googleapis.com/css?family=Open+Sans:400italic,600italic,400,600" rel="stylesheet" type="text/css">
</head>
    <body class="login-page">
    <div class="page-container">
        <div class="login-branding">
            <a href="index.html"><img src="images/logo-large.png" alt="logo"></a>
        </div>
        <div class="login-container">
            <img class="login-img-card" src="images/avatar/jaman-01.jpg" alt="login thumb" />
            <div class="card-body">
                <form method="POST" action="{{ route('login') }}">
                    @csrf

                    <div class="form-group row">
                        <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail') }}</label>

                        <div class="col-md-6">
                            <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                            @error('email')
                            <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                            @enderror
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>

                        <div class="col-md-6">
                            <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                            @error('password')
                            <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                            @enderror
                        </div>
                    </div>

                    <div class="form-group row">
                        <div class="col-md-6 offset-md-4">
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                <label class="form-check-label" for="remember">
                                    {{ __('Remember Me') }}
                                </label>
                            </div>
                        </div>
                    </div>

                    <div class="form-group row mb-0">
                        <div class="col-md-8 offset-md-4">
                            <button type="submit" class="btn btn-primary">
                                {{ __('Login') }}
                            </button>

                            @if (Route::has('password.request'))
                                <a class="btn btn-link" href="{{ route('password.request') }}">
                                    {{ __('Forgot Your Password?') }}
                                </a>
                            @endif
                        </div>
                    </div>
                </form>
            </div>
        </div>


        </div>
        <div class="create-account">
            <a href="#">
                Create Account
            </a>
        </div>

        <div class="login-footer">
            Crafted with<i class="fa fa-heart"></i>by <a href="#">westilian</a>

        </div>

    <script src="js/jquery-1.11.2.min.js"></script>
    <script src="js/jquery-migrate-1.2.1.min.js"></script>
    <script src="js/jRespond.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/nav-accordion.js"></script>
    <script src="js/hoverintent.js"></script>
    <script src="js/waves.js"></script>
    <script src="js/switchery.js"></script>
    <script src="js/jquery.loadmask.js"></script>
    <script src="js/icheck.js"></script>
    <script src="js/bootbox.js"></script>
    <script src="js/animation.js"></script>
    <script src="js/colorpicker.js"></script>
    <script src="js/bootstrap-datepicker.js"></script>
    <script src="js/floatlabels.html"></script>

    <script src="js/smart-resize.js"></script>
    <script src="js/layout.init.js"></script>
    <script src="js/matmix.init.js"></script>
    <script src="js/retina.min.js"></script>
    </body>




