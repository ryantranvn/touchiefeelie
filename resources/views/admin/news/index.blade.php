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
	        @if ($posts->count() == 0)
	            {{ trans('lang.no_data') }}
	        @else
	        	<table class="table table-striped table-bordered tableResize">
		            <thead>
		            <tr>
		                <th style="width: 50px">#</th>
		                <th style="width: 150px">{{ trans('lang.thumbnail') }}</th>
		                <th data-sort="title" class="sorting">{{ trans('lang.title') }}</th>
		                <th data-sort="author" class="sorting">{{ trans('lang.author') }}</th>
		                <th style="width: 120px">{{ trans('lang.action') }}</th>
		            </tr>
		            </thead>
		            <tfoot>
		            <tr>
		                <th>#</th>
		                <th>{{ trans('lang.thumbnail') }}</th>
		                <th>{{ trans('lang.title') }}</th>
		                <th>{{ trans('lang.author') }}</th>
		                <th>{{ trans('lang.action') }}</th>
		            </tr>
		            </tfoot>
		            <tbody>
	            	@foreach ($posts as $key => $post)
	            		<tr>
	            			<td class="align-center">{{ $loop->iteration }}</td>
	            			<td class="align-center">
	            				@if ($post->thumbnail != null && $post->thumbnail != "")
			                        <img src="{{ url($post->thumbnail) }}" class="img-responsive thumbnail-in-table" />
			                    @else
			                        <img src="{{ asset('adminbsb/images/default.jpg') }}" class="img-responsive thumbnail-in-table" />
			                    @endif
	            			</td>
	            			<td class="align-left">{{ $post->title }}</td>
	            			<td class="align-left">{{ $post->author }}</td>
	            			<td class="align-center">
	            				<a class="btn btn-xs btn-warning waves-effect" href="{{ url(ADMIN.'/'.$controller.'/'.$post->post_id.'/edit') }}">{{ trans('lang.btn_edit') }}</a>
                    			<button class="btn btn-xs btn-danger waves-effect btn-delete" data-action="{{ url(ADMIN.'/'.$controller.'/'.$post->post_id) }}">{{ trans('lang.btn_delete') }}</button>
	            			</td>
	            		</tr>
        			@endforeach
		            </tbody>
		        </table>
		        <div class="row">
                    {{ $posts->appends(request()->query())->links('admin.partials.pagination') }}
                    @include('admin.partials.frm_delete')
                </div>
	        @endif
	    </div>
	</div>
@endsection