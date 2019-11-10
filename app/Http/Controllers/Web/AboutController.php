<?php

namespace App\Http\Controllers\Web;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class AboutController extends Controller
{
    public function index() {
    	
        return view(WEB . '/about/index');
    }
    public function iaim() {
    	
        return view(WEB . '/about/iaim');
    }
    public function cooperativeUnits() {
    	
        return view(WEB . '/about/cooperative_units');
    }
    public function supportUnits() {
    	
        return view(WEB . '/about/support_units');
    }
}
