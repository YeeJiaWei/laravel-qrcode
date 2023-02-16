<?php

namespace Yeejiawei\LaravelQrcode;

use Illuminate\Support\ServiceProvider;

class LaravelQrcodeServiceProvider extends ServiceProvider
{
	public function register()
	{
		$this->app->bind('LaravelQrcode', function ($app) {
			return new LaravelQrcode();
		});
	}

	public function boot()
	{
		//
	}
}
