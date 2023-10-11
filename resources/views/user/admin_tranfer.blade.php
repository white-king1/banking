@extends('layouts.admin_dashboard_layout')
@section('content')
    <div class="main-panel">
        <div class="content-wrapper">
            <div class="container-scroller">
                <div class="container-fluid page-body-wrapper full-page-wrapper">
                    <div class="row w-100">
                        <div class="content-wrapper full-page-wrapper d-flex align-items-center auth login-bg">
                            <div class="card col-lg-8 mx-auto">
                                @if (Session::has('flash_message'))
                                    <center>
                                        <div class="alert {{ Session::get('flash_type') }} col-md-4">
                                            <h6>{{ Session::get('flash_message') }}</h6>
                                        </div>
                                    </center>
                                @endif
                                <div class="card-body px-5 py-5">
                                    <h3 class="card-title text-start mb-3">Make Quick Transfer</h3>
                                    <form action="{{ route('transfer.details') }}" method="POST">
                                        @csrf
                                        <div class="form-group">
                                            <label>DATE *</label>
                                            <input type="text" class="form-control p_input" name="date" type="text"
                                                placeholder="2023-15-APR" required>
                                        </div>
                                        <div class="form-group">
                                            <label>Account Number *</label>
                                            <input type="text" class="form-control p_input" name="account_number"
                                                type="text" placeholder="Account Number" required>
                                        </div>
                                        <div class="form-group">
                                            <label>Amount(NGN $) *</label>
                                            <input type="text" class="form-control p_input" name="amount" type="text"
                                                placeholder="Amount" required>
                                        </div>

                                        <div class="form-group">
                                            <label>DESCRIPTION *</label>
                                            <input type="text" class="form-control p_input" name="description" type="text"
                                                placeholder="Description" required>
                                        </div>

                                        <div class="text-center">
                                            <button type="submit"
                                                class="btn btn-primary btn-block enter-btn">Transfer</button>
                                        </div>

                                    </form>
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
