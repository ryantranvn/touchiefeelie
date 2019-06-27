@extends('admin.partials.sub_layout')

@section('action')
	<div class="row">
        <div class="col-sm-6 table-responsive">
        	<table class="table table-striped table-hover tbl-customer-detail">
        		<tbody>
        		<tr>
        			<td>Tên của bé</td>
        			<td>{{ $customer->child_name }}</td>
        		</tr>
        		<tr>
        			<td>Ngày sinh</td>
        			<td>{{ $customer->child_birthday }}</td>
        		</tr>
        		<tr>
        			<td>Số tháng</td>
        			<td>{{ $customer->child_month }}</td>
        		</tr>
        		<tr>
        			<td>Cân nặng</td>
        			<td>{{ $customer->child_weight }}</td>
        		</tr>
        		<tr>
        			<td>Lịch sử bệnh lý</td>
        			<td>{{ $customer->pathological }}</td>
        		</tr>
        		<tr>
        			<td>Chi nhánh</td>
        			<td>{{ $customer->branch }}</td>
        		</tr>
        		<tr>
        			<td>Khung giờ</td>
        			<td>{{ $customer->time_frame }}</td>
        		</tr>
        		<tr>
        			<td>Ghi chú</td>
        			<td>{{ $customer->note }}</td>
        		</tr>
        		</tbody>
        	</table>
    	</div>
    	<div class="col-sm-6 table-responsive">
        	<table class="table table-striped table-hover tbl-customer-detail">
        		<tr>
        			<td>Tên của ba</td>
        			<td>{{ $customer->father_name }}</td>
        		</tr>
        		<tr>
        			<td>Số điện thoại của ba</td>
        			<td>{{ $customer->father_tel }}</td>
        		</tr>
        		<tr>
        			<td>Tên của mẹ</td>
        			<td>{{ $customer->mother_name }}</td>
        		</tr>
        		<tr>
        			<td>Số điện thoại của mẹ</td>
        			<td>{{ $customer->mother_tel }}</td>
        		</tr>
        		<tr>
        			<td>Địa chỉ</td>
        			<td>{{ $customer->address }}</td>
        		</tr>
        		<tr>
        			<td>Người chăm sóc con (khác ba/mẹ)</td>
        			<td>{{ $customer->guardian_name }}</td>
        		</tr>
        	</table>
    	</div>
    </div>
	<div class="row">
    	<div class="col-sm-12 table-responsive">
        	<table class="table table-striped table-hover tbl-customer-detail">
        		<tr>
        			<td>Cảm nhận của Bạn/Con về trải nghiệm</td>
        			<td>{{ $customer->feeling_experience }}</td>
        		</tr>
        		<tr>
        			<td>Bạn mong muốn đạt được điều gì thông qua lớp học?</td>
        			<td>{{ $customer->desire }}</td>
        		</tr>
        		<tr>
        			<td>Bạn nghe từ đâu về lớp học này?</td>
        			<td>{{ $customer->know_from }}</td>
        		</tr>
        	</table>
    	</div>
    </div>
@endsection