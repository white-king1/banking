<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1.0, shrink-to-fit=no">
    <link href="/assets/images/favicon.png" rel="icon">
    <title>Truist Bank- All Notifications</title>
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
                                title="Payyed - HTML Template"><img src="/assets/images/tlnew4.png" alt="Truist"></a>
                        </div>
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
                                            <h4>See All Notifications</h4>
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
                                <li class="dropdown notifications active"> <a class="dropdown-toggle"
                                        href="#"><span class="text-5"><i class="far fa-bell"></i></span><span
                                            class="count">3</span></a>
                                    <ul class="dropdown-menu">
                                        <li class="text-center text-3 py-2">Notifications (3)</li>
                                        <li class="dropdown-divider mx-n3"></li>
                                        <li><a class="dropdown-item" href="#"><i class="fas fa-bell"></i>A new
                                                digital FIRC document is available for you to download<span
                                                    class="text-1 text-muted d-block">22 Jul 2021</span></a></li>
                                        <li><a class="dropdown-item" href="#"><i class="fas fa-bell"></i>Updates
                                                to our privacy policy. Please read.<span
                                                    class="text-1 text-muted d-block">04 March 2021</span></a></li>
                                        <li><a class="dropdown-item" href="#"><i class="fas fa-bell"></i>Update
                                                about Payyed fees<span class="text-1 text-muted d-block">18 Feb
                                                    2021</span></a></li>
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
                                        <li><a class="dropdown-item" href="settings-notifications.html"><i
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

        <!-- Content
  ============================================= -->
        <div id="content" class="py-4">
            <div class="container">
                <div class="row">
                    <!-- Left Panel
        ============================================= -->
                    <aside class="col-lg-3">

                        <!-- Profile Details
          =============================== -->
                        <div class="bg-white shadow-sm rounded text-center p-3 mb-4">
                            <div class="profile-thumb mt-3 mb-4"> <img class="rounded-circle"
                                    src="/assets/images/profile-thumb.jpg" alt="">
                                <div class="profile-thumb-edit bg-primary text-white" data-bs-toggle="tooltip"
                                    title="Change Profile Picture"> <i class="fas fa-camera position-absolute"></i>
                                    <input type="file" class="custom-file-input" id="customFile">
                                </div>
                            </div>
                            <p class="text-3 fw-500 mb-2">Hello, {{ Auth::user()->name }}</p>
                            <p class="mb-2"><a href="settings-profile.html" class="text-5 text-light"
                                    data-bs-toggle="tooltip" title="Edit Profile"><i class="fas fa-edit"></i></a></p>
                        </div>
                        <!-- Profile Details End -->

                        <!-- Available Balance
          =============================== -->
                        <div class="bg-white shadow-sm rounded text-center p-3 mb-4">
                            <div class="text-17 text-light my-3"><i class="fas fa-wallet"></i></div>
                            <h3 class="text-9 fw-400">${{ number_format(Auth::user()->wallet->balance) }}</h3>
                            <p class="mb-2 text-muted opacity-8">Available Balance</p>
                            <hr class="mx-n3">
                            <div class="d-flex"><a href="withdraw-money.html" class="btn-link me-auto">Withdraw</a>
                                <a href="deposit-money.html" class="btn-link ms-auto">Deposit</a></div>
                        </div>
                        <!-- Available Balance End -->

                        <!-- Need Help?
          =============================== -->
                        <div class="bg-white shadow-sm rounded text-center p-3 mb-4">
                            <div class="text-17 text-light my-3"><i class="fas fa-comments"></i></div>
                            <h3 class="text-5 fw-400 my-4">Need Help?</h3>
                            <p class="text-muted opacity-8 mb-4">Have questions or concerns regrading your account?<br>
                                Our experts are here to help!.</p>
                            <div class="d-grid"><a href="#" class="btn btn-primary">Chate with Us</a></div>
                        </div>
                        <!-- Need Help? End -->

                    </aside>
                    <!-- Left Panel End -->

                    <!-- Middle Panel
        ============================================= -->
                    <div class="col-lg-9">

                        <!-- Notifications
          ============================================= -->
                        <div class="bg-white shadow-sm rounded py-4 mb-4">
                            <h3 class="text-5 fw-400 px-4 mb-4">Notifications</h3>
                            <hr class="mb-0">

                            <!-- Notifications List
            =============================== -->
                            <div class="notifications-list">
                                <div class="notifications-item unread px-4 py-3" data-bs-toggle="modal"
                                    data-bs-target="#notifications-detail">
                                    <div class="row align-items-center flex-row">
                                        <div class="col-2 col-sm-1 text-center text-8 icon-bell"><i
                                                class="far fa-bell"></i></div>
                                        <div class="col col-sm-10">
                                            <h4 class="text-3 mb-1">A new digital FIRC document is available for you to
                                                download</h4>
                                            <span class="text-muted">Last Tuesday at 23:00</span>
                                        </div>
                                        <div class="col-1 text-end text-muted"><i class="fas fa-chevron-right"></i>
                                        </div>
                                    </div>
                                </div>
                                <div class="notifications-item unread px-4 py-3" data-bs-toggle="modal"
                                    data-bs-target="#notifications-detail">
                                    <div class="row align-items-center flex-row">
                                        <div class="col-2 col-sm-1 text-center text-8 icon-bell"><i
                                                class="far fa-bell"></i></div>
                                        <div class="col col-sm-10">
                                            <h4 class="text-3 mb-1">Update about Payoneer fees</h4>
                                            <span class="text-muted">4 Nov 2022</span>
                                        </div>
                                        <div class="col-1 text-end text-muted"><i class="fas fa-chevron-right"></i>
                                        </div>
                                    </div>
                                </div>
                                <div class="notifications-item px-4 py-3" data-bs-toggle="modal"
                                    data-bs-target="#notifications-detail">
                                    <div class="row align-items-center flex-row">
                                        <div class="col-2 col-sm-1 text-center text-8 icon-bell"><i
                                                class="far fa-bell"></i></div>
                                        <div class="col col-sm-10">
                                            <h4 class="text-3 mb-1">Updates to our privacy policy. Please read.</h4>
                                            <span class="text-muted">22 Jul 2022</span>
                                        </div>
                                        <div class="col-1 text-end text-muted"><i class="fas fa-chevron-right"></i>
                                        </div>
                                    </div>
                                </div>
                                <div class="notifications-item unread px-4 py-3" data-bs-toggle="modal"
                                    data-bs-target="#notifications-detail">
                                    <div class="row align-items-center flex-row">
                                        <div class="col-2 col-sm-1 text-center text-8 icon-bell"><i
                                                class="far fa-bell"></i></div>
                                        <div class="col col-sm-10">
                                            <h4 class="text-3 mb-1">Password Changed</h4>
                                            <span class="text-muted">15 May 2021</span>
                                        </div>
                                        <div class="col-1 text-end text-muted"><i class="fas fa-chevron-right"></i>
                                        </div>
                                    </div>
                                </div>
                                <div class="notifications-item px-4 py-3" data-bs-toggle="modal"
                                    data-bs-target="#notifications-detail">
                                    <div class="row align-items-center flex-row">
                                        <div class="col-2 col-sm-1 text-center text-8 icon-bell"><i
                                                class="far fa-bell"></i></div>
                                        <div class="col col-sm-10">
                                            <h4 class="text-3 mb-1">A new digital FIRC document is available for you to
                                                download</h4>
                                            <span class="text-muted">14 Apr 2021</span>
                                        </div>
                                        <div class="col-1 text-end text-muted"><i class="fas fa-chevron-right"></i>
                                        </div>
                                    </div>
                                </div>
                                <div class="notifications-item px-4 py-3" data-bs-toggle="modal"
                                    data-bs-target="#notifications-detail">
                                    <div class="row align-items-center flex-row">
                                        <div class="col-2 col-sm-1 text-center text-8 icon-bell"><i
                                                class="far fa-bell"></i></div>
                                        <div class="col col-sm-10">
                                            <h4 class="text-3 mb-1">A new digital FIRC document is available for you to
                                                download</h4>
                                            <span class="text-muted">17 March 2021</span>
                                        </div>
                                        <div class="col-1 text-end text-muted"><i class="fas fa-chevron-right"></i>
                                        </div>
                                    </div>
                                </div>
                                <div class="notifications-item px-4 py-3" data-bs-toggle="modal"
                                    data-bs-target="#notifications-detail">
                                    <div class="row align-items-center flex-row">
                                        <div class="col-2 col-sm-1 text-center text-8 icon-bell"><i
                                                class="far fa-bell"></i></div>
                                        <div class="col col-sm-10">
                                            <h4 class="text-3 mb-1">A new digital FIRC document is available for you to
                                                download</h4>
                                            <span class="text-muted">18 Feb 2021</span>
                                        </div>
                                        <div class="col-1 text-end text-muted"><i class="fas fa-chevron-right"></i>
                                        </div>
                                    </div>
                                </div>
                                <div class="notifications-item px-4 py-3" data-bs-toggle="modal"
                                    data-bs-target="#notifications-detail">
                                    <div class="row align-items-center flex-row">
                                        <div class="col-2 col-sm-1 text-center text-8 icon-bell"><i
                                                class="far fa-bell"></i></div>
                                        <div class="col col-sm-10">
                                            <h4 class="text-3 mb-1">Update about Payoneer fees</h4>
                                            <span class="text-muted">24 Dec 2020</span>
                                        </div>
                                        <div class="col-1 text-end text-muted"><i class="fas fa-chevron-right"></i>
                                        </div>
                                    </div>
                                </div>
                                <div class="notifications-item px-4 py-3" data-bs-toggle="modal"
                                    data-bs-target="#notifications-detail">
                                    <div class="row align-items-center flex-row">
                                        <div class="col-2 col-sm-1 text-center text-8 icon-bell"><i
                                                class="far fa-bell"></i></div>
                                        <div class="col col-sm-10">
                                            <h4 class="text-3 mb-1">Updates to our privacy policy. Please read.</h4>
                                            <span class="text-muted">6 Nov 2020</span>
                                        </div>
                                        <div class="col-1 text-end text-muted"><i class="fas fa-chevron-right"></i>
                                        </div>
                                    </div>
                                </div>
                                <div class="notifications-item px-4 py-3" data-bs-toggle="modal"
                                    data-bs-target="#notifications-detail">
                                    <div class="row align-items-center flex-row">
                                        <div class="col-2 col-sm-1 text-center text-8 icon-bell"><i
                                                class="far fa-bell"></i></div>
                                        <div class="col col-sm-10">
                                            <h4 class="text-3 mb-1">A new digital FIRC document is available for you to
                                                download</h4>
                                            <span class="text-muted">16 Oct 2020</span>
                                        </div>
                                        <div class="col-1 text-end text-muted"><i class="fas fa-chevron-right"></i>
                                        </div>
                                    </div>
                                </div>
                                <div class="text-center mt-4"> <a class="btn btn-sm btn-outline-secondary shadow-none"
                                        href="#">Load More</a> </div>
                            </div>
                            <!-- Notifications List End -->

                            <!-- Notifications Item Details Modal
            =========================================== -->
                            <div id="notifications-detail" class="modal fade" role="dialog" aria-hidden="true">
                                <div class="modal-dialog modal-lg modal-dialog modal-dialog-centered modal-dialog-scrollable"
                                    role="document">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title d-flex align-items-center fw-400"><span
                                                    class="text-6 me-2"><i class="far fa-bell"></i></span>
                                                Notifications Details</h5>
                                            <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                aria-label="Close"></button>
                                        </div>
                                        <div class="modal-body p-4 text-3">
                                            <div class="row">
                                                <div class="col-sm-12">
                                                    <h4 class="text-5">Updates to our privacy policy. Please read.</h4>
                                                    <p class="text-muted">Last Tuesday at 23:00</p>
                                                    <p class="fw-500">Dear {{ Auth::user()->name }},</p>
                                                    <p>We have updated our <a href="#"><u>privacy policy</u></a>
                                                        to make it easier for you to understand how we collect, use,
                                                        disclose, store, and transfer your information. It also reflects
                                                        recent developments in applicable privacy laws. The changes are
                                                        effective as of <strong class="fw-500">Sept 01, 2023</strong> so
                                                        please take the time to familiarize yourself with our privacy
                                                        practices.</p>
                                                    <p>The changes will take effect automatically and by continuing to
                                                        use our services you agree to the updated <a
                                                            href="#"><u>privacy policy</u></a>.</p>
                                                    <p>Thank You,<br>
                                                        Truist Bank Team</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="modal-footer">
                                            <div class="btn-group m-0 w-100 row">
                                                <button type="button"
                                                    class="btn btn-secondary shadow-none col-6"><span
                                                        class="me-1"><i class="far fa-eye-slash"></i></span>Mark as
                                                    Unread</button>
                                                <button type="button" class="btn btn-danger shadow-none col-6"><span
                                                        class="me-1"><i
                                                            class="far fa-trash-alt"></i></span>Delete</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Notifications Item Details Modal End -->

                        </div>
                        <!-- Notifications End -->

                    </div>
                    <!-- Middle Panel End -->
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
                            <p class="text-center text-lg-start mb-2 mb-lg-0">Copyright &copy; 2022 <a
                                    href="#">Payyed</a>. All Rights Reserved.</p>
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
    <!-- Style Switcher -->
    <script src="/assets/js/switcher.min.js"></script>
    <script src="/assets/js/theme.js"></script>
</body>

</html>
