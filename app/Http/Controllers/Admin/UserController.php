<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Auth;
use DB;

class UserController extends Controller
{
    public function __construct()
    {
    }
// index
    public function index()
    {
        return view(ADMIN.'.user',
            compact(''));
    }
}
