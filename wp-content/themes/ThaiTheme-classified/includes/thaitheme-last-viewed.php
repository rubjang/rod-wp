<?php
$zg_cookie_expire = 360; // After how many days should the cookie expire? Default is 360.
$zg_number_of_posts = 17; // How many posts should be displayed in the list? Default is 10.
$zg_recognize_pages = true; // Should pages to be recognized and listed? Default is true.
function zg_lwp_header() { // Main function is called every time a page/post is being generated
	if (is_single()) {
		zg_lw_setcookie();
	} else if (is_page()) {
		global $zg_recognize_pages;
		if ($zg_recognize_pages === true) {
			zg_lw_setcookie();
		}
	}
}
 
function zg_lw_setcookie() { // Do the stuff and set cookie
	global $wp_query;
	$zg_post_ID = $wp_query->post->ID; // Read post-ID
	if (! isset($_COOKIE["WP-LastViewedPosts"])) {
		$zg_cookiearray = array($zg_post_ID); // If there's no cookie set, set up a new array
	} else {
		$zg_cookiearray = unserialize(preg_replace('!s:(\d+):"(.*?)";!e', "'s:'.strlen('$2').':\"$2\";'", stripslashes($_COOKIE["WP-LastViewedPosts"]))); // Read serialized array from cooke and unserialize it
		if (! is_array($zg_cookiearray)) {
			$zg_cookiearray = array($zg_post_ID); // If array is fucked up...just build a new one.
		}
	}
  	if (in_array($zg_post_ID, $zg_cookiearray)) { // If the item is already included in the array then remove it
		$zg_key = array_search($zg_post_ID, $zg_cookiearray);
		array_splice($zg_cookiearray, $zg_key, 1);
	}
	array_unshift($zg_cookiearray, $zg_post_ID); // Add new entry as first item in array
	global $zg_number_of_posts;
	while (count($zg_cookiearray) > $zg_number_of_posts) { // Limit array to xx (zg_number_of_posts) entries. Otherwise cut off last entry until the right count has been reached
		array_pop($zg_cookiearray);
	}
	$zg_blog_url_array = parse_url(get_bloginfo('url')); // Get URL of blog
	$zg_blog_url = $zg_blog_url_array['host']; // Get domain
	$zg_blog_url = str_replace('www.', '', $zg_blog_url);
	$zg_blog_url_dot = '.';
	$zg_blog_url_dot .= $zg_blog_url;
	$zg_path_url = $zg_blog_url_array['path']; // Get path
	$zg_path_url_slash = '/';
	$zg_path_url .= $zg_path_url_slash;
	global $zg_cookie_expire;
	setcookie("WP-LastViewedPosts", serialize($zg_cookiearray), (time()+($zg_cookie_expire*86400)), $zg_path_url, $zg_blog_url_dot, 0);
}

function zg_recently_viewed() { // Output
	if (isset($_COOKIE["WP-LastViewedPosts"])) {
		//echo "Cookie was set.<br/>";  // For bugfixing - uncomment to see if cookie was set
		//echo $_COOKIE["WP-LastViewedPosts"]; // For bugfixing (cookie content)
		$zg_post_IDs = unserialize(preg_replace('!s:(\d+):"(.*?)";!e', "'s:'.strlen('$2').':\"$2\";'", stripslashes($_COOKIE["WP-LastViewedPosts"]))); // Read serialized array from cooke and unserialize it
		$count = 1;
		foreach ((array) $zg_post_IDs as $value) { // Do output as long there are posts
			global $wpdb;
			$permalink = get_permalink($value);
			$zg_get_title = $wpdb->get_results("SELECT post_title FROM $wpdb->posts WHERE ID = '$value+0' LIMIT 1");
			foreach($zg_get_title as $zg_title_out) {
			if( get_post_type($value) == 'page'||get_post_type($value) == 'news' ) {
			} else {	
			?>
		<article class="tt_list thaitheme post3x <?php if($count % 2 == 0){echo " tt-2x";} if($count % 3 == 0){echo " tt-3x";} if($count % 4 == 0){echo " tt-4x";} if($count % 5 == 0){echo " tt-5x";} $count++; ?>"> 	
			<a href="<?php echo $permalink ; ?>" title="<?php echo $zg_title_out->post_title ; ?>" target="_blank">
				<?php $image = thaitheme_img_list($value ) ?>  
				<?php if($image) { ?>
				<div class="tt-img">
				<img src="<?php esc_attr_e($image) ?>?v=1.0" alt=""/>
				</div>
				<?php }else { ?>
				<div class="tt-img">
				<?php thaitheme_post_no_image(220,165); ?>
				</div>
				<?php } ?>
				<div class="tt_desc">
				<p class="tt_ad_location"><i class="fa fa-map-marker"></i> <?php $thaitheme_mata_location_province = get_post_meta( $value, "thaitheme_mata_location_province", true );  ?><?php esc_html_e( $thaitheme_mata_location_province ) ?> </p>
				<h3><?php echo $zg_title_out->post_title ; ?></h3>
				<p class="tt_ad_price"><?php $price = get_post_meta( $value, "adverts_price", true );  ?><?php esc_html_e( adverts_price( $price ) ) ?> บาท</p>
				</div>
			</a>
		</article>	
	<?php }
			}
		}
	} else {
	}
}

add_action('wp','zg_lwp_header');
?>