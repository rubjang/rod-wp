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