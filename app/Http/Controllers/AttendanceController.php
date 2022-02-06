<?php

namespace App\Http\Controllers;

use App\Models\Attendance;
use App\Models\Employee;
use Illuminate\Http\Request;
use Illuminate\Validation\ValidationException;


class AttendanceController extends Controller
{
    public function login(Request $request)
    {

        if(!Employee::where('username', $request->username)->where('password',$request->password)->first()){
           throw ValidationException::withMessages([
               'username' => 'Username Salah',
               'password' => 'Password Salah '
           ]);
        }

        $employee =  Employee::where('username', $request->username)->where('password', $request->password)->first();

        Attendance::create([
            'employee_id' => $employee->id,
            'time_in' => now(),
            'time_out' => null
        ]);



    }

}
