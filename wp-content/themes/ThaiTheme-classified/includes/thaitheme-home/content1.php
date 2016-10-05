<div class="tt-sec">
<?php global $thaitheme_option; $thaitheme_cat_ct1 =  $thaitheme_option['thaitheme_cat_ct1']; $list_cat =  $thaitheme_option['thaitheme_cat_ct1'];$count = 1;
foreach ((array) $list_cat as $id_cat_all ) {?>
<article class="tt_list cat_all  <?php if($count % 3 == 0){echo " tt-3x";} if($count % 4 == 0){echo " tt-4x";} if($count % 5 == 0){echo " tt-5x";} if($count % 6 == 0){echo " tt-6x";} $count++; ?>">
<a href="<?php echo home_url( '/' ); ?>category/<?php echo thaitheme_cat_slug($id_cat_all); ?>" title="<?php echo get_cat_name($id_cat_all );?>">
<div class="tt-category-img">
<?php if( z_taxonomy_image_url( $id_cat_all) == "") {?>
<?php thaitheme_post_no_image(48,48); ?>
<?php } else { ?>
<img  alt="<?php echo get_cat_name($id_cat_all );?>" src="<?php echo z_taxonomy_image_url( $id_cat_all); ?>?v=1.0)" />
<?php }?>
</div>
<div class="tt-category-title">
<?php echo get_cat_name($id_cat_all );?>
<?php global $thaitheme_option;  $thaitheme_cat_count =  $thaitheme_option['thaitheme_cat_count']['1']; if($thaitheme_cat_count == 1) {?>
<span>(<?php $tt_count_category = 0;   $query_post_count = new WP_Query(); $query_post_count->query("cat=".$id_cat_all."");  ?><?php while ($query_post_count->have_posts()) : $query_post_count->the_post(); ?><?php $tt_count_category++; endwhile; wp_reset_query(); ?><?php if ($tt_count_category == 0) : ?>0<?php else : ?><?php echo $tt_count_category++; ?><?php endif; ?>)</span>
<?php } else {?> <?php }?>
</div>
</a>
</article>
<?php } ?>
</div>
