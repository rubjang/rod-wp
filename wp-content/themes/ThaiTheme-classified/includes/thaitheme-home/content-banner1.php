<?php global $thaitheme_option;  $thaitheme_use_banner_home1 =  $thaitheme_option['thaitheme_use_banner_home1'];
if($thaitheme_use_banner_home1 == 1) {?>
<div class="tt_banner_home">
<a href="<?php global $thaitheme_option;  echo $thaitheme_option['thaitheme_url_banner_home1']; $cut=explode("/",$thaitheme_option['thaitheme_url_banner_home1']);?>" alt="<?php echo $cut[4];?>" target="_blank">
  <img alt="<?php echo $cut[4];?>" src="<?php global $thaitheme_option;  echo $thaitheme_option['thaitheme_uppic_banner_home1']['url']; ?>?v=1.0"></a>
</div>
<?php }?>
<?php global $thaitheme_option;  $thaitheme_use_banner_home1 =  $thaitheme_option['thaitheme_use_banner_home1'];
if($thaitheme_use_banner_home1 == 2) {?>
<div class="tt_banner_home">
<?php global $thaitheme_option;  echo $thaitheme_option['thaitheme_code_banner_home1']; ?>
</div>
<?php }?>
