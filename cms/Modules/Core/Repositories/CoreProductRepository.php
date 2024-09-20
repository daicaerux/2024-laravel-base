<?php

namespace Cms\Modules\Core\Repositories;

use Cms\Modules\Core\Repositories\Contracts\CoreProductRepositoryContract;
use Cms\Modules\Core\Models\Product;

class CoreProductRepository implements CoreProductRepositoryContract
{
    protected $model;

    public function __construct(Product $model) {
        $this->model = $model;
    }
}

