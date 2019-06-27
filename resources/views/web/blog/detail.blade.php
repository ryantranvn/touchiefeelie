@extends('layouts.web')
	
@section('css')
@endsection

@section('js')
	<script src="{{ asset('plugins/jquery.date-dropdowns.min.js') }}"></script>
@endsection

@section('content')
	@include('web.partials.banner')
    
    <section class="content blog-detail">
    	<div class="center-container">
    		<div class="row">
				<ul class="breadcrumb">
					<li>Trang chủ</li>
					<li><i class="fas fa-angle-right"></i></li>
					<li>Blog</li>
					<li><i class="fas fa-angle-right"></i></li>
					<li>{{ $post->title }}</li>
				</ul>
				<div class="line"></div>
    		</div>
    		<div class="row detail-wrap">
    			<div class="col-sm-4 left-col">
    				<p class="pink-text">{{ $post->title }}</p>
    				<p class="desc">Tác giả: {{ $post->author }}</p>
    				{{-- ($arrDate = arrDateTime($post->created_at)) --}}
    				@php
    				$exp = explode(' ', $post->created_at);
			        $exp_date = explode('-', $exp[0]);
			        // $exp_time = explode(':', $exp[1]);
    				@endphp
    				<p class="desc">Ngày: {{ $exp_date[2] }}-{{ $exp_date[1] }}-{{ $exp_date[0] }}</p>
    			</div>
    			<div class="col-sm-8 right-col">
    				@php 
    					echo html_entity_decode($post->content);
					@endphp
    			</div>
    		</div>
    		@if (count($relatedPosts)>0)
    		<div class="row blog-related">
				<p class="blue-text">Tin tức liên quan</p>
				<div class="line"></div>
				<div class="center-container">
					@foreach ($relatedPosts as $post)
		                <div class="col-md-4 col-sm-12">
		                    <div class="box" style="background-image: url('{{ $post->thumbnail }}')">
		                        <div class="box-content-wrap">
		                            <p class="title">{{ $post->title }}</p>
		                            @php ($desc = cutString($post->highlight, 80))
                            		<p class="desc">{{ $desc }}</p>
		                            {{-- <p class="desc">{{ str_limit($post->highlight, $limit = 350, $end = '...') }}</p> --}}
		                        </div>
		                        <a href="{{ url('/blog/'.$post->slug) }}" class="full-link"></a>
		                    </div>
		                </div>
		            @endforeach
				</div>
			</div>
			@endif
		</div>
    </section>

@endsection