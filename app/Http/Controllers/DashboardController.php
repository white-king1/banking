<?php

namespace App\Http\Controllers;

use App\Transactions;
use App\Wallet;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class DashboardController extends Controller
{
    public function dash(){

        dd('hello');
        // $activity = Transactions::where('user_id', Auth::user()->id)->latest()->take(7)->get();
        // dd($activity);

        return view('user.dashboard');
    }
}
