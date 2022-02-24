@extends('layouts.FrontEnd.master')
@section('title')
    {{$users->name}}
@endsection
@section('content')
    <div class="container-main">
        <div class="d-block">
            <section class="profile-home">
                <div class="col-lg">
                    <div class="post-item-profile order-1 d-block">
                        <div class="col-lg-3 col-md-3 col-xs-12 pr">
                            <div class="sidebar-profile sidebar-navigation">
                                <section class="profile-box">
                                    <footer class="profile-box-content-footer">
                                        <span class="profile-box-nameuser">{{$users->name}}</span>
                                        <span class="profile-box-registery-date">  {{$users->created_at}}</span>
                                        <span class="profile-box-phone">شماره همراه : {{$users->mobile}}</span>
                                        <div class="profile-box-tabs">
                                            <a onclick="event.preventDefault();
                                               document.getElementById('logout-form').submit();" href="{{ route('logout') }}" class="profile-box-registery-date">خروج</a>
                                            <form id="logout-form" action="{{ route('logout') }}" method="POST"
                                                  style="display: none;">
                                                @csrf
                                            </form>
                                        </div>
                                    </footer>
                                </section>
                                <section class="profile-box">
                                    <ul class="profile-account-navs">
                                        <li class="profile-account-nav-item navigation-link-dashboard">
                                            <a href="{{route('FrontEnd.user.users')}}" ><i class="mdi mdi-account-outline"></i>
                                                پروفایل
                                            </a>
                                        </li>
                                        <li class="profile-account-nav-item navigation-link-dashboard">
                                            <a id="cart" data-value="{{$users->id}}" class=""><i class="mdi mdi-cart"></i>
                                                سبد خرید
                                            </a>
                                        </li>
                                        <li class="profile-account-nav-item navigation-link-dashboard">
                                            <a id="wishList" data-value="{{$users->id}}" class=""><i class="mdi mdi-heart"></i>
                                                لیست علاقه مندی
                                            </a>
                                        </li>
                                        <li class="profile-account-nav-item navigation-link-dashboard">
                                            <a  id="address" data-value="{{$users->id}}" class=""><i class="mdi mdi-map-outline"></i>
                                                آدرس ها
                                            </a>
                                        </li>
                                    </ul>
                                </section>
                            </div>
                        </div>
                        <div class="col-lg-9 col-md-9 col-xs-12 pl">
                            <div class="profile-content">
                                <div class="profile-stats">


                                    <table class="table table-profile">
                                        <tbody>
                                        <tr>
                                            <td class="w-50">
                                                <div class="title">نام و نام خانوادگی:</div>
                                                <div class="value">{{$users->name}}</div>
                                            </td>
                                            <td>
                                                <div class="title">پست الکترونیک :</div>
                                                <div class="value">{{$users->email}}</div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <div class="title">شماره تلفن همراه:</div>
                                                <div class="value">{{$users->mobile}}</div>
                                            </td>
                                            <td>
                                                <div class="title">تاریخ عضویت:</div>
                                                <div class="value">{{$users->created_at}}</div>
                                            </td>
                                        </tr>
                                        </tbody>
                                    </table>

                                    <div class="profile-edit-action">
                                        <a id="edit" data-value="{{$users->id}}" class="link-spoiler-edit btn btn-secondary">ویرایش اطلاعات</a>
                                    </div>
                                </div>
                                <div class="cart-home profile-address address table-favorites">

                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </div>
    </div>

@endsection
@push('scripts')
    <script>
        $(document).ready(function () {
            $("#edit").click(function () {
                let id = $(this).attr('data-value');
                $.ajax({
                    url: '/edit/' + id,
                    data: {
                        _token: "{{  csrf_token() }}"
                    },
                    method: 'get',
                    success: function (data) {
                        $('.profile-stats').addClass('d-none');
                        $('#edit').addClass('active');
                        $('.profile-address').html(data)
                    }
                });

            });

            $("#address").click(function () {
                let id = $(this).attr('data-value');
                $.ajax({
                    url: '/list-address/' + id,
                    data: {
                        _token: "{{  csrf_token() }}"
                    },
                    method: 'get',
                    success: function (data) {
                        $('.profile-stats').addClass('d-none');
                        $('#address').addClass('active');
                        $('.address').html(data)
                    }
                });

            });

            $("#wishList").click(function () {
                let id = $(this).attr('data-value');
                $.ajax({
                    url: '/wishList/' + id,
                    data: {
                        _token: "{{  csrf_token() }}"
                    },
                    method: 'get',
                    success: function (data) {
                        $('.profile-stats').addClass('d-none');
                        $('#wishList').addClass('active');
                        $('.table-favorites').html(data)
                    }
                });

            });



            $("#cart").click(function () {
                let id = $(this).attr('data-value');
                $.ajax({
                    url: '/cart/' + id,
                    data: {
                        _token: "{{  csrf_token() }}"
                    },
                    method: 'get',
                    success: function (data) {
                        $('.profile-stats').addClass('d-none');
                        $('#cart').addClass('active');
                        $('.cart-home').html(data)
                    }
                });

            });
        })
    </script>
@endpush
