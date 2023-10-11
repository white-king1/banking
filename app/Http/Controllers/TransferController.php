<?php

namespace App\Http\Controllers;

use App\Transfer;
use App\User;
use App\Wallet;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class TransferController extends Controller
{
    public function transfer()
    {

        return view('user.transfer');
    }

    public function newTransafer()
    {
        return view('user.admin_tranfer');
    }

    public function transferDetails(Request $request)
    {
        $user = User::where('account_number',$request->account_number)->first();

        $trf = new Transfer();

        $trf->account_number = $request->account_number;
        $trf->user_id = $user->id;
        $trf->transfer_amount = $request->transfer_amount;
        $trf->save();

        if ($trf) {


            $all_tfs= Wallet::where('user_id', $trf->user_id)->first();
            $all_tfs->balance += $trf->transfer_amount;
            $all_tfs->save();
            return redirect()->route('transfer.successful')->with('flash_message', 'Your Transfer is Successfull.')->with('flash_type', 'alert-success');
        }

       return view ('user.transfer',compact('all_tfs'));
        // $u = Wallet::where('referral_code', $request->referral_link)->first();

        // $p= $u->increment('balance',$request->transfer_amount);

        // return view('user.transfer_successful',['trf'=>$trf]);


    }

    public function transferSuccessful(Transfer $trf)
    {
        $user = User::latest()->get();
        $all_trf = Transfer::latest()->take(1)->get();

        return view('user.transfer_successfull', compact('trf','all_trf'));
    }


}
