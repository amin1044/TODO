@extends('layouts.master')
@push('style')
    <link type="text/css" rel="stylesheet" href="{{asset('css/persianDatepicker-default.css')}}"/>
@endpush
@section('content')
    <h2 class="text-dark text-center">TO DO</h2>
    <table class="table text-dark text-center container-fluid table-responsive">
        <thead class="thead-dark">
        <tr>
            <th>اسم</th>
            <th>عنوان</th>
            <th> زمان شروع</th>
            <th> زمان تحویل</th>
            <th></th>
            <th>وضعیت</th>
            <th></th>
            <th></th>
            <th></th>
            <th></th>
            <th></th>
            <th></th>
        </tr>
        </thead>
        <tbody>
        @foreach($article as $articles)
            <tr>
                <td> {{$articles->name}}</td>
                <td> {{$articles->title}}</td>
                <td> {{$articles->start}}</td>
                <td> {{$articles->end}} </td>
                <td>
                    <form action="{{route('article.update',$articles->id)}}" method="Post">
                        @csrf
                        @method('put')
                        <input name="status" class="invisible" type="checkbox" checked="checked" value="1">
                        <button class="btn btn-success w-100"> تایید</button>
                    </form>
                </td>
                <td>
                    <form action="{{route('article.update',$articles->id)}}" method="Post">
                        @csrf
                        @method('put')
                        <input name="status" class="invisible" type="checkbox" value="3" checked="checked">
                        <button class="btn btn-info w-100">درحال بررسی</button>
                    </form>
                </td>
                <td>
                    <form action="{{route('article.update',$articles->id)}}" method="Post">
                        @csrf
                        @method('put')
                        <input name="status" class="invisible " type="checkbox" value="2" checked="checked">
                        <button class="btn btn-danger w-100">رد</button>
                    </form>
                </td>
                <td>
                    <form action="{{route('article.update',$articles->id)}}" method="Post">
                        @csrf
                        @method('put')
                        <input name="status" class="invisible" type="checkbox" value="4" checked="checked">
                        <button class="btn btn-dark w-100"> حذف</button>
                    </form>
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
    @push('script')
        <script type="text/javascript" src="{{asset('js/jquery-1.10.1.min.js')}}"></script>
        <script type="text/javascript" src="{{asset('js/persianDatepicker.min.js')}}"></script>
        <script type="text/javascript">
            $(function () {
                $("#input1, #span1").persianDatepicker();
            });
        </script>
    @endpush
@endsection
