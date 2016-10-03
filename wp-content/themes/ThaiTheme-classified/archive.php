<?php get_header(); ?>
<div class="tt_search_header">
<?php get_template_part( 'includes/search-from', get_post_format() ); ?> 
</div>
<div class="tt_content">
<div class="tt-head">
<h2>Tags : <?php single_tag_title(); ?></h2>
<span class="tt_bd_top <?php $categories = get_the_category();if ( ! empty( $categories ) ) {echo 'cat_id' . esc_html( $categories[0]->term_id ) . '';} ;?>"> </span>
<span class="tt_bd_bottom <?php $categories = get_the_category();if ( ! empty( $categories ) ) {echo 'cat_id' . esc_html( $categories[0]->term_id ) . '';} ;?>"> </span>
</div>    
<?php global $thaitheme_option;  $thaitheme_display =  $thaitheme_option['thaitheme_display'];$thaitheme_leyout_post =  $thaitheme_option['thaitheme_leyout_post'];if($thaitheme_display == 2) {?> 
<div class="tt_left grid <?php if($thaitheme_leyout_post == 1) {?>tt_full<?php } else { ?><?php }?>">
<?php } else { ?>
<div class="tt_left list <?php if($thaitheme_leyout_post == 1) {?>tt_full<?php } else { ?><?php }?>">
<?php }?>
<?php $count = 1; if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
<?php global $thaitheme_option;  $thaitheme_display =  $thaitheme_option['thaitheme_display'];if($thaitheme_display == 2) {?> 
<article class="tt_list thaitheme post3x  <?php if(is_sticky()) { ?> tt_sticky <?php } ?> <?php if($count % 2 == 0){echo " tt-2x";} if($count % 3 == 0){echo " tt-3x";} if($count % 4 == 0){echo " tt-4x";} if($count % 5 == 0){echo " tt-5x";} $count++; ?>">
<?php } else { ?>
<article class="tt_list thaitheme post1x <?php if(is_sticky()) { ?> tt_sticky <?php } ?> <?php  if($count == 1){echo " tt-1x";} if($count % 2 == 0){echo " tt-part";}  $count++; ?>">
<?php }?>
<a href="<?php the_permalink() ?>" title="<?php the_title(); ?>">
<?php $image = thaitheme_img_list( get_the_ID() ) ?>  
<?php if($image) { ?>
<div class="tt-img">
<?php if(is_sticky()) { ?> <div class="tt-img-sticky"></div> <?php } ?> 
<img src="<?php esc_attr_e($image) ?>" alt=""/>
</div>
<?php }else { ?>
<div class="tt-img">
<?php if(is_sticky()) { ?> <div class="tt-img-sticky"></div> <?php } ?> 
<?php thaitheme_post_no_image(220,165); ?> 
</div>
<?php } ?>
<?php global $thaitheme_option;  $thaitheme_display =  $thaitheme_option['thaitheme_display'];if($thaitheme_display == 2) {?> 
<div class="tt_desc">
<p class="tt_ad_location"><i class="fa fa-map-marker"></i> <?php $thaitheme_mata_location_province = get_post_meta( get_the_ID(), "thaitheme_mata_location_province", true );  ?><?php esc_html_e( $thaitheme_mata_location_province ) ?> </p>
<h3><?php esc_html_e( get_post( $post_id )->post_title ) ?></h3>
<p class="tt_ad_price"><?php $price = get_post_meta( get_the_ID(), "adverts_price", true );  ?><?php esc_html_e( adverts_price( $price ) ) ?> บาท</p>
</div>
<?php } else { ?>
<div class="tt_desc">
<h3><?php esc_html_e( get_post( $post_id )->post_title ) ?></h3>
 <span class="tt_ad_date"> <i class="fa fa-clock-o"></i> <?php the_time(' j F Y') ?> <span class="tt_ad_cat"><i class="fa fa-folder-open-o"></i> <?php $categories = get_the_category();if ( ! empty( $categories ) ) { echo '' . esc_html( $categories[0]->name ) . '';} ;?></span></span>
 <p class="tt_ad_location"><i class="fa fa-map-marker"></i> <?php $thaitheme_mata_location_province = get_post_meta( get_the_ID(), "thaitheme_mata_location_province", true );  ?><?php esc_html_e( $thaitheme_mata_location_province ) ?></p>
<p class="tt_ad_price"><?php $price = get_post_meta( get_the_ID(), "adverts_price", true );  ?><?php esc_html_e( adverts_price( $price ) ) ?> บาท</p>
<p class="tt_ad_views"> เข้าชม :  <?php the_views(); ?> ครั้ง </p>
</div>
<?php }?>
</a>
</article>		
<?php endwhile;?><?php else : ?>  
<div class="page-no-post"><p><?php _e("ยังไม่มีรายการประกาศ", "adverts") ?></p></div>
<?php endif;?>
<div class="tt_pagination">
<?php thaitheme_pagination(); ?> 
</div>
</div>
<?php global $thaitheme_option; $thaitheme_leyout_post =  $thaitheme_option['thaitheme_leyout_post']; if($thaitheme_leyout_post == 1) {?><?php } else { ?><?php get_sidebar( '' ); ?><?php }?>
</div>
<?php get_footer(); ?>