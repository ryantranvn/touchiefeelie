@extends('admin.partials.sub_layout')

@section('action')
	<div class="row">
        <div class="col-sm-12">
            @if (!isset($subscribes) || $subscribes->count() == 0)
                {{ trans('lang.no_data') }}
            @else
                <table class="table table-striped table-bordered tableResize">
                    <thead>
                    <tr>
                        <th class="align-center" style="width: 50px">#</th>
                        <th data-sort="child_name" class="sorting">{{ trans('lang.email') }}</th>
                        <th data-sort="child_birthday" class="sorting">{{ trans('lang.type') }}</th>
                        <th>{{ trans('lang.action') }}</th>
                    </tr>
                    </thead>
                    <tfoot>
                    <tr>
                        <th class="align-center">#</th>
                        <th>{{ trans('lang.email') }}</th>
                        <th>{{ trans('lang.type') }}</th>
                        <th>{{ trans('lang.action') }}</th>
                    </tr>
                    </tfoot>
                    <tbody>
                    @foreach ($subscribes as $key => $subscribe)
                        <tr>
                            <td class="align-center">{{ $loop->iteration }}</td>
                            <td>{{ $subscribe->email }}</td>
                            <td>{{ $subscribe->type == NULL ? 'subscribe' : $subscribe->type }}</td>
                            <td class="align-center">
                                {{-- <a class="btn btn-xs btn-info waves-effect" href="{{ url(ADMIN.'/'.$controller.'/'.$subscribe->subscribe_id) }}">{{ trans('lang.btn_view') }}</a> --}}
                                {{-- <a class="btn btn-xs btn-warning waves-effect" href="{{ url(ADMIN.'/'.$controller.'/'.$subscribe->subscribe_id.'/edit') }}">{{ trans('lang.btn_edit') }}</a> --}}
                                <button class="btn btn-xs btn-danger waves-effect btn-delete" data-action="{{ url(ADMIN.'/'.$controller.'/'.$subscribe->subscribe_id) }}">{{ trans('lang.btn_delete') }}</button>
                            </td> 
                        </tr>
                    @endforeach
                    </tbody>
                </table>
                <div class="row">
                    {{ $subscribes->appends(request()->query())->links('admin.partials.pagination') }}
                    @include('admin.partials.frm_delete')
                </div>
            @endif
        </div>
    </div>
@endsection
