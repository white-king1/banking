<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1.0, shrink-to-fit=no">
    <link href="/assets/images/favicon.png" rel="icon">
    <title>Truist Bank - Money Transfer and Online Payments Success Page</title>
    <meta name="description"
        content="This professional design html template is for build a Money Transfer and online payments website.">
    <meta name="author" content="harnishdesign.net">

    <!-- Web Fonts
============================================= -->
    <link rel="stylesheet"
        href="../../../css2?family=Rubik:ital,wght@0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap">

    <!-- Stylesheet
============================================= -->
    <link rel="stylesheet" type="text/css" href="/assets/vendor/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="/assets/vendor/font-awesome/css/all.min.css">
    <link rel="stylesheet" type="text/css" href="/assets/vendor/bootstrap-select/css/bootstrap-select.min.css">
    <link rel="stylesheet" type="text/css" href="/assets/vendor/currency-flags/css/currency-flags.min.css">
    <link rel="stylesheet" type="text/css" href="/assets/css/stylesheet.css">
    <!-- Colors Css -->
    <link id="color-switcher" type="text/css" rel="stylesheet" href="#">
</head>

<body>

    <!-- Preloader -->
    <div id="preloader">
        <div data-loader="dual-ring"></div>
    </div>
    <!-- Preloader End -->

    <!-- Document Wrapper
============================================= -->
    <div id="main-wrapper">
        <!-- Header
  ============================================= -->
        <header id="header">
            <div class="container">
                <div class="header-row">
                    <div class="header-column justify-content-start">
                        <!-- Logo
          ============================= -->
                        <div class="logo me-3"> <a class="d-flex" href="{{ route('welcome') }}"
                                title="Payyed - HTML Template"><img src="/assets/images/tlnew4.png"
                                    alt="Truist Bank"></a> </div>
                        <!-- Logo end -->
                        <!-- Collapse Button
          ============================== -->
                        <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                            data-bs-target="#header-nav"> <span></span> <span></span> <span></span> </button>
                        <!-- Collapse Button end -->

                        <!-- Primary Navigation
          ============================== -->
                        <nav class="primary-menu navbar navbar-expand-lg">
                            <div id="header-nav" class="collapse navbar-collapse">
                                <ul class="navbar-nav me-auto">
                                    <li><a href="">
                                            <h4>Transfer Success</h4>
                                        </a></li>
                                    <li><a href="{{ route('user.dashboard') }}">Dashboard</a></li>
                                </ul>
                            </div>
                        </nav>
                        <!-- Primary Navigation end -->
                    </div>
                    <div class="header-column justify-content-end">
                        <!-- My Profile
          ============================== -->
                        <nav class="login-signup navbar navbar-expand">
                            <ul class="navbar-nav">
                                <li class="dropdown language"> <a class="dropdown-toggle" href="#">En</a>
                                    <ul class="dropdown-menu">
                                        <li><a class="dropdown-item" href="#">English</a></li>
                                        <li><a class="dropdown-item" href="#">French</a></li>
                                        <li><a class="dropdown-item" href="#">Русский</a></li>
                                        <li><a class="dropdown-item" href="#">简体中文</a></li>
                                        <li><a class="dropdown-item" href="#">Türkçe</a></li>
                                    </ul>
                                </li>
                                <li class="dropdown notifications"> <a class="dropdown-toggle" href="#"><span
                                            class="text-5"><i class="far fa-bell"></i></span><span
                                            class="count">3</span></a>
                                    <ul class="dropdown-menu">
                                        <li class="text-center text-3 py-2">Notifications (3)</li>
                                        <li class="dropdown-divider mx-n3"></li>
                                        <li><a class="dropdown-item" href="#"><i class="fas fa-bell"></i>A new
                                                digital FIRC document is available for you to download<span
                                                    class="text-1 text-muted d-block">22 Nov 2022</span></a></li>
                                        <li><a class="dropdown-item" href="#"><i class="fas fa-bell"></i>Updates
                                                to our privacy policy. Please
                                                read.<span class="text-1 text-muted d-block">04 Jul 2022</span></a>
                                        </li>
                                        <li><a class="dropdown-item" href="#"><i class="fas fa-bell"></i>Update
                                                about Payyed fees<span class="text-1 text-muted d-block">18 March
                                                    2022</span></a></li>
                                        <li class="dropdown-divider mx-n3"></li>
                                        <li><a class="dropdown-item text-center text-primary px-0"
                                                href="{{ route('seeall.notify') }}">See all Notifications</a></li>
                                    </ul>
                                </li>
                                <li class="dropdown profile ms-2"> <a class="px-0 dropdown-toggle" href="#"><img
                                            class="rounded-circle" src="/assets/images/profile-thumb-sm.jpg"
                                            alt=""></a>
                                    <ul class="dropdown-menu">
                                        <li class="text-center text-3 py-2">Hi, {{ Auth::user()->name }}</li>
                                        <li class="dropdown-divider mx-n3"></li>
                                        <li><a class="dropdown-item" href="{{ route('user.profile') }}"><i
                                                    class="fas fa-user"></i>My Profile</a></li>
                                        <li><a class="dropdown-item" href="{{ route('security') }}"><i
                                                    class="fas fa-shield-alt"></i>Security</a></li>
                                        <li><a class="dropdown-item" href="{{ route('payment.method') }}"><i
                                                    class="fas fa-credit-card"></i>Payment Methods</a></li>
                                        <li><a class="dropdown-item" href=""><i
                                                    class="fas fa-bell"></i>Notifications</a></li>
                                        <li class="dropdown-divider mx-n3"></li>
                                        <li><a class="dropdown-item" href="help.html"><i
                                                    class="fas fa-life-ring"></i>Need Help?</a></li>
                                        <li>
                                            <form action="{{ route('logout') }} " method="post">@csrf

                                                <button class="btn btn-primary px-3"><i class="text-white"
                                                        data-feather="log-in">
                                                    </i>Logout</button>
                                            </form>


                                        </li>
                                    </ul>
                                </li>
                            </ul>
                        </nav>
                        <!-- My Profile end -->
                    </div>
                </div>
            </div>
        </header>
        <!-- Header End -->

        <!-- Secondary menu
  ============================================= -->
        <div class="bg-primary">
            <div class="container d-flex justify-content-center">
                <ul class="nav nav-pills alternate nav-lg border-bottom-0">
                    <li class="nav-item"> <a class="nav-link active" href="">Transfer</a></li>
                </ul>
            </div>
        </div>
        <!-- Secondary menu end -->

        <!-- Content
  ============================================= -->
        <div id="content" class="py-4">
            <div class="container">

                <!-- Steps Progress bar -->
                <div class="row mt-4 mb-5">
                    <div class="col-lg-11 mx-auto">
                        <div class="row widget-steps">
                            <div class="col-4 step complete">
                                <div class="step-name">Details</div>
                                <div class="progress">
                                    <div class="progress-bar"></div>
                                </div>
                                <span class="step-dot"></span>
                            </div>
                            <div class="col-4 step complete">
                                <div class="step-name">Confirm</div>
                                <div class="progress">
                                    <div class="progress-bar"></div>
                                </div>
                                <span class="step-dot"></span>
                            </div>
                            <div class="col-4 step complete">
                                <div class="step-name">Success</div>
                                <div class="progress">
                                    <div class="progress-bar"></div>
                                </div>
                                <span class="step-dot"></span>
                            </div>
                        </div>
                    </div>
                </div>
                <h2 class="fw-400 text-center mt-3 mb-4">Send Money</h2>
                <div class="row">
                    <div class="col-md-9 col-lg-7 col-xl-6 mx-auto">
                        <!-- Send Money Success
          ============================================= -->
                        <div class="bg-white text-center shadow-sm rounded p-3 pt-sm-4 pb-sm-5 px-sm-5 mb-4">
                            <div class="my-4">
                                <p class="text-success text-20 lh-1"><i class="fas fa-check-circle"></i></p>
                                <p class="text-success text-8 fw-500 lh-1">Success!</p>
                                <p class="lead">Transactions Complete</p>
                            </div>

                            <div class="text-3 mb-4">
                                <p class="text-3 mb-4">
                                    You've Succesfully trnsfered <span class="text-4 fw-500">$20,000</span> to <br>
                                    <span class="fw-500">Name:: COLLECTOR</span>, with <br>
                                    <span class="fw-500">Account no:: 9435257932</span>, <br>
                                    <span class="fw-500">Bank Name/Description:: HSBC BANK, payment recieved</span>,
                                    <br>
                                    See transaction details under <a class="btn-link" href="#">Activity</a>.
                                </p>
                            </div>

                            <div class="d-grid"><button class="btn btn-primary">Send Money Again</button></div>
                            <a class="text-3 d-inline-block btn-link mt-4" href="#"><i
                                    class="fas fa-print"></i> Print</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Content end -->

        <!-- Footer
  ============================================= -->
        <footer id="footer">
            <div class="container">
                <div class="row">
                    <div class="col-lg d-lg-flex align-items-center">
                        <ul class="nav justify-content-center justify-content-lg-start text-3">
                            <li class="nav-item"> <a class="nav-link active" href="#">About Us</a></li>
                            <li class="nav-item"> <a class="nav-link" href="#">Support</a></li>
                            <li class="nav-item"> <a class="nav-link" href="#">Help</a></li>
                            <li class="nav-item"> <a class="nav-link" href="#">Careers</a></li>
                            <li class="nav-item"> <a class="nav-link" href="#">Affiliate</a></li>
                            <li class="nav-item"> <a class="nav-link" href="#">Fees</a></li>
                        </ul>
                    </div>
                    <div class="col-lg d-lg-flex justify-content-lg-end mt-3 mt-lg-0">
                        <ul class="social-icons justify-content-center">
                            <li class="social-icons-facebook"><a data-bs-toggle="tooltip"
                                    href="http://www.facebook.com/" target="_blank" title="Facebook"><i
                                        class="fab fa-facebook-f"></i></a></li>
                            <li class="social-icons-twitter"><a data-bs-toggle="tooltip"
                                    href="http://www.twitter.com/" target="_blank" title="Twitter"><i
                                        class="fab fa-twitter"></i></a></li>
                            <li class="social-icons-google"><a data-bs-toggle="tooltip" href="http://www.google.com/"
                                    target="_blank" title="Google"><i class="fab fa-google"></i></a></li>
                            <li class="social-icons-youtube"><a data-bs-toggle="tooltip"
                                    href="http://www.youtube.com/" target="_blank" title="Youtube"><i
                                        class="fab fa-youtube"></i></a></li>
                        </ul>
                    </div>
                </div>
                <div class="footer-copyright pt-3 pt-lg-2 mt-2">
                    <div class="row">
                        <div class="col-lg">
                            <p class="text-center text-lg-start mb-2 mb-lg-0">Copyright &copy; 2023 <a
                                    href="#">Truist Bank</a>. All Rights Reserved.</p>
                        </div>
                        <div class="col-lg d-lg-flex align-items-center justify-content-lg-end">
                            <ul class="nav justify-content-center">
                                <li class="nav-item"> <a class="nav-link active" href="#">Security</a></li>
                                <li class="nav-item"> <a class="nav-link" href="#">Terms</a></li>
                                <li class="nav-item"> <a class="nav-link" href="#">Privacy</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
        <!-- Footer end -->

    </div>
    <!-- Document Wrapper end -->

    <!-- Back to Top
============================================= -->
    <a id="back-to-top" data-bs-toggle="tooltip" title="Back to Top" href="javascript:void(0)"><i
            class="fa fa-chevron-up"></i></a>

    <!-- Styles Switcher -->
    <div id="styles-switcher" class="left">
        <h2 class="text-3">Color Switcher</h2>
        <hr>
        <ul>
            <li class="blue" data-bs-toggle="tooltip" title="Blue" data-path="css/color-blue.css"></li>
            <li class="indigo" data-bs-toggle="tooltip" title="Indigo" data-path="css/color-indigo.css"></li>
            <li class="purple" data-bs-toggle="tooltip" title="Purple" data-path="css/color-purple.css"></li>
            <li class="pink" data-bs-toggle="tooltip" title="Pink" data-path="css/color-pink.css"></li>
            <li class="red" data-bs-toggle="tooltip" title="Red" data-path="css/color-red.css"></li>
            <li class="orange" data-bs-toggle="tooltip" title="Orange" data-path="css/color-orange.css"></li>
            <li class="yellow" data-bs-toggle="tooltip" title="Yellow" data-path="css/color-yellow.css"></li>
            <li class="teal" data-bs-toggle="tooltip" title="Teal" data-path="css/color-teal.css"></li>
            <li class="cyan" data-bs-toggle="tooltip" title="Cyan" data-path="css/color-cyan.css"></li>
            <li class="brown" data-bs-toggle="tooltip" title="Brown" data-path="css/color-brown.css"></li>
        </ul>
        <button class="btn btn-dark btn-sm border-0 fw-400 rounded-0 shadow-none" data-bs-toggle="tooltip"
            title="Green" id="reset-color">Reset Default</button>
        <button class="btn switcher-toggle"><i class="fas fa-cog"></i></button>
    </div>
    <!-- Styles Switcher End -->

    <!-- Script -->
    <script src="/assets/vendor/jquery/jquery.min.js"></script>
    <script src="/assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="/assets/vendor/bootstrap-select/js/bootstrap-select.min.js"></script>
    <!-- Style Switcher -->
    <script src="/assets/js/switcher.min.js"></script>
    <script src="/assets/js/theme.js"></script>
</body>

</html>
