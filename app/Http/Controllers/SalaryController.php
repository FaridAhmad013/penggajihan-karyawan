<?php

namespace App\Http\Controllers;

use App\Models\Salary;
use Illuminate\Http\Request;

class SalaryController extends Controller
{

    public function index()
    {
        $salaries = Salary::get();
        return view('gaji.index', compact('salaries'));
    }

    public function edit(Salary $salary)
    {
        return view('gaji.edit', compact('salary'));
    }

    public function salaryActive()
    {
        $salaries = Salary::where('status', 1)->get();
        return view('gaji.show', compact('salaries'));
    }


    public function update(Request $request, Salary $salary)
    {
        $salary->update([
            'status' => $request->status
        ]);

        return redirect(route('salary.index'))->with('success', 'Status Berhasil Diubah');
    }




    public function laporan(Request $request)
    {

         $salaries = Salary::where('created_at', 'LIKE', '%'.$request->month.'%' )->where('status', 1)->get();

         return view('laporan.index', compact('salaries'));

    }
}
