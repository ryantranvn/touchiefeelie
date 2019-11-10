<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Auth;
use DB;

class DashboardController extends Controller
{
    public function __construct()
    {
    }
// index
    public function index()
    {
        return view(ADMIN.'.dashboard');
    }

// 404
    public function admin404()
    {
        return view(ADMIN.'.admin404',
            compact(''));
    }

}
