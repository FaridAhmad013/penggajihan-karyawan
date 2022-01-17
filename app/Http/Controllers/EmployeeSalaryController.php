<?php

namespace App\Http\Controllers;

use App\Http\Requests\EmployeeSalary\EmployeeSalaryStoreRequest;
use App\Models\Employee;
use App\Models\Salary;

class EmployeeSalaryController extends Controller
{
    public function index(Employee $employee)
    {
        $salaries = Salary::where('employee_id', $employee->id)->orderBy('created_at', 'DESC')->get();
        return view('karyawan.salary.index', compact('employee', 'salaries'));
    }

    public function create(Employee $employee)
    {
        return view('karyawan.salary.create', compact('employee'));
    }

    public function store(EmployeeSalaryStoreRequest $request, Employee $employee)
    {
        if ($employee->education == 's1') {
            $education = 300000;
        } else if ($employee->education == 's2') {
            $education = 350000;
        } else if ($employee->education == 's3') {
            $education = 360000;
        } else {
            $education = 0;
        }

        if ($employee->status == 'tetap') {
            $status = $employee->basic_salary * 0.02;
        } else {
            $status = 0;
        }

        Salary::create(
            [
                'employee_id' => $employee->id,
                'transportation_allowance' => $request->transportation_allowance,
                'achievement_allowance' => $request->achievement_allowance,
                'education_allowance' => $education,
                'bonus' => $request->bonus,
                'overtime' => 0,
                'pension' => $status,
                'insurance_deduction' => $request->insurance_deduction,
                'college_deduction' => $request->deduction ?? 0
            ]
        );

        return redirect()->route('employee-salary.index', $employee->username)->with('success', 'Gaji Telah berhasil ditambahkan');
    }

    public function show(Employee $employee, Salary $salary)
    {
        return view('karyawan.salary.show', compact('employee', 'salary'));
    }
}
