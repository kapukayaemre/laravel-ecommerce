@extends("frontend.dashboard.layouts.master")
@section("title")
    Profil
@endsection

@section("css")
@endsection

@section("content")
    <!--=============================
    DASHBOARD START
  ==============================-->
    <section id="wsus__dashboard">
        <div class="container-fluid">
            @include("frontend.dashboard.layouts.partials.sidebar")
            <div class="row">
                <div class="col-xl-9 col-xxl-10 col-lg-9 ms-auto">
                    <div class="dashboard_content mt-2 mt-md-0">
                        <h3><i class="far fa-user"></i> profil</h3>
                        <div class="wsus__dashboard_profile">
                            <div class="wsus__dash_pro_area">
                                <h4>Temel Bilgiler</h4>
                                <div class="row">
                                    <form action="{{ route("user.profile") }}" method="POST" enctype="multipart/form-data">
                                        @csrf
                                        <div class="row">
                                            <div class="col-xl-10">
                                                <div class="row">
                                                    <div class="col-xl-6 col-md-6">
                                                        <div class="wsus__dash_pro_single">
                                                            <i class="fas fa-user-tie"></i>
                                                            <input type="text" placeholder="Adınız" name="name" id="name" value="{{ old("name", Auth::user()->name) }}">
                                                        </div>
                                                    </div>
                                                    <div class="col-xl-6 col-md-6">
                                                        <div class="wsus__dash_pro_single">
                                                            <i class="fas fa-user-tie"></i>
                                                            <input type="text" placeholder="Soyadınız" name="surname" id="surname" value="{{ old("surname", Auth::user()->surname) }}">
                                                        </div>
                                                    </div>
                                                    <div class="col-xl-6 col-md-6" x-data>
                                                        <div class="wsus__dash_pro_single">
                                                            <i class="far fa-phone-alt"></i>
                                                            <input x-mask="999-999-99-99" type="tel" placeholder="Telefon" name="phone" id="phone" value="{{ old("phone", Auth::user()->phone) }}">
                                                        </div>
                                                    </div>
                                                    <div class="col-xl-6 col-md-6">
                                                        <div class="wsus__dash_pro_single">
                                                            <i class="fal fa-envelope-open"></i>
                                                            <input type="email" placeholder="Email" name="email" id="email" value="{{ old("email", Auth::user()->email) }}">
                                                        </div>
                                                    </div>
                                                    <div class="col-xl-12">
                                                        <div class="wsus__dash_pro_single">
                                                            <textarea cols="3" rows="5" placeholder="Hakkınızda Kısa Bilgi" name="about" id="about">{{ old("about", Auth::user()->about) }}</textarea>
                                                        </div>
                                                    </div>

                                                    <div class="col-xl-12">
                                                        <div id="medicine_row3">
                                                            <h4>Sosyal Medyalar</h4>
                                                            <div class="row">
                                                                <div class="col-xl-5 col-md-5">
                                                                    <div class="medicine_row_input">
                                                                        <input type="text" placeholder="www.facebook.com">
                                                                        {{--<input type="text" placeholder="www.facebook.com" name="name[]">--}}
                                                                    </div>
                                                                </div>
                                                                <div class="col-xl-5 col-md-5">
                                                                    <div class="medicine_row_input">
                                                                        <input type="text" placeholder="www.youtube.com">
                                                                        {{--<input type="text" placeholder="www.youtube.com" name="name[]">--}}
                                                                    </div>
                                                                </div>
                                                                <div class="col-xl-2 col-md-2">
                                                                    <div class="medicine_row_input">
                                                                        <button type="button" disabled id="add_row3"><i class="fas fa-plus" aria-hidden="true"></i></button>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>

                                                </div>
                                            </div>
                                            <div class="col-xl-2 col-sm-6 col-md-6">
                                                <div class="wsus__dash_pro_img">
                                                    <img src="{{ isset(Auth::user()->image) ? asset(Auth::user()->image) : asset("frontend/images/ts-2.jpg") }}" id="imagePreview" alt="img" class="img-fluid w-100">
                                                    <input type="file" name="image" id="image" accept=".jpg,.jpeg,.png,.JPG,.JPEG">
                                                </div>
                                            </div>
                                            <div class="col-xl-12">
                                                <button class="common_btn mb-4 mt-2" type="submit">Bilgileri Güncelle</button>
                                            </div>
                                        </div>
                                    </form>
                                </div>


                                <form action="" method="POST" class="mt-4">
                                    @csrf
                                    <div class="wsus__dash_pass_change mt-2">
                                        <div class="row">
                                            <div class="col-xl-4 col-md-6">
                                                <div class="wsus__dash_pro_single">
                                                    <i class="fas fa-unlock-alt"></i>
                                                    <input type="password" name="current_password" id="current_password" placeholder="Mevcut Parola">
                                                </div>
                                            </div>
                                            <div class="col-xl-4 col-md-6">
                                                <div class="wsus__dash_pro_single">
                                                    <i class="fas fa-lock-alt"></i>
                                                    <input type="password" name="password" id="password" placeholder="Yeni Parola">
                                                </div>
                                            </div>
                                            <div class="col-xl-4">
                                                <div class="wsus__dash_pro_single">
                                                    <i class="fas fa-lock-alt"></i>
                                                    <input type="password" name="password_confirmation" id="password_confirmation" placeholder="Parola Onayla">
                                                </div>
                                            </div>
                                            <div class="col-xl-12">
                                                <button class="common_btn" type="submit">Parola Güncelle</button>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--=============================
      DASHBOARD START
    ==============================-->
@endsection

@section("js")
    <script>
        $(document).ready(function () {
            $("#image").on("change", function () {
                if (this.files && this.files[0]) {
                    let reader = new FileReader();

                    reader.onload = function (e) {
                        $("#imagePreview").attr("src", e.target.result);
                    }

                    reader.readAsDataURL(this.files[0]);
                }
            });
        });
    </script>
@endsection
