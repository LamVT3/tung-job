<?php

namespace App\Http\Controllers;

use App\Company;
use App\Job;
use App\User;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
//        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $featured_jobs = Job::where('is_featured', '1')
            ->where('is_deleted', '<>', '1')
            ->orderBy('created_at', 'desc')
            ->take(10)
            ->get();

        $hot_jobs = Job::where('is_deleted', '<>', '1')
            ->orderBy('view', 'desc')
            ->orderBy('created_at', 'desc')
            ->take(5)
            ->get();

        return view('home', compact(
            'featured_jobs',
            'hot_jobs'
        ));
    }

	public function about()
	{
		return view('pages.about');
	}

	public function ourCustomers()
	{
		$data = Company::orderBy('created_at', 'desc')->where('is_deleted','<>','1')->get();

		return view('pages.our-customers', compact('data'));
	}
}
