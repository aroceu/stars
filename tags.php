<body id="pagebody">

<?php /* Template Name: Tags */

get_header(); ?>



<?php include('pageheader.php') ?>


<div id="pagewrapper">
<div id="page">

    
<h1>Tags</h1>

<p>Below is a list of all tags on this site, for your perusal. My general utilization with tags is very lax: it's largely to inform you what you can expect in a fic at first glance, rather than being strictly taxonomical. There may be inconsistences despite my best attempts, but don't worry too much about it. More common and popular tropes will definitely be more consistent with tag usage.</p>


<hr />

<div class="tagcloud">
<?php wp_tag_cloud(array( 'number' => '0', 'show_count' => '1')); ?>
</div>

    <?php include('taxonomynav.php') ?>


</div>

</div>

<div id="pagefooter">

<?php get_footer(); ?>

</div>