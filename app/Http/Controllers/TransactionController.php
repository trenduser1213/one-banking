<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Transaction;
use Illuminate\Support\Facades\Auth;

class TransactionController extends Controller
{
    public function destroy($id)
    {
        Transaction::destroy($id);
        return back()->with("success",'Delete was successfull');
    }
}
