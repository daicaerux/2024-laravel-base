<?php

namespace Cms\Modules\Product\Services;

use Cms\Modules\Product\Services\Contracts\ProductUserServiceContract;
use Cms\Modules\Core\Services\CoreUserService;
use Cms\Modules\Product\Repositories\Contracts\ProductUserRepositoryContract;

class ProductUserService extends CoreUserService implements ProductUserServiceContract
{
	protected $repository;

	function __construct(ProductUserRepositoryContract $repository)
	{
	    parent::__construct($repository);

	    $this->repository = $repository;
	}
}

