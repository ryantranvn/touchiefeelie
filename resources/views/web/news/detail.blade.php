@extends('layouts.web')
	
@section('css')
@endsection

@section('js')
	<script src="{{ asset('plugins/jquery.date-dropdowns.min.js') }}"></script>
@endsection

@section('content')
	@include('web.partials.banner')
    
    <section class="content news-detail">
    	<div class="center-container">
    		<div class="row">
				<ul class="breadcrumb">
					<li><a href="{{ url('/') }}">Trang chủ</a></li>
					<li><i class="fas fa-angle-right"></i></li>
					<li><a href="{{ url('/tin-tuc') }}">Tin tức</a></li>
					<li><i class="fas fa-angle-right"></i></li>
					<li>{{ $post->title }}</li>
				</ul>
				<div class="line"></div>
    		</div>
    		<div class="row detail-wrap">
    			<div class="col-sm-4 left-col">
    				<p class="pink-text">{{ $post->title }}</p>
    				@php
    				$exp = explode(' ', $post->created_at);
			        $exp_date = explode('-', $exp[0]);
    				@endphp
    				<p class="desc">Ngày: {{ $exp_date[2] }}-{{ $exp_date[1] }}-{{ $exp_date[0] }}</p>
    			</div>
    			<div class="col-sm-8 right-col">
    				@php 
    					echo html_entity_decode($post->content);
					@endphp
    			</div>
    		</div>
    		{{-- 
    		<div class="row news-relate">
				<p class="blue-text">Tin tức liên quan</p>
				<div class="line"></div>
				<div class="center-container">
					@php ($desc = 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem.')
					<div class="col-md-4 col-sm-12">
						<div class="box news-1">
							<div class="box-content-wrap">
								<p class="title">Tin tức 1</p>
								<p class="desc">{{ str_limit($desc, $limit = 350, $end = '...') }}</p>
							</div>
							<a href="{{ url('/tin-tuc/tin-1') }}" class="full-link"></a>
						</div>
					</div>
					<div class="col-md-4 col-sm-12">
						<div class="box news-2">
							<div class="box-content-wrap">
								<p class="title">Tin tức 2</p>
								<p class="desc">{{ str_limit($desc, $limit = 350, $end = '...') }}</p>
							</div>
							<a href="{{ url('/tin-tuc/tin-2') }}" class="full-link"></a>
						</div>
					</div>
					<div class="col-md-4 col-sm-12">
						<div class="box news-3">
							<div class="box-content-wrap">
								<p class="title">Tin tức 3</p>
								<p class="desc">{{ str_limit($desc, $limit = 350, $end = '...') }}</p>
							</div>
							<a href="{{ url('/tin-tuc/tin-3') }}" class="full-link"></a>
						</div>
					</div>
				</div>
			</div>
			 --}}
		</div>
    </section>

@endsection