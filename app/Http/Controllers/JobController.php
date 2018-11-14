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
        $this->middleware('auth', ['except' => [
	        'index', 'detail'
        ]]);
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = $this->get_list_job();

        return view('pages.job.index', compact(
            'data'
        ));
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
        if(auth()->user()->role !== "ADMIN") return redirect()->route('home');
        $request = request();

        $job = new Job();

        $job->job_title     = $request->job_title;
        $job->slug          = str_slug($request->job_title);
        $job->location      = $request->location;
        $job->job_type      = $request->job_type;
        $job->exprience     = $request->exprience;
        $job->amount        = $request->amount;
        $job->salary_from   = $request->salary_from;
        $job->salary_to     = $request->salary_to;
        $job->job_tag       = $request->job_tag;
        $job->description   = $request->description;
        $job->email         = $request->email;
        $job->expire_date   = $request->expire_date;
        $job->company_logo  = $request->company_logo;
        $job->company_name  = $request->company_name;
        $job->company_location  = $request->company_location;
        $job->company_country   = $request->company_country;
        $job->company_size_from = $request->company_size_from;
        $job->company_size_to   = $request->company_size_to;
        $job->company_url   = $request->company_url;
        $job->created_by    = auth()->user()->name;
        $job->created_date  = date('Y-m-d H:i:s');

        $job->slug_title        = str_slug($request->job_title);
        $job->slug_company_name = str_slug($request->company_name);

        $job->save();

        return response()->json(['type' => 'success', 'url' => route('home'), 'message' => 'Job has been created!']);
    }

    /**
     * Manage job.
     *
     * @return \Illuminate\Http\Response
     */
    public function manage()
    {
        $data = $data = $this->get_list_job();

        return view('pages.job.manage', compact(
            'data'
        ));
    }

    /**
     * Set feature for job.
     *
     * @return \Illuminate\Http\Response
     */
    public function set_featured()
    {
        $request     = request();
        $id          = $request->id;

        $job = Job::find($id);
        if($job->is_featured && $job->is_featured == '1'){
            $job->is_featured = 0;
        }else{
            $job->is_featured = 1;
        }

        $job->save();

        return response()->json(['type' => 'success', 'is_featured' => $job->is_featured, 'message' => 'Job has been update featured!']);
    }

    /**
     * Manage job.
     *
     * @return \Illuminate\Http\Response
     */
    public function detail($slug)
    {
        $data = Job::where('slug_title', $slug)->first();

        return view('pages.job.detail', compact(
            'data'
        ));
    }

    /**
     * get list job desc.
     *
     * @return \Illuminate\Http\Response
     */
    private function get_list_job()
    {
        $data = Job::orderBy('created_at', 'desc')->paginate((int)env('APP_PAGINATE',10));

        return $data;
    }

    /**
     * Show form edit a job.
     *
     * @return \Illuminate\Http\Response
     */
    public function showFormEdit($id)
    {
        $data = Job::find($id);

        return view('pages.job.edit', compact(
            'data'
        ));
    }

    /**
     * Edit a job.
     *
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $job = Job::find($id);
        $request = request();

        $job->job_title     = $request->job_title;
        $job->location      = $request->location;
        $job->job_type      = $request->job_type;
        $job->exprience     = $request->exprience;
        $job->amount        = $request->amount;
        $job->salary_from   = $request->salary_from;
        $job->salary_to     = $request->salary_to;
        $job->job_tag       = $request->job_tag;
        $job->description   = $request->description;
        $job->email         = $request->email;
        $job->expire_date   = $request->expire_date;
        $job->company_logo  = $request->company_logo;
        $job->company_name  = $request->company_name;
        $job->company_location  = $request->company_location;
        $job->company_country   = $request->company_country;
        $job->company_size_from = $request->company_size_from;
        $job->company_size_to   = $request->company_size_to;
        $job->company_url   = $request->company_url;
        $job->created_by    = auth()->user()->name;
        $job->created_date  = date('Y-m-d H:i:s');

        $job->slug_title        = str_slug($request->job_title);
        $job->slug_company_name = str_slug($request->company_name);

        $job->is_deleted    = $request->is_deleted;

        $job->save();

        return response()->json(['type' => 'success', 'url' => route('manage-job'), 'message' => 'Job has been saved!']);

    }

    /**
     * Delete a job.
     *
     * @return \Illuminate\Http\Response
     */
    public function delete()
    {

        $request = request();
        $job                = Job::find($request->id);
        $job->is_deleted    = 1;

        $job->save();

        return response()->json(['type' => 'success', 'message' => 'Job has been deleted!']);

    }




}
