@extends('layouts.web')
	
@section('css')
@endsection

@section('js')
@endsection

@section('content')
    <section class="content home">
    	{{-- <div class="home-bg"></div> --}}
    	{{-- home-block --}}
	    	<div class="row home-block">
	    		<div class="col-xs-12 col-sm-12 banner-content">
	    			<div class="col-xs-12 col-sm-5 col-md-6 col-lg-7 left-col"></div>
    				<div class="col-xs-12 col-sm-7 col-md-6 col-lg-5 right-col">
		    			<a href="#" class="blue-link">GIẢI MÃ TÍN HIỆU TỪ CON TRẺ</a>
		    			<a href="#" class="pink-link">TỰ TIN LÀM CHA MẸ</a>
		    			<ul>
		    				<li>Dành cho những gia đình có bé từ 0 - 12 tháng tuổi.</li>
							<li>Hàng triệu gia đình trên 70 quốc gia và vùng lãnh thổ khắp thế giới đã tham gia mô hình lớp học của IAIM.</li>
		    			</ul>
		    			<button class="btn btn-blue btn-more"><a href="{{ url('/lop-hoc-cham-yeu-thuong') }}">TÌM HIỂU THÊM</a></button>
		    			<div class="clearfix"></div>
		    			<form id="frmReceiveBook">
		    				<p class="text-left">NHẬN NGAY TOÀN BỘ THÔNG TIN KHÓA HỌC VỚI ƯU ĐÃI HẤP DẪN CHO BỐ MẸ</p>
		    				<div class="form-group">
	    						<input type="text" name="phone" class="form-control receive-book positive-number" placeholder="Số điện thoại">
	    						<input type="text" name="email" class="form-control receive-book" placeholder="Email">
	    						<button class="btn btn-blue btn-receive-book">GỬI</button>
	    						<div class="receive-book-error"></div>
	    					</div>
		    			</form>
	    			</div>

	    		</div>
    		</div>
		{{-- advantage-massage --}}
	    	<div class="row advantage-massage">
	    		<div class="center-container">
		    		<div class="col-sm-12 col-md-4 col-lg-4">
		    			<div class="advantage-text"></div>
		    			<div class="advantage-block advantage-1">
		    				<p class="title">Tự tin<br/>làm Cha Mẹ</p>
		    				<p class="desc">“LÀM CHA MẸ” là “nghề” thiêng liêng nhất, nhưng khó khăn nhất mà mỗi chúng ta cần đảm nhận trong đời.</p>
		    				<a href="{{ url('/loi-ich-cua-viec-massage-cho-be') }}">XEM CHI TIẾT</a>
		    			</div>
		    		</div>
		    		<div class="col-sm-12 col-md-4 col-lg-4">
		    			<div class="advantage-block advantage-2">
		    				<p class="title">Kết nối<br/>yêu thương</p>
		    				<p class="desc">"Yêu thương" là sẵn có. "Kết nối yêu thương" là việc cần phải nuôi dưỡng, trau dồi. Massage cho bé giúp Bạn hiểu bé yêu hơn, hiểu những khả năng của bản thân hơn trong vai trò người-làm-cha-làm-mẹ.</p>
		    				<a href="{{ url('/loi-ich-cua-viec-massage-cho-be') }}">XEM CHI TIẾT</a>
		    			</div>
		    			<div class="advantage-block advantage-3">
		    				<p class="title">Kích thích tăng trưởng<br/>và phát triển não bộ</p>
		    				<p class="desc">Massage là một trải nghiệm đòi hỏi sự tham gia của rất nhiều cơ quan cảm giác và vận động. </p>
		    				<a href="{{ url('/loi-ich-cua-viec-massage-cho-be') }}">XEM CHI TIẾT</a>
		    			</div>
		    		</div>
		    		<div class="col-sm-12 col-md-4 col-lg-4">
		    			<div class="advantage-block advantage-4">
		    				<p class="title">Tăng cường<br/>hệ miễn dịch</p>
		    				<p class="desc">Tiếp xúc "Da kề da" giúp bé thu nạp các chủng vi khuẩn quen thuộc từ làn da Cha/Mẹ, đồng thời cũng nhận được kháng thể cần thiết cho sự sinh tồn của bản thân</p>
		    				<a href="{{ url('/loi-ich-cua-viec-massage-cho-be') }}">XEM CHI TIẾT</a>
		    			</div>
		    			<div class="advantage-block advantage-5">
		    				<p class="title">Giảm đau<br/>và thư giãn</p>
		    				<p class="desc">Con trẻ ngay từ lúc chào đời, và trong quá trình lớn lên, đặc biệt trong những năm tháng đầu đời phải trải qua nhiều nỗi đau: sinh lý và tâm lý...</p>
		    				<a href="{{ url('/loi-ich-cua-viec-massage-cho-be') }}">XEM CHI TIẾT</a>
		    			</div>
		    		</div>
		    	</div>
	    	</div>
    	{{-- certificate-block --}}
    		<div class="row certificate-block">
    			<div class="center-container">
	    			<div class="col-sm-12 col-md-6 col-lg-6">
	    				<div class="sumanng-text"></div>
	    				<p class="text-left desc">
	    					Sứ mạng của IAIM là thúc đẩy sự gắn kết yêu thương, nuôi dưỡng nhân cách và sức khoẻ cho bé yêu, thông qua đào tạo, giáo dục và nghiên cứu để Cha Mẹ hay những người cấp dưỡng trực tiếp và bản thân trẻ được yêu thương, được tổn trọng trong mọi cộng đồng trên toàn thế giới.
	    				</p>
	    			</div>
	    			<div class="col-sm-12 col-md-6 col-lg-6">
	    				<div class="certificate"></div>
	    			</div>
    			</div>
			</div>
		{{-- customer message --}}
    		<div class="row customer-block">
    			<div class="row bg-top"></div>
    			<div class="center-container">
	    			<div class="col-sm-5 bg-text"></div>
	    			<div class="col-sm-7">
	    				<div class="row customer-slick">
	    					<div class="col-sm-12 col-md-6 customer-item">
	    						<div class="row p-l-0 name-wrap">
	    							<img src="{{ asset(WEB.'/images/temp/thanh-trang.jpg') }}" alt="{{ IMG_ALT }}">
	    							<div class="name">Chị <br/>Thanh Trang</div>
	    						</div>
	    						<p class="comment">
	    							Điều đặc biệt mà mẹ Bon thích nhất là trong khi massage, có một “bạn trẻ” tên gọi là hoocmone oxytocin được tiết ra ở cả em bé và cha mẹ. Oxytocin còn có tên gọi khác là hormon "hạnh phúc" bởi nó tăng cường mối liên kết tình cảm giữa con người với nhau và đem đến cảm giác được yêu thương hạnh phúc. Điều này có nghĩa là không chỉ con trẻ được lợi mà cha mẹ cũng được “hạnh phúc lây”.
	    						</p>
	    						<div class="rate-wrap">
	    							<i class="fas fa-star"></i>
	    							<i class="fas fa-star"></i>
	    							<i class="fas fa-star"></i>
	    							<i class="fas fa-star"></i>
	    							<i class="fas fa-star"></i>
	    						</div>
	    					</div>
	    					<div class="col-sm-12 col-md-6 customer-item">
	    						<div class="row p-l-0 name-wrap">
	    							<img src="{{ asset(WEB.'/images/temp/bui-nga.jpg') }}" alt="{{ IMG_ALT }}">
	    							<div class="name">Chị <br/>Bùi Nga</div>
	    						</div>
	    						<p class="comment">
	    							Đô Đô đến lớp massage gặp được các bạn rất vui, Đô Đô đã có những trải nghiệm rất thú vị cùng Mẹ. Mẹ cũng được giao lưu với các gia đình khác học hỏi kinh nghiệm nuôi con, được chương trình của Touchie Feelie cung cấp nhiều kiến thức hữu ích. Đô Đô ngủ ngon ăn, ăn khoẻ hơn và yêu Mẹ hơn rất nhiều."
	    						</p>
	    						<div class="rate-wrap">
	    							<i class="fas fa-star"></i>
	    							<i class="fas fa-star"></i>
	    							<i class="fas fa-star"></i>
	    							<i class="fas fa-star"></i>
	    							<i class="fas fa-star"></i>
	    						</div>
	    					</div>
	    				</div>
	    			</div>
    			</div>
    			<div class="row bg-bottom"></div>
    		</div>
		{{-- booking-block --}}
    		<div class="row booking-block">
    			<div class="center-container">
					<div class="col-sm-0 col-md-6 h-o-m">
	    				<div class="baby"></div>
	    			</div>
					<div class="col-sm-12 col-md-6">
	    				<div class="thamgia"></div>
	    				<div class="from-wrap">
	    					<p class="text-left desc">Khai giảng hàng tuần tại các Chi nhánh của Touchie Feelie:<br/> Quận 3, Quận Thủ Đức</p>
	    					{{-- <p class="text-left title">Quý khách vui lòng cho biết thông tin</p> --}}
	    					<p class="text-left title">Bố/Mẹ chỉ cần hoàn tất vài bước căn bản sau:</p>
		    				<form id="frmBooking" method="POST">
		    					<div class="form-group">
		    						<select name="gender" class="form-control selectpicker" data-width="150px" data-style="btn-info">
		    							<option value="0" selected="selected">Chị</option>
		    							<option value="1">Anh</option>
		    						</select>
		    					</div>
		    					<div class="form-group">
		    						<input type="text" name="fullname" class="form-control" placeholder="Tên Bố/Mẹ">
		    					</div>
		    					<div class="form-group">
		    						<input type="text" name="phone" class="form-control positive-number" placeholder="Số điện thoại">
		    					</div>
		    					<div class="form-group">
		    						<button class="btn btn-blue btn-booking">ĐẶT LỊCH HẸN</button>
		    					</div>
		    				</form>
		    			</div>
	    			</div>
    			</div>
    		</div>
    </section>
@endsection	