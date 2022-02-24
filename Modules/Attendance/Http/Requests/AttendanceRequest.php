<?php

namespace Modules\Attendance\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class AttendanceRequest extends FormRequest
{
    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'today_date' => 'required',
            'attendance_time' => 'required',
            'logout_time' => 'nullable',
            'time' => 'nullable',
            'overtime' => 'nullable',
            'time_wasted' => 'nullable',
            'description' => 'nullable',
            'status'=>'required'
        ];
    }

    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }
}
