<div id="comments">
	<?php
	// Custom comment form
	$fields = array(
		'author'	=> '<input class="text" id="author" name="author" type="text" value="ขื่อ *" size="30" onfocus="if(this.value==\'ชื่อ *\') this.value=\'\';" onblur="if(this.value==\'\') this.value=\'ชื่อ *\';"/>',
		'email'		=> '<input class="text" id="email" name="email" type="text" value="อีเมลล์  *" size="30" onfocus="if(this.value==\'อีเมลล์  *\') this.value=\'\';" onblur="if(this.value==\'\') this.value=\'อีเมลล์  *\';"/>',
		
	);

	comment_form(array(
		'comment_field'        => '<p class="comment-form-comment"><textarea placeholder="'.__('','colabsthemes').'" id="comment" name="comment" cols="45" rows="5" aria-required="true"></textarea></p>',
		'fields'               => apply_filters( 'comment_form_default_fields', $fields ),
		'comment_notes_before' => '',
		'comment_notes_after' => '',
		'title_reply'          => __( '','colabsthemes' ),
		'title_reply_to'       => __( '' ),
		'label_submit'         => __( 'แสดงความคิดเห็น' ,'colabsthemes'),
		'cancel_reply_link'    => __( 'Cancel' ,'colabsthemes'),
	));
	?>
	<?php if ( have_comments() ) : ?>
		<h3 class="comment-header">
			<?php printf( _n( '<span class="comment-count">%1$s ความคิดเห็น</span>', '<span class="comment-count">%1$s ความคิดเห็น</span>', get_comments_number(), 'colabsthemes' ), number_format_i18n( get_comments_number()) ); ?>
			
		</h3>
		

		<ol class="commentlist">
			<?php wp_list_comments( array(
				'type'			=> 'comment',
				'callback' 	=> 'colabs_list_comments',
				'max_depth'	=> 2
			) ); ?>
		</ol>
		<?php if ( get_comment_pages_count() > 1 && get_option( 'page_comments' ) ) : // are there comments to navigate through ?>
		<nav id="comment-nav-below" class="navigation" role="navigation">
			<h3 class="comment-header"><?php _e( 'Comment navigation', 'colabsthemes' ); ?></h3>
			<div class="nav-previous"><?php previous_comments_link( __( '&larr; Older Comments', 'colabsthemes' ) ); ?></div>
			<div class="nav-next"><?php next_comments_link( __( 'Newer Comments &rarr;', 'colabsthemes' ) ); ?></div>
		</nav>
		<?php endif; // check for comment navigation ?>
	<?php
		/* If there are no comments and comments are closed, let's leave a little note, shall we?
		 * But we don't want the note on pages or post types that do not support comments.
		 */
		elseif ( ! comments_open() && ! is_page() && post_type_supports( get_post_type(), 'comments' ) ) :
	?>
		<p class="nocomments"><?php _e( 'ปิดการแสดงความคิดเห็น', 'colabsthemes' ); ?></p>
	<?php endif; ?>

	<?php //comment_form(); ?>


	
</div><!-- #comments -->
