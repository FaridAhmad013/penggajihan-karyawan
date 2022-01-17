<?php

namespace App\Http\Controllers;

use App\Models\Salary;
use Illuminate\Http\Request;

class SalaryController extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function __invoke(Request $request)
    {
        // $request->validate([
        //     'month' => 'required'
        // ]);

         $salaries = Salary::where('created_at', 'LIKE', '%'.$request->month.'%' )->get();

         return view('laporan.index', compact('salaries'));
    }
}
