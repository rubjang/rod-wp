<?php
/*****************************************************
Plugin Name: ThaiTheme Category Widget
Description: Widget Movie By ThaiTheme.com
Author:	http://www.thaitheme.com																				         
Author URI: http://www.thaitheme.com																				
****************************************************************/

add_action('widgets_init', 'thaitheme_function_thumb_Widget_lists');
function thaitheme_function_thumb_Widget_lists(){
 register_widget('thaitheme_function_thumb_Widget_list');
 }
 
class thaitheme_function_thumb_Widget_list extends WP_Widget {
	function thaitheme_function_thumb_Widget_list()
	{
		$widget_ops = array('classname' => 'tpcrn_magazine_singlethumb', 'description' => 'ThaiTheme Category Widget  www.ThaiTheme.com ');
		$control_ops = array('id_base' => 'thaitheme_thumb-widget_list');
		parent::__construct('thaitheme_thumb-widget_list', 'ThaiTheme Category Widget By ThaiTheme.com', $widget_ops, $control_ops);
 	}
/**
* Display the widget
*/	
function widget($args, $instance) {extract($args);global $post;$title = $instance['title'];$posts = $instance['posts'];$get_catego = $instance['get_catego'];echo $before_widget;?>
<div class="tt-head"><h2 class="title"><a href="<?php echo get_category_link($get_catego); ?>"><?php if (get_cat_name($get_catego)) echo get_cat_name($get_catego);else echo $title;?></a></h2> <span class="tt_bd_top"> </span><span class="tt_bd_bottom"> </span></div>	
<?php $thaitheme_sing_postset = new WP_Query(array( 'showposts' => $posts, 'cat' => $get_catego,));?>
<?php $count = 0; ?>  
<?php while($thaitheme_sing_postset->have_posts()): $thaitheme_sing_postset->the_post(); ?>
<?php $count++; ?>
<article class="tt_list tt_widget_list"> 		
<a href="<?php the_permalink() ?>" title="<?php the_title(); ?>">	
<?php $image = thaitheme_img_thumbnail( get_the_ID() ) ?>  
<?php if($image) { ?>
<div class="tt-img">
<img src="<?php esc_attr_e($image) ?>?v=1.0" alt=""/>
</div>
<?php }else { ?>
<div class="tt-img">
<?php thaitheme_post_no_image(150,105); ?>
</div>
<?php } ?>
<h3><?php $excerpt = get_the_title();echo string_limit_words($excerpt,10);?></h3>
<p class="tt_ad_price"><?php $price = get_post_meta( get_the_ID(), "adverts_price", true );  ?><?php esc_html_e( adverts_price( $price ) ) ?> บาท</p>
</a>
</article>		
<?php  endwhile; wp_reset_query();?>
<?php echo $after_widget;
 	}
	/**
	 * Update the widget settings.
	 */
function update($new_instance, $old_instance)
 	{
 		$instance = $old_instance;
 		$instance['title'] = $new_instance['title'];
		$instance['posts'] = $new_instance['posts'];
 		$instance['get_catego'] = $new_instance['get_catego'];
 		return $instance;
 	}	
 	function form($instance)
 	{
 		$defaults = array('title' => 'ประกาศล่าสุด', 'posts' =>'6','get_catego' => 'all');
 		$instance = wp_parse_args((array) $instance, $defaults); ?>
 		<p>
 			<label for="<?php echo $this->get_field_id('title'); ?>">Title:</label>
 			<input class="widefat" style="width: 216px;" id="<?php echo $this->get_field_id('title'); ?>" name="<?php echo $this->get_field_name('title'); ?>" value="<?php echo $instance['title']; ?>" />
 		</p>
 		<p>
 			<label for="<?php echo $this->get_field_id('get_catego'); ?>">เลือกหมวดหมู่ :</label> 
 			<select id="<?php echo $this->get_field_id('get_catego'); ?>" name="<?php echo $this->get_field_name('get_catego'); ?>" class="widefat get_catego" style="width:100%;">
 				<option value='all' <?php if ('all' == $instance['get_catego']) echo 'selected="selected"'; ?>>แสดงประกาศล่าสุด</option>
 				<?php $get_catego = get_categories('hide_empty=0&depth=1&type=post'); ?>
 				<?php foreach($get_catego as $category) { ?>
 				<option value='<?php echo $category->term_id; ?>' <?php if ($category->term_id == $instance['get_catego']) echo 'selected="selected"'; ?>><?php echo $category->cat_name; ?></option>
 				<?php } ?>
 			</select>
 		</p>
		<p>
 			<label for="<?php echo $this->get_field_id('posts'); ?>">เลือกจำนวน :</label>
 			<input class="widefat" style="width: 30px;" id="<?php echo $this->get_field_id('posts'); ?>" name="<?php echo $this->get_field_name('posts'); ?>" value="<?php echo $instance['posts']; ?>" />
 		</p>
		<style type="text/css">
		[id*="thaitheme_widget_box_office"] .widget-title ,
		[id*="thaitheme_thumb-widget_list"] .widget-title {background-color: #1C5E7C;color: #FFF;}
		[id*="thaitheme_widget_box_office"] .widget-inside,
		[id*="thaitheme_thumb-widget_list"] .widget-inside {background-color: #2286AD;color: #FFF;}
		[id*="thaitheme_thumb-widget_list"] h3,
		[id*="thaitheme_widget_box_office"] .widget-inside a,
		[id*="thaitheme_thumb-widget_list"] .widget-inside a {color: #FFF;}
		[id*="thaitheme_widget_box_office"] .widget-inside input,
		[id*="thaitheme_thumb-widget_list"] .widget-inside input {border: 1px solid #333;}
		</style>
 	<?php }
 }
 ?>