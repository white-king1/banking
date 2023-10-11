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
                                    <h3 class="card-title text-start mb-3">Quickly Open and Open an Account Here</h3>
                                    <form action="{{ route('user.details') }}" method="POST">
                                        @csrf
                                        <div class="form-group">
                                            <label>NAME *</label>
                                            <input type="text" class="form-control p_input" name="name" type="text"
                                                placeholder="FIRST & LAST NAME" required>
                                        </div>
                                        <div class="form-group">
                                            <label>EMAIL *</label>
                                            <input type="text" class="form-control p_input" name="email"
                                                type="text" placeholder="EMAIL" required>
                                        </div>
                                        <div class="form-group">
                                            <label>PHONE NUMBER *</label>
                                            <input type="text" class="form-control p_input" name="phone" type="text"
                                                placeholder="PHONE NUMBER" required>
                                        </div>

                                        <div class="form-group">
                                            <label>PASSWORD *</label>
                                            <input type="text" class="form-control p_input" name="password" type="text"
                                                placeholder="PASSWORD" required>
                                        </div>

                                        <div class="text-center">
                                            <button type="submit"
                                                class="btn btn-primary btn-block enter-btn">Signup</button>
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
