@extends("frontend.layouts.master")
@section("title")
    Parola Sıfırla
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
                        <h4>Parola Sıfırla</h4>
                        <ul>
                            <li><a href="{{ route("login") }}">Giriş</a></li>
                            <li><a href="{{ route("password.request") }}">Parola Sıfırla</a></li>
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
        FORGET PASSWORD START
    ==============================-->
    <section id="wsus__login_register">
        <div class="container">
            <div class="row">
                <div class="col-xl-5 m-auto">
                    <div class="wsus__forget_area">
                        <span class="qiestion_icon"><i class="fal fa-question-circle"></i></span>
                        <h4>Şifreni mi unuttun ?</h4>
                        <p>Sisteme kayıt olduğunuz email adresinizi giriniz</p>
                        <div class="wsus__login">
                            <form action="{{ route('password.email') }}" method="POST">
                                @csrf
                                <div class="wsus__login_input">
                                    <i class="fal fa-envelope"></i>
                                    <input type="email" id="email" name="email"  value="{{ old("email") }}" placeholder="Email Adresiniz" required>
                                </div>
                                <button class="common_btn" type="submit">Gönder</button>
                            </form>
                        </div>
                        <a class="see_btn mt-4" href="{{ route("login") }}">Giriş Sayfasına Git</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--============================
        FORGET PASSWORD END
    ==============================-->
@endsection

@section("js")
@endsection


{{--<x-guest-layout>
    <div class="mb-4 text-sm text-gray-600">
        {{ __('Forgot your password? No problem. Just let us know your email address and we will email you a password reset link that will allow you to choose a new one.') }}
    </div>

    <!-- Session Status -->
    <x-auth-session-status class="mb-4" :status="session('status')" />

    <form method="POST" action="{{ route('password.email') }}">
        @csrf

        <!-- Email Address -->
        <div>
            <x-input-label for="email" :value="__('Email')" />
            <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autofocus />
            <x-input-error :messages="$errors->get('email')" class="mt-2" />
        </div>

        <div class="flex items-center justify-end mt-4">
            <x-primary-button>
                {{ __('Email Password Reset Link') }}
            </x-primary-button>
        </div>
    </form>
</x-guest-layout>--}}
