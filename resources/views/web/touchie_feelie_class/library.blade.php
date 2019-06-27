@extends('layouts.web')
	
@section('css')
@endsection

@section('js')
@endsection

@section('content')
	@include('web.partials.banner')
    
    <section class="content library">
    	<div class="center-container tab-wrap">
    		<div class="row tab-items-wrap">
    			<ul>
    				<li class="tab-item active" data-id="sach-hay">Sách hay</li>
    				<li class="tab-item" data-id="cac-nghien-cuu-khoa-hoc">Các nghiên cứu khoa học</li>
    			</ul>
    		</div>
    		<div class="row tab-content-wrap">
    			<div id="sach-hay" class="col-sm-12 tab-content active">
                    @if ($posts->count() == 0)
                    @else
                        @foreach ($posts as $post)
                            <div class="row book-wrap">
                                <div class="col-md-4 col-sm-12 col-xs-12 left-col">
                                    @if ($post->thumbnail != "")
                                    <img class="book-img" src="{{ $post->thumbnail }}" alt="{{ IMG_ALT }}" />
                                    @else
                                    <img class="book-img" src="{{ asset(WEB.'/images/default-3.png') }}" alt="{{ IMG_ALT }}" />
                                    @endif
                                </div>
                                <div class="col-md-8 col-sm-12 col-xs-12 p-l-0 right-col">
                                    <p class="title">{{ $post->title }} </p>
                                    <p class="author">- by {{ $post->author }}</p>
                                    @php 
                                        echo html_entity_decode($post->content);
                                    @endphp
                                </div>
                            </div>
                        @endforeach
                    @endif
    				<div class="row book-wrap">
    					<div class="col-md-4 col-sm-12 col-xs-12 left-col">
    						<img class="book-img" src="{{ asset(WEB.'/images/sach-1@2x.png') }}" alt="{{ IMG_ALT }}" />
    					</div>
    					<div class="col-md-8 col-sm-12 col-xs-12 p-l-0 right-col">
    						<p class="title">Infant Massage: A Handbook for Loving Parents </p>
    						<p class="author">- by Vimala McClure</p>
    						<p class="desc">Qua nhiều thế hệ, các bà mẹ trên khắp thế giới biết rằng những cái chạm nhẹ nhàng có thể xoa dịu và trao đổi yêu thương với những đứa con của họ. Những nghiên cứu khoa học mới nhất khẳng định rằng thể hiện tình cảm thể chất tối quan trọng đối với sự phát triển và sức khỏe ở trẻ em - giảm căng thẳng, khó chịu, cải thiện giấc ngủ, giúp trẻ sinh non tăng cân, thậm chí giúp cải thiện sự hô hấp ở trẻ bị hen suyễn. Vimala McClure, người sáng lập Hiệp hội Massage Sơ sinh và Nhũ nhi Quốc tế, đã cải tiến và cập nhật cuốn sách về Massage của bà. Bên trong cuốn sách bạn sẽ tìm thấy: </p>
    						<ul class="bullet-dot">
    							<li>Quy trình Massage cụ thể được thiết kế để giúp giảm những cơn đau bụng, sốt, đau ngực và nghẹt mũi. </li>
								<li>Các bước hướng dẫn thể hiện qua hình ảnh cụ thể, dễ thực hiện.</li>
								<li>Thông tin mới về những lợi ích của việc tiếp xúc “da-kề-da”. </li>
								<li>Những hướng dẫn dành cho trẻ sinh non và trẻ sơ sinh với những nhu cầu đặc biệt.</li>
								<li>Những bài hát ru, bài vè, những trò chơi để cải thiện trải nghiệm Massage. </li>
								<li>Một chương đặc biệt dành riêng cho những ông Bố.</li>
								<li>Lời khuyên nhủ chân thành, đồng cảm cho Cha Mẹ nhận Con nuôi. </li>
    						</ul>
    					</div>
    				</div>
    				<div class="row book-wrap">
    					<div class="col-md-4 col-sm-12 col-xs-12  left-col">
    						<img class="book-img" src="{{ asset(WEB.'/images/sach-2@2x.png') }}" alt="{{ IMG_ALT }}" />
    					</div>
    					<div class="col-md-8 col-sm-12 col-xs-12 p-l-0 right-col">
    						<p class="title">Baby Play for Every Day - 365 activities for the first year</p>
    						<p class="author">- by DK</p>
    						<p class="desc">Làm Cha Mẹ lần đầu luôn phấn khởi - Bạn có thể thúc đẩy sự phát triển của trẻ, kết nối với con mình (sơ sinh và nhũ nhi), lấy lại vóc dáng sau sinh qua việc chơi đùa! Cuốn “Baby Play for Every Day” nói về một hoạt động vui chơi đơn giản mỗi ngày trong năm, vì vậy bạn có thể kết hợp kết nối với trẻ và giúp trẻ phát triển trong khi vui chơi với con mình. Không nhất thiết là phải đọc những cuốn sách lý thuyết suông và nhàm chán về sự phát triển ở trẻ hoặc thực hiện những bài tập phức tạp để thúc đẩy sự phát triển của bé. Thay vào đó, hãy vui vẻ và lấy lại vóc dáng với những hoạt động đơn giản với bé. </p>
    						<p class="desc">Baby Play for Every Day là những trang giấy đầy hình ảnh màu sắc minh họa những hoạt động và trò chơi cho bé hằng ngày trong năm. Các trò chơi phù hợp với từng lứa tuổi của trẻ, vì vậy bạn sẽ tìm hiểu những sở thích và khả năng của bé, từ sơ sinh đến nhũ nhi. Cuốn Baby Play for Every Day còn bao gồm các công thức nước uống dồi dào năng lượng (smoothies) cho những ai lần đầu làm cha mẹ, những lời khuyên để sắp xếp túi đựng tã sữa cho bé và những câu đố về nuôi dạy con cái. Sau cùng, công cụ hiện hữu tốt nhất sự phát triển ở trẻ là cha mẹ hạnh phúc và tự tin! </p>
    					</div>
    				</div>
    				<div class="row book-wrap">
    					<div class="col-md-4 col-sm-12 col-xs-12 left-col">
    						<img class="book-img" src="{{ asset(WEB.'/images/sach-3@2x.png') }}" alt="{{ IMG_ALT }}" />
    					</div>
    					<div class="col-md-8 col-sm-12 col-xs-12 p-l-0 right-col">
    						<p class="title">The Whoe-Brain Child - 12 Revolutionary Strategies to Nurture <br/>Your Child’s Developing Mind</p>
    						<p class="author">- by Daniel J. Siegel, M.D., and Tina Payne Bryson, Ph.D.</p>
    						<p class="desc">Tác giả của Mindsight giờ đây đã trở thành những đứa trẻ; trong cuốn The Whole-Brain Child, ông cho thấy làm thế nào để nuôi dưỡng sự phát triển cảm xúc và trí tuệ lành mạnh để trẻ có thể sống cân bằng, có ý nghĩa và hòa nhập. Với những giải thích rõ ràng, các chiến lược thích hợp với từng giai đoạn để đối phó với những khó khăn ngày-qua-ngày, và các hình ảnh minh họa sẽ giúp bạn giải thích các khái niệm này cho con của mình. </p>
    						<p class="desc">Trong cuốn sách tiên phong, thực tế này, Daniel J. Siegel, nhà thần kinh học và là tác giả của cuốn sách bán chạy nhất Mindsight, và chuyên gia nuôi dạy con Tina Payne Bryson đưa ra cách tiếp cận mang tính Cách mạng để nuôi dạy con bằng 12 chiến lược quan trọng giúp trẻ phát triển trí não khỏe mạnh, dẫn đến những đứa trẻ bình tĩnh và hạnh phúc hơn. Các tác giả giải thích và làm dễ hiểu — khoa học mới về cách não bộ của trẻ kết nối và cách thức nó phát triển. Đại não, đưa ra quyết định và cân bằng cảm xúc, luôn trong quá trình hình thành cho đến giữa những năm hai mươi tuổi đời. Và đặc biệt là ở trẻ nhỏ, não phải và những cảm xúc của nó có khuynh hướng cai trị logic của não trái. Không có gì là lạ khi trẻ có những cơn giận dữ, phản kháng, hoặc hờn giỗi trong im lặng. Bằng cách áp dụng những khám phá này cho việc nuôi dạy con cái hàng ngày, bạn có thể biến bất kỳ sự bùng nổ, tranh luận hoặc sợ hãi nào thành một cơ hội để tích hợp bộ não của con bạn và thúc đẩy tăng trưởng quan trọng.</p>
    					</div>
    				</div>
    				<div class="row book-wrap">
    					<div class="col-md-4 col-sm-12 col-xs-12 left-col">
    						<img class="book-img" src="{{ asset(WEB.'/images/sach-4@2x.png') }}" alt="{{ IMG_ALT }}" />
    					</div>
    					<div class="col-md-8 col-sm-12 col-xs-12 p-l-0 right-col">
    						<p class="title">Dealing with Depression: A Common Sense Guide to Mood Disorders</p>
    						<p class="author">- by Gordon Parker</p>
    						<p class="desc">Bao gồm cả phương pháp truyền thống và những phương pháp tiếp cận khác để điều trị trầm cảm, hướng dẫn được sửa đổi và cập nhật đầy đủ này phác thảo ra nhiều loại trầm cảm khác nhau, bao gồm thay đổi tâm trạng, trầm cảm lâm sàng và rối loạn lưỡng cực. Mỗi loại trầm cảm được giải thích đầy đủ và đi kèm với các đề xuất cho các phương pháp điều trị thích hợp nhất. Mô tả đơn giản và bố cục thân thiện với người dùng giúp cho những hướng dẫn này dễ hiểu cho những người bị rối loạn tâm trạng, gia đình của họ và các chuyên gia y tế chăm sóc họ. Các phần mở rộng về rối loạn lưỡng cực và ảnh hưởng của phong cách cá tính đối với rối loạn không u uất được bao gồm trong ấn bản mới này và một bài kiểm tra chẩn đoán trực tuyến được liên kết với sách khuyến khích sự tự tin trong chẩn đoán và tìm kiếm sự chăm sóc chuyên nghiệp.</p>
    					</div>
    				</div>
    				<div class="row book-wrap">
    					<div class="col-md-4 col-sm-12 col-xs-12 left-col">
    						<img class="book-img" src="{{ asset(WEB.'/images/sach-5@2x.png') }}" alt="{{ IMG_ALT }}" />
    					</div>
    					<div class="col-md-8 col-sm-12 col-xs-12 p-l-0 right-col">
    						<p class="title">Understanding Depression</p>
    						<p class="author">- by Patricia Ainsworth, M.D.</p>
    						<p class="desc">Trầm cảm đã là một tai họa của nhân loại kể từ buổi sơ khai. Những hình ảnh sống động từ các văn bản lịch sử và tôn giáo mô tả những người bị bệnh mà chúng ta biết là trầm cảm. Một căn bệnh "phổ biến", không dựa trên chủng tộc, giới tính, tín ngưỡng, tôn giáo, địa vị xã hội, hoặc quốc gia xuất xứ. Cứ năm người có một người trong chúng ta bị ảnh hưởng và kết quả có khả năng gây chết người của nó - tự sát - là nguyên nhân gây tử vong đứng thứ ba của các thanh thiếu niên Mỹ. Cái căn bệnh tiêu tốn 44 tỷ đô la mỗi năm này là gì? Nó trông như thế nào? Đó là tâm trạng? Đó có phải là kết quả của một khiếm khuyết tính cách nhân vật không? Chúng ta có thể "thoát khỏi nó" không?</p>
    						<p class="desc">Understanding Depression khám phá thực tế của căn bệnh từ các quan điểm “song sinh” của tác giả như một bác sĩ tâm thần và trước hết là một thành viên trong gia đình trải qua thảm kịch trầm cảm. Sử dụng các ví dụ từ trải nghiệm của mình, tác giả thảo luận về các loại trầm cảm khác nhau, loại người có nguy cơ và các yếu tố nguy cơ tự sát. Theo thuật ngữ dễ hiểu, cuốn sách xem xét cách thức hoạt động của bộ não và cách cơ thể giao tiếp với nó, bao gồm cả những phát hiện gần đây về quá trình thất bại trong trầm cảm.</p>
							<p class="desc">Cuốn sách phản ánh niềm tin của tác giả rằng sự hiểu biết về trầm cảm chỉ là một nửa của trận chiến. Chịu trách nhiệm cá nhân khi chiến đấu với con “thú dữ” cũng quan trọng không kém. Phương pháp điều trị, thảo luận ở đây, bao gồm các hình thức khác nhau của tâm lý trị liệu, các loại thuốc chống trầm cảm khác nhau, và các chủ đề gây tranh cãi của "sốc" điều trị và điều trị không tự nguyện.</p>
							<p class="desc">Hiểu biết về trầm cảm cũng cung cấp các mẹo để chống trầm cảm mỗi ngày. Cuối cùng, cuốn sách sẽ xem xét nghiên cứu tiên tiến hứa hẹn quản lý tốt hơn bệnh trầm cảm và vũ khí mới để chống lại nó.</p>
							<p class="desc">Patricia Ainsworth là một bác sĩ tâm thần trong thực hành tư nhân và là một trợ lý giáo sư (bán thời gian) trong khoa tâm thần và hành vi của con người tại Đại học Trung tâm Y tế Mississippi. </p>
    					</div>
    				</div>
    			</div>
    			<div id="cac-nghien-cuu-khoa-hoc" class="col-sm-12 tab-content">
    				<ul>
    					<li>
    						<p class="title">Infant Massage: The practice and evidence-base to support it</p>
							<p class="author">- Alison Cooke</p>
							<p class="publishser">Published Online:9 Mar 2015</p>
							<p class="url"><a target="_blank" href="https://www.magonlinelibrary.com/doi/pdf/10.12968/bjom.2015.23.3.166">https://www.magonlinelibrary.com/doi/pdf/10.12968/bjom.2015.23.3.166</a></p>
						</li>
						<li>
    						<p class="title">Preterm infant massage therapy research: a review</p>
							<p class="author">- Tiffany Field, Miguel Diego, and Maria Hernandez-Reif</p>
							<p class="publishser">Infant Behav Dev. 2010 Apr; 33(2): 115–124.</p>
							<p class="url"><a target="_blank" href="https://www.ncbi.nlm.nih.gov/pmc/articles/PMC2844909/">https://www.ncbi.nlm.nih.gov/pmc/articles/PMC2844909/</a></p>
						</li>

    				</ul>
    			</div>
    		</div>
		</div>
    </section>
@endsection