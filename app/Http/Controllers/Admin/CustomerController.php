<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Auth;
use DB;
use App\Customer;
use App\Http\Requests\CustomerRequest;
use App\Exports\CustomerExport;
use Excel;

class CustomerController extends Controller
{
    public function __construct()
    {
    }
// index
    public function index(Request $request)
    {
    	$query = Customer::select('*')->orderBy('customer_id', 'desc');

        // search
        /*
        $searchValues = ['name' => '', 'email' => '', 'status' => ''];
        if ($request->has('name')) {
            $searchValues['name'] = $request->name;
            $query->where('users.name', 'like', '%'.$request->name.'%');
        }
        if ($request->has('email')) {
            $searchValues['email'] = $request->email;
            $query->where('users.email', 'like', '%'.$request->email.'%');
        }
        if ($request->has('status')) {
            $searchValues['status'] = $request->status != 1 ? 0 : 1;
            $query->where('users.status', $searchValues['status']);
        }
		*/
        // sorting
        if ($request->has('sorting')) {
            $query->withSort($request->sorting, $request->by);
        }

        $customers = $query->paginate(15);

        return view(ADMIN.'.customer.index',
            compact('customers'));
    }
// show
    public function show(Request $request, $customerId)
    {
        $customer = Customer::find($customerId);
        if (!$customer) {
            $request->session()->flash('danger', trans('lang.not_found_data'));
            return back();
        }
        return view(ADMIN.'.customer.show',
            compact('customer'));
    }
// edit
    public function edit($customerId, Request $request)
    {
        $customer = Customer::find($customerId);
        if (!$customer) {
            $request->session()->flash('danger', trans('lang.not_found_data'));
            return redirect(url(ADMIN.'/customer'));
        }

        return view(ADMIN.'.customer.edit',
            compact('customer'));
    }
// update
    public function update($customerId, Request $request)
    {
        $customer = Customer::find($customerId);
        if (!$customer) {
            $request->session()->flash('danger', trans('lang.not_found_data'));
            return back();
        }
        $branches = branch();
        $timeFrame = timeFrame();
        DB::beginTransaction();
        try {
            $customer->child_name        = $request->child_name;
            $customer->child_birthday    = $request->child_birthday;
            $customer->child_month       = $request->child_month;
            $customer->child_weight      = $request->child_weight;

            $customer->father_name   = $request->father_name;
            $customer->father_tel    = $request->father_tel;
            $customer->mother_name   = $request->mother_name;
            $customer->mother_tel    = $request->mother_tel;
            $customer->address       = $request->address;

            $customer->branch        = $branches[$request->branch]['full'];
            $customer->branch_id     = $request->branch;
            $customer->time_frame    = $timeFrame[$request->time_frame]['full'];
            $customer->time_frame_id = $request->time_frame;
            $customer->guardian_name = $request->guardian_name;
            $customer->pathological  = $request->pathological;
            $customer->feeling_experience = $request->feeling_experience;
            $customer->desire        = $request->desire;
            $customer->know_from     = $request->know_from;
            $saved = $customer->save();
            if (!$saved) {
                DB::rollback();
                $request->session()->flash('danger', trans('lang.edit_fail'));
                return back();
            }
            DB::commit();
            $request->session()->flash('success', trans('lang.edit_success'));
        }
        catch (Exception $e) {
            DB::rollback();
            $request->session()->flash('danger', trans('lang.edit_fail'));

            return back();
        }
        return redirect(url(ADMIN.'/customer'));
    }    
// destroy
    public function destroy(Request $request, $customerId)
    {
        $customer = Customer::find($customerId);
        if (!$customer) {
            $request->session()->flash('danger', trans('lang.not_found_data'));
            return redirect(url(ADMIN.'/customer'));
        }
        DB::beginTransaction();
        try {
            $deleted = $customer->delete();
            if ($deleted == false) {
                DB::rollback();
                $request->session()->flash('danger', trans('lang.delete_fail'));
            }
            else {
                DB::commit();
                $request->session()->flash('success', trans('lang.edit_success'));
            }
        }
        catch (Exception $e) {
            DB::rollback();
            $request->session()->flash('danger', trans('lang.delete_fail'));
        }
        return redirect(url(ADMIN.'/customer'));
    }
// export
    public function export() 
    {
        return Excel::download(new CustomerExport, 'customer.xlsx');
    }


}
