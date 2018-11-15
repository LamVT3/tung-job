<?php

namespace App;

use Jenssegers\Mongodb\Eloquent\Model as Eloquent;
use Illuminate\Auth\Authenticatable;
use Illuminate\Contracts\Auth\Authenticatable as AuthenticatableContract;

class Job extends Eloquent implements AuthenticatableContract
{
    use Authenticatable;

    public static function getResultSearch($key, $location){

        $result = Job::where('job_title','like', '%'.$key.'%')
            ->orWhere('company_name','like', '%'.$key.'%')->where('location','like', '%'.$location.'%')->paginate((int)env('APP_PAGINATE',10));


        return $result;
    }

	public function company()
	{
		return $this->belongsTo(Company::class);
	}
}