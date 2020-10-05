<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">

    <title> Social Evoke| Sign Up</title>
    <link rel="icon" type="image/png" href="#assets/img/favicon.png" />
    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Montserrat:600,700,800,900" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Roboto:400,500" rel="stylesheet">
    <!-- Core CSS -->
    <link href="{{ asset('css/appx.css') }}" rel="stylesheet">
    <link href="{{ asset('css/bulma.css') }}" rel="stylesheet">
    <link href="{{ asset('css/corex.css') }}" rel="stylesheet">

    <link href="https://fonts.googleapis.com/css2?family=Fira+Sans:ital@1&display=swap" rel="stylesheet">
    <style>
        .mynewform {
            height: 400px;
        }

        .myleftdiv {
            width: 49%;
            float: left;
        }

        .myrightdiv {
            width: 49%;
            float: right;
        }

        .mymargintop {
            margin-top: 10%;
        }

        /* .mymarginup {
            margin-top: 10px;
        } */

        .step-title {
            font-family: 'Fira Sans', sans-serif !important;
        }
    </style>
</head>

<body>

    <!-- Pageloader -->
    <div class="pageloader"></div>
    <div class="infraloader is-active"></div>


    <div class="signup-wrapper">

        <div class="fake-nav">
            <a href="index.html" class="logo">
                <img src="assets/img/logo/mynewlogo.png" width="112" height="28" alt="">
            </a>
        </div>



        <div class="process-bar-wrap">
            <div class="process-bar">
                <div class="progress-wrap">
                    <div class="track"></div>
                    <div class="bar"></div>

                    <div id="step-dot-1" class="dot is-first is-active is-current" data-step="0">
                        <i data-feather="user"></i>
                    </div>
                    <!-- <div id="step-dot-1" class="dot is-first is-active is-current" data-step="0">
                        <i data-feather="smile"></i>
                    </div> -->

                    <div id="step-dot-3" class="dot is-third" data-step="50">
                        <i data-feather="image"></i>
                    </div>
                    <!-- <div id="step-dot-4" class="dot is-fourth" data-step="75">
                        <i data-feather="lock"></i>
                    </div> -->
                    <div id="step-dot-5" class="dot is-fifth" data-step="100">
                        <i data-feather="flag"></i>
                    </div>

                </div>
            </div>
        </div>



        <div class="outer-panel">
            <div class="outer-panel-inner">
                <div class="process-title">
                    <h2 id="step-title-1" class="step-title is-active" style="padding-top: 3%;">Welcome, please enter few details . </h2>
                    <!-- <h2 id="step-title-2" class="step-title">Tell us more about you.</h2> -->
                    <h2 id="step-title-2" class="step-title">Upload a profile picture.</h2>
                    <!-- <h2 id="step-title-4" class="step-title">Secure your account.</h2> -->
                    <h2 id="step-title-3" class="step-title">Select atleast 5 Interesting topics</h2>
                </div>
                <div id="signup-panel-1" class="process-panel-wrap is-active">
                    <form method="POST" action="{{ route('register') }}">
                        @csrf
                        <div class="form-panel mynewform">

                            <div class="field myleftdiv">
                                @error('name')
                                <p>{{ $message }}</p>
                                @enderror
                                <label>First Name</label>
                                <div class="control">
                                    <input id="name" type="text" name="name" value="{{ old('name') }}" type="text" class="input" placeholder="Enter your first name">
                                </div>
                            </div>

                            <!-- <div class="field myrightdiv">
                                <label>Last Name</label>
                                <div class="control">
                                    <input type="text" class="input" placeholder="Enter your last name">
                                </div>
                            </div> -->

                            <div class="field mymargintop">
                                @error('email')
                                <p>{{ $message }}</p>
                                @enderror
                                <label>Email</label>
                                <div class="control">
                                    <input id="email" name="email" value="{{ old('email') }}" type="text" class="input" placeholder="Enter your email address">
                                </div>
                            </div>


                            <!-- <div class="field">
                                <label>Phone Number</label>
                                <div class="control">
                                    <input type="text" class="input" placeholder="Enter your phone number">
                                </div>
                            </div> -->

                            <div class="field myleftdiv">
                                @error('password')
                                <p>{{ $message }}</p>
                                @enderror
                                <label>Password</label>
                                <div class="control">
                                    <input id="password" type="password" name="password" type="password" class="input" placeholder="Choose a password">
                                </div>
                            </div>


                            <div class="field myrightdiv">
                                <label>Repeat Password</label>
                                <div class="control">
                                    <input id="password-confirm" type="password" name="password_confirmation" required type="password" class="input" placeholder="Repeat your password">
                                </div>
                            </div>

                            <!-- <script>
                                function savedata() {
                                    var name = document.getElementById("name").value;
                                    var email = document.getElementById("email").value;
                                    var password = document.getElementById("password").value;
                                    var passwordconfirm = document.getElementById("password-confirm").value;
                                    alert(name);
                                }
                            </script> -->
                        </div>

                        <div class="buttons mymarginup">
                            <!-- <a class="button is-rounded process-button" data-step="step-dot-1">Back</a> -->
                            <!-- <a onclick="savedata()" class="button is-rounded process-button is-next" data-step="step-dot-3">Next</a> -->
                            <button type="submit" class="button is-rounded process-button">
                                    {{ __('Register') }}
                                </button>
                        </div>
                </div>






                <div id="signup-panel-3" class="process-panel-wrap is-narrow">
                    <div class="form-panel">
                        <div class="photo-upload">
                            <div class="preview">
                                <a class="upload-button">
                                    <i data-feather="plus"></i>
                                </a>
                                <img id="upload-preview" src="https://via.placeholder.com/150x150" data-demo-src="assets/img/avatars/avatar-w.png" alt="">
                                <div id="profile-pic-dz" class="dropzone is-hidden" action="https://friendkit.cssninja.io/"></div>
                            </div>
                            <div class="limitation">
                                <small>Only images with a size lower than 3MB are allowed.</small>
                            </div>
                        </div>
                    </div>


                    <div class="buttons">
                        <a class="button is-rounded process-button" data-step="step-dot-1">Back</a>
                        <a class="button is-rounded process-button is-next" data-step="step-dot-5">Next</a>
                        <a class="button is-rounded process-button" data-step="step-dot-1">Back</a>
                        <!-- <a class="button is-rounded process-button is-next" data-step="step-dot-5">Next</a> -->

                    </div>
                </div>



                <div id="signup-panel-5" class="process-panel-wrap is-narrow">
                    <div class="form-panel">
                        <img class="success-image" src="assets/img/illustrations/signup/mailbox.svg" alt="">
                        <div class="success-text">
                            <h3>Congratz, you successfully created your account.</h3>
                            <p> We just sent you a confirmation email. PLease confirm your account within 24 hours.</p>
                            <a id="signup-finish" class="button is-fullwidth is-rounded">Let Me In</a>


                        </div>
                    </div>
                </div>
            </div>
        </div>



        <!--Edit Credit card Modal-->
        <div id="crop-modal" class="modal mdl-modal is-small crop-modal is-animated">
            <div class="modal-background"></div>
            <div class="modal-content">
                <div class="modal-card">
                    <header class="modal-card-head">
                        <div class="modal-card-title">
                            <span>Crop your picture</span>
                        </div>
                        <button class="mdl-modal-close" aria-label="close">
                            <i data-feather="x"></i>
                        </button>
                    </header>
                    <div class="modal-card-body">
                        <div id="cropper-wrapper" class="cropper-wrapper">

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </form>



    <!-- Page and UI related js -->
    <script src="assets/js/signup.js"></script>

    <!-- Concatenated js plugins and jQuery -->
    <script src="{{ asset('js/appx.js') }}"></script>

    <!-- Core js -->
    <script src="{{ asset('js/tipuedrop_content.js') }}"></script>
    <script src="{{ asset('js/global.js') }}"></script>
    <script src="{{ asset('js/main.js') }}"></script>

    <script src="{{ asset('js/signad.js') }}"></script>


</body>



</html>