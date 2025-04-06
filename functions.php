<?php

if ( function_exists('register_sidebar') )
	
register_sidebar(array(
'before_widget' => '<div class="box">',
'after_widget' => '</div>',
'before_title' => '<h2>',
'after_title' => '</h2>',));

register_nav_menus( array(
		'primary' => __( 'Primary Menu', 'primary' ),
	) );

function prefix_wcount(){
    ob_start();
    the_content();

    $content = ob_get_clean();

    $count = 0;

    global $post;

    if ( $post->post_type == 'post' ) {
        $count = substr_count( $content, '<p>' );
    }

    return number_format(sizeof(explode(" ", $content))+sizeof(explode("—", $content))+$count) ;
}

/**
 * Add custom taxonomies
 *
 * Additional custom taxonomies can be defined here
 * https://codex.wordpress.org/Function_Reference/register_taxonomy
 */
function add_custom_taxonomies() {
  // Add new "Fandom" taxonomy to Posts
  register_taxonomy('fandom', 'post', array(
    // Hierarchical taxonomy (like categories)
    'hierarchical' => true,
    // This array of options controls the labels displayed in the WordPress Admin UI
    'labels' => array(
      'name' => _x( 'Fandoms', 'taxonomy general name' ),
      'singular_name' => _x( 'Fandom', 'taxonomy singular name' ),
      'search_items' =>  __( 'Search Fandoms' ),
      'all_items' => __( 'View All Fandoms' ),
      'parent_item' => __( 'Fandom' ),
      'parent_item_colon' => __( 'Fandom:' ),
      'edit_item' => __( 'Edit Fandom' ),
      'update_item' => __( 'Update Fandom' ),
      'add_new_item' => __( 'Add New Fandom' ),
      'new_item_name' => __( 'New Fandom Name' ),
      'menu_name' => __( 'Fandoms' ),
    ),
    // Control the slugs used for this taxonomy
    'rewrite' => array(
      'slug' => 'fandom', // This controls the base slug that will display before each term
      'with_front' => false, // Don't display the category base before "/locations/"
      'hierarchical' => true // This will allow URL's like "/locations/boston/cambridge/"
    ),
    'show_ui' => true,
    'show_in_rest' => true,
    'show_admin_column' => true,
    'query_var' => true,
  ));
  
  // Add new "Rating" taxonomy to Posts
  register_taxonomy('rating', 'post', array(
    // Hierarchical taxonomy (like categories)
    'hierarchical' => true,
    // This array of options controls the labels displayed in the WordPress Admin UI
    'labels' => array(
      'name' => _x( 'Ratings', 'taxonomy general name' ),
      'singular_name' => _x( 'Rating', 'taxonomy singular name' ),
      'search_items' =>  __( 'Search Ratings' ),
      'all_items' => __( 'View All Ratings' ),
      'parent_item' => __( 'Rating' ),
      'parent_item_colon' => __( 'Rating:' ),
      'edit_item' => __( 'Edit Rating' ),
      'update_item' => __( 'Update Rating' ),
      'add_new_item' => __( 'Add New Rating' ),
      'new_item_name' => __( 'New Rating Name' ),
      'menu_name' => __( 'Ratings' ),
    ),
    // Control the slugs used for this taxonomy
    'rewrite' => array(
      'slug' => 'rating', // This controls the base slug that will display before each term
      'with_front' => false, // Don't display the category base before "/locations/"
      'hierarchical' => true // This will allow URL's like "/locations/boston/cambridge/"
    ),
    'show_ui' => true,
    'show_in_rest' => true,
    'show_admin_column' => true,
    'query_var' => true,
  ));
  
  // Add new "Ship (specific relationship)" taxonomy to Posts
  register_taxonomy('ship', 'post', array(
    // Hierarchical taxonomy (like categories)
    'hierarchical' => true,
    // This array of options controls the labels displayed in the WordPress Admin UI
    'labels' => array(
      'name' => _x( 'Ships', 'taxonomy general name' ),
      'singular_name' => _x( 'Ship', 'taxonomy singular name' ),
      'search_items' =>  __( 'Search Ships' ),
      'all_items' => __( 'View All Ships' ),
      'parent_item' => __( 'Ship' ),
      'parent_item_colon' => __( 'Ship:' ),
      'edit_item' => __( 'Edit Ship' ),
      'update_item' => __( 'Update Ship' ),
      'add_new_item' => __( 'Add New Ship' ),
      'new_item_name' => __( 'New Ship Name' ),
      'menu_name' => __( 'Ships' ),
    ),
    // Control the slugs used for this taxonomy
    'rewrite' => array(
      'slug' => 'ship', // This controls the base slug that will display before each term
      'with_front' => false, // Don't display the category base before "/locations/"
      'hierarchical' => true // This will allow URL's like "/locations/boston/cambridge/"
    ),
    'show_ui' => true,
    'show_in_rest' => true,
    'show_admin_column' => true,
    'query_var' => true,
  ));
  
   // Add new "Relationship Category" taxonomy to Posts
  register_taxonomy('relationship', 'post', array(
    // Hierarchical taxonomy (like categories)
    'hierarchical' => true,
    // This array of options controls the labels displayed in the WordPress Admin UI
    'labels' => array(
      'name' => _x( 'Type', 'taxonomy general name' ),
      'singular_name' => _x( 'Type', 'taxonomy singular name' ),
      'search_items' =>  __( 'Search Types' ),
      'all_items' => __( 'View All Types' ),
      'parent_item' => __( 'Type' ),
      'parent_item_colon' => __( 'Type:' ),
      'edit_item' => __( 'Edit Type' ),
      'update_item' => __( 'Update Type' ),
      'add_new_item' => __( 'Add New Type' ),
      'new_item_name' => __( 'New Type Name' ),
      'menu_name' => __( 'Types' ),
    ),
    // Control the slugs used for this taxonomy
    'rewrite' => array(
      'slug' => 'c', // This controls the base slug that will display before each term
      'with_front' => false, // Don't display the category base before "/locations/"
      'hierarchical' => true // This will allow URL's like "/locations/boston/cambridge/"
    ),
    'show_ui' => true,
    'show_in_rest' => true,
    'show_admin_column' => true,
    'query_var' => true,
  ));
  
  // Add new "Series" taxonomy to Posts
  register_taxonomy('series', 'post', array(
    // Hierarchical taxonomy (like categories)
    'hierarchical' => true,
    // This array of options controls the labels displayed in the WordPress Admin UI
    'labels' => array(
      'name' => _x( 'Series', 'taxonomy general name' ),
      'singular_name' => _x( 'Series', 'taxonomy singular name' ),
      'search_items' =>  __( 'Search Series' ),
      'all_items' => __( 'View All Series' ),
      'parent_item' => __( 'Series' ),
      'parent_item_colon' => __( 'Series:' ),
      'edit_item' => __( 'Edit Series' ),
      'update_item' => __( 'Update Series' ),
      'add_new_item' => __( 'Add New Series' ),
      'new_item_name' => __( 'New Ship Series' ),
      'menu_name' => __( 'Series' ),
    ),
    // Control the slugs used for this taxonomy
    'rewrite' => array(
      'slug' => 'series', // This controls the base slug that will display before each term
      'with_front' => false, // Don't display the category base before "/locations/"
      'hierarchical' => true // This will allow URL's like "/locations/boston/cambridge/"
    ),
  ));
  
   // Add new "Minor fandom ships" taxonomy to Posts
  register_taxonomy('minorfandomships', 'post', array(
    // Hierarchical taxonomy (like categories)
    'hierarchical' => false,
    // This array of options controls the labels displayed in the WordPress Admin UI
    'labels' => array(
      'name' => _x( 'Minor Fandom Ships', 'taxonomy general name' ),
      'singular_name' => _x( 'Minor Fandom Ship', 'taxonomy singular name' ),
      'search_items' =>  __( 'Search Minor Fandom Ships' ),
      'all_items' => __( 'View All Minor Fandom Ships' ),
      'parent_item' => __( 'Minor Fandom Ships' ),
      'parent_item_colon' => __( 'Minor Fandom Ships:' ),
      'edit_item' => __( 'Edit Minor Fandom Ships' ),
      'update_item' => __( 'Update Minor Fandom Ships' ),
      'add_new_item' => __( 'Add New Minor Fandom Ship' ),
      'new_item_name' => __( 'New Minor Fandom Ships' ),
      'menu_name' => __( 'Minor Fandom Ships' ),
    ),
    // Control the slugs used for this taxonomy
    'rewrite' => array(
      'slug' => 'minorship', // This controls the base slug that will display before each term
      'with_front' => false, // Don't display the category base before "/locations/"
      'hierarchical' => true // This will allow URL's like "/locations/boston/cambridge/"
    ),
    'show_ui' => true,
    'show_in_rest' => true,
    'show_admin_column' => true,
    'query_var' => true,
  ));
  
}
add_action( 'init', 'add_custom_taxonomies', 0 );

function fic_comment($comment, $args, $depth) {
    
    
    if ( 'div' === $args['style'] ) {
        $tag       = 'div';
        $add_below = 'comment';
    } else {
        $tag       = 'div';
        $add_below = 'div-comment';
    }?>
    <<?php echo $tag; ?> <?php comment_class( empty( $args['has_children'] ) ? '' : 'parent' ); ?> id="comment-<?php comment_ID() ?>"><?php 
    if ( 'div' != $args['style'] ) { ?>
        <div id="div-comment-<?php comment_ID() ?>" class="comment-body"><?php
    } ?>
        <div class="comment-author vcard"><?php 
            if ( $args['avatar_size'] != 0 ) {
                echo get_avatar( $comment, $args['avatar_size'] ); 
            } 
            printf( __( '<h4 class="commentmetadata">%s' ), get_comment_author_link() ); ?>
        
            <div class="commentdate">
   <?php comment_date('D d M Y h:iA T') ?> <?php 
            edit_comment_link( __( 'Edit' ), '  ', '' ); ?></div>
            
        </h4></div>
        
        <?php 
        if ( $comment->comment_approved == '0' ) { ?>
            <em class="comment-awaiting-moderation"><?php _e( 'Your comment is awaiting moderation.' ); ?></em><br/><?php 
        } ?>

        <?php comment_text(); ?>
        
        <div class="commentbottommeta"><?php 
                comment_reply_link( 
                    array_merge( 
                        $args, 
                        array( 
                            'add_below' => $add_below, 
                            'depth'     => $depth, 
                            'max_depth' => $args['max_depth'] 
                        ) 
                    ) 
                ); ?>
        </div>


        <?php 
    if ( 'div' != $args['style'] ) : ?>
        </div><?php 
    endif;
}

add_filter( 'avatar_defaults', 'custom_gravatar' );
    function custom_gravatar ($avatar_defaults) {
    
    $myavatar = 'https://aroceu.com/fic/wp-content/themes/stars/gravatar.png'; //replace this with your the image URL
    
    $avatar_defaults[$myavatar] = "Default Gravatar";
    
    return $avatar_defaults;
};

function searchfilter($query) {
 
    if ($query->is_search && !is_admin() ) {
        $query->set('post_type',array('post'));
    }
 
return $query;
}
 
add_filter('pre_get_posts','searchfilter');

function ficpage_search() {
	$search_form = '<form method="get" id="search-form-alt" action="'. esc_url(home_url('/')) .'">
		<input type="text" name="s" id="s" placeholder="Type here and..">
		<input type="submit" id="searchsubmit" value="search!" class="textInput"/>
	</form>';
	return $search_form;
}
add_shortcode('search_box', 'ficpage_search');

function custom_comment_error( $message, $title='', $args=array() ) {
  $errorTemplate = get_theme_root().'/'.get_template().'/commenterror.php';
  $defaults = array( 'response' => 500 );
  $r = wp_parse_args($args, $defaults);

  $have_gettext = function_exists('__');

  if ( function_exists( 'is_wp_error' ) && is_wp_error( $message ) ) {
    if ( empty( $title ) ) {
      $error_data = $message->get_error_data();
      if ( is_array( $error_data ) && isset( $error_data['title'] ) )
        $title = $error_data['title'];
    }
    $errors = $message->get_error_messages();
    switch ( count( $errors ) ) {
    case 0 :
      $message = '';
      break;
    case 1 :
      $message = "<p>{$errors[0]}</p>";
      break;
    default :
      $message = "<ul>\n\t\t<li>" . join( "</li>\n\t\t<li>", $errors ) . "\n\t";
      break;
    }

  } elseif ( is_string( $message ) ) {
    $message = "<p>$message</p>";
  }

  require_once( $errorTemplate );
  die();
}

function get_custom_comment_error() {
  return 'custom_comment_error';
}

add_filter( 'wp_die_handler', 'get_custom_comment_error' );

add_filter( 'single_template', function ( $template ) {

    global $post;

    if( has_tag( 'wip', $post->ID ) ) {

        $new_template = locate_template( 'wip.php' );       
        if ( $new_template ) {          

            return $new_template ;      

        }   

    }   

    return $template;

});
?>