<?php

namespace App\Http\Controllers;

use App\Transactions;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use SebastianBergmann\CodeCoverage\Report\Html\Dashboard;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */


    public function index()
    {
        if (Auth::user()->usertype == 'admin') {
            return redirect()->route('admin');
        } else {
            $activity = Transactions::where('user_id', Auth::user()->id)->latest()->take(7)->get();

            return view('user.dashboard', compact('activity'));
        }
    }

    public function dash()
    {
        $activity = Transactions::where('user_id', Auth::user()->id)->latest()->take(7)->get();

        return view ('user.Dashboard', compact('activity'));
    }

}
