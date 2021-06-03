@extends('layout.app')

@section('content')
    <header id="page-top" class="mast">
        <div class="container h-100">
            <div class="row h-100">
                <div class="col-lg-7 my-auto">
                    <div class="mx-auto header-content">
                        <h1 class="mb-5, font-weight-bold"><br>Easy Transact With One Click<br></h1>
                        <h3><br>transactions faster in order to shorten the time, no need to bother coming to the bank with just one click to transact<br><br></h3><a class="btn btn-outline-warning btn-xl js-scroll-trigger btn-aktif" role="button" href="#download">Get Started<br></a>
                    </div>
                </div>
                <div class="col-lg-5 my-auto"><img class="img-size" src="assets-homepage/img/transfer.svg"></div>
            </div>
        </div>
    </header>
    <section id="download" class="download bg-custom">
        <div class="container align-content-sm-center">
            <h3 class="display-4 text-center text-light font-weight-bold"><br>Our Company<br></h3>
            <h5 class="text-center text-light"><br>Our app is available on any mobile device! Download now to get started!<br><br></h5>
        </div>
    </section>
    <section id="features" class="features">
        <div class="container">
            <div class="text-center section-heading">
                <h2>Our Core Value<br><br></h2>
                <hr>
            </div>
            <div class="row">
                <div class="col col-lg-4">
                    <div class="card card-custom shadow-lg text-center">
                        <div class="card-body">
                            <h4 class="card-title text-bold"><br>One Click Transaction<br><br></h4>
                            <p class="card-text"><br>With just one click your transaction is complete<br><br></p>
                        </div>
                    </div>
                </div>
                <div class="col col-lg-4">
                    <div class="card card-custom shadow-lg text-center">
                        <div class="card-body">
                            <h4 class="card-title text-bold"><br>Financial Advice<br><br></h4>
                            <p class="card-text"><br>Become your trusted financial advisor<br><br></p>
                        </div>
                    </div>
                </div>
                <div class="col col-lg-4">
                    <div class="card card-custom shadow-lg text-center">
                        <div class="card-body">
                            <h4 class="card-title text-bold"><br>Transparency<br><br></h4>
                            <p class="card-text"><br>You can know all your transactions<br><br></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section id="contact" class="contact bg-color-custom">
        <div class="container">
            <h1><span><br>Dream Until You Financial Dreams Come True<br><br></span></h1>
            <ul class="list-inline list-social">
                <li class="list-inline-item social-twitter"><a href="#"><i class="fa fa-twitter"></i></a></li>
                <li class="list-inline-item social-facebook"><a href="#"><i class="fa fa-facebook"></i></a></li>
                <li class="list-inline-item social-google-plus"><a href="#"><i class="fa fa-google-plus"></i></a></li>
            </ul>
        </div>
    </section>
@endsection