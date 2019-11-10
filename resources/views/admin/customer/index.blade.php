@extends('admin.partials.sub_layout')

@section('action')
    <div class="row">
		<div class="col-sm-12">
			<div class="block-header">
				<a href="{{ url('/'.ADMIN.'/export_customer') }}" class="btn btn-primary waves-effect btnCreate" role="button">
			        <i class="material-icons">cloud_download</i> Export
			    </a>
			</div>
		</div>
	</div>
	<div class="row">
        <div class="col-sm-12">
            @if (!isset($customers) || $customers->count() == 0)
                {{ trans('lang.no_data') }}
            @else
                <table class="table table-striped table-bordered tableResize">
                    <thead>
                    <tr>
                        <th class="align-center" style="width: 50px">#</th>
                        <th data-sort="child_name" class="sorting">{{ trans('lang.child_name') }}</th>
                        <th data-sort="child_birthday" class="sorting">{{ trans('lang.child_birthday') }}</th>
                        <th data-sort="father_name" class="sorting">{{ trans('lang.father_name') }}</th>
                        <th data-sort="father_tel" class="sorting">{{ trans('lang.father_tel') }}</th>
                        <th data-sort="mother_name" class="sorting">{{ trans('lang.mother_name') }}</th>
                        <th data-sort="mother_tel" class="sorting">{{ trans('lang.mother_tel') }}</th>
                        <th data-sort="branch" class="sorting">{{ trans('lang.branch') }}</th>
                        <th data-sort="time_frame" class="sorting">{{ trans('lang.time_frame') }}</th>
                        <th>{{ trans('lang.action') }}</th>
                    </tr>
                    </thead>
                    <tfoot>
                    <tr>
                        <th class="align-center">#</th>
                        <th>{{ trans('lang.child_name') }}</th>
                        <th>{{ trans('lang.child_birthday') }}</th>
                        <th>{{ trans('lang.father_name') }}</th>
                        <th>{{ trans('lang.father_tel') }}</th>
                        <th>{{ trans('lang.mother_name') }}</th>
                        <th>{{ trans('lang.mother_tel') }}</th>
                        <th>{{ trans('lang.branch') }}</th>
                        <th>{{ trans('lang.time_frame') }}</th>
                        <th>{{ trans('lang.action') }}</th>
                    </tr>
                    </tfoot>
                    <tbody>
                    @foreach ($customers as $key => $customer)
                        <tr>
                            <td class="align-center">{{ $loop->iteration }}</td>
                            <td>{{ $customer->child_name }}</td>
                            <td>{{ $customer->child_birthday }}</td>
                            <td>{{ $customer->father_name }}</td>
                            <td>{{ $customer->father_tel }}</td>
                            <td>{{ $customer->mother_name }}</td>
                            <td>{{ $customer->mother_tel }}</td>
                            <td>{{ getShortBranchName($customer->branch) }}</td>
                            <td>{{ getShortTimeFrame($customer->time_frame) }}</td>
                            <td class="align-center">
                                <a class="btn btn-xs btn-info waves-effect" href="{{ url(ADMIN.'/'.$controller.'/'.$customer->customer_id) }}">{{ trans('lang.btn_view') }}</a>
                                <a class="btn btn-xs btn-warning waves-effect" href="{{ url(ADMIN.'/'.$controller.'/'.$customer->customer_id.'/edit') }}">{{ trans('lang.btn_edit') }}</a>
                                <button class="btn btn-xs btn-danger waves-effect btn-delete" data-action="{{ url(ADMIN.'/'.$controller.'/'.$customer->customer_id) }}">{{ trans('lang.btn_delete') }}</button>
                            </td> 
                        </tr>
                    @endforeach
                    </tbody>
                </table>
                <div class="row">
                    {{ $customers->appends(request()->query())->links('admin.partials.pagination') }}
                    @include('admin.partials.frm_delete')
                </div>
            @endif
        </div>
        <button class="btn btn-success">Export</button>
    </div>
@endsection
