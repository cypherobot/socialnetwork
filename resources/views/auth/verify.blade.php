<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">

    <title> Social Evoke | Login</title>
    <link rel="icon" type="image/png" href="#assets/img/favicon.png" />
    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Montserrat:600,700,800,900" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Roboto:400,500" rel="stylesheet">
    <!-- Core CSS -->
    <!-- Styles -->
    <link href="{{ asset('css/appx.css') }}" rel="stylesheet">
    <link href="{{ asset('css/bulma.css') }}" rel="stylesheet">
    <link href="{{ asset('css/corex.css') }}" rel="stylesheet">

    <style>
        .login-wrapper .hero.is-login {
            position: relative;
            background: #0062ff;
            background: -webkit-gradient(linear, left top, left bottom, from(#16d89f), to(#1fd29d));
            background: linear-gradient(180deg, #16d89f, #1fd29d);
            background-size: 400% 400%;
            -webkit-animation: gradientShift 12s ease infinite;
            animation: gradientShift 12s ease infinite;
        }

        .login-wrapper .hero.is-login .left-caption h2 {
            font-family: 'Montserrat', sans-serif;
            font-weight: bold;
            font-size: 3.2rem;
            color: #fcfcfc;
            line-height: 1.3;
            text-shadow: 4px 4px #1fd29d, 8px 8px #0f7a5a;
        }

        .button.is-solid.primary-button {
            background: #1fd29d;
            border-color: #0a8460;
            color: #fff !important;
        }
    </style>
</head>

<body class="is-white">

    <!-- Pageloader -->
    <div class="pageloader"></div>
    <div class="infraloader is-active"></div>
    <div class="login-wrapper">

        <!-- Main Wrapper -->
        <div class="login-wrapper columns is-gapless">
            <!--Left Side (Desktop Only)-->
            <div class="column is-6 is-hidden-mobile hero-banner">
                <div class="hero is-fullheight is-login">
                    <div class="hero-body">
                        <div class="container">
                            <div class="left-caption">
                                <h2>Verify Your Email Address</h2>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--Right Side-->
            <div class="column is-6">
                <div class="hero form-hero is-fullheight">
                    <div class="hero-body">
                        <div class="form-wrapper">
                            <div class="field">
                                <div class="control">
                                    @if (session('resent'))
                                    <div class="alert alert-success" role="alert">
                                        {{ __('A fresh verification link has been sent to your email address.') }}
                                    </div>
                                    @endif

                                    {{ __('Before proceeding, please check your email for a verification link.') }}
                                    {{ __('If you did not receive the email') }}
                                    <br><br>
                                    <form class="d-inline" method="POST" action="{{ route('verification.resend') }}">
                                        @csrf
                                        <button type="submit"  class="button is-solid primary-button raised is-rounded is-fullwidth">{{ __('click here to request another') }}</button>.
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                </form>
            </div>
        </div>
    </div>
    </div>
    </div>
    </div>
    </div>


    <!-- Concatenated js plugins and jQuery -->
    <script src="assets/js/app.js"></script>
    <script src="{{ asset('js/appx.js') }}"></script>


    <!-- Core js -->
    <script src="assets/data/tipuedrop_content.js"></script>
    <script src="{{ asset('js/tipuedrop_content.js') }}"></script>

    <script src="assets/js/global.js"></script>
    <script src="{{ asset('js/global.js') }}"></script>

    <script src="assets/js/main.js"></script>
    <script src="{{ asset('js/main.js') }}"></script>

    <!-- Page and UI related js -->
    <script src="assets/js/landing.js"></script>
    <script src="{{ asset('js/landing.js') }}"></script>


    <script src="assets/js/tour.js"></script>
    <script src="{{ asset('js/tour.js') }}"></script>

</body>

</html>