<?php

namespace App\Http\Controllers;

use App\Models\Schedule;
use Illuminate\Http\Request;

class ScheduleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $schedules = Schedule::get();

        return view('schedule.index', compact('schedules'));
    }

    public function edit(Schedule $schedule)
    {
        return view('schedule.edit', compact('schedule'));
    }

    public function update(Request $request, Schedule $schedule)
    {
        $schedule->update([
            's_in' => $request->s_in,
            's_out' =>$request->s_out
        ]);

        return redirect()->route('schedule.index')->with('success', 'Jam Kerja Karyawan Berhasil Dirubah');
    }


}
