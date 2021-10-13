{{-- @extends('layouts.main')

@section('container')
    <h1>Halaman Login</h1>

    <h3>nama</h3>
    <h4>nim</h4>s
@endsection --}}

<!DOCTYPE html>
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
   
      <div class='login'>
        <div class='login_title'>
          <span>APLIKASI SURVEILANS & INFORMASI PENCEGAHAN STUNTING</span>
        </div>
        <div class='login_fields'>
          <div class='login_fields__user'>
            <div class='icon'>
              <img src='https://s3-us-west-2.amazonaws.com/s.cdpn.io/217233/user_icon_copy.png'>
            </div>
            <input placeholder='Username' type='text'>
              <div class='validation'>
                <img src='https://s3-us-west-2.amazonaws.com/s.cdpn.io/217233/tick.png'>
              </div>
            </input>
          </div>
          <div class='login_fields__password'>
            <div class='icon'>
              <img src='https://s3-us-west-2.amazonaws.com/s.cdpn.io/217233/lock_icon_copy.png'>
            </div>
            <input placeholder='Password' type='password'>
            <div class='validation'>
              <img src='https://s3-us-west-2.amazonaws.com/s.cdpn.io/217233/tick.png'>
            </div>
          </div>
          <a href="{{ url('/Home') }}"><input type='submit' value='Log In'></a>
          <div class='login_fields__submit'>
            


            <div class='forgot'>
              <a href='#'>Lupa Password?</a>
            </div>
          </div>
        </div>
        <div class='success'>
          <h2>Authentication Success</h2>
          <h1>Welcome back</h1>
        </div>
        <div class='disclaimer'>
          <h2>Asips 2021</h2>
        </div>
      </div>
      <div class='authent'>
        <img src='https://s3-us-west-2.amazonaws.com/s.cdpn.io/217233/puff.svg'>
        {{-- <p>Authenticating...</p> --}}
      </div>
     
      
</body>
</html>

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