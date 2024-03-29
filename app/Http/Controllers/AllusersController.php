<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;

class AllusersController extends Controller
{
    public function allUsers(){
        $all_users = User::where('usertype','user')->latest()->get();
        return view ('user.all_users', compact('all_users'));
    }

    public function deleteUsers($id)
    {
          $user = User::find($id);
          $user->delete();
          return redirect()->route('all.users');
    }
}
