<?php get_header(); ?>
<div class="tt_content">    
<div class="tt_title single">
<h1><?php the_title(); ?></h1>
</div>
<?php if (have_posts()) : ?> <?php while (have_posts()) : the_post(); ?>
<?php
// tracking code
if (get_post_type($post->ID) == 'post') { 
   update_post_meta($post->ID,'post_last_viewed',current_time('mysql')); 
   update_post_meta($post->ID,'post_visitor_ip',$_SERVER['REMOTE_ADDR']);} 
?>
<div class="thaitheme_read">
	<?php the_content(''); ?>
</div>
<?php endwhile; ?><?php else : ?>  
<div class="page-404">
	<h1>Error! 404</h1>
	<p>" ไม่พบหน้าเว็บไซต์ที่คุณต้องการค้นหา.. " </p>
</div>
<?php endif; ?>
</div>
<?php get_footer(); ?>