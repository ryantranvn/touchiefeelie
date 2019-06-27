<div id="subnav" class="h-o-m">
	<ul>
	@if ($controller == 'touchiefeelieclass')
		<li class="@if ($action == 'utilityMassage') active @endif">
			<a href="{{ url('/loi-ich-cua-viec-massage-cho-be') }}">Lợi ích của việc massage cho bé yêu</a>
		</li>
		<li class="@if ($action == 'classInformation') active @endif">
			<span class="h-o-m">&#124;</span>
			<a href="{{ url('/thong-tin-lop-hoc') }}">Thông tin lớp học "Chạm yêu thương"</a>
		</li>
		<li class="@if ($action == 'product') active @endif">
			<span class="h-o-m">&#124;</span>
			<a href="{{ url('/san-pham-di-kem') }}">Sản phẩm đi kèm</a>
		</li>
		<li class="@if ($action == 'library') active @endif">
			<span class="h-o-m">&#124;</span>
			<a href="{{ url('/thu-vien') }}">Thư viện</a>
		</li>
	@elseif ($controller == 'about')
		<li class="@if ($action == 'iaim') active @endif">
			<a href="{{ url('/hiep-hoi-massage-so-sinh-va-nhu-nhi-quoc-te-iaim') }}">Hiệp hội Massage Sơ sinh và Nhũ nhi Quốc tế IAIM</a>
		</li>
		<li class="@if ($action == 'cooperativeUnits') active @endif">
			<span class="h-o-m">&#124;</span>
			<a href="{{ url('/cac-don-vi-hop-tac') }}">Các đơn vị hợp tác [Studio, Clinic]</a>
		</li>
		<li class="@if ($action == 'supportUnits') active @endif">
			<span class="h-o-m">&#124;</span>
			<a href="{{ url('/cac-don-vi-ho-tro') }}">Các đơn vị hỗ trợ chuyên môn </a>
		</li>
	@endif
	</ul>
</div>
