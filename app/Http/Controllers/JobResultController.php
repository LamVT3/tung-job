<?php
/**
 * Created by PhpStorm.
 * User: Duy Quang
 * Date: 11/11/2018
 * Time: 2:17 PM
 */

namespace App\Http\Controllers;


use App\Job;
use Illuminate\Http\Request;

class JobResultController
{
    public function showResultJob()
    {
        $data = Job::all();


        return view('pages.job.jobresults', compact('data'));
    }

    public function searchJob(Request $request)
    {
        $query = $request->get('query','');
        $result = Job::where('job_title','LIKE','%'.$query.'%')->get();
        $keyword = array();
        foreach ($result as $value){
            $keyword[] = $value->job_title;
        }
        return response() ->json($keyword);
    }


}