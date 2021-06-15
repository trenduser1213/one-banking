@extends('oneBanking.layouts.app')

@section('content')
@include('oneBanking.layouts.sweetalert')
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
                                    <h6 style="font-size: 16px;font-weight: bold;">Rp. {{number_format(Auth::user()->balance) }}</h6>
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
                            <a href="{{ url('/topup') }}" class="btn btn-success d-flex feature-btn align-items-center">
                                <img src="{{asset('asset/img/topup-btn.svg')}}" class="img-fluid" width="44px"/>
                                <p>Top Up</p>
                            </a>
                            <a href="/transfer" class=" btn btn-success d-flex feature-btn align-items-center">
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
                    <table class="table table-hover">
                        <thead>
                            <tr>
                                <th scope="col">Time</th>
                                <th scope="col">Description</th>
                                <th scope="col">Amount</th>
                                <th scope="col">Admin</th>
                                <th scope="col">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($transactions as $transaction)
                                <tr>
                                    <td scope="row">{{ $transaction->date }}</td>
                                    @if ($transaction->description == "Top Up")
                                        <td><span class="badge bg-success">{{ $transaction->description }}</span></td>
                                        <td class="text-success"><b>+ {{ number_format($transaction->amount) }}</b></td>
                                    @endif
                                    @if ($transaction->description == "Transfer")
                                        @if ($transaction->receiver == Auth::user()->account_number)
                                            <td><span class="badge bg-warning">{{ $transaction->description }}</span></td>
                                            <td class="text-primary"><b>+ {{ number_format($transaction->amount) }}</b></td>
                                        @else
                                            <td><span class="badge bg-primary">{{ $transaction->description }}</span></td>
                                            <td class="text-danger"><b> - {{ number_format($transaction->amount) }}</b></td>
                                        @endif
                                    @endif
                                    <td>{{$transaction->admin}}</td>
                                    <td>
                                        <a href="/transaction/destroy/{{$transaction->id}}" class="btn btn-danger btn-sm"><i class="fas fa-trash-restore-alt"></i></a>
                                    </td>
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