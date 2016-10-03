</div>
<div class="tt_footer">
<div class="tt_main">
<div class="tt_footer_left">
<div class="tt_footer_menu">
<span>ให้เราช่วยเหลือคุณ</span>
<?php if ( function_exists( 'register_nav_menus' )) { $args = array( 'container' => '', 'theme_location' => 'thaitheme_menu_foote1','depth' => 1,"echo" => false);echo add_menu_arrows(wp_nav_menu($args));}?>
</div>
<div class="tt_footer_menu">
<span>ติดต่อเว็บไซต์</span>
<?php if ( function_exists( 'register_nav_menus' )) { $args = array( 'container' => '', 'theme_location' => 'thaitheme_menu_foote2','depth' => 1,"echo" => false);echo add_menu_arrows(wp_nav_menu($args));}?>
</div>
<div class="tt_footer_menu last">
<span>เชื่อมต่อโซเชียล</span>
<div class="tt_social_links">
<a class="tt_fb" title="Facebook" href="<?php global $thaitheme_option;  echo $thaitheme_option['thaitheme_url_fb']; ?>" target="_blank"><i class="fa fa-facebook"></i></a>
<a class="tt_tw" title="Twitter" href="<?php global $thaitheme_option;  echo $thaitheme_option['thaitheme_url_tw']; ?>" target="_blank"><i class="fa fa-twitter"></i></a>
<a class="tt_gg" title="Google Plus" href="<?php global $thaitheme_option;  echo $thaitheme_option['thaitheme_url_gg']; ?>" target="_blank"><i class="fa fa-google-plus"></i></a>
</div>
</div>
</div>
<div class="tt_footer_right">
<?php global $thaitheme_option;  $thaitheme_use_banner_footer =  $thaitheme_option['thaitheme_use_banner_footer'];
if($thaitheme_use_banner_footer == 1) {?>
<a href="<?php global $thaitheme_option;  echo $thaitheme_option['thaitheme_url_banner_footer']; ?>"  target="_blank">
  <img alt="rodrubjang.com รถรับจ้าง บริการลงประกาศฟรี ค้นหารถรับจ้างได้ทั่วทั้งประเทศ" src="<?php global $thaitheme_option;  echo $thaitheme_option['thaitheme_uppic_banner_footer']['url']; ?>?v=1.0"></a>
<?php }?>
<?php global $thaitheme_option;  $thaitheme_use_banner_footer =  $thaitheme_option['thaitheme_use_banner_footer'];
if($thaitheme_use_banner_footer == 2) {?>
<?php global $thaitheme_option;  echo $thaitheme_option['thaitheme_code_banner_footer']; ?>
<?php }?>
</div>
</div>
<div class="tt_copyright">
<div class="tt_main">
<span>www.rodrubjang.com : (รถรับจ้าง.คอม) © <?php echo date('Y'); ?> All Right Reserved. เว็บไซต์รวบรวมข้อมูลรถบริการ รถรับจ้าง รถขนส่ง ขนย้าย มากที่สุดในประเทศไทย</span>
</div>
</div>
</div>
</div>
<div id="toTop"><i class="fa fa-chevron-up"></i></div>
<div class="thatheme-ghost sb-slide"></div>
<?php wp_footer(); ?>
<script type="text/javascript" src="<?php bloginfo('template_url'); ?>/js/thaitheme-slide.min.js?v=1.<?php echo time(); ?>"></script>
<script type="text/javascript" src="<?php bloginfo('template_url'); ?>/js/thaitheme-location.js?v=1.<?php echo time(); ?>"></script>
<script type="text/javascript">
$(document).ready(function() { form_post.init().province_event_listener(); });
</script>
</body>
</html>
