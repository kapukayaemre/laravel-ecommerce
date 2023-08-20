@extends("admin.layouts.master")
@section("title")
    Profil Bilgileri
@endsection

@section("css")
@endsection

@section("content")
    <div class="container-fluid">
        <div class="page-title">
            <div class="row">
                <div class="col-sm-6">
                    <h3>Profil</h3>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="{{ route("admin.dashboard") }}"><i data-feather="home"></i></a></li>
                        <li class="breadcrumb-item">Users</li>
                        <li class="breadcrumb-item active"> Edit Profile</li>
                    </ol>
                </div>
            </div>
        </div>
    </div>
    <!-- Container-fluid starts-->
    <div class="container-fluid">
        <div class="edit-profile">
            <div class="row">
                <div class="col-xl-4 col-lg-5">
                    <div class="card">
                        <div class="card-header pb-0">
                            <h4 class="card-title mb-0">Parola Güncelleme Alanı</h4>
                            <div class="card-options"><a class="card-options-collapse" href="#" data-bs-toggle="card-collapse"><i class="fe fe-chevron-up"></i></a><a class="card-options-remove" href="#" data-bs-toggle="card-remove"><i class="fe fe-x"></i></a></div>
                        </div>
                        <div class="card-body">
                            <form action="{{ route("admin.profile.update-password") }}" method="POST">
                                @csrf
                                <div class="mb-3">
                                    <label class="form-label f-w-500" for="current_password">Mevcut Parola</label>
                                    <input class="form-control" type="password" name="current_password" id="current_password">
                                </div>
                                <div class="mb-3">
                                    <label class="form-label f-w-500" for="password">Parola</label>
                                    <input class="form-control" type="password" name="password" id="password">
                                </div>
                                <div class="mb-3">
                                    <label class="form-label f-w-500" for="password_confirmation">Parola Onayla</label>
                                    <input class="form-control" type="password" name="password_confirmation" id="password_confirmation">
                                </div>
                                <div class="form-footer">
                                    <button type="submit" class="btn btn-primary btn-block">Güncelle</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                <div class="col-xl-8 col-lg-7">
                    <form method="POST" action="{{ route('admin.profile.update') }}" class="card" enctype="multipart/form-data">
                        @csrf
                        <div class="card-header pb-0">
                            <h4 class="card-title mb-0">Profil Düzenle</h4>
                            <div class="card-options"><a class="card-options-collapse" href="#" data-bs-toggle="card-collapse"><i class="fe fe-chevron-up"></i></a><a class="card-options-remove" href="#" data-bs-toggle="card-remove"><i class="fe fe-x"></i></a></div>
                        </div>
                        <div class="card-body">
                            <div class="row mb-2">
                                <div class="profile-title">
                                    <div class="d-lg-flex d-block align-items-center">
                                        <img class="img-70 rounded-circle imagePreview" alt="" src="{{ isset($user) ? asset($user->image) : asset("backend/assets/images/user/7.jpg") }}">
                                        <div class="flex-grow-1">
                                            <h3 class="mb-1 f-20 txt-primary">{{ isset($user) ? $user->name." ".$user->surname : "MARK JECNO" }}</h3>
                                            <p class="f-12 mb-0">{{ isset($user) ? $user->role : "DESIGNER" }}</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-sm-6 col-md-6">
                                    <div class="mb-3">
                                        <label class="form-label f-w-500" for="image">Profil Resmi</label>
                                        <input class="form-control" type="file" name="image" id="image">
                                    </div>
                                </div>
                                <div class="col-sm-6 col-md-6">
                                    <div class="mb-3" x-data>
                                        <label class="form-label f-w-500" for="phone">Telefon</label>
                                        <input x-mask="999-999-99-99" class="form-control" type="tel" name="phone" id="phone" value="{{ isset($user) ? $user->phone : "" }}" placeholder="Telefon">
                                    </div>
                                </div>
                                <div class="col-sm-6 col-md-6">
                                    <div class="mb-3">
                                        <label class="form-label f-w-500" for="name">Adınız</label>
                                        <input class="form-control" type="text" name="name" id="name" value="{{ isset($user) ? $user->name : "" }}" placeholder="Adınız">
                                    </div>
                                </div>
                                <div class="col-sm-6 col-md-6">
                                    <div class="mb-3">
                                        <label class="form-label f-w-500" for="surname">Soyadınız</label>
                                        <input class="form-control" type="text" name="surname" id="surname" value="{{ isset($user) ? $user->surname : "" }}" placeholder="Soyadınız">
                                    </div>
                                </div>
                                <div class="col-sm-6 col-md-6">
                                    <div class="mb-3">
                                        <label class="form-label f-w-500" for="username">Kullanıcı Adı</label>
                                        <input class="form-control" type="text" name="username" id="username" value="{{ isset($user) ? $user->username : "" }}" placeholder="Kullanıcı Adınız">
                                    </div>
                                </div>
                                <div class="col-sm-6 col-md-6">
                                    <div class="mb-3">
                                        <label class="form-label f-w-500" for="email">Email</label>
                                        <input class="form-control" type="email" name="email" id="email" value="{{ isset($user) ? $user->email : "" }}" placeholder="Email">
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div>
                                        <label class="form-label f-w-500" for="about">Hakkınızda</label>
                                        <textarea class="form-control" rows="5" name="about" id="about" placeholder="Hakkınızda Kısa Bilgi">{{ isset($user) ? $user->about : "" }}</textarea>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card-footer text-end">
                            <button class="btn btn-primary" type="submit">Güncelle</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- Container-fluid Ends-->
@endsection

@section("js")
    <script>
        $(document).ready(function () {
            $("#image").on("change", function () {
                if (this.files && this.files[0]) {
                    let reader = new FileReader();

                    reader.onload = function (e) {
                        $(".imagePreview").attr("src", e.target.result);
                    }

                    reader.readAsDataURL(this.files[0]);
                }
            });
        });
    </script>
@endsection
