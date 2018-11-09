<?php

namespace App\Http\Controllers;

use App\Job;
use App\User;
use Illuminate\Http\Request;

class JobController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $data = Job::all();


        return view('pages.job.index', compact(
            'data'
        ));

        return view('pages.job.index');
    }

    /**
     * Show form create a job.
     *
     * @return \Illuminate\Http\Response
     */
    public function showFormCreate()
    {

        return view('pages.job.create');
    }

    /**
     * Create a job.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        if(auth()->user()->role !== "ADMIN") return view('errors.403');
        $request = request();

        $job = new Job();

        $job->job_title     = $request->job_title;
        $job->location      = $request->location;
        $job->job_type      = $request->job_type;
        $job->exprience     = $request->exprience;
        $job->amount        = $request->amount;
        $job->salary        = $request->salary;
        $job->job_tag       = $request->job_tag;
        $job->description   = $request->description;
        $job->email         = $request->email;
        $job->expire_date   = $request->expire_date;
        $job->company_logo  = $request->company_logo;
        $job->company_name  = $request->company_name;
        $job->company_url   = $request->company_url;
        $job->created_by    = auth()->user()->name;
        $job->created_date  = date('Y-m-d h:i:s');


        $job->save();

        return response()->json(['type' => 'success', 'url' => route('home'), 'message' => 'Job has been created!']);
    }

}
