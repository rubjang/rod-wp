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
			<a href="<?php echo get_author_posts_url(get_the_author_meta( 'ID' )); ?>" title="ดูประกาศทั้งหมดของ <?php printf( esc_attr__( '%s', 'tuts_plus' ), get_the_author() );?> ">
            <?php echo get_avatar( get_post_meta($post_id, 'adverts_email', true), 48 ) ?>
			</a>
        </div>
        <div class="adverts-single-author-name">
			<a href="<?php echo get_author_posts_url(get_the_author_meta( 'ID' )); ?>" title="ดูประกาศทั้งหมดของ <?php printf( esc_attr__( '%s', 'tuts_plus' ), get_the_author() );?> ">
            <?php printf( esc_attr__( '%s', 'tuts_plus' ), get_the_author() );?>
				</a>
			<br/>
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
<?php global $thaitheme_option;  $thaitheme_close_comment =  $thaitheme_option['thaitheme_close_comment']['1'];
if($thaitheme_close_comment == 1) {?> 
<?php } else {?> 	
<?php global $thaitheme_option;  $thaitheme_use_comment =  $thaitheme_option['thaitheme_use_comment'];
if($thaitheme_use_comment == 1) {?> 
<div class="tt_comment">
<h2 class="head_comment">แสดงความคิดเห็น  เกี่ยวกับ " <span><?php the_title(); ?></span> "</h2>
<?php comments_template(); ?>	
</div>
<?php } else {?> 
<div class="tt_comment">
<h2 class="head_comment">แสดงความคิดเห็นด้วย Facebook</h2>
<div class="fb-comments" data-href="<?php the_permalink() ?>" data-width="100%" data-numposts="5" data-colorscheme="light"></div>
<div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/th_TH/sdk.js#xfbml=1&version=v2.3&appId=<?php global $thaitheme_option;  echo $thaitheme_option['thaitheme_app_id_comment']; ?>";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>
</div> 
<?php }?>
<?php }?>
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
         เข้าชม :  <?php the_views(); ?> ครั้ง 
    </div>
	</div>
</div>
    <?php do_action( "adverts_tpl_single_details", $post_id ) ?>
</div>
<div class="thaitheme_ad_left">
<?php get_sidebar( 'post' ); ?>
</div>
<?php global $thaitheme_option;  $thaitheme_use_banner_ads_bottom =  $thaitheme_option['thaitheme_use_banner_ads_bottom'];
if($thaitheme_use_banner_ads_bottom == 1) {?> 
<?php global $thaitheme_option;  $thaitheme_use_banner_page_bottom =  $thaitheme_option['thaitheme_use_banner_page_bottom'];
if($thaitheme_use_banner_page_bottom == 1) {?> 
<div class="tt_banner_page">
<a href="<?php global $thaitheme_option;  echo $thaitheme_option['thaitheme_url_banner_page_bottom']; ?>"  target="_blank"><img alt="" src="<?php global $thaitheme_option;  echo $thaitheme_option['thaitheme_uppic_banner_page_bottom']['url']; ?>?v=1.0"></a>
</div>
<?php } else {?> 	
<div class="tt_banner_page">
<?php global $thaitheme_option;  echo $thaitheme_option['thaitheme_code_banner_page_bottom']; ?>
</div>
<?php }?>
<?php }?>