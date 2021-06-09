@extends('oneBanking.layouts.app')

@section('content')

@php
    use Illuminate\Support\Facades\Route;

    $route = Route::current();
    // dd($route);
    // var_dump($route);
    // var_dump('hehe');
@endphp
<div class="container-fluid container-holder">
    <div class="row row-container">
        <div class="col-md-4">
            <div class="row">
                <div class="col profile-container">
                    <div class="card">
                        <div class="card-body d-flex align-items-center">
                            <img src="https://media.suara.com/pictures/970x544/2019/04/30/20041-kareena-kapoor-instagram.jpg" 
                            class="profile-image"/>
                            <div class="profile-data" >
                                <p>Welcome</p>
                                <p style="font-weight: bold">{{ Auth::user()->name }}</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col card-container">
                    <div class="card credit-card-container">
                        <div class="card-body d-flex card-body-container">
                            <div class="d-flex justify-content-between">
                                <h6 style="font-size: 16px">{{ Auth::user()->account_number }}</h6>
                                <img src="{{asset('asset/img/visa.svg')}}" width="44px"/>
                            </div>
                            <div style="margin-top: auto" class="d-flex justify-content-between">
                                <div>
                                    <h6 style="font-size: 16px">Balance</h6>
                                    <h6 style="font-size: 16px;font-weight: bold;">Rp {{ Auth::user()->balance }}</h6>
                                </div>
                                <img src="{{asset('asset/img/wifi.svg')}}" width="23px"/>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col">
                    <div class="card">
                        <div class="card-body action-container">
                            <h5 class="card-title" style="font-weight: bold;padding-bottom: 25px">Action</h5>
                            <a href="{{ url('/topup') }}" class="d-flex feature-btn align-items-center">
                                <img src="{{asset('asset/img/topup-btn.svg')}}" class="img-fluid" width="44px"/>
                                <p>Top Up</p>
                            </a>
                            <a href="{{ url('/transfer') }}" class="d-flex feature-btn align-items-center">
                                <img src="{{asset('asset/img/transfer-btn.svg')}}" class="img-fluid" width="44px"/>
                                <p>Transfer</p>
                            </a>
                            
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col transaction-container mb-5">
            <div class="card card-transaction-container">
                <div class="card-body card-body-box">
                    <h5 class="card-title" style="font-weight: bold;padding-bottom: 25px">Latest transactions</h5>
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
                                    <th scope="row">{{ $transaction->date }}</th>
                                    <td>{{ $transaction->description }}</td>
                                    <td class="text-end">{{ $transaction->amount }}</td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                    {{ $transactions->links() }}
                </div>
            </div>
        </div>
    </div>
</div>

@endsection