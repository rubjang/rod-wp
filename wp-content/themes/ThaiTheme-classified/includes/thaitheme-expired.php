<?php global $thaitheme_option;  $thaitheme_expiration = $thaitheme_option['thaitheme_expiration'];?>
 <?php if ( $thaitheme_expiration == "") { ?><?php } else { ?>	
<div class="tt_manage_expired">
<div class="tt_img"></div> 
<span class="tt_tx_expired">ทุกประกาศจะมีอายุ  <?php global $thaitheme_option;  echo $thaitheme_option['thaitheme_expiration']; ?> วัน </span>
<span class="tt_tx_read"> คุณสามารถต่ออายุได้โดย ติดต่อผู้ดูแลเว็บไซต์</span>
</div>
 <?php } ?>
 <div class="tt_sb_hide">
 <?php get_sidebar( 'post' ); ?>
 </div>