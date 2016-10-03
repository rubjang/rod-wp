<!-- content 4 -->
<div class="tt-sec sec-content">
<div class="tt-title-sec">
<h2><?php global $thaitheme_option;  echo $thaitheme_option['thaitheme_title_ct4']; ?></h2>
</div>
<?php global $thaitheme_option; $thaitheme_post_random = $thaitheme_option['thaitheme_post_random'];  if($thaitheme_post_random == 1){?>
	<?php global $thaitheme_option; $thaitheme_shows_ct4 =  $thaitheme_option['thaitheme_shows_ct4']; $list_cat =  $thaitheme_option['thaitheme_cat_ct4'];$arr_id_cat_all=array(); foreach ((array) $list_cat as $id_cat_all ) {$arr_id_cat_all[]=$id_cat_all;}$my_query = new WP_Query( array( 'post_type' => 'post','orderby' => 'rand', 'category__in' => $arr_id_cat_all ,'posts_per_page' => ''.$thaitheme_shows_ct4.'', 'orderby' => array( 'menu_order' => 'DESC', 'date' => 'DESC' ), 'offset' => 0 ) );?>
	<?php if ( $my_query->have_posts() ) : $count = 1; while ( $my_query->have_posts() ) : $my_query->the_post(); ?> 
	<article class="tt_list thaitheme post_news  <?php echo adext_adverts_css_classes( '', get_the_ID() ) ;?> <?php if($count % 2 == 0){echo " tt-2x";} if($count % 3 == 0){echo " tt-3x";} if($count % 4 == 0){echo " tt-4x";} if($count % 5 == 0){echo " tt-5x";} $count++; ?>">
	<a href="<?php the_permalink() ?>" title="<?php the_title(); ?>">
	<?php $image = thaitheme_img_list( get_the_ID() ) ?>  
	<?php if($image) { ?>
		<div class="tt-img">
		<?php $tt_sticky = adext_adverts_css_classes('', get_the_ID() ) ; if($tt_sticky !=="") { ?> <div class="tt-img-sticky"></div> <?php } ?> 
		<img src="<?php esc_attr_e($image) ?>?v=1.0" alt="<?php the_title(); ?>"/>
		<div class="tt-opacity"></div>
		</div>
	<?php }else { ?>
		<div class="tt-img">
		<?php $tt_sticky = adext_adverts_css_classes('', get_the_ID() ) ; if($tt_sticky !=="") { ?> <div class="tt-img-sticky"></div> <?php } ?> 
		<?php thaitheme_post_no_image(220,165); ?>
		<div class="tt-opacity"></div>
		</div>
	<?php } ?>
	<div class="tt_desc">
	<p class="tt_ad_location"><i class="fa fa-map-marker"></i> <?php $thaitheme_mata_location = get_post_meta( get_the_ID(), "thaitheme_mata_location_province", true );  ?><?php esc_html_e( $thaitheme_mata_location ) ?> </p>
	<h3><?php esc_html_e( get_post( $post_id )->post_title ) ?></h3>
	<p class="tt_ad_price"><?php $price = get_post_meta( get_the_ID(), "adverts_price", true );  ?><?php esc_html_e( adverts_price( $price ) ) ?> บาท</p>
	</div>
	</a>
	</article>			
	<?php  endwhile; ?><?php endif; wp_reset_query();?> 
<?php }else { ?>
<?php global $thaitheme_option; $thaitheme_ct4_posts1 = $thaitheme_option['thaitheme_ct4_posts1'];  ?>
<?php $ids1 = array($thaitheme_ct4_posts1); $args = array('post__in' => $ids1,'posts_per_page' => 1);$loop = new WP_Query($args); while ($loop->have_posts()) : $loop->the_post(); ?>
<article class="tt_list thaitheme post_news  tt-1x">
<a href="<?php the_permalink() ?>" title="<?php the_title(); ?>">
	<?php $image = thaitheme_img_list( get_the_ID() ) ?>  
	<?php if($image) { ?>
		<div class="tt-img">
			<?php $tt_sticky = adext_adverts_css_classes('', get_the_ID() ) ; if($tt_sticky !=="") { ?>
				<div class="tt-img-sticky"></div>
			<?php } ?> 
			<img src="<?php esc_attr_e($image) ?>?v=1.0" alt="<?php the_title(); ?>"/>
			<div class="tt-opacity"></div>
		</div>
	<?php }else { ?>
	<div class="tt-img">
	<?php $tt_sticky = adext_adverts_css_classes('', get_the_ID() ) ; if($tt_sticky !=="") { ?> <div class="tt-img-sticky"></div> <?php } ?> 
	<?php thaitheme_post_no_image(220,165); ?>
	<div class="tt-opacity"></div>
	</div>
	<?php } ?>
	<div class="tt_desc">
		<p class="tt_ad_location"><i class="fa fa-map-marker"></i>
			<?php $thaitheme_mata_location = get_post_meta( get_the_ID(), "thaitheme_mata_location_province", true );  ?><?php esc_html_e( $thaitheme_mata_location ) ?>
		</p>
		<h3><?php esc_html_e( get_post( $post_id )->post_title ) ?></h3>
		<p class="tt_ad_price"><?php $price = get_post_meta( get_the_ID(), "adverts_price", true );  ?>
			<?php esc_html_e( adverts_price( $price ) ) ?> บาท <!-- ads 1 -->
		</p>
	</div>
</a>
</article>	
<?php endwhile;wp_reset_query(); ?>	
<?php global $thaitheme_option; $thaitheme_ct4_posts2 = $thaitheme_option['thaitheme_ct4_posts2'];  ?>
<?php $ids1 = array($thaitheme_ct4_posts2); $args = array('post__in' => $ids1,'posts_per_page' => 1);$loop = new WP_Query($args); while ($loop->have_posts()) : $loop->the_post(); ?>
<article class="tt_list thaitheme post_news  tt-2x">
<a href="<?php the_permalink() ?>" title="<?php the_title(); ?>">
<?php $image = thaitheme_img_list( get_the_ID() ) ?>  
<?php if($image) { ?>
<div class="tt-img">
<?php $tt_sticky = adext_adverts_css_classes('', get_the_ID() ) ; if($tt_sticky !=="") { ?> <div class="tt-img-sticky"></div> <?php } ?> 
<img src="<?php esc_attr_e($image) ?>?v=1.0" alt="<?php the_title(); ?>"/>
<div class="tt-opacity"></div>
</div>
<?php }else { ?>
<div class="tt-img">
<?php $tt_sticky = adext_adverts_css_classes('', get_the_ID() ) ; if($tt_sticky !=="") { ?> <div class="tt-img-sticky"></div> <?php } ?> 
<?php thaitheme_post_no_image(220,165); ?>
<div class="tt-opacity"></div>
</div>
<?php } ?>
<div class="tt_desc">
<p class="tt_ad_location"><i class="fa fa-map-marker"></i> <?php $thaitheme_mata_location = get_post_meta( get_the_ID(), "thaitheme_mata_location_province", true );  ?><?php esc_html_e( $thaitheme_mata_location ) ?> </p>
<h3><?php esc_html_e( get_post( $post_id )->post_title ) ?></h3>
<p class="tt_ad_price"><?php $price = get_post_meta( get_the_ID(), "adverts_price", true );  ?><?php esc_html_e( adverts_price( $price ) ) ?> บาท <!-- ads 2 --></p>
</div>
</a>
</article>	
<?php endwhile;wp_reset_query(); ?>	
<?php global $thaitheme_option; $thaitheme_ct4_posts3 = $thaitheme_option['thaitheme_ct4_posts3'];  ?>
<?php $ids1 = array($thaitheme_ct4_posts3); $args = array('post__in' => $ids1,'posts_per_page' => 1);$loop = new WP_Query($args); while ($loop->have_posts()) : $loop->the_post(); ?>
<article class="tt_list thaitheme post_news  tt-3x">
<a href="<?php the_permalink() ?>" title="<?php the_title(); ?>">
<?php $image = thaitheme_img_list( get_the_ID() ) ?>  
<?php if($image) { ?>
<div class="tt-img">
<?php $tt_sticky = adext_adverts_css_classes('', get_the_ID() ) ; if($tt_sticky !=="") { ?> <div class="tt-img-sticky"></div> <?php } ?> 
<img src="<?php esc_attr_e($image) ?>?v=1.0" alt="<?php the_title(); ?>"/>
<div class="tt-opacity"></div>
</div>
<?php }else { ?>
<div class="tt-img">
<?php $tt_sticky = adext_adverts_css_classes('', get_the_ID() ) ; if($tt_sticky !=="") { ?> <div class="tt-img-sticky"></div> <?php } ?> 
<?php thaitheme_post_no_image(220,165); ?>
<div class="tt-opacity"></div>
</div>
<?php } ?>
<div class="tt_desc">
<p class="tt_ad_location"><i class="fa fa-map-marker"></i> <?php $thaitheme_mata_location = get_post_meta( get_the_ID(), "thaitheme_mata_location_province", true );  ?><?php esc_html_e( $thaitheme_mata_location ) ?> </p>
<h3><?php esc_html_e( get_post( $post_id )->post_title ) ?></h3>
<p class="tt_ad_price"><?php $price = get_post_meta( get_the_ID(), "adverts_price", true );  ?><?php esc_html_e( adverts_price( $price ) ) ?> บาท <!-- ads 3 --></p>
</div>
</a>
</article>	
<?php endwhile; wp_reset_query(); ?>	
<?php global $thaitheme_option; $thaitheme_ct4_posts4 = $thaitheme_option['thaitheme_ct4_posts4'];  ?>
<?php $ids1 = array($thaitheme_ct4_posts4); $args = array('post__in' => $ids1,'posts_per_page' => 1);$loop = new WP_Query($args); while ($loop->have_posts()) : $loop->the_post(); ?>
<article class="tt_list thaitheme post_news  tt-2x tt-4x">
<a href="<?php the_permalink() ?>" title="<?php the_title(); ?>">
<?php $image = thaitheme_img_list( get_the_ID() ) ?>  
<?php if($image) { ?>
<div class="tt-img">
<?php $tt_sticky = adext_adverts_css_classes('', get_the_ID() ) ; if($tt_sticky !=="") { ?> <div class="tt-img-sticky"></div> <?php } ?> 
<img src="<?php esc_attr_e($image) ?>?v=1.0" alt="<?php the_title(); ?>"/>
<div class="tt-opacity"></div>
</div>
<?php }else { ?>
<div class="tt-img">
<?php $tt_sticky = adext_adverts_css_classes('', get_the_ID() ) ; if($tt_sticky !=="") { ?> <div class="tt-img-sticky"></div> <?php } ?> 
<?php thaitheme_post_no_image(220,165); ?>
<div class="tt-opacity"></div>
</div>
<?php } ?>
<div class="tt_desc">
<p class="tt_ad_location"><i class="fa fa-map-marker"></i> <?php $thaitheme_mata_location = get_post_meta( get_the_ID(), "thaitheme_mata_location_province", true );  ?><?php esc_html_e( $thaitheme_mata_location ) ?> </p>
<h3><?php esc_html_e( get_post( $post_id )->post_title ) ?></h3>
<p class="tt_ad_price"><?php $price = get_post_meta( get_the_ID(), "adverts_price", true );  ?><?php esc_html_e( adverts_price( $price ) ) ?> บาท <!-- ads 4 --></p>
</div>
</a>
</article>	
<?php endwhile; wp_reset_query(); ?>	
<?php global $thaitheme_option; $thaitheme_ct4_posts5 = $thaitheme_option['thaitheme_ct4_posts5'];  ?>
<?php $ids1 = array($thaitheme_ct4_posts5); $args = array('post__in' => $ids1,'posts_per_page' => 1);$loop = new WP_Query($args); while ($loop->have_posts()) : $loop->the_post(); ?>
<article class="tt_list thaitheme post_news  tt-5x">
<a href="<?php the_permalink() ?>" title="<?php the_title(); ?>">
<?php $image = thaitheme_img_list( get_the_ID() ) ?>  
<?php if($image) { ?>
<div class="tt-img">
<?php $tt_sticky = adext_adverts_css_classes('', get_the_ID() ) ; if($tt_sticky !=="") { ?> <div class="tt-img-sticky"></div> <?php } ?> 
<img src="<?php esc_attr_e($image) ?>?v=1.0" alt="<?php the_title(); ?>"/>
<div class="tt-opacity"></div>
</div>
<?php }else { ?>
<div class="tt-img">
<?php $tt_sticky = adext_adverts_css_classes('', get_the_ID() ) ; if($tt_sticky !=="") { ?> <div class="tt-img-sticky"></div> <?php } ?> 
<?php thaitheme_post_no_image(220,165); ?>
<div class="tt-opacity"></div>
</div>
<?php } ?>
<div class="tt_desc">
<p class="tt_ad_location"><i class="fa fa-map-marker"></i> <?php $thaitheme_mata_location = get_post_meta( get_the_ID(), "thaitheme_mata_location_province", true );  ?><?php esc_html_e( $thaitheme_mata_location ) ?> </p>
<h3><?php esc_html_e( get_post( $post_id )->post_title ) ?></h3>
<p class="tt_ad_price"><?php $price = get_post_meta( get_the_ID(), "adverts_price", true );  ?><?php esc_html_e( adverts_price( $price ) ) ?> บาท <!-- ads 5 --></p>
</div>
</a>
</article>	
<?php endwhile; wp_reset_query();?>	
<?php global $thaitheme_option; $thaitheme_ct4_posts6 = $thaitheme_option['thaitheme_ct4_posts6'];  ?>
<?php $ids1 = array($thaitheme_ct4_posts6); $args = array('post__in' => $ids1,'posts_per_page' => 1);$loop = new WP_Query($args); while ($loop->have_posts()) : $loop->the_post(); ?>
<article class="tt_list thaitheme post_news  tt-2x tt-3x">
<a href="<?php the_permalink() ?>" title="<?php the_title(); ?>">
<?php $image = thaitheme_img_list( get_the_ID() ) ?>  
<?php if($image) { ?>
<div class="tt-img">
<?php $tt_sticky = adext_adverts_css_classes('', get_the_ID() ) ; if($tt_sticky !=="") { ?> <div class="tt-img-sticky"></div> <?php } ?> 
<img src="<?php esc_attr_e($image) ?>?v=1.0" alt="<?php the_title(); ?>"/>
<div class="tt-opacity"></div>
</div>
<?php }else { ?>
<div class="tt-img">
<?php $tt_sticky = adext_adverts_css_classes('', get_the_ID() ) ; if($tt_sticky !=="") { ?> <div class="tt-img-sticky"></div> <?php } ?> 
<?php thaitheme_post_no_image(220,165); ?>
<div class="tt-opacity"></div>
</div>
<?php } ?>
<div class="tt_desc">
<p class="tt_ad_location"><i class="fa fa-map-marker"></i> <?php $thaitheme_mata_location = get_post_meta( get_the_ID(), "thaitheme_mata_location_province", true );  ?><?php esc_html_e( $thaitheme_mata_location ) ?> </p>
<h3><?php esc_html_e( get_post( $post_id )->post_title ) ?></h3>
<p class="tt_ad_price"><?php $price = get_post_meta( get_the_ID(), "adverts_price", true );  ?><?php esc_html_e( adverts_price( $price ) ) ?> บาท <!-- ads 6 --></p>
</div>
</a>
</article>	
<?php endwhile; wp_reset_query();?>	
<?php global $thaitheme_option; $thaitheme_ct4_posts7 = $thaitheme_option['thaitheme_ct4_posts7'];  ?>
<?php $ids1 = array($thaitheme_ct4_posts7); $args = array('post__in' => $ids1,'posts_per_page' => 1);$loop = new WP_Query($args); while ($loop->have_posts()) : $loop->the_post(); ?>
<article class="tt_list thaitheme post_news">
<a href="<?php the_permalink() ?>" title="<?php the_title(); ?>">
<?php $image = thaitheme_img_list( get_the_ID() ) ?>  
<?php if($image) { ?>
<div class="tt-img">
<?php $tt_sticky = adext_adverts_css_classes('', get_the_ID() ) ; if($tt_sticky !=="") { ?> <div class="tt-img-sticky"></div> <?php } ?> 
<img src="<?php esc_attr_e($image) ?>?v=1.0" alt="<?php the_title(); ?>"/>
<div class="tt-opacity"></div>
</div>
<?php }else { ?>
<div class="tt-img">
<?php $tt_sticky = adext_adverts_css_classes('', get_the_ID() ) ; if($tt_sticky !=="") { ?> <div class="tt-img-sticky"></div> <?php } ?> 
<?php thaitheme_post_no_image(220,165); ?>
<div class="tt-opacity"></div>
</div>
<?php } ?>
<div class="tt_desc">
<p class="tt_ad_location"><i class="fa fa-map-marker"></i> <?php $thaitheme_mata_location = get_post_meta( get_the_ID(), "thaitheme_mata_location_province", true );  ?><?php esc_html_e( $thaitheme_mata_location ) ?> </p>
<h3><?php esc_html_e( get_post( $post_id )->post_title ) ?></h3>
<p class="tt_ad_price"><?php $price = get_post_meta( get_the_ID(), "adverts_price", true );  ?><?php esc_html_e( adverts_price( $price ) ) ?> บาท <!-- ads 7 --></p>
</div>
</a>
</article>	
<?php endwhile; wp_reset_query();?>	
<?php global $thaitheme_option; $thaitheme_ct4_posts8 = $thaitheme_option['thaitheme_ct4_posts8'];  ?>
<?php $ids1 = array($thaitheme_ct4_posts8); $args = array('post__in' => $ids1,'posts_per_page' => 1);$loop = new WP_Query($args); while ($loop->have_posts()) : $loop->the_post(); ?>
<article class="tt_list thaitheme post_news  tt-2x tt-4x">
<a href="<?php the_permalink() ?>" title="<?php the_title(); ?>">
<?php $image = thaitheme_img_list( get_the_ID() ) ?>  
<?php if($image) { ?>
<div class="tt-img">
<?php $tt_sticky = adext_adverts_css_classes('', get_the_ID() ) ; if($tt_sticky !=="") { ?> <div class="tt-img-sticky"></div> <?php } ?> 
<img src="<?php esc_attr_e($image) ?>?v=1.0" alt="<?php the_title(); ?>"/>
<div class="tt-opacity"></div>
</div>
<?php }else { ?>
<div class="tt-img">
<?php $tt_sticky = adext_adverts_css_classes('', get_the_ID() ) ; if($tt_sticky !=="") { ?> <div class="tt-img-sticky"></div> <?php } ?> 
<?php thaitheme_post_no_image(220,165); ?>
<div class="tt-opacity"></div>
</div>
<?php } ?>
<div class="tt_desc">
<p class="tt_ad_location"><i class="fa fa-map-marker"></i> <?php $thaitheme_mata_location = get_post_meta( get_the_ID(), "thaitheme_mata_location_province", true );  ?><?php esc_html_e( $thaitheme_mata_location ) ?> </p>
<h3><?php esc_html_e( get_post( $post_id )->post_title ) ?></h3>
<p class="tt_ad_price"><?php $price = get_post_meta( get_the_ID(), "adverts_price", true );  ?><?php esc_html_e( adverts_price( $price ) ) ?> บาท <!-- ads 8 --></p>
</div>
</a>
</article>

<?php endwhile; wp_reset_query();?>	
<?php global $thaitheme_option; $thaitheme_ct4_posts9 = $thaitheme_option['thaitheme_ct4_posts9'];  ?>
<?php $ids1 = array($thaitheme_ct4_posts9); $args = array('post__in' => $ids1,'posts_per_page' => 1);$loop = new WP_Query($args); while ($loop->have_posts()) : $loop->the_post(); ?>
<article class="tt_list thaitheme post_news  tt-3x">
<a href="<?php the_permalink() ?>" title="<?php the_title(); ?>">
<?php $image = thaitheme_img_list( get_the_ID() ) ?>  
<?php if($image){?>
	<div class="tt-img">
	<?php $tt_sticky = adext_adverts_css_classes('', get_the_ID() ) ; if($tt_sticky !=="") { ?> <div class="tt-img-sticky"></div> <?php } ?> 
	<img src="<?php esc_attr_e($image) ?>?v=1.0" alt="<?php the_title(); ?>"/>
	<div class="tt-opacity"></div>
	</div>
<?php }else { ?>
	<div class="tt-img">
	<?php $tt_sticky = adext_adverts_css_classes('', get_the_ID() ) ; if($tt_sticky !=="") { ?> <div class="tt-img-sticky"></div> <?php } ?> 
	<?php thaitheme_post_no_image(220,165); ?>
	<div class="tt-opacity"></div>
	</div>
<?php } ?>
<div class="tt_desc">
<p class="tt_ad_location"><i class="fa fa-map-marker"></i> <?php $thaitheme_mata_location = get_post_meta( get_the_ID(), "thaitheme_mata_location_province", true );  ?>
	<?php esc_html_e( $thaitheme_mata_location ) ?>
</p>
<h3><?php esc_html_e( get_post( $post_id )->post_title ) ?></h3>
<p class="tt_ad_price"><?php $price = get_post_meta( get_the_ID(), "adverts_price", true );  ?><?php esc_html_e( adverts_price( $price ) ) ?> บาท <!-- ads 9 --></p>
</div>
</a>
</article>

<?php endwhile; wp_reset_query();?>	
<?php global $thaitheme_option; $thaitheme_ct4_posts10 = $thaitheme_option['thaitheme_ct4_posts10'];  ?>
<?php $ids1 = array($thaitheme_ct4_posts10); $args = array('post__in' => $ids1,'posts_per_page' => 1);$loop = new WP_Query($args); while ($loop->have_posts()) : $loop->the_post(); ?>
<article class="tt_list thaitheme post_news  tt-2x tt-5x">
<a href="<?php the_permalink() ?>" title="<?php the_title(); ?>">
<?php $image = thaitheme_img_list( get_the_ID() ) ?>  
<?php if($image) { ?>
<div class="tt-img">
<?php $tt_sticky = adext_adverts_css_classes('', get_the_ID() ) ; if($tt_sticky !=="") { ?> <div class="tt-img-sticky"></div> <?php } ?> 
<img src="<?php esc_attr_e($image) ?>?v=1.0" alt="<?php the_title(); ?>"/>
<div class="tt-opacity"></div>
</div>
<?php }else { ?>
	<div class="tt-img">
		<?php $tt_sticky = adext_adverts_css_classes('', get_the_ID() ) ; if($tt_sticky !=="") { ?>
		<div class="tt-img-sticky"></div>
		<?php } ?>
		<?php thaitheme_post_no_image(220,165); ?>
		<div class="tt-opacity"></div>
	</div>
<?php } ?>
<div class="tt_desc">
	<p class="tt_ad_location"><i class="fa fa-map-marker"></i>
		<?php $thaitheme_mata_location = get_post_meta( get_the_ID(), "thaitheme_mata_location_province", true );  ?>
		<?php esc_html_e( $thaitheme_mata_location ) ?>
	</p>
	<h3><?php esc_html_e( get_post( $post_id )->post_title ) ?></h3>
	<p class="tt_ad_price">
		<?php $price = get_post_meta( get_the_ID(), "adverts_price", true );  ?>
		<?php esc_html_e( adverts_price( $price ) ) ?> บาท <!-- ads 10 -->
	</p>
</div>
</a>
</article>	
<?php endwhile; wp_reset_query();?>	
<?php } ?>
</div>