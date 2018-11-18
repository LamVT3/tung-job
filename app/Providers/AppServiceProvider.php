<?php

namespace App\Providers;

use App\Job;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
	    view()->composer('layouts.footer', function ($view) {
		    $jobs = Job::orderBy('view', 'desc')->where('is_deleted','<>','1')->take(5)->get();

		    $view->with('trends', $jobs);
	    });
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
	    if(config('app.env') === 'production') {
		    \URL::forceScheme('https');
	    }
    }
}
