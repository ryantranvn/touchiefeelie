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
	    	<form id="frmBooking" action="{{ url('/dat-hen/dang-ky') }}" method="post">
	    		{{ csrf_field() }}
		    	<div class="row dat-hen-1">
		    		<div class="col-sm-6 left-col h-o-m"></div>
		    		<div class="col-sm-6 right-col">
		    			<p class="blue-text">Đặt hẹn</p>
		    			<p class="desc">Khai giảng hàng tuần tại các Chi nhánh của Touchie Feelie:<br/>Quận 3, Quận Thủ Đức</p>
		    			<p class="blue-text block-title">Thông tin của Con</p>
		    			<div class="line"></div>
		    			<p class="desc"><span class="require">*</span>Tên đẹp của Con yêu là gì? </p>
		    			<div class="form-group">
		    				<input type="text" name="child_name" class="form-control" />
		    			</div>
		    			<div class="form-group">
		    				<p class="desc label-birthday"><span class="require">*</span>Con yêu chào đời vào: </p>
		    				<input type="text" name="child_birthday" class="form-control birthday" />
		    			</div>
		    			<p class="desc"><span class="require">*</span>Con yêu bao nhiêu tháng rồi? </p>
		    			<div class="form-group">
		    				<input type="text" name="child_month" class="form-control positive-number" />
		    			</div>
		    			<p class="desc"><span class="require">*</span>Con yêu nặng bao nhiêu kg?</p>
		    			<div class="form-group">
		    				<input type="text" name="child_weight" class="form-control" />
		    			</div>
		    		</div>
		    	</div>
		    	<div class="row dat-hen-2">
		    		<div class="col-sm-6 left-col">
		    			<p class="blue-text block-title">Thông tin dịch vụ</p>
		    			<div class="line"></div>
		    			<p class="desc"><span class="require">*</span>Nhà mình muốn học ở chi nhánh</p>
		    			<div class="form-group branch-wrap btn-select-wrap m-b-0">
		    				@php ($branches = branch())
							@foreach ($branches as $key => $branch)
								<input type="text" class="form-control btn-select @if ($loop->first) active @endif" data-value="{{ $key }}" value="{{ $branch['full'] }}" readonly />
							@endforeach
		    				<input type="text" name="branch" class="hidden-input btn-select-value" value="1" />
		    			</div>
		    			<div class="line"></div>
		    			<p class="desc text-left"><span class="require">*</span>Bạn thích học khung giờ nào? </p>
		    			<div class="form-group time-wrap btn-select-wrap">
							@php ($timeFrames = timeFrame())
							@foreach ($timeFrames as $key => $timeFrame)
								<input type="text" class="form-control btn-select @if ($loop->first) active @endif" data-value="{{ $key }}" value="{{ $timeFrame['full'] }}" readonly />
							@endforeach
		    				<input type="text" name="time_frame" class="hidden-input btn-select-value" value="1" />
		    			</div>
		    			<p class="desc">Ghi chú </p>
		    			<div class="form-group">
		    				<textarea name="note" rows="5" class="form-control"></textarea>
		    			</div>

		    			<p class="blue-text block-title">Thông tin bổ sung</p>
		    			<div class="line"></div>
		    			<p class="desc">Người chăm sóc Con hằng ngày (khác cha/mẹ nếu có)</p>
		    			<div class="form-group">
		    				<input type="text" name="guardian_name" class="form-control" />
		    			</div>
		    			<p class="desc"><span class="require">*</span>Lịch sử bệnh lý của Con (hoặc những biểu hiện bất thường nếu có, <br/>ví dụ: sanh non, nhẹ cân, dưỡng nhi, dị ứng....)</p>
		    			<div class="form-group">
		    				<input type="text" name="pathological" class="form-control" />
		    			</div>
		    			<p class="desc">Bạn hoặc Con đã có những trải nghiệm massage nào trước đây chưa? <br/>Nếu có vui lòng ghi rõ cảm nhận của Bạn/Con về trải nghiệm</p>
		    			<div class="form-group">
		    				<input type="text" name="feeling_experience" class="form-control" />
		    			</div>
		    			<p class="desc">Bạn mong muốn đạt được điều gì thông qua lớp học?</p>
		    			<div class="form-group">
		    				<input type="text" name="desire" class="form-control" />
		    			</div>
		    			<p class="desc"><span class="require">*</span>Bạn nghe từ đâu về lớp học này?</p>
		    			<div class="form-group">
		    				<input type="text" name="know_from" class="form-control" />
		    			</div>
		    			<div class="form-group h-o-m">
		    				<button class="btn btn-blue btn-submit-boonking">ĐẶT LỊCH HẸN</button>
		    			</div>
		    		</div>
		    		<div class="col-sm-6 right-col">
		    			<p class="blue-text block-title">Thông tin của Ba và Mẹ</p>
		    			<div class="line"></div>
		    			<p class="desc">Ba của con tên là</p>
		    			<div class="form-group">
		    				<input type="text" name="father_name" class="form-control" />
		    			</div>
		    			<p class="desc">Số điện thoại của Ba</p>
		    			<div class="form-group">
		    				<input type="text" name="father_tel" class="form-control positive-number" />
		    			</div>
		    			<p class="desc">Mẹ của con tên là</p>
		    			<div class="form-group">
		    				<input type="text" name="mother_name" class="form-control" />
		    			</div>
		    			<p class="desc">Số điện thoại của Mẹ</p>
		    			<div class="form-group">
		    				<input type="text" name="mother_tel" class="form-control positive-number" />
		    			</div>
		    			<p class="desc"><span class="require">*</span> Nhà mình ở địa chỉ</p>
		    			<div class="form-group">
		    				<input type="text" name="address" class="form-control" />
		    			</div>
		    			<div class="form-group h-o-d" style="text-align: center">
		    				<button class="btn btn-blue btn-submit-boonking">ĐẶT LỊCH HẸN</button>
		    			</div>
		    		</div>
		    	</div>
		    </form>
		</div>
    </section>

@endsection