<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>One-Banking</title>
    <link rel="stylesheet" href="assets-homepage/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Catamaran:100,200,300,400,500,600,700,800,900">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Muli">
    <link rel="stylesheet" href="assets-homepage/fonts/font-awesome.min.css">
    <link rel="stylesheet" href="assets-homepage/css/styles.min.css">
</head>

<body id="page-top">
    @include('oneBanking.nav')
    
    @yield('content')
    
    <footer class="bg-color-purple">
        <div class="container">
            <h5></h5>
            <h3 class="text-left">One-<strong>Banking</strong></h3>
            <p class="text-left">Your money solution<br></p>
            <h3 class="text-right" style="margin-top: -60px">Contact Us</h3>
            <ul class="list-inline text-right list-social font-weight-bolder">
                <li class="list-inline-item social-twitter"><a href="#"><i class="fa fa-twitter"></i></a></li>
                <li class="list-inline-item social-facebook"><a href="#"><i class="fa fa-facebook"></i></a></li>
                <li class="list-inline-item social-google-plus"><a href="#"><i class="fa fa-google-plus"></i></a></li>
            </ul>
            <p>© One-<strong>Banking</strong> 2021. All Rights Reserved.</p>
            <ul class="list-inline">
                <li class="list-inline-item"><a href="#">Privacy</a></li>
                <li class="list-inline-item"><a href="#">Terms</a></li>
                <li class="list-inline-item"><a href="#">FAQ</a></li>
            </ul>
        </div>
    </footer>

    @include('oneBanking.footer')
</body>

</html>