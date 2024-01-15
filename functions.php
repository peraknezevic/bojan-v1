<?php // BLANK Theme Custom Functions

if (!defined('ABSPATH')) exit;


// conditional parent/child styles
function shapeSpace_conditional_styles() {
	
	wp_enqueue_style('blank-theme', get_stylesheet_uri(), array(), null);
    
}

function excludeCat($query) {
if ( $query->is_home ) {
$query->set('cat', '-2, -1');
}
return $query;
}
add_filter('pre_get_posts', 'excludeCat');

add_theme_support('post-thumbnails');

function excerpt($limit) {
	$excerpt = explode(' ', get_the_excerpt(), $limit);
	if (count($excerpt)>=$limit) {
	  array_pop($excerpt);
	  $excerpt = implode(" ",$excerpt).'...';
	} else {
	  $excerpt = implode(" ",$excerpt);
	}	
	$excerpt = preg_replace('`[[^]]*]`','',$excerpt);
	return $excerpt;
  }
   
function content($limit) {
	$content = explode(' ', get_the_content(), $limit);
	if (count($content)>=$limit) {
	  array_pop($content);
	  $content = implode(" ",$content).'...';
	} else {
	  $content = implode(" ",$content);
	}	
	$content = preg_replace('/[.+]/','', $content);
	$content = apply_filters('the_content', $content); 
	$content = str_replace(']]>', ']]>', $content);
	return $content;
  }
  

// frontend script & style
function shapeSpace_frontend_scripts() {
	
	// wp_enqueue_style( $handle, $src, $deps, $ver, $media )
	
	shapeSpace_conditional_styles();
	
	// wp_enqueue_script( $handle, $src, $deps, $ver, $in_footer )
	
	wp_enqueue_script('blank-theme', get_template_directory_uri() .'/js/blank.js', array('jquery'), null, true);
	
	if (is_singular() && comments_open() && get_option('thread_comments')) {
		
		wp_enqueue_script('comment-reply');
		
	}
	
}
add_action('wp_enqueue_scripts', 'shapeSpace_frontend_scripts');

function wpdocs_custom_excerpt_length( $length ) {
    return 100;
}
add_filter( 'excerpt_length', 'wpdocs_custom_excerpt_length', 999 );

function wpdocs_excerpt_more( $more ) {
    return sprintf( '<a class="read-more" href="%1$s">%2$s</a>',
        get_permalink( get_the_ID() ),
        __( '...', 'textdomain' )
    );
}
add_filter( 'excerpt_more', 'wpdocs_excerpt_more' );

function ah_share_buttons() {
?>
<span class="share">Podeli: <a class="facebook" title="Podeli na Facebook-u" href="https://www.facebook.com/sharer/sharer.php?u=<?php echo urlencode(get_permalink($post->ID)); ?>&amp;amp;t=<?php echo rawurlencode(strip_tags(get_the_title())) ?>" target="blank" rel="nofollow"></a>
<a class="twitter" title="Podeli na Twitter-u" href="https://twitter.com/intent/tweet?source=webclient&amp;amp;text=<?php echo rawurlencode(strip_tags(get_the_title())) ?> <?php echo urlencode(get_permalink($post->ID)); ?>" target="blank" rel="nofollow"></a>
</span>
<?php }

?>
