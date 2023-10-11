<?php

namespace App\Http\Controllers;

use App\Transactions;
use App\User;
use App\Wallet;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class TransactionsController extends Controller
{
    public function transactions()
    {
        return view('user.transactions');
    }

    public function transfer()
    {
        return view('user.transfer');
    }

    public function usertransferDetails(Request $request)
    {

        // $user = User::where('account_number', $request->account_number)->first();

        $trnsx = new Transactions();
        $trnsx->account_number = $request->account_number;
        $trnsx->user_id = Auth::user()->id;
        $trnsx->sender_id = Auth::user()->id;
        $trnsx->receiver_id =  Auth::user()->id;
        $trnsx->amount = $request->amount;
        $trnsx->date = $request->date;
        $trnsx->description = $request->description;
        $trnsx->status = 'completed';
        $trnsx->transaction_type_id = 1;

        $trnsx->is_credit = 1;
        $trnsx->save();

        if (Auth::user()->wallet->balance <= $trnsx->amount ) {

            return redirect()->route('usertransfer', $trnsx)->with('Insuficient Funds')->with('flash_type', 'alert-danger');
        } else {

            $money = $trnsx->amount;

            $trnsx->status = 'completed';
            $trnsx->sender_id = Auth::user()->id;
            $trnsx->save();

            $receiver= Wallet::where('user_id',$trnsx->receiver_id)->first()->increment('balance',$money);



            $sender = Wallet::where('user_id', $trnsx->sender_id)->first()->decrement('balance', $money);
        }

        return view('user.user_transfer_successful',compact('receiver','sender'));

    }

    public function usertransferSuccessful(Transactions $trnsx)
    {

        $user = User::latest()->get();

        $now = Transactions::latest()->take(1)->get();

        return view ('user.user_transfer_successful', compact('trnsx', 'now'));
    }

    public function newTransafer()
    {
        return view('user.admin_tranfer');
    }

    public function transferDetails(Request $request)
    {
        $user = User::where('account_number', $request->account_number)->first();

        $trf = new Transactions();

        $trf->account_number = $request->account_number;
        $trf->user_id = $user->id;
        $trf->sender_id = Auth::user()->id;
        $trf->receiver_id = Auth::user()->id;
        $trf->amount = $request->amount;
        $trf->date = $request->date;
        $trf->description = $request->description;
        $trf->status = 'completed';
        $trf->transaction_type_id = 1;

        $trf->is_credit = 1;
        $trf->save();

        if ($trf) {


            $all_tfs = Wallet::where('user_id', $trf->user_id)->first();
            $all_tfs->balance += $trf->amount;
            $all_tfs->save();
            return redirect()->route('transfer.successful')->with('flash_message', 'Your Transfer is Successfull.')->with('flash_type', 'alert-success');
        }

        return view('user.transfer', compact('all_tfs'));
        // $u = Wallet::where('referral_code', $request->referral_link)->first();

        // $p= $u->increment('balance',$request->transfer_amount);

        // return view('user.transfer_successful',['trf'=>$trf]);


    }

    public function transferSuccessful(Transactions $trf)
    {
        $user = User::latest()->get();
        $all_trf = Transactions::latest()->take(1)->get();

        return view('user.transfer_successfull', compact('trf', 'all_trf'));
    }


    // WITHDRAWAL FUNCTIONS BELOW

    public function newWithdrawal()
    {
        return view ('user.new_withdrawal');
    }

    public function withdrawalDetails(Request $request)
    {
        $user = User::where('account_number', $request->account_number)->first();

        $trf = new Transactions();

        $trf->account_number = $request->account_number;
        $trf->user_id = $user->id;
        $trf->sender_id = Auth::user()->id;
        $trf->receiver_id = Auth::user()->id;
        $trf->amount = $request->amount;
        $trf->date = $request->date;
        $trf->description = $request->description;
        $trf->status = 'completed';
        $trf->transaction_type_id = 1;

        $trf->is_credit = 0;
        $trf->save();

        if ($trf) {


            $all_tfs = Wallet::where('user_id', $trf->user_id)->first();
            $all_tfs->balance -= $trf->amount;
            $all_tfs->save();

            return redirect()->route('withdrawal.successful')->with('flash_message', 'Your Withdrawal is Successfull.')->with('flash_type', 'alert-success');
        }

        return view('user.new_withdrawal', compact('all_tfs'));
        // $u = Wallet::where('referral_code', $request->referral_link)->first();

        // $p= $u->increment('balance',$request->transfer_amount);

        // return view('user.transfer_successful',['trf'=>$trf]);


    }

    public function withdrawalSuccessful(Transactions $trf)
    {
        $user = User::latest()->get();
        $all_trf = Transactions::latest()->take(1)->get();

        return view('user.withdrawal_successfull', compact('trf', 'all_trf'));
    }
}
