<div class="form-group row">
    {{-- begin time_wasted input --}}
    <div class=" col-lg-6">
        <label for="time_wasted">مدت زمان از دست رفته : برحسب دقیقه</label>
        <input type="text" class="form-control" placeholder="زمان از دست رفته فرد."
               name="time_wasted" id="time_wasted" value="{{ $atten->time_wasted }} دقیقه" >
    </div>
    {{-- end time_wasted input --}}
    {{-- begin overtime input --}}
    <div class=" col-lg-6">
        <label for="overtime">مدت زمان اضافه کار : برحسب دقیقه</label>
        <input type="text" class="form-control" placeholder="مدت زمان اضافه کار خود را بنویسید" title=""
               name="overtime" id="overtime" value="{{ $atten->overtime }} دقیقه" >
    </div>
    {{-- end overtime input --}}
</div>
<div class="form-group row ">
    {{-- begin description input --}}
    <div class=" col-lg-6">
        <label for="description">گزارش کار خود را بنویسید</label>
        <input type="text" class="form-control" placeholder="خلاصه کار فرد." title=""
               name="description" id="description" value="{{ $atten->description }}" required>
    </div>
    {{-- end description input --}}


</div>
<div class="invisible">
    {{-- begin user_id input --}}
        <input type="text"
               name="user_id" id="user_id" value="{{ auth()->user()->id }}" >
    {{--Begin today_date inputs--}}
        <input type="text"
               name="today_date" id="today_date-input" value="{{ $atten->today_date }}" required>
    {{--End today_date inputs--}}
        <input type="text"
               name="attendance_time" id="attendance_time" value="{{ $atten->attendance_time }}" required>
    {{--End attendance_time-input inputs--}}
        <input type="text"
               name="status" id="status" value="{{ 2 }}" required>
    {{-- begin logout_time input --}}
        <input type="text"
               name="logout_time" id="logout_time" value="{{ $time }}">
</div>



@component('Components.Dashboard.Form.submit-button')@endcomponent

@push('scripts')

@endpush
