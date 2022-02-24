{{--@extends('todo::layouts.master')--}}
{{--@push('style')--}}
{{--    <link type="text/css" rel="stylesheet" href="{{asset('css/persianDatepicker-default.css')}}"/>--}}
{{--@endpush--}}
{{--@section('content')--}}
{{--    <h2 class="text-center text-dark"> ایجاد تسک جدید</h2>--}}
{{--    @if($errors->any())--}}
{{--        <div class="alert alert-danger">--}}
{{--            <ul>--}}
{{--                @foreach($errors->all() as $error)--}}
{{--                    <li>{{ $error }}</li>--}}
{{--                @endforeach--}}
{{--            </ul>--}}
{{--        </div>--}}
{{--    @endif--}}
{{--    <form action="{{route('todo.store')}}" method="POST" class="container-fluid text-right">--}}
{{--        @csrf--}}
{{--        <div class="form-group text-dark">--}}
{{--            <label for="name">نام خود را وارد کنید:</label>--}}
{{--            <input type="text" name="name" class="form-control">--}}
{{--        </div>--}}
{{--        <div class="form-group text-dark">--}}
{{--            <label for="title">عنوان:</label>--}}
{{--            <input type="text" name="title" class="form-control">--}}
{{--        </div>--}}
{{--        <label class="text-dark">تاریخ شروع:</label>--}}
{{--        <br>--}}
{{--        <input type="text" name="start" id="start"/>--}}
{{--        <br>--}}
{{--        <br>--}}
{{--        <label class="text-dark">مهلت ارسال:</label>--}}
{{--        <br>--}}
{{--        <input name="end" type="text" id="end"/>--}}
{{--        <button class="btn btn-info d-block m-1">ارسال</button>--}}
{{--    </form>--}}
{{--    @push('script')--}}
{{--        <script type="text/javascript" src="{{asset('js/jquery-1.10.1.min.js')}}"></script>--}}
{{--        <script type="text/javascript" src="{{asset('js/persianDatepicker.min.js')}}"></script>--}}
{{--        <script type="text/javascript">--}}
{{--            $(function () {--}}
{{--                $("#start, #end").persianDatepicker();--}}
{{--            });--}}
{{--        </script>--}}
{{--    @endpush--}}
{{--@endsection--}}
