@extends("frontend.layouts.master")
@section("title")
    Oturum Aç
@endsection

@section("css")
@endsection

@section("content")
    <!--============================
     BREADCRUMB START
==============================-->
    <section id="wsus__breadcrumb">
        <div class="wsus_breadcrumb_overlay">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <h4>login / register</h4>
                        <ul>
                            <li><a href="#">home</a></li>
                            <li><a href="#">login / register</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--============================
        BREADCRUMB END
    ==============================-->


    <!--============================
       LOGIN/REGISTER PAGE START
    ==============================-->
    <section id="wsus__login_register">
        <div class="container">
            <div class="row">
                <div class="col-xl-5 m-auto">
                    <div class="wsus__login_reg_area">
                        <ul class="nav nav-pills mb-3" id="pills-tab2" role="tablist">
                            <li class="nav-item" role="presentation">
                                <button class="nav-link active" id="pills-home-tab2" data-bs-toggle="pill"
                                        data-bs-target="#pills-homes" type="button" role="tab" aria-controls="pills-homes"
                                        aria-selected="true">login</button>
                            </li>
                            <li class="nav-item" role="presentation">
                                <button class="nav-link" id="pills-profile-tab2" data-bs-toggle="pill"
                                        data-bs-target="#pills-profiles" type="button" role="tab"
                                        aria-controls="pills-profiles" aria-selected="true">signup</button>
                            </li>
                        </ul>

                        <div class="tab-content" id="pills-tabContent2">
                            <!--! Login Form -->
                            <div class="tab-pane fade show active" id="pills-homes" role="tabpanel"
                                 aria-labelledby="pills-home-tab2">
                                <div class="wsus__login">
                                    <form action="{{ route("login") }}" method="POST">
                                        @csrf
                                        <div class="wsus__login_input">
                                            <i class="fas fa-user-tie"></i>
                                            <input type="email" id="email" name="email" value="{{ old("email") }}" placeholder="Email" >
                                        </div>

                                        <div class="wsus__login_input">
                                            <i class="fas fa-key"></i>
                                            <input type="password" id="password" name="password" placeholder="Parola" >
                                        </div>

                                        <div class="wsus__login_save">
                                            <div class="form-check form-switch">
                                                <input class="form-check-input" name="remember_me" id="remember_me" type="checkbox">
                                                <label class="form-check-label" for="remember_me">Beni Hatırla</label>
                                            </div>
                                            <a class="forget_p" href="{{ route("password.request") }}">Şifreni mi unuttun ?</a>
                                        </div>

                                        <button class="common_btn" type="submit">Giriş</button>
                                        <p class="social_text">Diğer Giriş Yöntemleri</p>
                                        <ul class="wsus__login_link">
                                            <li><a href="javascript:void(0)"><i class="fab fa-google"></i></a></li>
                                            <li><a href="javascript:void(0)"><i class="fab fa-facebook-f"></i></a></li>
                                            <li><a href="javascript:void(0)"><i class="fab fa-twitter"></i></a></li>
                                            <li><a href="javascript:void(0)"><i class="fab fa-linkedin-in"></i></a></li>
                                        </ul>
                                    </form>
                                </div>
                            </div>

                            <!--! Register Form-->
                            <div class="tab-pane fade" id="pills-profiles" role="tabpanel"
                                 aria-labelledby="pills-profile-tab2">
                                <div class="wsus__login">
                                    <form action="{{ route("register") }}" method="POST">
                                        @csrf
                                        <div class="wsus__login_input">
                                            <i class="fas fa-user-tie"></i>
                                            <input type="text" id="name" name="name" value="{{ old("name") }}" placeholder="Adınız">
                                        </div>

                                        <div class="wsus__login_input">
                                            <i class="fas fa-user-tie"></i>
                                            <input type="text" id="surname" name="surname" value="{{ old("surname") }}" placeholder="Soyadınız">
                                        </div>

                                        <div class="wsus__login_input">
                                            <i class="far fa-envelope"></i>
                                            <input type="email" id="email" name="email" value="{{ old("email") }}" placeholder="Email">
                                        </div>

                                        <div class="wsus__login_input">
                                            <i class="fas fa-key"></i>
                                            <input type="password" id="password" name="password" placeholder="Parola">
                                        </div>

                                        <div class="wsus__login_input">
                                            <i class="fas fa-key"></i>
                                            <input type="password" id="password_confirmation" name="password_confirmation" placeholder="Parola Onayla">
                                        </div>

                                        <div class="wsus__login_save">
                                            <button class="common_btn" type="submit">Kayıt Ol</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--============================
       LOGIN/REGISTER PAGE END
    ==============================-->
@endsection

@section("js")
@endsection

