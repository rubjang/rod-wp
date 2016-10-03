<?php
/*
Template Name: Thaitheme Manage
*/
get_header();?>
<?php get_header(); ?>
<div class="tt_content"> 
<?php if (is_user_logged_in()) { ?>
<?php if (have_posts()) : ?> <?php while (have_posts()) : the_post(); ?>
	<?php echo do_shortcode( '[adverts_manage]' ); ?>
<?php endwhile; ?><?php else : ?>  
<div class="page-404">
	<h1>Error! 404</h1>
	<p>" ไม่พบหน้าเว็บไซต์ที่คุณต้องการค้นหา.. " </p>
</div>
<?php  endif; ?>
<?php } else { ?>
<?php get_template_part( 'includes/thaitheme-login-from', get_post_format() ); ?>
<?php } ?>
</div>
<?php get_footer(); ?>