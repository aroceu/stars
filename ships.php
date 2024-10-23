<body id="pagebody">

<?php /* Template Name: Ships */

get_header(); ?>

<?php include('pageheader.php') ?>

<div id="pagewrapper">
<div id="page">

    
<h1>Ships</h1>

<p>Ships are classified in two ways on this website: by major fandom, and by minor fandom. Ships, if they exist on a fic, will always be visible&mdash; but ships for my major fandoms will be shown as filterable options, even though you can still technically search by minor fandom ships. This is to keep things simple, as I tend to write more for my major fandoms (and thus  my ships for them) than my minor ones.</p>

<h4>Ships in my major fandoms</h4>


<ul class="pagelisttwocols">
<?php

// Get minor fandoms
$terms = get_terms(
    array(
        'taxonomy'   => 'ship',
        'hide_empty' => false,
        'orderby' => 'count',
	'order' => 'DESC',
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
<br />

<h4>Ships in my minor/old fandoms</h4>

<div class="tagcloud">
<?php wp_tag_cloud( array( 'taxonomy' => 'minorfandomships', 'number' => '0', 'show_count' => '1') ); ?>
</div>


    <?php include('taxonomynav.php') ?>


</div>

</div>

     <div id="pagefooter">

<?php get_footer(); ?>

</div>