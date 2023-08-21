@extends("frontend.layouts.master")
@section("title")
    Parola Sıfırlama Formu
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
                            <li><a href="#">Giriş</a></li>
                            <li><a href="#">Parola Sıfırla</a></li>
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
        CHANGE PASSWORD START
    ==============================-->
    <section id="wsus__login_register">
        <div class="container">
            <div class="row">
                <div class="col-xl-5 col-md-10 col-lg-7 m-auto">
                    <form action="{{ route('password.store') }}" method="POST">
                        @csrf

                        <!-- Password Reset Token -->
                        <input type="hidden" name="token" value="{{ $request->route('token') }}">

                        <div class="wsus__change_password">
                            <h4>Parola Sıfırlama Formu</h4>

                            <div class="wsus__single_pass">
                                <label>Email</label>
                                <input type="email" id="email" name="email" value="{{ old("email", $request->email) }}" placeholder="Email Adresiniz">
                            </div>

                            <div class="wsus__single_pass">
                                <label>Yeni Parola</label>
                                <input type="password" id="password" name="password" placeholder="Yeni Parola" required>
                            </div>

                            <div class="wsus__single_pass">
                                <label>Yeni Parola Onayla</label>
                                <input type="password" id="password_confirmation" name="password_confirmation" placeholder="Yeni Parola Onayla">
                            </div>

                            <button class="common_btn" type="submit">Sıfırla</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
    <!--============================
        CHANGE PASSWORD END
    ==============================-->
@endsection

@section("js")
@endsection


{{--<x-guest-layout>
    <form method="POST" action="{{ route('password.store') }}">
        @csrf

        <!-- Password Reset Token -->
        <input type="hidden" name="token" value="{{ $request->route('token') }}">

        <!-- Email Address -->
        <div>
            <x-input-label for="email" :value="__('Email')" />
            <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email', $request->email)" required autofocus autocomplete="username" />
            <x-input-error :messages="$errors->get('email')" class="mt-2" />
        </div>

        <!-- Password -->
        <div class="mt-4">
            <x-input-label for="password" :value="__('Password')" />
            <x-text-input id="password" class="block mt-1 w-full" type="password" name="password" required autocomplete="new-password" />
            <x-input-error :messages="$errors->get('password')" class="mt-2" />
        </div>

        <!-- Confirm Password -->
        <div class="mt-4">
            <x-input-label for="password_confirmation" :value="__('Confirm Password')" />

            <x-text-input id="password_confirmation" class="block mt-1 w-full"
                                type="password"
                                name="password_confirmation" required autocomplete="new-password" />

            <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
        </div>

        <div class="flex items-center justify-end mt-4">
            <x-primary-button>
                {{ __('Reset Password') }}
            </x-primary-button>
        </div>
    </form>
</x-guest-layout>--}}
