<?php

namespace App\Http\Controllers\Web;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Calendar;
use App\Post;


class TouchieFeelieClassController extends Controller
{
	public function __construct()
    {
    }
    public function index() {
        $calendar = [];
        $arrDateTime = [];
        $estimateDateTime = '';

        $calendar = Calendar::select('*')
                    ->where('estimate_date', '>=', date("Y-m-d"))
                    ->orderBy('calendar_id', 'desc')
                    ->first();
        if (!empty($calendar)) {
            $arrDateTime = arrDateTime($calendar->estimate_date);
            $estimateDateTime = $arrDateTime['day'].' , ngày '.$arrDateTime['date'].'/'.$arrDateTime['month'].'/'.$arrDateTime['year'];
            $estimateDateTime .= ' ('.substr($calendar->start_time, 0, 5).'-'.substr($calendar->end_time, 0, 5).')';
            // $exp = explode(',', $calendar->day);
        //     if (count($exp)>0) {
        //         foreach ($exp as $day) {
        //             $estimateDateTime .= getDayOfWeek($day, true). ' - ';
        //         }
        //     }
            
        //     $estimateDateTime = rtrim($estimateDateTime, '- ');
        //     $estimateDateTime .= ' ('.substr($calendar->start_time, 0, 5).'-'.substr($calendar->end_time, 0, 5).')';
        }
        return view(WEB . '/touchie_feelie_class/touchie_feelie', compact('calendar', 'arrDateTime', 'estimateDateTime'));
    }
    
    public function utilityMassage() {

    	return view(WEB . '/touchie_feelie_class/utility_massage');
    }

    public function classInformation() {

    	return view(WEB . '/touchie_feelie_class/class_information');
    }

    public function product() {

    	return view(WEB . '/touchie_feelie_class/product');
    }
    
    public function library() {
        $query = Post::select('*')
                ->where('type', 'library');

        $query->withSort('created_at', 'desc');
        $posts = $query->get();

    	return view(WEB . '/touchie_feelie_class/library', compact('posts'));
    }
}
