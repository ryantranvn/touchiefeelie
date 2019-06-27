@extends('admin.partials.sub_layout')

@section('js')
@endsection

@section('action')
	<div class="row">
		<div class="col-sm-12">
			<form id="frmCalendar" action="{{ url('/'.ADMIN.'/'.$controller.'/'.$calendar->calendar_id) }}" method="POST">
				{{ csrf_field() }}
                {{ method_field('PATCH') }}
                <div class="row">
                	<div class="col-sm-12 col-md-6 m-b-0">
						<div class="form-group m-b-0">
							<label for="title">{{ trans('lang.branch') }} <span class="require-sign">*</span></label>
							<div class="form-group btn-select-wrap m-b-0">
								@php ($branches = branch())
								@foreach ($branches as $key => $branch)
									<input type="text" class="form-control btn-select @if ($calendar->branch_id === $key) active @endif" data-value="{{ $key }}" value="{{ $branch['full'] }}" readonly />
								@endforeach
			    				<input type="text" name="branch" class="hidden-input btn-select-value" value="{{ $calendar->branch_id }}" />
			    			</div>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-sm-12 col-md-3">
						<div class="form-group">
							<label for="date">{{ trans('lang.start_date') }} <span class="require-sign">*</span></label>
							<div class="form-line">
								<input type="text" name="date" class="form-control date-picker" value="{{ $calendar->estimate_date }}" />
							</div>
						</div>
						<div class="form-group">
							<label for="number_days">{{ trans('lang.number_days') }} <span class="require-sign">*</span></label>
							<div class="form-line">
								<input type="text" name="number_days" class="form-control positive-number" value="{{ $calendar->number_days }}" />
							</div>
						</div>
					</div>
					<div class="col-sm-12 col-md-1"></div>
                	<div class="col-sm-12 col-md-2">
						<div class="form-group btn-multi-select-wrap btn-days-wrap">
							<label for="days">{{ trans('lang.dates') }} <span class="require-sign">*</span></label>
							@php ($arrDays = ['1' => 'Thứ Hai', '2' => 'Thứ Ba', '3' => 'Thứ Tư', '4' => 'Thứ Năm', '5' => 'Thứ Sáu', '6' => 'Thứ Bảy', '0' => 'Chủ Nhật'])
							@foreach ($arrDays as $key => $day)
							<div class="btn-wrap">
								<button class="btn btn-select @if(str_contains($calendar->days,$key)) active @endif" data-value="{{ $key }}">{{ $day }}</button>
								<input type="text" name="days[]" class="hidden-input days-group" />
							</div>
							@endforeach
						</div>
					</div>
					<div class="col-sm-12 col-md-4">
						<div class="form-group">
							<label for="title">{{ trans('lang.time_frame') }} <span class="require-sign">*</span></label>
							<div class="form-group btn-select-wrap">
								@php ($timeFrames = timeFrame())
								@foreach ($timeFrames as $key => $timeFrame)
									<input type="text" class="form-control btn-select @if ($calendar->time_frame_id == $key) active @endif" data-value="{{ $key }}" value="{{ $timeFrame['full'] }}" readonly />
								@endforeach
			    				<input type="text" name="time_frame" class="hidden-input btn-select-value" value="{{ $calendar->time_frame_id }}" />
			    			</div>
		    			</div>
		    		</div>
				</div>
				<div class="row">
                    <div class="col-sm-12 align-right">
                        <div class="col-sm-12">
                            <a href="{{ url(ADMIN.'/'.$controller) }}" class="btn bg-grey">{{ trans('lang.btn_cancel') }}</a>
                            <button type="submit" class="btn btn-success m-l-10">{{ trans('lang.btn_submit') }}</button>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
@endsection