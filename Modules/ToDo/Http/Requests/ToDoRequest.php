<?php


namespace Modules\ToDo\Http\Request;

use Illuminate\Foundation\Http\FormRequest;

class ToDoRequest extends FormRequest
{
    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return [
            'name' => 'required',
            'title' => 'required',
            'start' => 'required',
            'end' => 'required',
        ];
    }
}
