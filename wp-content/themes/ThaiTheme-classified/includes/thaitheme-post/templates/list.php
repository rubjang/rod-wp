<?php 
/* 
 * included by adverts/includes/shortcodes.php shortcodes_adverts_list() 
 * 
 * @var $loop WP_Query
 * @var $query string
 * @var $location string
 * @var $paged int
 */
?>

<div class="adverts-options">
    <form action="" method="get">
        <div class="adverts-search">
            <div class="advert-input">
                <input type="text" name="query" placeholder="<?php _e("Keyword ...", "adverts") ?>" value="<?php esc_attr_e($query) ?>" />
            </div>

            <div class="advert-input">
                <input type="text" name="location" placeholder="<?php _e("Location ...", "adverts") ?>" value="<?php esc_attr_e($location) ?>" />
            </div>
        </div>
    
        <!--div class="adverts-options-left adverts-js">
            <a href="#" class="adverts-button-small"><span class="adverts-square-icon adverts-icon-th-large"></span></a>
            <a href="#" class="adverts-button-small"><span class="adverts-square-icon adverts-icon-th-list"></span></a>

            <a href="#" class="adverts-button-small adverts-filter-date"><?php _e("Date") ?> <span class="adverts-icon-sort"></span></a>
        </div-->

        <div class="adverts-options-right adverts-js">
            <!--a href="#" class="adverts-button-small"><span class="adverts-icon-filter"><span> <?php _e("Filters ...", "adverts") ?></a-->
            <a href="#" class="adverts-form-submit adverts-button-small"><span class="adverts-icon-search"><span> <?php _e("SEARCH", "adverts") ?></a>
        </div>

        <div class="adverts-options-fallback adverts-no-js">
            <input type="submit" value="<?php _e("Filter Results", "adverts") ?>" />
        </div>
    </form>
</div>

<div class="adverts-list">
    <?php if( $loop->have_posts() ): ?>
    <?php while ( $loop->have_posts() ) : $loop->the_post(); ?>
    <?php include ADVERTS_PATH . 'templates/list-item.php' ?>
    <?php endwhile; ?>
    <?php else: ?>
    <div class="adverts-list-empty"><em><?php _e("There are no ads matching your search criteria.", "adverts") ?></em></div>
    <?php endif; ?>
    <?php wp_reset_query(); ?>
</div>

<div class="adverts-pagination">
    <?php echo paginate_links( array(
        'base' => $paginate_base,
	'format' => $paginate_format,
	'current' => max( 1, $paged ),
	'total' => $loop->max_num_pages,
        'prev_next' => false
    ) ); ?>
</div>