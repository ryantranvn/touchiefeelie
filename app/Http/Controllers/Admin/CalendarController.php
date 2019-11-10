<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\CalendarRequest;
use App\Calendar;
use DB;
use Auth;

class CalendarController extends Controller
{
    public function __construct()
    {
    }
// index
    public function index(Request $request)
    {
    	$query = Calendar::select('*');

    	$query->withSort('created_at', 'desc');
        $query->withSort('updated_at', 'desc');

        $calendars = $query->paginate(15);

    	return view(ADMIN.'.calendar.index',
            compact('calendars'));
    }
// create
    public function create(Request $request)
    {

    	return view(ADMIN.'.calendar.create',
            compact(''));
    }
// store
    public function store(CalendarRequest $request) 
    {
    	$branches = branch();
    	$timeFrame = timeFrame();
        $days = $request->days;
        $dayString = '';
        foreach ($days as $day) {
            if ($day !== null) {
                $dayString .= $day.',';
            }
        }
        $dayString = rtrim($dayString, ',');
    	DB::beginTransaction();
        try {
            $calendar = new Calendar();
            $calendar->branch_id = $request->branch;
            $calendar->branch = $branches[$request->branch]['full'];
            $calendar->estimate_date = $request->date;
            $calendar->days = $dayString;
            $calendar->number_days = $request->number_days;
            $calendar->time_frame_id = $request->time_frame;
            $calendar->time_frame = $timeFrame[$request->time_frame]['full'];
            $calendar->start_time = $timeFrame[$request->time_frame]['start'];
            $calendar->end_time = $timeFrame[$request->time_frame]['end'];
            $calendar->created_by = Auth::user()->user_id;
            $calendarSaved = $calendar->save();
            if (!$calendarSaved) {
                DB::rollback();
                $request->session()->flash('danger', trans('lang.create_fail'));
                return back();
            }
            DB::commit();
            $request->session()->flash('success', trans('lang.create_success'));
        }
        catch (Exception $e) {
            DB::rollback();
            $request->session()->flash('danger', trans('lang.create_fail'));

            return back();
        }
        return redirect(url(ADMIN.'/calendar'));
    }
// edit
    public function edit($calendarId, Request $request)
    {
    	$calendar = Calendar::find($calendarId);
        if (!$calendar) {
            $request->session()->flash('danger', trans('lang.not_found_data'));
            return redirect(url(ADMIN.'/'.getRoute('controller')));
        }

    	return view(ADMIN.'.calendar.edit',
            compact('calendar'));
    }
// update
	public function update($calendarId, CalendarRequest $request)
    {
    	$calendar = Calendar::find($calendarId);
        if (!$calendar) {
            $request->session()->flash('danger', trans('lang.not_found_data'));
            return back();
        }
        $branches = branch();
    	$timeFrame = timeFrame();
        $days = $request->days;
        $dayString = '';
        foreach ($days as $day) {
            if ($day !== null) {
                $dayString .= $day.',';
            }
        }
        $dayString = rtrim($dayString, ',');
    	DB::beginTransaction();
        try {
            $calendar->branch_id = $request->branch;
            $calendar->branch = $branches[$request->branch]['full'];
            $calendar->estimate_date = $request->date;
            $calendar->days = $dayString;
            $calendar->number_days = $request->number_days;
            $calendar->time_frame_id = $request->time_frame;
            $calendar->time_frame = $timeFrame[$request->time_frame]['full'];
            $calendar->start_time = $timeFrame[$request->time_frame]['start'];
            $calendar->end_time = $timeFrame[$request->time_frame]['end'];
            $calendar->updated_by = Auth::user()->user_id;
            $calendarSaved = $calendar->save();
            if (!$calendarSaved) {
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
        return redirect(url(ADMIN.'/calendar'));
    }    
// destroy
    public function destroy(Request $request, $calendarId)
    {
        $calendar = Calendar::find($calendarId);
        if (!$calendar) {
            $request->session()->flash('danger', trans('lang.not_found_data'));
            return redirect(url(ADMIN.'/calendar'));
        }
        DB::beginTransaction();
        try {
            $deleted = $calendar->delete();
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
        return redirect(url(ADMIN.'/calendar'));
    }
}
