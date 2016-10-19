<div class="tt-sec sec-content">
<div class="tt-title-sec">
<?php global $thaitheme_option;  $cat_link = $thaitheme_option['thaitheme_cat_ct7'];?>
<h2><a title="<?php echo get_cat_name($cat_link); ?>" href="<?php echo get_category_link($cat_link); ?>"><?php echo get_cat_name($cat_link); ?></a></h2>
</div>
<?php global $thaitheme_option; $thaitheme_shows_ct7 =  $thaitheme_option['thaitheme_shows_ct7']; $list_cat =  $thaitheme_option['thaitheme_cat_ct7'];$arr_id_cat_all=array(); foreach ((array) $list_cat as $id_cat_all ) {$arr_id_cat_all[]=$id_cat_all;}$my_query = new WP_Query( array( 'post_type' => 'post', 'category__in' => $arr_id_cat_all ,'posts_per_page' => ''.$thaitheme_shows_ct7.'', 'orderby' => array( 'menu_order' => 'DESC', 'date' => 'DESC' ), 'offset' => 0 ) );?>
<?php if ( $my_query->have_posts() ) : $count = 1; while ( $my_query->have_posts() ) : $my_query->the_post(); ?>
<article class="tt_list thaitheme post_news  <?php echo adext_adverts_css_classes( '', get_the_ID() ) ;?> <?php if($count % 2 == 0){echo " tt-2x";} if($count % 3 == 0){echo " tt-3x";} if($count % 4 == 0){echo " tt-4x";} if($count % 5 == 0){echo " tt-5x";} $count++; ?>">
<a href="<?php the_permalink() ?>" title="<?php the_title(); ?>">
	<?php $image = thaitheme_img_list( get_the_ID() ) ?>
	<?php if($image){ ?>
		<div class="tt-img">
		<?php $tt_sticky = adext_adverts_css_classes('', get_the_ID() ) ; if($tt_sticky !=="") { ?> <div class="tt-img-sticky"></div> <?php } ?>
		<?php $img_s = explode("-",esc_attr_e($image)); $image_s1 = $img_s[0]; echo $image_s1;?>
		<img src="<?php esc_attr_e($image) ?>?v=1.0" alt=""/>
		<div class="tt-opacity"></div>
		</div>
	<?php }else { ?>
		<div class="tt-img">
		<?php $tt_sticky = adext_adverts_css_classes('', get_the_ID() ) ; if($tt_sticky !=="") { ?> <div class="tt-img-sticky"></div> <?php } ?>
		<?php thaitheme_post_no_image(220,165); ?>
		<div class="tt-opacity"></div>
		</div>
	<?php } ?>
	<!--
	<div class="tt_desc">
	<p class="tt_ad_location"><i class="fa fa-map-marker"></i> <?//php $thaitheme_mata_location = get_post_meta( get_the_ID(), "thaitheme_mata_location_province", true );  ?><?//php esc_html_e( $thaitheme_mata_location ) ?> </p>
	<h3><?//php esc_html_e( get_post( $post_id )->post_title ) ?></h3>

	<p class="tt_ad_price"><?//php $price = get_post_meta( get_the_ID(), "adverts_price", true );  ?>
		<?//php esc_html_e( adverts_price( $price ) ) ?> บาท</p>

	</div>
	-->
</a>
</article>
<?php  endwhile;?><?php endif; wp_reset_query();?>
</div>
