@extends('layouts.app')

@section('content')
<div class="row">
    <div class="col-sm-6">
        <div class="card">
            Welcome, {{ Auth::user()->name }}
        </div>
        <div class="card">
            {{ Auth::user()->account_number }}
            <h5 class="card-title">Balance</h5>
            Rp {{ Auth::user()->balance }},-
        </div>
        <div class="card">
            <h5 class="card-title">Action</h5>
            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#topUpModal">
                Top Up 
            </button>
            <button type="button" class="btn btn-success">Transfer</button>
        </div>
    </div>
    <div class="col-sm-6">
        <div class="card">
            <h5 class="card-title">Latest Transactions</h5>
            <table class="table">
                <thead>
                <tr>
                    <th scope="col">Time</th>
                    <th scope="col">Description</th>
                    <th scope="col">Amount</th>
                </tr>
                </thead>
                <tbody>
                    @foreach ($transactions as $transaction)
                        <tr>
                            <td>{{ $transaction->date }}</td>
                            <td>{{ $transaction->description }}</td>
                            <td>{{ $transaction->amount }}</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
            {{ $transactions->links() }}
        </div>
    </div>
</div>

@include('oneBanking.popUp')

@endsection