@extends('layouts.dashboard_layout')
@section('content')
    <!-- Content
              ============================================= -->
    <div id="content" class="py-4">
        @if (Session::has('flash_message'))
            <center>
                <div class="alert {{ Session::get('flash_type') }} col-md-4">
                    <h6>{{ Session::get('flash_message') }}</h6>
                </div>
            </center>
        @endif
        <div class="container">
            <div class="row">
                <!-- Left Panel
                    ============================================= -->
                <aside class="col-lg-3">

                    <!-- Profile Details
                      =============================== -->
                    <div class="bg-white shadow-sm rounded text-center p-3 mb-4">
                        <div class="profile-thumb mt-3 mb-4"> <img class="rounded-circle" src="assets/images/profile-thumb.jpg"
                                alt="">
                            <div class="profile-thumb-edit bg-primary text-white" data-bs-toggle="tooltip"
                                title="Change Profile Picture"> <i class="fas fa-camera position-absolute"></i>
                                <input type="file" class="custom-file-input" id="customFile">
                            </div>
                        </div>
                        <p class="text-3 fw-500 mb-2">{{ Auth::user()->name }}</p>
                        <p class="mb-2"><a href="settings-profile.html" class="text-5 text-light" data-bs-toggle="tooltip"
                                title="Edit Profile"><i class="fas fa-edit"></i></a></p>
                    </div>
                    <!-- Profile Details End -->

                    <!-- Available Balance
                      =============================== -->
                    <div class="bg-white shadow-sm rounded text-center p-3 mb-4">
                        <div class="text-17 text-light my-3"><i class="fas fa-wallet"></i></div>
                        <h3 class="text-9 fw-400">${{ number_format(Auth::user()->wallet->balance) }}</h3>
                        <p class="mb-2 text-muted opacity-8">Available Balance</p>
                        <hr class="mx-n3">
                        <div class="d-flex"><a href="withdraw-money.html" class="btn-link me-auto">Withdraw</a> <a
                                href="deposit-money.html" class="btn-link ms-auto">Deposit</a></div>
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

                    <!-- Profile Completeness
                      =============================== -->
                    <div class="bg-white shadow-sm rounded p-4 mb-4">
                        <h3 class="text-5 fw-400 d-flex align-items-center mb-4">Profile Completeness<span
                                class="border text-success rounded-pill fw-500 text-2 px-3 py-1 ms-2">50%</span></h3>
                        <hr class="mb-4 mx-n4">
                        <div class="row gy-4 profile-completeness">
                            <div class="col-sm-6 col-md-3">
                                <div class="border rounded text-center px-3 py-4"> <span
                                        class="d-block text-10 text-light mt-2 mb-3"><i
                                            class="fas fa-mobile-alt"></i></span> <span
                                        class="text-5 d-block text-success mt-4 mb-3"><i
                                            class="fas fa-check-circle"></i></span>
                                    <p class="mb-0">Mobile Added</p>
                                </div>
                            </div>
                            <div class="col-sm-6 col-md-3">
                                <div class="border rounded text-center px-3 py-4"> <span
                                        class="d-block text-10 text-light mt-2 mb-3"><i class="fas fa-envelope"></i></span>
                                    <span class="text-5 d-block text-success mt-4 mb-3"><i
                                            class="fas fa-check-circle"></i></span>
                                    <p class="mb-0">Email Added</p>
                                </div>
                            </div>
                            <div class="col-sm-6 col-md-3">
                                <div class="border rounded text-center px-3 py-4"> <span
                                        class="d-block text-10 text-light mt-2 mb-3"><i
                                            class="fas fa-credit-card"></i></span> <span
                                        class="text-5 d-block text-success mt-4 mb-3"><i
                                            class="fas fa-check-circle"></i></span>
                                    <p class="mb-0">Add Card</p>
                                </div>
                            </div>
                            <div class="col-sm-6 col-md-3">
                                <div class="border rounded text-center px-3 py-4"> <span
                                        class="d-block text-10 text-light mt-2 mb-3"><i
                                            class="fas fa-university"></i></span> <span
                                        class="text-5 d-block text-success mt-4 mb-3"><i
                                            class="fas fa-check-circle"></i></span>
                                    <p class="mb-0">Add Bank Account</p>
                                </div>
                            </div>

                            {{-- <div class="col-sm-6 col-md-3">
                <div class="position-relative border rounded text-center px-3 py-4"> <span class="d-block text-10 text-light mt-2 mb-3"><i class="fas fa-university"></i></span> <span class="text-5 d-block text-success mt-4 mb-3"><i class="far fa-check-circle "></i></span>
                  <p class="mb-0"><a class="btn-link stretched-link" href="">Add Bank Account</a></p>
                </div>
              </div> --}}
                        </div>
                    </div>
                    <!-- Profile Completeness End -->

                    <!-- Recent Activity
                      =============================== -->
                    <div class="bg-white shadow-sm rounded py-4 mb-4">
                        <h3 class="text-5 fw-400 d-flex align-items-center px-4 mb-4">Recent Activity</h3>

                        <!-- Title
                                 =============================== -->
                        <div class="transaction-title py-2 px-4">
                            <div class="row fw-00">
                                <div class="col-3 col-sm-3 "><span class="">Date</span></div>
                                <div class="col col-sm-5">Description</div>
                                <div class="col-auto col-sm-2 d-none d-sm-block text-center">Status</div>
                                <div class="col-3 col-sm-2 text-end">Amount</div>
                            </div>
                        </div>
                        <!-- Title End -->

                        <!-- Transaction List
                                 =============================== -->
                        @foreach ($activity as $trf)
                            <div class="transaction-list">
                                <div class="transaction-item px-4 py-3" data-bs-toggle="modal"
                                    data-bs-target="#transaction-detail">

                                    <div class="row align-items-center flex-row">
                                        <div class="col-3 col-sm-3 "> <span
                                                class="d-block text-4 fw-300">{{$trf->date}}</span>
                                        </div>
                                        <div class="col col-sm-5"> <span class="d-block text-4">{{$trf->description}}</span> </div>
                                        <div class="col-auto col-sm-2 d-none d-sm-block text-center text-3"> <span
                                                class="text-warning" data-bs-toggle="tooltip" title="In Progress"><i
                                                    class="fas fa-ellipsis-h"></i></span> </div>
                                        <div class="col-3 col-sm-2 text-end text-4"> <span class="text-nowrap">
                                                ${{ number_format($trf->amount)}}</span>
                                            <span class="text-2 text-uppercase">(USD)</span>
                                        </div>
                                    </div>

                                </div>
                        @endforeach


                        <div class="transaction-item px-4 py-3" data-bs-toggle="modal"
                            data-bs-target="#transaction-detail">
                            <div class="row align-items-center flex-row">
                                <div class="col-2 col-sm-1 text-center"> <span class="d-block text-4 fw-300">28</span>
                                    <span class="d-block text-1 fw-300 text-uppercase">MAR</span>
                                </div>
                                <div class="col col-sm-7"> <span class="d-block text-4">Patrick Cary</span> <span
                                        class="text-muted">Refund</span> </div>
                                <div class="col-auto col-sm-2 d-none d-sm-block text-center text-3"> <span
                                        class="text-success" data-bs-toggle="tooltip" title="Completed"><i
                                            class="fas fa-check-circle"></i></span> </div>
                                <div class="col-3 col-sm-2 text-end text-4"> <span class="text-nowrap">+
                                        $60</span>
                                    <span class="text-2 text-uppercase">(USD)</span>
                                </div>
                            </div>
                        </div>
                        <div class="transaction-item px-4 py-3" data-bs-toggle="modal"
                            data-bs-target="#transaction-detail">
                            <div class="row align-items-center flex-row">
                                <div class="col-2 col-sm-1 text-center"> <span class="d-block text-4 fw-300">28</span>
                                    <span class="d-block text-1 fw-300 text-uppercase">MAR</span>
                                </div>
                                <div class="col col-sm-7"> <span class="d-block text-4">Patrick Cary</span> <span
                                        class="text-muted">Payment Sent</span> </div>
                                <div class="col-auto col-sm-2 d-none d-sm-block text-center text-3"> <span
                                        class="text-danger" data-bs-toggle="tooltip" title="Cancelled"><i
                                            class="fas fa-times-circle"></i></span> </div>
                                <div class="col-3 col-sm-2 text-end text-4"> <span class="text-nowrap">-
                                        $60</span>
                                    <span class="text-2 text-uppercase">(USD)</span>
                                </div>
                            </div>
                        </div>

                    </div>
                    <!-- Transaction List End -->

                    <!-- Transaction Item Details Modal
                                  =========================================== -->
                    <div id="transaction-detail" class="modal fade" role="dialog" aria-hidden="true">
                        <div class="modal-dialog modal-dialog-centered transaction-details" role="document">
                            <div class="modal-content">
                                <div class="modal-body">
                                    <div class="row g-0">
                                        <div class="col-sm-5 d-flex justify-content-center bg-primary rounded-start py-4">
                                            <div class="my-auto text-center">
                                                <div class="text-17 text-white my-3"><i class="fas fa-building"></i>
                                                </div>
                                                <h3 class="text-4 text-white fw-400 my-3">Envato Pty Ltd</h3>
                                                <div class="text-8 fw-500 text-white my-4">$557.20</div>
                                                <p class="text-white">15 March 2021</p>
                                            </div>
                                        </div>
                                        <div class="col-sm-7">
                                            <h5 class="text-5 fw-400 m-3">Transaction Details
                                                <button type="button" class="btn-close text-2 float-end"
                                                    data-bs-dismiss="modal" aria-label="Close"></button>
                                            </h5>
                                            <hr>
                                            <div class="px-3">
                                                <ul class="list-unstyled">
                                                    <li class="mb-2">Payment Amount <span
                                                            class="float-end text-3">$562.00</span></li>
                                                    <li class="mb-2">Fee <span class="float-end text-3">-$4.80</span>
                                                    </li>
                                                </ul>
                                                <hr class="mb-2">
                                                <p class="d-flex align-items-center fw-500 mb-0">Total Amount <span
                                                        class="text-3 ms-auto">$557.20</span></p>
                                                <hr class="mb-4 mt-2">
                                                <ul class="list-unstyled">
                                                    <li class="fw-500">Paid By:</li>
                                                    <li class="text-muted">Envato Pty Ltd</li>
                                                </ul>
                                                <ul class="list-unstyled">
                                                    <li class="fw-500">Transaction ID:</li>
                                                    <li class="text-muted">26566689645685976589</li>
                                                </ul>
                                                <ul class="list-unstyled">
                                                    <li class="fw-500">Description:</li>
                                                    <li class="text-muted">Envato March 2021 Member Payment</li>
                                                </ul>
                                                <ul class="list-unstyled">
                                                    <li class="fw-500">Status:</li>
                                                    <li class="text-muted">Completed<span
                                                            class="text-success text-3 ms-1"><i
                                                                class="fas fa-check-circle"></i></span></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Transaction Item Details Modal End -->

                    <!-- View all Link
                                  =============================== -->
                    <div class="text-center mt-4"><a href="transactions.html" class="btn-link text-3">View all<i
                                class="fas fa-chevron-right text-2 ms-2"></i></a></div>
                    <!-- View all Link End -->

                </div>
                <!-- Recent Activity End -->
            </div>
            <!-- Middle Panel End -->
        </div>
    </div>
    </div>
    <!-- Content end -->
@endsection
