<?php

namespace App\Http\Controllers;

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


        return view('pages.job.create');
    }

    /**
     * Create a job.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {


        return view('pages.job.create');
    }

}
