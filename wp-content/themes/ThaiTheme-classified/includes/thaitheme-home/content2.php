<div class="tt-sec">
<div class="tt-title-sec">
<h2><a title="<?php global $thaitheme_option;  echo $thaitheme_option['thaitheme_title_ct2']; ?>" href="<?php global $thaitheme_option;  echo $thaitheme_option['thaitheme_url_ct2']; ?>"><?php global $thaitheme_option;  echo $thaitheme_option['thaitheme_title_ct2']; ?></a></h2>
</div>
<?php global $thaitheme_option; $thaitheme_shows_ct2 =  $thaitheme_option['thaitheme_shows_ct2'];$my_query = new WP_Query( array( 'post_type' => 'news', 'posts_per_page' => ''.$thaitheme_shows_ct2.'',  'offset' => 0 ) );?>
<?php if ( $my_query->have_posts() ) : $count = 1; while ( $my_query->have_posts() ) : $my_query->the_post(); ?> 
<article class="tt_list thaitheme post_news  <?php if($count % 2 == 0){echo " tt-2x";} if($count % 3 == 0){echo " tt-3x";} if($count % 4 == 0){echo " tt-4x";} if($count % 5 == 0){echo " tt-5x";} $count++; ?>">
<a href="<?php the_permalink() ?>" title="<?php the_title(); ?>">
<div class="tt-img">
<?php thaitheme_postimage(228,130); ?>
<div class="tt-opacity"></div>
</div>
<div class="tt_desc">
<h3><?php $excerpt = get_the_title();echo string_limit_words($excerpt,10);?></h3>
</div>
</a>
</article>		
<?php  endwhile;?><?php endif; wp_reset_query();?> 
</div>