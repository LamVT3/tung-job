<?php

namespace App;

use Jenssegers\Mongodb\Eloquent\Model as Eloquent;
use Illuminate\Auth\Authenticatable;
use Illuminate\Contracts\Auth\Authenticatable as AuthenticatableContract;

class Company extends Eloquent implements AuthenticatableContract
{
    use Authenticatable;

    public static function searchCompany($company_name){
        $result = Company::where('company_name','like', '%'.$company_name.'%')->where('is_deleted','<>',1)->paginate((int)env('APP_PAGINATE',10));

        return $result;
    }
}