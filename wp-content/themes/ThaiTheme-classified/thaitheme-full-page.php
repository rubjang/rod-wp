<?php
/*
Template Name: Thaitheme Full Page
*/
get_header();?>
<div class="tt_content">    
<div class="tt_left tt_full">
<?php edit_post_link( __( '<i class="fa fa-edit"> แก้ไข หน้านี้ </i>', 'ddtemplate' ), '<span class="edit-link">', '</span>' ); ?>
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
</div>
<?php get_footer(); ?>