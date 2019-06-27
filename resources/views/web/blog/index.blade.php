@extends('layouts.web')
	
@section('css')
@endsection

@section('js')
	<script src="{{ asset('plugins/jquery.date-dropdowns.min.js') }}"></script>
@endsection

@section('content')
	@include('web.partials.banner')
    
    <section class="content">
    	<div class="center-container">
    		<p class="blue-text">Blog</p>
    		<div class="line"></div>
    		<div class="row blog-wrap">
            @if ($posts->count() == 0)
            @else
                @foreach ($posts as $post)
                    <div class="col-md-4 col-sm-12">
                        @if ($post->thumbnail != "")
                        <div class="box" style="background-image: url('{{ $post->thumbnail }}')">
                        @else
                        <div class="box" style="background-image: url('{{ asset(WEB.'/images/default-3.png') }}')">
                        @endif
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
            @endif
    		</div>
		</div>
    </section>

@endsection