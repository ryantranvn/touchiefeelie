<?php

namespace App\Http\Controllers\Api;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use DB;
use Auth;
use Validator;
use App\Customer;
use App\Subscribe;

class AjaxController extends Controller
{
    function ajaxBooking(Request $request) {
    	/*
    	$messages = array(
		    'phone.max:10' => 'Số điện thoại tối đa 10 số.'
		);
		*/
    	$validator = Validator::make($request->all(), [
	        'fullname' => 'required|max:255',
	        'phone' => 'required|max:10'
	    ]);
	    if ($validator->fails()) {
            $response = array('status' => 'error', 'msg' => $validator->errors());
        }
        DB::beginTransaction();
        try {
            $customer = new Customer();
            if ($request->gender == 0) {
            	$customer->mother_name = $request->fullname;
            	$customer->mother_tel = $request->phone;
            }
            else {
            	$customer->father_name = $request->fullname;
            	$customer->father_tel = $request->phone;
            }
            $customerSaved = $customer->save();
            if (!$customerSaved) {
                DB::rollback();
                $response = array('status' => 'error', 'msg' => 'Rất tiếc không thể kết nối cơ sở dữ liệu');
            }
            else {
				DB::commit();
				send_email('emails.register', ['fullname' => $request->fullname, 'phone' => $request->phone], 'New User', PAGE_NAME, $_ENV['MAIL_USERNAME']);

            	$response = array('status' => 'success', 'msg' => 'Cám ơn bạn đã đăng ký.');
            }
        }
        catch (Exception $e) {
            DB::rollback();
            $response = array('status' => 'error', 'msg' => 'Rất tiếc không thể kết nối cơ sở dữ liệu');
        }
	    
	    return \Response::json($response);
    }

    function ajaxSubscribe(Request $request) {
    	$validator = Validator::make($request->all(), [
	        'email' => 'email',
            'phone' => 'max:10'
	    ]);
	    if ($validator->fails()) {
            $response = array('status' => 'error', 'msg' => $validator->errors());
        }
        DB::beginTransaction();
        try {
            $email = strtolower($request->email);
			$phone = strtolower($request->phone);
            $type = NULL;
            if (isset($request->type)) {
                $type = $request->type;
                if ($email != '') {
                    $subscribeEmail = Subscribe::select('email')->where('type', '=', $type)->where('email', '=', $email)->first();    
                } else {
                    $subscribeEmail = Subscribe::select('phone')->where('type', '=', $type)->where('phone', '=', $phone)->first();
                }
                $emailContent = "This is email have recent applied on website to receive book : ".$email."-".$phone;
            } 
            else {
                $subscribeEmail = Subscribe::select('email')->where('email', '=', $email)->first();
                $emailContent = "This is email have recent subscribed on website : ".$email;
            }
        	if ($subscribeEmail) {
				// $response = array('status' => 'error', 'msg' => 'Email này đã tồn tại trong hệ thống');
				$response = array('status' => 'success', 'msg' => 'Cám ơn bạn đã đăng ký.');
        	}
        	else {
        		$subscribe = new Subscribe();
                $subscribe->email = $email;
                $subscribe->phone = $phone;
	            $subscribe->type = $type;
	            $subscribeSaved = $subscribe->save();
                
	            if (!$subscribeSaved) {
	                DB::rollback();
					$response = array('status' => 'error', 'msg' => 'Rất tiếc không thể kết nối cơ sở dữ liệu');
	            }
	            else {
					DB::commit();
					// send email
					send_email('emails.subscribe', ['emailContent' => $emailContent], 'Email subscribed', PAGE_NAME, $_ENV['MAIL_USERNAME']);

	            	$response = array('status' => 'success', 'msg' => 'Cám ơn bạn đã đăng ký.');
	            }
        	}
        }
        catch (Exception $e) {
            DB::rollback();
            $response = array('status' => 'error', 'msg' => 'Rất tiếc không thể kết nối cơ sở dữ liệu');
        }
	    
	    return \Response::json($response);
    }
}
