<body id="pagebody">

<?php /* Template Name: Categories */

get_header(); ?>



<?php include('pageheader.php') ?>

<div id="pagewrapper">
<div id="page">

    
<h1>Categories</h1>

<p>Each fic on this site is filed into a specific category; as I write mostly romance stories, the categories are classified to mark the genders of the characters involved in the relationship, with the exception of poly.</p>
<p>Characters' genders are defined by the gender they identify as in the fic; if a character identifies as more than one gender, their relationship will be put into 'Other.' Genderbends&mdash;wherein characters identify as a gender different than they do from canon&mdash;will be classified as how they identify in the fic, not originally in canon.</p>
<p>Categories denote the main relationship focused on in a story. If a story is gen but happens to have a side M/M pairing, it will be categorized as 'Gen', but the relationship will still be tagged with the specific ship. If a story is ultimately poly, it will be tagged as poly; if a relationship within that takes up most of the focus in the story by my standards, then that relationship category will be tagged as well.</p>
<p>Terminology and labels are borrowed from AO3, as most of my readers are from there.</p>

<ul><li><b><a href="https://aroceu.com/fic/c/slash">M/M</a> (<?php $term_by_id = get_term( 606, 'relationship' ); echo $term_by_id->count; ?>)</b>: Male/male relationships (slash)</li>
    <li><b><a href="https://aroceu.com/fic/c/femslash">F/F</a> (<?php $term_by_id = get_term( 607, 'relationship' ); echo $term_by_id->count; ?>)</b>: Female/female relationships (femslash)</li>
    <li><b><a href="https://aroceu.com/fic/c/het">F/M</a> (<?php $term_by_id = get_term( 608, 'relationship' ); echo $term_by_id->count; ?>)</b>: Female/male relationships (het)</li>
    <li><b><a href="https://aroceu.com/fic/c/poly">Poly</a> (<?php $term_by_id = get_term( 611, 'relationship' ); echo $term_by_id->count; ?>)</b>: Polyamorous relationships; relationships that involve more than two characters</li>
    <li><b><a href="https://aroceu.com/fic/c/other">Other</a> (<?php $term_by_id = get_term( 610, 'relationship' ); echo $term_by_id->count; ?>)</b>: Other relationship type that does not fit into one of the above</li>
    <li><b><a href="https://aroceu.com/fic/c/gen">Gen</a> (<?php $term_by_id = get_term( 609, 'relationship' ); echo $term_by_id->count; ?>)</b>: Focuses on a character, friendship, or ensemble without any romantic or sexual implications between any relevant focus characters</li>
</ul>



    <?php include('taxonomynav.php') ?>


</div>

</div>

     <div id="pagefooter">

<?php get_footer(); ?>

</div>