<?php get_header();  /*get_header <=  wp-includes/general-template.php */ ?>
<div class="tt_search_header">
<?php get_template_part( 'includes/search-from', get_post_format() ); ?>
</div>
<div class="tt_content">
<div class="tt-head">
<h2>หมวดรถรับจ้าง</h2>
<span class="tt_bd_top <?php $categories = get_the_category();if ( ! empty( $categories ) ) {echo 'cat_id' . esc_html( $categories[0]->term_id ) . '';} ;?>"> </span>
<span class="tt_bd_bottom <?php $categories = get_the_category();if ( ! empty( $categories ) ) {echo 'cat_id' . esc_html( $categories[0]->term_id ) . '';} ;?>"> </span>
</div>
<?php global $thaitheme_option; $thaitheme_leyout_home =  $thaitheme_option['thaitheme_leyout_home'];?>

<div class="tt_left list tt_full">
<?php global $thaitheme_option; $layout = $thaitheme_option['thaitheme_homepage_cf']['enabled'];
if ($layout): foreach ($layout as $key=>$value) {
    switch($key) {
        case 'content1': get_template_part( 'includes/thaitheme-home/content1' ); /* หมวดรถรับจ้าง */  /*get_template_part <=  wp-includes/general-template.php */
        break;
    }
}
endif; ?>
</div>

<div class="tt_left list <?php if($thaitheme_leyout_home == 1) {?>tt_full<?php } else { ?> tt_col<?php }?>">
<?php global $thaitheme_option; $layout = $thaitheme_option['thaitheme_homepage_cf']['enabled'];
if ($layout): foreach ($layout as $key=>$value) {
    switch($key) {
      //  case 'content1': get_template_part( 'includes/thaitheme-home/content1' ); /* หมวดรถรับจ้าง */  /*get_template_part <=  wp-includes/general-template.php */
       // break;
        case 'content2': get_template_part( 'includes/thaitheme-home/content2' );
        break;
		case 'content3': get_template_part( 'includes/thaitheme-home/content3' ); /* ประกาศมาใหม่ล่าสุด */
        break;
		case 'content4': get_template_part( 'includes/thaitheme-home/content4' );  /* ประกาศแนะนำ */
        break;
		case 'content5': get_template_part( 'includes/thaitheme-home/content5' );  /* ตำแหน่งโฆษณา A1 */
        break;
		case 'content6': get_template_part( 'includes/thaitheme-home/content6' ); /* ตำแหน่งโฆษณา A2 */
        break;
		case 'content7': get_template_part( 'includes/thaitheme-home/content7' );
        break;
		case 'content8': get_template_part( 'includes/thaitheme-home/content8' );
        break;
		case 'content-banner1': get_template_part( 'includes/thaitheme-home/content-banner1' );
        break;
		case 'content-banner2': get_template_part( 'includes/thaitheme-home/content-banner2' );
        break;
		case 'content-banner3': get_template_part( 'includes/thaitheme-home/content-banner3' );
        break;

    }
}
endif; ?>
</div>
<?php global $thaitheme_option; $thaitheme_leyout_home =  $thaitheme_option['thaitheme_leyout_home']; if($thaitheme_leyout_home == 1) {?><?php } else { ?>
	<?php get_sidebar( '' );
		/*wp-includes/general-template.php*/
		/* เมนูด้านซ้าย  > รูปแบบบล็อก > วิดเจ็ต > Sidebar Default */
		?>
<?php }?>
</div>
<?php get_footer(); ?>
