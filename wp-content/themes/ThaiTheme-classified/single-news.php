<?php get_header(); ?>
<div class="tt_content">    
<div class="tt_left">
<div class="tt_title single <?php $categories = get_the_category();if ( ! empty( $categories ) ) {echo 'cat_id' . esc_html( $categories[0]->term_id ) . '';} ;?>">
<h1><?php the_title(); ?></h1>
<?php edit_post_link( __( '<i class="fa fa-edit"> แก้ไข หน้านี้ </i>', 'ddtemplate' ), '<span class="edit-link">', '</span>' ); ?>
</div>
<?php if (have_posts()) : ?> <?php while (have_posts()) : the_post(); ?>
<div class="thaitheme_read">
	<?php the_content(''); ?>
</div>
<?php global $thaitheme_option;  $thaitheme_close_comment =  $thaitheme_option['thaitheme_close_comment']['1'];
if($thaitheme_close_comment == 1) {?> 
<?php } else {?> 	
<?php global $thaitheme_option;  $thaitheme_use_comment =  $thaitheme_option['thaitheme_use_comment'];
if($thaitheme_use_comment == 1) {?> 
<div class="tt_comment">
<h2 class="<?php $categories = get_the_category();if ( ! empty( $categories ) ) {echo 'cat_id' . esc_html( $categories[0]->term_id ) . '';} ;?>">แสดงความคิดเห็น  เกี่ยวกับ " <span><?php the_title(); ?></span> "</h2>
<?php comments_template(); ?>	
</div>
<?php } else {?> 
<div class="tt_comment">
<h2 class="<?php $categories = get_the_category();if ( ! empty( $categories ) ) {echo 'cat_id' . esc_html( $categories[0]->term_id ) . '';} ;?>">แสดงความคิดเห็นด้วย Facebook</h2>
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
<?php endwhile; ?><?php else : ?>  
<div class="page-404">
	<h1>Error! 404</h1>
	<p>" ไม่พบหน้าเว็บไซต์ที่คุณต้องการค้นหา.. " </p>
</div>
<?php  endif; ?>
</div>
<?php get_sidebar( '' ); ?>
</div>
<?php get_footer(); ?>