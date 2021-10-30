<?php

namespace App\Providers;

use Illuminate\Cache\RateLimiting\Limit;
use Illuminate\Foundation\Support\Providers\RouteServiceProvider as ServiceProvider;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\RateLimiter;
use Illuminate\Support\Facades\Route;

class RouteServiceProvider extends ServiceProvider
{
	public const HOME = '';

	public function boot()
	{
		$this->configureRateLimiting();

		$this->routes(function () {
			Route::middleware('web')
				->namespace($this->namespace)
				->group(base_path('routes/web.php'));

			Route::middleware(['web', 'auth'])
				->prefix('admin')
				->namespace($this->namespace)
				->group(base_path('routes/admin.php'));
		});
	}

	protected function configureRateLimiting()
	{
		// ...
	}
}
