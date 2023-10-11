@extends('layouts.app')
@section('content')
<!-- Content
  ============================================= -->
  <div id="content">

    <!-- Slideshow
    ============================================= -->
	<div class="owl-carousel owl-theme single-slideshow" data-autoplay="true" data-loop="true" data-autoheight="true" data-nav="true" data-items="1">
      <div class="item">
        <section class="hero-wrap">
          <div class="hero-mask opacity-7 bg-dark"></div>
          <div class="hero-bg" style="background-image:url('assets/images/bg/image-1.jpg');"></div>
          <div class="hero-content d-flex fullscreen-with-header py-5">
            <div class="container my-auto text-center">
              <h2 class="text-16 text-white">Send & Receive Money</h2>
              <p class="text-5 text-white mb-4">Quickly and easily send, receive and request money online with Payyed.<br class="d-none d-lg-block">
                Over 180 countries and 120 currencies supported.</p>
              <a href="#" class="btn btn-primary m-2">Open a Free Account</a> <a class="btn btn-outline-light video-btn m-2" href="#" data-src="https://www.youtube.com/embed/7e90gBu4pas" data-bs-toggle="modal" data-bs-target="#videoModal"><span class="text-2 me-3"><i class="fas fa-play"></i></span>See How it Works</a> </div>
          </div>
        </section>
      </div>
      <div class="item">
        <section class="hero-wrap">
          <div class="hero-bg" style="background-image:url('assets/images/bg/image-3.jpg');"></div>
          <div class="hero-content d-flex fullscreen-with-header py-5">
            <div class="container my-auto">
              <div class="row">
                <div class="col-12 col-lg-8 col-xl-7 text-center text-lg-start">
                  <h2 class="text-13 text-white">Trusted by more than 50,000 businesses worldwide.</h2>
                  <p class="text-5 text-white mb-4">Over 180 countries and 120 currencies supported.</p>
                  <a href="#" class="btn btn-primary me-3">Get started for free</a> <a class="btn btn-link text-light video-btn" href="#" data-src="https://www.youtube.com/embed/7e90gBu4pas" data-bs-toggle="modal" data-bs-target="#videoModal"><span class="me-2"><i class="fas fa-play-circle"></i></span>Watch Demo</a> </div>
              </div>
            </div>
          </div>
        </section>
      </div>
    </div>
    <!-- Slideshow end -->

    <!-- Why choose
    ============================================= -->
    <section class="section bg-white">
      <div class="container">
        <h2 class="text-9 text-center">Why should you choose Payyed?</h2>
        <p class="lead text-center mb-5">Here’s Top 4 reasons why using a Payyed account for manage your money.</p>
        <div class="row gy-5">
          <div class="col-sm-6 col-lg-3">
            <div class="featured-box">
              <div class="featured-box-icon text-primary"> <i class="fas fa-hand-pointer"></i> </div>
              <h3>Easy to use</h3>
              <p class="text-3">Lisque persius interesset his et, in quot quidam persequeris vim, ad mea essent possim iriure.</p>
              <a href="#" class="btn-link text-3">Learn more<i class="fas fa-chevron-right text-1 ms-2"></i></a> </div>
          </div>
          <div class="col-sm-6 col-lg-3">
            <div class="featured-box">
              <div class="featured-box-icon text-primary"> <i class="fas fa-share"></i> </div>
              <h3>Faster Payments</h3>
              <p class="text-3">Persius interesset his et, in quot quidam persequeris vim, ad mea essent possim iriure.</p>
              <a href="#" class="btn-link text-3">Learn more<i class="fas fa-chevron-right text-1 ms-2"></i></a> </div>
          </div>
          <div class="col-sm-6 col-lg-3">
            <div class="featured-box">
              <div class="featured-box-icon text-primary"> <i class="fas fa-dollar-sign"></i> </div>
              <h3>Lower Fees</h3>
              <p class="text-3">Essent lisque persius interesset his et, in quot quidam persequeris vim, ad mea essent possim iriure.</p>
              <a href="#" class="btn-link text-3">Learn more<i class="fas fa-chevron-right text-1 ms-2"></i></a> </div>
          </div>
          <div class="col-sm-6 col-lg-3">
            <div class="featured-box">
              <div class="featured-box-icon text-primary"> <i class="fas fa-lock"></i> </div>
              <h3>100% secure</h3>
              <p class="text-3">Quidam lisque persius interesset his et, in quot quidam persequeris vim, ad mea essent possim iriure.</p>
              <a href="#" class="btn-link text-3">Learn more<i class="fas fa-chevron-right text-1 ms-2"></i></a> </div>
          </div>
        </div>
      </div>
    </section>
    <!-- Why choose end -->

    <!-- Payment Solutions
    ============================================= -->
    <section class="section">
      <div class="container overflow-hidden">
        <div class="row g-5">
          <div class="col-lg-5 col-xl-6 d-flex">
            <div class="my-auto">
              <h2 class="text-9">Payment Solutions for everyone.</h2>
              <p class="text-4">Quidam lisque persius interesset his et, in quot quidam persequeris vim, ad mea essent possim iriure. Lisque persius interesset his et, in quot quidam persequeris vim, ad mea essent possim iriure. lisque persius interesset his et, in quot quidam mea essent possim iriure.</p>
              <a href="#" class="btn-link text-4">Find more solution<i class="fas fa-chevron-right text-2 ms-2"></i></a> </div>
          </div>
          <div class="col-lg-7 col-xl-6">
            <div class="row g-4 banner style-2 justify-content-center">
              <div class="col-12 col-sm-6 text-center">
                <div class="item rounded shadow d-inline-block"> <a href="#">
                  <div class="caption rounded-bottom">
                    <h2 class="text-5 fw-400 mb-0">Freelancer</h2>
                  </div>
                  <div class="banner-mask"></div>
                  <img class="img-fluid" src="assets/images/anyone-freelancer.jpg" width="410" height="350" alt="banner"> </a> </div>
              </div>
              <div class="col-12 col-sm-6 text-center">
                <div class="item rounded shadow d-inline-block"> <a href="#">
                  <div class="caption rounded-bottom">
                    <h2 class="text-5 fw-400 mb-0">Online Shopping</h2>
                  </div>
                  <div class="banner-mask"></div>
                  <img class="img-fluid" src="assets/images/anyone-online-shopping.jpg" width="410" height="350" alt="banner"> </a> </div>
              </div>
              <div class="col-12 col-sm-6 mb-sm-0 text-center">
                <div class="item rounded shadow d-inline-block"> <a href="#">
                  <div class="caption rounded-bottom">
                    <h2 class="text-5 fw-400 mb-0">Online Sellers</h2>
                  </div>
                  <div class="banner-mask"></div>
                  <img class="img-fluid" src="assets/images/anyone-online-sellers.jpg" width="410" height="350" alt="banner"> </a> </div>
              </div>
              <div class="col-12 col-sm-6 text-center">
                <div class="item rounded shadow d-inline-block"> <a href="#">
                  <div class="caption rounded-bottom">
                    <h2 class="text-5 fw-400 mb-0">Affiliate Marketing</h2>
                  </div>
                  <div class="banner-mask"></div>
                  <img class="img-fluid" src="assets/images/anyone-affiliate-marketing.jpg" width="410" height="350" alt="banner"> </a> </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- Payment Solutions end -->

    <!-- What can you do
    ============================================= -->
    <section class="section bg-white">
      <div class="container">
        <h2 class="text-9 text-center">What can you do with Payyed?</h2>
        <p class="lead text-center mb-5">Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
        <div class="row g-4">
          <div class="col-sm-6 col-lg-3"> <a href="#">
            <div class="featured-box style-5 rounded">
              <div class="featured-box-icon text-primary"> <i class="fas fa-share-square"></i> </div>
              <h3>Send Money</h3>
            </div>
            </a> </div>
          <div class="col-sm-6 col-lg-3"> <a href="#">
            <div class="featured-box style-5 rounded">
              <div class="featured-box-icon text-primary"> <i class="fas fa-check-square"></i> </div>
              <h3>Receive Money</h3>
            </div>
            </a> </div>
          <div class="col-sm-6 col-lg-3"> <a href="#">
            <div class="featured-box style-5 rounded">
              <div class="featured-box-icon text-primary"> <i class="fas fa-user-friends"></i> </div>
              <h3>Pay a Friend</h3>
            </div>
            </a> </div>
          <div class="col-sm-6 col-lg-3"> <a href="#">
            <div class="featured-box style-5 rounded">
              <div class="featured-box-icon text-primary"> <i class="fas fa-shopping-bag"></i> </div>
              <h3>Online Shopping</h3>
            </div>
            </a> </div>
        </div>
        <div class="text-center mt-5"><a href="#" class="btn-link text-4">See more can you do<i class="fas fa-chevron-right text-2 ms-2"></i></a></div>
      </div>
    </section>
    <!-- What can you do end -->

    <!-- How work
    ============================================= -->
    <section class="section">
      <div class="container">
        <div class="row">
          <div class="col-lg-6">
            <div class="card bg-dark-3 shadow-sm border-0"> <img class="card-img img-fluid opacity-8" src="assets/images/truist-debitcrd.png" width="570" height="362" alt="banner">
              <div class="card-img-overlay p-0"> <a class="d-flex h-100 video-btn" href="#" data-src="https://www.youtube.com/embed/7e90gBu4pas" data-bs-toggle="modal" data-bs-target="#videoModal"> <span class="playButton playButton-pulsing bg-white m-auto"><i class="fas fa-play"></i></span> </a> </div>
            </div>
          </div>
          <div class="col-lg-6 mt-5 mt-lg-0">
            <div class="ms-4">
			  <h2 class="text-9">How does it work?</h2>
              <p class="text-4">Quidam lisque persius interesset his et, in quot quidam persequeris essent possim iriure. Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
              <ul class="list-unstyled text-3 lh-lg">
                <li><i class="fas fa-check me-2"></i>Sign Up Account</li>
                <li><i class="fas fa-check me-2"></i>Receive & Send Payments from worldwide</li>
                <li><i class="fas fa-check me-2"></i>Your funds will be transferred to your local bank account</li>
              </ul>
              <a href="#" class="btn btn-outline-primary shadow-none mt-2">Open a Free Account</a>
          </div>
		  </div>
        </div>
      </div>
    </section>
    <!-- How work end -->

    <!-- Testimonial
    ============================================= -->
    <section class="section bg-white">
      <div class="container">
        <h2 class="text-9 text-center">What people are saying about Payyed</h2>
        <p class="lead text-center mb-4">A payments experience people love to talk about</p>
        <div class="owl-carousel owl-theme" data-autoplay="true" data-nav="true" data-loop="true" data-margin="30" data-slideby="2" data-stagepadding="5" data-items-xs="1" data-items-sm="1" data-items-md="2" data-items-lg="2">
          <div class="item">
            <div class="testimonial rounded text-center p-4">
              <p class="text-9 text-muted opacity-2 lh-base mb-0"><i class="fa fa-quote-left"></i></p>
			  <p class="text-4">“Easy to use, reasonably priced simply dummy text of the printing and typesetting industry. Quidam lisque persius interesset his et, in quot quidam possim iriure.”</p>
              <strong class="d-block fw-500">Jay Shah</strong> <span class="text-muted">Founder at Icomatic Pvt Ltd</span> </div>
          </div>
          <div class="item">
            <div class="testimonial rounded text-center p-4">
              <p class="text-9 text-muted opacity-2 lh-base mb-0"><i class="fa fa-quote-left"></i></p>
			  <p class="text-4">“I am happy Working with printing and typesetting industry. Quidam lisque persius interesset his et, in quot quidam persequeris essent possim iriure.”</p>
              <strong class="d-block fw-500">Patrick Cary</strong> <span class="text-muted">Freelancer from USA</span> </div>
          </div>
          <div class="item">
            <div class="testimonial rounded text-center p-4">
              <p class="text-9 text-muted opacity-2 lh-base mb-0"><i class="fa fa-quote-left"></i></p>
			  <p class="text-4">“Fast easy to use transfers to a different currency. Much better value that the banks.”</p>
              <strong class="d-block fw-500">De Mortel</strong> <span class="text-muted">Online Retail</span> </div>
          </div>
          <div class="item">
            <div class="testimonial rounded text-center p-4">
              <p class="text-9 text-muted opacity-2 lh-base mb-0"><i class="fa fa-quote-left"></i></p>
			  <p class="text-4">“I have used them twice now. Good rates, very efficient service and it denies high street banks an undeserved windfall. Excellent.”</p>
              <strong class="d-block fw-500">Chris Tom</strong> <span class="text-muted">User from UK</span> </div>
          </div>
          <div class="item">
            <div class="testimonial rounded text-center p-4">
              <p class="text-9 text-muted opacity-2 lh-base mb-0"><i class="fa fa-quote-left"></i></p>
			  <p class="text-4">“It's a real good idea to manage your money by payyed. The rates are fair and you can carry out the transactions without worrying!”</p>
              <strong class="d-block fw-500">Mauri Lindberg</strong> <span class="text-muted">Freelancer from Australia</span> </div>
          </div>
          <div class="item">
            <div class="testimonial rounded text-center p-4">
              <p class="text-9 text-muted opacity-2 lh-base mb-0"><i class="fa fa-quote-left"></i></p>
			  <p class="text-4">“Only trying it out since a few days. But up to now excellent. Seems to work flawlessly. I'm only using it for sending money to friends at the moment.”</p>
              <strong class="d-block fw-500">Dennis Jacques</strong> <span class="text-muted">User from USA</span> </div>
          </div>
        </div>
        <div class="text-center mt-4"><a href="#" class="btn-link text-4">See more people review<i class="fas fa-chevron-right text-2 ms-2"></i></a></div>
      </div>
    </section>
    <!-- Testimonial end -->

@endsection
