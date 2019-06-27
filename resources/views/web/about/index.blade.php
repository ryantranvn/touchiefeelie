@extends('layouts.web')
	
@section('css')
@endsection

@section('js')
@endsection

@section('content')
	@include('web.partials.banner')
    
    <section class="content about">
    	<div class="row ve-chung-toi">
    		<div class="center-container">
    			<div class="col-sm-5 left-col">
	    			<p class="pink-text">Về chúng tôi</p>
		    		<ul class="bullet-dot">
		    			<li>"Touchie Feelie" là cách nói nũng nịu, đáng yêu của trẻ nhỏ. Các Con luôn cần vỗ về, quan tâm và cũng muốn được thấu hiểu.</li>
						<li>Touchie Feelie được thành lập vào ngày 01/11/2018 bởi những người bạn cùng chia sẻ tình yêu dành cho Con trẻ và người trực tiếp chăm sóc Con yêu.</li>
						<li>Con trẻ ngay từ lúc chào đời, và trong quá trình lớn lên, đặc biệt trong những năm đầu tiên của đời sống phải trải qua nhiều nỗi đau. Đau có thể do tự nhiên, do sinh lý, do Cha - Mẹ chưa hiểu để đáp ứng cho Con, có thể do những thủ thuật y khoa mà các Con buộc phải trải qua trong đời sống.</li>
						<li>Cùng một hướng đi với Hiệp hội Massage Sơ sinh và Nhũ nhi Quốc tế IAIM, chúng tôi trân trọng những giá trị của kết nối yêu thương, chúng tôi ủng hộ khái niệm "Nurturing" - những cái chạm nuôi dưỡng về tinh thần, sức khoẻ, nhân cách cho Con yêu và chính bản thân Cha - Mẹ; những vuốt ve, âu yếm để làm dịu đi mọi nỗi đau, chỉ còn lưu giữ những khoảnh khắc của tình yêu thương tuyệt diệu.</li>
		    		</ul>
	    		</div>
	    		<div class="col-sm-7 right-col"></div>
    		</div>
		</div>
		<div class="row cham-ca-bau-troi"></div>
		<div class="row dong-hanh">
			<div class="center-container">
				<p class="text-lan-dau">Lần đầu tiên tại việt nam</p>
				<p class="blue-text">Touchie Feelie đồng hành cùng gia đình<br/>và Bé yêu ngay từ lúc chào đời</p>
				<div class="line"></div>
				<div class="col-sm-1"></div>
				<div class="col-sm-10">
					<div class="col-md-4 col-sm-12">
						<div class="box gia-tri-cot-loi">
							<div class="box-content-wrap">
	    						<p class="title text-left">GIÁ TRỊ CỐT LÕI</p>
	    						<p class="desc">
	    							@php ($desc = 'Chăm sóc, nuôi dạy và yêu thương Con trẻ là thiên chức của Cha - Mẹ. Thầy thuốc, các trung tâm hỗ trợ là người đồng hành của Bạn trên hành trình nhiều gian khó nhưng vô cùng màu nhiệm này.')
									{{ str_limit($desc, $limit = 350, $end = '...') }}
	    						</p>
	    					</div>
	    				</div>
	    			</div>
	    			<div class="col-md-4 col-sm-12">
						<div class="box su-mang">
							<div class="box-content-wrap">
	    						<p class="title text-left">SỨ MẠNG</p>
	    						<p class="desc">
	    							@php ($desc = 'Thúc đẩy sự gắn kết yêu thương, nuôi dưỡng nhân cách và sức khoẻ cho Bé yêu thông qua việc nghiên cứu, thông tin, giáo dục kĩ năng, để các bậc Cha - Mẹ - Người chăm sóc Bé trực tiếp và chính bản thân Bé được tôn trọng, yêu thương và phát huy mọi tiềm năng của mình.')
									{{ str_limit($desc, $limit = 350, $end = '...') }}
	    						</p>
	    					</div>
	    				</div>
	    			</div>
	    			<div class="col-md-4 col-sm-12">
						<div class="box tam-nhin">
							<div class="box-content-wrap">
	    						<p class="title text-left">TẦM NHÌN</p>
	    						<p class="desc">
	    							@php ($desc = 'Touchie Feelie cùng đồng hành với bạn bé khắp thế giới trong hành trình nuôi dưỡng và chăm sóc Bé yêu. Trẻ em Việt Nam cần được lắng nghe, tôn trọng. Những Bà Mẹ, Ông Bố Việt Nam cần được bộc lộ những khả năng "vô hạn" của mình trong việc nuôi dưỡng con yêu về cả sức khoẻ tinh thần, nhân cách và thể chất.')
									{{ str_limit($desc, $limit = 350, $end = '...') }}
	    						</p>
	    					</div>
	    				</div>
	    			</div>
				</div>
				<div class="col-sm-1"></div>
			</div>
		</div>
		<div class="row co-so-vat-chat">
			<div class="center-container">
				<div class="col-sm-5 left-col">
					<p class="blue-text">Cơ sở vật chất</p>
					<p class="desc">tại Touchie feelie</p>
					<div class="line"></div>
					<ul class="bullet-star">
						<li><i class="fas fa-star"></i>Không gian ấm cúng, thân thiện, nhiều màu sắc đáng yêu</li>
						<li><i class="fas fa-star"></i>Ban công rộng, thoáng đãng, cây xanh tươi mát</li>
						<li><i class="fas fa-star"></i>Máy điều hòa </li>
						<li><i class="fas fa-star"></i>SmartTV LED</li>
						<li><i class="fas fa-star"></i>Hộp sơ cứu First Aid for Kids</li>
						<li><i class="fas fa-star"></i>Tủ sách cho Cha Mẹ </li>
						<li><i class="fas fa-star"></i>Ngăn kéo "Túi thần kì của Doreamon" [Không cần lo về khăn, tã, quần áo và các vật dụng thường ngày của Bé]</li>
						<li><i class="fas fa-star"></i>Wifi miễn phí</li>
						<li><i class="fas fa-star"></i>Nước uống (nóng, lạnh), thức ăn nhẹ</li>
						<li><i class="fas fa-star"></i>Nhà vệ sinh đầy đủ tiện nghi </li>
					</ul>
					<p class="blue-text">Cùng ghé thăm để có những trải nghiệm thú vị cùng Touchie Feelie Bạn nhé!</p>
				</div>
				<div class="col-sm-7 right-col"></div>
			</div>
		</div>
    </section>
@endsection	