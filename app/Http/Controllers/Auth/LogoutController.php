<?php

namespace App\Http\Controllers\Auth;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Auth;

class LogoutController extends Controller
{
    public function index(Request $request)
    {
    	$redirectUrl = '/login';
        // if (Auth::user()->type == 'admin') {
        //     $redirectUrl = '/login';
        // }
        // else {
        //     $redirectUrl = '/login';
        // }
        Auth::guard('web')->logout();
        session_start();
        unset($_SESSION['ckfinder_auth']);
        return redirect($redirectUrl);
    }
}
