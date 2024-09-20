<?php

namespace Cms\Modules\Product;

use Cms\CmsServiceProvider;
use Illuminate\Routing\Router;

class ProductServiceProvider extends CmsServiceProvider
{
    public function boot(Router $router)
    {
        parent::boot($router);
    }

	public function register()
	{
	    // Register services and repositories here...
	}
}

