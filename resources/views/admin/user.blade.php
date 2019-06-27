@extends('layouts.admin')
	
@section('css')
@endsection

@section('js')
@endsection

@section('content')
    <section class="content">
    	@include('admin.partials.breadcrumb')
    	<div class="container-fluid">
            <div class="row clearfix">
                <div class="card">
                    <div class="header bg-{{ THEME_COLOR }}" role="button" data-toggle="collapse" href="#collapseMainBox" aria-expanded="false" aria-controls="collapseExample">
                        <h2 class="title">
                            @if ($action == 'index')
                                {{ trans('lang.list_title') }}
                            @elseif ($action == 'show')
                                {{ trans('lang.show_title') }}
                            @elseif ($action == 'create')
                                {{ trans('lang.create_title') }}
                            @elseif ($action == 'edit')
                                {{ trans('lang.edit_title') }}
                            @endif
                        </h2>
                        {{-- <a class="btnCollapse">
                            <i class="material-icons">more_vert</i>
                        </a> --}}
                    </div>
                    <div class="body collapse in" id="collapseMainBox">
                        @if ($action == 'index')
                            {{-- @include('adminbsb.partials.top_buttons') --}}
                        @endif
                        @include('admin.partials.reply')
                        @yield('action')
                    </div>
                </div>
            </div>
        </div>
	</section>
@endsection	