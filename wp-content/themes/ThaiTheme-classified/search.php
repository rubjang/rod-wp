<?php get_header(); ?>
<div class="tt_content">
<div class="tt-head">
<?php
error_reporting(0);
?>
<?php 
global $wp_query;
$max_price = $_GET['max_price']; 
$min_price = $_GET['min_price'];   
$location = $_GET['location'];
$category_g = $_GET['cat'];
$search_s = $_GET['s']; 
if($max_price == "" && $min_price =="" && $search_s == "" && $location=="" && $category_g =="0" ) {?> 
<h2>ประกาศทั้งหมด</h2>
<?php } else { ?>
<?php  if($search_s == "" ) {?> 
<h2>ผลการค้นหา </h2>
<?php } else { ?>
<h2><?php printf( esc_html__( 'ผลการคันหา " ' . '%s' . ' "', 'themefever' ), ' <strong>' . get_search_query() . '</strong>' ); ?></h2>
<?php }?>
<?php }?>
<span class="tt_bd_top"> </span>
<span class="tt_bd_bottom"> </span>
</div>  
<?php global $thaitheme_option;  $thaitheme_display =  $thaitheme_option['thaitheme_display'];$thaitheme_leyout_post =  $thaitheme_option['thaitheme_leyout_post'];if($thaitheme_display == 2) {?> 
<div class="tt_left grid <?php if($thaitheme_leyout_post == 1) {?>tt_full<?php } else { ?><?php }?>">
<?php } else { ?>
<div class="tt_left list <?php if($thaitheme_leyout_post == 1) {?>tt_full<?php } else { ?><?php }?>">
<?php }?>
<div class="tt_search_query"> ค้นหา :  
<?php  if($category_g =="0" ) {?> 
<span><i class="fa fa-folder-open"></i>  ทุกหมวดหมู่</span> 
<?php } else { ?>
<span><i class="fa fa-folder-open"></i> <?php echo get_cat_name($category_g );?></span> 
<?php }?>
<?php  if($location == "" ) {?> 
<span> <i class="fa fa-map-marker"></i> ทุกจังหวัด</span> 
<?php } else { ?>
<i class="fa fa-map-marker"></i> <span>จังหวัด<?php echo $location;?></span> 
<?php }?>
<i class="fa fa-shopping-cart"></i> 
<?php  if($min_price == ""&& $max_price == "") {?>
 ทุกราคา
<?php } else { ?>

<?php  if($min_price == "" ) {?>
0
<?php } else { ?>
<span class="tt_query_min_price">
<?php esc_html_e( adverts_price( $min_price ) ) ?> 
</span>
<?php }?> 
<span class="tt_query_min_price"> - </span>
<?php  if($max_price == "" ) {?>
สูงสุด
<?php } else { ?>
<span class="tt_query_min_price"><?php esc_html_e( adverts_price( $max_price ) ) ?> </span>
<?php }?>
<?php }?>
</div>
<?php global $wp_query;
$max_price = $_GET['max_price']; 
$min_price = $_GET['min_price'];   
$location = $_GET['location'];
$category_g = $_GET['cat'];
$search_s = $_GET['s']; 
	if ($location != ''){ 
            $meta_query[] = array(
               'key'       => 'thaitheme_mata_location_province',
			   'value' => $location,
               'compare' => 'LIKE'
            );	
        } 
        if ($min_price!= ''){
            $meta_query[] = array(
                'key' => 'adverts_price',
               'value'   => $min_price,
                'compare'   => '>=',
				'type' => 'numeric'
            );
        } 
		if ($max_price!= ''){  
            $meta_query[] = array(
                'key' => 'adverts_price',
                'value' => $max_price,
				 'compare' => '<=',
                'type' => 'numeric'
               
            );
        } 
$args = array(
    'post_type' => 'post',
	'post_status' => 'publish',
    'category__in' => $category_g,
	's' => $search_s,
    'meta_query' => $meta_query,	
	'paged' => $paged
);
$paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
$wp_query = new WP_Query($args);?>
<?php if ($wp_query->have_posts()) : $count = 1;  while ($wp_query->have_posts()) : $wp_query->the_post();?>            
<?php global $thaitheme_option;  $thaitheme_display =  $thaitheme_option['thaitheme_display'];if($thaitheme_display == 2) {?> 
<article class="tt_list thaitheme post3x  <?php if($count % 2 == 0){echo " tt-2x";} if($count % 3 == 0){echo " tt-3x";} if($count % 4 == 0){echo " tt-4x";} if($count % 5 == 0){echo " tt-5x";} $count++; ?>">
<?php } else { ?>
<article class="tt_list thaitheme post1x <?php  if($count == 1){echo " tt-1x";} if($count % 2 == 0){echo " tt-part";}  $count++; ?>">
<?php }?>
<a href="<?php the_permalink() ?>" title="<?php the_title(); ?>">
<?php $image = thaitheme_img_list( get_the_ID() ) ?>  
<?php if($image) { ?>
<div class="tt-img">
<img src="<?php esc_attr_e($image) ?>" alt=""/>
</div>
<?php }else { ?>
<div class="tt-img">
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
<?php endwhile; ?>  
<?php else : ?>
<div class="page-404">
	<p>ไม่พบประกาศที่ท่านต้องการค้นหา </p>
    <p class="post-none"> กรุณาปรับเงื่อนไขการค้นหาเช่นเลือกพื้นที่หรือหมวดหมู่ และลองค้นหาใหม่อีกครั้ง </p>
	<div class="thaitheme-no-post"></div>
</div>
<?php  endif; ?>
<div class="tt_pagination">
<?php thaitheme_pagination(); ?> 
</div>
</div>
<?php global $thaitheme_option; $thaitheme_leyout_post =  $thaitheme_option['thaitheme_leyout_post']; if($thaitheme_leyout_post == 1) {?><?php } else { ?><?php get_sidebar( '' ); ?><?php }?>
</div>
<?php get_footer(); ?>