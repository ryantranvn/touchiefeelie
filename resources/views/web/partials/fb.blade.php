<!-- Load Facebook SDK for JavaScript -->
<div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = 'https://connect.facebook.net/vi_VN/sdk/xfbml.customerchat.js';
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>

<!-- Your customer chat code -->
<div class="fb-customerchat"
  attribution=setup_tool
  page_id="580370969048242"
  logged_in_greeting="Chào anh/chị ! Anh/chị cần Touchie Feelie tư vấn gì không ạ?"
  logged_out_greeting="Chào anh/chị ! Anh/chị cần Touchie Feelie tư vấn gì không ạ?">
</div>