<?php
add_theme_support( 'post-formats', array( 'aside', 'gallery','video','audio ','quote' ) );  //yazı biçimleri için donksiyon 
add_theme_support( 'post-thumbnails' ); 
add_image_size( 'bizimresim', 396, 200, array( 'left', 'top' ) );
add_image_size( 'projeresim', 249, 186, array( 'left', 'top' ) );

require_once('wp_bootstrap_navwalker.php');

register_nav_menus( array(
    'primary' => __( 'Primary Menu', 'tema' ),
) );

 register_sidebar( array(
        'name' => __( 'Sağ Taraf', 'tema' ),
        'id' => 'sidebar-right',
        'description' => __( 'Sağ tarafa görünmesi gereken bileşen', 'tema' ),
        'before_widget' => '<li id="%1$s" class="widget %2$s">',
	'after_widget'  => '</li>',
	'before_title'  => '<h3 class="widgettitle">',
	'after_title'   => '</h3>',
    ) );


	
function wpdocs_my_search_form( $form ) {
    $form = '<form role="search" method="get" id="searchform" class="searchform" action="' . home_url( '/' ) . '" >
    <div><label class="screen-reader-text" for="s">' . __( 'Arama:' ) . '</label>
    <input type="text" value="' . get_search_query() . '" name="s" id="s" />
    <input type="submit" id="searchsubmit" value="'. esc_attr__( 'Search' ) .'" />
    </div>
    </form>';
 
    return $form;
}
add_filter( 'get_search_form', 'wpdocs_my_search_form' );

/* mytheme_comment adlı fonksiyonumuz yorumlar sayfası için parametreler göndermektedir.*/
function mytheme_comment($comment, $args, $depth) {
	$GLOBALS['comment'] = $comment;
	extract($args, EXTR_SKIP);
	if ( 'div' == $args['style'] ) {
		$tag = 'div';
		$add_below = 'comment';
	} else {
		$tag = 'li';
		$add_below = 'div-comment';
	}
?>

<<?php echo $tag ?> <?php comment_class( empty( $args['has_children'] ) ? '' : 'parent' ) ?> id="comment-<?php comment_ID() ?>">
<?php if ( 'div' != $args['style'] ) : ?>
        <div id="div-comment-<?php comment_ID() ?>" class="comment-body">
        <?php endif; ?>
        <div class="comment-author vcard">
            <?php if ( $args['avatar_size'] != 0 ) echo get_avatar( $comment, $args['avatar_size'] ); ?>
            <?php printf( __( '<cite class="fn">%s</cite> <span class="says">says:</span>' ), get_comment_author_link() ); ?>
        </div>
<?php if ( $comment->comment_approved == '0' ) : ?>
            <em class="comment-awaiting-moderation label label-danger"><?php _e( 'Your comment is awaiting moderation.' ); ?></em>
            <br />
        <?php endif; ?>

        <div class="comment-meta commentmetadata"><a href="<?php echo htmlspecialchars( get_comment_link( $comment->comment_ID ) ); ?>">
            <?php
                /* translators: 1: date, 2: time */
                printf( __('%1$s at %2$s'), get_comment_date(),  get_comment_time() ); ?></a><?php edit_comment_link( __( '(Edit)' ), '  ', '' );
            ?>
        </div>
		<?php comment_text(); ?>

        <div class="reply">
            <?php comment_reply_link( array_merge( $args, array( 'add_below' => $add_below, 'depth' => $depth, 'max_depth' => $args['max_depth'] ) ) ); ?>
        </div>
	<?php if ( 'div' != $args['style'] ) : ?>
	</div>
	<?php endif; ?>
<?php
} /* ===SON */
/* Yorumlarda cevapla düğmesinin çalışması için eklenmelidir.*/
function plugin_comment_reply_js(){
	if ( (!is_admin()) && is_singular() && comments_open() && get_option('thread_comments') )
		wp_enqueue_script( 'comment-reply' );
	}
add_action('wp_head', 'plugin_comment_reply_js');
/* ===SON */

/*  OPTİONS FRAMEWORK BAŞLANGIÇ
 * Helper function to return the theme option value. If no value has been saved, it returns $default.
 * Needed because options are saved as serialized strings.
 *
 * This code allows the theme to work without errors if the Options Framework plugin has been disabled.
 */

if ( !function_exists( 'of_get_option' ) ) {
function of_get_option($name, $default = false) {
	
	$optionsframework_settings = get_option('optionsframework');
	
	// Gets the unique option id
	$option_name = $optionsframework_settings['id'];
	
	if ( get_option($option_name) ) {
		$options = get_option($option_name);
	}
		
	if ( isset($options[$name]) ) {
		return $options[$name];
	} else {
		return $default;
	}
}
}
/*OPTİONS FRAMEWORK BAŞLANGIÇ*/

 ?>