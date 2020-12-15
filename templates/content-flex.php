<?php

// ID of the current item in the WordPress Loop
$id = get_the_ID();

// check if the flexible content field has rows of data
if ( have_rows( 'content', $id ) ) :

    // loop through the selected ACF layouts and display the matching partial
    while ( have_rows( 'content', $id ) ) : the_row();

        get_template_part( '/templates/flex/' . get_row_layout() );

    endwhile;

elseif ( get_the_content() ) :

    // no layouts found

endif;

?>
