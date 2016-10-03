<?php
/*
Template Name: ThaiTheme Profile
*/
auth_redirect_login(); 
nocache_headers();
global $errmsg;
$current_user = wp_get_current_user();
$display_user_name = $current_user->display_name;
if ( !empty($_POST['submit']) ) {

    if ( defined('ABSPATH') ) {
        require_once(ABSPATH . 'wp-admin/includes/user.php');
    } else {
        require_once('../wp-admin/includes/user.php');
    }
    check_admin_referer( 'update-profile_' . $user_ID );

    $errors = edit_user( $user_ID );

    if ( is_wp_error( $errors ) ) {
        foreach ( $errors->get_error_messages() as $message )
            $errmsg = "$message";
            //exit;
    }
    if ( $errmsg == '' ) {
        do_action( 'personal_options_update', $user_ID );
		$errmsg = '<div class="adverts-flash-info profile"><span>โปรไฟล์ของท่านได้ถูกแก้ไขเรียบร้อยแล้ว..</span></div>';
    } else {
        $errmsg = '<div class="tt-notification error">  ' . $errmsg . '</div>';
        $errcolor = 'style="background-color:#FFEBE8;border:1px solid #CC0000;"';
    }
}
?>
<?php get_header(); ?>
<div class="tt_content"> 
<?php if (is_user_logged_in()) { ?>
<div class="tt_right manage"> 
<div class="tt_member manage">
<div class="tt_user_img">
<?php global $userdata; get_currentuserinfo(); echo get_avatar($userdata->ID, 150); ?>
</div> 
<div class="tt_user_name">
<span class="title"><?php global $user_ID,$post_ID; echo get_usermeta( $user_ID, 'display_name'.$post_ID );?></span>
<a class="btn_edit_member" href="<?php echo home_url( '/' ); ?>?p=<?php global $thaitheme_option; echo $thaitheme_option['thaitheme_select_post_member'];  ?>" title="โพสประกาศฟรี" target="_top"><?php _e('โพสประกาศฟรี'); ?></a>
<a class="btn_edit_member" href="<?php echo home_url( '/' ); ?>?p=<?php global $thaitheme_option; echo $thaitheme_option['thaitheme_select_manage'];  ?>" title="ประกาศทั้งหมด" target="_top"><?php _e('ประกาศทั้งหมด'); ?></a>
<a class="btn_link" href="<?php echo home_url( '/' ); ?>?p=<?php global $thaitheme_option; echo $thaitheme_option['thaitheme_select_all_views'];  ?>" title="ประกาศที่ดูล่าสุด" target="_top"><?php _e('ประกาศที่ดูล่าสุด'); ?></a>
<a class="btn_edit_member" href="<?php echo home_url( '/' ); ?>?p=<?php global $thaitheme_option; echo $thaitheme_option['thaitheme_select_edit_member'];  ?>" title="แก้ไขข้อมูลสมาชิก" target="_top"><?php _e('แก้ไขข้อมูลสมาชิก'); ?></a>
<a class="btn_logout" href="<?php echo wp_logout_url(home_url()); ?>" title="ออกจากระบบ" target="_top"><?php _e('ออกจากระบบ'); ?></a>
</div> 
</div>
<?php get_template_part( 'includes/thaitheme-expired', get_post_format() ); ?> 
</div>
<div class="tt_left manage">
<div class="tt_title single">
<h1><?php printf( __('แก้ไขข้อมูลสมาชิก  " %s "', ''), esc_html( $display_user_name ) ); ?></h1>
</div>
<?php if ( isset($_GET['updated']) ) { ?>
<p class="notification-success"><?php _e('โปรไฟล์ของท่านได้ถูกแก้ไขเรียบร้อยแล้ว..','thaitheme')?></p>
<?php  } ?>
<?php echo $errmsg; ?>
<form name="profile" id="your-profile" action="" method="post" class="form-section">
				<?php wp_nonce_field( 'update-profile_' . $user_ID ); ?>
				<input type="hidden" name="from" value="profile" />
				<input type="hidden" name="checkuser_id" value="<?php echo $user_ID ?>" />				
				<div class="input-text">
				<label for="user_login"><?php _e('ชื่อสำหรับ Login', 'thaitheme'); ?></label>
				<div class="tt_input-from">
				<input type="text" name="user_login" disabled="disabled" id="user_login" value="<?php esc_attr_e( $current_user->user_login ); ?>" class="txt textboxcontact" /> <span class="description">* ชื่อสำหรับเข้าสู่ระบบไม่สามารถเปลี่ยนได้ </span>
				</div>
				</div>		
				<div class="input-text">
				<label for="first_name"><?php _e('ชื่อ ','thaitheme') ?></label>
				<div class="tt_input-from">
				<input type="text" name="first_name" class="txt requiredField" id="first_name" value="<?php esc_attr_e( $current_user->first_name ); ?>" />
				</div>
				</div>				
				<div class="input-text">
				<label for="last_name"><?php _e('นามสกุล ','thaitheme') ?></label>
				<div class="tt_input-from">
				<input type="text" name="last_name" class="txt requiredField" id="last_name" value="<?php esc_attr_e( $current_user->last_name ); ?>" />
				</div>
				</div>
				<div class="input-text">
				<label for="nickname"><?php _e('ชื่อเล่น ','thaitheme') ?></label>
				<div class="tt_input-from">
				<input type="text" name="nickname" class="txt" id="nickname" value="<?php esc_attr_e( $current_user->nickname ); ?>" />
				</div>
				</div>
				<div class="input-text">
				<label for="display_name"><?php _e('ชื่อที่แสดงให้คนทั่วไปเห็น ','thaitheme') ?></label>
				<div class="tt_input-from">
				<select name="display_name" class="regular-dropdown" id="display_name">
					<?php
						$public_display = array();
						$public_display['display_displayname'] = esc_attr($current_user->display_name);
						$public_display['display_nickname'] = esc_attr($current_user->nickname);
						$public_display['display_username'] = esc_attr($current_user->user_login);
						$public_display['display_firstname'] = esc_attr($current_user->first_name);
						$public_display['display_firstlast'] = esc_attr($current_user->first_name) . '&nbsp;' . esc_attr($current_user->last_name);
						$public_display['display_lastfirst'] = esc_attr($current_user->last_name) . '&nbsp;' . esc_attr($current_user->first_name);
						$public_display = array_unique(array_filter(array_map('trim', $public_display)));
						foreach($public_display as $id => $item) {
					?>
						<option id="<?php echo $id; ?>" value="<?php echo esc_attr($item); ?>"><?php esc_attr_e($item); ?></option>
					<?php
						}
					?>
				</select>
				</div>
				</div>
				<div class="input-text">
				<label for="email"><?php _e('อีเมล ','thaitheme') ?></label>
				<div class="tt_input-from">
				<input type="text"  disabled="disabled" class="txt"  value="<?php esc_attr_e($current_user->user_email); ?>" />
				<span class="description">*หากต้องการเปลี่ยน อีเมล  กรุณาติดต่อผู้ดูแลระบบ </span>
				</div>
				</div>
				<?php
				$show_password_fields = apply_filters('show_password_fields', true);
				if ( $show_password_fields ) :
				?>
				<div class="input-text">
				<label for="pass1"><?php _e('รหัสผ่านใหม่ ','thaitheme'); ?></label>
				<div class="tt_input-from">
				<input type="password" name="pass1" class="regular-text" id="pass1" value="" />
				<span class="description"><?php _e('* หากคุณต้องการเปลี่ยนรหัสผ่านใหม่ กรุณาพิมพ์รหัสผ่านใหม่ <br> * หากไม่ต้องการเปลี่ยนรหัสผ่านให้ช่องนี้ว่างไว้','thaitheme'); ?></span>
				</div>
				</div>
				<div class="input-text">
				<label for="pass1"><?php _e('ยืนยันรหัสผ่าน','thaitheme'); ?></label>
				<div class="tt_input-from">
				<input type="password" name="pass2" class="regular-text" id="pass2" value="" />
				</div>
				</div>
				<?php endif; ?>
				<?php do_action('show_user_profile', $current_user);?>
					<input type="hidden" name="action" value="update" />
					<input type="hidden" name="email" id="email"  value="<?php esc_attr_e($current_user->user_email); ?>" />
					<input type="hidden" name="user_id" id="user_id" value="<?php echo $user_ID; ?>" />
					<input type="hidden" name="admin_color" value="<?php esc_attr_e( $current_user->admin_color ); ?>" />
					<input type="hidden" name="rich_editing" value="<?php esc_attr_e( $current_user->rich_editing ); ?>" />
					<input type="hidden" name="comment_shortcuts" value="<?php esc_attr_e( $current_user->comment_shortcuts ); ?>" />
					<?php if ( !empty($current_user->admin_bar_front) ) { ?>
						<input type="hidden" name="admin_bar_front" value="<?php esc_attr_e( $current_user->admin_bar_front ); ?>" />
					<?php } ?>
					<?php if ( !empty($current_user->admin_bar_admin) ) { ?>
						<input type="hidden" name="admin_bar_admin" value="<?php esc_attr_e( $current_user->admin_bar_admin ); ?>" />
					<?php } ?>	
					<div class="tt_btn_post">
					<input type="submit" id="cpsubmit" class="adverts-cancel-unload" value="<?php _e('อัปเดตข้อมูลส่วนตัว', 'thaitheme')?>" name="submit" />
					</div>
</form>	
</div>
<?php } else { ?>
<?php get_template_part( 'includes/thaitheme-login-from', get_post_format() ); ?>
<?php } ?>
</div>
<?php get_footer(); ?>
