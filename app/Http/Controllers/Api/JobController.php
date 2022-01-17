<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests\Job\JobStoreRequest;
use App\Http\Requests\Job\JobUpdateRequest;
use App\Models\Job;
use Illuminate\Database\QueryException;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class JobController extends Controller
{
    public function index()
    {
        $jobs = Job::get();
        return response()->json([
            'message' => 'List Jabatan Karyawan',
            'data' => $jobs
        ], Response::HTTP_OK);
    }



    public function store(JobStoreRequest $request)
    {
        try {
            Job::create([
                'title' => $request->title,
                'subsidy' => $request->subsidy
            ]);

            return response()->json(['message' => 'Jabatan Berhasil ditambahkan'], Response::HTTP_CREATED);

        } catch (QueryException $e) {
            return response()->json(['message' => 'Gagal '.$e->errorInfo]);
        }


    }




    public function update(JobUpdateRequest $request, Job $job)
    {
        try {
        $job->update([
            'title' => $request->title,
            'subsidy' => $request->subsidy
        ]);

        return response()->json([
            'message' => 'Jabatan Berhasil Diedit',
            'data' => $job
        ], Response::HTTP_OK);
        } catch (QueryException $e) {
        return response()->json(['message' => 'Gagal '.$e->errorInfo]);
        }
    }

    public function show(Job $job)
    {
        return response()->json([
            'message' => 'Detail Jabatan '.$job->title,
            'data' => $job
        ]);
    }


    public function destroy(Job $job)
    {
        // try {
        //     $job->delete();
        // } catch () {
        //     //throw $th;
        // }
        return redirect()->route('job.index')->with('success', 'Jabatan Berhasil Dihapus');
    }
}
