function posttype_class( $classes ) {
    global $post;
    $post_type_class = "post-type-" . $post->post_type;
    $classes[] = $post_type_class;
    return $classes;
}
add_filter( 'body_class', 'posttype_class' );


