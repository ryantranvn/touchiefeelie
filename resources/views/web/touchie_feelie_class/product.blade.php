@extends('layouts.web')
	
@section('css')
@endsection

@section('js')
@endsection

@section('content')
	@include('web.partials.banner')
    
    <section class="content product">
    	<div class="center-container">
    		<div class="row">
    			<p class="pull-left blue-text">Sản phẩm đi kèm</p>
    			<span class="line pull-left"></span>
    		</div>
    		<div class="row product-block">
    			<div class="col-sm-12 col-md-5 left-col dau-massage"></div>
    			<div class="col-sm-12 col-md-7 right-col product-wrap">
    				<p class="product-title">dầu massage cho bé</p>
    				<p class="product-status"><strong>Tình trạng:</strong> Còn hàng  |  <strong>Mã SP:</strong> Đang cập nhật</p>
    				<p class="product-prize">
    					<span class="prize format-currency">40.000 </span>
    					<span class="unit">đ</span>
    					<span class="hidden-input prize-per-unit">40000</span>
    				</p>
    				<p class="product-desc">Dầu ép lạnh, ăn được, an toàn cho trẻ sơ sinh và trẻ nhỏ. Touchie Feelie giới thiệu đến Bạn <span class="c-blue-text">dầu hạt nho, dầu hướng dương và dầu dừa</span></p>
    				<div class="product-type-wrap select-wrap">
    					<label>Loại</label>
    					<span class="selected-item">Dầu dừa</span>
    					<ul class="select-list">
    						<li data-value="dau_dua">Dầu dừa</li>
    						<li data-value="dau_huong_duong">Dầu hướng dương</li>
    						<li data-value="dau_nho">Dầu nho</li>
    					</ul>
    					<i class="fas fa-angle-down"></i>
    				</div>
    				<div class="product-capacity-wrap select-wrap">
    					<label>Dung tích</label>
    					<span class="selected-item">30ml</span>
    					<ul class="select-list">
    						<li>30ml</li>
    					</ul>
    					<i class="fas fa-angle-down"></i>
    				</div>
    				<div class="product-quatity-wrap">
    					<i class="fas fa-caret-left btn-down"></i>
    					<span class="quantity">1</span>
    					<i class="fas fa-caret-right btn-up"></i>
    				</div>
    				<div class="product-combo-wrap">
    					<button class="btn btn-default">Combo 3 chai (đủ loại, mỗi chai 30ml): 120.000 đ</button>
    					<button class="btn btn-default">Combo 6 chai (đủ loại, mỗi chai 30ml): 215.000 đ</button>
    				</div>
                    <div class="order-link">
                        <a target="_blank" href="http://m.me/chamyeuthuongTF" class="btn btn-primary">Đặt hàng</a>
                    </div>
    				<div class="product-user-guide">
    					<p>
    						<u>HƯỚNG DẪN SỬ DỤNG:</u><br/>
							Ngưng sử dụng và tham khảo ý kiến Bác sỹ ngay khi có tác dụng không mong muốn.
						</p>
    				</div>
    			</div>
    		</div>
    		<div class="row product-block">
    			<div class="col-sm-5 left-col khan-bong"></div>
    			<div class="col-sm-7 right-col product-wrap">
    				<p class="product-title">Khăn bông cao cấp</p>
    				<p class="product-status"><strong>Tình trạng:</strong> Còn hàng  |  <strong>Mã SP:</strong> KM02</p>
    				<p class="product-prize">
    					<span class="prize format-currency">149.000 </span>
    					<span class="unit">đ</span>
    					<span class="hidden-input prize-per-unit">149000</span>
    				</p>
    				<p class="product-desc">
    					Khăn bông cao cấp được sản xuất từ nguồn nguyên liệu sợi bông organic (bông hữu cơ) được trồng bằng phương pháp 100% hữu cơ. Khăn mềm mại, thấm hút tốt, đặc biệt an toàn cho làn da của bé, và làn da dễ bị mẫn cảm.
						Sản xuất tại Tổng công ty CP Phong Phú
					</p>
    				<div class="product-type-wrap select-wrap">
    					<label>Màu</label>
    					<span class="selected-item">Hồng - Cotton hữu cơ</span>
    					<ul class="select-list">
    						<li data-value="dau_dua">Hồng - Cotton hữu cơ</li>
    					</ul>
    					<i class="fas fa-angle-down"></i>
    				</div>
    				<div class="product-capacity-wrap select-wrap">
    					<label>Kích thước</label>
    					<span class="selected-item">65 x 130cm, 368gr</span>
    					<ul class="select-list">
    						<li>65 x 130cm, 368gr</li>
    					</ul>
    					<i class="fas fa-angle-down"></i>
    				</div>
    				<div class="product-quatity-wrap">
    					<i class="fas fa-caret-left btn-down"></i>
    					<span class="quantity">1</span>
    					<i class="fas fa-caret-right btn-up"></i>
    				</div>
    				<div class="product-combo-wrap">
    					<button class="btn btn-default">Combo 3 chai(đủ loại, mỗi chai 30ml): 120.000 đ</button>
    					<button class="btn btn-default">Combo 6 chai(đủ loại, mỗi chai 30ml): 215.000 đ</button>
    				</div>
    				<div class="product-user-guide">
    					<p>
    						<u>HƯỚNG DẪN SỬ DỤNG:</u><br/>
							Sản phẩm mua về nên giặt trước khi sử dụng.<br/>
							Không giặt với chất tẩy mạnh.<br/>
							Khi sử dụng máy giặt nên giặt túi giặt áp lực nhẹ và giặt riêng<br/> với sản phẩm màu.<br/> 
							Không phơi dưới nắng gắt.
						</p>
    				</div>
    			</div>
    		</div>
		</div>
    </section>
@endsection	