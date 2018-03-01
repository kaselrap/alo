<?php
/**
 * The template for displaying comments
 *
 * This is the template that displays the area of the page that contains both the current comments
 * and the comment form.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package ALO
 */

/*
 * If the current post is protected by a password and
 * the visitor has not yet entered the password we will
 * return early without loading the comments.
 */
if ( post_password_required() ) {
	return;
}
$custom_comment_form = array (
    'fields' => array(
        'author' => '<div class="fw-row"><div class="comment-form-author fw-col-md-4">' .
            '<input id="author" placeholder="' .  __( 'Name', 'alo' ) . ( $req ? ' *' : '' ) . '" name="author" type="text" value="' . esc_attr( $commenter['comment_author'] ) . '" size="30"' . $aria_req . ' /></div>',
        'email'  => '<div class="comment-form-email fw-col-md-4">' .
            '<input id="email" placeholder="' .  __( 'Email', 'alo' ) . ( $req ? ' *' : '' ) . '" name="email" type="text" value="' . esc_attr(  $commenter['comment_author_email'] ) . '" size="30"' . $aria_req . ' /></div>',
        'url'    => '<div class="comment-form-url fw-col-md-4">' .
            '<input id="url" placeholder="' .  __( 'Website', 'alo' ) . '" name="url" type="text" value="' . esc_attr( $commenter['comment_author_url'] ) . '" size="30" /></div></div>',
    ),
    'comment_field' => '<div class="comment-form-comment"><textarea id="comment" placeholder="' . _x( 'Comment', 'noun' ) . '" name="comment" cols="45" rows="8"  aria-required="true" required="required"></textarea></div>',
    'cancel_reply_link' => __( 'Cancel' , 'alo' ),
    'comment_notes_before' => '',
    'comment_notes_after' => '',
    'label_submit' => __( 'Submit' , 'alo' )
);
?>

<div class="st-comment-form">
    <div id="respond">
        <?php
        // You can start editing here -- including this comment!
        if ( have_comments() ) : ?>
            <h4 class="comments-title">
                <?php comments_number( __('Leave a comment','alo'), __('Comment(1)','alo'), __('Comments(%)','alo') ); ?>
            </h4><!-- .comments-title -->

            <?php the_comments_navigation(); ?>

            <div class="st-comments comment-list">
    			<?php
    				wp_list_comments( array('callback' => 'alo_comment') );
    			?>
            </div><!-- .comment-list -->

            <?php the_comments_navigation();

            // If comments are closed and there are comments, let's leave a little note, shall we?
            if ( ! comments_open() ) : ?>
                <p class="no-comments"><?php esc_html_e( 'Comments are closed.', 'alo' ); ?></p>
            <?php
            endif;

        endif; // Check for have_comments().
        ?>

        <?php
            comment_form($custom_comment_form);
        ?>
    </div>
</div><!-- #comments -->
