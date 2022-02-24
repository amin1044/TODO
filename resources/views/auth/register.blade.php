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
                            <a href="{{route('register')}}" class="account-box-logo">digismart</a>
                            <div class="account-box">
                                <div class="account-box-headline">
                                    <a href="{{route('login')}}" class="login-ds">
                                        <span class="title">ورود</span>
                                        <span class="sub-title">به دیجی اسمارت</span>
                                    </a>
                                    <a href="{{route('register')}}" class="register-ds active">
                                        <span class="title">ثبت نام</span>
                                        <span class="sub-title">در دیجی اسمارت</span>
                                    </a>
                                </div>
                                <div class="Login-to-account mt-4">
                                    <div class="account-box-content">
                                        <h4>ثبت نام در دیجی اسمارت</h4>
                                        @if($errors->any())
                                            @foreach ($errors->all() as $error)
                                                <div>{{ $error }}</div>
                                            @endforeach
                                        @endif
                                        <form method="post" action="{{route('register')}}" method="post" class="form-account text-right">
                                            @csrf
                                            <div class="form-account-title">
                                                <label for="email-phone">نام کاربری</label>
                                                <input type="text" class="number-email-input" id="name" name="name">
                                            </div>
                                            <div class="form-account-title">
                                                <label for="email-phone">ایمیل / شماره موبایل</label>
                                                <input type="number" class="number-email-input" id="mobile" name="mobile">
                                            </div>
                                            <div class="form-account-title">
                                                <label for="email-phone">ایمیل </label>
                                                <input type="email" class="number-email-input" id="email" name="email">
                                            </div>

                                            <div class="form-account-title">
                                                <label for="password">رمز عبور</label>
                                                <input type="password" class="password-input" name="password">
                                            </div>
                                            <div class="form-auth-row">
                                                <label for="#" class="ui-checkbox mt-1">
                                                    <input type="checkbox" value="1" name="login" id="remember">
                                                    <span class="ui-checkbox-check"></span>
                                                </label>
                                                <label for="remember" class="remember-me mr-0"><a href="#">حریم خصوصی</a> و <a href="#">شرایط قوانین </a>استفاده از سرویس های سایت دیجی‌اسمارت را مطالعه نموده و با کلیه موارد آن موافقم.</label>
                                            </div>
                                            <div class="form-row-account">
                                                <button class="btn btn-primary btn-register">ثبت نام در دیجی اسمارت</button>
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
