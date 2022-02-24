@if($atten->status == '1')
    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal" data-whatever="@mdo">
        ثبت گزارش
    </button>

    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
         aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">ثبت گزارش کار</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form action="{{ route('admin.attendance.update', $atten -> id) }}" method="post" class="kt-form">
                        @csrf
                        @method('put')
                        <div class="form-group">
                            <label for="recipient-name" class="col-form-label">مدت زمان از دست رفته : برحسب دقیقه</label>
                            <input type="text" class="form-control"
                                   name="time_wasted" id="time_wasted" value="{{ $atten->time_wasted }} دقیقه">
                        </div>
                        <div class="form-group">
                            <label for="overtime">مدت زمان اضافه کار : برحسب دقیقه</label>
                            <input type="text" class="form-control"
                                   name="overtime" id="overtime" value="{{ $atten->overtime }} دقیقه">
                        </div>
                        <div class="form-group">
                            <label for="message-text" class="col-form-label">گزارش کار امروز</label>
                            <textarea class="form-control"
                                      name="description" id="description" value="{{ $atten->description }}"></textarea>
                        </div>
                        <div class="invisible">
                            {{-- begin user_id input --}}
                            <input type="text"
                                   name="user_id" id="user_id" value="{{ auth()->user()->id }}">
                            {{--Begin today_date inputs--}}
                            <input type="text"
                                   name="today_date" id="today_date-input" value="{{ $atten->today_date }}" required>
                            {{--End today_date inputs--}}
                            <input type="text"
                                   name="attendance_time" id="attendance_time" value="{{ $atten->attendance_time }}"
                                   required>
                            {{--End attendance_time-input inputs--}}
                            <input type="text"
                                   name="status" id="status" value="{{ 2 }}" required>
                            {{-- begin logout_time input --}}
                            <input type="text"
                                   name="logout_time" id="logout_time" value="{{ $time }}">
                        </div>
                       <button class="btn btn-success form-control">ثبت</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endif
