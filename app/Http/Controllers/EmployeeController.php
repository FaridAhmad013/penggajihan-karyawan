<?php

namespace App\Http\Controllers;

use App\Models\Employee;
use App\Models\Job;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use App\Http\Requests\Employee\EmployeeStoreRequest;
use App\Http\Requests\Employee\EmployeeUpdateRequest;

class EmployeeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $employees = Employee::orderBy("created_at", "DESC")->get();
        return view('karyawan.index', compact('employees'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $jobs = Job::get();
        return view('karyawan.create', compact('jobs'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(EmployeeStoreRequest $request)
    {
        if($request->file('photo')){
            $fileName = Str::slug(now(). '').'photoEmployee.'.$request->file('photo')->getClientOriginalExtension();
            $image = $request->file('photo')->storeAs('photo/employee', $fileName, ['disk' => 'local']);
        }else{
            $image = null;
        }

        Employee::create([
            'name' => $request->name,
            'username' => $request->username,
            'photo' => $image,
            'education' => $request->education,
            'phone_number' => $request->phone_number,
            'address' => $request->address,
            'gender' => $request->gender,
            'entry_date' => $request->entry_date,
            'job_id' => $request->job_id,
            'basic_salary' => $request->basic_salary,
            'status' => $request->status
        ]);


        return redirect()->route('employee.index')->with('success', 'Karyawan Berhasil Ditambahkan');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Employee  $employee
     * @return \Illuminate\Http\Response
     */
    public function show(Employee $employee)
    {
        return view('karyawan.show', compact('employee'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Employee  $employee
     * @return \Illuminate\Http\Response
     */
    public function edit(Employee $employee)
    {
        $jobs = Job::get();
        return view('karyawan.edit', compact('employee', 'jobs'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Employee  $employee
     * @return \Illuminate\Http\Response
     */
    public function update(EmployeeUpdateRequest $request, Employee $employee)
    {

        if($request->file('photo')){
            $fileName = Str::slug(now(). '').'photoEmployee.'.$request->file('photo')->getClientOriginalExtension();
            $image = $request->file('photo')->storeAs('photo/employee', $fileName, ['disk' => 'local']);
        }else{
            $image = $request->image_old;
        }

        $employee->update([
            'name' => $request->name,
            // 'password' => $request->password,
            'photo' => $image,
            'education' => $request->education,
            'phone_number' => $request->phone_number,
            'address' => $request->address,
            'gender' => $request->gender,
            'entry_date' => $request->entry_date,
            'job_id' => $request->job_id,
            'basic_salary' => $request->basic_salary,
            'status' => $request->status
        ]);

        return redirect()->route('employee.index')->with('success', 'Data Karyawan Berhasil Diedit');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Employee  $employee
     * @return \Illuminate\Http\Response
     */
    public function destroy(Employee $employee)
    {
        $employee->delete();

        return redirect()->route('employee.index')->with('Pegawai berhasil dihapus');
    }
}
