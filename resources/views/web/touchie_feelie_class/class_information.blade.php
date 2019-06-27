@extends('layouts.web')
	
@section('css')
@endsection

@section('js')
@endsection

@section('content')
	@include('web.partials.banner')
    
    <section class="content class-information">
    	<div class="center-container">
    		<div class="row">
    			<div class="col-md-3 col-sm-12"></div>
    			<div class="col-md-6 col-sm-12 border-bottom">
    				<p class="page-title pink-text">Các gói dịch vụ</p>
    			</div>
    			<div class="col-md-3 col-sm-12"></div>
    		</div>
    		<div class="row">
    			<div class="col-md-12 col-sm-12">
    				<p class="desc">Lớp học “Chạm yêu thương” tại các chi nhánh của Touchie Feelie, gồm 5 ngày học   (trong 4 tuần + 1 ngày cuối tuần),<br/>
					mỗi tuần 1 buổi, mỗi buổi kéo dài 45 - 60 phút, được các Instructors trực thuộc IAIM trực tiếp thao giảng.
					</p>
    			</div>
    			<div class="col-md-12 col-sm-12 h-o-m">
    				<table class="tblPackage" cellpadding="0" cellspacing="0">
    					<tr>
    						<td></td>
    						<td class="colPackage">BASIC</td>
    						<td class="colPackage">STANDARD</td>
    						<td class="colPackage">PREMIUM <span class="c-pink-text">**</span></td>
    					</tr>
    					<tr>
    						<td><i class="fas fa-circle"></i>Số lượng gia đình tham gia lớp học</td>
    						<td class="colPackage">4 – 7 gia đình</td>
    						<td class="colPackage">4 – 7 gia đình <span class="note-star">*</span></td>
    						<td class="colPackage">1 gia đình <span class="note-star">**</span></td>
    					</tr>
                        <tr>
                            <td><i class="fas fa-circle"></i>Kỹ năng massage cho Bé yêu</td>
                            <td class="colPackage"><i class="fas fa-check"></i></td>
                            <td class="colPackage"><i class="fas fa-check"></i></td>
                            <td class="colPackage"><i class="fas fa-check"></i></td>
                        </tr>
                        <tr>
                            <td><i class="fas fa-circle"></i>Giải mã “tín hiệu” từ Con trẻ</td>
                            <td class="colPackage"><i class="fas fa-check"></i></td>
                            <td class="colPackage"><i class="fas fa-check"></i></td>
                            <td class="colPackage"><i class="fas fa-check"></i></td>
                        </tr>
                        <tr>
                            <td><i class="fas fa-circle"></i>Tạo ra những khoảnh khắc đặc biệt bên Con</td>
                            <td class="colPackage"><i class="fas fa-check"></i></td>
                            <td class="colPackage"><i class="fas fa-check"></i></td>
                            <td class="colPackage"><i class="fas fa-check"></i></td>
                        </tr>
                        <tr>
                            <td><i class="fas fa-circle"></i>Giao lưu chia sẻ kinh nghiệm nuôi dạy con</td>
                            <td class="colPackage"><i class="fas fa-check"></i></td>
                            <td class="colPackage"><i class="fas fa-check"></i></td>
                            <td class="colPackage"><i class="fas fa-check"></i></td>
                        </tr>
    					<tr>
    						<td><i class="fas fa-circle"></i>Không gian thư giãn, thân mật và ấm áp</td>
    						<td class="colPackage"><i class="fas fa-check"></i></td>
    						<td class="colPackage"><i class="fas fa-check"></i></td>
    						<td class="colPackage"><i class="fas fa-check"></i></td>
    					</tr>
    					<tr>
    						<td><i class="fas fa-circle"></i>Thức ăn nhẹ và nước uống được chăm chút tỉ mỉ mỗi ngày.</td>
    						<td class="colPackage"><i class="fas fa-check"></i></td>
    						<td class="colPackage"><i class="fas fa-check"></i></td>
    						<td class="colPackage"><i class="fas fa-check"></i></td>
    					</tr>
    					<tr>
    						<td><i class="fas fa-circle"></i>1 giấy chứng nhận và ảnh tốt nghiệp lớp học</td>
    						<td class="colPackage"><i class="fas fa-check"></i></td>
    						<td class="colPackage"><i class="fas fa-check"></i></td>
    						<td class="colPackage"><i class="fas fa-check"></i></td>
    					</tr>
    					<tr>
    						<td><i class="fas fa-circle"></i>Tài liệu dành cho Ba Mẹ <strong>(basic handout)</strong></td>
    						<td class="colPackage"><i class="fas fa-check"></i></td>
    						<td class="colPackage"><i class="fas fa-check"></i></td>
    						<td class="colPackage"><i class="fas fa-check"></i></td>
    					</tr>
                        <tr>
                            <td><i class="fas fa-circle"></i>1 lọ dầu massage 30 ml, 1 đôi vớ người lớn</td>
                            <td class="colPackage"><i class="fas fa-check"></i></td>
                            <td class="colPackage"><i class="fas fa-check"></i></td>
                            <td class="colPackage"><i class="fas fa-check"></i></td>
                        </tr>
    				</table>
    				<div class="bg-package-box-wrap">
    					<div class="bg-box-premium"></div>
    					<div class="bg-box-standard"></div>
	    				<div class="bg-box-basic"></div>
	    			</div>
    			</div>
                <div class="col-sm-12 h-o-d">
                    <img src="{{ asset(WEB.'/images/thong-tin-lop-hoc.jpg') }}" alt="{{ IMG_ALT }}">
                </div>
    		</div>
    		<div class="row h-o-m">
    			<div class="col-md-12 col-sm-12 text-left">
    				<p class="page-title blue-text">Tặng thêm</p>
    			</div>
    			<div class="col-md-12 col-sm-12">
    				<table class="tblPackage tblAddition" cellpadding="0" cellspacing="0">
                        <tr>
                            <td><i class="fas fa-circle"></i>Trở thành thành viên Facebook group <strong>“Nghề làm Cha Mẹ”</strong> của <span class="c-blue">TS. BS. Phạm Diệp Thùy Dương và BS. Đào Nguyễn Phương Linh</span>, giải đáp online các thắc mắc về vấn đề chăm sóc trẻ</td>
                            <td class="colPackage"><i class="fas fa-check"></i></td>
                            <td class="colPackage"><i class="fas fa-check"></i></td>
                            <td class="colPackage"><i class="fas fa-check"></i></td>
                        </tr>
						<tr>
    						<td><i class="fas fa-circle"></i>Tài liệu đặc biệt dành cho Cha Mẹ <strong>(premium handout)</strong></td>
    						<td class="colPackage"></td>
    						<td class="colPackage"><i class="fas fa-check"></i></td>
    						<td class="colPackage"><i class="fas fa-check"></i></td>
    					</tr>
    					<tr>
    						<td><i class="fas fa-circle"></i>Thăm khám toàn diện và tư vấn chăm sóc bé yêu <span class="note-star">***</span></td>
    						<td class="colPackage"></td>
    						<td class="colPackage"><i class="fas fa-check"></i></td>
    						<td class="colPackage"><i class="fas fa-check"></i></td>
    					</tr>
    					<tr>
    						<td><i class="fas fa-circle"></i>Tặng 05 tấm ảnh lưu giữ khoảnh khắc, trong đó có 1 tấm rửa UV A5</td>
    						<td class="colPackage"></td>
    						<td class="colPackage"></td>
    						<td class="colPackage"><i class="fas fa-check"></i></td>
    					</tr>
    					<tr>
    						<td><i class="fas fa-circle"></i>Thẻ ưu tiên khám tại phòng khám TS. BS. Phạm Diệp Thùy Dương / BS. Đào Nguyễn Phương Linh </td>
    						<td class="colPackage"></td>
    						<td class="colPackage"></td>
    						<td class="colPackage"><i class="fas fa-check"></i></td>
    					</tr>
    				</table>
    				<div class="bg-addition-box-wrap">
    					<div class="bg-box-white"></div>
    					<div class="bg-box-white"></div>
	    				<div class="bg-box-white"></div>
	    			</div>
    			</div>
                <div class="col-md-12 col-sm-12">
                    <p></p>
                </div>
    		</div>
            <div class="row">
                <div class="col-sm-12">
                    <p class="text-left">(<span class="note-star">*</span>) Dành cho gói Standard và gói Premium, khi bỏ lỡ 1 buổi học (có lý do hợp lý và báo trước ít nhất 24 giờ) <br/>sẽ được bù tối đa 1 buổi vào lớp gần nhất khi xếp được thời khóa biểu thích hợp.</p>
                    <p class="text-left">(<span class="note-star">**</span>) Có thể mời thêm tối đa 2 gia đình cùng tham gia khóa học, phụ thu 500,000/gia đình, không bao gồm các mục Tặng thêm. </p>
                    <p class="text-left">(<span class="note-star">***</span>) 2 lần thăm khám và tư vấn chăm sóc bé yêu bởi Bác sỹ Nhi khoa nhiều kinh nghiệm (trước hoặc sau lớp học) theo lịch đặt hẹn.</p>
                </div>
            </div>
		</div>
    </section>
@endsection	