<?php

namespace App\Http\Requests\Employee;

use Illuminate\Foundation\Http\FormRequest;

class EmployeeStoreRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'name' => ['required', 'string', 'max:255'],
            'username' => ['required', 'string', 'alpha_num', 'min:8', 'max:30'],
            'photo' => ['image'],
            'phone_number' => ['required'],
            'education' => ['required', 'string'],
            'address' => ['required', 'string'],
            'gender' => ['required', 'string'],
            'entry_date' => ['required',  'date'],
            'job_id' => ['required'],
            'basic_salary' => ['required', 'numeric'],
            'status' => ['required', 'string']
        ];
    }
}
