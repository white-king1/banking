@extends('layouts.admin_dashboard_layout')
@section('content')
    <div class="main-panel">
        <div class="content-wrapper">
            <div class="container-scroller">
                <div class="container-fluid page-body-wrapper full-page-wrapper">
                    <div class="row w-100">
                        <div class="content-wrapper full-page-wrapper d-flex align-items-center auth login-bg">
                            <div class="card col-lg-8 mx-auto">
                                <div class="card-body px-5 py-5">
                                    <h3 class="card-title text-start mb-3">Successfully Transfered</h3>
                                    @foreach ($all_trf as $trf)
                                        <div class="media-body">
                                            <center>
                                                <p>
                                                    A Transfer of USD ${{ number_format($trf->amount) }} was
                                                    successfully made to;
                                                </p>
                                            </center>

                                            <center>
                                                <p class="mb-0">User Name:: {{$trf->user->name  }}</h5>

                                                    <br>
                                                <p class="mb-0">User email:: {{$trf->user->email  }}</h5>

                                                    <br>
                                                    <p class="mb-0">User ACCOUNT NUMBER: {{$trf->user->account_number  }}</h5>
                                            </center>
                                            <br>
                                        </div>
                                     @endforeach

                                </div>
                            </div>
                        </div>
                        <!-- content-wrapper ends -->
                    </div>
                    <!-- row ends -->
                </div>
                <!-- page-body-wrapper ends -->
            </div>
        </div>

    </div>
@endsection
