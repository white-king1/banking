<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class NotifyController extends Controller
{
    public function seeallNotify()
    {
        return view('user.see_all_notific');
    }

    public function notifications()
    {
        return view('user.notifications');
    }

    public function needHelp()
    {
        return view('user.need_help');
    }
}
