<div class="tt_main">
<div class="tt-search_top">
<span><i class="fa fa-search"></i> ค้นหาประกาศ</span>
<form role="search" method="get" action="<?php echo esc_url( home_url( '/' ) ); ?>">
<div class="tt_from_left">
<input class="tt_input_from" type="text" name="s" placeholder="คำค้นหา" value="<?php echo get_search_query(); ?>" />
<select class="thaitheme_sc" name="location">
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
	'class'              => 'thaitheme_sc ',
	'taxonomy'           => 'category',
	'value_field'	     => 'term_id',	
);?>
 <?php wp_dropdown_categories( $args ); ?> 
<input type="number"  class="thaitheme_from_price" name="max_price" placeholder="ราคาสูงสุด" value="<?php echo $max_price ; ?>" />
<input type="number"  class="thaitheme_from_price" name="min_price" placeholder="ราคาเริ่มต้น" value="<?php echo $min_price ;  ?>" />
</div>		
<input type="submit" value="Search" id="submit-from" />
</form>
</div> 
</div> 