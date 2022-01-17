<?php

namespace App\Http\Controllers;

use App\Http\Requests\Job\JobStoreRequest;
use App\Http\Requests\Job\JobUpdateRequest;
use App\Models\Job;
use Illuminate\Http\Request;

class JobController extends Controller
{
    public function index()
    {
        $jobs = Job::get();
        return view('jabatan.index', compact('jobs'));
    }

    public function create()
    {
        return view('jabatan.create');
    }

    public function store(JobStoreRequest $request)
    {
        Job::create([
            'title' => $request->title,
            'subsidy' => $request->subsidy
        ]);

        return redirect()->route('job.index')->with('success', 'Jabatan Berhasil Ditambahkan');
    }

    public function edit(Job $job)
    {
        return view('jabatan.edit', compact('job'));
    }

    public function update(JobUpdateRequest $request, Job $job)
    {
        $job->update([
            'title' => $request->title,
            'subsidy' => $request->subsidy
        ]);

        return redirect()->route('job.index')->with('success', 'Jabatan Berhasil Diedit');
    }

    public function destroy(Job $job)
    {
        $job->delete();

        return redirect()->route('job.index')->with('success', 'Jabatan Berhasil Dihapus');
    }

}
