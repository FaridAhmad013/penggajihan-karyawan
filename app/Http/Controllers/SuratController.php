<?php

namespace App\Http\Controllers;

use App\Models\Employee;
use App\Models\Surat;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class SuratController extends Controller
{
    public function create(Employee $employee)
    {
        return view('karyawan.surat.create', compact('employee'));
    }

    public function store(Request $request, Employee $employee)
    {

        Surat::create([
            'user_id' => Auth::user()->id,
            'alasan' => $request->alasan,
            'deskripsi' => "<p>{$request->deskripsi}</p>",
            'employee_id' => $employee->id
        ]);

        $employee->update([
            'active' => false
        ]);

        return redirect(route('employee.index'))->with('success', 'Karyawan Berhasil Dikeluarkan');
    }


}
