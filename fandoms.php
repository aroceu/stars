<body id="pagebody">

<?php /* Template Name: Fandoms */

get_header(); ?>

<?php include('pageheader.php') ?>

<div id="pagewrapper">
<div id="page">

    
<h1>Fandoms</h1>

<h3>Major Fandoms</h3>

<p>These are fandoms that have been my primary fandom for an extended period of time, or are fandoms that I return to semi-regularly, or both. They also have specific pairing tags, as I tend to be relatively prolific.</p>	 
<ul>	 
<li><b><a href="https://aroceu.com/fic/fandom/bbs/">Bad Buddy</a> (<?php $term_by_id = get_term( 476, 'fandom' ); echo $term_by_id->count; ?>)</b></big>  <small><i>2022 - present</i></small></li>	 
<li><a href="https://aroceu.com/fic/fandom/mdzs/">Mo Dao Zu Shi / The Untamed</a> (<?php $term_by_id = get_term( 464, 'fandom' ); echo $term_by_id->count; ?>)</b> <small><i>2020 - 2022</small></i></li>
 <li><a href="https://aroceu.com/fic/fandom/tsn/">The Social Network</a> (<?php $term_by_id = get_term( 511, 'fandom' ); echo $term_by_id->count; ?>)</b> <small><i>2015 - 2017</i></small></li>	 
 <li><a href="https://aroceu.com/fic/fandom/haikyuu/">Haikyuu!!</a> (<?php $term_by_id = get_term( 479, 'fandom' ); echo $term_by_id->count; ?>)</b> <small><i> 2014 - 2016</i></small></li>	 
 <li><a href="https://aroceu.com/fic/fandom/1d">One Direction</a> (<?php $term_by_id = get_term( 497, 'fandom' ); echo $term_by_id->count; ?>)</b> <small><i>2012 - 2018</i></small></li>	 
<li><a href="https://aroceu.com/fic/fandom/pokemon">Pokemon</a> (<?php $term_by_id = get_term( 503, 'fandom' ); echo $term_by_id->count; ?>)</b> <small>this one doesn't have a set timeframe, because I'll always love Pokemon</small></li>	 

<li><a href="https://aroceu.com/fic/fandom/suju">Super Junior</a> (<?php $term_by_id = get_term( 549, 'fandom' ); echo $term_by_id->count; ?>)</b> <small><i>2009 - 2012</i></small></li>

<li><a href="https://aroceu.com/fic/fandom/sp">South Park</a> (<?php $term_by_id = get_term( 548, 'fandom' ); echo $term_by_id->count; ?>)</b> <small><i>2008 - 2014</small></li>
</ul>

<h3>Minor Fandoms</h3>	 
<p>These are fandoms I've written a handful of fics in (if not only one), with the attributed pairing treated similarly to a tag. I may return to these fandoms on occasion, but not regularly.</p>

<ul class="pagelisttwocols">
<?php

// Get minor fandoms
$terms = get_terms(
    array(
        'taxonomy'   => 'fandom',
        'hide_empty' => false,
        'exclude' => array( 476, 479, 464, 497, 503, 511),
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



    <?php include('taxonomynav.php') ?>


</div>

</div>

     <div id="pagefooter">

<?php get_footer(); ?>

</div>