<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use AppHelper;

class ErrorController extends Controller
{
    public static function index() // view 404 on web
    {
        return view(WEB . '/404');
    }
}
