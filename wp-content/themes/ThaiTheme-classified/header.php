<!DOCTYPE HTML><html <?php language_attributes(); ?>><head>
<meta charset="<?php bloginfo('charset'); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title><?php wp_title(''); ?><?php if(wp_title('', false)) { echo ' :'; } ?> <?php bloginfo('name'); ?></title>
<!-- support of HTML5 elements -->
 <!--[if lt IE 9]>
     <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
 <![endif]-->
<link href="<?php echo get_template_directory_uri(); ?>/favicon.ico?v=1.1" rel="shortcut icon" />
<link href="<?php bloginfo('template_url'); ?>/css/css-by-thaitheme.css?v=1.<?php echo time(); ?>" rel="stylesheet" type="text/css" />
<?php wp_head(); ?>
<!-- Google Analytics -->
<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');
  ga('create', 'UA-31084338-1', 'auto');
  ga('send', 'pageview');
</script>
<!-- //Google Analytics -->
<meta name="verify-v1" content="lck1q+mbpWIGGtL2/FxmvokI37qVMT9OtmhFuxP9s14=" />
<meta name='Distribution' content='Local' />
<meta name="googlebot" CONTENT="index,follow" />
<meta name="author" content="rodrubjang.com" />
<meta name="robots" content="index,follow" />
<meta name="revisit-after" content="4 hours"/>
<!-- Begin Schema.org Markup Google Plus -->
<meta itemprop="headline" content="<?php wp_title(''); ?>" />
<meta itemprop="name" content="รถรับจ้าง รถรับจ้างขนของกรุงเทพ บริการรถกระบะรับจ้าง บริการย้ายของ บริการขนย้ายทั่วทั้งประเทศ" />
<meta itemprop="description" content="<?=$meta_des?>" />
<meta itemprop="image" content="http://www.rodrubjang.com/images/fb/share.jpg" />
<!-- End Schema.org Markup Google Plus -->
<!-- Begin Social Open Graph Facebook  -->
<meta property="fb:app_id" content="1019222071468755"/>
<meta property="og:type" content="website" />
<meta property="og:site_name" content="rodrubjang.com"/>
<meta property="og:title" content="<?php wp_title(''); ?>" />
<meta property="og:description" content="<?=$meta_des?>"/>
<meta property="og:image" content="http://www.rodrubjang.com/images/fb/share.jpg" />
<meta property="og:url" content="www.rodrubjang.com"/>
<!-- End Social Open Graph Facebook  -->
</head>
  <style type="text/css">
  body {
  	filter:grayscale(1); -webkit-filter:grayscale(1)
  }
  logo *{ filter:grayscale(1); -webkit-filter:grayscale(1)}

  body
  .sp-event{ margin:0 auto; max-width:100%; text-align:center; background-color:black}
  .sp-event img{ max-width:100%; height:auto}
  body>.container

  </style>
<body <?php body_class(); ?>>
<div class="tt_head_content">
<div class="tt_head_top sb-slide">
<div class="tt_main">
<div class="tt_ct_menu">
<a class="tt_list_menu del" title="แจ้งลบประกาศ" href="แจ้งลบประกาศ<?php //global $thaitheme_option; echo $thaitheme_option['thaitheme_menu_del'];  ?>"> แจ้งลบประกาศ</a>
<a class="tt_list_menu help" title="คู่มือลงประกาศ" href="วิธีลงประกาศ<?php //global $thaitheme_option; echo $thaitheme_option['thaitheme_menu_help'];  ?>"> วิธีลงประกาศ</a>
<a class="tt_list_menu contact" title="ติดต่อเรา" href="ติดต่อลงโฆษณา<?php //global $thaitheme_option; echo $thaitheme_option['thaitheme_menu_contact'];  ?>"> ติดต่อลงโฆษณา</a>
</div>
<div class="tt_ct_search">
<h1><a href="http://www.rodrubjang.com" class="tt_head_hid" itemprop="url">รถรับจ้าง รถรับจ้างราคาถูก รถรับจ้างขนของ บริการทั่วทั้งประเทศ</a>
  <div class="tt_logo">
    <a class="tt_logo_pc" title="<?php bloginfo('name'); ?>" href="<?php echo home_url( '/' ); ?>"><img alt="rodrubjang.com รถรับจ้าง รถรับจ้างราคาถูก รถรับจ้างขนของ บริการทั่วทั้งประเทศ" src="<?php global $thaitheme_option;  echo $thaitheme_option['thaitheme_uppic_logo_pc']['url']; ?>?v=1.0"/></a>
  </div>
</h1>
<div class="tt_search_h">
<form role="search" method="get" action="<?php echo esc_url( home_url( '/' ) ); ?>">
<input class="tt_input_h" type="text" name="s" placeholder="คำค้นหา" value="<?php echo get_search_query(); ?>" />
<input type="submit" value="ค้นหา" id="submit-h" />
<div class="tt_from_hide">
<span class="tt_tx_h">ระบุรายละเอียดเพิ่มเติม</span>
<select class="thaitheme_sc_h" name="location">
  <option value="">ทุกจังหวัด</option>
  <?php
  $location_selected = $_GET['location'];
  $categories_selected = $_GET['cat'];
  $max_price = $_GET['max_price'];
  $min_price = $_GET['min_price'];
  $metakey = 'thaitheme_mata_location_province';
  $location = $wpdb->get_col($wpdb->prepare("SELECT DISTINCT meta_value FROM $wpdb->postmeta WHERE meta_key = %s ORDER BY meta_value ASC", $metakey) );
  if ($location) {
    foreach ($location as $county) {?>
     <option <?php if ($location_selected == $county) { ?>  selected="selected"  <?php }?> value="<?php echo $county ; ?>"><?php echo $county ; ?></option>
  <?php  }
  }
  ?>
  </select>
  <?php  $args = array(
	'show_option_all'    => 'ทุกหมวดหมู่',
	'show_option_none'   => '',
	'show_count'         => 0,
	'hide_empty'         => 0,
	'hierarchical'       => 1,
	'name'               => 'cat',
	'id'                 => '',
	'selected'           => $categories_selected,
	'class'              => 'thaitheme_sc_h  tt_r',
	'taxonomy'           => 'category',
	'value_field'	     => 'term_id',
);?>
 <?php wp_dropdown_categories( $args ); ?>
<input type="number" class="thaitheme_from_price_h" name="min_price" placeholder="ราคาเริ่มต้น" value="<?php echo $min_price ;  ?>" />
<input type="number" class="thaitheme_from_price_h tt_r" name="max_price" placeholder="ราคาสูงสุด" value="<?php echo $max_price ; ?>" />
</div>
</form>
</div>
<a class="tt_post_menu" title="ลงประกาศฟรี" href="<?php echo home_url( '/posting' ); ?><?php /*?p=*///global $thaitheme_option; echo $thaitheme_option['thaitheme_select_post_member'];  ?>"><i class="fa fa-plus-circle"></i> ลงประกาศฟรี</a>
<div class="tt_user_h">
<?php if (is_user_logged_in()) { ?>
<div class="tt_avatar"><?php global $userdata; get_currentuserinfo(); echo get_avatar($userdata->ID, 150); ?></div>
<div class="tt_user_link">
<span class="tt_ar"></span>
<span class="user_name"><?php global $user_ID,$post_ID; echo get_usermeta( $user_ID, 'display_name'.$post_ID );?></span>
<div class="tt_user_nav">
<a class="btn_link" href="<?php echo home_url( '/' ); ?>?p=<?php global $thaitheme_option; echo $thaitheme_option['thaitheme_select_manage'];  ?>" title="ประกาศทั้งหมด" target="_top"><?php _e('ประกาศทั้งหมด'); ?></a>
<a class="btn_link" href="<?php echo home_url( '/' ); ?>?p=<?php global $thaitheme_option; echo $thaitheme_option['thaitheme_select_all_views'];  ?>" title="ประกาศที่ดูล่าสุด" target="_top"><?php _e('ประกาศที่ดูล่าสุด'); ?></a>
<a class="btn_link" href="<?php echo home_url( '/' ); ?>?p=<?php global $thaitheme_option; echo $thaitheme_option['thaitheme_select_edit_member'];  ?>" title="แก้ไขข้อมูลสมาชิก" target="_top"><?php _e('แก้ไขข้อมูลสมาชิก'); ?></a>
<a class="btn_link" href="<?php echo wp_logout_url(home_url()); ?>" title="ออกจากระบบ" target="_top"><?php _e('ออกจากระบบ'); ?></a>
</div>
</div>
<?php } else { ?>
<div class="tt_user_link">
<span class="tt_ar"></span>
<a class="tt_menu login" title="เข้าสู่ระบบ" href="<?php echo home_url( '/login' ); ?><?php /*?p=  global $thaitheme_option; echo $thaitheme_option['thaitheme_select_login'];  */?>"> เข้าสู่ระบบ</a>
<span>|</span>
<a class="tt_menu register" title="สมัครสมาชิก" href="<?php echo home_url( '/register' ); ?><?php //global $thaitheme_option; echo $thaitheme_option['thaitheme_select_register'];  ?>"> สมัครสมาชิก</a>
</div>
<?php } ?>
</div>
</div>
<div class="tt_btn_allmenu">
</div>
</div>
</div>
<div class="sb-slidebar sb-left">
<div class="tt_main">
<div class="tt_head_menu">
<?php wp_nav_menu( array( 'theme_location' => 'thaitheme_menu_top','menu_class' => 'nav',  'fallback_cb' => 'wp_page_menu', 'walker' => new thaitheme_Walker_nav_menu() ));?>
</div>
</div>
</div>
<div class="tt_boder_load">
<?php if ( is_home() ) { ?>
<div id="thaitheme"></div>
<?php } else { ?>
<div id="thaitheme"  class="<?php $categories = get_the_category();if ( ! empty( $categories ) ) {echo 'cat_id' . esc_html( $categories[0]->term_id ) . '';} ;?>"></div>
<?php }?>
</div>
<div class="tt_top sb-slide">
<div class="tt_main">
<div class="tt_ct_head">
<?php global $thaitheme_option;  $thaitheme_use_banner_head =  $thaitheme_option['thaitheme_use_banner_head'];
if($thaitheme_use_banner_head == 1) {?>
<div class="tt_banner">
<a href="<?php global $thaitheme_option;  echo $thaitheme_option['thaitheme_url_banner_head']; ?>"  target="_blank"><img alt="rodrubjang.com รถรับจ้าง รถรับจ้างราคาถูก รถรับจ้างขนของ บริการทั่วทั้งประเทศ" src="<?php global $thaitheme_option;  echo $thaitheme_option['thaitheme_uppic_banner_head']['url']; ?>?v=1.0"></a>
</div>
<?php }?>
<?php global $thaitheme_option;  $thaitheme_use_banner_head =  $thaitheme_option['thaitheme_use_banner_head'];
if($thaitheme_use_banner_head == 2) {?>
<div class="tt_banner">
<?php global $thaitheme_option;  echo $thaitheme_option['thaitheme_code_banner_head']; ?>
</div>
<?php }?>
</div>
</div>
</div>
<div class="tt_main">
<div id="tt_head_m" class="sb-slide">
<span class="sb-toggle-left"><i class="fa fa-bars"></i></span>
<a class="tt_logo_mobile" title="<?php bloginfo('name'); ?>" href="<?php echo home_url( '/' ); ?>"><img alt="rodrubjang.com รถรับจ้าง รถรับจ้างราคาถูก รถรับจ้างขนของ บริการทั่วทั้งประเทศ" src="<?php global $thaitheme_option;  echo $thaitheme_option['thaitheme_uppic_logo_mobile']['url']; ?>?v=1.0"/> </a>
<a class="tt_post_menu" title="ลงประกาศฟรี" href="<?php echo home_url( '/posting' ); ?><?php //global $thaitheme_option; echo $thaitheme_option['thaitheme_select_post_member'];  ?>"><i class="fa fa-plus-circle"></i> ลงประกาศฟรี</a>
<div class="tt_btn_search_m"><i class="fa fa-chevron-down"> </i><i class="fa fa-chevron-up"></i>
</div>
<div class="tt_bg_search_m">
<?php get_template_part( 'includes/search-from', get_post_format() ); ?>
</div>
</div>
</div>
</div>
<div id="thaitheme-waper" class="top-padding">
<div class="tt_main">
