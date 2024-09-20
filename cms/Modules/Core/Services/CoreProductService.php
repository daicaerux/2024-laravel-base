<?php

namespace Cms\Modules\Core\Services;

use Cms\Modules\Core\Services\Contracts\CoreProductServiceContract;
use Cms\Modules\Core\Repositories\Contracts\CoreProductRepositoryContract;

class CoreProductService implements CoreProductServiceContract
{
	protected $repository;

	function __construct(CoreProductRepositoryContract $repository)
	{
	    $this->repository = $repository;
	}
}

