<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MainController extends Controller
{
    public function index()
    {
        return view ('welcome');
    }

    public function aboutUs()
    {
        return view('user.about_us');
    }

    public function accountError()
    {
        return view('user.account_error_page');
    }
}
