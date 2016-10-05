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
<h1>ประกาศทั้งหมด</h1>
</div>
<?php if( $loop->have_posts()): ?>
    <?php while ( $loop->have_posts() ) : $loop->the_post(); ?>
    <?php global $post ?>
    <article class="tt_list tt_post_manage"> 	
    <a href="<?php esc_attr_e(get_the_permalink()) ?>" title="คลิกดู <?php esc_html_e(get_the_title()) ?>">
	<div class="tt_img">
		<?php $image = thaitheme_img_thumbnail( get_the_ID() ); ?>
        <?php if($image): ?>
		<img src="<?php esc_attr_e($image) ?>" alt=""/>
        <?php endif; ?>
	</div>	
	<div class="tt_the_title">
     <strong><?php esc_html_e(get_the_title()) ?> </strong>
	<?php if ( current_user_can( 'manage_options' ) ) { ?>
    <div class="tt_name_admin">
          ลงขายโดย : <?php the_author(); ?>
    </div>
    <?php } ?>
	</div>		
    </a> 
	<div class="tt_format">	
    <?php do_action("adverts_sh_manage_list_status", $post) ?>
	<?php if($post->post_status == "expired"){?>  
	<?php if($post->post_status == "publish"): ?>
    <span class="tt_status green"> <?php _e("เผยแพร่", "adverts") ?></span>
    <?php endif; ?>
    <?php if($post->post_status == "pending"): ?>
    <span class="tt_status orang"> <?php _e("รอการตรวจสอบ", "adverts") ?></span>
    <?php endif; ?>
    <?php if($post->post_status == "expired"): ?>
    <span class="tt_status red"> <?php _e("ประกาศหมดอายุ", "adverts") ?></span>
    <?php endif; ?> 
	<?php } else { ?>	
	<?php if($post->post_status == "publish"): ?>
    <span class="tt_status green"> <?php _e("เผยแพร่", "adverts") ?></span>
    <?php endif; ?>
    <?php if($post->post_status == "pending"): ?>
    <span class="tt_status orang"> <?php _e("รอการตรวจสอบ", "adverts") ?></span>
    <?php endif; ?>
    <?php if($post->post_status == "expired"): ?>
    <span class="tt_status red"> <?php _e("ประกาศหมดอายุ", "adverts") ?></span>	
    <?php endif; ?>
	<?php }?>
	<span class="tt_date" title="ลงประกาศ">ลงประกาศ :  <?php esc_html_e( date_i18n( get_option("date_format"), get_post_time( 'U' ) ) ) ?></span>
	<?php global $thaitheme_option;  $expires_emp = $thaitheme_option['thaitheme_expiration']; $expires_never = get_post_meta( get_the_ID(), '_expiration_date', true ); if( $expires_never ||$expires_emp == "") {?>
	<?php global $thaitheme_option;  $expires_emp = $thaitheme_option['thaitheme_expiration']; 
	 $expires = get_post_meta( get_the_ID(), '_expiration_date', true );
    if( $expires_emp == "") {
    } else {
	echo "<span class='tt_date' title='วันหมดอายุประกาศ'>หมดอายุ : ";
        echo mysql2date( __( 'j F Y' ), date_i18n( 'Y-m-d H:i:s', $expires ) );
	echo "</span>";	
    }?>
	</span>
	<?php } else {?>
	<span class="tt_date" title="วันหมดอายุประกาศ">หมดอายุ :  <strong>ไม่มีวันหมดอายุ</strong>
	<?php }?>
	</div>
	<?php if($post->post_status == "expired"){?>	
	<div class="tt_edit_format">		
	<a  onclick="return confirm('ประกาศนี้จะถูกลบอย่างถาวร ยืนยันการลบประกาศนี้');" href="<?php esc_attr_e(admin_url("admin-ajax.php")) ?>?action=adverts_delete&id=<?php echo get_the_ID() ?>&redirect_to=<?php esc_attr_e( urlencode( $baseurl ) ) ?>" title="<?php _e("ลบ", "adverts") ?>" class="adverts-button adverts-button-icon adverts-icon-trash-1"></a>
	</div>
	<?php } else { ?>
	<div class="tt_edit_format">		
	<a href="<?php esc_attr_e(str_replace("%#%", get_the_ID(), $edit_format)) ?>" title="<?php _e("แก้ไข", "adverts") ?>" class="adverts-button adverts-button-icon adverts-icon-pencil"></a>
	<a  onclick="return confirm('ประกาศนี้จะถูกลบอย่างถาวร ยืนยันการลบประกาศนี้');" href="<?php esc_attr_e(admin_url("admin-ajax.php")) ?>?action=adverts_delete&id=<?php echo get_the_ID() ?>&redirect_to=<?php esc_attr_e( urlencode( $baseurl ) ) ?>" title="<?php _e("ลบ", "adverts") ?>" class="adverts-button adverts-button-icon adverts-icon-trash-1"></a>
	</div>
	<?php }?>
    </article>
    <?php endwhile; ?>
    <?php else: ?>
    <div class="page-no-post"><p><?php _e("คุณยังไม่มีรายการประกาศ", "adverts") ?></p></div>
    <?php endif; ?>
    <?php wp_reset_query(); ?>
<div class="adverts-pagination">
    <?php echo paginate_links( array(
        'base' => $paginate_base,
	'format' => $paginate_format,
	'current' => max( 1, $paged ),
	'total' => $loop->max_num_pages,
        'prev_next' => false
    ) ); ?>
</div>
</div>