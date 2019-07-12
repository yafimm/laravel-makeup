<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags-->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="au theme template">
    <meta name="author" content="Hau Nguyen">
    <meta name="keywords" content="au theme template">

    <!-- Title Page-->
    <title>Registrasi</title>

    <!-- Fontfaces CSS-->
    <link href="{{ asset('css/font-face.css') }}" rel="stylesheet" media="all">
    <link href="{{ asset('vendor/font-awesome-4.7/css/font-awesome.min.css') }}" rel="stylesheet" media="all">
    <link href="{{ asset('vendor/font-awesome-5/css/fontawesome-all.min.css') }}" rel="stylesheet" media="all">
    <link href="{{ asset('vendor/mdi-font/css/material-design-iconic-font.min.css') }}" rel="stylesheet" media="all">

    <!-- Bootstrap CSS-->
    <link href="{{ asset('vendor/bootstrap-4.1/bootstrap.min.css') }}" rel="stylesheet" media="all">

    <!-- Vendor CSS-->
    <link href="{{ asset('vendor/animsition/animsition.min.css') }}" rel="stylesheet" media="all">
    <link href="{{ asset('vendor/bootstrap-progressbar/bootstrap-progressbar-3.3.4.min.css') }}" rel="stylesheet" media="all">
    <link href="{{ asset('vendor/wow/animate.css') }}" rel="stylesheet" media="all">
    <link href="{{ asset('vendor/css-hamburgers/hamburgers.min.css') }}" rel="stylesheet" media="all">
    <link href="{{ asset('vendor/slick/slick.css') }}" rel="stylesheet" media="all">
    <link href="{{ asset('vendor/select2/select2.min.css') }}" rel="stylesheet" media="all">
    <link href="{{ asset('vendor/perfect-scrollbar/perfect-scrollbar.css') }}" rel="stylesheet" media="all">
    <link href='https://fonts.googleapis.com/css?family=Quicksand' rel='stylesheet'>
    <!-- Main CSS-->
    <link href="{{ asset('css/theme.css') }}" rel="stylesheet" media="all">

</head>

<body class="animsition" style="font-family: quicksand;">
    <div class="page-wrapper">
        <div class="page-content--bge5 regis-user">
            <div class="container">
                <div class="login-wrap">
                    <div class="login-content">
                        <div class="login-logo">
                            <a href="#">
                                <img src="images/logo.png" width="200" alt="CoolAdmin">
                            </a>
                            <h3 style="margin-top: 10px;">Daftar akun baru sekarang</h3>
                            <br>
                        </div>
                        <div class="login-form">
                            <form action="{{ url('register') }}" method="post">
                              @CSRF
                              @method('POST')
                                <div class="form-group">
                                    <input class="au-input au-input--full" type="input" name="nama" placeholder="Nama Lengkap" value="{{ old('nama') }}">
                                    @if($errors->has('nama'))
                                      <small class="form-text text-danger">*{{ $errors->first('nama') }}</small>
                                    @endif
                                </div>
                                <div class="form-group">
                                    <input class="au-input au-input--full" type="input" name="username" placeholder="username" value="{{ old('username') }}">
                                    @if($errors->has('username'))
                                      <small class="form-text text-danger">*{{ $errors->first('username') }}</small>
                                    @endif
                                </div>
                                <div class="form-group">
                                    <select name="jenis_kelamin" id="select" class="au-input au-input--full form-control" value="{{ old('jenis_kelamin') }}">
                                        <option value="" disabled>Jenis Kelamin</option>
                                        <option value="pria">Laki-laki</option>
                                        <option value="wanita">Perempuan</option>
                                    </select>
                                    @if($errors->has('jenis_kelamin'))
                                      <small class="form-text text-danger">*{{ $errors->first('jenis_kelamin') }}</small>
                                    @endif
                                </div>
                                <div class="form-group">
                                    <input class="au-input au-input--full" type="email" name="email" placeholder="email" value="{{ old('email') }}">
                                    @if($errors->has('email'))
                                      <small class="form-text text-danger">*{{ $errors->first('email') }}</small>
                                    @endif
                                </div>
                                <div class="form-group">
                                    <input class="au-input au-input--full" type="password" name="password" placeholder="Password">
                                    @if($errors->has('password'))
                                      <small class="form-text text-danger">*{{ $errors->first('password') }}</small>
                                    @endif
                                </div>
                                <div class="form-group">
                                    <input class="au-input au-input--full" type="password" name="password_confirmation" placeholder="Re-enter Password">
                                    @if($errors->has('password_confirmation'))
                                      <small class="form-text text-danger">*{{ $errors->first('password_confirmation') }}</small>
                                    @endif
                                </div>
                                <div class="login-checkbox">
                                    <label>
                                        <input type="checkbox" name="aggree">Saya telah membaca dan menyetujui Aturan Penggunaan dan Kebijakan Privasi Beauty Master
                                    </label>
                                </div>
                                <br>
                                <input type="submit" name="daftar" class="btn btn-block btn-lg btn-login" value="DAFTAR">
                            </form>
                            <div class="register-link">
                                <p style="">
                                    Sudah punya akun?
                                    <a href="#">Login Di sini</a>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>

    <!-- Jquery JS-->
    <script src="{{ asset('vendor/jquery-3.2.1.min.js') }}"></script>
    <!-- Bootstrap JS-->
    <script src="{{ asset('vendor/bootstrap-4.1/popper.min.js') }}"></script>
    <script src="{{ asset('vendor/bootstrap-4.1/bootstrap.min.js') }}"></script>
    <!-- Vendor JS       -->
    <script src="{{ asset('vendor/slick/slick.min.js') }}">
    </script>
    <script src="{{ asset('vendor/wow/wow.min.js') }}"></script>
    <script src="{{ asset('vendor/animsition/animsition.min.js') }}"></script>
    <script src="{{ asset('vendor/bootstrap-progressbar/bootstrap-progressbar.min.js') }}">
    </script>
    <script src="{{ asset('vendor/counter-up/jquery.waypoints.min.js') }}"></script>
    <script src="{{ asset('vendor/counter-up/jquery.counterup.min.js') }}">
    </script>
    <script src="{{ asset('vendor/circle-progress/circle-progress.min.js') }}"></script>
    <script src="{{ asset('vendor/perfect-scrollbar/perfect-scrollbar.js') }}"></script>
    <script src="{{ asset('vendor/chartjs/Chart.bundle.min.js') }}"></script>
    <script src="{{ asset('vendor/select2/select2.min.js') }}">
    </script>

    <!-- Main JS-->
    <script src="{{ asset('js/main.js') }}"></script>

</body>

</html>
<!-- end document-->
