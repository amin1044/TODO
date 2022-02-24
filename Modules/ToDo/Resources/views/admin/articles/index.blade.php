@extends('todo::admin.articles.index')
@push('style')
    <link type="text/css" rel="stylesheet" href="{{asset('css/persianDatepicker-default.css')}}"/>
@endpush
@section('content')

    <h2 class="text-dark text-center">TO DO</h2>
    <table class="table text-dark text-center table-responsive">

        <thead class="thead-dark">
        <tr>
            <th scope="col" class="w-100">اسم</th>
            <th scope="col">عنوان</th>
            <th scope="col"> زمان شروع</th>
            <th scope="col"> زمان تحویل</th>
            <th scope="col"></th>
            <th scope="col">وضعیت</th>
        </tr>
        </thead>

        <tbody>
        @foreach($article as $articles)
            @if($articles->status == 0)
                <tr class="bg-warning">
                    <td scope="row"> {{$articles->name}}</td>
                    <td scope="row"> {{$articles->title}}</td>
                    <td scope="row"> {{$articles->start}}</td>
                    <td scope="row"> {{$articles->end}} </td>
                    <td scope="row"><input type="checkbox" @if($articles->status==1) checked="checked" @endif disabled>
                    </td>
                    <td scope="row">
                        @if($articles->status==1)
                            DONE
                        @elseif($articles->status==2)
                            UNDONE
                        @elseif($articles->status==3)
                            UNDER REVIEW
                        @elseif($articles->status==4)
                            ِFINISH
                        @endif
                    </td>
                </tr>

            @elseif($articles->status == 1)
                <tr class="bg-success">
                    <td scope="row"> {{$articles->name}}</td>
                    <td scope="row"> {{$articles->title}}</td>
                    <td scope="row"> {{$articles->start}}</td>
                    <td scope="row"> {{$articles->end}} </td>
                    <td scope="row"><input type="checkbox" @if($articles->status==1) checked="checked" @endif disabled>
                    </td>
                    <td scope="row">
                        @if($articles->status==1)
                            DONE
                        @elseif($articles->status==2)
                            UNDONE
                        @elseif($articles->status==3)
                            UNDER REVIEW
                        @elseif($articles->status==4)
                            ِFINISH
                        @endif
                    </td>
                </tr>

            @elseif ($articles->status == 2)
                <tr class="bg-danger">
                    <td scope="row"> {{$articles->name}}</td>
                    <td scope="row"> {{$articles->title}}</td>
                    <td scope="row"> {{$articles->start}}</td>
                    <td scope="row"> {{$articles->end}} </td>
                    <td scope="row"><input type="checkbox" @if($articles->status==1) checked="checked"
                                           @endif disabled></td>
                    <td scope="row">
                        @if($articles->status==1)
                            DONE
                        @elseif($articles->status==2)
                            UNDONE
                        @elseif($articles->status==3)
                            UNDER REVIEW
                        @elseif($articles->status==4)
                            ِFINISH
                        @endif
                    </td>
                </tr>

            @elseif($articles->status == 3)
                <tr class="bg-info">
                    <td scope="row"> {{$articles->name}}</td>
                    <td scope="row"> {{$articles->title}}</td>
                    <td scope="row"> {{$articles->start}}</td>
                    <td scope="row"> {{$articles->end}} </td>
                    <td scope="row"><input type="checkbox" @if($articles->status==1) checked="checked"
                                           @endif disabled></td>
                    <td scope="row">
                        @if($articles->status==1)
                            DONE
                        @elseif($articles->status==2)
                            UNDONE
                        @elseif($articles->status==3)
                            UNDER REVIEW
                        @elseif($articles->status==4)
                            ِFINISH
                        @endif
                    </td>
                </tr>

            @elseif($articles->status == 4)
                <tr class="bg-light">
                    <td scope="row"> {{$articles->name}}</td>
                    <td scope="row"> {{$articles->title}}</td>
                    <td scope="row"> {{$articles->start}}</td>
                    <td scope="row"> {{$articles->end}} </td>
                    <td scope="row"><input type="checkbox" @if($articles->status==1) checked="checked"
                                           @endif disabled></td>
                    <td scope="row">
                        @if($articles->status==1)
                            DONE
                        @elseif($articles->status==2)
                            UNDONE
                        @elseif($articles->status==3)
                            UNDER REVIEW
                        @elseif($articles->status==4)
                            ِFINISH
                        @endif
                    </td>
                </tr>
            @endif
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
