<body id="pagebody">

<?php /* Template Name: Ratings */

get_header(); ?>



<?php include('pageheader.php') ?>

<div id="pagewrapper">
<div id="page">

    
<h1>Ratings</h1>

<p>All fics on this site have a designated rating, representing the maximum level of mature content in a particular story.</p>

<p>Rating levels are borrowed from AO3.</p>

<ul><li><b><a href="https://aroceu.com/fic/rating/general">General Audiences</a> (<?php $term_by_id = get_term( 674, 'rating' ); echo $term_by_id->count; ?>)</b>: No mature themes, explicit sensuality, or swear words; baby stuff</li>
    <li><b><a href="https://aroceu.com/fic/rating/teen">Teen</a> (<?php $term_by_id = get_term( 675, 'rating' ); echo $term_by_id->count; ?>)</b>: Mature themes may be mentioned; sensuality (such as making out or extremely abstract descriptions of sex) may occur explicitly; swear words, including the word "fuck"</li>
    <li><b><a href="https://aroceu.com/fic/rating/mature">Mature</a> (<?php $term_by_id = get_term( 676, 'rating' ); echo $term_by_id->count; ?>)</b>: Mature themes are very prominent; the highest level of violence/gore without explicit sex; sex occurs on screen or is explicitly insinuated and/or discussed, but not given a detailed play-by-play</li>
    <li><b><a href="https://aroceu.com/fic/rating/explicit">Explicit</a> (<?php $term_by_id = get_term( 677, 'rating' ); echo $term_by_id->count; ?>)</b>: Mature themes are written out in detail; always contains explicit sex. Sucking and fucking. etc</li>
</ul>



    <?php include('taxonomynav.php') ?>


</div>

</div>

     <div id="pagefooter">

<?php get_footer(); ?>

</div>