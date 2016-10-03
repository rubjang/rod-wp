<?php
/*
Template Name: Thaitheme Add
*/
get_header();?>
<div class="tt_content"> 
<?php if (is_user_logged_in()) { ?>
<div class="tt_left tt_full">
<?php if (have_posts()) : ?> <?php while (have_posts()) : the_post(); ?>
<div class="thaitheme_read">
	<?php echo do_shortcode( '[adverts_add]' ); ?>
</div>
<?php endwhile; ?>
</div>
<?php else : ?> 
<div class="page-404">
	<h1>Error! 404</h1>
	<p>" ไม่พบหน้าเว็บไซต์ที่คุณต้องการค้นหา.. " </p>
</div>
<?php  endif; ?>
<?php } else { ?>
<span class="page-no-login"> เข้าสู่ระบบก่อนนะค่ะ จึงจะสามารถโพสต์ขายฟรีได้  </span>
<?php get_template_part( 'includes/thaitheme-login-from', get_post_format() ); ?>
<?php } ?>
</div>
<?php get_footer(); ?>