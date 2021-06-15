<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Bank;
use App\Models\Transaction;
use Illuminate\Support\Facades\Auth;

class TopUpController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $user = User::find(Auth::user()->id);
        $banks = Bank::all();
        $transactions = Transaction::paginate(5);

        return view('oneBanking.TopUp.topup', [
            'user' => $user,
            'banks' => $banks,
            'transactions' => $transactions,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'amount' => 'required|integer|min:10000|max:5000000',
        ]);

        $transaction = Transaction::create([
            'sender' => Auth::user()->account_number,
            'receiver' => Auth::user()->account_number,
            'date' => now()->format('d-m-Y H:i:s'),
            'amount' => $request->input('amount'),
            'admin'     => 0,
            'description' => 'Top Up',
            'email_receiver' => Auth::user()->email,
            'receiver_bank_type' => Auth::user()->bank_type,
        ]);

        $this->update($request, Auth::user()->id);

        return redirect('/topup');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $user = User::find($id);

        $request->validate([
            'amount' => 'required|integer|min:10000|max:5000000',
        ]);

        $user = User::where('id', $id)
            ->update([
                'balance' => $user->balance + $request->input('amount'),
            ]);

        session()->flash('success', 'Top Up Successfull!');
        return redirect('/topup');
    }
}
