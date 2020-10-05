<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">

    <title> Social Evoke | Profile Friends</title>
    <link rel="icon" type="image/png" href="#assets/img/favicon.png" />
    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Montserrat:600,700,800,900" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Roboto:400,500" rel="stylesheet">
    <link href="../cdn.jsdelivr.net/npm/fontisto%40v3.0.4/css/fontisto/fontisto-brands.min.css" rel="stylesheet">
    <!-- Core CSS -->
    <!-- Styles -->
    <link href="{{ asset('css/appx.css') }}" rel="stylesheet">
    <link href="{{ asset('css/bulma.css') }}" rel="stylesheet">
    <link href="{{ asset('css/corex.css') }}" rel="stylesheet">

    <style>
        /*   navbar */
        
        .navbar .container.is-fluid {
            padding: 0;
            background-color: #07ce92;
        }
        
        .navbar .control .drop-icon svg {
            stroke: #fff !important;
        }
        
        .navbar .navbar-item.is-icon .icon-link svg {
            stroke: #fff;
        }
        
        .mdi-apps::before {
            content: "\F03B";
            color: #fff;
        }
        
        .navbar-item.is-icon .icon-link.is-active {
            background: #32efb6 !important;
        }
        
        .navbar .navbar-item.is-icon .icon-link:hover {
            background: #32efb6;
        }
        
        .navbar .navbar-item.is-icon .icon-link.is-primary:hover {
            background: #32efb6;
        }
        /*   navbar */
        /*   text color */
        
        .stories-wrapper .stories-sidebar .stories-sidebar-inner .user-block h4 {
            font-family: 'Montserrat', sans-serif;
            font-weight: 700;
            font-size: .9rem;
            color: #2cca9b;
        }
        
        .stories-wrapper .inner-wrapper .stories-content .stories-feed .story-feed-item .item-meta .user-info span {
            display: block;
            margin-left: 10px;
            font-family: 'Montserrat', sans-serif;
            font-size: .75rem;
            font-weight: 600;
            color: #2cca9b;
        }
        
        .mytextcolorwala {
            color: #2cca9b;
        }
        /*   text color */
        
        .mystories {
            width: 100%;
            justify-content: center;
        }
        
        .stories-wrapper .inner-wrapper .stories-content .stories-container .container-inner .story {
            margin: 8px 20px;
            width: 100px;
        }
        
        .stories-wrapper .inner-wrapper .stories-content .stories-container .container-inner .story .story-avatars {
            position: relative;
            display: -webkit-box;
            display: -ms-flexbox;
            display: flex;
            -webkit-box-pack: center;
            -ms-flex-pack: center;
            justify-content: center;
            -webkit-box-align: center;
            -ms-flex-align: center;
            align-items: center;
            height: 40px;
            width: 100px;
            border-radius: 0%;
            background: #fff;
            border-bottom: 2px solid orange !important;
            /* border-bottom: 1.6px solid #cecece; */
            -webkit-transition: all .3s;
            transition: all .3s;
        }
        
        .stories-wrapper .inner-wrapper .stories-content .stories-container .container-inner .story .story-avatars:hover {
            border: 0 0 2px 0 solid #cecece !important;
        }
        
        .theme--light .ArticleCard__preview-button {
            color: #706e70;
        }
        
        .mycolor {
            color: rgb(173, 169, 169);
        }
        
        .myiconcolor {
            color: #cecece;
            padding-right: 25px;
        }
        
        .myspace {
            width: 100%;
            min-height: 50px;
        }
        
        .myspacexx {
            padding: 1px 10px !important;
        }
        
        .myspace h5 {
            width: 100%;
            float: left;
        }
        
        .myspace p {
            font-size: 13px;
            width: 100%;
            color: #b6b7bf;
        }
        
        .mystats {
            width: 100%;
            justify-content: flex-end;
            display: flex;
            padding: 0 0px;
        }
        
        .meraitem {
            margin: 0 2%;
        }
        
        .stories-wrapper .inner-wrapper .stories-content .stories-feed .story-feed-item {
            margin-bottom: 2.55rem;
        }
        
        .navbar .navbar-brand .navbar-item img {
            max-height: 42px;
            max-width: 100px;
            margin-left: 30%;
        }
        
        .mynavbrand {
            min-width: 30% !important;
        }
        
        .mynavbarspace {
            margin-left: 20%;
            margin-right: 20%;
        }
        /*  footer */
        
        .cid-qv5ALrxDIE {
            padding-top: 10px;
            padding-bottom: 0px;
            background-color: #ffffff;
        }
        
        .mysection101 {
            background-position: 50% 50%;
            background-repeat: no-repeat;
            background-size: cover;
            min-height: 50px;
        }
        
        .copyright {
            background: #e1e1e1e0;
            width: 100%;
            margin-left: 15%;
        }
        /* profile sidebar or settings */
        
        .stories-wrapper .stories-sidebar .stories-sidebar-inner .user-block {
            position: relative;
            margin: 20px 20px 0 20px;
            border-bottom: 1px solid #fafafa;
            text-align: center;
            height: 200px;
        }
        
        .mylists {
            margin: 10% 0 0 20%;
        }
        
        .mobile-navbar {
            background-color: #07ce92;
        }
        /* end of profile sidebar or settings */
    </style>
</head>

<body>


  <!-- Pageloader -->
  <div class="pageloader"></div>
        <div class="infraloader is-active"></div>
        <div class="app-overlay"></div>

        <div id="main-navbar" class="navbar is-inline-flex is-transparent is-hidden-mobile no-shadow">
        <div class="container is-fluid">
            <div class="navbar-brand mynavbrand">
                <a href="index.html" class="navbar-item">
                    <img src="assets/img/logo/mynewlogo.png" width="112" height="28" alt="">
                </a>
            </div>
            <div class="navbar-menu">
                <div class="navbar-start">

                    <div class="navbar-item">
                        <div id="global-search" class="control">
                            <input id="tipue_drop_input" class="input is-rounded" type="text" placeholder="Search" required="">
                            <span id="clear-search" class="reset-search">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-x">
                                    <line x1="18" y1="6" x2="6" y2="18"></line>
                                    <line x1="6" y1="6" x2="18" y2="18"></line>
                                </svg>
                            </span>
                            <span class="search-icon">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-search">
                                    <circle cx="11" cy="11" r="8"></circle>
                                    <line x1="21" y1="21" x2="16.65" y2="16.65"></line>
                                </svg>
                            </span>
                            <span class="drop-icon">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-more-vertical">
                                    <circle cx="12" cy="12" r="1"></circle>
                                    <circle cx="12" cy="5" r="1"></circle>
                                    <circle cx="12" cy="19" r="1"></circle>
                                </svg>
                            </span>

                            <!-- Search Dropdown -->
                            <div class="search-options">
                                <ul class="options-list">
                                    <!-- Search Option -->
                                    <li class="is-selected">
                                        <!--label class="material-radio">
                                                                        <input type="radio" name="search-type" checked>
                                                                        <span class="radio-label"></span>
                                                                    </label-->
                                        <span class="option-icon">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-search">
                                                <circle cx="11" cy="11" r="8"></circle>
                                                <line x1="21" y1="21" x2="16.65" y2="16.65"></line>
                                            </svg>
                                        </span>
                                        <span class="option-description">
                                            <span>Search All</span>
                                            <span>Search everything </span>
                                        </span>
                                    </li>
                                    <!-- Search Option -->
                                    <li>
                                        <span class="option-icon">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-users">
                                                <path d="M17 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"></path>
                                                <circle cx="9" cy="7" r="4"></circle>
                                                <path d="M23 21v-2a4 4 0 0 0-3-3.87"></path>
                                                <path d="M16 3.13a4 4 0 0 1 0 7.75"></path>
                                            </svg>
                                        </span>
                                        <span class="option-description">
                                            <span>Search People</span>
                                            <span>Search accross people and friends</span>
                                        </span>
                                    </li>
                                    <!-- Search Option -->
                                    <li>
                                        <span class="option-icon">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-file-text">
                                                <path d="M14 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8z"></path>
                                                <polyline points="14 2 14 8 20 8"></polyline>
                                                <line x1="16" y1="13" x2="8" y2="13"></line>
                                                <line x1="16" y1="17" x2="8" y2="17"></line>
                                                <polyline points="10 9 9 9 8 9"></polyline>
                                            </svg>
                                        </span>
                                        <span class="option-description">
                                            <span>Search Pages</span>
                                            <span>Search all Posts and news feeds</span>
                                        </span>
                                    </li>
                                </ul>
                                <!-- Close -->
                                <div class="is-close">
                                    <button id="close-search-options" type="button" class="button is-solid grey-button">Close</button>
                                </div>
                            </div>

                            <div id="tipue_drop_content"></div>
                        </div>

                    </div>
                    <!-- Navbar Search -->

                    <div class="navbar-item is-icon drop-trigger mynavbarspace">
                        <a class="icon-link is-primary is-friends" href="javascript:void(0);">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-heart">
                                <path d="M20.84 4.61a5.5 5.5 0 0 0-7.78 0L12 5.67l-1.06-1.06a5.5 5.5 0 0 0-7.78 7.78l1.06 1.06L12 21.23l7.78-7.78 1.06-1.06a5.5 5.5 0 0 0 0-7.78z">
                                </path>
                            </svg>
                            <!-- <i data-feather="heart"></i> -->
                            <span class="indicator"></span>
                        </a>

                        <div class="nav-drop is-active">
                            <div class="inner">
                                <div class="nav-drop-header">
                                    <span>Friend requests</span>
                                    <a href="#">Find Friends</a>
                                </div>
                                <div class="nav-drop-body is-friend-requests">
                                    <!-- Friend request -->
                                    <div class="media">
                                        <figure class="media-left">
                                            <p class="image">
                                                <img src="https://via.placeholder.com/300x300" data-demo-src="assets/img/avatars/bobby.jpg" alt="">
                                            </p>
                                        </figure>
                                        <div class="media-content">
                                            <a href="#">Bobby Brown</a>
                                            <span>Najeel verwick is a common friend</span>
                                        </div>
                                        <div class="media-right">
                                            <button class="button icon-button is-solid grey-button raised">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-user-plus">
                                                    <path d="M16 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"></path>
                                                    <circle cx="8.5" cy="7" r="4"></circle>
                                                    <line x1="20" y1="8" x2="20" y2="14"></line>
                                                    <line x1="23" y1="11" x2="17" y2="11"></line>
                                                </svg>
                                            </button>
                                            <button class="button icon-button is-solid grey-button raised">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-user-minus">
                                                    <path d="M16 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"></path>
                                                    <circle cx="8.5" cy="7" r="4"></circle>
                                                    <line x1="23" y1="11" x2="17" y2="11"></line>
                                                </svg>
                                            </button>
                                        </div>
                                    </div>
                                    <!-- Friend request -->
                                    <div class="navbar-start">
                                        <div class="media">
                                            <figure class="media-left">
                                                <p class="image">
                                                    <img src="https://via.placeholder.com/300x300" data-demo-src="assets/img/avatars/dan.jpg" alt="">
                                                </p>
                                            </figure>
                                            <div class="media-content">
                                                <a href="#">Dan Walker</a>
                                                <span>You have 4 common friends</span>
                                            </div>
                                            <div class="media-right">
                                                <button class="button icon-button is-solid grey-button raised">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-user-plus">
                                                        <path d="M16 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"></path>
                                                        <circle cx="8.5" cy="7" r="4"></circle>
                                                        <line x1="20" y1="8" x2="20" y2="14"></line>
                                                        <line x1="23" y1="11" x2="17" y2="11"></line>
                                                    </svg>
                                                </button>
                                                <button class="button icon-button is-solid grey-button raised">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-user-minus">
                                                        <path d="M16 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"></path>
                                                        <circle cx="8.5" cy="7" r="4"></circle>
                                                        <line x1="23" y1="11" x2="17" y2="11"></line>
                                                    </svg>
                                                </button>
                                            </div>
                                        </div>
                                        <!-- Friend request -->
                                        <div class="media">
                                            <figure class="media-left">
                                                <p class="image">
                                                    <img src="https://via.placeholder.com/300x300" data-demo-src="assets/img/avatars/nelly.png" alt="">
                                                </p>
                                            </figure>
                                            <div class="media-content">
                                                <span>You are now friends with <a href="#">Nelly Schwartz</a>. Check her <a href="#">profile</a>.</span>
                                            </div>
                                            <div class="media-right">
                                                <div class="added-icon">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-tag">
                                                        <path d="M20.59 13.41l-7.17 7.17a2 2 0 0 1-2.83 0L2 12V2h10l8.59 8.59a2 2 0 0 1 0 2.82z">
                                                        </path>
                                                        <line x1="7" y1="7" x2="7.01" y2="7"></line>
                                                    </svg>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- Friend request -->
                                        <div class="media">
                                            <figure class="media-left">
                                                <p class="image">
                                                    <img src="https://via.placeholder.com/300x300" data-demo-src="assets/img/avatars/milly.jpg" alt="">
                                                </p>
                                            </figure>
                                            <div class="media-content">
                                                <a href="#">Milly Augustine</a>
                                                <span>You have 8 common friends</span>
                                            </div>
                                            <div class="media-right">
                                                <button class="button icon-button is-solid grey-button raised">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-user-plus">
                                                        <path d="M16 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"></path>
                                                        <circle cx="8.5" cy="7" r="4"></circle>
                                                        <line x1="20" y1="8" x2="20" y2="14"></line>
                                                        <line x1="23" y1="11" x2="17" y2="11"></line>
                                                    </svg>
                                                </button>
                                                <button class="button icon-button is-solid grey-button raised">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-user-minus">
                                                        <path d="M16 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"></path>
                                                        <circle cx="8.5" cy="7" r="4"></circle>
                                                        <line x1="23" y1="11" x2="17" y2="11"></line>
                                                    </svg>
                                                </button>
                                            </div>
                                        </div>
                                        <!-- Friend request -->
                                        <div class="media">
                                            <figure class="media-left">
                                                <p class="image">
                                                    <img src="https://via.placeholder.com/300x300" data-demo-src="assets/img/avatars/elise.jpg" alt="">
                                                </p>
                                            </figure>
                                            <div class="media-content">
                                                <span>You are now friends with <a href="#">Elise Walker</a>. Check her <a href="#">profile</a>.</span>
                                            </div>
                                            <div class="media-right">
                                                <div class="added-icon">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-tag">
                                                        <path d="M20.59 13.41l-7.17 7.17a2 2 0 0 1-2.83 0L2 12V2h10l8.59 8.59a2 2 0 0 1 0 2.82z">
                                                        </path>
                                                        <line x1="7" y1="7" x2="7.01" y2="7"></line>
                                                    </svg>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- Friend request -->
                                        <div class="media">
                                            <figure class="media-left">
                                                <p class="image">
                                                    <img src="https://via.placeholder.com/300x300" data-demo-src="assets/img/avatars/edward.jpeg" alt="">
                                                </p>
                                            </figure>
                                            <div class="media-content">
                                                <span>You are now friends with <a href="#">Edward Mayers</a>. Check his <a href="#">profile</a>.</span>
                                            </div>
                                            <div class="media-right">
                                                <div class="added-icon">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-tag">
                                                        <path d="M20.59 13.41l-7.17 7.17a2 2 0 0 1-2.83 0L2 12V2h10l8.59 8.59a2 2 0 0 1 0 2.82z">
                                                        </path>
                                                        <line x1="7" y1="7" x2="7.01" y2="7"></line>
                                                    </svg>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="nav-drop-footer">
                                        <a href="#">Clear All</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="navbar-item is-icon drop-trigger">
                            <a class="icon-link">
                                <!--href="javascript:void(0); ">-->
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-bell">
                                    <path d="M18 8A6 6 0 0 0 6 8c0 7-3 9-3 9h18s-3-2-3-9"></path>
                                    <path d="M13.73 21a2 2 0 0 1-3.46 0"></path>
                                </svg>
                                <span class="indicator"></span>
                            </a>

                            <div class="nav-drop is-active">
                                <div class="inner">
                                    <div class="nav-drop-header">
                                        <span>Notifications</span>
                                        <a href="#">View All</a>
                                    </div>
                                    <div class="nav-drop-body is-notifications">
                                        <!-- Notification -->
                                        <div class="media">
                                            <figure class="media-left">
                                                <p class="image">
                                                    <img src="https://via.placeholder.com/300x300" data-demo-src="assets/img/avatars/david.jpg" alt="">
                                                </p>
                                            </figure>
                                            <div class="media-content">
                                                <span><a href="#">David Kim</a> commented on <a href="#">your
                                                        post</a>.</span>
                                                <span class="time">30 minutes ago</span>
                                            </div>
                                            <div class="media-right">
                                                <div class="added-icon">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-message-square">
                                                        <path d="M21 15a2 2 0 0 1-2 2H7l-4 4V5a2 2 0 0 1 2-2h14a2 2 0 0 1 2 2z">
                                                        </path>
                                                    </svg>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- Notification -->
                                        <div class="media">
                                            <figure class="media-left">
                                                <p class="image">
                                                    <img src="https://via.placeholder.com/300x300" data-demo-src="assets/img/avatars/daniel.jpg" alt="">
                                                </p>
                                            </figure>
                                            <div class="media-content">
                                                <span><a href="#">Daniel Wellington</a> liked your <a href="#">profile.</a></span>
                                                <span class="time">43 minutes ago</span>
                                            </div>
                                            <div class="media-right">
                                                <div class="added-icon">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-heart">
                                                        <path d="M20.84 4.61a5.5 5.5 0 0 0-7.78 0L12 5.67l-1.06-1.06a5.5 5.5 0 0 0-7.78 7.78l1.06 1.06L12 21.23l7.78-7.78 1.06-1.06a5.5 5.5 0 0 0 0-7.78z">
                                                        </path>
                                                    </svg>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- Notification -->
                                        <div class="media">
                                            <figure class="media-left">
                                                <p class="image">
                                                    <img src="https://via.placeholder.com/300x300" data-demo-src="assets/img/avatars/stella.jpg" alt="">
                                                </p>
                                            </figure>
                                            <div class="media-content">
                                                <span><a href="#">Stella Bergmann</a> shared a <a href="#">New video</a> on
                                                    your
                                                    wall.</span>
                                                <span class="time">Yesterday</span>
                                            </div>
                                            <div class="media-right">
                                                <div class="added-icon">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-youtube">
                                                        <path d="M22.54 6.42a2.78 2.78 0 0 0-1.94-2C18.88 4 12 4 12 4s-6.88 0-8.6.46a2.78 2.78 0 0 0-1.94 2A29 29 0 0 0 1 11.75a29 29 0 0 0 .46 5.33A2.78 2.78 0 0 0 3.4 19c1.72.46 8.6.46 8.6.46s6.88 0 8.6-.46a2.78 2.78 0 0 0 1.94-2 29 29 0 0 0 .46-5.25 29 29 0 0 0-.46-5.33z">
                                                        </path>
                                                        <polygon points="9.75 15.02 15.5 11.75 9.75 8.48 9.75 15.02">
                                                        </polygon>
                                                    </svg>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- Notification -->
                                        <div class="media">
                                            <figure class="media-left">
                                                <p class="image">
                                                    <img src="https://via.placeholder.com/300x300" data-demo-src="assets/img/avatars/elise.jpg" alt="">
                                                </p>
                                            </figure>
                                            <div class="media-content">
                                                <span><a href="#">Elise Walker</a> shared an <a href="#">Image</a> with you
                                                    an 2 other
                                                    people.</span>
                                                <span class="time">2 days ago</span>
                                            </div>
                                            <div class="media-right">
                                                <div class="added-icon">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-image">
                                                        <rect x="3" y="3" width="18" height="18" rx="2" ry="2"></rect>
                                                        <circle cx="8.5" cy="8.5" r="1.5"></circle>
                                                        <polyline points="21 15 16 10 5 21"></polyline>
                                                    </svg>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="nav-drop-footer">
                                        <a href="#">Clear All</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="navbar-item is-icon drop-trigger">
                            <a class="icon-link is-active myiconshade" href="javascript:void(0);">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-mail">
                                    <path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z">
                                    </path>
                                    <polyline points="22,6 12,13 2,6"></polyline>
                                </svg>
                                <span class="indicator"></span>
                            </a>

                            <div class="nav-drop is-active">
                                <div class="inner">
                                    <div class="nav-drop-header">
                                        <span>Messages</span>
                                        <a href="messages-inbox.html">Inbox</a>
                                    </div>
                                    <div class="nav-drop-body is-friend-requests">
                                        <!-- Message -->
                                        <div class="media">
                                            <figure class="media-left">
                                                <p class="image">
                                                    <img src="https://via.placeholder.com/150x150" data-demo-src="assets/img/avatars/nelly.png" data-user-popover="9" alt="">
                                                </p>
                                            </figure>
                                            <div class="media-content">
                                                <a href="#">Nelly Schwartz</a>
                                                <span>I think we should meet near the Starbucks so we can get...</span>
                                                <span class="time">Yesterday</span>
                                            </div>
                                            <div class="media-right is-centered">
                                                <div class="added-icon">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-message-square">
                                                        <path d="M21 15a2 2 0 0 1-2 2H7l-4 4V5a2 2 0 0 1 2-2h14a2 2 0 0 1 2 2z">
                                                        </path>
                                                    </svg>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- Message -->
                                        <div class="media">
                                            <figure class="media-left">
                                                <p class="image">
                                                    <img src="https://via.placeholder.com/150x150" data-demo-src="assets/img/avatars/edward.jpg" data-user-popover="5" alt="">
                                                </p>
                                            </figure>
                                            <div class="media-content">
                                                <a href="#">Edward Mayers</a>
                                                <span>That was a real pleasure seeing you last time we really
                                                    should...</span>
                                                <span class="time">last week</span>
                                            </div>
                                            <div class="media-right is-centered">
                                                <div class="added-icon">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-message-square">
                                                        <path d="M21 15a2 2 0 0 1-2 2H7l-4 4V5a2 2 0 0 1 2-2h14a2 2 0 0 1 2 2z">
                                                        </path>
                                                    </svg>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- Message -->
                                        <div class="media">
                                            <figure class="media-left">
                                                <p class="image">
                                                    <img src="https://via.placeholder.com/150x150" data-demo-src="assets/img/avatars/dan.jpg" data-user-popover="1" alt="">
                                                </p>
                                            </figure>
                                            <div class="media-content">
                                                <a href="#">Dan Walker</a>
                                                <span>Hey there, would it be possible to borrow your bicycle, i really
                                                    need...</span>
                                                <span class="time">Jun 03 2018</span>
                                            </div>
                                            <div class="media-right is-centered">
                                                <div class="added-icon">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-message-square">
                                                        <path d="M21 15a2 2 0 0 1-2 2H7l-4 4V5a2 2 0 0 1 2-2h14a2 2 0 0 1 2 2z">
                                                        </path>
                                                    </svg>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="nav-drop-footer">
                                        <a href="#">Clear All</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="navbar-item is-icon open-chat">
                            <a class="icon-link is-primary" href="javascript:void(0);">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-message-square">
                                    <path d="M21 15a2 2 0 0 1-2 2H7l-4 4V5a2 2 0 0 1 2-2h14a2 2 0 0 1 2 2z"></path>
                                </svg>
                                <span class="indicator"></span>
                            </a>
                        </div>

                        <div id="explorer-trigger" class="navbar-item is-icon">
                            <a class="icon-link is-primary">
                                <i class="mdi mdi-apps"></i>
                            </a>
                        </div>
                    </div>

                    <div id="account-dropdown" class="navbar-item is-account drop-trigger has-caret">
                        <div class="user-image">
                            <img src="{{ Auth::user()->avatar }}" data-demo-src="assets/img/avatars/jenna.png" alt="">
                            <span class="indicator"></span>
                        </div>

                        <div class="nav-drop is-account-dropdown">
                            <div class="inner">
                                <div class="nav-drop-header">
                                    <span class="username">{{ Auth::user()->name }}</span>
                                    <a href="profile-main.html">Profile</a>
                                </div>
                                <div class="nav-drop-body account-items">
                                    <a id="profile-link" href="profile-main.html" class="account-item">
                                        <div class="media">
                                            <div class="media-left">
                                                <div class="image">
                                                    <img src="{{ Auth::user()->avatar }}" data-demo-src="assets/img/avatars/jenna.png" alt="">
                                                </div>
                                            </div>
                                            <div class="media-content">
                                                <h3>{{ Auth::user()->name }}</h3>
                                                <small>Main account</small>
                                            </div>
                                            <div class="media-right">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-check">
                                                    <polyline points="20 6 9 17 4 12"></polyline>
                                                </svg>
                                            </div>
                                        </div>
                                    </a>
                                    <hr class="account-divider">
                                    <a href="pages-main.html" class="account-item">
                                        <div class="media">
                                            <div class="media-left">
                                                <div class="image">
                                                    <img src="https://via.placeholder.com/300x300" data-demo-src="assets/img/avatars/hanzo.svg" alt="">
                                                </div>
                                            </div>
                                            <div class="media-content">
                                                <h3>Css Ninja</h3>
                                                <small>Company page</small>
                                            </div>
                                            <div class="media-right is-hidden">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-check">
                                                    <polyline points="20 6 9 17 4 12"></polyline>
                                                </svg>
                                            </div>
                                        </div>
                                    </a>
                                    <a href="pages-main.html" class="account-item">
                                        <div class="media">
                                            <div class="media-left">
                                                <div class="image">
                                                    <img src="https://via.placeholder.com/300x300" data-demo-src="assets/img/icons/logos/fastpizza.svg" alt="">
                                                </div>
                                            </div>
                                            <div class="media-content">
                                                <h3>Fast Pizza</h3>
                                                <small>Company page</small>
                                            </div>
                                            <div class="media-right is-hidden">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-check">
                                                    <polyline points="20 6 9 17 4 12"></polyline>
                                                </svg>
                                            </div>
                                        </div>
                                    </a>
                                    <a href="pages-main.html" class="account-item">
                                        <div class="media">
                                            <div class="media-left">
                                                <div class="image">
                                                    <img src="https://via.placeholder.com/300x300" data-demo-src="assets/img/icons/logos/slicer.svg" alt="">
                                                </div>
                                            </div>
                                            <div class="media-content">
                                                <h3>Slicer</h3>
                                                <small>Company page</small>
                                            </div>
                                            <div class="media-right is-hidden">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-check">
                                                    <polyline points="20 6 9 17 4 12"></polyline>
                                                </svg>
                                            </div>
                                        </div>
                                    </a>
                                    <hr class="account-divider">
                                    <a href="options-settings.html" class="account-item">
                                        <div class="media">
                                            <div class="icon-wrap">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-settings">
                                                    <circle cx="12" cy="12" r="3"></circle>
                                                    <path d="M19.4 15a1.65 1.65 0 0 0 .33 1.82l.06.06a2 2 0 0 1 0 2.83 2 2 0 0 1-2.83 0l-.06-.06a1.65 1.65 0 0 0-1.82-.33 1.65 1.65 0 0 0-1 1.51V21a2 2 0 0 1-2 2 2 2 0 0 1-2-2v-.09A1.65 1.65 0 0 0 9 19.4a1.65 1.65 0 0 0-1.82.33l-.06.06a2 2 0 0 1-2.83 0 2 2 0 0 1 0-2.83l.06-.06a1.65 1.65 0 0 0 .33-1.82 1.65 1.65 0 0 0-1.51-1H3a2 2 0 0 1-2-2 2 2 0 0 1 2-2h.09A1.65 1.65 0 0 0 4.6 9a1.65 1.65 0 0 0-.33-1.82l-.06-.06a2 2 0 0 1 0-2.83 2 2 0 0 1 2.83 0l.06.06a1.65 1.65 0 0 0 1.82.33H9a1.65 1.65 0 0 0 1-1.51V3a2 2 0 0 1 2-2 2 2 0 0 1 2 2v.09a1.65 1.65 0 0 0 1 1.51 1.65 1.65 0 0 0 1.82-.33l.06-.06a2 2 0 0 1 2.83 0 2 2 0 0 1 0 2.83l-.06.06a1.65 1.65 0 0 0-.33 1.82V9a1.65 1.65 0 0 0 1.51 1H21a2 2 0 0 1 2 2 2 2 0 0 1-2 2h-.09a1.65 1.65 0 0 0-1.51 1z">
                                                    </path>
                                                </svg>
                                            </div>
                                            <div class="media-content">
                                                <h3>Settings</h3>
                                                <small>Access widget settings.</small>
                                            </div>
                                        </div>
                                    </a>
                                    <a class="account-item">
                                        <div class="media">
                                            <div class="icon-wrap">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-life-buoy">
                                                    <circle cx="12" cy="12" r="10"></circle>
                                                    <circle cx="12" cy="12" r="4"></circle>
                                                    <line x1="4.93" y1="4.93" x2="9.17" y2="9.17"></line>
                                                    <line x1="14.83" y1="14.83" x2="19.07" y2="19.07"></line>
                                                    <line x1="14.83" y1="9.17" x2="19.07" y2="4.93"></line>
                                                    <line x1="14.83" y1="9.17" x2="18.36" y2="5.64"></line>
                                                    <line x1="4.93" y1="19.07" x2="9.17" y2="14.83"></line>
                                                </svg>
                                            </div>
                                            <div class="media-content">
                                                <h3>Help</h3>
                                                <small>Contact our support.</small>
                                            </div>
                                        </div>
                                    </a>
                                    <a class="account-item">
                                        <div class="media">
                                            <div class="icon-wrap">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-power">
                                                    <path d="M18.36 6.64a9 9 0 1 1-12.73 0"></path>
                                                    <line x1="12" y1="2" x2="12" y2="12"></line>
                                                </svg>
                                            </div>
                                            <!-- Authentication Links -->
                                            @guest
                                            <a href="{{ route('login') }}">{{ __('Login') }}</a>
                                            @if (Route::has('register'))
                                            <a href="{{ route('register') }}">{{ __('Register') }}</a>
                                            @endif
                                            @else
                                            <!-- {{ Auth::user()->name }} -->
                                            <div href="{{ route('logout') }}" onclick="event.preventDefault();
                                document.getElementById('logout-form').submit();">
                                                <div class="media-content">
                                                    <h3>Log out</h3>
                                                    <small>Log out from your account.</small>
                                                </div>
                                            </div>
                                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                                @csrf
                                            </form>
                                            @endguest
                                        </div>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="navbar-item is-plus-menu is-hidden">
                        <a id="plus-menu" class="button action-button is-solid primary-button raised">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-plus">
                                <line x1="12" y1="5" x2="12" y2="19"></line>
                                <line x1="5" y1="12" x2="19" y2="12"></line>
                            </svg>
                        </a>
                        <div class="plus-drop">
                            <div class="drop-content">
                                <a>
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-book">
                                        <path d="M4 19.5A2.5 2.5 0 0 1 6.5 17H20"></path>
                                        <path d="M6.5 2H20v20H6.5A2.5 2.5 0 0 1 4 19.5v-15A2.5 2.5 0 0 1 6.5 2z"></path>
                                    </svg>
                                    <div class="meta">
                                        <span>Guides</span>
                                        <span>Learn everything fast</span>
                                    </div>
                                </a>
                                <a>
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-help-circle">
                                        <circle cx="12" cy="12" r="10"></circle>
                                        <path d="M9.09 9a3 3 0 0 1 5.83 1c0 2-3 3-3 3"></path>
                                        <line x1="12" y1="17" x2="12.01" y2="17"></line>
                                    </svg>
                                    <div class="meta">
                                        <span>FAQ</span>
                                        <span>Most asked questions</span>
                                    </div>
                                </a>
                                <a>
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-life-buoy">
                                        <circle cx="12" cy="12" r="10"></circle>
                                        <circle cx="12" cy="12" r="4"></circle>
                                        <line x1="4.93" y1="4.93" x2="9.17" y2="9.17"></line>
                                        <line x1="14.83" y1="14.83" x2="19.07" y2="19.07"></line>
                                        <line x1="14.83" y1="9.17" x2="19.07" y2="4.93"></line>
                                        <line x1="14.83" y1="9.17" x2="18.36" y2="5.64"></line>
                                        <line x1="4.93" y1="19.07" x2="9.17" y2="14.83"></line>
                                    </svg>
                                    <div class="meta">
                                        <span>Assistance</span>
                                        <span>Get in touch with support</span>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>









            </div>
        </div>
    </div>
    <nav class="navbar mobile-navbar is-hidden-desktop" aria-label="main navigation">
        <!-- Brand -->
        <div class="navbar-brand">
            <a class="navbar-item" href="index.html">
                <img src="assets/img/logo/friendkit.svg" alt="">
            </a>

            <div class="navbar-item is-icon drop-trigger">
                <a class="icon-link is-primary is-friends" href="javascript:void(0);">
                    <i data-feather="heart"></i>
                    <span class="indicator"></span>
                </a>

                <div class="nav-drop">
                    <div class="inner">
                        <div class="nav-drop-header">
                            <span>Friend requests</span>
                            <a href="#">Find Friends</a>
                        </div>
                        <div class="nav-drop-body is-friend-requests">
                            <!-- Friend request -->
                            <div class="media">
                                <figure class="media-left">
                                    <p class="image">
                                        <img src="https://via.placeholder.com/300x300" data-demo-src="assets/img/avatars/bobby.jpg" alt="">
                                    </p>
                                </figure>
                                <div class="media-content">
                                    <a href="#">Bobby Brown</a>
                                    <span>Najeel verwick is a common friend</span>
                                </div>
                                <div class="media-right">
                                    <button class="button icon-button is-solid grey-button raised">
                                        <i data-feather="user-plus"></i>
                                    </button>
                                    <button class="button icon-button is-solid grey-button raised">
                                        <i data-feather="user-minus"></i>
                                    </button>
                                </div>
                            </div>
                            <!-- Friend request -->
                            <div class="media">
                                <figure class="media-left">
                                    <p class="image">
                                        <img src="https://via.placeholder.com/300x300" data-demo-src="assets/img/avatars/dan.jpg" alt="">
                                    </p>
                                </figure>
                                <div class="media-content">
                                    <a href="#">Dan Walker</a>
                                    <span>You have 4 common friends</span>
                                </div>
                                <div class="media-right">
                                    <button class="button icon-button is-solid grey-button raised">
                                        <i data-feather="user-plus"></i>
                                    </button>
                                    <button class="button icon-button is-solid grey-button raised">
                                        <i data-feather="user-minus"></i>
                                    </button>
                                </div>
                            </div>
                            <!-- Friend request -->
                            <div class="media">
                                <figure class="media-left">
                                    <p class="image">
                                        <img src="https://via.placeholder.com/300x300" data-demo-src="assets/img/avatars/nelly.png" alt="">
                                    </p>
                                </figure>
                                <div class="media-content">
                                    <span>You are now friends with <a href="#">Nelly Schwartz</a>. Check her <a href="#">profile</a>.</span>
                                </div>
                                <div class="media-right">
                                    <div class="added-icon">
                                        <i data-feather="tag"></i>
                                    </div>
                                </div>
                            </div>
                            <!-- Friend request -->
                            <div class="media">
                                <figure class="media-left">
                                    <p class="image">
                                        <img src="https://via.placeholder.com/300x300" data-demo-src="assets/img/avatars/milly.jpg" alt="">
                                    </p>
                                </figure>
                                <div class="media-content">
                                    <a href="#">Milly Augustine</a>
                                    <span>You have 8 common friends</span>
                                </div>
                                <div class="media-right">
                                    <button class="button icon-button is-solid grey-button raised">
                                        <i data-feather="user-plus"></i>
                                    </button>
                                    <button class="button icon-button is-solid grey-button raised">
                                        <i data-feather="user-minus"></i>
                                    </button>
                                </div>
                            </div>
                            <!-- Friend request -->
                            <div class="media">
                                <figure class="media-left">
                                    <p class="image">
                                        <img src="https://via.placeholder.com/300x300" data-demo-src="assets/img/avatars/elise.jpg" alt="">
                                    </p>
                                </figure>
                                <div class="media-content">
                                    <span>You are now friends with <a href="#">Elise Walker</a>. Check her <a href="#">profile</a>.</span>
                                </div>
                                <div class="media-right">
                                    <div class="added-icon">
                                        <i data-feather="tag"></i>
                                    </div>
                                </div>
                            </div>
                            <!-- Friend request -->
                            <div class="media">
                                <figure class="media-left">
                                    <p class="image">
                                        <img src="https://via.placeholder.com/300x300" data-demo-src="assets/img/avatars/edward.jpeg" alt="">
                                    </p>
                                </figure>
                                <div class="media-content">
                                    <span>You are now friends with <a href="#">Edward Mayers</a>. Check his <a href="#">profile</a>.</span>
                                </div>
                                <div class="media-right">
                                    <div class="added-icon">
                                        <i data-feather="tag"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="nav-drop-footer">
                            <a href="#">Clear All</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="navbar-item is-icon drop-trigger">
                <a class="icon-link" href="javascript:void(0);">
                    <i data-feather="bell"></i>
                    <span class="indicator"></span>
                </a>

                <div class="nav-drop">
                    <div class="inner">
                        <div class="nav-drop-header">
                            <span>Notifications</span>
                            <a href="#">View All</a>
                        </div>
                        <div class="nav-drop-body is-notifications">
                            <!-- Notification -->
                            <div class="media">
                                <figure class="media-left">
                                    <p class="image">
                                        <img src="https://via.placeholder.com/300x300" data-demo-src="assets/img/avatars/david.jpg" alt="">
                                    </p>
                                </figure>
                                <div class="media-content">
                                    <span><a href="#">David Kim</a> commented on <a href="#">your post</a>.</span>
                                    <span class="time">30 minutes ago</span>
                                </div>
                                <div class="media-right">
                                    <div class="added-icon">
                                        <i data-feather="message-square"></i>
                                    </div>
                                </div>
                            </div>
                            <!-- Notification -->
                            <div class="media">
                                <figure class="media-left">
                                    <p class="image">
                                        <img src="https://via.placeholder.com/300x300" data-demo-src="assets/img/avatars/daniel.jpg" alt="">
                                    </p>
                                </figure>
                                <div class="media-content">
                                    <span><a href="#">Daniel Wellington</a> liked your <a href="#">profile.</a></span>
                                    <span class="time">43 minutes ago</span>
                                </div>
                                <div class="media-right">
                                    <div class="added-icon">
                                        <i data-feather="heart"></i>
                                    </div>
                                </div>
                            </div>
                            <!-- Notification -->
                            <div class="media">
                                <figure class="media-left">
                                    <p class="image">
                                        <img src="https://via.placeholder.com/300x300" data-demo-src="assets/img/avatars/stella.jpg" alt="">
                                    </p>
                                </figure>
                                <div class="media-content">
                                    <span><a href="#">Stella Bergmann</a> shared a <a href="#">New video</a> on your wall.</span>
                                    <span class="time">Yesterday</span>
                                </div>
                                <div class="media-right">
                                    <div class="added-icon">
                                        <i data-feather="youtube"></i>
                                    </div>
                                </div>
                            </div>
                            <!-- Notification -->
                            <div class="media">
                                <figure class="media-left">
                                    <p class="image">
                                        <img src="https://via.placeholder.com/300x300" data-demo-src="assets/img/avatars/elise.jpg" alt="">
                                    </p>
                                </figure>
                                <div class="media-content">
                                    <span><a href="#">Elise Walker</a> shared an <a href="#">Image</a> with you an 2 other people.</span>
                                    <span class="time">2 days ago</span>
                                </div>
                                <div class="media-right">
                                    <div class="added-icon">
                                        <i data-feather="image"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="nav-drop-footer">
                            <a href="#">Clear All</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="navbar-item is-icon drop-trigger">
                <a class="icon-link is-active myiconshade" href="javascript:void(0);">
                    <i data-feather="mail"></i>
                    <span class="indicator"></span>
                </a>

                <div class="nav-drop">
                    <div class="inner">
                        <div class="nav-drop-header">
                            <span>Messages</span>
                            <a href="messages-inbox.html">Inbox</a>
                        </div>
                        <div class="nav-drop-body is-friend-requests">
                            <!-- Message -->
                            <div class="media">
                                <figure class="media-left">
                                    <p class="image">
                                        <img src="https://via.placeholder.com/150x150" data-demo-src="assets/img/avatars/nelly.png" data-user-popover="9" alt="">
                                    </p>
                                </figure>
                                <div class="media-content">
                                    <a href="#">Nelly Schwartz</a>
                                    <span>I think we should meet near the Starbucks so we can get...</span>
                                    <span class="time">Yesterday</span>
                                </div>
                                <div class="media-right is-centered">
                                    <div class="added-icon">
                                        <i data-feather="message-square"></i>
                                    </div>
                                </div>
                            </div>
                            <!-- Message -->
                            <div class="media">
                                <figure class="media-left">
                                    <p class="image">
                                        <img src="https://via.placeholder.com/150x150" data-demo-src="assets/img/avatars/edward.jpg" data-user-popover="5" alt="">
                                    </p>
                                </figure>
                                <div class="media-content">
                                    <a href="#">Edward Mayers</a>
                                    <span>That was a real pleasure seeing you last time we really should...</span>
                                    <span class="time">last week</span>
                                </div>
                                <div class="media-right is-centered">
                                    <div class="added-icon">
                                        <i data-feather="message-square"></i>
                                    </div>
                                </div>
                            </div>
                            <!-- Message -->
                            <div class="media">
                                <figure class="media-left">
                                    <p class="image">
                                        <img src="https://via.placeholder.com/150x150" data-demo-src="assets/img/avatars/dan.jpg" data-user-popover="1" alt="">
                                    </p>
                                </figure>
                                <div class="media-content">
                                    <a href="#">Dan Walker</a>
                                    <span>Hey there, would it be possible to borrow your bicycle, i really need...</span>
                                    <span class="time">Jun 03 2018</span>
                                </div>
                                <div class="media-right is-centered">
                                    <div class="added-icon">
                                        <i data-feather="message-square"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="nav-drop-footer">
                            <a href="#">Clear All</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="navbar-item is-icon open-chat">
                <a class="icon-link is-primary" href="javascript:void(0);">
                    <i data-feather="message-square"></i>
                    <span class="indicator"></span>
                </a>
            </div>

            <div id="mobile-explorer-trigger" class="navbar-item is-icon">
                <a class="icon-link is-primary">
                    <i class="mdi mdi-apps"></i>
                </a>
            </div>

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
            <div class="navbar-item has-dropdown is-active">
                <div class="navbar-link">
                    <img src="{{ Auth::user()->avatar}}" data-demo-src="assets/img/avatars/jenna.png" alt="">
                    <span class="is-heading">{{ Auth::user()->name }}</span>
                </div>

                <!-- Mobile Dropdown -->
                <div class="navbar-dropdown">
                    <a href="#" class="navbar-item is-flex is-mobile-icon">
                        <span><i data-feather="user"></i>Profile</span>
                    </a>
                    <a href="#" class="navbar-item is-flex is-mobile-icon">
                        <span><i data-feather="shopping-cart"></i>Cart</span>
                        <span class="menu-badge">3</span>
                    </a>
                    <a href="#" class="navbar-item is-flex is-mobile-icon">
                        <span><i data-feather="activity"></i>Feed</span>
                        <span class="menu-badge">87</span>
                    </a>
                    <a href="#" class="navbar-item is-flex is-mobile-icon">
                        <span><i data-feather="settings"></i>Settings</span>
                    </a>
                    <a href="#" class="navbar-item is-flex is-mobile-icon">
                        <span><i data-feather="hexagon"></i>Logout</span>
                    </a>
                </div>
            </div>

            <!-- More -->
            <div class="navbar-item has-dropdown">
                <a class="navbar-link">
                    <i data-feather="life-buoy"></i>
                    <span class="is-heading">Assistance</span>
                </a>

                <!-- Mobile Dropdown -->
                <div class="navbar-dropdown">
                    <a href="#" class="navbar-item">Help</a>
                    <a href="#" class="navbar-item">Support</a>
                </div>
            </div>
        </div>
    </nav>


        <div class="view-wrapper">
            
            <!-- Container -->
            <div class="container is-custom">
            
                <!-- Profile page main wrapper -->
                <div id="profile-friends" class="view-wrap is-headless">
                    <div class="columns is-multiline no-margin">
                        <!-- Left side column -->
                        <div class="column is-paddingless">
                            <!-- Timeline Header -->
                            <!-- html/partials/pages/profile/timeline/timeline-header.html -->
                            <div class="cover-bg">
                                <img class="cover-image" src="https://via.placeholder.com/1600x460" data-demo-src="assets/img/demo/bg/4.png" alt="">
                                <div class="avatar">
                                    <img id="user-avatar" class="avatar-image" src="{{ Auth::user()->avatar }}" data-demo-src="assets/img/avatars/jenna.png" alt="">
                                    <div class="avatar-button">
                                        <i data-feather="plus"></i>
                                    </div>
                                    <div class="pop-button is-far-left has-tooltip modal-trigger" data-modal="change-profile-pic-modal" data-placement="right" data-title="Change profile picture">
                                        <a class="inner">
                                            <i data-feather="camera"></i>
                                        </a>
                                    </div>
                                    <div id="follow-pop" class="pop-button pop-shift is-left has-tooltip" data-placement="top" data-title="Subscription">
                                        <a class="inner">
                                            <i class="inactive-icon" data-feather="bell"></i>
                                            <i class="active-icon" data-feather="bell-off"></i>
                                        </a>
                                    </div>
                                    <div id="invite-pop" class="pop-button pop-shift is-center has-tooltip" data-placement="top" data-title="Relationship">
                                        <a href="#" class="inner">
                                            <i class="inactive-icon" data-feather="plus"></i>
                                            <i class="active-icon" data-feather="minus"></i>
                                        </a>
                                    </div>
                                    <div id="chat-pop" class="pop-button is-right has-tooltip" data-placement="top" data-title="Chat">
                                        <a class="inner">
                                            <i data-feather="message-circle"></i>
                                        </a>
                                    </div>
                                    <div class="pop-button is-far-right has-tooltip" data-placement="right" data-title="Send message">
                                        <a href="messages-inbox.html" class="inner">
                                            <i data-feather="mail"></i>
                                        </a>
                                    </div>
                                </div>
                                <div class="cover-overlay"></div>
                                <div class="cover-edit modal-trigger" data-modal="change-cover-modal">
                                    <i class="mdi mdi-camera"></i>
                                    <span>Edit cover image</span>
                                </div>
                                <!--/html/partials/pages/profile/timeline/dropdowns/timeline-mobile-dropdown.html-->
                                <div class="dropdown is-spaced is-right is-accent dropdown-trigger timeline-mobile-dropdown is-hidden-desktop">
                                    <div>
                                        <div class="button">
                                            <i data-feather="more-vertical"></i>
                                        </div>
                                    </div>
                                    <div class="dropdown-menu" role="menu">
                                        <div class="dropdown-content">
                                            <a href="profile-main.html" class="dropdown-item">
                                                <div class="media">
                                                    <i data-feather="activity"></i>
                                                    <div class="media-content">
                                                        <h3>Timeline</h3>
                                                        <small>Open Timeline.</small>
                                                    </div>
                                                </div>
                                            </a>
                                            <a href="profile-about.html" class="dropdown-item">
                                                <div class="media">
                                                    <i data-feather="align-right"></i>
                                                    <div class="media-content">
                                                        <h3>About</h3>
                                                        <small>See about info.</small>
                                                    </div>
                                                </div>
                                            </a>
                                            <a href="profile-friends.html" class="dropdown-item">
                                                <div class="media">
                                                    <i data-feather="heart"></i>
                                                    <div class="media-content">
                                                        <h3>Friends</h3>
                                                        <small>See friends.</small>
                                                    </div>
                                                </div>
                                            </a>
                                            <a href="profile-photos.html" class="dropdown-item">
                                                <div class="media">
                                                    <i data-feather="image"></i>
                                                    <div class="media-content">
                                                        <h3>Photos</h3>
                                                        <small>See all photos.</small>
                                                    </div>
                                                </div>
                                            </a>
                                        </div>
                                    </div>
                                </div></div>
                            
                            <div class="profile-menu is-hidden-mobile">
                                <div class="menu-start">
                                    <a href="profile-main.html" class="button has-min-width">Timeline</a>
                                    <a href="profile-about.html" class="button has-min-width">About</a>
                                </div>
                                <div class="menu-end">
                                    <a id="profile-friends-link" href="profile-friends.html" class="button has-min-width">Friends</a>
                                    <a href="profile-photos.html" class="button has-min-width">Photos</a>
                                </div>
                            </div>
                            
                            <div class="profile-subheader">
                                <div class="subheader-start is-hidden-mobile">
                                    <span>3.4K</span>
                                    <span>Friends</span>
                                </div>
                                <div class="subheader-middle">
                                    <h2>{{ Auth::user()->name }}</h2>
                                    <span>Media Influencer</span>
                                </div>
                                <div class="subheader-end is-hidden-mobile">
                                    <a class="button has-icon is-bold">
                                        <i data-feather="clock"></i>
                                        History
                                    </a>
                                </div>
                            </div>            </div>
            
                    </div>
            
                    <div class="columns">
                        <div class="column">
                            <div class="box-heading">
                                <div class="dropdown friends-dropdown is-spaced is-neutral dropdown-trigger">
                                    <div>
                                        <div class="button">
                                            <span>All Friends</span>
                                            <i data-feather="chevron-down"></i>
                                        </div>
                                    </div>
                                    <div class="dropdown-menu" role="menu">
                                        <div class="dropdown-content">
                                            <a href="#" class="dropdown-item">
                                                <div class="media">
                                                    <i data-feather="heart"></i>
                                                    <div class="media-content">
                                                        <h3>Close Friends</h3>
                                                        <small>Your closest friends list.</small>
                                                    </div>
                                                </div>
                                            </a>
                                            <a class="dropdown-item">
                                                <div class="media">
                                                    <i data-feather="bell"></i>
                                                    <div class="media-content">
                                                        <h3>Followed</h3>
                                                        <small>Friends you are following.</small>
                                                    </div>
                                                </div>
                                            </a>
                                            <a class="dropdown-item">
                                                <div class="media">
                                                    <i data-feather="coffee"></i>
                                                    <div class="media-content">
                                                        <h3>Work relations</h3>
                                                        <small>Your work relations.</small>
                                                    </div>
                                                </div>
                                            </a>
                                            <hr class="dropdown-divider">
                                            <a class="dropdown-item modal-trigger" data-modal="albums-modal"">
                                                <div class="media">
                                                <i data-feather="mail"></i>
                                                <div class="media-content">
                                                    <h3>Friend Requests</h3>
                                                    <small>Your pending friend requests.</small>
                                                </div>
                                        </div>
                                        </a>
                                    </div>
                                </div>
                            </div>
            
                            <div class="control heading-search">
                                <input type="text" class="input is-rounded" placeholder="Search Friends...">
                                <div class="search-icon">
                                    <i data-feather="search"></i>
                                </div>
                            </div>
                        </div>
            
                        <!--Friends grid-->
                        <div class="friends-grid">
                            <div class="columns is-multiline">
                                <!--Friend item-->
                                <div class="column is-3">
                                    <a class="friend-item has-text-centered">
                                        <div class="avatar-wrap">
                                            <div class="circle"></div>
                                            <div class="chat-button">
                                                <i data-feather="message-circle"></i>
                                            </div>
                                            <img src="https://via.placeholder.com/150x150" data-demo-src="assets/img/avatars/milly.jpg" data-user-popover="7" alt="">
                                        </div>
                                        <h3>Milly Augustine</h3>
                                        <p>From Rome</p>
                                    </a>
                                </div>
                                <!--Friend item-->
                                <div class="column is-3">
                                    <a class="friend-item has-text-centered">
                                        <div class="avatar-wrap">
                                            <div class="circle"></div>
                                            <div class="chat-button">
                                                <i data-feather="message-circle"></i>
                                            </div>
                                            <img src="https://via.placeholder.com/150x150" data-demo-src="assets/img/avatars/dan.jpg"
                                                data-user-popover="1" alt="">
                                        </div>
                                        <h3>Dan Walker</h3>
                                        <p>From New York</p>
                                    </a>
                                </div>
                                <!--Friend item-->
                                <div class="column is-3">
                                    <a class="friend-item has-text-centered">
                                        <div class="avatar-wrap">
                                            <div class="circle"></div>
                                            <div class="chat-button">
                                                <i data-feather="message-circle"></i>
                                            </div>
                                            <img src="https://via.placeholder.com/150x150" data-demo-src="assets/img/avatars/stella.jpg"
                                                data-user-popover="2" alt="">
                                        </div>
                                        <h3>Stella Bergmann</h3>
                                        <p>From Berlin</p>
                                    </a>
                                </div>
                                <!--Friend item-->
                                <div class="column is-3">
                                    <a class="friend-item has-text-centered">
                                        <div class="avatar-wrap">
                                            <div class="circle"></div>
                                            <div class="chat-button">
                                                <i data-feather="message-circle"></i>
                                            </div>
                                            <img src="https://via.placeholder.com/150x150" data-demo-src="assets/img/avatars/david.jpg"
                                                data-user-popover="4" alt="">
                                        </div>
                                        <h3>David Kim</h3>
                                        <p>From Chicago</p>
                                    </a>
                                </div>
                                <!--Friend item-->
                                <div class="column is-3">
                                    <a class="friend-item has-text-centered">
                                        <div class="avatar-wrap">
                                            <div class="circle"></div>
                                            <div class="chat-button">
                                                <i data-feather="message-circle"></i>
                                            </div>
                                            <img src="https://via.placeholder.com/150x150" data-demo-src="assets/img/avatars/daniel.jpg"
                                                data-user-popover="3" alt="">
                                        </div>
                                        <h3>Daniel Wellington</h3>
                                        <p>From London</p>
                                    </a>
                                </div>
                                <!--Friend item-->
                                <div class="column is-3">
                                    <a class="friend-item has-text-centered">
                                        <div class="avatar-wrap">
                                            <div class="circle"></div>
                                            <div class="chat-button">
                                                <i data-feather="message-circle"></i>
                                            </div>
                                            <img src="https://via.placeholder.com/150x150" data-demo-src="assets/img/avatars/nelly.png"
                                                data-user-popover="9" alt="">
                                        </div>
                                        <h3>Nelly Schwartz</h3>
                                        <p>From Melbourne</p>
                                    </a>
                                </div>
                                <!--Friend item-->
                                <div class="column is-3">
                                    <a class="friend-item has-text-centered">
                                        <div class="avatar-wrap">
                                            <div class="circle"></div>
                                            <div class="chat-button">
                                                <i data-feather="message-circle"></i>
                                            </div>
                                            <img src="https://via.placeholder.com/150x150" data-demo-src="assets/img/avatars/rolf.jpg"
                                                data-user-popover="13" alt="">
                                        </div>
                                        <h3>Rolf Krupp</h3>
                                        <p>From Berlin</p>
                                    </a>
                                </div>
                                <!--Friend item-->
                                <div class="column is-3">
                                    <a class="friend-item has-text-centered">
                                        <div class="avatar-wrap">
                                            <div class="circle"></div>
                                            <div class="chat-button">
                                                <i data-feather="message-circle"></i>
                                            </div>
                                            <img src="https://via.placeholder.com/150x150" data-demo-src="assets/img/avatars/brian.jpg"
                                                data-user-popover="19" alt="">
                                        </div>
                                        <h3>Brian Stevenson</h3>
                                        <p>From San Diego</p>
                                    </a>
                                </div>
                                <!--Friend item-->
                                <div class="column is-3">
                                    <a class="friend-item has-text-centered">
                                        <div class="avatar-wrap">
                                            <div class="circle"></div>
                                            <div class="chat-button">
                                                <i data-feather="message-circle"></i>
                                            </div>
                                            <img src="https://via.placeholder.com/150x150" data-demo-src="assets/img/avatars/bobby.jpg"
                                                data-user-popover="8" alt="">
                                        </div>
                                        <h3>Bobby Brown</h3>
                                        <p>From Paris</p>
                                    </a>
                                </div>
                                <!--Friend item-->
                                <div class="column is-3">
                                    <a class="friend-item has-text-centered">
                                        <div class="avatar-wrap">
                                            <div class="circle"></div>
                                            <div class="chat-button">
                                                <i data-feather="message-circle"></i>
                                            </div>
                                            <img src="https://via.placeholder.com/150x150" data-demo-src="assets/img/avatars/azzouz.jpg"
                                                data-user-popover="20" alt="">
                                        </div>
                                        <h3>Azzouz El Paytoun</h3>
                                        <p>From Montreal</p>
                                    </a>
                                </div>
                                <!--Friend item-->
                                <div class="column is-3">
                                    <a class="friend-item has-text-centered">
                                        <div class="avatar-wrap">
                                            <div class="circle"></div>
                                            <div class="chat-button">
                                                <i data-feather="message-circle"></i>
                                            </div>
                                            <img src="https://via.placeholder.com/150x150" data-demo-src="assets/img/avatars/elise.jpg"
                                                data-user-popover="6" alt="">
                                        </div>
                                        <h3>Elise Walker</h3>
                                        <p>From London</p>
                                    </a>
                                </div>
                                <!--Friend item-->
                                <div class="column is-3">
                                    <a class="friend-item has-text-centered">
                                        <div class="avatar-wrap">
                                            <div class="circle"></div>
                                            <div class="chat-button">
                                                <i data-feather="message-circle"></i>
                                            </div>
                                            <img src="https://via.placeholder.com/150x150" data-demo-src="assets/img/avatars/aline.jpg"
                                                data-user-popover="16" alt="">
                                        </div>
                                        <h3>Aline Cambell</h3>
                                        <p>From Seattle</p>
                                    </a>
                                </div>
                                <!--Friend item-->
                                <div class="column is-3">
                                    <a class="friend-item has-text-centered">
                                        <div class="avatar-wrap">
                                            <div class="circle"></div>
                                            <div class="chat-button">
                                                <i data-feather="message-circle"></i>
                                            </div>
                                            <img src="https://via.placeholder.com/150x150" data-demo-src="assets/img/avatars/mike.jpg"
                                                data-user-popover="12" alt="">
                                        </div>
                                        <h3>Mike Lasalle</h3>
                                        <p>From Toronto</p>
                                    </a>
                                </div>
                                <!--Friend item-->
                                <div class="column is-3">
                                    <a class="friend-item has-text-centered">
                                        <div class="avatar-wrap">
                                            <div class="circle"></div>
                                            <div class="chat-button">
                                                <i data-feather="message-circle"></i>
                                            </div>
                                            <img src="https://via.placeholder.com/150x150" data-demo-src="assets/img/avatars/michael.jpg"
                                                data-user-popover="17" alt="">
                                        </div>
                                        <h3>Mike Donovan</h3>
                                        <p>From San Francisco</p>
                                    </a>
                                </div>
                                <!--Friend item-->
                                <div class="column is-3">
                                    <a class="friend-item has-text-centered">
                                        <div class="avatar-wrap">
                                            <div class="circle"></div>
                                            <div class="chat-button">
                                                <i data-feather="message-circle"></i>
                                            </div>
                                            <img src="https://via.placeholder.com/150x150" data-demo-src="assets/img/avatars/lana.jpg"
                                                data-user-popover="10" alt="">
                                        </div>
                                        <h3>Lana Henrikssen</h3>
                                        <p>From Helsinki</p>
                                    </a>
                                </div>
                                <!--Friend item-->
                                <div class="column is-3">
                                    <a class="friend-item has-text-centered">
                                        <div class="avatar-wrap">
                                            <div class="circle"></div>
                                            <div class="chat-button">
                                                <i data-feather="message-circle"></i>
                                            </div>
                                            <img src="https://via.placeholder.com/150x150" data-demo-src="assets/img/avatars/leana.jpg"
                                                data-user-popover="15" alt="">
                                        </div>
                                        <h3>Leana Marks</h3>
                                        <p>From Nashville</p>
                                    </a>
                                </div>
                                <!--Friend item-->
                                <div class="column is-3">
                                    <a class="friend-item has-text-centered">
                                        <div class="avatar-wrap">
                                            <div class="circle"></div>
                                            <div class="chat-button">
                                                <i data-feather="message-circle"></i>
                                            </div>
                                            <img src="https://via.placeholder.com/150x150" data-demo-src="assets/img/avatars/ken.jpg"
                                                data-user-popover="14" alt="">
                                        </div>
                                        <h3>Ken Rogers</h3>
                                        <p>From Chicago</p>
                                    </a>
                                </div>
                                <!--Friend item-->
                                <div class="column is-3">
                                    <a class="friend-item has-text-centered">
                                        <div class="avatar-wrap">
                                            <div class="circle"></div>
                                            <div class="chat-button">
                                                <i data-feather="message-circle"></i>
                                            </div>
                                            <img src="https://via.placeholder.com/150x150" data-demo-src="assets/img/avatars/gaelle.jpg"
                                                data-user-popover="11" alt="">
                                        </div>
                                        <h3>Gaelle Morris</h3>
                                        <p>From Lyon</p>
                                    </a>
                                </div>
                                <!--Friend item-->
                                <div class="column is-3">
                                    <a class="friend-item has-text-centered">
                                        <div class="avatar-wrap">
                                            <div class="circle"></div>
                                            <div class="chat-button">
                                                <i data-feather="message-circle"></i>
                                            </div>
                                            <img src="https://via.placeholder.com/150x150" data-demo-src="assets/img/avatars/edward.jpg"
                                                data-user-popover="5" alt="">
                                        </div>
                                        <h3>Edward Mayers</h3>
                                        <p>From Dublin</p>
                                    </a>
                                </div>
                                <!--Friend item-->
                                <div class="column is-3">
                                    <a class="friend-item has-text-centered">
                                        <div class="avatar-wrap">
                                            <div class="circle"></div>
                                            <div class="chat-button">
                                                <i data-feather="message-circle"></i>
                                            </div>
                                            <img src="https://via.placeholder.com/150x150" data-demo-src="assets/img/avatars/george.jpg"
                                                data-user-popover="18" alt="">
                                        </div>
                                        <h3>George A. Romero</h3>
                                        <p>From Los Angeles</p>
                                    </a>
                                </div>
                            </div>
                        </div>
            
                        <!-- Load more photos -->
                        <div class=" load-more-wrap has-text-centered">
                            <a href="#" class="load-more-button">Load More</a>
                        </div>
                    </div>
                </div>
            </div>
            
            <!-- Change cover image modal -->
            <!--html/partials/pages/profile/timeline/modals/change-cover-modal.html-->
            <div id="change-cover-modal" class="modal change-cover-modal is-medium has-light-bg">
                <div class="modal-background"></div>
                <div class="modal-content">
            
                    <div class="card">
                        <div class="card-heading">
                            <h3>Update Cover</h3>
                            <!-- Close X button -->
                            <div class="close-wrap">
                                <span class="close-modal">
                                    <i data-feather="x"></i>
                                </span>
                            </div>
                        </div>
                        <div class="card-body">
                            <!-- Placeholder -->
                            <div class="selection-placeholder">
                                <div class="columns">
                                    <div class="column is-6">
                                        <!-- Selection box -->
                                        <div class="selection-box modal-trigger" data-modal="upload-crop-cover-modal">
                                            <div class="box-content">
                                                <img src="assets/img/illustrations/profile/upload-cover.svg" alt="">
                                                <div class="box-text">
                                                    <span>Upload</span>
                                                    <span>From your computer</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="column is-6">
                                        <!-- Selection box -->
                                        <div class="selection-box modal-trigger" data-modal="user-photos-modal">
                                            <div class="box-content">
                                                <img src="assets/img/illustrations/profile/change-cover.svg" alt="">
                                                <div class="box-text">
                                                    <span>Choose</span>
                                                    <span>From your photos</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
            
                </div>
            </div>
            <!-- Change profile pic modal -->
            <!--html/partials/pages/profile/timeline/modals/change-profile-pic-modal.html-->
            <div id="change-profile-pic-modal" class="modal change-profile-pic-modal is-medium has-light-bg">
                <div class="modal-background"></div>
                <div class="modal-content">
            
                    <div class="card">
                        <div class="card-heading">
                            <h3>Update Profile Picture</h3>
                            <!-- Close X button -->
                            <div class="close-wrap">
                                <span class="close-modal">
                                    <i data-feather="x"></i>
                                </span>
                            </div>
                        </div>
                        <div class="card-body">
                            <!-- Placeholder -->
                            <div class="selection-placeholder">
                                <div class="columns">
                                    <div class="column is-6">
                                        <!-- Selection box -->
                                        <div class="selection-box modal-trigger" data-modal="upload-crop-profile-modal">
                                            <div class="box-content">
                                                <img src="assets/img/illustrations/profile/change-profile.svg" alt="">
                                                <div class="box-text">
                                                    <span>Upload</span>
                                                    <span>From your computer</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="column is-6">
                                        <!-- Selection box -->
                                        <div class="selection-box modal-trigger" data-modal="user-photos-modal">
                                            <div class="box-content">
                                                <img src="assets/img/illustrations/profile/upload-profile.svg" alt="">
                                                <div class="box-text">
                                                    <span>Choose</span>
                                                    <span>From your photos</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
            
                </div>
            </div>
            <!-- User photos and albums -->
            <!--html/partials/pages/profile/timeline/modals/user-photos-modal.html-->
            <div id="user-photos-modal" class="modal user-photos-modal is-medium has-light-bg">
                <div class="modal-background"></div>
                <div class="modal-content">
                    <!-- Card -->
                    <div class="card">
                        <div class="card-heading">
                            <h3>Choose a picture</h3>
                            <!-- Close X button -->
                            <div class="close-wrap">
                                <span class="close-modal">
                                    <i data-feather="x"></i>
                                </span>
                            </div>
                        </div>
                        <!-- Card body -->
                        <div class="card-body">
                            <!-- Tabs -->
                            <div class="nav-tabs-wrapper">
                                <div class="tabs">
                                    <ul class="is-faded">
                                        <li class="is-active" data-tab="recent-photos"><a>Recent</a></li>
                                        <li data-tab="all-photos"><a>Photos</a></li>
                                        <li data-tab="photo-albums"><a>Albums</a></li>
                                    </ul>
                                </div>
            
                                <!-- Recent Photos -->
                                <div id="recent-photos" class="tab-content has-slimscroll-md is-active">
                                    <!-- Grid -->
                                    <div class="image-grid">
                                        <div class="columns is-multiline">
                                            <!-- Grid item -->
                                            <div class="column is-4">
                                                <div class="grid-image">
                                                    <input type="radio" name="selected_photos">
                                                    <div class="inner">
                                                        <img src="https://via.placeholder.com/1600x900" data-demo-src="assets/img/demo/unsplash/3.jpg" alt="">
                                                        <div class="inner-overlay"></div>
                                                        <div class="indicator gelatine">
                                                            <i data-feather="check"></i>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- Grid item -->
                                            <div class="column is-4">
                                                <div class="grid-image">
                                                    <input type="radio" name="selected_photos">
                                                    <div class="inner">
                                                        <img src="https://via.placeholder.com/1600x900" data-demo-src="assets/img/demo/unsplash/4.jpg" alt="">
                                                        <div class="inner-overlay"></div>
                                                        <div class="indicator gelatine">
                                                            <i data-feather="check"></i>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- Grid item -->
                                            <div class="column is-4">
                                                <div class="grid-image">
                                                    <input type="radio" name="selected_photos">
                                                    <div class="inner">
                                                        <img src="https://via.placeholder.com/1600x900" data-demo-src="assets/img/demo/unsplash/9.jpg" alt="">
                                                        <div class="inner-overlay"></div>
                                                        <div class="indicator gelatine">
                                                            <i data-feather="check"></i>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- Grid item -->
                                            <div class="column is-4">
                                                <div class="grid-image">
                                                    <input type="radio" name="selected_photos">
                                                    <div class="inner">
                                                        <img src="https://via.placeholder.com/1600x900" data-demo-src="assets/img/demo/unsplash/2.jpg" alt="">
                                                        <div class="inner-overlay"></div>
                                                        <div class="indicator gelatine">
                                                            <i data-feather="check"></i>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- Grid item -->
                                            <div class="column is-4">
                                                <div class="grid-image">
                                                    <input type="radio" name="selected_photos">
                                                    <div class="inner">
                                                        <img src="https://via.placeholder.com/1600x900" data-demo-src="assets/img/demo/unsplash/13.jpg" alt="">
                                                        <div class="inner-overlay"></div>
                                                        <div class="indicator gelatine">
                                                            <i data-feather="check"></i>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- Grid item -->
                                            <div class="column is-4">
                                                <div class="grid-image">
                                                    <input type="radio" name="selected_photos">
                                                    <div class="inner">
                                                        <img src="https://via.placeholder.com/1600x900" data-demo-src="assets/img/demo/unsplash/11.jpg" alt="">
                                                        <div class="inner-overlay"></div>
                                                        <div class="indicator gelatine">
                                                            <i data-feather="check"></i>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- Grid item -->
                                            <div class="column is-4">
                                                <div class="grid-image">
                                                    <input type="radio" name="selected_photos">
                                                    <div class="inner">
                                                        <img src="https://via.placeholder.com/1600x900" data-demo-src="assets/img/demo/unsplash/17.jpg" alt="">
                                                        <div class="inner-overlay"></div>
                                                        <div class="indicator gelatine">
                                                            <i data-feather="check"></i>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- Grid item -->
                                            <div class="column is-4">
                                                <div class="grid-image">
                                                    <input type="radio" name="selected_photos">
                                                    <div class="inner">
                                                        <img src="https://via.placeholder.com/1600x900" data-demo-src="assets/img/demo/unsplash/22.jpg" alt="">
                                                        <div class="inner-overlay"></div>
                                                        <div class="indicator gelatine">
                                                            <i data-feather="check"></i>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- Grid item -->
                                            <div class="column is-4">
                                                <div class="grid-image">
                                                    <input type="radio" name="selected_photos">
                                                    <div class="inner">
                                                        <img src="https://via.placeholder.com/1600x900" data-demo-src="assets/img/demo/unsplash/8.jpg" alt="">
                                                        <div class="inner-overlay"></div>
                                                        <div class="indicator gelatine">
                                                            <i data-feather="check"></i>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- Grid item -->
                                            <div class="column is-4">
                                                <div class="grid-image">
                                                    <input type="radio" name="selected_photos">
                                                    <div class="inner">
                                                        <img src="https://via.placeholder.com/1600x900" data-demo-src="assets/img/demo/unsplash/18.jpg" alt="">
                                                        <div class="inner-overlay"></div>
                                                        <div class="indicator gelatine">
                                                            <i data-feather="check"></i>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- Grid item -->
                                            <div class="column is-4">
                                                <div class="grid-image">
                                                    <input type="radio" name="selected_photos">
                                                    <div class="inner">
                                                        <img src="https://via.placeholder.com/1600x900" data-demo-src="assets/img/demo/unsplash/20.jpg" alt="">
                                                        <div class="inner-overlay"></div>
                                                        <div class="indicator gelatine">
                                                            <i data-feather="check"></i>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- Grid item -->
                                            <div class="column is-4">
                                                <div class="grid-image">
                                                    <input type="radio" name="selected_photos">
                                                    <div class="inner">
                                                        <img src="https://via.placeholder.com/1600x900" data-demo-src="assets/img/demo/unsplash/21.jpg" alt="">
                                                        <div class="inner-overlay"></div>
                                                        <div class="indicator gelatine">
                                                            <i data-feather="check"></i>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
            
                                <!-- All photos -->
                                <div id="all-photos" class="tab-content has-slimscroll-md">
                                    <!-- Grid -->
                                    <div class="image-grid">
                                        <div class="columns is-multiline">
                                            <!-- Grid item -->
                                            <div class="column is-4">
                                                <div class="grid-image">
                                                    <input type="radio" name="selected_photos">
                                                    <div class="inner">
                                                        <img src="https://via.placeholder.com/1600x900" data-demo-src="assets/img/demo/unsplash/19.jpg" alt="">
                                                        <div class="inner-overlay"></div>
                                                        <div class="indicator gelatine">
                                                            <i data-feather="check"></i>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- Grid item -->
                                            <div class="column is-4">
                                                <div class="grid-image">
                                                    <input type="radio" name="selected_photos">
                                                    <div class="inner">
                                                        <img src="https://via.placeholder.com/1600x900" data-demo-src="assets/img/demo/unsplash/25.jpg" alt="">
                                                        <div class="inner-overlay"></div>
                                                        <div class="indicator gelatine">
                                                            <i data-feather="check"></i>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- Grid item -->
                                            <div class="column is-4">
                                                <div class="grid-image">
                                                    <input type="radio" name="selected_photos">
                                                    <div class="inner">
                                                        <img src="https://via.placeholder.com/1600x900" data-demo-src="assets/img/demo/unsplash/23.jpg" alt="">
                                                        <div class="inner-overlay"></div>
                                                        <div class="indicator gelatine">
                                                            <i data-feather="check"></i>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- Grid item -->
                                            <div class="column is-4">
                                                <div class="grid-image">
                                                    <input type="radio" name="selected_photos">
                                                    <div class="inner">
                                                        <img src="https://via.placeholder.com/1600x900" data-demo-src="assets/img/demo/unsplash/28.jpg" alt="">
                                                        <div class="inner-overlay"></div>
                                                        <div class="indicator gelatine">
                                                            <i data-feather="check"></i>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- Grid item -->
                                            <div class="column is-4">
                                                <div class="grid-image">
                                                    <input type="radio" name="selected_photos">
                                                    <div class="inner">
                                                        <img src="https://via.placeholder.com/1600x900" data-demo-src="assets/img/demo/unsplash/34.jpg" alt="">
                                                        <div class="inner-overlay"></div>
                                                        <div class="indicator gelatine">
                                                            <i data-feather="check"></i>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- Grid item -->
                                            <div class="column is-4">
                                                <div class="grid-image">
                                                    <input type="radio" name="selected_photos">
                                                    <div class="inner">
                                                        <img src="https://via.placeholder.com/1600x900" data-demo-src="assets/img/demo/unsplash/27.jpg" alt="">
                                                        <div class="inner-overlay"></div>
                                                        <div class="indicator gelatine">
                                                            <i data-feather="check"></i>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- Grid item -->
                                            <div class="column is-4">
                                                <div class="grid-image">
                                                    <input type="radio" name="selected_photos">
                                                    <div class="inner">
                                                        <img src="https://via.placeholder.com/1600x900" data-demo-src="assets/img/demo/unsplash/18.jpg" alt="">
                                                        <div class="inner-overlay"></div>
                                                        <div class="indicator gelatine">
                                                            <i data-feather="check"></i>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- Grid item -->
                                            <div class="column is-4">
                                                <div class="grid-image">
                                                    <input type="radio" name="selected_photos">
                                                    <div class="inner">
                                                        <img src="https://via.placeholder.com/1600x900" data-demo-src="assets/img/demo/unsplash/30.jpg" alt="">
                                                        <div class="inner-overlay"></div>
                                                        <div class="indicator gelatine">
                                                            <i data-feather="check"></i>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- Grid item -->
                                            <div class="column is-4">
                                                <div class="grid-image">
                                                    <input type="radio" name="selected_photos">
                                                    <div class="inner">
                                                        <img src="https://via.placeholder.com/1600x900" data-demo-src="assets/img/demo/unsplash/26.jpg" alt="">
                                                        <div class="inner-overlay"></div>
                                                        <div class="indicator gelatine">
                                                            <i data-feather="check"></i>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- Grid item -->
                                            <div class="column is-4">
                                                <div class="grid-image">
                                                    <input type="radio" name="selected_photos">
                                                    <div class="inner">
                                                        <img src="https://via.placeholder.com/1600x900" data-demo-src="assets/img/demo/unsplash/29.jpg" alt="">
                                                        <div class="inner-overlay"></div>
                                                        <div class="indicator gelatine">
                                                            <i data-feather="check"></i>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- Grid item -->
                                            <div class="column is-4">
                                                <div class="grid-image">
                                                    <input type="radio" name="selected_photos">
                                                    <div class="inner">
                                                        <img src="https://via.placeholder.com/1600x900" data-demo-src="assets/img/demo/unsplash/20.jpg" alt="">
                                                        <div class="inner-overlay"></div>
                                                        <div class="indicator gelatine">
                                                            <i data-feather="check"></i>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- Grid item -->
                                            <div class="column is-4">
                                                <div class="grid-image">
                                                    <input type="radio" name="selected_photos">
                                                    <div class="inner">
                                                        <img src="https://via.placeholder.com/1600x900" data-demo-src="assets/img/demo/unsplash/17.jpg" alt="">
                                                        <div class="inner-overlay"></div>
                                                        <div class="indicator gelatine">
                                                            <i data-feather="check"></i>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- Grid item -->
                                            <div class="column is-4">
                                                <div class="grid-image">
                                                    <input type="radio" name="selected_photos">
                                                    <div class="inner">
                                                        <img src="https://via.placeholder.com/1600x900" data-demo-src="assets/img/demo/unsplash/11.jpg" alt="">
                                                        <div class="inner-overlay"></div>
                                                        <div class="indicator gelatine">
                                                            <i data-feather="check"></i>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- Grid item -->
                                            <div class="column is-4">
                                                <div class="grid-image">
                                                    <input type="radio" name="selected_photos">
                                                    <div class="inner">
                                                        <img src="https://via.placeholder.com/1600x900" data-demo-src="assets/img/demo/unsplash/24.jpg" alt="">
                                                        <div class="inner-overlay"></div>
                                                        <div class="indicator gelatine">
                                                            <i data-feather="check"></i>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- Grid item -->
                                            <div class="column is-4">
                                                <div class="grid-image">
                                                    <input type="radio" name="selected_photos">
                                                    <div class="inner">
                                                        <img src="https://via.placeholder.com/1600x900" data-demo-src="assets/img/demo/unsplash/32.jpg" alt="">
                                                        <div class="inner-overlay"></div>
                                                        <div class="indicator gelatine">
                                                            <i data-feather="check"></i>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- Grid item -->
                                            <div class="column is-4">
                                                <div class="grid-image">
                                                    <input type="radio" name="selected_photos">
                                                    <div class="inner">
                                                        <img src="https://via.placeholder.com/1600x900" data-demo-src="assets/img/demo/unsplash/31.jpg" alt="">
                                                        <div class="inner-overlay"></div>
                                                        <div class="indicator gelatine">
                                                            <i data-feather="check"></i>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- Grid item -->
                                            <div class="column is-4">
                                                <div class="grid-image">
                                                    <input type="radio" name="selected_photos">
                                                    <div class="inner">
                                                        <img src="https://via.placeholder.com/1600x900" data-demo-src="assets/img/demo/unsplash/33.jpg" alt="">
                                                        <div class="inner-overlay"></div>
                                                        <div class="indicator gelatine">
                                                            <i data-feather="check"></i>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- Grid item -->
                                            <div class="column is-4">
                                                <div class="grid-image">
                                                    <input type="radio" name="selected_photos">
                                                    <div class="inner">
                                                        <img src="https://via.placeholder.com/1600x900" data-demo-src="assets/img/demo/unsplash/35.jpg" alt="">
                                                        <div class="inner-overlay"></div>
                                                        <div class="indicator gelatine">
                                                            <i data-feather="check"></i>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
            
                                    <!-- Load more images -->
                                    <div class=" load-more-wrap has-text-centered">
                                        <a href="#" class="load-more-button">Load More</a>
                                    </div>
                                    <!-- /Load more images -->
                                </div>
            
                                <!-- Albums -->
                                <div id="photo-albums" class="tab-content has-slimscroll-md">
                                    <!-- Grid -->
                                    <div class="albums-grid">
                                        <div class="columns is-multiline">
                                            <!-- Album item -->
                                            <div class="column is-6">
                                                <div class="album-wrapper" data-album="album-photos-1">
                                                    <div class="album-image">
                                                        <img src="https://via.placeholder.com/1600x900" data-demo-src="assets/img/demo/unsplash/35.jpg" alt="">
                                                    </div>
                                                    <div class="album-meta">
                                                        <div class="album-title">
                                                            <span>Design and Colors</span>
                                                            <span>Added on sep 06 2018</span>
                                                        </div>
                                                        <div class="image-count">
                                                            <i data-feather="image"></i>
                                                            <span>8</span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- Album item -->
                                            <div class="column is-6">
                                                <div class="album-wrapper" data-album="album-photos-2">
                                                    <div class="album-image">
                                                        <img src="https://via.placeholder.com/1600x900" data-demo-src="assets/img/demo/unsplash/19.jpg" alt="">
                                                    </div>
                                                    <div class="album-meta">
                                                        <div class="album-title">
                                                            <span>Friends and Family</span>
                                                            <span>Added on jun 10 2016</span>
                                                        </div>
                                                        <div class="image-count">
                                                            <i data-feather="image"></i>
                                                            <span>29</span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- Album item -->
                                            <div class="column is-6">
                                                <div class="album-wrapper" data-album="album-photos-3">
                                                    <div class="album-image">
                                                        <img src="https://via.placeholder.com/1600x900" data-demo-src="assets/img/demo/unsplash/4.jpg" alt="">
                                                    </div>
                                                    <div class="album-meta">
                                                        <div class="album-title">
                                                            <span>Trips and Travel</span>
                                                            <span>Added on feb 14 2017</span>
                                                        </div>
                                                        <div class="image-count">
                                                            <i data-feather="image"></i>
                                                            <span>12</span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- Album item -->
                                            <div class="column is-6">
                                                <div class="album-wrapper" data-album="album-photos-4">
                                                    <div class="album-image">
                                                        <img src="https://via.placeholder.com/1600x900" data-demo-src="assets/img/demo/unsplash/3.jpg" alt="">
                                                    </div>
                                                    <div class="album-meta">
                                                        <div class="album-title">
                                                            <span>Summer 2017</span>
                                                            <span>Added on aug 23 2017</span>
                                                        </div>
                                                        <div class="image-count">
                                                            <i data-feather="image"></i>
                                                            <span>32</span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- Album item -->
                                            <div class="column is-6">
                                                <div class="album-wrapper" data-album="album-photos-5">
                                                    <div class="album-image">
                                                        <img src="https://via.placeholder.com/1600x900" data-demo-src="assets/img/demo/unsplash/20.jpg" alt="">
                                                    </div>
                                                    <div class="album-meta">
                                                        <div class="album-title">
                                                            <span>Winter 2017</span>
                                                            <span>Added on jan 07 2017</span>
                                                        </div>
                                                        <div class="image-count">
                                                            <i data-feather="image"></i>
                                                            <span>7</span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- Album item -->
                                            <div class="column is-6">
                                                <div class="album-wrapper" data-album="album-photos-6">
                                                    <div class="album-image">
                                                        <img src="https://via.placeholder.com/1600x900" data-demo-src="assets/img/demo/unsplash/2.jpg" alt="">
                                                    </div>
                                                    <div class="album-meta">
                                                        <div class="album-title">
                                                            <span>Thanksgiving 2017</span>
                                                            <span>Added on nov 30 2017</span>
                                                        </div>
                                                        <div class="image-count">
                                                            <i data-feather="image"></i>
                                                            <span>6</span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
            
                                    <!-- Hidden Grid | Design and colors -->
                                    <div id="album-photos-1" class="album-image-grid is-hidden">
                                        <div class="album-info">
                                            <h4>Design and Colors | <small>8 photo(s)</small></h4>
                                            <a class="close-nested-photos">Go Back</a>
                                        </div>
                                        <div class="columns is-multiline">
                                            <!-- Grid item -->
                                            <div class="column is-4">
                                                <div class="grid-image">
                                                    <input type="radio" name="selected_photos">
                                                    <div class="inner">
                                                        <img src="https://via.placeholder.com/1600x900" data-demo-src="assets/img/demo/unsplash/35.jpg" alt="">
                                                        <div class="inner-overlay"></div>
                                                        <div class="indicator gelatine">
                                                            <i data-feather="check"></i>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- Grid item -->
                                            <div class="column is-4">
                                                <div class="grid-image">
                                                    <input type="radio" name="selected_photos">
                                                    <div class="inner">
                                                        <img src="https://via.placeholder.com/1600x900" data-demo-src="assets/img/demo/unsplash/17.jpg" alt="">
                                                        <div class="inner-overlay"></div>
                                                        <div class="indicator gelatine">
                                                            <i data-feather="check"></i>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- Grid item -->
                                            <div class="column is-4">
                                                <div class="grid-image">
                                                    <input type="radio" name="selected_photos">
                                                    <div class="inner">
                                                        <img src="https://via.placeholder.com/1600x900" data-demo-src="assets/img/demo/unsplash/30.jpg" alt="">
                                                        <div class="inner-overlay"></div>
                                                        <div class="indicator gelatine">
                                                            <i data-feather="check"></i>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- Grid item -->
                                            <div class="column is-4">
                                                <div class="grid-image">
                                                    <input type="radio" name="selected_photos">
                                                    <div class="inner">
                                                        <img src="https://via.placeholder.com/1600x900" data-demo-src="assets/img/demo/unsplash/28.jpg" alt="">
                                                        <div class="inner-overlay"></div>
                                                        <div class="indicator gelatine">
                                                            <i data-feather="check"></i>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- Grid item -->
                                            <div class="column is-4">
                                                <div class="grid-image">
                                                    <input type="radio" name="selected_photos">
                                                    <div class="inner">
                                                        <img src="https://via.placeholder.com/1600x900" data-demo-src="assets/img/demo/unsplash/32.jpg" alt="">
                                                        <div class="inner-overlay"></div>
                                                        <div class="indicator gelatine">
                                                            <i data-feather="check"></i>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- Grid item -->
                                            <div class="column is-4">
                                                <div class="grid-image">
                                                    <input type="radio" name="selected_photos">
                                                    <div class="inner">
                                                        <img src="https://via.placeholder.com/1600x900" data-demo-src="assets/img/demo/unsplash/27.jpg" alt="">
                                                        <div class="inner-overlay"></div>
                                                        <div class="indicator gelatine">
                                                            <i data-feather="check"></i>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- Grid item -->
                                            <div class="column is-4">
                                                <div class="grid-image">
                                                    <input type="radio" name="selected_photos">
                                                    <div class="inner">
                                                        <img src="https://via.placeholder.com/1600x900" data-demo-src="assets/img/demo/unsplash/18.jpg" alt="">
                                                        <div class="inner-overlay"></div>
                                                        <div class="indicator gelatine">
                                                            <i data-feather="check"></i>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- Grid item -->
                                            <div class="column is-4">
                                                <div class="grid-image">
                                                    <input type="radio" name="selected_photos">
                                                    <div class="inner">
                                                        <img src="https://via.placeholder.com/1600x900" data-demo-src="assets/img/demo/unsplash/26.jpg" alt="">
                                                        <div class="inner-overlay"></div>
                                                        <div class="indicator gelatine">
                                                            <i data-feather="check"></i>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
            
                                        <!-- Load more images -->
                                        <div class=" load-more-wrap has-text-centered">
                                            <a href="#" class="load-more-button">Load More</a>
                                        </div>
                                        <!-- /Load more images -->
                                    </div>
            
                                    <!-- Hidden Grid | Friends and Family -->
                                    <div id="album-photos-2" class="album-image-grid is-hidden">
                                        <div class="album-info">
                                            <h4>Friends and Family | <small>29 photo(s)</small></h4>
                                            <a class="close-nested-photos">Go Back</a>
                                        </div>
                                        <div class="columns is-multiline">
                                            <!-- Grid item -->
                                            <div class="column is-4">
                                                <div class="grid-image">
                                                    <input type="radio" name="selected_photos">
                                                    <div class="inner">
                                                        <img src="https://via.placeholder.com/1600x900" data-demo-src="assets/img/demo/unsplash/23.jpg" alt="">
                                                        <div class="inner-overlay"></div>
                                                        <div class="indicator gelatine">
                                                            <i data-feather="check"></i>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- Grid item -->
                                            <div class="column is-4">
                                                <div class="grid-image">
                                                    <input type="radio" name="selected_photos">
                                                    <div class="inner">
                                                        <img src="https://via.placeholder.com/1600x900" data-demo-src="assets/img/demo/unsplash/22.jpg" alt="">
                                                        <div class="inner-overlay"></div>
                                                        <div class="indicator gelatine">
                                                            <i data-feather="check"></i>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- Grid item -->
                                            <div class="column is-4">
                                                <div class="grid-image">
                                                    <input type="radio" name="selected_photos">
                                                    <div class="inner">
                                                        <img src="https://via.placeholder.com/1600x900" data-demo-src="assets/img/demo/unsplash/19.jpg" alt="">
                                                        <div class="inner-overlay"></div>
                                                        <div class="indicator gelatine">
                                                            <i data-feather="check"></i>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- Grid item -->
                                            <div class="column is-4">
                                                <div class="grid-image">
                                                    <input type="radio" name="selected_photos">
                                                    <div class="inner">
                                                        <img src="https://via.placeholder.com/1600x900" data-demo-src="assets/img/demo/unsplash/20.jpg" alt="">
                                                        <div class="inner-overlay"></div>
                                                        <div class="indicator gelatine">
                                                            <i data-feather="check"></i>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- Grid item -->
                                            <div class="column is-4">
                                                <div class="grid-image">
                                                    <input type="radio" name="selected_photos">
                                                    <div class="inner">
                                                        <img src="https://via.placeholder.com/1600x900" data-demo-src="assets/img/demo/unsplash/2.jpg" alt="">
                                                        <div class="inner-overlay"></div>
                                                        <div class="indicator gelatine">
                                                            <i data-feather="check"></i>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- Grid item -->
                                            <div class="column is-4">
                                                <div class="grid-image">
                                                    <input type="radio" name="selected_photos">
                                                    <div class="inner">
                                                        <img src="https://via.placeholder.com/1600x900" data-demo-src="assets/img/demo/unsplash/21.jpg" alt="">
                                                        <div class="inner-overlay"></div>
                                                        <div class="indicator gelatine">
                                                            <i data-feather="check"></i>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- Grid item -->
                                            <div class="column is-4">
                                                <div class="grid-image">
                                                    <input type="radio" name="selected_photos">
                                                    <div class="inner">
                                                        <img src="https://via.placeholder.com/1600x900" data-demo-src="assets/img/demo/unsplash/38.jpg" alt="">
                                                        <div class="inner-overlay"></div>
                                                        <div class="indicator gelatine">
                                                            <i data-feather="check"></i>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- Grid item -->
                                            <div class="column is-4">
                                                <div class="grid-image">
                                                    <input type="radio" name="selected_photos">
                                                    <div class="inner">
                                                        <img src="https://via.placeholder.com/1600x900" data-demo-src="assets/img/demo/unsplash/36.jpg" alt="">
                                                        <div class="inner-overlay"></div>
                                                        <div class="indicator gelatine">
                                                            <i data-feather="check"></i>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- Grid item -->
                                            <div class="column is-4">
                                                <div class="grid-image">
                                                    <input type="radio" name="selected_photos">
                                                    <div class="inner">
                                                        <img src="https://via.placeholder.com/1600x900" data-demo-src="assets/img/demo/unsplash/37.jpg" alt="">
                                                        <div class="inner-overlay"></div>
                                                        <div class="indicator gelatine">
                                                            <i data-feather="check"></i>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
            
                                        <!-- Load more images -->
                                        <div class=" load-more-wrap has-text-centered">
                                            <a href="#" class="load-more-button">Load More</a>
                                        </div>
                                        <!-- /Load more images -->
                                    </div>
            
                                    <!-- Hidden Grid | Trips and Travel -->
                                    <div id="album-photos-3" class="album-image-grid is-hidden">
                                        <div class="album-info">
                                            <h4>Trips and Travel | <small>12 photo(s)</small></h4>
                                            <a class="close-nested-photos">Go Back</a>
                                        </div>
                                        <div class="columns is-multiline">
                                            <!-- Grid item -->
                                            <div class="column is-4">
                                                <div class="grid-image">
                                                    <input type="radio" name="selected_photos">
                                                    <div class="inner">
                                                        <img src="https://via.placeholder.com/1600x900" data-demo-src="assets/img/demo/unsplash/4.jpg" alt="">
                                                        <div class="inner-overlay"></div>
                                                        <div class="indicator gelatine">
                                                            <i data-feather="check"></i>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- Grid item -->
                                            <div class="column is-4">
                                                <div class="grid-image">
                                                    <input type="radio" name="selected_photos">
                                                    <div class="inner">
                                                        <img src="https://via.placeholder.com/1600x900" data-demo-src="assets/img/demo/unsplash/6.jpg" alt="">
                                                        <div class="inner-overlay"></div>
                                                        <div class="indicator gelatine">
                                                            <i data-feather="check"></i>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- Grid item -->
                                            <div class="column is-4">
                                                <div class="grid-image">
                                                    <input type="radio" name="selected_photos">
                                                    <div class="inner">
                                                        <img src="https://via.placeholder.com/1600x900" data-demo-src="assets/img/demo/unsplash/5.jpg" alt="">
                                                        <div class="inner-overlay"></div>
                                                        <div class="indicator gelatine">
                                                            <i data-feather="check"></i>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- Grid item -->
                                            <div class="column is-4">
                                                <div class="grid-image">
                                                    <input type="radio" name="selected_photos">
                                                    <div class="inner">
                                                        <img src="https://via.placeholder.com/1600x900" data-demo-src="assets/img/demo/unsplash/38.jpg" alt="">
                                                        <div class="inner-overlay"></div>
                                                        <div class="indicator gelatine">
                                                            <i data-feather="check"></i>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- Grid item -->
                                            <div class="column is-4">
                                                <div class="grid-image">
                                                    <input type="radio" name="selected_photos">
                                                    <div class="inner">
                                                        <img src="https://via.placeholder.com/1600x900" data-demo-src="assets/img/demo/unsplash/37.jpg" alt="">
                                                        <div class="inner-overlay"></div>
                                                        <div class="indicator gelatine">
                                                            <i data-feather="check"></i>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- Grid item -->
                                            <div class="column is-4">
                                                <div class="grid-image">
                                                    <input type="radio" name="selected_photos">
                                                    <div class="inner">
                                                        <img src="https://via.placeholder.com/1600x900" data-demo-src="assets/img/demo/unsplash/18.jpg" alt="">
                                                        <div class="inner-overlay"></div>
                                                        <div class="indicator gelatine">
                                                            <i data-feather="check"></i>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- Grid item -->
                                            <div class="column is-4">
                                                <div class="grid-image">
                                                    <input type="radio" name="selected_photos">
                                                    <div class="inner">
                                                        <img src="https://via.placeholder.com/1600x900" data-demo-src="assets/img/demo/unsplash/19.jpg" alt="">
                                                        <div class="inner-overlay"></div>
                                                        <div class="indicator gelatine">
                                                            <i data-feather="check"></i>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- Grid item -->
                                            <div class="column is-4">
                                                <div class="grid-image">
                                                    <input type="radio" name="selected_photos">
                                                    <div class="inner">
                                                        <img src="https://via.placeholder.com/1600x900" data-demo-src="assets/img/demo/unsplash/3.jpg" alt="">
                                                        <div class="inner-overlay"></div>
                                                        <div class="indicator gelatine">
                                                            <i data-feather="check"></i>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- Grid item -->
                                            <div class="column is-4">
                                                <div class="grid-image">
                                                    <input type="radio" name="selected_photos">
                                                    <div class="inner">
                                                        <img src="https://via.placeholder.com/1600x900" data-demo-src="assets/img/demo/unsplash/32.jpg" alt="">
                                                        <div class="inner-overlay"></div>
                                                        <div class="indicator gelatine">
                                                            <i data-feather="check"></i>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
            
                                    <!-- Hidden Grid | Summer 2017 -->
                                    <div id="album-photos-4" class="album-image-grid is-hidden">
                                        <div class="album-info">
                                            <h4>Summer 2017 | <small>32 photo(s)</small></h4>
                                            <a class="close-nested-photos">Go Back</a>
                                        </div>
                                        <div class="columns is-multiline">
                                            <!-- Grid item -->
                                            <div class="column is-4">
                                                <div class="grid-image">
                                                    <input type="radio" name="selected_photos">
                                                    <div class="inner">
                                                        <img src="https://via.placeholder.com/1600x900" data-demo-src="assets/img/demo/unsplash/4.jpg" alt="">
                                                        <div class="inner-overlay"></div>
                                                        <div class="indicator gelatine">
                                                            <i data-feather="check"></i>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- Grid item -->
                                            <div class="column is-4">
                                                <div class="grid-image">
                                                    <input type="radio" name="selected_photos">
                                                    <div class="inner">
                                                        <img src="https://via.placeholder.com/1600x900" data-demo-src="assets/img/demo/unsplash/6.jpg" alt="">
                                                        <div class="inner-overlay"></div>
                                                        <div class="indicator gelatine">
                                                            <i data-feather="check"></i>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- Grid item -->
                                            <div class="column is-4">
                                                <div class="grid-image">
                                                    <input type="radio" name="selected_photos">
                                                    <div class="inner">
                                                        <img src="https://via.placeholder.com/1600x900" data-demo-src="assets/img/demo/unsplash/5.jpg" alt="">
                                                        <div class="inner-overlay"></div>
                                                        <div class="indicator gelatine">
                                                            <i data-feather="check"></i>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- Grid item -->
                                            <div class="column is-4">
                                                <div class="grid-image">
                                                    <input type="radio" name="selected_photos">
                                                    <div class="inner">
                                                        <img src="https://via.placeholder.com/1600x900" data-demo-src="assets/img/demo/unsplash/38.jpg" alt="">
                                                        <div class="inner-overlay"></div>
                                                        <div class="indicator gelatine">
                                                            <i data-feather="check"></i>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- Grid item -->
                                            <div class="column is-4">
                                                <div class="grid-image">
                                                    <input type="radio" name="selected_photos">
                                                    <div class="inner">
                                                        <img src="https://via.placeholder.com/1600x900" data-demo-src="assets/img/demo/unsplash/37.jpg" alt="">
                                                        <div class="inner-overlay"></div>
                                                        <div class="indicator gelatine">
                                                            <i data-feather="check"></i>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- Grid item -->
                                            <div class="column is-4">
                                                <div class="grid-image">
                                                    <input type="radio" name="selected_photos">
                                                    <div class="inner">
                                                        <img src="https://via.placeholder.com/1600x900" data-demo-src="assets/img/demo/unsplash/18.jpg" alt="">
                                                        <div class="inner-overlay"></div>
                                                        <div class="indicator gelatine">
                                                            <i data-feather="check"></i>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- Grid item -->
                                            <div class="column is-4">
                                                <div class="grid-image">
                                                    <input type="radio" name="selected_photos">
                                                    <div class="inner">
                                                        <img src="https://via.placeholder.com/1600x900" data-demo-src="assets/img/demo/unsplash/19.jpg" alt="">
                                                        <div class="inner-overlay"></div>
                                                        <div class="indicator gelatine">
                                                            <i data-feather="check"></i>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- Grid item -->
                                            <div class="column is-4">
                                                <div class="grid-image">
                                                    <input type="radio" name="selected_photos">
                                                    <div class="inner">
                                                        <img src="https://via.placeholder.com/1600x900" data-demo-src="assets/img/demo/unsplash/3.jpg" alt="">
                                                        <div class="inner-overlay"></div>
                                                        <div class="indicator gelatine">
                                                            <i data-feather="check"></i>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- Grid item -->
                                            <div class="column is-4">
                                                <div class="grid-image">
                                                    <input type="radio" name="selected_photos">
                                                    <div class="inner">
                                                        <img src="https://via.placeholder.com/1600x900" data-demo-src="assets/img/demo/unsplash/32.jpg" alt="">
                                                        <div class="inner-overlay"></div>
                                                        <div class="indicator gelatine">
                                                            <i data-feather="check"></i>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
            
                                        <!-- Load more images -->
                                        <div class=" load-more-wrap has-text-centered">
                                            <a href="#" class="load-more-button">Load More</a>
                                        </div>
                                        <!-- /Load more images -->
                                    </div>
            
                                    <!-- Hidden Grid | Winter 2017 -->
                                    <div id="album-photos-5" class="album-image-grid is-hidden">
                                        <div class="album-info">
                                            <h4>Winter 2017 | <small>7 photo(s)</small></h4>
                                            <a class="close-nested-photos">Go Back</a>
                                        </div>
                                        <div class="columns is-multiline">
                                            <!-- Grid item -->
                                            <div class="column is-4">
                                                <div class="grid-image">
                                                    <input type="radio" name="selected_photos">
                                                    <div class="inner">
                                                        <img src="https://via.placeholder.com/1600x900" data-demo-src="assets/img/demo/unsplash/22.jpg" alt="">
                                                        <div class="inner-overlay"></div>
                                                        <div class="indicator gelatine">
                                                            <i data-feather="check"></i>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- Grid item -->
                                            <div class="column is-4">
                                                <div class="grid-image">
                                                    <input type="radio" name="selected_photos">
                                                    <div class="inner">
                                                        <img src="https://via.placeholder.com/1600x900" data-demo-src="assets/img/demo/unsplash/24.jpg" alt="">
                                                        <div class="inner-overlay"></div>
                                                        <div class="indicator gelatine">
                                                            <i data-feather="check"></i>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- Grid item -->
                                            <div class="column is-4">
                                                <div class="grid-image">
                                                    <input type="radio" name="selected_photos">
                                                    <div class="inner">
                                                        <img src="https://via.placeholder.com/1600x900" data-demo-src="assets/img/demo/unsplash/36.jpg" alt="">
                                                        <div class="inner-overlay"></div>
                                                        <div class="indicator gelatine">
                                                            <i data-feather="check"></i>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- Grid item -->
                                            <div class="column is-4">
                                                <div class="grid-image">
                                                    <input type="radio" name="selected_photos">
                                                    <div class="inner">
                                                        <img src="https://via.placeholder.com/1600x900" data-demo-src="assets/img/demo/unsplash/25.jpg" alt="">
                                                        <div class="inner-overlay"></div>
                                                        <div class="indicator gelatine">
                                                            <i data-feather="check"></i>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- Grid item -->
                                            <div class="column is-4">
                                                <div class="grid-image">
                                                    <input type="radio" name="selected_photos">
                                                    <div class="inner">
                                                        <img src="https://via.placeholder.com/1600x900" data-demo-src="assets/img/demo/unsplash/2.jpg" alt="">
                                                        <div class="inner-overlay"></div>
                                                        <div class="indicator gelatine">
                                                            <i data-feather="check"></i>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- Grid item -->
                                            <div class="column is-4">
                                                <div class="grid-image">
                                                    <input type="radio" name="selected_photos">
                                                    <div class="inner">
                                                        <img src="https://via.placeholder.com/1600x900" data-demo-src="assets/img/demo/unsplash/8.jpg" alt="">
                                                        <div class="inner-overlay"></div>
                                                        <div class="indicator gelatine">
                                                            <i data-feather="check"></i>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- Grid item -->
                                            <div class="column is-4">
                                                <div class="grid-image">
                                                    <input type="radio" name="selected_photos">
                                                    <div class="inner">
                                                        <img src="https://via.placeholder.com/1600x900" data-demo-src="assets/img/demo/unsplash/12.jpg" alt="">
                                                        <div class="inner-overlay"></div>
                                                        <div class="indicator gelatine">
                                                            <i data-feather="check"></i>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
            
                                    <!-- Hidden Grid | Thanksgiving 2017 -->
                                    <div id="album-photos-6" class="album-image-grid is-hidden">
                                        <div class="album-info">
                                            <h4>Thanksgiving 2017 | <small>6 photo(s)</small></h4>
                                            <a class="close-nested-photos">Go Back</a>
                                        </div>
                                        <div class="columns is-multiline">
                                            <!-- Grid item -->
                                            <div class="column is-4">
                                                <div class="grid-image">
                                                    <input type="radio" name="selected_photos">
                                                    <div class="inner">
                                                        <img src="https://via.placeholder.com/1600x900" data-demo-src="assets/img/demo/unsplash/23.jpg" alt="">
                                                        <div class="inner-overlay"></div>
                                                        <div class="indicator gelatine">
                                                            <i data-feather="check"></i>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- Grid item -->
                                            <div class="column is-4">
                                                <div class="grid-image">
                                                    <input type="radio" name="selected_photos">
                                                    <div class="inner">
                                                        <img src="https://via.placeholder.com/1600x900" data-demo-src="assets/img/demo/unsplash/22.jpg" alt="">
                                                        <div class="inner-overlay"></div>
                                                        <div class="indicator gelatine">
                                                            <i data-feather="check"></i>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- Grid item -->
                                            <div class="column is-4">
                                                <div class="grid-image">
                                                    <input type="radio" name="selected_photos">
                                                    <div class="inner">
                                                        <img src="https://via.placeholder.com/1600x900" data-demo-src="assets/img/demo/unsplash/19.jpg" alt="">
                                                        <div class="inner-overlay"></div>
                                                        <div class="indicator gelatine">
                                                            <i data-feather="check"></i>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- Grid item -->
                                            <div class="column is-4">
                                                <div class="grid-image">
                                                    <input type="radio" name="selected_photos">
                                                    <div class="inner">
                                                        <img src="https://via.placeholder.com/1600x900" data-demo-src="assets/img/demo/unsplash/20.jpg" alt="">
                                                        <div class="inner-overlay"></div>
                                                        <div class="indicator gelatine">
                                                            <i data-feather="check"></i>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- Grid item -->
                                            <div class="column is-4">
                                                <div class="grid-image">
                                                    <input type="radio" name="selected_photos">
                                                    <div class="inner">
                                                        <img src="https://via.placeholder.com/1600x900" data-demo-src="assets/img/demo/unsplash/2.jpg" alt="">
                                                        <div class="inner-overlay"></div>
                                                        <div class="indicator gelatine">
                                                            <i data-feather="check"></i>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- Grid item -->
                                            <div class="column is-4">
                                                <div class="grid-image">
                                                    <input type="radio" name="selected_photos">
                                                    <div class="inner">
                                                        <img src="https://via.placeholder.com/1600x900" data-demo-src="assets/img/demo/unsplash/21.jpg" alt="">
                                                        <div class="inner-overlay"></div>
                                                        <div class="indicator gelatine">
                                                            <i data-feather="check"></i>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card-footer">
                            <button class="button is-solid accent-button replace-button is-disabled">Use Picture</button>
                        </div>
                    </div>
            
                </div>
            </div>
            <!-- Profile picture crop modal -->
            <!--html/partials/pages/profile/timeline/modals/upload-crop-profile-modal.html-->
            <div id="upload-crop-profile-modal" class="modal upload-crop-profile-modal is-xsmall has-light-bg">
                <div class="modal-background"></div>
                <div class="modal-content">
            
                    <div class="card">
                        <div class="card-heading">
                            <h3>Upload Picture</h3>
                            <!-- Close X button -->
                            <div class="close-wrap">
                                <span class="close-modal">
                                    <i data-feather="x"></i>
                                </span>
                            </div>
                        </div>
                        <div class="card-body">
                            <label class="profile-uploader-box" for="upload-profile-picture">
                                <span class="inner-content">
                                    <img src="assets/img/illustrations/profile/add-profile.svg" alt="">
                                    <span>Click here to <br>upload a profile picture</span>
                                </span>
                                <input type="file" id="upload-profile-picture" accept="image/*">
                            </label>
                            <div class="upload-demo-wrap is-hidden">
                                <div id="upload-profile"></div>
                                <div class="upload-help">
                                    <a id="profile-upload-reset" class="profile-reset is-hidden">Reset Picture</a>
                                </div>
                            </div>
                        </div>
                        <div class="card-footer">
                            <button id="submit-profile-picture" class="button is-solid accent-button is-fullwidth raised is-disabled">Use Picture</button>
                        </div>
                    </div>
            
                </div>
            </div>
            <!-- Cover image crop modal -->
            <!--html/partials/pages/profile/timeline/modals/upload-crop-cover-modal.html-->
            <div id="upload-crop-cover-modal" class="modal upload-crop-cover-modal is-large has-light-bg">
                <div class="modal-background"></div>
                <div class="modal-content">
            
                    <div class="card">
                        <div class="card-heading">
                            <h3>Upload Cover</h3>
                            <!-- Close X button -->
                            <div class="close-wrap">
                                <span class="close-modal">
                                    <i data-feather="x"></i>
                                </span>
                            </div>
                        </div>
                        <div class="card-body">
                            <label class="cover-uploader-box" for="upload-cover-picture">
                                <span class="inner-content">
                                    <img src="assets/img/illustrations/profile/add-cover.svg" alt="">
                                    <span>Click here to <br>upload a cover image</span>
                                </span>
                                <input type="file" id="upload-cover-picture" accept="image/*">
                            </label>
                            <div class="upload-demo-wrap is-hidden">
                                <div id="upload-cover"></div>
                                <div class="upload-help">
                                    <a id="cover-upload-reset" class="cover-reset is-hidden">Reset Picture</a>
                                </div>
                            </div>
                        </div>
                        <div class="card-footer">
                            <button id="submit-cover-picture" class="button is-solid accent-button is-fullwidth raised is-disabled">Use
                                Picture</button>
                        </div>
                    </div>
            
                </div>
            </div>        </div>

        <div class="chat-wrapper">
            <div class="chat-inner">
        
                <!-- Chat top navigation -->
                <div class="chat-nav">
                    <div class="nav-start">
                        <div class="recipient-block">
                            <div class="avatar-container">
                                <img class="user-avatar" src="https://via.placeholder.com/300x300" data-demo-src="assets/img/avatars/dan.jpg" alt="">
                            </div>
                            <div class="username">
                                <span>Dan Walker</span>
                                <span><i data-feather="star"></i> <span>| Online</span></span>
                            </div>
                        </div>
                    </div>
                    <div class="nav-end">
                
                        <!-- Settings icon dropdown -->
                        <div class="dropdown is-spaced is-neutral is-right dropdown-trigger">
                            <div>
                                <a class="chat-nav-item is-icon">
                                    <i data-feather="settings"></i>
                                </a>
                            </div>
                            <div class="dropdown-menu" role="menu">
                                <div class="dropdown-content">
                                    <a href="#" class="dropdown-item">
                                        <div class="media">
                                            <i data-feather="message-square"></i>
                                            <div class="media-content">
                                                <h3>Details</h3>
                                                <small>View this conversation's details.</small>
                                            </div>
                                        </div>
                                    </a>
                                    <a class="dropdown-item">
                                        <div class="media">
                                            <i data-feather="settings"></i>
                                            <div class="media-content">
                                                <h3>Preferences</h3>
                                                <small>Define your preferences.</small>
                                            </div>
                                        </div>
                                    </a>
                                    <hr class="dropdown-divider">
                                    <a class="dropdown-item">
                                        <div class="media">
                                            <i data-feather="bell"></i>
                                            <div class="media-content">
                                                <h3>Notifications</h3>
                                                <small>Set notifications settings.</small>
                                            </div>
                                        </div>
                                    </a>
                                    <a class="dropdown-item">
                                        <div class="media">
                                            <i data-feather="bell-off"></i>
                                            <div class="media-content">
                                                <h3>Silence</h3>
                                                <small>Disable notifications.</small>
                                            </div>
                                        </div>
                                    </a>
                                    <hr class="dropdown-divider">
                                    <a class="dropdown-item">
                                        <div class="media">
                                            <i data-feather="box"></i>
                                            <div class="media-content">
                                                <h3>Archive</h3>
                                                <small>Archive this conversation.</small>
                                            </div>
                                        </div>
                                    </a>
                                    <a class="dropdown-item">  
                                        <div class="media">
                                            <i data-feather="trash-2"></i>
                                            <div class="media-content">
                                                <h3>Delete</h3>
                                                <small>Delete this conversation.</small>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="chat-search">
                            <div class="control has-icon">
                                <input type="text" class="input" placeholder="Search messages">
                                <div class="form-icon">
                                    <i data-feather="search"></i>
                                </div>
                            </div>
                        </div>
                        <a class="chat-nav-item is-icon is-hidden-mobile">
                            <i data-feather="at-sign"></i>
                        </a>
                        <a class="chat-nav-item is-icon is-hidden-mobile">
                            <i data-feather="star"></i>
                        </a>
                
                        <!-- More dropdown -->
                        <div class="dropdown is-spaced is-neutral is-right dropdown-trigger">
                            <div>
                                <a class="chat-nav-item is-icon no-margin">
                                    <i data-feather="more-vertical"></i>
                                </a>
                            </div>
                            <div class="dropdown-menu" role="menu">
                                <div class="dropdown-content">
                                    <a href="#" class="dropdown-item">
                                        <div class="media">
                                            <i data-feather="file-text"></i>
                                            <div class="media-content">
                                                <h3>Files</h3>
                                                <small>View all your files.</small>
                                            </div>
                                        </div>
                                    </a>
                                    <a class="dropdown-item">
                                        <div class="media">
                                            <i data-feather="users"></i>
                                            <div class="media-content">
                                                <h3>Users</h3>
                                                <small>View all users you're talking to.</small>
                                            </div>
                                        </div>
                                    </a>
                                    <hr class="dropdown-divider">
                                    <a class="dropdown-item">
                                        <div class="media">
                                            <i data-feather="gift"></i>
                                            <div class="media-content">
                                                <h3>Daily bonus</h3>
                                                <small>Get your daily bonus.</small>
                                            </div>
                                        </div>
                                    </a>
                                    <a class="dropdown-item">
                                        <div class="media">
                                            <i data-feather="download-cloud"></i>
                                            <div class="media-content">
                                                <h3>Downloads</h3>
                                                <small>See all your downloads.</small>
                                            </div>
                                        </div>
                                    </a>
                                    <hr class="dropdown-divider">
                                    <a class="dropdown-item">
                                        <div class="media">
                                            <i data-feather="life-buoy"></i>
                                            <div class="media-content">
                                                <h3>Support</h3>
                                                <small>Reach our support team.</small>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <a class="chat-nav-item is-icon close-chat">
                            <i data-feather="x"></i>
                        </a>
                    </div>
                </div>
                <!-- Chat sidebar -->
                <div id="chat-sidebar" class="users-sidebar">
                    <!-- Header -->
                    <div class="header-item">
                        <img src="assets/img/logo/friendkit.svg" alt="">
                    </div>
                    <!-- User list -->
                    <div class="conversations-list has-slimscroll-xs">
                        <!-- User -->
                        <div class="user-item is-active" data-chat-user="dan" data-full-name="Dan Walker" data-status="Online">
                            <div class="avatar-container">
                                <img class="user-avatar" src="https://via.placeholder.com/300x300" data-demo-src="assets/img/avatars/dan.jpg" alt="">
                                <div class="user-status is-online"></div>
                            </div>
                        </div>
                        <!-- User -->
                        <div class="user-item" data-chat-user="stella" data-full-name="Stella Bergmann" data-status="Busy">
                            <div class="avatar-container">
                                <img class="user-avatar" src="https://via.placeholder.com/300x300" data-demo-src="assets/img/avatars/stella.jpg" alt="">
                                <div class="user-status is-busy"></div>
                            </div>
                        </div>
                        <!-- User -->
                        <div class="user-item" data-chat-user="daniel" data-full-name="Daniel Wellington" data-status="Away">
                            <div class="avatar-container">
                                <img class="user-avatar" src="https://via.placeholder.com/300x300" data-demo-src="assets/img/avatars/daniel.jpg" alt="">
                                <div class="user-status is-away"></div>
                            </div>
                        </div>
                        <!-- User -->
                        <div class="user-item" data-chat-user="david" data-full-name="David Kim" data-status="Busy">
                            <div class="avatar-container">
                                <img class="user-avatar" src="https://via.placeholder.com/300x300" data-demo-src="assets/img/avatars/david.jpg" alt="">
                                <div class="user-status is-busy"></div>
                            </div>
                        </div>
                        <!-- User -->
                        <div class="user-item" data-chat-user="edward" data-full-name="Edward Mayers" data-status="Online">
                            <div class="avatar-container">
                                <img class="user-avatar" src="https://via.placeholder.com/300x300" data-demo-src="assets/img/avatars/edward.jpeg" alt="">
                                <div class="user-status is-online"></div>
                            </div>
                        </div>
                        <!-- User -->
                        <div class="user-item" data-chat-user="elise" data-full-name="Elise Walker" data-status="Away">
                            <div class="avatar-container">
                                <img class="user-avatar" src="https://via.placeholder.com/300x300" data-demo-src="assets/img/avatars/elise.jpg" alt="">
                                <div class="user-status is-away"></div>
                            </div>
                        </div>
                        <!-- User -->
                        <div class="user-item" data-chat-user="nelly" data-full-name="Nelly Schwartz" data-status="Busy">
                            <div class="avatar-container">
                                <img class="user-avatar" src="https://via.placeholder.com/300x300" data-demo-src="assets/img/avatars/nelly.png" alt="">
                                <div class="user-status is-busy"></div>
                            </div>
                        </div>
                        <!-- User -->
                        <div class="user-item" data-chat-user="milly" data-full-name="Milly Augustine" data-status="Busy">
                            <div class="avatar-container">
                                <img class="user-avatar" src="https://via.placeholder.com/300x300" data-demo-src="assets/img/avatars/milly.jpg" alt="">
                                <div class="user-status is-busy"></div>
                            </div>
                        </div>            </div>
                    <!-- Add Conversation -->
                    <div class="footer-item">
                        <div class="add-button modal-trigger" data-modal="add-conversation-modal"><i data-feather="user"></i></div>
                    </div>
                </div>
        
                <!-- Chat body -->
                <div id="chat-body" class="chat-body is-opened">
                    <!-- Conversation with Dan -->
                    <div id="dan-conversation" class="chat-body-inner has-slimscroll">
                        <div class="date-divider">
                            <hr class="date-divider-line">
                            <span class="date-divider-text">Today</span>
                        </div>
                    
                        <div class="chat-message is-received">
                            <img src="https://via.placeholder.com/300x300" data-demo-src="assets/img/avatars/dan.jpg" alt="">
                            <div class="message-block">
                                <span>8:03am</span>
                                <div class="message-text">Hi Jenna! I made a new design, and i wanted to show it to you.</div>
                            </div>
                        </div>
                    
                        <div class="chat-message is-received">
                            <img src="https://via.placeholder.com/300x300" data-demo-src="assets/img/avatars/dan.jpg" alt="">
                            <div class="message-block">
                                <span>8:03am</span>
                                <div class="message-text">It's quite clean and it's inspired from Bulkit.</div>
                            </div>
                        </div>
                    
                        <div class="chat-message is-sent">
                            <img src="https://via.placeholder.com/300x300" data-demo-src="assets/img/avatars/jenna.png" alt="">
                            <div class="message-block">
                                <span>8:12am</span>
                                <div class="message-text">Oh really??! I want to see that.</div>
                            </div>
                        </div>
                    
                        <div class="chat-message is-received">
                            <img src="https://via.placeholder.com/300x300" data-demo-src="assets/img/avatars/dan.jpg" alt="">
                            <div class="message-block">
                                <span>8:13am</span>
                                <div class="message-text">FYI it was done in less than a day.</div>
                            </div>
                        </div>
                    
                        <div class="chat-message is-sent">
                            <img src="https://via.placeholder.com/300x300" data-demo-src="assets/img/avatars/jenna.png" alt="">
                            <div class="message-block">
                                <span>8:17am</span>
                                <div class="message-text">Great to hear it. Just send me the PSD files so i can have a look at it.</div>
                            </div>
                        </div>
                    
                        <div class="chat-message is-sent">
                            <img src="https://via.placeholder.com/300x300" data-demo-src="assets/img/avatars/jenna.png" alt="">
                            <div class="message-block">
                                <span>8:18am</span>
                                <div class="message-text">And if you have a prototype, you can also send me the link to it.</div>
                            </div>
                        </div>
                    </div>
                    <!-- Conversation with Stella -->
                    <div id="stella-conversation" class="chat-body-inner has-slimscroll is-hidden">
                        <div class="date-divider">
                            <hr class="date-divider-line">
                            <span class="date-divider-text">Today</span>
                        </div>
                    
                        <div class="chat-message is-sent">
                            <img src="https://via.placeholder.com/300x300" data-demo-src="assets/img/avatars/jenna.png" alt="">
                            <div class="message-block">
                                <span>10:34am</span>
                                <div class="message-text">Hey Stella! Aren't we supposed to go the theatre after work?.</div>
                            </div>
                        </div>
                    
                        <div class="chat-message is-sent">
                            <img src="https://via.placeholder.com/300x300" data-demo-src="assets/img/avatars/jenna.png" alt="">
                            <div class="message-block">
                                <span>10:37am</span>
                                <div class="message-text">Just remembered it.</div>
                            </div>
                        </div>
                    
                        <div class="chat-message is-received">
                            <img src="https://via.placeholder.com/300x300" data-demo-src="assets/img/avatars/stella.jpg" alt="">
                            <div class="message-block">
                                <span>11:22am</span>
                                <div class="message-text">Yeah you always do that, forget about everything.</div>
                            </div>
                        </div>
                    </div>
                    <!-- Conversation with Daniel -->
                    <div id="daniel-conversation" class="chat-body-inner has-slimscroll is-hidden">
                        <div class="date-divider">
                            <hr class="date-divider-line">
                            <span class="date-divider-text">Yesterday</span>
                        </div>
                    
                        <div class="chat-message is-sent">
                            <img src="https://via.placeholder.com/300x300" data-demo-src="assets/img/avatars/jenna.png" alt="">
                            <div class="message-block">
                                <span>3:24pm</span>
                                <div class="message-text">Daniel, Amanda told me about your issue, how can I help?</div>
                            </div>
                        </div>
                    
                        <div class="chat-message is-received">
                            <img src="https://via.placeholder.com/300x300" data-demo-src="assets/img/avatars/daniel.jpg" alt="">
                            <div class="message-block">
                                <span>3:42pm</span>
                                <div class="message-text">Hey Jenna, thanks for answering so quickly. Iam stuck, i need a car.</div>
                            </div>
                        </div>
                    
                        <div class="chat-message is-received">
                            <img src="https://via.placeholder.com/300x300" data-demo-src="assets/img/avatars/daniel.jpg" alt="">
                            <div class="message-block">
                                <span>3:43pm</span>
                                <div class="message-text">Can i borrow your car for a quick ride to San Fransisco? Iam running behind and
                                    there' no train in sight.</div>
                            </div>
                        </div>
                    </div>
                    <!-- Conversation with David -->
                    <div id="david-conversation" class="chat-body-inner has-slimscroll is-hidden">
                        <div class="date-divider">
                            <hr class="date-divider-line">
                            <span class="date-divider-text">Today</span>
                        </div>
                    
                        <div class="chat-message is-sent">
                            <img src="https://via.placeholder.com/300x300" data-demo-src="assets/img/avatars/jenna.png" alt="">
                            <div class="message-block">
                                <span>12:34pm</span>
                                <div class="message-text">Damn you! Why would you even implement this in the game?.</div>
                            </div>
                        </div>
                    
                        <div class="chat-message is-sent">
                            <img src="https://via.placeholder.com/300x300" data-demo-src="assets/img/avatars/jenna.png" alt="">
                            <div class="message-block">
                                <span>12:32pm</span>
                                <div class="message-text">I just HATE aliens.</div>
                            </div>
                        </div>
                    
                        <div class="chat-message is-received">
                            <img src="https://via.placeholder.com/300x300" data-demo-src="assets/img/avatars/david.jpg" alt="">
                            <div class="message-block">
                                <span>13:09pm</span>
                                <div class="message-text">C'mon, you just gotta learn the tricks. You can't expect aliens to behave like
                                    humans. I mean that's how the mechanics are.</div>
                            </div>
                        </div>
                        <div class="chat-message is-received">
                            <img src="https://via.placeholder.com/300x300" data-demo-src="assets/img/avatars/david.jpg" alt="">
                            <div class="message-block">
                                <span>13:11pm</span>
                                <div class="message-text">I checked the replay and for example, you always get supply blocked. That's not
                                    the right thing to do.</div>
                            </div>
                        </div>
                        <div class="chat-message is-sent">
                            <img src="https://via.placeholder.com/300x300" data-demo-src="assets/img/avatars/jenna.png" alt="">
                            <div class="message-block">
                                <span>13:12pm</span>
                                <div class="message-text">I know but i struggle when i have to decide what to make from larvas.</div>
                            </div>
                        </div>
                        <div class="chat-message is-received">
                            <img src="https://via.placeholder.com/300x300" data-demo-src="assets/img/avatars/david.jpg" alt="">
                            <div class="message-block">
                                <span>13:17pm</span>
                                <div class="message-text">Join me in game, i'll show you.</div>
                            </div>
                        </div>
                    </div>
                    <!-- Conversation with Edward -->
                    <div id="edward-conversation" class="chat-body-inner has-slimscroll">
                        <div class="date-divider">
                            <hr class="date-divider-line">
                            <span class="date-divider-text">Monday</span>
                        </div>
                    
                        <div class="chat-message is-received">
                            <img src="https://via.placeholder.com/300x300" data-demo-src="assets/img/avatars/edward.jpeg" alt="">
                            <div class="message-block">
                                <span>4:55pm</span>
                                <div class="message-text">Hey Jenna, what's up?</div>
                            </div>
                        </div>
                    
                        <div class="chat-message is-received">
                            <img src="https://via.placeholder.com/300x300" data-demo-src="assets/img/avatars/edward.jpeg" alt="">
                            <div class="message-block">
                                <span>4:56pm</span>
                                <div class="message-text">Iam coming to LA tomorrow. Interested in having lunch?</div>
                            </div>
                        </div>
                    
                        <div class="chat-message is-sent">
                            <img src="https://via.placeholder.com/300x300" data-demo-src="assets/img/avatars/jenna.png" alt="">
                            <div class="message-block">
                                <span>5:21pm</span>
                                <div class="message-text">Hey mate, it's been a while. Sure I would love to.</div>
                            </div>
                        </div>
                    
                        <div class="chat-message is-received">
                            <img src="https://via.placeholder.com/300x300" data-demo-src="assets/img/avatars/edward.jpeg" alt="">
                            <div class="message-block">
                                <span>5:27pm</span>
                                <div class="message-text">Ok. Let's say i pick you up at 12:30 at work, works?</div>
                            </div>
                        </div>
                    
                        <div class="chat-message is-sent">
                            <img src="https://via.placeholder.com/300x300" data-demo-src="assets/img/avatars/jenna.png" alt="">
                            <div class="message-block">
                                <span>5:43pm</span>
                                <div class="message-text">Yup, that works great.</div>
                            </div>
                        </div>
                    
                        <div class="chat-message is-sent">
                            <img src="https://via.placeholder.com/300x300" data-demo-src="assets/img/avatars/jenna.png" alt="">
                            <div class="message-block">
                                <span>5:44pm</span>
                                <div class="message-text">And yeah, don't forget to bring some of my favourite cheese cake.</div>
                            </div>
                        </div>
                    
                        <div class="chat-message is-received">
                            <img src="https://via.placeholder.com/300x300" data-demo-src="assets/img/avatars/edward.jpeg" alt="">
                            <div class="message-block">
                                <span>5:27pm</span>
                                <div class="message-text">No worries</div>
                            </div>
                        </div>
                    </div>
                    <!-- Conversation with Edward -->
                    <div id="elise-conversation" class="chat-body-inner has-slimscroll is-hidden">
                        <div class="date-divider">
                            <hr class="date-divider-line">
                            <span class="date-divider-text">September 28</span>
                        </div>
                    
                        <div class="chat-message is-sent">
                            <img src="https://via.placeholder.com/300x300" data-demo-src="assets/img/avatars/jenna.png" alt="">
                            <div class="message-block">
                                <span>11:53am</span>
                                <div class="message-text">Elise, i forgot my folder at your place yesterday.</div>
                            </div>
                        </div>
                    
                        <div class="chat-message is-sent">
                            <img src="https://via.placeholder.com/300x300" data-demo-src="assets/img/avatars/jenna.png" alt="">
                            <div class="message-block">
                                <span>11:53am</span>
                                <div class="message-text">I need it badly, it's work stuff.</div>
                            </div>
                        </div>
                    
                        <div class="chat-message is-received">
                            <img src="https://via.placeholder.com/300x300" data-demo-src="assets/img/avatars/elise.jpg" alt="">
                            <div class="message-block">
                                <span>12:19pm</span>
                                <div class="message-text">Yeah i noticed. I'll drop it in half an hour at your office.</div>
                            </div>
                        </div>
                    </div>
                    <!-- Conversation with Nelly -->
                    <div id="nelly-conversation" class="chat-body-inner has-slimscroll is-hidden">
                        <div class="date-divider">
                            <hr class="date-divider-line">
                            <span class="date-divider-text">September 17</span>
                        </div>
                    
                        <div class="chat-message is-sent">
                            <img src="https://via.placeholder.com/300x300" data-demo-src="assets/img/avatars/jenna.png" alt="">
                            <div class="message-block">
                                <span>8:22pm</span>
                                <div class="message-text">So you watched the movie?</div>
                            </div>
                        </div>
                    
                        <div class="chat-message is-sent">
                            <img src="https://via.placeholder.com/300x300" data-demo-src="assets/img/avatars/jenna.png" alt="">
                            <div class="message-block">
                                <span>8:22pm</span>
                                <div class="message-text">Was it scary?</div>
                            </div>
                        </div>
                    
                        <div class="chat-message is-received">
                            <img src="https://via.placeholder.com/300x300" data-demo-src="assets/img/avatars/nelly.png" alt="">
                            <div class="message-block">
                                <span>9:03pm</span>
                                <div class="message-text">It was so frightening, i felt my heart was about to blow inside my chest.</div>
                            </div>
                        </div>
                    </div>
                    <!-- Conversation with Milly -->
                    <div id="milly-conversation" class="chat-body-inner has-slimscroll">
                        <div class="date-divider">
                            <hr class="date-divider-line">
                            <span class="date-divider-text">Today</span>
                        </div>
                    
                        <div class="chat-message is-received">
                            <img src="https://via.placeholder.com/300x300" data-demo-src="assets/img/avatars/milly.jpg" alt="">
                            <div class="message-block">
                                <span>2:01pm</span>
                                <div class="message-text">Hello Jenna, did you read my proposal?</div>
                            </div>
                        </div>
                    
                        <div class="chat-message is-received">
                            <img src="https://via.placeholder.com/300x300" data-demo-src="assets/img/avatars/milly.jpg" alt="">
                            <div class="message-block">
                                <span>2:01pm</span>
                                <div class="message-text">Didn't hear from you since i sent it.</div>
                            </div>
                        </div>
                    
                        <div class="chat-message is-sent">
                            <img src="https://via.placeholder.com/300x300" data-demo-src="assets/img/avatars/jenna.png" alt="">
                            <div class="message-block">
                                <span>2:02pm</span>
                                <div class="message-text">Hello Milly, Iam really sorry, Iam so busy recently, but i had the time to read
                                    it.</div>
                            </div>
                        </div>
                    
                        <div class="chat-message is-received">
                            <img src="https://via.placeholder.com/300x300" data-demo-src="assets/img/avatars/milly.jpg" alt="">
                            <div class="message-block">
                                <span>2:04pm</span>
                                <div class="message-text">And what did you think about it?</div>
                            </div>
                        </div>
                    
                        <div class="chat-message is-sent">
                            <img src="https://via.placeholder.com/300x300" data-demo-src="assets/img/avatars/jenna.png" alt="">
                            <div class="message-block">
                                <span>2:05pm</span>
                                <div class="message-text">Actually it's quite good, there might be some small changes but overall it's
                                    great.</div>
                            </div>
                        </div>
                    
                        <div class="chat-message is-sent">
                            <img src="https://via.placeholder.com/300x300" data-demo-src="assets/img/avatars/jenna.png" alt="">
                            <div class="message-block">
                                <span>2:07pm</span>
                                <div class="message-text">I think that i can give it to my boss at this stage.</div>
                            </div>
                        </div>
                    
                        <div class="chat-message is-received">
                            <img src="https://via.placeholder.com/300x300" data-demo-src="assets/img/avatars/milly.jpg" alt="">
                            <div class="message-block">
                                <span>2:09pm</span>
                                <div class="message-text">Crossing fingers then</div>
                            </div>
                        </div>
                    </div>
                    <!-- Compose message area -->
                    <div class="chat-action">
                        <div class="chat-action-inner">
                            <div class="control">
                                <textarea class="textarea comment-textarea" rows="1"></textarea>
                                <div class="dropdown compose-dropdown is-spaced is-accent is-up dropdown-trigger">
                                    <div>
                                        <div class="add-button">
                                            <div class="button-inner">
                                                <i data-feather="plus"></i>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="dropdown-menu" role="menu">
                                        <div class="dropdown-content">
                                            <a href="#" class="dropdown-item">
                                                <div class="media">
                                                    <i data-feather="code"></i>
                                                    <div class="media-content">
                                                        <h3>Code snippet</h3>
                                                        <small>Add and paste a code snippet.</small>
                                                    </div>
                                                </div>
                                            </a>
                                            <a class="dropdown-item">
                                                <div class="media">
                                                    <i data-feather="file-text"></i>
                                                    <div class="media-content">
                                                        <h3>Note</h3>
                                                        <small>Add and paste a note.</small>
                                                    </div>
                                                </div>
                                            </a>
                                            <hr class="dropdown-divider">
                                            <a class="dropdown-item">
                                                <div class="media">
                                                    <i data-feather="server"></i>
                                                    <div class="media-content">
                                                        <h3>Remote file</h3>
                                                        <small>Add a file from a remote drive.</small>
                                                    </div>
                                                </div>
                                            </a>
                                            <a class="dropdown-item">
                                                <div class="media">
                                                    <i data-feather="monitor"></i>
                                                    <div class="media-content">
                                                        <h3>Local file</h3>
                                                        <small>Add a file from your computer.</small>
                                                    </div>
                                                </div>
                                            </a>
                                        </div>
                                    </div>
                                </div>                    </div>
                        </div>
                    </div>
        
                </div>
        
                <div id="chat-panel" class="chat-panel is-opened">
                    <div class="panel-inner">
                        <div class="panel-header">
                            <h3>Details</h3>
                            <div class="panel-close">
                                <i data-feather="x"></i>
                            </div>
                        </div>
        
                        <!-- Dan details -->
                        <div id="dan-details" class="panel-body is-user-details">
                            <div class="panel-body-inner">
                        
                                <div class="subheader">
                                    <div class="action-icon">
                                        <i class="mdi mdi-video"></i>
                                    </div>
                                    <div class="action-icon">
                                        <i class="mdi mdi-camera"></i>
                                    </div>
                                    <div class="action-icon">
                                        <i class="mdi mdi-microphone"></i>
                                    </div>
                                    <div class="dropdown details-dropdown is-spaced is-neutral is-right dropdown-trigger ml-auto">
                                        <div>
                                            <div class="action-icon">
                                                <i class="mdi mdi-dots-vertical"></i>
                                            </div>
                                        </div>
                                        <div class="dropdown-menu" role="menu">
                                            <div class="dropdown-content">
                                                <a href="#" class="dropdown-item">
                                                    <div class="media">
                                                        <i data-feather="user"></i>
                                                        <div class="media-content">
                                                            <h3>View profile</h3>
                                                            <small>View this user's profile.</small>
                                                        </div>
                                                    </div>
                                                </a>
                                                <a class="dropdown-item">
                                                    <div class="media">
                                                        <i data-feather="mail"></i>
                                                        <div class="media-content">
                                                            <h3>Send message</h3>
                                                            <small>Send a message to the user's inbox.</small>
                                                        </div>
                                                    </div>
                                                </a>
                                                <hr class="dropdown-divider">
                                                <a class="dropdown-item">
                                                    <div class="media">
                                                        <i data-feather="share-2"></i>
                                                        <div class="media-content">
                                                            <h3>Share profile</h3>
                                                            <small>Share this user's profile.</small>
                                                        </div>
                                                    </div>
                                                </a>
                                                <a class="dropdown-item">
                                                    <div class="media">
                                                        <i data-feather="x"></i>
                                                        <div class="media-content">
                                                            <h3>Block user</h3>
                                                            <small>Block this user permanently.</small>
                                                        </div>
                                                    </div>
                                                </a>
                                            </div>
                                        </div>
                                    </div>        </div>
                        
                                <div class="details-avatar">
                                    <img src="https://via.placeholder.com/300x300" data-demo-src="assets/img/avatars/dan.jpg" alt="">
                                    <div class="call-me">
                                        <i class="mdi mdi-phone"></i>
                                    </div>
                                </div>
                        
                                <div class="user-meta has-text-centered">
                                    <h3>Dan Walker</h3>
                                    <h4>IOS Developer</h4>
                                </div>
                        
                                <div class="user-badges">
                                    <div class="hexagon is-red">
                                        <div>
                                            <i class="mdi mdi-heart"></i>
                                        </div>
                                    </div>
                                    <div class="hexagon is-green">
                                        <div>
                                            <i class="mdi mdi-dog"></i>
                                        </div>
                                    </div>
                                    <div class="hexagon is-accent">
                                        <div>
                                            <i class="mdi mdi-flash"></i>
                                        </div>
                                    </div>
                                    <div class="hexagon is-blue">
                                        <div>
                                            <i class="mdi mdi-briefcase"></i>
                                        </div>
                                    </div>
                                </div>
                        
                                <div class="user-about">
                                    <label>About Me</label>
                                    <div class="about-block">
                                        <i class="mdi mdi-domain"></i>
                                        <div class="about-text">
                                            <span>Works at</span>
                                            <span><a class="is-inverted" href="#">WebSmash Inc.</a></span>
                                        </div>
                                    </div>
                                    <div class="about-block">
                                        <i class="mdi mdi-school"></i>
                                        <div class="about-text">
                                            <span>Studied at</span>
                                            <span><a class="is-inverted" href="#">Riverdale University</a></span>
                                        </div>
                                    </div>
                                </div>
                        
                            </div>
                        </div>
                        <!-- Stella details -->
                        <div id="stella-details" class="panel-body is-user-details is-hidden">
                            <div class="panel-body-inner">
                        
                                <div class="subheader">
                                    <div class="action-icon">
                                        <i class="mdi mdi-video"></i>
                                    </div>
                                    <div class="action-icon">
                                        <i class="mdi mdi-camera"></i>
                                    </div>
                                    <div class="action-icon">
                                        <i class="mdi mdi-microphone"></i>
                                    </div>
                                    <div class="dropdown details-dropdown is-spaced is-neutral is-right dropdown-trigger ml-auto">
                                        <div>
                                            <div class="action-icon">
                                                <i class="mdi mdi-dots-vertical"></i>
                                            </div>
                                        </div>
                                        <div class="dropdown-menu" role="menu">
                                            <div class="dropdown-content">
                                                <a href="#" class="dropdown-item">
                                                    <div class="media">
                                                        <i data-feather="user"></i>
                                                        <div class="media-content">
                                                            <h3>View profile</h3>
                                                            <small>View this user's profile.</small>
                                                        </div>
                                                    </div>
                                                </a>
                                                <a class="dropdown-item">
                                                    <div class="media">
                                                        <i data-feather="mail"></i>
                                                        <div class="media-content">
                                                            <h3>Send message</h3>
                                                            <small>Send a message to the user's inbox.</small>
                                                        </div>
                                                    </div>
                                                </a>
                                                <hr class="dropdown-divider">
                                                <a class="dropdown-item">
                                                    <div class="media">
                                                        <i data-feather="share-2"></i>
                                                        <div class="media-content">
                                                            <h3>Share profile</h3>
                                                            <small>Share this user's profile.</small>
                                                        </div>
                                                    </div>
                                                </a>
                                                <a class="dropdown-item">
                                                    <div class="media">
                                                        <i data-feather="x"></i>
                                                        <div class="media-content">
                                                            <h3>Block user</h3>
                                                            <small>Block this user permanently.</small>
                                                        </div>
                                                    </div>
                                                </a>
                                            </div>
                                        </div>
                                    </div>        </div>
                        
                                <div class="details-avatar">
                                    <img src="https://via.placeholder.com/300x300" data-demo-src="assets/img/avatars/stella.jpg" alt="">
                                    <div class="call-me">
                                        <i class="mdi mdi-phone"></i>
                                    </div>
                                </div>
                        
                                <div class="user-meta has-text-centered">
                                    <h3>Stella Bergmann</h3>
                                    <h4>Shop Owner</h4>
                                </div>
                        
                                <div class="user-badges">
                                    <div class="hexagon is-purple">
                                        <div>
                                            <i class="mdi mdi-bomb"></i>
                                        </div>
                                    </div>
                                    <div class="hexagon is-red">
                                        <div>
                                            <i class="mdi mdi-check-decagram"></i>
                                        </div>
                                    </div>
                                    <div class="hexagon is-accent">
                                        <div>
                                            <i class="mdi mdi-flash"></i>
                                        </div>
                                    </div>
                                </div>
                        
                                <div class="user-about">
                                    <label>About Me</label>
                                    <div class="about-block">
                                        <i class="mdi mdi-domain"></i>
                                        <div class="about-text">
                                            <span>Works at</span>
                                            <span><a class="is-inverted" href="#">Trending Fashions</a></span>
                                        </div>
                                    </div>
                                    <div class="about-block">
                                        <i class="mdi mdi-map-marker"></i>
                                        <div class="about-text">
                                            <span>From</span>
                                            <span><a class="is-inverted" href="#">Oklahoma City</a></span>
                                        </div>
                                    </div>
                                </div>
                        
                            </div>
                        </div>
                        <!-- Daniel details -->
                        <div id="daniel-details" class="panel-body is-user-details is-hidden">
                            <div class="panel-body-inner">
                        
                                <div class="subheader">
                                    <div class="action-icon">
                                        <i class="mdi mdi-video"></i>
                                    </div>
                                    <div class="action-icon">
                                        <i class="mdi mdi-camera"></i>
                                    </div>
                                    <div class="action-icon">
                                        <i class="mdi mdi-microphone"></i>
                                    </div>
                                    <div class="dropdown details-dropdown is-spaced is-neutral is-right dropdown-trigger ml-auto">
                                        <div>
                                            <div class="action-icon">
                                                <i class="mdi mdi-dots-vertical"></i>
                                            </div>
                                        </div>
                                        <div class="dropdown-menu" role="menu">
                                            <div class="dropdown-content">
                                                <a href="#" class="dropdown-item">
                                                    <div class="media">
                                                        <i data-feather="user"></i>
                                                        <div class="media-content">
                                                            <h3>View profile</h3>
                                                            <small>View this user's profile.</small>
                                                        </div>
                                                    </div>
                                                </a>
                                                <a class="dropdown-item">
                                                    <div class="media">
                                                        <i data-feather="mail"></i>
                                                        <div class="media-content">
                                                            <h3>Send message</h3>
                                                            <small>Send a message to the user's inbox.</small>
                                                        </div>
                                                    </div>
                                                </a>
                                                <hr class="dropdown-divider">
                                                <a class="dropdown-item">
                                                    <div class="media">
                                                        <i data-feather="share-2"></i>
                                                        <div class="media-content">
                                                            <h3>Share profile</h3>
                                                            <small>Share this user's profile.</small>
                                                        </div>
                                                    </div>
                                                </a>
                                                <a class="dropdown-item">
                                                    <div class="media">
                                                        <i data-feather="x"></i>
                                                        <div class="media-content">
                                                            <h3>Block user</h3>
                                                            <small>Block this user permanently.</small>
                                                        </div>
                                                    </div>
                                                </a>
                                            </div>
                                        </div>
                                    </div>        </div>
                        
                                <div class="details-avatar">
                                    <img src="https://via.placeholder.com/300x300" data-demo-src="assets/img/avatars/daniel.jpg" alt="">
                                    <div class="call-me">
                                        <i class="mdi mdi-phone"></i>
                                    </div>
                                </div>
                        
                                <div class="user-meta has-text-centered">
                                    <h3>Daniel Wellington</h3>
                                    <h4>Senior Executive</h4>
                                </div>
                        
                                <div class="user-badges">
                                    <div class="hexagon is-accent">
                                        <div>
                                            <i class="mdi mdi-google-cardboard"></i>
                                        </div>
                                    </div>
                                    <div class="hexagon is-blue">
                                        <div>
                                            <i class="mdi mdi-pizza"></i>
                                        </div>
                                    </div>
                                    <div class="hexagon is-accent">
                                        <div>
                                            <i class="mdi mdi-linux"></i>
                                        </div>
                                    </div>
                                    <div class="hexagon is-red">
                                        <div>
                                            <i class="mdi mdi-puzzle"></i>
                                        </div>
                                    </div>
                                </div>
                        
                                <div class="user-about">
                                    <label>About Me</label>
                                    <div class="about-block">
                                        <i class="mdi mdi-domain"></i>
                                        <div class="about-text">
                                            <span>Works at</span>
                                            <span><a class="is-inverted" href="#">Peelman & Sons</a></span>
                                        </div>
                                    </div>
                                    <div class="about-block">
                                        <i class="mdi mdi-map-marker"></i>
                                        <div class="about-text">
                                            <span>From</span>
                                            <span><a class="is-inverted" href="#">Los Angeles</a></span>
                                        </div>
                                    </div>
                                </div>
                        
                            </div>
                        </div>
                        <!-- David details -->
                        <div id="david-details" class="panel-body is-user-details is-hidden">
                            <div class="panel-body-inner">
                        
                                <div class="subheader">
                                    <div class="action-icon">
                                        <i class="mdi mdi-video"></i>
                                    </div>
                                    <div class="action-icon">
                                        <i class="mdi mdi-camera"></i>
                                    </div>
                                    <div class="action-icon">
                                        <i class="mdi mdi-microphone"></i>
                                    </div>
                                    <div class="dropdown details-dropdown is-spaced is-neutral is-right dropdown-trigger ml-auto">
                                        <div>
                                            <div class="action-icon">
                                                <i class="mdi mdi-dots-vertical"></i>
                                            </div>
                                        </div>
                                        <div class="dropdown-menu" role="menu">
                                            <div class="dropdown-content">
                                                <a href="#" class="dropdown-item">
                                                    <div class="media">
                                                        <i data-feather="user"></i>
                                                        <div class="media-content">
                                                            <h3>View profile</h3>
                                                            <small>View this user's profile.</small>
                                                        </div>
                                                    </div>
                                                </a>
                                                <a class="dropdown-item">
                                                    <div class="media">
                                                        <i data-feather="mail"></i>
                                                        <div class="media-content">
                                                            <h3>Send message</h3>
                                                            <small>Send a message to the user's inbox.</small>
                                                        </div>
                                                    </div>
                                                </a>
                                                <hr class="dropdown-divider">
                                                <a class="dropdown-item">
                                                    <div class="media">
                                                        <i data-feather="share-2"></i>
                                                        <div class="media-content">
                                                            <h3>Share profile</h3>
                                                            <small>Share this user's profile.</small>
                                                        </div>
                                                    </div>
                                                </a>
                                                <a class="dropdown-item">
                                                    <div class="media">
                                                        <i data-feather="x"></i>
                                                        <div class="media-content">
                                                            <h3>Block user</h3>
                                                            <small>Block this user permanently.</small>
                                                        </div>
                                                    </div>
                                                </a>
                                            </div>
                                        </div>
                                    </div>        </div>
                        
                                <div class="details-avatar">
                                    <img src="https://via.placeholder.com/300x300" data-demo-src="assets/img/avatars/david.jpg" alt="">
                                    <div class="call-me">
                                        <i class="mdi mdi-phone"></i>
                                    </div>
                                </div>
                        
                                <div class="user-meta has-text-centered">
                                    <h3>David Kim</h3>
                                    <h4>Senior Developer</h4>
                                </div>
                        
                                <div class="user-badges">
                                    <div class="hexagon is-red">
                                        <div>
                                            <i class="mdi mdi-heart"></i>
                                        </div>
                                    </div>
                                    <div class="hexagon is-green">
                                        <div>
                                            <i class="mdi mdi-dog"></i>
                                        </div>
                                    </div>
                                    <div class="hexagon is-accent">
                                        <div>
                                            <i class="mdi mdi-flash"></i>
                                        </div>
                                    </div>
                                    <div class="hexagon is-blue">
                                        <div>
                                            <i class="mdi mdi-briefcase"></i>
                                        </div>
                                    </div>
                                </div>
                        
                                <div class="user-about">
                                    <label>About Me</label>
                                    <div class="about-block">
                                        <i class="mdi mdi-domain"></i>
                                        <div class="about-text">
                                            <span>Works at</span>
                                            <span><a class="is-inverted" href="#">Frost Entertainment</a></span>
                                        </div>
                                    </div>
                                    <div class="about-block">
                                        <i class="mdi mdi-map-marker"></i>
                                        <div class="about-text">
                                            <span>From</span>
                                            <span><a class="is-inverted" href="#">Chicago</a></span>
                                        </div>
                                    </div>
                                </div>
                        
                            </div>
                        </div>
                        <!-- Edward details -->
                        <div id="edward-details" class="panel-body is-user-details is-hidden">
                            <div class="panel-body-inner">
                        
                                <div class="subheader">
                                    <div class="action-icon">
                                        <i class="mdi mdi-video"></i>
                                    </div>
                                    <div class="action-icon">
                                        <i class="mdi mdi-camera"></i>
                                    </div>
                                    <div class="action-icon">
                                        <i class="mdi mdi-microphone"></i>
                                    </div>
                                    <div class="dropdown details-dropdown is-spaced is-neutral is-right dropdown-trigger ml-auto">
                                        <div>
                                            <div class="action-icon">
                                                <i class="mdi mdi-dots-vertical"></i>
                                            </div>
                                        </div>
                                        <div class="dropdown-menu" role="menu">
                                            <div class="dropdown-content">
                                                <a href="#" class="dropdown-item">
                                                    <div class="media">
                                                        <i data-feather="user"></i>
                                                        <div class="media-content">
                                                            <h3>View profile</h3>
                                                            <small>View this user's profile.</small>
                                                        </div>
                                                    </div>
                                                </a>
                                                <a class="dropdown-item">
                                                    <div class="media">
                                                        <i data-feather="mail"></i>
                                                        <div class="media-content">
                                                            <h3>Send message</h3>
                                                            <small>Send a message to the user's inbox.</small>
                                                        </div>
                                                    </div>
                                                </a>
                                                <hr class="dropdown-divider">
                                                <a class="dropdown-item">
                                                    <div class="media">
                                                        <i data-feather="share-2"></i>
                                                        <div class="media-content">
                                                            <h3>Share profile</h3>
                                                            <small>Share this user's profile.</small>
                                                        </div>
                                                    </div>
                                                </a>
                                                <a class="dropdown-item">
                                                    <div class="media">
                                                        <i data-feather="x"></i>
                                                        <div class="media-content">
                                                            <h3>Block user</h3>
                                                            <small>Block this user permanently.</small>
                                                        </div>
                                                    </div>
                                                </a>
                                            </div>
                                        </div>
                                    </div>        </div>
                        
                                <div class="details-avatar">
                                    <img src="https://via.placeholder.com/300x300" data-demo-src="assets/img/avatars/edward.jpeg" alt="">
                                    <div class="call-me">
                                        <i class="mdi mdi-phone"></i>
                                    </div>
                                </div>
                        
                                <div class="user-meta has-text-centered">
                                    <h3>Edward Mayers</h3>
                                    <h4>Financial analyst</h4>
                                </div>
                        
                                <div class="user-badges">
                                    <div class="hexagon is-red">
                                        <div>
                                            <i class="mdi mdi-heart"></i>
                                        </div>
                                    </div>
                                    <div class="hexagon is-green">
                                        <div>
                                            <i class="mdi mdi-dog"></i>
                                        </div>
                                    </div>
                                    <div class="hexagon is-accent">
                                        <div>
                                            <i class="mdi mdi-flash"></i>
                                        </div>
                                    </div>
                                </div>
                        
                                <div class="user-about">
                                    <label>About Me</label>
                                    <div class="about-block">
                                        <i class="mdi mdi-domain"></i>
                                        <div class="about-text">
                                            <span>Works at</span>
                                            <span><a class="is-inverted" href="#">Brettmann Bank</a></span>
                                        </div>
                                    </div>
                                    <div class="about-block">
                                        <i class="mdi mdi-map-marker"></i>
                                        <div class="about-text">
                                            <span>From</span>
                                            <span><a class="is-inverted" href="#">Santa Fe</a></span>
                                        </div>
                                    </div>
                                </div>
                        
                            </div>
                        </div>
                        <!-- Elise details -->
                        <div id="elise-details" class="panel-body is-user-details is-hidden">
                            <div class="panel-body-inner">
                        
                                <div class="subheader">
                                    <div class="action-icon">
                                        <i class="mdi mdi-video"></i>
                                    </div>
                                    <div class="action-icon">
                                        <i class="mdi mdi-camera"></i>
                                    </div>
                                    <div class="action-icon">
                                        <i class="mdi mdi-microphone"></i>
                                    </div>
                                    <div class="dropdown details-dropdown is-spaced is-neutral is-right dropdown-trigger ml-auto">
                                        <div>
                                            <div class="action-icon">
                                                <i class="mdi mdi-dots-vertical"></i>
                                            </div>
                                        </div>
                                        <div class="dropdown-menu" role="menu">
                                            <div class="dropdown-content">
                                                <a href="#" class="dropdown-item">
                                                    <div class="media">
                                                        <i data-feather="user"></i>
                                                        <div class="media-content">
                                                            <h3>View profile</h3>
                                                            <small>View this user's profile.</small>
                                                        </div>
                                                    </div>
                                                </a>
                                                <a class="dropdown-item">
                                                    <div class="media">
                                                        <i data-feather="mail"></i>
                                                        <div class="media-content">
                                                            <h3>Send message</h3>
                                                            <small>Send a message to the user's inbox.</small>
                                                        </div>
                                                    </div>
                                                </a>
                                                <hr class="dropdown-divider">
                                                <a class="dropdown-item">
                                                    <div class="media">
                                                        <i data-feather="share-2"></i>
                                                        <div class="media-content">
                                                            <h3>Share profile</h3>
                                                            <small>Share this user's profile.</small>
                                                        </div>
                                                    </div>
                                                </a>
                                                <a class="dropdown-item">
                                                    <div class="media">
                                                        <i data-feather="x"></i>
                                                        <div class="media-content">
                                                            <h3>Block user</h3>
                                                            <small>Block this user permanently.</small>
                                                        </div>
                                                    </div>
                                                </a>
                                            </div>
                                        </div>
                                    </div>        </div>
                        
                                <div class="details-avatar">
                                    <img src="https://via.placeholder.com/300x300" data-demo-src="assets/img/avatars/elise.jpg" alt="">
                                    <div class="call-me">
                                        <i class="mdi mdi-phone"></i>
                                    </div>
                                </div>
                        
                                <div class="user-meta has-text-centered">
                                    <h3>Elise Walker</h3>
                                    <h4>Social influencer</h4>
                                </div>
                        
                                <div class="user-badges">
                                    <div class="hexagon is-red">
                                        <div>
                                            <i class="mdi mdi-heart"></i>
                                        </div>
                                    </div>
                                    <div class="hexagon is-accent">
                                        <div>
                                            <i class="mdi mdi-flash"></i>
                                        </div>
                                    </div>
                                </div>
                        
                                <div class="user-about">
                                    <label>About Me</label>
                                    <div class="about-block">
                                        <i class="mdi mdi-domain"></i>
                                        <div class="about-text">
                                            <span>Works at</span>
                                            <span><a class="is-inverted" href="#">Social Media</a></span>
                                        </div>
                                    </div>
                                    <div class="about-block">
                                        <i class="mdi mdi-map-marker"></i>
                                        <div class="about-text">
                                            <span>From</span>
                                            <span><a class="is-inverted" href="#">London</a></span>
                                        </div>
                                    </div>
                                </div>
                        
                            </div>
                        </div>
                        <!-- Nelly details -->
                        <div id="nelly-details" class="panel-body is-user-details is-hidden">
                            <div class="panel-body-inner">
                        
                                <div class="subheader">
                                    <div class="action-icon">
                                        <i class="mdi mdi-video"></i>
                                    </div>
                                    <div class="action-icon">
                                        <i class="mdi mdi-camera"></i>
                                    </div>
                                    <div class="action-icon">
                                        <i class="mdi mdi-microphone"></i>
                                    </div>
                                    <div class="dropdown details-dropdown is-spaced is-neutral is-right dropdown-trigger ml-auto">
                                        <div>
                                            <div class="action-icon">
                                                <i class="mdi mdi-dots-vertical"></i>
                                            </div>
                                        </div>
                                        <div class="dropdown-menu" role="menu">
                                            <div class="dropdown-content">
                                                <a href="#" class="dropdown-item">
                                                    <div class="media">
                                                        <i data-feather="user"></i>
                                                        <div class="media-content">
                                                            <h3>View profile</h3>
                                                            <small>View this user's profile.</small>
                                                        </div>
                                                    </div>
                                                </a>
                                                <a class="dropdown-item">
                                                    <div class="media">
                                                        <i data-feather="mail"></i>
                                                        <div class="media-content">
                                                            <h3>Send message</h3>
                                                            <small>Send a message to the user's inbox.</small>
                                                        </div>
                                                    </div>
                                                </a>
                                                <hr class="dropdown-divider">
                                                <a class="dropdown-item">
                                                    <div class="media">
                                                        <i data-feather="share-2"></i>
                                                        <div class="media-content">
                                                            <h3>Share profile</h3>
                                                            <small>Share this user's profile.</small>
                                                        </div>
                                                    </div>
                                                </a>
                                                <a class="dropdown-item">
                                                    <div class="media">
                                                        <i data-feather="x"></i>
                                                        <div class="media-content">
                                                            <h3>Block user</h3>
                                                            <small>Block this user permanently.</small>
                                                        </div>
                                                    </div>
                                                </a>
                                            </div>
                                        </div>
                                    </div>        </div>
                        
                                <div class="details-avatar">
                                    <img src="https://via.placeholder.com/300x300" data-demo-src="assets/img/avatars/nelly.png" alt="">
                                    <div class="call-me">
                                        <i class="mdi mdi-phone"></i>
                                    </div>
                                </div>
                        
                                <div class="user-meta has-text-centered">
                                    <h3>Nelly Schwartz</h3>
                                    <h4>HR Manager</h4>
                                </div>
                        
                                <div class="user-badges">
                                    <div class="hexagon is-red">
                                        <div>
                                            <i class="mdi mdi-heart"></i>
                                        </div>
                                    </div>
                                    <div class="hexagon is-green">
                                        <div>
                                            <i class="mdi mdi-dog"></i>
                                        </div>
                                    </div>
                                    <div class="hexagon is-accent">
                                        <div>
                                            <i class="mdi mdi-flash"></i>
                                        </div>
                                    </div>
                                    <div class="hexagon is-blue">
                                        <div>
                                            <i class="mdi mdi-briefcase"></i>
                                        </div>
                                    </div>
                                </div>
                        
                                <div class="user-about">
                                    <label>About Me</label>
                                    <div class="about-block">
                                        <i class="mdi mdi-domain"></i>
                                        <div class="about-text">
                                            <span>Works at</span>
                                            <span><a class="is-inverted" href="#">Carrefour</a></span>
                                        </div>
                                    </div>
                                    <div class="about-block">
                                        <i class="mdi mdi-map-marker"></i>
                                        <div class="about-text">
                                            <span>From</span>
                                            <span><a class="is-inverted" href="#">Melbourne</a></span>
                                        </div>
                                    </div>
                                </div>
                        
                            </div>
                        </div>
                        <!-- Milly details -->
                        <div id="milly-details" class="panel-body is-user-details is-hidden">
                            <div class="panel-body-inner">
                        
                                <div class="subheader">
                                    <div class="action-icon">
                                        <i class="mdi mdi-video"></i>
                                    </div>
                                    <div class="action-icon">
                                        <i class="mdi mdi-camera"></i>
                                    </div>
                                    <div class="action-icon">
                                        <i class="mdi mdi-microphone"></i>
                                    </div>
                                    <div class="dropdown details-dropdown is-spaced is-neutral is-right dropdown-trigger ml-auto">
                                        <div>
                                            <div class="action-icon">
                                                <i class="mdi mdi-dots-vertical"></i>
                                            </div>
                                        </div>
                                        <div class="dropdown-menu" role="menu">
                                            <div class="dropdown-content">
                                                <a href="#" class="dropdown-item">
                                                    <div class="media">
                                                        <i data-feather="user"></i>
                                                        <div class="media-content">
                                                            <h3>View profile</h3>
                                                            <small>View this user's profile.</small>
                                                        </div>
                                                    </div>
                                                </a>
                                                <a class="dropdown-item">
                                                    <div class="media">
                                                        <i data-feather="mail"></i>
                                                        <div class="media-content">
                                                            <h3>Send message</h3>
                                                            <small>Send a message to the user's inbox.</small>
                                                        </div>
                                                    </div>
                                                </a>
                                                <hr class="dropdown-divider">
                                                <a class="dropdown-item">
                                                    <div class="media">
                                                        <i data-feather="share-2"></i>
                                                        <div class="media-content">
                                                            <h3>Share profile</h3>
                                                            <small>Share this user's profile.</small>
                                                        </div>
                                                    </div>
                                                </a>
                                                <a class="dropdown-item">
                                                    <div class="media">
                                                        <i data-feather="x"></i>
                                                        <div class="media-content">
                                                            <h3>Block user</h3>
                                                            <small>Block this user permanently.</small>
                                                        </div>
                                                    </div>
                                                </a>
                                            </div>
                                        </div>
                                    </div>        </div>
                        
                                <div class="details-avatar">
                                    <img src="https://via.placeholder.com/300x300" data-demo-src="assets/img/avatars/milly.jpg" alt="">
                                    <div class="call-me">
                                        <i class="mdi mdi-phone"></i>
                                    </div>
                                </div>
                        
                                <div class="user-meta has-text-centered">
                                    <h3>Milly Augustine</h3>
                                    <h4>Sales Manager</h4>
                                </div>
                        
                                <div class="user-badges">
                                    <div class="hexagon is-red">
                                        <div>
                                            <i class="mdi mdi-heart"></i>
                                        </div>
                                    </div>
                                    <div class="hexagon is-green">
                                        <div>
                                            <i class="mdi mdi-dog"></i>
                                        </div>
                                    </div>
                                    <div class="hexagon is-accent">
                                        <div>
                                            <i class="mdi mdi-flash"></i>
                                        </div>
                                    </div>
                                    <div class="hexagon is-blue">
                                        <div>
                                            <i class="mdi mdi-briefcase"></i>
                                        </div>
                                    </div>
                                </div>
                        
                                <div class="user-about">
                                    <label>About Me</label>
                                    <div class="about-block">
                                        <i class="mdi mdi-domain"></i>
                                        <div class="about-text">
                                            <span>Works at</span>
                                            <span><a class="is-inverted" href="#">Salesforce</a></span>
                                        </div>
                                    </div>
                                    <div class="about-block">
                                        <i class="mdi mdi-map-marker"></i>
                                        <div class="about-text">
                                            <span>From</span>
                                            <span><a class="is-inverted" href="#">Seattle</a></span>
                                        </div>
                                    </div>
                                </div>
                        
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
        <div id="add-conversation-modal" class="modal add-conversation-modal is-xsmall has-light-bg">
            <div class="modal-background"></div>
            <div class="modal-content">
        
                <div class="card">
                    <div class="card-heading">
                        <h3>New Conversation</h3>
                        <!-- Close X button -->
                        <div class="close-wrap">
                            <span class="close-modal">
                                <i data-feather="x"></i>
                            </span>
                        </div>
                    </div>
                    <div class="card-body">
        
                        <img src="assets/img/icons/chat/bubbles.svg" alt="">
        
                        <div class="field is-autocomplete">
                            <div class="control has-icon">
                                <input type="text" class="input simple-users-autocpl" placeholder="Search a user">
                                <div class="form-icon">
                                    <i data-feather="search"></i>
                                </div>
                            </div>
                        </div>
        
                        <div class="help-text">
                            Select a user to start a new conversation. You'll be able to add other users later.
                        </div>
        
                        <div class="action has-text-centered">
                            <button type="button" class="button is-solid accent-button raised">Start conversation</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>        <div class="explorer-menu">
            <div class="explorer-inner">
                <div class="explorer-container">
                    <!--Header-->
                    <div class="explorer-header">
                        <h3>Explore</h3>
                        <div class="control">
                            <input type="text" class="input is-rounded is-fade" placeholder="Filter">
                            <div class="form-icon">
                                <i data-feather="filter"></i>
                            </div>
                        </div>
                    </div>
                    <!--List-->
                    <div class="explore-list">
                        <!--item-->
                        <a href="feed.html" class="explore-item">
                            <img src="assets/img/icons/explore/clover.svg" alt="">
                            <h4>Feed</h4>
                        </a>
                        <!--item-->
                        <a href="profile-friends.html" class="explore-item">
                            <img src="assets/img/icons/explore/friends.svg" alt="">
                            <h4>Friends</h4>
                        </a>
                        <!--item-->
                        <a href="videos-home.html" class="explore-item">
                            <img src="assets/img/icons/explore/videos.svg" alt="">
                            <h4>Videos</h4>
                        </a>
                        <!--item-->
                        <a href="pages-main.html" class="explore-item">
                            <img src="assets/img/icons/explore/tag-euro.svg" alt="">
                            <h4>Pages</h4>
                        </a>
                        <!--item-->
                        <a class="explore-item is-coming-soon">
                            <img src="assets/img/icons/explore/cart.svg" alt="">
                            <span class="coming-soon">Coming Soon</span>
                        </a>
                        <!--item-->
                        <a class="explore-item is-coming-soon">
                            <img src="assets/img/icons/explore/house.svg" alt="">
                            <span class="coming-soon">Coming Soon</span>
                        </a>
                        <!--item-->
                        <a class="explore-item is-coming-soon">
                            <img src="assets/img/icons/explore/chrono.svg" alt="">
                            <span class="coming-soon">Coming Soon</span>
                        </a>
                        <!--item-->
                        <a href="questions-home.html" class="explore-item">
                            <img src="assets/img/icons/explore/question.svg" alt="">
                            <h4>Questions</h4>
                        </a>
                        <!--item-->
                        <a href="news.html" class="explore-item">
                            <img src="assets/img/icons/explore/news.svg" alt="">
                            <h4>News</h4>
                        </a>
                        <!--item-->
                        <a class="explore-item is-coming-soon">
                            <img src="assets/img/icons/explore/cake.svg" alt="">
                            <span class="coming-soon">Coming Soon</span>
                        </a>
                        <!--item-->
                        <a href="https://envato.com/" class="explore-item">
                            <img src="assets/img/icons/explore/envato.svg" alt="">
                            <h4>Envato</h4>
                        </a>
                        <!--item-->
                        <a href="events.html" class="explore-item">
                            <img src="assets/img/icons/explore/calendar.svg" alt="">
                            <h4>Events</h4>
                        </a>
                        <!--item-->
                        <a class="explore-item is-coming-soon">
                            <img src="assets/img/icons/explore/pin.svg" alt="">
                            <span class="coming-soon">Coming Soon</span>
                        </a>
                        <!--item-->
                        <a href="elements.html" class="explore-item">
                            <img src="assets/img/icons/explore/idea.svg" alt="">
                            <h4>Elements</h4>
                        </a>
                        <!--item-->
                        <a class="explore-item is-coming-soon">
                            <img src="assets/img/icons/explore/settings.svg" alt="">
                            <span class="coming-soon">Coming Soon</span>
                        </a>
                    </div>
                </div>
            </div>
        </div>        <div id="end-tour-modal" class="modal end-tour-modal is-xsmall has-light-bg">
            <div class="modal-background"></div>
            <div class="modal-content">
        
                <div class="card">
                    <div class="card-heading">
                        <h3></h3>
                        <!-- Close X button -->
                        <div class="close-wrap">
                            <span class="close-modal">
                                <i data-feather="x"></i>
                            </span>
                        </div>
                    </div>
                    <div class="card-body has-text-centered">
        
                        <div class="image-wrap">
                            <img src="assets/img/logo/friendkit.svg" alt="">
                        </div>
        
                        <h3>That's all folks!</h3>
                        <p>Thanks for taking the friendkit tour. There are still tons of other features for you to discover!</p>
        
                        <div class="action">
                            <a href="index.html#demos-section" class="button is-solid accent-button raised is-fullwidth">Explore</a>
                        </div>
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


    <!-- Concatenated js plugins and jQuery -->
    <script src="{{ asset('js/app.js') }}"></script>


    <!-- Page and UI related js -->
  <script src="{{ asset('js/feed.js') }}"></script>
    <script src="{{ asset('stories.js') }}"></script>
    <script src="{{ asset('chat.js') }}"></script>
    <script src="{{ asset('inbox.js') }}"></script>
    <script src="{{ asset('profile.js') }}"></script>
    <script src="{{ asset('friends.js') }}"></script>
    <script src="{{ asset('events.js') }}"></script>
    <script src="{{ asset('explorer.js') }}"></script>
    <script src="{{ asset('news.js') }}"></script>
    <script src="{{ asset('questions.js') }}"></script>
    <script src="{{ asset('videos.js') }}"></script>
    <script src="{{ asset('shop.js') }}"></script>
    <script src="{{ asset('settings.js') }}"></script>

    <!-- Components js -->
    <script src="{{ asset('js/widgets.js') }}"></script>
    <script src="{{ asset('js/autocompletes.js') }}"></script>
    <script src="{{ asset('js/modal-uploader.js') }}"></script>
    <script src="{{ asset('js/popovers-users.js') }}"></script>
    <script src="{{ asset('js/popovers-pages.js') }}"></script>
    <script src="{{ asset('js/go-live.js') }}"></script>
    <script src="{{ asset('js/lightbox.js') }}"></script>
    <script src="{{ asset('js/touch.js') }}"></script>
    <script src="{{ asset('js/tour.js') }}"></script>

</body>

</html>