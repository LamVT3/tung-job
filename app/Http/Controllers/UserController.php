<?php

namespace App\Http\Controllers;

use App\Job;
use App\User;
use Illuminate\Http\Request;
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
		$jobs = Job::paginate(1);
		return view('pages.profile.applications', compact('jobs'));
	}

	public function apply(){
		$data = ['foo' => 'baz'];

		Mail::send('emails.apply', $data, function($message)
		{
			$message->to('mail@domain.net');
			$message->subject('Welcome to Laravel');
			$message->from('sender@domain.net');
			$message->attach('/public/upload/pdf-test.pdf');
		});
	}
}
