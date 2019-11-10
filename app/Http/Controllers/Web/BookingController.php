<?php

namespace App\Http\Controllers\Web;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\BookingRequest;
use App\Customer;

class BookingController extends Controller
{
    public function index() 
    {
        
        return view(WEB . '/booking/index');
    }
    public function store(BookingRequest $request)
    {
        $branches = branch();
        $timeFrame = timeFrame();

    	$booking = new Customer();
		$booking->child_name 		= $request->child_name;
        $booking->child_birthday 	= $request->child_birthday;
        $booking->child_month 		= $request->child_month;
        $booking->child_weight 		= $request->child_weight;

        $booking->father_name 	= $request->father_name;
        $booking->father_tel 	= $request->father_tel;
        $booking->mother_name 	= $request->mother_name;
        $booking->mother_tel 	= $request->mother_tel;
        $booking->address 		= $request->address;

        $booking->branch        = $branches[$request->branch]['full'];
        $booking->branch_id     = $request->branch;
        $booking->time_frame    = $timeFrame[$request->time_frame]['full'];
        $booking->time_frame_id = $request->time_frame;
        $booking->guardian_name = $request->guardian_name;
        $booking->pathological 	= $request->pathological;
        $booking->feeling_experience = $request->feeling_experience;
        $booking->desire 		= $request->desire;
        $booking->know_from 	= $request->know_from;
        $saved = $booking->save();
        if (!$saved) {
            $request->session()->flash('danger', 'Rất tiếc hệ thống tạm ngưng không phục vụ. Vui lòng liên hệ trực tiếp qua số điện thoại để được phục vụ. Xin cảm ơn!');
            return back();
        }
        else {
            $request->session()->flash('success', '');
            $fullname = $request->child_name != "" ? $request->father_name : $request->mother_name;
            $phone = $request->father_tel != "" ? $request->father_tel : $request->mother_tel;
            send_email('emails.register', ['childName' => $request->child_name, 'fullname' => $fullname, 'phone' => $phone], 'New User', PAGE_NAME, $_ENV['MAIL_USERNAME']);
            return redirect(url('dat-hen-thanh-cong'));
        }
    }
    public function bookingSuccess()
    {
    	return view(WEB . '/booking/booking_success');
    }
}
