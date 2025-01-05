<div id="fandomnav"><a href="#fandoms" rel="toggle[fandoms]">view all fandoms</a></div>

<div id="fandoms">

    <div class="inner">

<h1>Major Fandoms</h1>
<ul class="major">
     <?php

// Get the taxonomy's terms
$terms = get_terms(
    array(
        'taxonomy'   => 'fandom',
        'hide_empty' => false,
        'include' => array( 476, 464, 511, 479, 497, 503, 549, 548),
        'orderby' => 'include',
    )
);

// Check if any term exists
if ( ! empty( $terms ) && is_array( $terms ) ) {
    // Run a loop and print them all
    foreach ( $terms as $term ) { ?>
        <li> <a href="<?php echo esc_url( get_term_link( $term ) ) ?>">
            <?php echo $term->name; ?></a> (<?php echo $term->count; ?>)</li><?php
    }
} 

?>
</ul>
<h1>Other Fandoms</h1>


<ul class="minor">
<?php

// Get minor fandoms
$terms = get_terms(
    array(
        'taxonomy'   => 'fandom',
        'hide_empty' => false,
        'exclude' => array( 476, 479, 464, 497, 503, 511, 549, 548),
    )
);

// Check if any term exists
if ( ! empty( $terms ) && is_array( $terms ) ) {
    // Run a loop and print them all
    foreach ( $terms as $term ) { ?>
        <li> <a href="<?php echo esc_url( get_term_link( $term ) ) ?>">
            <?php echo $term->name; ?></a> (<?php echo $term->count; ?>)</li><?php
    }
} 

?>
</ul>
</div>

<div id="closefandoms"><a href="#" rel="toggle[fandoms]">close all fandoms</a></div>
</div>

<div style="clear: both"></div>