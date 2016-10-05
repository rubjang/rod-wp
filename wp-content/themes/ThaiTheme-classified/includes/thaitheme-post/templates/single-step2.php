<?php wp_enqueue_style( 'adverts-frontend' ); wp_enqueue_style( 'adverts-icons' );  wp_enqueue_style( 'adverts-icons-animate' );   wp_enqueue_script( 'adverts-frontend' );?>
<?php $images = get_children(array('post_parent'=>$post_id)) ?>
<?php if( !empty($images) ): ?>
<div class="thaitheme_slide_img">
<div class="slide_imgs">
<?php foreach($images as $tmp_post): ?>
<?php $image = wp_get_attachment_image_src( $tmp_post->ID, 'thaitheme-slide' ) ?>
<?php $image_thumbnail = wp_get_attachment_image_src( $tmp_post->ID, 'adverts-upload-thumbnail' ) ?>
<?php if(isset($image[0])): ?>
<a href="<?php esc_attr_e($image[0]) ?>"><img alt="" data-path="#" src="<?php esc_attr_e($image_thumbnail[0]) ?>" title="<?php esc_html_e( get_post( $post_id )->post_title ) ?>"></a>
<?php endif; ?>
<?php endforeach; ?>
</div>
</div>
<?php endif; ?>
<div class="adverts-single-box">
	<?php if( get_post_meta( $post_id, "adverts_price", true) ): ?>
    <div class="adverts-single-price" style="">
        <span class="adverts-price-box"><?php echo adverts_price( get_post_meta( $post_id, "adverts_price", true) ) ?> บาท</span>
    </div>
    <?php endif; ?>
    <div class="adverts-single-author">
        <div class="adverts-single-author-avatar">
            <?php echo get_avatar( get_post_meta($post_id, 'adverts_email', true), 48 ) ?>
        </div>
        <div class="adverts-single-author-name">
            <?php global $user_ID,$post_ID; echo get_usermeta( $user_ID, 'display_name'.$post_ID );?><br/>
			<div class="adverts-single-author-time">
            <?php printf( __('<i class="fa fa-clock-o"></i>  %1$s', "adverts"), date_i18n( get_option( 'date_format' ), get_post_time( 'U', false, $post_id ) ), human_time_diff( get_post_time( 'U', false, $post_id ), current_time('timestamp') ) ) ?>
			</div>
        </div>
    </div>

</div>

<div class="thaitheme_ad_right">
<h1 class="tt_title"><?php esc_html_e( get_post( $post_id )->post_title ) ?> </h1>
<div class="adverts-content">
    <?php echo $content ? $content : apply_filters("the_content", get_post( $post_id )->post_content) ?>
</div>
</div>
<div class="thaitheme_ad_left">
<div class="adverts-grid adverts-grid-closed-top adverts-grid-with-icons adverts-single-grid-details">
	 <div class="adverts-grid-row ">
     <div class="adverts-grid-col adverts-col-30">
    <span class="adverts-round-icon adverts-icon-megaphone"></span>
    </div>
    <div class="adverts-grid-col adverts-col-65">
         เลขประกาศ :  <?php esc_html_e( $post_id ) ?>
    </div>
	</div>
    <?php $advert_category = get_the_terms( $post_id, 'category' ) ?>
    <?php if(!empty($advert_category)): ?>
    <div class="adverts-grid-row ">
     <div class="adverts-grid-col adverts-col-30">
    <span class="adverts-round-icon adverts-icon-folder-open-empty"></span>
    </div>
    <div class="adverts-grid-col adverts-col-65">
    <?php foreach((array)$advert_category as $c): ?>
    <a href="<?php esc_attr_e( get_term_link( $c ) ) ?>"><?php esc_attr_e( $c->name );?></a><br/>
    <?php endforeach; ?>
    </div>
	</div>
	<?php endif; ?>
    <?php if(get_post_meta( $post_id, "thaitheme_mata_location_province", true )): ?>
    <div class="adverts-grid-row">
        <div class="adverts-grid-col adverts-col-30">
            <span class="adverts-round-icon adverts-icon-location"></span>
        </div>
        <div class="adverts-grid-col adverts-col-65 tt_location">
             จังหวัด <?php esc_html_e( get_post_meta( $post_id, "thaitheme_mata_location_province", true ) ) ?> <?php if(get_post_meta( $post_id, "thaitheme_mata_location_district", true )): ?> - <?php esc_html_e( get_post_meta( $post_id, "thaitheme_mata_location_district", true ) ) ?><?php endif; ?>
        </div>
    </div>
    <?php endif; ?>
	<div class="adverts-grid-row">
        <div class="adverts-grid-col adverts-col-30">
            <span class="adverts-round-icon adverts-icon-phone"></span>
        </div>
        <div class="adverts-grid-col adverts-col-65">
         <div class="adverts-single-actions">
    <a href="#" class="adverts-button adverts-show-contact" data-id="<?php echo $post_id ?>">
        <?php esc_html_e("กดเพื่อดูเบอร์โทร", "adverts") ?>
        <span class="adverts-icon-down-open"></span>
    </a>
    <span class="adverts-loader adverts-icon-spinner animate-spin"></span>
	</div>
</div>
<div class="adverts-contact-box">
    <p class="adverts-contact-method">
        <span class="adverts-icon-phone adverts-contact-icon" title="<?php _e("Phone", "adverts") ?>"></span>
        <span class="adverts-contact-phone"></span>
    </p>
    <p class="adverts-contact-method">
       <span class="adverts-icon-mail-alt adverts-contact-icon" title="<?php _e("Email", "adverts") ?>"></span>
       <span class="adverts-contact-email"></span>
    </p>
	</div>
</div>
<div class="adverts-grid-row ">
     <div class="adverts-grid-col adverts-col-30">
    <span class="adverts-round-icon adverts-icon-eye"></span>
    </div>
    <div class="adverts-grid-col adverts-col-65">
         เข้าชม :  0 ครั้ง
    </div>
	</div>
</div>
    <?php do_action( "adverts_tpl_single_details", $post_id ) ?>
</div>
