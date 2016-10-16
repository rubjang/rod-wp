<?php get_header(); ?>
<div class="tt_content post_news">
<div class="tt-head">
<h2>ข่าวสารทั้งหมด</h2>
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
<h3><?php esc_html_e( get_post( $post_id )->post_title ) ?></h3>
</div>
<?php } else { ?>
<div class="tt_desc">
<h3><?php esc_html_e( get_post( $post_id )->post_title ) ?></h3>
</div>
<?php }?>
</a>
</article>		
<?php endwhile;?><?php else : ?>  
<div class="page-no-post"><p><?php _e("ยังไม่มีข่าวสาร", "adverts") ?></p></div>
<?php endif;?>
<div class="tt_pagination">
<?php thaitheme_pagination(); ?> 
</div>
</div>
<?php global $thaitheme_option; $thaitheme_leyout_post =  $thaitheme_option['thaitheme_leyout_post']; if($thaitheme_leyout_post == 1) {?><?php } else { ?><?php get_sidebar( '' ); ?><?php }?>
</div>
<?php get_footer(); ?>