<?php
/**
 * Created by PhpStorm.
 * User: Duy Quang
 * Date: 11/13/2018
 * Time: 11:22 PM
 */

namespace App\Http\Controllers;


class ReviewCompanyController
{
    public function reviewCompany(){

        return view('pages.company.review-company');
    }

    public function overviewCompany(){

        return view('pages.company.overview-company');
    }
}