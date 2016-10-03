<?php
/*
Template Name: ThaiTheme Register
*/
?>
<?php get_header(); ?>
<div class="tt_content"> 
<?php if (is_user_logged_in()) { ?>
<?php get_template_part( 'includes/thaitheme-login-success', get_post_format() ); ?>
<?php } else { ?>
<?php get_template_part( 'includes/thaitheme-register-from', get_post_format() ); ?>
<?php } ?>
</div>
<?php get_footer(); ?>
