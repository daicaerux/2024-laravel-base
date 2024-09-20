<?php

namespace Cms\Modules\Product\Services;

use Cms\Modules\Product\Services\Contracts\ProductProductServiceContract;
use Cms\Modules\Core\Services\CoreProductService;
use Cms\Modules\Product\Repositories\Contracts\ProductProductRepositoryContract;

class ProductProductService extends CoreProductService implements ProductProductServiceContract
{
	protected $repository;

	function __construct(ProductProductRepositoryContract $repository)
	{
	    parent::__construct($repository);

	    $this->repository = $repository;
	}
}

