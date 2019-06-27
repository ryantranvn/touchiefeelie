<?php
if (is_user_logged_in()){
    $user = wp_get_current_user();
    if($user->is_deleted == 1) {
        wp_redirect( wp_logout_url());
    }
    
    // get optin page permission
    $pdo = connectDb();
    $sqlOptinpagePermission = "SELECT * FROM wp_event_usermeta WHERE meta_key = 'optinpage' AND user_id = :user_id";
    $queryOptinpagePermission = $pdo->prepare($sqlOptinpagePermission);
    $queryOptinpagePermission->bindValue(":user_id", $user->ID);
    $queryOptinpagePermission->execute();
    $optinpagePermissions = $queryOptinpagePermission->fetch();

    if (count($optinpagePermissions)>0 && $optinpagePermissions['meta_value']==1) {
        $hasOptinPage = 1;
    }
    else {
        $hasOptinPage = 0;

        if ($user->ID == 1 && $user->roles[0] == 'administrator') {
            $hasOptinPage = 1;
        }
        else {
            if (count($optinpagePermissions)>0 && $optinpagePermissions['meta_value']==1) {
                $hasOptinPage = 1;
            }
            else {
                $hasOptinPage = 0;
            }
        }
    }
}
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages and that
 * other 'pages' on your WordPress site will use a different template.
 *
 * @package WordPress
 * class="main-content">
   @subpackage Twenty_Fourteen
 * @since Twenty Fourteen 1.0
 */
get_header(); ?>

<div id="main-content" class="main-content">
<?php
    wp_register_script(
        'mediauploader',
        get_template_directory_uri()."/js/mediauploader.js",
        array( 'jquery' ),
        false,
        true
    );
        /* メディアアップローダの javascript API */
    wp_enqueue_media();
        /* 作成した javascript */
    wp_enqueue_script( 'mediauploader' );

    if ( is_front_page() && twentyfourteen_has_featured_posts() ) {
        // Include the featured content template.
        get_template_part( 'featured-content' );
    }
?>
    <div id="primary" class="content-area">
        <div id="content" class="site-content" role="main">
            <?php
//                if ( in_array( 'author', (array) $user->roles ) ) {
//                    //The user has the "author" role
//                }
                // ログインしているかどうか判定
                if (!is_user_logged_in()){
                    echo do_shortcode('[theme-my-login instance="1"]');
                }
                else{
                    // URLパラメータからページ情報を取得する。
                    $page_id = isset($_GET['pageid']) ? (is_array($_GET['pageid']) ? null : htmlspecialchars($_GET['pageid'])) : null;
                    // POSTの内容
                    $code = isset($_GET["code"]) ? (is_array($_GET["code"]) ? null : htmlspecialchars($_GET["code"])) : null;
                    // なんか頭悪い
                    $tab1 = false;
                    $tab2 = false;
                    $tab3 = false;
                    $tab4 = false;
                    $tab5 = false;
                    $tab6 = false;
                    $tab7 = false;
                    $tab8 = false;
                    $tab9 = false;
                    $tab10 = false;
                    $tab11 = false;
                    $tab12 = false;
                    if($code != null){
                        $tab5 = true;
                    }
                    else if($page_id != null){
                        switch($page_id){
                            case 2:
                                $tab2 = true;
                                break;
                            case 3:
                                $tab3 = true;
                                break;
                            case 4:
                                $tab4 = true;
                                break;
                            case 5:
                                $tab5 = true;
                                break;
                            case 6:
                                $tab6 = true;
                                break;
                            case 7:
                                $tab7 = true;
                                break;
                            case 8:
                                $tab8 = true;
                                break;
                            case 9:
                                $tab9 = true;
                                break;
                            case 10:
                                $tab10 = true;
                                break;
                            case 11:
                                $tab11 = true;
                                break;
                            case 12:
                                $tab12 = true;
                                break;
                            case 1:
                            default:
//                                $tab1= true;
                                $tab2 = true;
                                break;
                        }
                    }
                    else{
//                        $tab1 = true;
                        $tab2 = true;
                    }
                    $str_event_list_options = print_event_list(false);
                    $str_event_list_options_for_edit = print_event_list(false,true);
                    $str_event_date_list_options = print_event_date_list(false);

                    if (isset($_SESSION['optinpage_open_list'])) { 
                        $tab2 = $tab4 = $tab5 = $tab6 = $tab7 = $tab8 = $tab3= false;
                        $tab12 = true;
                    }
                    ?>
                    <div class="navbar navbar-default" role="navigation">
                        <div class="container">
                            <div class="navbar-header">
                            <button type="button" id="navbar-button" class="navbar-toggle" 
                            data-toggle="collapse" data-target=".navbar-collapse">
                                <span class="sr-only">Toggle navigation</span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                            </button>
                            </div>
                            <div class="navbar-collapse collapse">
                            <ul class="nav navbar-nav">
                                <li<?php if($tab2){ echo "  class='active'"; } ?>><a href="#events" data-toggle="tab"><i class="fa fa-calendar"></i> イベント情報</a></li>
                                <?php if(isSysAdmin() || isAdmin()){ ?>
                                    <li<?php if($tab3){ echo "  class='active'"; } ?>><a id="open_event_create" href="#event_create" data-toggle="tab"><i class="fa fa-plus-square"></i> イベント作成・編集</a></li>
                                    <?php if (isset($hasOptinPage) && $hasOptinPage==1) { ?>
                                    <li<?php if($tab12){ echo "  class='active'"; } ?>><a id="open_optin_page" href="#optin_page" data-toggle="tab"><i class="fa fa-square"></i> オプトインページ一覧</a></li>
                                    <?php } ?>
                                    <li<?php if($tab4){ echo "  class='active'"; } ?>><a href="#staffs" data-toggle="tab"><i class="fa fa-bullhorn"></i> スタッフ一覧</a></li>
                                <?php } ?>
                                <li<?php if($tab6){ echo "  class='active'"; } ?>><a href="#users" data-toggle="tab"><i class="fa fa-users"></i> 参加者一覧</a></li>
                                <?php if(!isSysAdmin()){ ?>
                                    <li<?php if($tab7){ echo "  class='active'"; } ?>><a href="#profile" data-toggle="tab"><i class="fa fa-user"></i> プロフィール</a></li>
                                <?php } ?>
                                <li<?php if($tab8){ echo "  class='active'"; } ?>><a href="#mail_history" data-toggle="tab"><i class="fa fa-envelope"></i>メール送信履歴画面</a></li>
                                <?php if(isSysAdmin()){ ?>
                                    <li><a href="../wp-admin"><i class="fa fa-cog"></i> WordPress</a></li>
                                <?php } ?>
                                <li><a href="<?php echo wp_logout_url(); ?>"><i class="fa fa-sign-out"></i> ログアウト</a></li>
                            </ul>
                        </div><!--/.nav-collapse -->
                    </div>
                    <div class="tab-content" style="padding: 20px;">
                        <div class="tab-pane<?php if($tab2){ echo ' active'; } ?>" id="events" style="margin-top: 20px;">
                            <?php require_once('apps/manage_events.php'); ?>
                        </div>
                        <?php if(isSysAdmin() || isAdmin()){ ?>
                            <div class="tab-pane<?php if($tab3){ echo ' active'; } ?>" id="event_create" style="margin-top: 20px;">
                                <?php require_once('apps/create_event_new.php'); ?>
                            </div>
                            <div class="tab-pane<?php if($tab12){ echo ' active'; } ?>" id="optin_page" style="margin-top: 20px;">
                                <?php require_once('apps/optin_page.php'); ?>
                            </div>
                            <div class="tab-pane<?php if($tab4){ echo ' active'; } ?>" id="staffs" style="margin-top: 20px;">
                                <?php require_once('apps/manage_staffs.php'); ?>
                            </div>
                            <?php
                            }
                        ?>
                        <div class="tab-pane<?php if($tab6){ echo ' active'; } ?>" id="users" style="margin-top: 20px;">
                            <?php require_once('apps/manage_users.php'); ?>
                        </div>
                        <div class="tab-pane<?php if($tab7){ echo ' active'; } ?>" id="profile" style="margin-top: 20px;">
                            <?php require_once('apps/edit_profile.php'); ?>
                        </div>
                        <div class="tab-pane<?php if($tab8){ echo ' active'; } ?>" id="mail_history" style="margin-top: 20px;">
                            <?php require_once('apps/mail_history.php'); ?>
                        </div>
                    </div>
                    <br>
                    <br>
                    <br>
                    <br>
                    <br>
                    <?php
                }
            ?>
        </div><!-- #content -->
    </div><!-- #primary -->
    <?php //get_sidebar( 'content' ); ?>
</div><!-- #main-content -->
<script>
    // 管理画面の複数の画面で使いまわせる関数はここに記述
    var toggle_flg = false;
    $(function () {
        $(document).on('blur', '.change_num', function () {
            var str = this.value;
            str = str.replace(/[０-９]/g, function(s) {
                return String.fromCharCode(s.charCodeAt(0) - 0xFEE0);
            });
            this.value = str;
        });

        $('.selectpicker').selectpicker();

        $(document).on('click', 'a[data-toggle="tab"]', function () {
            // ナビゲーションバーのボタンクリックする
            if (toggle_flg) {
                $("#navbar-button").eq(0).click();
                toggle_flg = false;
            }

            //イベント情報画面初期化
            if ( $(this).attr("href") == "#events" ){
                $('#select_event').val(0);
                $('#select_event').change();
            }

            //イベント作成・編集画面初期化
            if ( $(this).attr("href") == "#event_create" ){
                $('#edit_event').val(0);
                $('#edit_event').change();
            }
/*
            //スタッフ一覧画面初期化
            if ( $(this).attr("href") == "#staffs" ){
                $('#m_staff_table').empty();
            }
*/
/*
            //参加者一覧画面初期化
            if ( $(this).attr("href") == "#users" ){
                $('#m_user_table').empty();
                $("#display_linage").hide();
                $('.btn-user-next').addClass("disabled");
                $('.btn-user-previous').addClass("disabled");
            }
*/
        });
        $(document).on('click', "#navbar-button", function(){
            if (!toggle_flg) {
                toggle_flg = true;
            }
            else{
                toggle_flg = false;
            }
        });
    });
</script>

<?php
//get_sidebar();
get_footer();