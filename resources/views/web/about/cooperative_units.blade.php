@extends('layouts.web')
	
@section('css')
@endsection

@section('js')
@endsection

@section('content')
	@include('web.partials.banner')
    
    <section class="content cooperative_units">
    	<div class="row khoanh-khac">
    		<div class="center-container">
    			<div class="col-sm-10">
    				<p class="blue-text">Touchie Feelie được các đơn vị hợp tác trợ giá <br/>cho các dịch vụ sau:</p>
    				<div class="line"></div>
    			</div>
    			<div class="col-sm-2"></div>
    			<div class="col-sm-7 left-col">
    				<div class="text-khoanh-khac"></div>
    				<p class="desc">Touchie Feelie Studio cùng ba mẹ và bé yêu lưu giữ những khoảnh khắc đáng nhớ nhất và quý giá nhất trong chặng đường cùng con yêu khôn lớn...</p>
    			</div>
    			<div class="col-sm-5 right-col"></div>
    		</div>
    	</div>
    	<div class="row dich-vu h-o-m">
    		<div class="center-container">
    			<div class="col-sm-9 left-col">
    				<div class="row m-0 relative">
	    				<table class="tblPackage" cellpadding="0" cellspacing="0">
	    					<tr>
	    						<td>
	    							<p class="blue-text">Dịch vụ<br/>chụp hình Studio</p>
	    						</td>
	    						<td class="colPackage">BASIC</td>
	    						<td class="colPackage">STANDARD</td>
	    					</tr>
	    					<tr>
	    						<td><i class="fas fa-circle"></i>Chụp tại Touchie Feelie</td>
	    						<td class="colPackage">2,799,000</td>
	    						<td class="colPackage">3,990,000</td>
	    					</tr>
	    					<tr>
	    						<td><i class="fas fa-circle"></i>Thời gian chụp</td>
	    						<td class="colPackage">120 phút</td>
	    						<td class="colPackage">180 phút</td>
	    					</tr>
	    					<tr>
	    						<td><i class="fas fa-circle"></i>Số lượng bé</td>
	    						<td class="colPackage">1 bé</td>
	    						<td class="colPackage">1 bé</td>
	    					</tr>
	    					<tr>
	    						<td><i class="fas fa-circle"></i>Phụ thu bé thứ 2 trở lên (0- 12 tháng)</td>
	    						<td class="colPackage">500,000/bé </td>
	    						<td class="colPackage">500,000/bé </td>
	    					</tr>
	    					<tr>
	    						<td><i class="fas fa-circle"></i>Phụ thu bé thứ 2 trở lên (trên 12 tháng)</td>
	    						<td class="colPackage">800,000/bé</td>
	    						<td class="colPackage">800,000/bé</td>
	    					</tr>
	    					<tr>
	    						<td><i class="fas fa-circle"></i>Toàn bộ file hình gốc được gửi qua email</td>
	    						<td class="colPackage"><i class="fas fa-check"></i></td>
	    						<td class="colPackage"><i class="fas fa-check"></i></td>
	    					</tr>
	    					<tr>
	    						<td><i class="fas fa-circle"></i>File hình được hiệu chỉnh photoshop</td>
	    						<td class="colPackage">20 tấm</td>
	    						<td class="colPackage">20 tấm</td>
	    					</tr>
	    				</table>
	    				<div class="bg-package-box-wrap">
	    					<div class="bg-box-standard"></div>
		    				<div class="bg-box-basic"></div>
		    			</div>
		    		</div>
		    		<div class="row m-0 relative">
	    				<p class="blue-text p-b-0">Tặng thêm</p>
	    				<table class="tblPackage tblAddition" cellpadding="0" cellspacing="0">
	    					<tr>
	    						<td><i class="fas fa-circle"></i>1 album dễ thương 20 trang</td>
	    						<td class="colPackage"><i class="fas fa-check"></i></td>
	    						<td class="colPackage"><i class="fas fa-check"></i></td>
	    					</tr>
	    					<tr>
	    						<td><i class="fas fa-circle"></i>(đăng ký trước ngày 01.12.2018) 1 hình ép gỗ size 40x60cm</td>
	    						<td class="colPackage"><i class="fas fa-check"></i></td>
	    						<td class="colPackage"><i class="fas fa-check"></i></td>
	    					</tr>
	    					<tr>
	    						<td><i class="fas fa-circle"></i>1 hình ép gỗ size 50x70cm</td>
	    						<td class="colPackage"></td>
	    						<td class="colPackage"><i class="fas fa-check"></i></td>
	    					</tr>
	    				</table>
	    				<div class="bg-addition-box-wrap">
	    					<div class="bg-box-white"></div>
	    					<div class="bg-box-white"></div>
		    			</div>
	    			</div>
    			</div>
    			<div class="col-sm-3 right-col">
    				<p class="desc">Bé thứ 2 trở lên, cùng là thành viên của gia đình, sẽ chụp chung với bé chụp chính và thời gian chụp sẽ giao động 20-25 phút.</p>
					<p class="desc">Bé thứ 2 trở lên, cùng là thành viên của gia đình, sẽ không nhận được quà tặng như bé chụp chính.</p>
    			</div>
    		</div>
    	</div>
    	<div class="row dich-vu h-o-d">
            <img src="{{ asset(WEB.'/images/cac-don-vi-hop-tac.jpg') }}" alt="{{ IMG_ALT }}">
        </div>
    	<div class="row tham-kham">
    		<div class="center-container">
    			<div class="col-sm-5 left-col"></div>
    			<div class="col-sm-7 right-col">
    				<p class="pink-text">Thăm khám</p>
    				<p class="desc">Tại Touchie Feelie, Bé yêu sẽ được thăm khám bởi Bác sỹ Nhi khoa nhiều kinh nghiệm, hãy liên hệ để đặt lịch hẹn Bạn nhé</p>
    				<p class="desc font-bold text-uppercase c-pink-text">KHÁM SỨC KHOẺ ĐỊNH KỲ</p>
    				<ul class="bullet-star">
						<li><i class="fas fa-star"></i>Thăm khám đối tượng Trẻ em lành mạnh (tức các trẻ khoẻ mạnh, để tránh lây nhiễm chéo*)</li>
						<li><i class="fas fa-star"></i>Tư vấn chăm sóc sức khoẻ theo từng giai đoạn phát triển của Bé.</li>
    				</ul>
    				<p class="desc font-bold text-uppercase c-pink-text">KHÁM HẬU SẢN</p>
    				<ul class="bullet-star">
						<li><i class="fas fa-star"></i>Khám và tư vấn những vấn đề của MẸ sau sanh</li>
						<li><i class="fas fa-star"></i>Khám và tư vấn chăm sóc sơ sinh toàn diện cho BÉ</li>
						<li><i class="fas fa-star"></i>Tư vấn những vấn đề trong mối liên kết CHA - MẸ - BÉ.</li>
    				</ul>
    				<p class="desc">
    					Bạn sẽ được giải đáp tất tần tật MỘT CÁCH KHOA HỌC & TOÀN DIỆN về cách cho con bú, làm thế nào để có đủ sữa mẹ, ọc sữa, vàng da sơ sinh, chăm sóc rốn, vệ sinh mắt mũi miệng cho con yêu, chế độ dinh dưỡng và sinh hoạt của bạn,.... Và hơn thế nữa là giải tỏa những hoang mang, khó khăn mà bà mẹ sau sanh đang mang vác một mình...
    				</p>
    				<p class="desc">
    					Lưu ý: <br/>
						Cha/Mẹ cũng có thể liên hệ số hotline của Touchie Feelie 0707 423 807 để đặt lịch hẹn khám tại phòng khám TS. BS. Phạm Diệp Thuỳ Dương (163 Nguyễn Văn Trỗi phường 11 Quận Phú Nhuận TP. HCM)
    				</p>
    			</div>    			
    		</div>
    	</div>
	</section>
@endsection	