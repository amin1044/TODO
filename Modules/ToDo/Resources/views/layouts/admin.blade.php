@extends('layouts.master')
@section('content')
    <h2> all Articles</h2>
    <table class="table">
        <thead>
        <tr>
            <th>اسم</th>
            <th>عنوان</th>
            <th> زمان شروع</th>
            <th> زمان تحویل</th>
            <th>وضعیت</th>
        </tr>
        </thead>
        <tbody>
        @foreach($amin as $data)
            <tr>
                <td> {{$data->name}}</td>
                <td> {{$data->title}}</td>
                <td> {{$data->start}}</td>
                <td> {{$data->end}} </td>
                <td>
                    @if($data->status==1)
                        done
                    @else
                        undone
                    @endif
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
@endsection
