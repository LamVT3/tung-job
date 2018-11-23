<?php

namespace App;

use Jenssegers\Mongodb\Eloquent\Model as Eloquent;
use Illuminate\Auth\Authenticatable;
use Illuminate\Contracts\Auth\Authenticatable as AuthenticatableContract;
use PhpParser\Node\Expr\Array_;

class Company extends Eloquent implements AuthenticatableContract
{
    use Authenticatable;

    public static function searchCompany($company_name){
        $result = Company::where('company_name','like', '%'.$company_name.'%')->where('is_deleted','<>','1')->paginate((int)env('APP_PAGINATE',10));

        return $result;
    }

    public static function saveRating($company_id, $user_id, $total_rating, $sub_rating){
        $result = Company::where('_id',$company_id)->first();
        $user_rating = Array();
        array_push($user_rating, $user_id);

        $result->total_rating = $total_rating;
        $result->sub_rating = $sub_rating;

        $result->save();
        $result->push('user_rating',$user_rating);
    }
}