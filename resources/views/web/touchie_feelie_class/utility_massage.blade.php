@extends('layouts.web')
	
@section('css')
@endsection

@section('js')
@endsection

@section('content')
	@include('web.partials.banner')
    
    <section class="content utility-massage">
    	<div class="center-container">
		{{-- for-kids-block --}}
    		<div class="row utility-block for-kids">
	    		<div class="col-md-6 col-sm-12 col-text">
	    			<p class="pink-text">Lợi ích của<br/>việc massage</p>
	    			<span class="text-for">CHO CON</span>
	    			<ul class="bullet-star text-left">
	    				<li><i class="fas fa-star"></i>Giúp Bé phát triển trí não</li>
						<li><i class="fas fa-star"></i>Bé ngủ ngon hơn</li>
						<li><i class="fas fa-star"></i>Nhịp tim và hệ hô hấp ổn định hơn</li>
						<li><i class="fas fa-star"></i>Hỗ trợ hệ tiêu hóa, từ đó giúp Bé ăn ngon miệng và phát triển thể chất toàn diện</li>
						<li><i class="fas fa-star"></i>Cải thiện hệ tuần hoàn</li>
						<li><i class="fas fa-star"></i>Làm dịu đi sự khó chịu của Bé trong giai đoạn mọc răng, giảm đau khi bị ốm nữa...</li>
	    			</ul>
	    		</div>
	    		<div class="col-md-6 col-sm-12 col-img"></div>
	    	</div>
	    {{-- for-parents-block --}}
    		<div class="row utility-block for-parents">
    			<div class="col-md-6 col-sm-12 col-img h-o-m"></div>
	    		<div class="col-md-6 col-sm-12 col-text">
	    			<span class="text-for">CHO CHA MẸ</span>
	    			<ul class="bullet-star text-left">
	    				<li><i class="fas fa-star"></i>Cải thiện đáng kể việc Nuôi con bằng sữa mẹ</li>
						<li><i class="fas fa-star"></i>Giải mã được những tín hiệu từ con trẻ</li>
						<li><i class="fas fa-star"></i>Thư giãn và bình tĩnh hơn trong hành trình nuôi dạy con gian nan nhưng ngập tràn hạnh phúc</li>
						<li><i class="fas fa-star"></i>Lan tỏa oxytocin - hormon của tình yêu</li>
						<li><i class="fas fa-star"></i>Giảm đáng kể nguy cơ trầm cảm sau sinh</li>
						<li><i class="fas fa-star"></i>Tự tin làm Cha Mẹ</li>
	    			</ul>
	    			<p>Những động tác chạm và vuốt nhịp nhàng của bàn tay cùng việc tương tác bằng ánh mắt sẽ kích thích sản sinh ra oxytocin (hay có cái tên lãng mạn hơn là hormone tình yêu), là loại hormone giúp cả Bé và Cha Mẹ đều cảm thấy được yêu thương, gắn kết thêm bền chặt.</p>
	    		</div>
	    		<div class="col-md-6 col-sm-12 col-img h-o-d"></div>
	    	</div>
    	{{-- for-parents-block --}}
    		<div class="row utility-block for-social">
    			<div class="col-md-6 col-sm-12 col-text">
    				<span class="text-for">CHO XÃ HỘI</span>
    				<ul class="bullet-star text-left">
    					<li><i class="fas fa-star"></i>Tăng cường sức khoẻ tinh thần và thể chất cho cả cộng đồng</li>
    					<li><i class="fas fa-star"></i>Tăng cường kết nối yêu thương giữa người - người, sự tôn trọng và lạc quan trong cuộc sống.</li>
    					<li><i class="fas fa-star"></i>Giảm bạo hành, bạo lực.</li>
    					<li><i class="fas fa-star"></i>Giảm gánh nặng xã hội về chi phí Y tế.</li>
    				</ul>
    			</div>
    			<div class="col-md-6 col-sm-12"></div>
    		</div>
		</div>
    </section>
@endsection	