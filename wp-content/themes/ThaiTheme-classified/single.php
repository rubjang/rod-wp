<?php get_header(); ?>
<?php 
$post = $wp_query->post;
if ( in_category(999999999) ) {
	include(TEMPLATEPATH . '/thaitheme-page.php'); } 
else {
	include(TEMPLATEPATH . '/thaitheme-page.php');
}
?>
<?php get_footer(); ?>