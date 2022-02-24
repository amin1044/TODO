@extends('layouts.Dashboard.master')

@section('title', ' لیست حضور و غیاب')
@section('breadCrumb', \DaveJamesMiller\Breadcrumbs\Facades\Breadcrumbs::render('list-attendance'))

@section('content')
    <div class="kt-container  kt-container--fluid  kt-grid__item kt-grid__item--fluid">
        <div class="kt-portlet kt-portlet--mobile">
            <div class="kt-portlet__head kt-portlet__head--lg">
                <div class="kt-portlet__head-label">
                    <span class="kt-portlet__head-icon">
                        <i class="kt-font-brand flaticon2-line-chart"></i>
                    </span>
                    <h3 class="kt-portlet__head-title">
                        لیست حضور و غیاب
                    </h3>
                </div>
            </div>
            <div class="kt-portlet__body">

                <!--begin: Datatable -->
                <table class="table table-striped- table-bordered table-hover table-checkable" id="kt_table_1"
                       data-link="{{ route('admin.admin_attendance.ajax.list') }}">
                    <thead>
                    <tr>
                        <th style="width: 20px">ردیف</th>
                        <th style="width: 30px">نام</th>
                        <th style="width: 70px">تاریخ امروز</th>
                        <th style="width: 70px">زمان ورود</th>
                        <th style="width: 70px">زمان خروج</th>
                        <th style="width: 70px">زمان حضور</th>
                        <th style="width: 90px">زمان هدر رفته</th>
                        <th style="width: 70px">اضافه کار</th>
                        <th style="width: 700px">گزارش روزانه</th>
                        <th style="width: 600px">عملیات</th>
                    </tr>
                    </thead>
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
                {data:  'id'},
                {data:  'name'},
                {data:  'today_date'},
                {data:  'attendance_time'},
                {data:  'logout_time'},
                {data:  'time'},
                {data:  'time_wasted'},
                {data:  'overtime'},
                {data:  'description'},
                {data:  'actions'},
            ];
            tables('#kt_table_1', columns).init();
        });
    </script>
    {{--End datatable scripts--}}
@endpush
