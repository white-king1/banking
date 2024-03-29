@extends('layouts.admin_dashboard_layout')
@section('content')
    <div class="main-panel">
        <div class="content-wrapper">
            <div class="page-header">
                <h3 class="page-title">ALL USERS TABLE </h3>
            </div>
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">Users Table</h4>
                    <div class="row">
                        <div class="col-12">
                            <div class="table-responsive">
                                <table id="order-listing" class="table">
                                    <thead>
                                        <tr>
                                            <th>Id</th>
                                            <th>User Type</th>
                                            <th>Name</th>
                                            <th>Email</th>
                                            <th>Phone Number</th>
                                            <th>Account Number</th>
                                            <th>Balance</th>
                                            <th>Date Registered</th>

                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($all_users as $user)
                                            <tr>
                                                <th>{{$user->id }}</th>
                                                <th>{{$user->usertype }}</th>
                                                <td>{{$user->name }}</td>
                                                <td>{{ $user->email}}</td>
                                                <td>{{ $user->phone}}</td>
                                                <td>{{ $user->account_number}}</td>
                                                <td>
                                                    @if (!empty($user->wallet->balance))
                                                    ${{ number_format($user->wallet->balance) }}
                                                    @else
                                                        <p>0</p>
                                                    @endif
                                                </td>
                                                <td>{{ $user->created_at}}</td>
                                                <td>
                                                    <label class="badge badge-info">Restrict</label>
                                                </td>
                                                <td>
                                                    <a href="{{ route('delete.users', $user->id) }}" class="btn btn-outline-danger">Delete</a>
                                                </td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
@endsection
