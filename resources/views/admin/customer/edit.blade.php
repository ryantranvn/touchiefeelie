@extends('admin.partials.sub_layout')

@section('js')
	<script src="{{ asset('plugins/jquery.date-dropdowns.min.js') }}"></script>
@endsection

@section('action')
	<div class="row">
		<div class="col-sm-12">
			<form id="frmCustomer" action="{{ url('/'.ADMIN.'/'.$controller.'/'.$customer->customer_id) }}" method="POST">
				{{ csrf_field() }}
                {{ method_field('PATCH') }}

                <div class="col-xs-12 col-sm-5">
                	<h4 class="text-primary">Thông tin của Con</h4>
	                <div class="row">
	                    <div class="col-sm-12">
	                    	<div class="form-group">
								<label for="title">Tên Con :<span class="require-sign">*</span></label>
								<div class="form-line">
									<input type="text" name="child_name" class="form-control" value="{{ $customer->child_name }}" />
								</div>
							</div>
	                    </div>
	                </div>
	                <div class="row">
	                    <div class="col-sm-12">
	                    	<div class="form-group">
								<label for="title">Ngày sinh : <span class="require-sign">*</span></label>
								<input type="text" name="child_birthday" class="form-control birthday" value="{{ $customer->child_birthday }}" />
							</div>
	                    </div>
	                </div>
	                <div class="row">
	                    <div class="col-sm-6">
	                    	<div class="form-group">
								<label for="title">Tháng tuổi :<span class="require-sign">*</span></label>
								<div class="form-line">
									<input type="text" name="child_month" class="form-control positive-number" value="{{ $customer->child_month }}" />
								</div>
							</div>
	                    </div>
	                    <div class="col-sm-6">
	                    	<div class="form-group">
								<label for="title">Cân nặng :<span class="require-sign">*</span></label>
								<div class="form-line">
									<input type="text" name="child_weight" class="form-control" value="{{ $customer->child_weight }}" />
								</div>
							</div>
	                    </div>
	                </div>
	                <h4 class="text-primary">Thông tin của Ba và Mẹ</h4>
                	<div class="row">
	                    <div class="col-sm-8">
	                    	<div class="form-group">
								<label for="title">Tên Ba :</label>
								<div class="form-line">
									<input type="text" name="father_name" class="form-control" value="{{ $customer->father_name }}" />
								</div>
							</div>
	                    </div>
	                    <div class="col-sm-4">
	                    	<div class="form-group">
	                    		<label for="title">Điện thoại :</label>
								<div class="form-line">
									<input type="text" name="father_tel" class="form-control positive-number" value="{{ $customer->father_tel }}" />
								</div>
							</div>
	                    </div>
	                </div>
	                <div class="row">
	                    <div class="col-sm-8">
	                    	<div class="form-group">
								<label for="title">Tên Mẹ :</label>
								<div class="form-line">
									<input type="text" name="mother_name" class="form-control" value="{{ $customer->mother_name }}" />
								</div>
							</div>
	                    </div>
	                    <div class="col-sm-4">
	                    	<div class="form-group">
	                    		<label for="title">Điện thoại :</label>
								<div class="form-line">
									<input type="text" name="mother_tel" class="form-control positive-number" value="{{ $customer->mother_tel }}" />
								</div>
							</div>
	                    </div>
	                </div>
	                <div class="row">
	                    <div class="col-sm-12">
	                    	<div class="form-group">
								<label for="title">Địa chỉ: <span class="require-sign">*</span></label>
								<div class="form-line">
									<input type="text" name="address" class="form-control" value="{{ $customer->address }}" />
								</div>
							</div>
	                    </div>
	                </div>
	                <h4 class="text-primary">Thông tin bổ sung</h4>
	                <div class="row">
	                    <div class="col-sm-12">
	                    	<div class="form-group">
								<label for="title">Người chăm sóc : </label>
								<div class="form-line">
									<input type="text" name="guardian_name" class="form-control" value="{{ $customer->guardian_name }}" />
								</div>
							</div>
	                    </div>
	                </div>
	                <div class="row">
	                    <div class="col-sm-12">
	                    	<div class="form-group">
								<label for="title">Lịch sử bệnh lý : <span class="require-sign">*</span></label>
								<div class="form-line">
									<input type="text" name="pathological" class="form-control" value="{{ $customer->pathological }}" />
								</div>
							</div>
	                    </div>
	                </div>
	                <div class="row">
	                    <div class="col-sm-12">
	                    	<div class="form-group">
								<label for="title">Bạn hoặc Con đã có những trải nghiệm massage :</label>
								<div class="form-line">
									<input type="text" name="feeling_experience" class="form-control" value="{{ $customer->feeling_experience }}" />
								</div>
							</div>
	                    </div>
	                </div>
	                <div class="row">
	                    <div class="col-sm-12">
	                    	<div class="form-group">
								<label for="title">Mong muốn đạt được điều gì thông qua lớp học : </label>
								<div class="form-line">
									<input type="text" name="desire" class="form-control" value="{{ $customer->desire }}" />
								</div>
							</div>
	                    </div>
	                </div>
	                <div class="row">
	                    <div class="col-sm-12">
	                    	<div class="form-group">
								<label for="title">Bạn nghe từ đâu về lớp học này : <span class="require-sign">*</span></label>
								<div class="form-line">
									<input type="text" name="know_from" class="form-control" value="{{ $customer->know_from }}" />
								</div>
							</div>
	                    </div>
	                </div>
                </div>
                <div class="col-xs-0 col-sm-2"></div>
                <div class="col-xs-12 col-sm-5">
                	<h4 class="text-primary">Thông tin dịch vụ</h4>
                	<div class="row">
                		<div class="col-sm-12">
		                	<div class="form-group">
		                		<label for="title">Chi nhánh :</label>
								<div class="form-group branch-wrap btn-select-wrap m-b-0">
			    				@php ($branches = branch())
								@foreach ($branches as $key => $branch)
									<input type="text" class="form-control btn-select @if ($customer->branch_id == $key) active @endif" data-value="{{ $key }}" value="{{ $branch['full'] }}" readonly />
								@endforeach
			    				<input type="text" name="branch" class="hidden-input btn-select-value" value="{{ $customer->branch_id }}" />
			    				</div>
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col-sm-12">
		                	<div class="form-group">
		                		<label for="title">Khung giờ :</label>
		                		<div class="form-group time-wrap btn-select-wrap">
								@php ($timeFrames = timeFrame())
								@foreach ($timeFrames as $key => $timeFrame)
									<input type="text" class="form-control btn-select @if ($customer->time_frame_id == $key) active @endif" data-value="{{ $key }}" value="{{ $timeFrame['full'] }}" readonly />
								@endforeach
			    				<input type="text" name="time_frame" class="hidden-input btn-select-value" value="{{ $customer->time_frame_id }}" />
		    					</div>
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col-sm-12">
							<div class="form-group">
		                		<label for="title">Ghi chú :</label>
		                		<div class="form-line">
									<textarea name="note" rows="5" class="form-control"></textarea>
								</div>
							</div>
						</div>
					</div>
                </div>

                <div class="row">
                    <div class="col-sm-12 align-right">
                        <div class="col-sm-12">
                            <div class="col-sm-12">
                                <a href="{{ url(ADMIN.'/'.$controller) }}" class="btn bg-grey">{{ trans('lang.btn_cancel') }}</a>
                                <button type="submit" class="btn btn-success m-l-10 btnSubmit">{{ trans('lang.btn_submit') }}</button>
                            </div>
                        </div>
                    </div>
                </div>
			</form>
		</div>
	</div>
@endsection