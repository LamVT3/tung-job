<?php

namespace App;

use Jenssegers\Mongodb\Eloquent\Model as Eloquent;

class ApplyJob extends Eloquent
{

	public function job()
	{
		return $this->belongsTo(Job::class);
	}
}