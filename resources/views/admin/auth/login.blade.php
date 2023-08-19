<!DOCTYPE html>
<html lang="tr">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="tivo admin is super flexible, powerful, clean &amp; modern responsive bootstrap 5 admin template with unlimited possibilities.">
    <meta name="keywords" content="admin template, Tivo admin template, dashboard template, flat admin template, responsive admin template, web app">
    <meta name="author" content="pixelstrap">
    <link rel="icon" href="{{ asset("backend/assets/images/favicon/favicon.png") }}" type="image/x-icon">
    <link rel="shortcut icon" href="{{ asset("backend/assets/images/favicon/favicon.png") }}" type="image/x-icon">
    <title>Tivo - Premium Admin Template</title><link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="{{ asset("backend/assets/css/vendors/font-awesome.css") }}">
    <!-- ico-font-->
    <link rel="stylesheet" type="text/css" href="{{ asset("backend/assets/css/vendors/icofont.css") }}">
    <!-- Themify icon-->
    <link rel="stylesheet" type="text/css" href="{{ asset("backend/assets/css/vendors/themify.css") }}">
    <!-- Flag icon-->
    <link rel="stylesheet" type="text/css" href="{{ asset("backend/assets/css/vendors/flag-icon.css") }}">
    <!-- Feather icon-->
    <link rel="stylesheet" type="text/css" href="{{ asset("backend/assets/css/vendors/feather-icon.css") }}">
    <!-- Bootstrap css-->
    <link rel="stylesheet" type="text/css" href="{{ asset("backend/assets/css/vendors/bootstrap.css") }}">
    <!-- App css-->
    <link rel="stylesheet" type="text/css" href="{{ asset("backend/assets/css/style.css") }}">
    <link id="color" rel="stylesheet" href="{{ asset("backend/assets/css/color-1.css") }}" media="screen">
    <!-- Responsive css-->
    <link rel="stylesheet" type="text/css" href="{{ asset("backend/assets/css/responsive.css") }}">
</head>
<body>
<!-- Loader starts-->
<div class="loader-wrapper">
    <div class="dot"></div>
    <div class="dot"></div>
    <div class="dot"></div>
    <div class="dot"> </div>
    <div class="dot"></div>
</div>
<!-- Loader ends-->
<!-- login page start-->
<div class="container-fluid">
    <div class="row">
        <div class="col-xl-7"><img class="bg-img-cover bg-center" src="{{ asset("backend/assets/images/login/2.jpg") }}" alt="looginpage"></div>
        <div class="col-xl-5 p-0">
            <div class="login-card">
                <div>
                    <div><a class="logo" href="index.html"><img class="img-fluid for-light" src="{{ asset("backend/assets/images/logo/logo2.png") }}" alt="looginpage"></a></div>
                    <div class="login-main">
                        <form action="{{ route('login') }}" method="POST" class="theme-form needs-validation @if($errors->has("email")) was-validated @endif">
                            @csrf
                            <h4 class="text-center">Yönetim Paneli Giriş Ekranı</h4>
                            <p class="text-center">Giriş için email & parola giriniz.</p>

                            <div class="form-group">
                                <label class="col-form-label" for="email">Email</label>
                                <input class="form-control" type="email" name="email" id="email" placeholder="user@gmail.com" value="{{ old("email") }}" required>
                                @if($errors->has("email"))
                                    <div class="text-danger fw-bold">{{ $errors->first("email") }}</div>
                                @endif
                            </div>



                            <div class="form-group">
                                <label class="col-form-label" for="password">Parola</label>
                                <div class="form-input position-relative">
                                    <input class="form-control" type="password" id="password" name="password" placeholder="*********" value="{{ old("password") }}" required>
                                    @if($errors->has("password"))
                                        <div class="text-danger fw-bold">{{ $errors->first("password") }}</div>
                                    @endif
                                    <div class="show-hide">
                                        <span class="show"></span>
                                    </div>
                                </div>
                            </div>

                            <div class="form-group mb-0">
                                <div class="checkbox p-0">
                                    <input id="remember_me" type="checkbox" name="remember">
                                    <label class="text-muted" for="remember_me">Beni hatırla</label>
                                </div>

                                <a class="link" href="{{ route('password.request') }}">Şifreni mi unuttun?</a>
                                <div class="text-end mt-3">
                                    <button class="btn btn-primary btn-block w-100" type="submit">Giriş</button>
                                </div>
                            </div>

                            <div class="login-social-title">
                                <h6>Diğer Giriş Yöntemleri</h6>
                            </div>
                            <div class="form-group">
                                <ul class="login-social">
                                    <li><a href="https://www.linkedin.com" target="_blank"><i data-feather="linkedin"></i></a></li>
                                    <li><a href="https://twitter.com" target="_blank"><i data-feather="twitter"></i></a></li>
                                    <li><a href="https://www.facebook.com" target="_blank"><i data-feather="facebook"></i></a></li>
                                    <li><a href="https://www.instagram.com" target="_blank"><i data-feather="instagram"></i></a></li>
                                </ul>
                            </div>
                            <p class="mt-4 mb-0 text-center">Hesabınız yok mu?<a class="ms-2" href="javascript:void(0)">Tıklayın Kayıt Olun</a></p>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- latest jquery-->
    <script src="{{ asset("backend/assets/js/jquery-3.6.0.min.js") }}"></script>
    <!-- Bootstrap js-->
    <script src="{{ asset("backend/assets/js/bootstrap/bootstrap.bundle.min.js") }}"></script>
    <!-- feather icon js-->
    <script src="{{ asset("backend/assets/js/icons/feather-icon/feather.min.js") }}"></script>
    <script src="{{ asset("backend/assets/js/icons/feather-icon/feather-icon.js") }}"></script>
    <!-- scrollbar js-->
    <!-- Sidebar jquery-->
    <script src="{{ asset("backend/assets/js/config.js") }}"></script>
    <!-- Template js-->
    <script src="{{ asset("backend/assets/js/script.js") }}"></script>
    <!-- login js-->
</div>
</body>
</html>
