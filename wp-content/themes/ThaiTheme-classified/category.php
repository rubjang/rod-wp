<?php get_header(); ?>
<div class="tt_search_header">
<?php get_template_part( 'includes/search-from', get_post_format() ); ?> 
</div>
<div class="tt_content">
<div class="tt-head">
<h2><?php single_cat_title(); ?></h2>
<span class="tt_bd_top <?php $categories = get_the_category();if ( ! empty( $categories ) ) {echo 'cat_id' . esc_html( $categories[0]->term_id ) . '';} ;?>"> </span>
<span class="tt_bd_bottom <?php $categories = get_the_category();if ( ! empty( $categories ) ) {echo 'cat_id' . esc_html( $categories[0]->term_id ) . '';} ;?>"> </span>
</div>    
<?php
if (is_category()) {
$this_category = get_category($cat);
}
if($this_category->category_parent)
$this_category = wp_list_categories('orderby=id&title_li=&child_of='.$this_category->category_parent."&echo=0"); else
$this_category = wp_list_categories('orderby=id&title_li=&child_of='.$this_category->cat_ID."&echo=0");
if ($this_category) { ?>
<ul  class="category-parent">
<?php $this_category_emp = $this_category ;if($this_category_emp == '<li class="cat-item-none">uncategorized</li>'||$this_category_emp == '<li class="cat-item-none">ไม่มีหมวดหมู่</li>') {?><?php } else { ?> <span>หมวดหมู่ย่อย: </span><?php }?><?php echo $this_category; ?>
</ul>
<?php } ?>
<?php global $thaitheme_option;  $thaitheme_display =  $thaitheme_option['thaitheme_display'];$thaitheme_leyout_post =  $thaitheme_option['thaitheme_leyout_post'];if($thaitheme_display == 2) {?> 
<div class="tt_left grid <?php if($thaitheme_leyout_post == 1) {?>tt_full<?php } else { ?><?php }?>">
<?php } else { ?>
<div class="tt_left list <?php if($thaitheme_leyout_post == 1) {?>tt_full<?php } else { ?><?php }?>">
<?php }?>
<div class="tt-search_filter">
 <form name="search" action="" method="get">
  <select id="thaitheme_select_submit" name="location">
  <option value="">ทุกจังหวัด</option>
  <?php
  $location_selected = $_GET['location'];
  $metakey = 'thaitheme_mata_location_province';
  $location = $wpdb->get_col($wpdb->prepare("SELECT DISTINCT meta_value FROM $wpdb->postmeta WHERE meta_key = %s ORDER BY meta_value ASC", $metakey) );
  if ($location) {
    foreach ($location as $county) {?>
     <option <?php if ($location_selected == $county) { ?>  selected="selected"  <?php }?> value="<?php echo $county ; ?>"><?php echo $county ; ?></option>
  <?php  }
  }
  ?>
  </select>
<?php $max_price = $_GET['max-price']; $min_price = $_GET['min-price'];   ?>   
<input class="thaitheme_from_price" type="number" name="min-price" value="<?php echo $min_price ;  ?>" placeholder="ราคาเริ่มต้น" />
<input class="thaitheme_from_price" type="number" name="max-price" value="<?php echo $max_price ; ?>" placeholder="สูงสุด"/>
<input id="submit-button" type="submit" value="ค้นหา">
</form>
</div> 
<?php global $wp_query;
$max_price_g = $_GET['max-price'];   
$min_price_g = $_GET['min-price'];   
if ($max_price_g =="" ) {
$max_price = "999999999";
} else {
$max_price = $max_price_g;
}
if ($min_price_g =="" ) {
$min_price = "1";
} else {
$min_price = $min_price_g;
}
$location = $_GET['location'];
$category_g =  get_query_var('cat');
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
$sticky = get_option( 'sticky_posts' );
$args = array(
    'post_type' => 'post',
	'orderby' => array( 'menu_order' => 'DESC', 'date' => 'DESC' ),
	'post_status' => 'publish',
    'cat' => $category_g,
	's' => $search_s,
    'meta_query' => $meta_query,	
	'paged' => $paged
);
$paged = (get_query_var('paged')) ? get_query_var('paged') : 1; $wp_query = new WP_Query($args);?>
<?php if ($wp_query->have_posts()) : $count = 1;  while ($wp_query->have_posts()) : $wp_query->the_post();?>  
<?php global $thaitheme_option;  $thaitheme_display =  $thaitheme_option['thaitheme_display'];if($thaitheme_display == 2) {?> 
<article class="tt_list thaitheme post3x  <?php echo adext_adverts_css_classes( '', get_the_ID() ) ;?> <?php if($count % 2 == 0){echo " tt-2x";} if($count % 3 == 0){echo " tt-3x";} if($count % 4 == 0){echo " tt-4x";} if($count % 5 == 0){echo " tt-5x";} $count++; ?>">
<?php } else { ?>
<article class="tt_list thaitheme post1x <?php echo adext_adverts_css_classes( '', get_the_ID() ) ;?> <?php  if($count == 1){echo " tt-1x";} if($count % 2 == 0){echo " tt-part";}  $count++; ?>">
<?php }?>
<a href="<?php the_permalink() ?>" title="<?php the_title(); ?>">
<?php $image = thaitheme_img_list( get_the_ID() ) ?>  
<?php if($image) { ?>
<div class="tt-img">
<?php $tt_sticky = adext_adverts_css_classes('', get_the_ID() ) ; if($tt_sticky !=="") { ?> <div class="tt-img-sticky"></div> <?php } ?> 
<img src="<?php esc_attr_e($image) ?>" alt=""/>
<div class="tt-opacity"></div>
</div>
<?php }else { ?>
<div class="tt-img">
<?php $tt_sticky = adext_adverts_css_classes('', get_the_ID() ) ; if($tt_sticky !=="") { ?> <div class="tt-img-sticky"></div> <?php } ?>  
<?php thaitheme_post_no_image(220,165); ?>
<div class="tt-opacity"></div>
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