<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Social Evoke : Home</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/appx.css') }}" rel="stylesheet">
    <link href="{{ asset('css/bulma.css') }}" rel="stylesheet">
    <link href="{{ asset('css/corex.css') }}" rel="stylesheet">
    <style>
        .FeedSection__feed-image {
            background: url('img/an.png') 0 0/50% auto repeat-y;
            margin-top: -33%;
            height: 250%;
            width: 115%;
            position: absolute;
            transform: rotate(-40deg) translateX(-3%);
            animation: 50s linear infinite animation-number__1;
        }

        .FeedSection {
            background-color: #fafafa;
            /* display: flex; */
            align-items: center;
            overflow: hidden;
            overflow-x: hidden;
            overflow-y: hidden;
            position: relative;
            height: 50rem;
            width: 100%;
        }

        .myextradiv {
            background-color: #fff;
            display: flex;
            align-items: center;
            overflow: hidden;
            overflow-x: hidden;
            overflow-y: hidden;
            position: relative;
            height: 50rem;
            width: 100%;
        }

        .landing-hero-wrapper .landing-caption h2 {
            font-family: 'Montserrat', sans-serif;
            font-size: 4rem;
            font-weight: bold;
            color: #fcfcfc;
            line-height: 1;
            text-shadow: 5px 5px #0052d6, 10px 10px #0052d6;
        }

        .landing-hero-wrapper .landing-caption h3 {
            font-family: 'Montserrat', sans-serif;
            font-size: 1.2rem;
            font-weight: 300;
            color: #fcfcfc;
            margin: 2% 0 0 25%;
            text-shadow: 2px 2px #0052d6, 5px 5px #0052d6;
        }

        .landing-hero-wrapper .landing-caption .button {
            margin: 5px 10px;
            color: #a19696;
        }

        .myiconsize {
            padding-right: 8%;
        }

        .myblock {
            display: block;
        }

        .mybody {
            color: #231e21;
            font-family: Emoji, Walsheim, "Helvetica Neue", "Segoe UI", sans-serif;
            -webkit-font-smoothing: antialiased;
        }

        .mybody {
            -webkit-tap-highlight-color: transparent;
            -webkit-tap-highlight-color: transparent;
            -webkit-touch-callout: none;
            -webkit-user-select: none;
            user-select: none;
            cursor: default;
            overflow-x: hidden;
            overflow-y: auto;
            -webkit-overflow-scrolling: touch;
            width: 100%;
            min-height: 100%;
            line-height: 1.5;
            scroll-behavior: smooth;
            text-rendering: optimizeSpeed;
        }

        /* footer */

        .copyright .inner {
            justify-content: center;
            padding: 25px 0;
        }

        @keyframes animation-number__1 {
            0% {
                background-position: 0 0;
            }

            100% {
                background-position: 0 -300%;
            }
        }
    </style>

</head>

<body class="is-white">
    <!-- Pageloader -->
    <div class="pageloader"></div>
    <div class="infraloader is-active"></div>
    <div class="navbar is-inline-flex is-transparent no-shadow no-background is-landing is-hidden-mobile">
        <div class="container is-fluid">
            <div class="navbar-brand">
                <a href="index.html" class="navbar-item">
                    <img src="{{ asset('img/logo/mynewlogo.svg') }}" alt="">
                </a>
            </div>
            <div class="navbar-menu">
                <!-- <div class="navbar-start">
                    <div class="navbar-item">
                        <a href="#buy">Buy</a>
                    </div>
                    <div class="navbar-item">
                        <a href="#demos-section">Demos</a>
                    </div>
                    <div class="navbar-item">
                        <a>Docs</a>
                    </div>
                </div> -->

                <div class="navbar-end">

                    <div class="navbar-item">

                        @if (Route::has('login'))
                        @auth
                        <!-- <a href="{{ url('/home') }}">Home</a> -->
                        @else
                        <div class="navbar-item">
                            <a href="{{ route('login') }}">Login</a>
                        </div>

                        @if (Route::has('register'))
                        <a id="signup-button" href="{{ route('register') }}" class="button is-cta is-solid accent-button raised">
                            Sign Up
                        </a>
                        @endif
                        @endauth
                        @endif
                    </div>
                </div>

            </div>
        </div>
    </div>
    <nav class="navbar mobile-navbar is-landing is-hidden-desktop" aria-label="main navigation">
        <!-- Brand -->
        <div class="navbar-brand">
            <a class="navbar-item" href="index.html">
                <img class="dark-mobile-logo" src="{{ asset('img/logo/lol.svg') }}" alt="">
                <img class="light-mobile-logo" src="{{ asset('img/logo/lol-whited.svg') }}" alt="">
            </a>

            <!-- Mobile menu toggler icon -->
            <div class="navbar-burger">
                <span></span>
                <span></span>
                <span></span>
            </div>
        </div>
        <!-- Navbar mobile menu -->
        <div class="navbar-menu">
            <!-- Account -->
            <div class="navbar-item has-dropdown">
                <div class="navbar-link">
                    <img src="https://via.placeholder.com/150x150" data-demo-src="assets/img/avatars/avatar-w.png" alt="">
                    <span class="is-heading">Guest</span>
                </div>

                <!-- Mobile Dropdown -->
                <!-- <div class="navbar-dropdown">
                    <a href="#" class="navbar-item">Buy</a>
                    <a href="#demos-section" class="navbar-item">Demos</a>
                    <a" class="navbar-item">Docs</a>
                    <a href="login.html" class="navbar-item">Login</a>
                    <a href="signup.html" class="button is-fullwidth is-solid accent-button">Sign Up</a>
                </div> -->
            </div>
        </div>
    </nav>
    <div class="landing-wrapper">

        <div class="hero is-fullheight landing-hero-wrapper">
            <div id="particles-js">
                <div class="mybody">
                    <div class=" myblock FeedSection__feed-image"></div>
                </div>
            </div>
            <div class="hero-body">

                <div class="container">

                    <div class="columns landing-caption is-vcentered">
                        <div class="column is-6">
                        </div>
                        <div class="column is-5 is-offset-1">
                            <h2>Social Evoke</h2>
                            <h3>Continue with</h3>
                            <div class="buttons">
                                <!-- <a href="" class="button"><i style="color: #16a6fb;" class="fab fa-facebook-f myiconsize"></i>Facebook</a>
                                <button href="" id="" class="button is-hidden-mobile "><i style="color: #e94235 ;" class="fab fa-google myiconsize"></i>Google</button>
                                 -->
                                <a class="button  primary-button raised" href="{{ route('social.oauth', 'facebook') }}">
                                   Facebook
                                </a>
                                <a class="button primary-button raised" href="{{ route('social.oauth', 'google') }}">
                                    Google
                                </a>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- slider section -->

        <!-- slider section end -->

        <section class="FeedSection">
            <div id="landing-start" class="section landing-wrapper">
                <div class="container">
                    <div class="made-with">
                        <div id="made-with-bulma" class="made-block">
                            <div class="block-icon is-box-reveal">
                                <img src="{{ asset('img/icons/logos/bulma.svg') }}" alt="">
                            </div>
                            <div class="block-title">
                                <h3>Bulma 0.8.0</h3>
                            </div>
                        </div>
                        <div class="made-block">
                            <div class="block-icon is-box-reveal">
                                <img src="{{ asset('img/icons/logos/gulp.svg') }}" alt="">
                            </div>
                            <div class="block-title">
                                <h3>Gulp</h3>
                            </div>
                        </div>
                        <div class="made-block">
                            <div class="block-icon is-box-reveal">
                                <img src="{{ asset('img/icons/logos/sass.svg') }}" alt="">
                            </div>
                            <div class="block-title">
                                <h3>Sass</h3>
                            </div>
                        </div>
                        <div class="made-block">
                            <div class="block-icon is-box-reveal">
                                <img src="{{ asset('img/icons/logos/html5.svg') }}" alt="">
                            </div>
                            <div class="block-title">
                                <h3>Html5</h3>
                            </div>
                        </div>
                    </div>

                    <div class="screen-wrapper">
                        <img src="{{ asset('img/screens/friendkit-feed.png') }}" alt="">
                    </div>
                </div>
            </div>


        </section>
        <div class="section landing-wrapper icons-section myextradiv">
            <div class="container">
                <div id="icon-features" class="columns">
                    <div class="column is-hidden-mobile"></div>
                    <div class="column is-3">
                        <div class="landing-icon-box">
                            <img src="{{ asset('img/icons/landing/code.svg') }}" alt="">
                            <h3>Structured Code</h3>
                            <p>For an optimized dev experience</p>
                        </div>
                    </div>
                    <div class="column is-3">
                        <div class="landing-icon-box">
                            <img src="{{ asset('img/icons/landing/pages.svg') }}" alt="">
                            <h3>28 Prebuilt Pages</h3>
                            <p>To help you kickstart your project</p>
                        </div>
                    </div>
                    <div class="column is-3">
                        <div class="landing-icon-box">
                            <img src="{{ asset('img/icons/landing/draw.svg') }}" alt="">
                            <h3>Illustrations</h3>
                            <p>Included as svg and png files</p>
                        </div>
                    </div>
                    <div class="column is-hidden-mobile"></div>
                </div>
                <div class="columns">
                    <div class="column is-hidden-mobile"></div>
                    <div class="column is-3">
                        <div class="landing-icon-box">
                            <img src="{{ asset('img/icons/landing/interactions.svg') }}" alt="">
                            <h3>Micro Interactions</h3>
                            <p>And attention to details</p>
                        </div>
                    </div>
                    <div class="column is-3">
                        <div class="landing-icon-box">
                            <img src="{{ asset('img/icons/landing/responsive.svg') }}" alt="">
                            <h3>Responsive Design</h3>
                            <p>Mobile first UI framework</p>
                        </div>
                    </div>
                    <div class="column is-3">
                        <div class="landing-icon-box">
                            <img src="{{ asset('img/icons/landing/updates.svg') }}" alt="">
                            <h3>Lifetime Updates</h3>
                            <p>With new content every time</p>
                        </div>
                    </div>
                    <div class="column is-hidden-mobile"></div>
                </div>
                <div class="columns">
                    <div class="column is-hidden-mobile"></div>
                    <div class="column is-3">
                        <div class="landing-icon-box">
                            <img src="{{ asset('img/icons/landing/modern.svg') }}" alt="">
                            <h3>Modern Design</h3>
                            <p>Following the latest app trends</p>
                        </div>
                    </div>
                    <div class="column is-3">
                        <div class="landing-icon-box">
                            <img src="{{ asset('img/icons/landing/elements.svg') }}" alt="">
                            <h3>350+ UI Elements</h3>
                            <p>Because we love our customers</p>
                        </div>
                    </div>
                    <div class="column is-3">
                        <div class="landing-icon-box">
                            <img src="{{ asset('img/icons/landing/illustrations.svg') }}" alt="">
                            <h3>Easy Theming</h3>
                            <p>Branding won't be a problem</p>
                        </div>
                    </div>
                    <div class="column is-hidden-mobile"></div>
                </div>
                <div class="columns">
                    <div class="column is-hidden-mobile"></div>
                    <div class="column is-3">
                        <div class="landing-icon-box">
                            <img src="{{ asset('img/icons/landing/support.svg') }}" alt="">
                            <h3>Customer Support</h3>
                            <p>Via email and support forum</p>
                        </div>
                    </div>
                    <div class="column is-3">
                        <div class="landing-icon-box">
                            <img src="{{ asset('img/icons/landing/plugin.svg') }}" alt="">
                            <h3>1 Premium Plugin</h3>
                            <p>Save $30 on the Fancybox 3 plugin</p>
                        </div>
                    </div>
                    <div class="column is-3">
                        <div class="landing-icon-box">
                            <img src="{{ asset('img/icons/landing/docs.svg') }}" alt="">
                            <h3>Detailed Documentation</h3>
                            <p>To quickly get you started</p>
                        </div>
                    </div>
                    <div class="column is-hidden-mobile"></div>
                </div>
            </div>
        </div>

        <div class="section side-feature">
            <div class="container">
                <div class="columns is-vcentered">
                    <div class="column is-5 is-offset-1">
                        <h3>Handcrafted UI Elements</h3>
                        <p>A paragraph that explains the feature in details and lorem ipsum sit dolor amet is a text used by typographers to make lines longer.</p>
                    </div>
                    <div class="column is-5">
                        <img src="{{ asset('img/illustrations/ui/components.png') }}" alt="">
                    </div>
                </div>
            </div>
        </div>

        <div class="section side-feature">
            <div class="container">
                <div class="columns is-vcentered">
                    <div class="column is-5 is-offset-1 is-hidden-mobile">
                        <img src="{{ asset('img/illustrations/ui/layouts.png') }}" alt="">
                    </div>
                    <div class="column is-5 is-offset-1">
                        <h3>Awesome Layouts</h3>
                        <p>A paragraph that explains the feature in details and lorem ipsum sit dolor amet is a text used by typographers to make lines longer.</p>
                    </div>
                    <div class="column is-5 is-offset-1 is-hidden-desktop">
                        <img src="{{ asset('img/illustrations/ui/layouts.png') }}" alt="">
                    </div>
                </div>
            </div>
        </div>

        <!-- <div id="demos-section" class="section demos-wrapper">
            <div class="container">
                <div class="header-logo">
                    <img src="assets/img/logo/lol-white.svg" alt="">
                </div>
                <div class="demos-title has-text-centered">
                    <h3>Prebuilt pages to start with</h3>
                </div>

                <div class="demos-list">
                    <div class="columns is-multiline">
                        <div class="column is-6">
                            <a class="demo-item" href="feed.html" target="_blank">
                                <img src="assets/img/screens/lol-feed.png" alt="">
                                <div class="go-arrow">
                                    <i data-feather="arrow-right"></i>
                                </div>
                            </a>
                            <h3 class="has-text-centered">Feed</h3>
                        </div>
                        <div class="column is-6">
                            <a class="demo-item" href="feed-v1b.html" target="_blank">
                                <img src="assets/img/screens/lol-feed2.png" alt="">
                                <div class="go-arrow">
                                    <i data-feather="arrow-right"></i>
                                </div>
                            </a>
                            <h3 class="has-text-centered">Feed V2</h3>
                        </div>
                        <div class="column is-6">
                            <a class="demo-item" href="stories-main.html" target="_blank">
                                <img src="assets/img/screens/stories.png" alt="">
                                <div class="go-arrow">
                                    <i data-feather="arrow-right"></i>
                                </div>
                            </a>
                            <h3 class="has-text-centered">Stories</h3>
                        </div>
                        <div class="column is-6">
                            <a class="demo-item" href="stories-story.html" target="_blank">
                                <img src="assets/img/screens/stories-post.png" alt="">
                                <div class="go-arrow">
                                    <i data-feather="arrow-right"></i>
                                </div>
                            </a>
                            <h3 class="has-text-centered">Post Details</h3>
                        </div>
                        <div class="column is-6">
                            <a class="demo-item" href="login.html" target="_blank">
                                <img src="assets/img/screens/login.png" alt="">
                                <div class="go-arrow">
                                    <i data-feather="arrow-right"></i>
                                </div>
                            </a>
                            <h3 class="has-text-centered">Login</h3>
                        </div>
                        <div class="column is-6">
                            <a class="demo-item" href="signup.html" target="_blank">
                                <img src="assets/img/screens/signup.png" alt="">
                                <div class="go-arrow">
                                    <i data-feather="arrow-right"></i>
                                </div>
                            </a>
                            <h3 class="has-text-centered">Signup Flow</h3>
                        </div>
                        <div class="column is-6">
                            <a class="demo-item" href="profile-main.html" target="_blank">
                                <img src="assets/img/screens/profile-main.png" alt="">
                                <div class="go-arrow">
                                    <i data-feather="arrow-right"></i>
                                </div>
                            </a>
                            <h3 class="has-text-centered">Profile</h3>
                        </div>
                        <div class="column is-6">
                            <a class="demo-item" href="profile-about.html" target="_blank">
                                <img src="assets/img/screens/profile-about.png" alt="">
                                <div class="go-arrow">
                                    <i data-feather="arrow-right"></i>
                                </div>
                            </a>
                            <h3 class="has-text-centered">About</h3>
                        </div>
                        <div class="column is-6">
                            <a class="demo-item" href="profile-friends.html" target="_blank">
                                <img src="assets/img/screens/profile-friends.png" alt="">
                                <div class="go-arrow">
                                    <i data-feather="arrow-right"></i>
                                </div>
                            </a>
                            <h3 class="has-text-centered">Friends</h3>
                        </div>
                        <div class="column is-6">
                            <a class="demo-item" href="profile-photos.html" target="_blank">
                                <img src="assets/img/screens/profile-photos.png" alt="">
                                <div class="go-arrow">
                                    <i data-feather="arrow-right"></i>
                                </div>
                            </a>
                            <h3 class="has-text-centered">Photos</h3>
                        </div>
                        <div class="column is-6">
                            <a class="demo-item" href="ecommerce-products.html" target="_blank">
                                <img src="assets/img/screens/store.png" alt="">
                                <div class="go-arrow">
                                    <i data-feather="arrow-right"></i>
                                </div>
                            </a>
                            <h3 class="has-text-centered">Shop</h3>
                        </div>
                        <div class="column is-6">
                            <a class="demo-item" href="ecommerce-cart.html" target="_blank">
                                <img src="assets/img/screens/cart.png" alt="">
                                <div class="go-arrow">
                                    <i data-feather="arrow-right"></i>
                                </div>
                            </a>
                            <h3 class="has-text-centered">Shopping Cart</h3>
                        </div>
                        <div class="column is-6">
                            <a class="demo-item" href="options-friends.html" target="_blank">
                                <img src="assets/img/screens/friends.png" alt="">
                                <div class="go-arrow">
                                    <i data-feather="arrow-right"></i>
                                </div>
                            </a>
                            <h3 class="has-text-centered">All Friends</h3>
                        </div>
                        <div class="column is-6">
                            <a class="demo-item" href="messages-inbox.html" target="_blank">
                                <img src="assets/img/screens/inbox.png" alt="">
                                <div class="go-arrow">
                                    <i data-feather="arrow-right"></i>
                                </div>
                            </a>
                            <h3 class="has-text-centered">Inbox</h3>
                        </div>
                        <div class="column is-6">
                            <a class="demo-item" href="messages-chat.html" target="_blank">
                                <img src="assets/img/screens/chat.png" alt="">
                                <div class="go-arrow">
                                    <i data-feather="arrow-right"></i>
                                </div>
                            </a>
                            <h3 class="has-text-centered">Messaging</h3>
                        </div>
                        <div class="column is-6">
                            <a class="demo-item" href="pages-main.html" target="_blank">
                                <img src="assets/img/screens/pages-main.png" alt="">
                                <div class="go-arrow">
                                    <i data-feather="arrow-right"></i>
                                </div>
                            </a>
                            <h3 class="has-text-centered">Company</h3>
                        </div>
                        <div class="column is-6">
                            <a class="demo-item" href="pages-about.html" target="_blank">
                                <img src="assets/img/screens/about-fan.png" alt="">
                                <div class="go-arrow">
                                    <i data-feather="arrow-right"></i>
                                </div>
                            </a>
                            <h3 class="has-text-centered">About Company</h3>
                        </div>
                        <div class="column is-6">
                            <a class="demo-item" href="pages-community.html" target="_blank">
                                <img src="assets/img/screens/pages-community.png" alt="">
                                <div class="go-arrow">
                                    <i data-feather="arrow-right"></i>
                                </div>
                            </a>
                            <h3 class="has-text-centered">Community</h3>
                        </div>
                        <div class="column is-6">
                            <a class="demo-item" href="pages-photos.html" target="_blank">
                                <img src="assets/img/screens/pages-photos.png" alt="">
                                <div class="go-arrow">
                                    <i data-feather="arrow-right"></i>
                                </div>
                            </a>
                            <h3 class="has-text-centered">Company Photos</h3>
                        </div>
                        <div class="column is-6">
                            <a class="demo-item" href="videos-home.html" target="_blank">
                                <img src="assets/img/screens/videos-home.png" alt="">
                                <div class="go-arrow">
                                    <i data-feather="arrow-right"></i>
                                </div>
                            </a>
                            <h3 class="has-text-centered">Videos</h3>
                        </div>
                        <div class="column is-6">
                            <a class="demo-item" href="videos-home-v2.html" target="_blank">
                                <img src="assets/img/screens/videos-home2.png" alt="">
                                <div class="go-arrow">
                                    <i data-feather="arrow-right"></i>
                                </div>
                            </a>
                            <h3 class="has-text-centered">Videos V2</h3>
                        </div>
                        <div class="column is-6">
                            <a class="demo-item" href="videos-player.html" target="_blank">
                                <img src="assets/img/screens/videos-player.png" alt="">
                                <div class="go-arrow">
                                    <i data-feather="arrow-right"></i>
                                </div>
                            </a>
                            <h3 class="has-text-centered">Videos Player</h3>
                        </div>
                        <div class="column is-6">
                            <a class="demo-item" href="questions-home.html" target="_blank">
                                <img src="assets/img/screens/questions-home.png" alt="">
                                <div class="go-arrow">
                                    <i data-feather="arrow-right"></i>
                                </div>
                            </a>
                            <h3 class="has-text-centered">Questions</h3>
                        </div>
                        <div class="column is-6">
                            <a class="demo-item" href="questions-categories.html" target="_blank">
                                <img src="assets/img/screens/questions-categories.png" alt="">
                                <div class="go-arrow">
                                    <i data-feather="arrow-right"></i>
                                </div>
                            </a>
                            <h3 class="has-text-centered">Categories</h3>
                        </div>
                        <div class="column is-6">
                            <a class="demo-item" href="questions-single.html" target="_blank">
                                <img src="assets/img/screens/questions-single.png" alt="">
                                <div class="go-arrow">
                                    <i data-feather="arrow-right"></i>
                                </div>
                            </a>
                            <h3 class="has-text-centered">Question</h3>
                        </div>
                        <div class="column is-6">
                            <a class="demo-item" href="questions-stats.html" target="_blank">
                                <img src="assets/img/screens/questions-stats.png" alt="">
                                <div class="go-arrow">
                                    <i data-feather="arrow-right"></i>
                                </div>
                            </a>
                            <h3 class="has-text-centered">Statistics</h3>
                        </div>
                        <div class="column is-6">
                            <a class="demo-item" href="questions-settings.html" target="_blank">
                                <img src="assets/img/screens/questions-settings.png" alt="">
                                <div class="go-arrow">
                                    <i data-feather="arrow-right"></i>
                                </div>
                            </a>
                            <h3 class="has-text-centered">Settings</h3>
                        </div>
                        <div class="column is-6">
                            <a class="demo-item" href="events.html" target="_blank">
                                <img src="assets/img/screens/events.png" alt="">
                                <div class="go-arrow">
                                    <i data-feather="arrow-right"></i>
                                </div>
                            </a>
                            <h3 class="has-text-centered">Events</h3>
                        </div>
                        <div class="column is-6">
                            <a class="demo-item" href="news.html" target="_blank">
                                <img src="assets/img/screens/news.png" alt="">
                                <div class="go-arrow">
                                    <i data-feather="arrow-right"></i>
                                </div>
                            </a>
                            <h3 class="has-text-centered">News Feed</h3>
                        </div>
                        <div class="column is-6">
                            <a class="demo-item" href="options-settings.html" target="_blank">
                                <img src="assets/img/screens/settings.png" alt="">
                                <div class="go-arrow">
                                    <i data-feather="arrow-right"></i>
                                </div>
                            </a>
                            <h3 class="has-text-centered">Settings</h3>
                        </div>
                        <div class="column is-6">
                            <a class="demo-item" href="placeholders-feed.html" target="_blank">
                                <img src="assets/img/screens/placeholders-feed.png" alt="">
                                <div class="go-arrow">
                                    <i data-feather="arrow-right"></i>
                                </div>
                            </a>
                            <h3 class="has-text-centered">Placeholders V1</h3>
                        </div>
                        <div class="column is-6">
                            <a class="demo-item" href="placeholders-questions-1.html" target="_blank">
                                <img src="assets/img/screens/placeholders-questions1.png" alt="">
                                <div class="go-arrow">
                                    <i data-feather="arrow-right"></i>
                                </div>
                            </a>
                            <h3 class="has-text-centered">Placeholders V2</h3>
                        </div>
                        <div class="column is-6">
                            <a class="demo-item" href="placeholders-questions-2.html" target="_blank">
                                <img src="assets/img/screens/placeholders-questions2.png" alt="">
                                <div class="go-arrow">
                                    <i data-feather="arrow-right"></i>
                                </div>
                            </a>
                            <h3 class="has-text-centered">Placeholders V3</h3>
                        </div>
                        <div class="column is-6">
                            <a class="demo-item" href="placeholders-questions-3.html" target="_blank">
                                <img src="assets/img/screens/placeholders-questions3.png" alt="">
                                <div class="go-arrow">
                                    <i data-feather="arrow-right"></i>
                                </div>
                            </a>
                            <h3 class="has-text-centered">Placeholders V4</h3>
                        </div>
                        <div class="column is-6">
                            <a class="demo-item" href="elements.html" target="_blank">
                                <img src="assets/img/screens/elements.png" alt="">
                                <div class="go-arrow">
                                    <i data-feather="arrow-right"></i>
                                </div>
                            </a>
                            <h3 class="has-text-centered">Elements</h3>
                        </div>
                    </div>
                </div>
            </div>
        </div> -->

        <!-- <div id="buy" class="section cta-wrapper">
            <div class="container">
                <div class="header-logo">
                    <img src="assets/img/logo/lol.svg" alt="">
                </div>
                <div class="cta-title">
                    <h3></h3>
                        target="_blank" class="custom-button is-single-reveal">
                        <img src="assets/img/icons/explore/.svg" alt="">
                        <span>Get It Now</span>
                    </a>
                </div>
                <img class="people-img" src="assets/img/illustrations/characters/lol.svg" alt="">
            </div>
        </div> -->

        <!-- <footer class="footer">
            <div class="container">
                <div class="columns"> -->
        <!-- Column -->
        <!-- <div class="column is-4">
                        <div>
                            <img class="small-footer-logo" src="assets/img/logo/lol.svg" alt="">
                            <div class="footer-description pt-10 pb-10">
                               
                            </div>
                        </div>
                        <div>
                            <span class="moto"><i data-feather="heart"></i> </span>
                        </div>
                    </div> -->
        <!-- Column -->
        <!-- <div class="column is-6 is-offset-2">
                        <div class="columns"> -->
        <!-- Column -->
        <!-- <div class="column">
                                <ul class="footer-column">
                                    <li class="column-header">
                                        
                                    </li>
                                    <li class="column-item"><a href="#">Home</a></li>
                                    <li class="column-item"><a href="#">Pricing</a></li>
                                    <li class="column-item"><a href="#">Get started</a></li>
                                    <li class="column-item"><a href="#">Help</a></li>
                                </ul>
                            </div> -->
        <!-- Column -->
        <!-- <div class="column">
                                <ul class="footer-column">
                                    <li class="column-header">
                                        Ressources
                                    </li>
                                    <li class="column-item"><a href="#">Learning</a></li>
                                    <li class="column-item"><a href="#">Support center</a></li>
                                    <li class="column-item"><a href="#">Frequent questions</a></li>
                                    <li class="column-item"><a href="#">Schedule a demo</a></li>
                                </ul>
                            </div> -->
        <!-- Column -->
        <!-- <div class="column">
                                <ul class="footer-column">
                                    <li class="column-header">
                                        Terms
                                    </li>
                                    <li class="column-item"><a href="#">Terms of Service</a></li>
                                    <li class="column-item"><a href="#">Privacy policy</a></li>
                                    <li class="column-item"><a href="#">SaaS services</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </footer> -->
        <div class="copyright">
            <div class="container">
                <div class="inner">
                    <div class="left is-hidden-mobile">
                        <p style="text-align: center;">© Copyright 2020 Social Evoke - All Rights Reserved</p>
                    </div>
                    <!-- <div class="right">
                        <img src="assets/img/logo/-grayscale.svg" alt="">
                    </div> -->
                </div>
            </div>
        </div>
    </div>


    <!-- Concatenated js plugins and jQuery -->
    <script src="{{ asset('js/appx.js') }}"></script>

    <!-- Core js -->
    <script src="{{ asset('js/tipuedrop_content.js') }}"></script>
    <script src="{{ asset('js/global.js') }}"></script>
    <script src="{{ asset('js/main.js') }}"></script>

    <!-- Page and UI related js -->
    <script src="{{ asset('js/landing.js') }}"></script>
    <script src="{{ asset('js/tour.js') }}"></script>

</body>

</html>