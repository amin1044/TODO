@extends('layouts.FrontEnd.master')

@section('title', 'ورود به پنل')

@section('meta_description')
    <meta name="description" content="داده">
@endsection

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-lg">
                <section class="page-account-box">
                    <div class="col-lg-6 col-md-6 col-xs-12 mx-auto">
                        <div class="ds-userlogin">
                            <a href="#" class="account-box-logo">Nader</a>
                            <div class="account-box">
                                <div class="account-box-headline">
                                    <a href="{{route('login')}}" class="login-ds active">
                                        <span class="title">ورود</span>
                                        <span class="sub-title">به دیجی اسمارت</span>
                                    </a>
                                    <a href="{{route('register')}}" class="register-ds">
                                        <span class="title">ثبت نام</span>
                                        <span class="sub-title">در دیجی اسمارت</span>
                                    </a>
                                </div>
                                <div class="Login-to-account mt-4">
                                    <div class="account-box-content">
                                        <h4>ورود به حساب کاربری</h4>
                                        @if($errors->any())
                                            @foreach ($errors->all() as $error)
                                                <div>{{ $error }}</div>
                                            @endforeach
                                        @endif
                                        <form method="post" action="{{('login')}}" class="form-account text-right">
                                            @csrf
                                            <div class="form-account-title">
                                                <label for="mobile">شماره موبایل</label>
                                                <input type="text" class="number-input" id="mobile" name="mobile">
                                            </div>
                                            <div class="form-account-title">
                                                <label for="password">رمز عبور</label>

                                                <input type="password" class="password" name="password">
                                            </div>
                                            <div class="form-auth-row">
                                                <label for="remember" class="ui-checkbox mt-1">
                                                    <input type="checkbox" value="1" name="remember" id="remember">
                                                    <span class="ui-checkbox-check"></span>
                                                </label>
                                                <label for="remember" class="remember-me mr-0">مرا به خاطر بسپار</label>
                                            </div>
                                            <div class="form-row-account">
                                                <button class="btn btn-primary btn-login">ورود به دیجی اسمارت</button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
            </div>
        </div>
    </div>
@endsection

@push('scripts')

@endpush
