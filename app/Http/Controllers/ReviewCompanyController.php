<?php
/**
 * Created by PhpStorm.
 * User: Duy Quang
 * Date: 11/13/2018
 * Time: 11:22 PM
 */

namespace App\Http\Controllers;


use App\Company;

class ReviewCompanyController
{
    public function reviewCompany(){

	    $data = Company::orderBy('created_at', 'desc')->paginate((int)env('APP_PAGINATE',10));
        return view('pages.company.review-company', compact('data'));
    }

    public function overviewCompany(){

        return view('pages.company.overview-company');
    }
}