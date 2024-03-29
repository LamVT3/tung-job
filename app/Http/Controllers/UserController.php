<?php

namespace App\Http\Controllers;

use App\Job;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;

class UserController extends Controller
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

	public function applications()
	{
		return $this->showFormResetPassword();
//		$jobs = Job::paginate(1);
//		return view('pages.profile.applications', compact('jobs'));
	}

	public function showFormResetPassword(){
		return view('pages.profile.reset_pwd');
	}

	public function resetPassword(){
		$pwd = \request('password');
		$pwd_cfm = \request('password_confirm');

		if ($pwd != $pwd_cfm)
			return redirect()->back()->with('msg','Password confirm not matching!');

		$user = User::find(auth()->user()->_id);
		$user->password = Hash::make($pwd);
		$user->save();

		return redirect()->back()->with('msg','Successfully!');
	}
}
