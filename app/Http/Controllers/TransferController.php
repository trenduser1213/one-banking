<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Bank;
use App\Models\Transaction;
use Illuminate\Support\Facades\Auth;

class TransferController extends Controller
{
    public function index()
    {
        $data=[
            'bank' => Bank::all(),
            'user' => User::all()
        ];
        return view('oneBanking.Transfer.transfer', $data);
    }
    public function send(Request $request)
    {
        $data = User::where('account_number',$request->account_number)->get();
        
        if ($data->isEmpty()) {
            session()->flash('error','the receiver was not found');
            return back();
        }else{
            $transaction = Transaction::create([
                'sender' => Auth::user()->account_number,
                'receiver' => $request->account_number,
                'date' => now()->format('d-m-Y H:i:s'),
                'amount' => $request->amount,
                'description' => 'Transfer',
                'email_receiver' => $request->email,
                'receiver_bank_type' => $request->bank,
    
            ]);
            if (Auth::user()->balance < $request->amount) {
                session()->flash('error','amount not enough');
                return back();
            }else{
                $this->editBalanceReceiver($request,$request->account_number);
                $this->editBalanceSender($request,Auth::user()->account_number);         
                session()->flash('success','transfer was successfull');
                return back();         
            }
           
        }
    }
    public function editBalanceReceiver(Request $request,$id)
    {
        $user = User::where('account_number',$id)->first();
        $request->validate([
            'amount' => 'required|integer|min:10000|max:5000000',
        ]);

        $user = User::where('account_number', $id)
            ->update([
                'balance' => $user->balance + $request->amount,
            ]);
    }
    public function editBalanceSender(Request $request,$id)
    {
        $user = User::where('account_number',$id)->first();
        $request->validate([
            'amount' => 'required|integer|min:10000|max:5000000',
        ]);

        $user = User::where('account_number', $id)
            ->update([
                'balance' => $user->balance - $request->amount,
            ]);
    }
}
