<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use App\User;
use Illuminate\Auth\Events\Registered;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class OpenAzaController extends Controller
{
    protected function guard()
    {
        return Auth::guard();
    }
    public function openAza()
    {
        return view('user.open_account');
    }

    public function userDetails(Request $request)
    {
        $haspassword = Hash::make($request->password);
        $newuser = new User();
        $account_number = random_int(200000000, 999999999).$newuser->id;
        $newuser->account_number = $account_number;
        $newuser->name = $request->name;
        $newuser->email = $request->email;
        $newuser->phone = $request->phone;
        $newuser->country = $request->country;
        $newuser->address = $request->address;
        $newuser->state = $request->state;
        $newuser->city = $request->city;
        $newuser->zipcode = $request->zipcode;
        $newuser->password = $haspassword;

        $newuser->save();
        $newuser->wallet()->create([
            'account_number' => $account_number,
        ]);

        event(new Registered($user = $newuser));
        Auth::guard()->login($user);



        return redirect()->route('open.aza')->with('flash_message', 'Account Successfully Created.')->with('flash_type', 'alert-success');
    }
}
