<?php
$post = $wp_query->post;
if ( in_category( 'wishes' ) ) {
    include( TEMPLATEPATH.'/single-wishes.php' );
} else {
    include( TEMPLATEPATH.'/page.php' );
}

?>
