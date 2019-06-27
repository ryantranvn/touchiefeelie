@extends('admin.partials.sub_layout')

@section('action')
	<div class="row">
		<div class="col-sm-12">
			<div class="block-header">
				<a href="{{ url('/'.ADMIN.'/'.$controller.'/create') }}" class="btn btn-primary waves-effect btnCreate" role="button">
			        <i class="material-icons">add</i> {{ trans('lang.btn_create') }}
			    </a>
			</div>
		</div>
	</div>
	<div class="row">
	    <div class="col-sm-12">
	        @if ($calendars->count() == 0)
	            {{ trans('lang.no_data') }}
	        @else
	        	<table class="table table-striped table-bordered tableResize">
		            <thead>
		            <tr>
		                <th style="width: 50px">#</th>
		                <th data-sort="branch" class="sorting">{{ trans('lang.branch') }}</th>
		                <th data-sort="date" class="sorting">{{ trans('lang.date') }}</th>
		                <th data-sort="start_time" class="sorting">{{ trans('lang.start_time') }}</th>
		                <th data-sort="end_time" class="sorting">{{ trans('lang.end_time') }}</th>
		                <th style="width: 120px">{{ trans('lang.action') }}</th>
		            </tr>
		            </thead>
		            <tfoot>
		            <tr>
		                <th>#</th>
		                <th>{{ trans('lang.branch') }}</th>
		                <th>{{ trans('lang.date') }}</th>
		                <th>{{ trans('lang.start_time') }}</th>
		                <th>{{ trans('lang.end_time') }}</th>
		                
		                <th>{{ trans('lang.action') }}</th>
		            </tr>
		            </tfoot>
		            <tbody>
	            	@foreach ($calendars as $key => $calendar)
	            		<tr>
	            			<td class="align-center">{{ $loop->iteration }}</td>
	            			<td class="align-left">{{ $calendar->branch }}</td>
	            			<td class="align-center">{{ $calendar->estimate_date }}</td>
	            			<td class="align-center">{{ substr($calendar->start_time, 0, 5) }}</td>
	            			<td class="align-center">{{ substr($calendar->end_time, 0, 5) }}</td>
	            			<td class="align-center">
	            				<a class="btn btn-xs btn-warning waves-effect" href="{{ url(ADMIN.'/'.$controller.'/'.$calendar->calendar_id.'/edit') }}">{{ trans('lang.btn_edit') }}</a>
                    			<button class="btn btn-xs btn-danger waves-effect btn-delete" data-action="{{ url(ADMIN.'/'.$controller.'/'.$calendar->calendar_id) }}">{{ trans('lang.btn_delete') }}</button>
	            			</td>
	            		</tr>
        			@endforeach
		            </tbody>
		        </table>
		        <div class="row">
                    {{ $calendars->appends(request()->query())->links('admin.partials.pagination') }}
                    @include('admin.partials.frm_delete')
                </div>
	        @endif
	    </div>
	</div>
@endsection