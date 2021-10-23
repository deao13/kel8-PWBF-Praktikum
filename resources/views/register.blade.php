@extends('layouts.main')

@section('container')
<header class="masthead" style="background-image: url({{ asset('img/login-bg.jpg') }})">)">
    <div class="container position-relative px-4 px-lg-5">
        <div class="row gx-4 gx-lg-5 justify-content-center">
            <div class="col-md-10 col-lg-8 col-xl-7">
                <div class="site-heading">
                    <h1>ASIPS</h1>
                    <span class="subheading">Child Is Our Future</span>
                </div>
            </div>
        </div>
    </div>
  </header>
<div class="container px-4 px-lg-5">
    <div class="row gx-4 gx-lg-5 justify-content-center">
        <div class="col-md-10 col-lg-8 col-xl-7">
        <form class="form-signin" action="/login" method="GET">
            {{ csrf_field() }}
            <h1 class="h3 mb-3 font-weight-normal">Silakan Login</h1>
            <label for="inputEmail" class="sr-only">Username</label>
            <input type="text" id="inputEmail" class="form-control" placeholder="Username" required autofocus>
            <label for="inputPassword" class="sr-only">Password</label>
            <input type="password" id="inputPassword" class="form-control" placeholder="Password" required>
            {{-- <div class="checkbox mb-3">
            <label>
                <input type="checkbox" value="remember-me"> Remember me
            </label>
            </div> --}}
            <button class="btn btn-lg btn-primary btn-block" type="submit">Sign in</button>
        </form>
        </div>
    </div>
</div>
@endsection

{{-- <!DOCTYPE html>
<html lang="en">
<head>
    <link href="css/login.css" rel="stylesheet" />
    <link href="js/login.js" rel="stylesheet" />
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Web ASIPS | Login</title>
</head>
<body>
   
      
     
      
</body>
</html> --}}

{{-- <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Register</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.3.1/css/bootstrap.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.3.1/js/bootstrap.min.js"></script>
    <link href="css/register.css" rel="stylesheet">
</head>
<body>
    <div class="container register">
        <div class="row">
            <div class="col-md-3 register-left">
                <img src="https://image.ibb.co/n7oTvU/logo_white.png" alt="Roket"/>
                <h3>Welcome</h3>
                <p>"Bersemangatlah atas hal-hal yang bermanfaat bagimu. Minta tolonglah pada Allah. Jangan engkau lemah."</p>
                <p>- HR Muslim -</p>
                <a href="login"><input type="submit" name="" value="Login"/></a><br/>
            </div>
            <div class="col-md-9 register-right">
                <ul class="nav nav-tabs nav-justified" id="myTab" role="tablist">
                    <li class="nav-item">
                        <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">Guru</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="false">Santri</a>
                    </li>
                </ul>
                <div class="tab-content" id="myTabContent">
                    <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                        <h3 class="register-heading">Daftar sebagai Guru</h3>
                        <div class="row register-form">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <input type="text" class="form-control" placeholder="Name *" value="" />
                                </div>
                                <div class="form-group">
                                    <input type="email" class="form-control" placeholder="Email *" value="" />
                                </div>
                                <div class="form-group">
                                    <input type="password" class="form-control" placeholder="Password *" value="" />
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <select name="" id="" class="form-control">
                                        <option value="" disabled selected hidden>Gender *</option>
                                        <option value="m">Male</option>
                                        <option value="f">Female</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <input type="number" minlength="10" maxlength="13" name="txtEmpPhone" class="form-control" placeholder="Phone *" value="" />
                                </div>
                                <div class="form-group">
                                    <input type="password" class="form-control"  placeholder="Confirm Password *" value="" />
                                </div>
                                <input type="submit" class="btnRegister"  value="Register"/>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade show" id="profile" role="tabpanel" aria-labelledby="profile-tab">
                        <h3  class="register-heading">Daftar sebagai Santri</h3>
                        <div class="row register-form">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <input type="text" class="form-control" placeholder="Name of Santri *" value="" />
                                </div>
                                <div class="form-group">
                                    <input type="text" class="form-control" placeholder="Place of Birth *" value="" />
                                </div>
                                <div class="form-group">
                                    <input type="text" class="form-control" placeholder="Name of Ortu *" value="" />
                                </div>
                                <div class="form-group">
                                    <input type="email" class="form-control" placeholder="Email *" value="" />
                                </div>
                                <div class="form-group">
                                    <input type="password" class="form-control" placeholder="Password *" value="" />
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <select name="" id="" class="form-control">
                                        <option value="" disabled selected hidden>Gender of Santri *</option>
                                        <option value="m">Male</option>
                                        <option value="f">Female</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <input type="text" class="form-control" placeholder="Date of Birth *" value="" onfocus="(this.type='date')" />
                                </div>
                                <div class="form-group">
                                    <input type="text" class="form-control" placeholder="Address of Ortu *" value="" />
                                </div>
                                <div class="form-group">
                                    <input type="number" minlength="10" maxlength="13" name="txtEmpPhone" class="form-control" placeholder="Phone *" value="" />
                                </div>
                                <div class="form-group">
                                    <input type="password" class="form-control"  placeholder="Confirm Password *" value="" />
                                </div>
                                <input type="submit" class="btnRegister"  value="Register"/>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>		                            
</body>
</html> --}}