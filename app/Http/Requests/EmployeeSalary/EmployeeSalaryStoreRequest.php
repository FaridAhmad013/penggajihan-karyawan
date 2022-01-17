<?php

namespace App\Http\Requests\EmployeeSalary;

use Illuminate\Foundation\Http\FormRequest;

class EmployeeSalaryStoreRequest extends FormRequest
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
            'transportation_allowance' => ['min:0'],
            'achievement_allowance' => ['min:0'],
            'education_allowance' => ['min:0'],
            'bonus' => ['min:0'],
            'overtime' => ['min:0'],
            'pension' => ['min:0'],
            'insurance_deduction' => ['min:0'],
            'college_deduction' => ['min:0']
        ];
    }
}
