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
        $data = [
            'bank' => Bank::all(),
            'user' => User::all()
        ];
        return view('oneBanking.Transfer.transfer', $data);
    }
    public function send(Request $request)
    {
        $data = User::where('account_number', $request->account_number)->get();
        $admin = Bank::where('id', $request->bank)->first();

        if ($data->isEmpty()) {
            session()->flash('error', 'The receiver was not found!');
            return back();
        } else {
            if (Auth::user()->account_number == $request->account_number) {
                session()->flash('error', 'the receiver was not found');
                return back();
            } else {
                if (Auth::user()->bank_type == $request->bank) {
                    $admin = 0;
                    if (Auth::user()->balance < $request->amount + $admin) {
                        session()->flash('error', 'Amount not enough!');
                        return back();
                    } else {
                        $this->Transaction($request, $admin);
                        $this->editBalanceReceiver($request, $request->account_number);
                        $this->editBalanceSender($request, Auth::user()->account_number, $admin);
                        session()->flash('success', 'Transfer Successfull!');
                        return back();
                    }
                } else {
                    $dataAdmin = $admin->admin;
                    if (Auth::user()->balance < $request->amount + $dataAdmin) {
                        session()->flash('error', 'Amount not enough!');
                        return back();
                    } else {
                        $this->Transaction($request, $dataAdmin);
                        $this->editBalanceReceiver($request, $request->account_number);
                        $this->editBalanceSender($request, Auth::user()->account_number, $dataAdmin);
                        session()->flash('success', 'Transfer Successfull!');
                        return back();
                    }
                }
            }
        }
    }
    public function Transaction(Request $request, $admin)
    {
        $transaction = Transaction::create([
            'sender' => Auth::user()->account_number,
            'receiver' => $request->account_number,
            'date' => now()->format('d-m-Y H:i:s'),
            'amount' => $request->amount,
            'admin' => $admin,
            'description' => 'Transfer',
            'email_receiver' => $request->email,
            'receiver_bank_type' => $request->bank,
        ]);
    }
    public function editBalanceReceiver(Request $request, $id)
    {
        $user = User::where('account_number', $id)->first();
        $request->validate([
            'amount' => 'required|integer|min:10000|max:5000000',
        ]);

        $user = User::where('account_number', $id)
            ->update([
                'balance' => $user->balance + $request->amount,
            ]);
    }
    public function editBalanceSender(Request $request, $id, $biaya)
    {
        $user = User::where('account_number', $id)->first();
        $request->validate([
            'amount' => 'required|integer|min:10000|max:5000000',
        ]);

        $user = User::where('account_number', $id)
            ->update([
                'balance' => $user->balance - $request->amount - $biaya
            ]);
    }
}
