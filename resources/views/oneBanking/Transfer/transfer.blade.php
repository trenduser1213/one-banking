@extends('oneBanking.layouts.app')

@section('content')

@include('oneBanking.layouts.sweetalert')

<div class="container-fluid container-holder">
    <div class="d-flex align-items-center" style="padding-bottom: 24px">
        <a href="{{ url('/dashboard') }}">
            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-chevron-left" viewBox="0 0 16 16">
                <path fill-rule="evenodd" d="M11.354 1.646a.5.5 0 0 1 0 .708L5.707 8l5.647 5.646a.5.5 0 0 1-.708.708l-6-6a.5.5 0 0 1 0-.708l6-6a.5.5 0 0 1 .708 0z"/>
            </svg>
        </a>
        <h6 style="margin:0px;padding-left:12px;">Transfer</h6>
    </div>
    <div class="row row-container">
        <div class="col-md-4">
            <div class="row">
                <div class="col profile-container">
                    <div class="card">
                        <div class="card-body d-flex align-items-center">
                            <img src="https://media.suara.com/pictures/970x544/2019/04/30/20041-kareena-kapoor-instagram.jpg" 
                            class="profile-image"/>
                            <div class="profile-data" >
                                <p>Welcome,</p>
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
                                    <h6 style="font-size: 16px;font-weight: bold;">Rp. {{ number_format (Auth::user()->balance) }}</h6>
                                </div>
                                <img src="{{asset('asset/img/wifi.svg')}}" width="23px"/>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col d-flex justify-content-center" >
                    <img src="{{asset('asset/img/ilustrator.svg')}}" class="img-fluid text-center" />
                </div>
            </div>
        </div>
        <div class="col transaction-container">
            <div class="card card-transaction-container">
                <div class="card-body d-flex transfer-form-container">
                    <form action="/transfer/send" method="POST">
                        @csrf
                        @method('POST')
                        <div class="mb-3">
                            <p>Select Bank</p>
                            <select class="form-select" name="bank" aria-label="Default select example" id="bankselect" required>
                                @foreach ($bank as $data)
                                <option value="{{$data->id}}">{{$data->name_bank}}</option>    
                                @endforeach
                            </select>
                        </div>
                        <div class="mb-3">
                            <label for="exampleInputaccount" class="form-label">Recipient Account Number</label>
                            <input type="text" name="account_number" class="form-control" id="exampleInputaccount" value="{{old('account_number')}}" required>
                        </div>
                        <div class="mb-3">
                            <label for="exampleInputemail" class="form-label">Recipient's E-mail</label>
                            <input type="email" name="email" class="form-control" id="exampleInputemail" value="{{old('email')}}" required> 
                        </div>
                        <div class="mb-3">
                            <label for="exampleInputamount" class="form-label">Amount</label>
                            <input type="number" name="amount" class="form-control" id="exampleInputamount" value="{{old('amount')}}" required>
                        </div>
                        <button type="submit" class="btn btn-success send-button">Send</button>
                </form>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection