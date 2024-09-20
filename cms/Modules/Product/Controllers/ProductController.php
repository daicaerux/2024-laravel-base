<?php

namespace Cms\Modules\Product\Controllers;

use App\Http\Controllers\Controller;
use Cms\Modules\Core\Models\User;
use DB;

class ProductController extends Controller
{
    protected $service;

    public function __construct()
    {
        // register services here...
    }

    public function index()
    {
        $users = DB::select("SELECT * FROM users");
        dd($users);
        return 'abasdasd';
    }
}

