<?php
/*
Template Name: ThaiTheme Resent View
*/
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
<div class="tt_left manage grid">
<div class="tt_title single">
<h1>ประกาศที่ดูล่าสุด</h1>
</div>
<?php if (function_exists('zg_recently_viewed')):  if (isset($_COOKIE["WP-LastViewedPosts"])) { ?>
 <?php zg_recently_viewed(); ?>
<?php }  endif; ?>
</div>
<?php } else { ?>
<?php get_template_part( 'includes/thaitheme-login-from', get_post_format() ); ?>
<?php } ?>
</div>
<?php get_footer(); ?>