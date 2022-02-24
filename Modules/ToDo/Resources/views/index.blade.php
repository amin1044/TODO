@extends('layouts.Dashboard.master')
@section('title', 'کار ها')
@section('breadCrumb', \DaveJamesMiller\Breadcrumbs\Facades\Breadcrumbs::render('list-todo'))
@section('content')
    <div class="kt-container  kt-container--fluid  kt-grid__item kt-grid__item--fluid">
        <div class="kt-portlet kt-portlet--mobile">
            <div class="kt-portlet__head kt-portlet__head--lg">
                <div class="kt-portlet__head-label">
                    <span class="kt-portlet__head-icon">
                        <i class="kt-font-brand flaticon2-line-chart"></i>
                    </span>
                    <h3 class="kt-portlet__head-title">
                        لیست کار ها
                    </h3>
                </div>
                <div class="kt-portlet__head-toolbar">
                    <div class="kt-portlet__head-wrapper">
                        <div class="kt-portlet__head-actions">
                            <button type="button" class="btn btn-primary" data-toggle="modal"
                                    data-target="#exampleModal" data-whatever="@getbootstrap"> جدید
                            </button>
                            <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog"
                                 aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog" role="document">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="exampleModalLabel">تسک جدید</h5>
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                            </button>
                                        </div>
                                        @if($errors->any())
                                            <div class="alert alert-danger">
                                                <ul>
                                                    @foreach($errors->all() as $error)
                                                        <li>{{ $error }}</li>
                                                    @endforeach
                                                </ul>
                                            </div>
                                        @endif
                                        <form action="{{route('todo.store')}}" method="POST"
                                              class="container-fluid class=" text-right
                                        ">
                                        <select class="form-select" id="multiple-select-custom-field" data-placeholder="Choose anything" multiple>
                                            <option>Christmas Island</option>
                                            <option>South Sudan</option>
                                            <option>Jamaica</option>
                                            <option>Kenya</option>
                                            <option>French Guiana</option>
                                            <option>Mayotta</option>
                                            <option>Liechtenstein</option>
                                            <option>Denmark</option>
                                            <option>Eritrea</option>
                                            <option>Gibraltar</option>
                                            <option>Saint Helena, Ascension and Tristan da Cunha</option>
                                            <option>Haiti</option>
                                            <option>Namibia</option>
                                            <option>South Georgia and the South Sandwich Islands</option>
                                            <option>Vietnam</option>
                                            <option>Yemen</option>
                                            <option>Philippines</option>
                                            <option>Benin</option>
                                            <option>Czech Republic</option>
                                            <option>Russia</option>
                                        </select>
                                        <div class="form-group text-dark">
                                            <label for="title">عنوان:</label>
                                            <input type="text" name="title" class="form-control">
                                        </div>
                                        <label class="text-dark">تاریخ شروع:</label>
                                        <br>
                                        <input type="text" name="start" id="start"/>
                                        <br>
                                        <br>
                                        <label class="text-dark">مهلت ارسال:</label>
                                        <br>
                                        <input name="end" type="text" id="end"/>
                                        <div class="modal-footer">
                                            <button class="btn btn-info d-block m-1">ارسال</button>
                                            <button type="button" class="btn btn-secondary" data-dismiss="modal">
                                                بستن
                                            </button>
                                        </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="kt-portlet__body">
                <!--begin: Datatable -->
                <table class="table table-striped- table-bordered table-hover table-checkable" id="kt_table_1">
                    <thead>
                    <tr>
                        <th style="width: 20px">ردیف</th>
                        <th style="width: 140px">نام</th>
                        <th style="width: 180px"> عنوان</th>
                        <th style="width: 180px"> زمان شرروع</th>
                        <th style="width: 180px">مهلت</th>
                        <th style="width: 180px"> وضعیت</th>
                        <th style="width: 180px">بررسی</th>
                    </tr>
                    </thead>
                    @foreach($data as $item)
                        <tr>
                            <th style="width: 20px">{{$item->id}}</th>
                            <th style="width: 100px">{{$item->name}}</th>
                            <th style="width: 180px">{{$item->title}}</th>
                            <th style="width: 180px">{{$item->start}}</th>
                            <th style="width: 180px">{{$item->end}}</th>
                            <th style="width: 180px">
                                @if($item->status == 0)
                                    <p class="text-warning"> انجام نشده </p>
                                @elseif($item->status==1)
                                    <p class="text-success">OK</p>
                                @else
                                    <P class="text-danger"> رد شده</P>
                                @endif
                            </th>
                            <td class="row">
                                @if($item->status == 0)
                                    <form class="mr-1" action="{{route('todo.updates',$item->id)}}" method="post">
                                        @csrf
                                        <input name="status" class="invisible" type="checkbox" checked="checked"
                                               value="1">
                                        <button type="submit" class="btn btn-success w-100"> تایید</button>
                                    </form>
                                    <form action="{{route('todo.updates',$item->id)}}" method="post">
                                        @csrf
                                        <input name="status" class="invisible" type="checkbox" checked="checked"
                                               value="2">
                                        <button type="submit" class="btn btn-danger w-100"> رد</button>
                                    </form>
                                @elseif($item->status==1|2)
                                    <form class="m-1" action="{{route('todo.updates',$item->id)}}" method="post">
                                        @csrf
                                        <input name="status" class="invisible" type="checkbox" checked="checked"
                                               value="0">
                                        <button type="submit" class="btn btn-warning w-100"> بازگشت</button>
                                    </form>
                                @endif
                            </td>
                        </tr>
                    @endforeach
                </table>
                <!--end: Datatable -->
            </div>
        </div>
    </div>
@endsection
@push('scripts')
    {{--Start datatable scripts--}}
    <script type="text/javascript" src="{{ asset('js/Dashboard/DataTable/DataTable.js') }}"></script>
    <script type="text/javascript">
        $(document).ready(function () {
            let columns = [
                {data: 'id'},
                {data: 'name'},
                {data: 'title'},
                {data: 'start'},
                {data: 'end'},
            ];
            tables('#kt_table_1', columns).init();
        });
    </script>
    <s

    {{--End datatable scripts--}}
@endpush
