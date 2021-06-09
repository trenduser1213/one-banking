<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="{{ asset('css/dashboard.css') }}">
    <title>One Banking</title>
</head>
<body>
    <div class="heading">
        <p>One&nbsp;<strong>Banking</strong></p>
        <div><svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 16 16" fill="currentColor" class="bi bi-envelope header-icon">
                <path fill-rule="evenodd" d="M0 4a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v8a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V4zm2-1a1 1 0 0 0-1 1v.217l7 4.2 7-4.2V4a1 1 0 0 0-1-1H2zm13 2.383l-4.758 2.855L15 11.114v-5.73zm-.034 6.878L9.271 8.82 8 9.583 6.728 8.82l-5.694 3.44A1 1 0 0 0 2 13h12a1 1 0 0 0 .966-.739zM1 11.114l4.758-2.876L1 5.383v5.73z"></path>
            </svg><svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 16 16" fill="currentColor" class="bi bi-bell header-icon">
                <path d="M8 16a2 2 0 0 0 2-2H6a2 2 0 0 0 2 2z"></path>
                <path fill-rule="evenodd" d="M8 1.918l-.797.161A4.002 4.002 0 0 0 4 6c0 .628-.134 2.197-.459 3.742-.16.767-.376 1.566-.663 2.258h10.244c-.287-.692-.502-1.49-.663-2.258C12.134 8.197 12 6.628 12 6a4.002 4.002 0 0 0-3.203-3.92L8 1.917zM14.22 12c.223.447.481.801.78 1H1c.299-.199.557-.553.78-1C2.68 10.2 3 6.88 3 6c0-2.42 1.72-4.44 4.005-4.901a1 1 0 1 1 1.99 0A5.002 5.002 0 0 1 13 6c0 .88.32 4.2 1.22 6z"></path>
            </svg><svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 16 16" fill="currentColor" class="bi bi-box-arrow-right header-icon">
                <path fill-rule="evenodd" d="M10 12.5a.5.5 0 0 1-.5.5h-8a.5.5 0 0 1-.5-.5v-9a.5.5 0 0 1 .5-.5h8a.5.5 0 0 1 .5.5v2a.5.5 0 0 0 1 0v-2A1.5 1.5 0 0 0 9.5 2h-8A1.5 1.5 0 0 0 0 3.5v9A1.5 1.5 0 0 0 1.5 14h8a1.5 1.5 0 0 0 1.5-1.5v-2a.5.5 0 0 0-1 0v2z"></path>
                <path fill-rule="evenodd" d="M15.854 8.354a.5.5 0 0 0 0-.708l-3-3a.5.5 0 0 0-.708.708L14.293 7.5H5.5a.5.5 0 0 0 0 1h8.793l-2.147 2.146a.5.5 0 0 0 .708.708l3-3z"></path>
            </svg></div>
    </div>
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
                                    <p style="font-weight: bold">Farrel Agung Dewanto</p>
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
                                    <h6 style="font-size: 16px">*** *** *** 234</h6>
                                    <img src="{{asset('asset/img/visa.svg')}}" width="44px"/>
                                </div>
                                <div style="margin-top: auto" class="d-flex justify-content-between">
                                    <div>
                                        <h6 style="font-size: 16px">Balance</h6>
                                        <h6 style="font-size: 16px;font-weight: bold;">Rp 2.000.000</h6>
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
                                <div class="d-flex transfer-btn align-items-center">
                                    <img src="{{asset('asset/img/transfer-btn.svg')}}" class="img-fluid" width="44px"/>
                                    <p>Transfer</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col transaction-container">
                <div class="card card-transaction-container">
                    <div class="card-body">
                        <h5 class="card-title" style="font-weight: bold;padding-bottom: 25px">Latest transactions</h5>
                        <table class="table">
                            <tbody>
                              <tr>
                                <th colspan="3">Today</th>
                              </tr>
                              <tr>
                                <th scope="row">Today</th>
                                <td>Jacob</td>
                                <td class="text-end">Thornton</td>
                              </tr>
                              <tr>
                                <th scope="row">Today</th>
                                <td>Jacob</td>
                                <td class="text-end">Thornton</td>
                              </tr>
                            </tbody>
                          </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>