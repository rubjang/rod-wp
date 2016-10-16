<div class="tt-sec sec-content">
<div class="tt-title-sec">
<h2><a title="<?php global $thaitheme_option;  echo $thaitheme_option['thaitheme_title_ct3']; ?>" href="<?php global $thaitheme_option;  echo $thaitheme_option['thaitheme_url_ct3']; ?>"><?php global $thaitheme_option;  echo $thaitheme_option['thaitheme_title_ct3']; ?></a></h2>
</div>
<?php global $thaitheme_option; $thaitheme_shows_ct3 =  $thaitheme_option['thaitheme_shows_ct3']; $list_cat =  $thaitheme_option['thaitheme_cat_ct3'];$arr_id_cat_all=array(); foreach ((array) $list_cat as $id_cat_all ) {$arr_id_cat_all[]=$id_cat_all;}$my_query = new WP_Query( array( 'post_type' => 'post', 'category__in' => $arr_id_cat_all ,'posts_per_page' => ''.$thaitheme_shows_ct3.'', 'orderby' => array( 'menu_order' => 'DESC', 'date' => 'DESC' ),  'offset' => 0 ) );?>
<?php if ( $my_query->have_posts() ) : $count = 1; while ( $my_query->have_posts() ) : $my_query->the_post(); ?>
<article class="tt_list thaitheme post_news <?php echo adext_adverts_css_classes( '', get_the_ID() ) ;?> <?php if($count % 2 == 0){echo " tt-2x";} if($count % 3 == 0){echo " tt-3x";} if($count % 4 == 0){echo " tt-4x";} if($count % 5 == 0){echo " tt-5x";} $count++; ?>">
<a href="<?php the_permalink() ?>" title="<?php the_title(); ?>">
<?php $image = thaitheme_img_list( get_the_ID() ) ?>
<?php if($image) { ?>
<div class="tt-img">
<?php $tt_sticky = adext_adverts_css_classes('', get_the_ID() ) ; if($tt_sticky !=="") { ?> <div class="tt-img-sticky"></div> <?php } ?>
<img src="<?php esc_attr_e($image) ?>?v=1.0" alt=""/>
<div class="tt-opacity"></div>
</div>
<?php }else { ?>
<div class="tt-img">
<?php $tt_sticky = adext_adverts_css_classes('', get_the_ID() ) ; if($tt_sticky !=="") { ?> <div class="tt-img-sticky"></div> <?php } ?>
<?php thaitheme_post_no_image(220,165); ?>
<div class="tt-opacity"></div>
</div>
<?php } ?>
<div class="tt_desc">
<p class="tt_ad_location"><i class="fa fa-map-marker"></i> <?php $thaitheme_mata_location = get_post_meta( get_the_ID(), "thaitheme_mata_location_province", true );  ?><?php esc_html_e( $thaitheme_mata_location ) ?> </p>
<h3><?php esc_html_e( get_post( $post_id )->post_title ) ?></h3>
<div class="tt_ad_location">
  <p class="tt_ad_price">
    <span style="font-size:14px;color:#0099D7;font-weight:normal;">โทร. </span>
    <?php //esc_html_e( get_post( $post_id )->adverts_phone)?>
    <?php
      $mobile = get_post($post_id)->adverts_phone;
      $minus_sign = "-" ; // กำหนดเครื่องหมาย
      // เริ่มจากซ้ายตัวที่ 1 ( 0 ) ตัดทิ้งขวาทิ้ง 7 ตัวอักษร ได้ 085
      $part1 = substr ($mobile,0,-7);
      // เริ่มจากซ้าย ตัวที่ 4 (9) ตัดทิ้งขวาทิ้ง 3 ตัวอักษร ได้ 9490
      $part2 = substr($mobile,3,-3);
      // เริ่มจากซ้าย ตัวที่ 8 (8) ไม่ตัดขวาทิ้ง ได้ 862
      $part3 = substr($mobile,7);
      echo $part1.$minus_sign.$part2.$minus_sign.$part3;
    ?>
    </p>
</div>
</div>
</a>
</article>
<?php  endwhile;?><?php endif; wp_reset_query();?>
</div>
