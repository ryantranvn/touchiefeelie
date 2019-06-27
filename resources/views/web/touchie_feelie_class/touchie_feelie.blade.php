@extends('layouts.web')
	
@section('css')
@endsection

@section('js')
@endsection

@section('content')
	@include('web.partials.banner')
    
    <section class="content">
    	<div class="center-container">
		{{-- class-info-block --}}
	    	<div class="row class-info-block">
	    		<div class="col-sm-12 col-md-6">
	    			<p class="title">
	    				<span class="icon-con-sua"></span>
	    				<span class="text">lớp học hướng dẫn massage cho bé</span>
	    			</p>
	    			<p class="pink-text">Chạm<br/>yêu thương</p>
	    			<div class="desc-wrap">
	    				Lớp học “Chạm yêu thương” tổ chức theo mô hình lớp học của Hiệp hội Massage Sơ sinh và Nhũ nhi Quốc tế IAIM:
	    				<ul class="bullet-star">
	    					<li><i class="fas fa-star"></i> Khai giảng hàng tuần tại các chi nhánh của Touchie Feelie</li>
	    					<li><i class="fas fa-star"></i> Gồm 5 ngày học (trong 4 tuần + 1 ngày cuối tuần), mỗi buổi kéo dài 45 - 60 phút</li>
	    					<li><i class="fas fa-star"></i> Được các Instructors trực thuộc IAIM trực tiếp thao giảng</li>
	    					<li><i class="fas fa-star"></i> Linh hoạt trong chọn lựa khung giờ học phù hợp sinh hoạt của Bé và gia đình:
	    						<ul class="bullet-dot">
	    							<li>Sáng: 9:30 - 10:30</li>
	    							<li>Chiều: 14:30 - 15:30</li>
	    							<li>Tối: 17:30 - 18:30</li>
	    						</ul> 
	    					</li>
						</ul>
	    			</div>
	    		</div>
	    		<div class="col-sm-12 col-md-6">
	    			<div class="box last-class">
	    				<div class="box-title-wrap">
	    					<i class="far fa-calendar-alt"></i>
	    					LỊCH KHAI GIẢNG GẦN NHẤT
	    				</div>
	    				<div class="box-content-wrap">
	    					<p>
	    						<span>Ngày khai giảng dự kiến</span><br/>
	    						@if ($arrDateTime)
	    						{{ $arrDateTime['day'] }}&nbsp;
	    						{{ $arrDateTime['date'] }}.
	    						{{ $arrDateTime['month'] }}.
	    						{{ $arrDateTime['year'] }}
	    						@endif
							</p>
							<p>
								<span>Thời lượng:</span><br/>
								@if ($calendar)
								{{ $calendar->number_days }} buổi
								@endif
							</p>
							<p>
								<span>Ngày và giờ học dự kiến:</span><br/>
								@if ($estimateDateTime != '')
								{{ $estimateDateTime }}
								@endif
							</p>
							<a href="{{ url('/dat-hen') }}" class="form-control btn btn-register">ĐĂNG KÝ</a>
	    				</div>
	    			</div>
	    		</div>
	    	</div>
    	{{-- pictures --}}
	    	<div class="row pictures-block">
	    		<div class="row">
	    			<div class="col-xs-12 col-sm-12 col-md-4">
	    				<div class="row">
		    				<div class="col-xs-12 col-md-12 col-sm-12 img-wrap">
		    					<img src="{{ asset('web/images/temp/1.jpg') }}" alt="{{ IMG_ALT }}" />
		    				</div>
		    			</div>
		    			<div class="row">
		    				<div class="col-xs-6 col-sm-6 col-md-6 img-wrap">
		    					<img src="{{ asset('web/images/temp/2.jpg') }}" alt="{{ IMG_ALT }}" />
		    				</div>
		    				<div class="col-xs-6 col-sm-6 col-md-6 img-wrap">
		    					<img src="{{ asset('web/images/temp/3.jpg') }}" alt="{{ IMG_ALT }}" />
		    				</div>
		    			</div>
	    			</div>
	    			<div class="col-xs-12 col-sm-12 col-md-8 img-wrap">
	    				<img src="{{ asset('web/images/temp/4.jpg') }}" alt="{{ IMG_ALT }}" />
	    			</div>
	    		</div>
	    		<div class="row">
	    			<div class="col-xs-12 col-md-4 col-sm-12 img-wrap">
	    				<img src="{{ asset('web/images/temp/5.jpg') }}" alt="{{ IMG_ALT }}" />
	    			</div>
	    			<div class="col-xs-12 col-md-4 col-sm-12 img-wrap">
	    				<img src="{{ asset('web/images/temp/6.jpg') }}" alt="{{ IMG_ALT }}" />
	    			</div>
	    			<div class="col-xs-12 col-md-4 col-sm-12 img-wrap">
	    				<img src="{{ asset('web/images/temp/7.jpg') }}" alt="{{ IMG_ALT }}" />
	    			</div>
	    		</div>
	    	</div>
    	{{-- class-program-block --}}
    		<div class="row class-program-block">
    			<div class="col-xs-12 col-md-4 col-sm-12">
    				<p class="title">
	    				<span class="icon-ca-voi"></span>
	    				<span class="text">chương trình lớp học</span>
	    			</p>
	    			<p class="blue-text">Chạm<br/>yêu thương</p>
    			</div>
    			<div class="col-xs-12 col-md-4 col-sm-12">
					<div class="box program-1">
						<div class="box-content-wrap">
    						<p class="title">Kĩ năng Massage<br/>cho Bé yêu</p>
    						{{-- <p class="desc">
    							Khoa học, an toàn và đảm bảo sức khoẻ cho Bé: cường độ, tốc độ, nhịp độ, thời gian massage, sự trân trọng, sự gắn kết, ...<br/>
								Bạn sẽ thuần thục mọi khía cạnh của Infant Massage!
    						</p> --}}
    					</div>
    				</div>
    			</div>
    			<div class="col-xs-12 col-md-4 col-sm-12">
    				<div class="box program-2">
    					<div class="box-content-wrap">
    						<p class="title">Giải mã những "tín hiệu"<br/>từ con trẻ</p>
    						{{-- <p class="desc">Tại sao con trẻ khóc, ngôn ngữ của con, cách thư giãn, và vai trò của người làm Cha/Mẹ.</p> --}}
    					</div>
    				</div>
    			</div>
    			<div class="col-xs-12 col-md-4 col-sm-12">
					<div class="box program-3">
						<div class="box-content-wrap">
    						<p class="title">Những giây phút đặc biệt<br/>bên con</p>
    					</div>
					</div>
				</div>
				<div class="col-xs-12 col-md-4 col-sm-12">
					<div class="box program-4">
						<div class="box-content-wrap">
    						<p class="title">Kết bạn mới cho chính<br/>Bạn và cả Con yêu</p>
    					</div>
					</div>
				</div>
				<div class="col-xs-12 col-md-4 col-sm-12">
					<div class="box program-5">
						<div class="box-content-wrap">
    						<p class="title">Lớp học thân mật,<br/>thoải mái với số lượng ít</p>
    					</div>
					</div>
				</div>
    		</div>
    	</div>
    </section>
@endsection	