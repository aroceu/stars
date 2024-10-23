<?php 
/**
 * Search Results
 */
get_header();
?>

<?php include('pageheader.php') ?>


    <div id="taxresults"><big>Displaying <?php
    if ( !is_paged() ) {
    // first page of pagination
    $first_post = absint( $wp_query->get('paged') - 1 );
    $last_post = $first_post + $wp_query->post_count - 1;
    $all_posts = $wp_query->found_posts;
} else {
    $first_post = absint( $wp_query->get('paged') - 1 ) * $wp_query->get('posts_per_page') + 1;
    $last_post = $first_post + $wp_query->post_count - 1;
    $all_posts = $wp_query->found_posts;
} 
?>
<?php echo $first_post . '-' . $last_post; ?> of <?php echo $all_posts; ?> search results for <b>"<?php the_search_query(); ?>"</b></big></div>


<?php if (have_posts()); ?>

<?php include('resultsfilter.php') ?>

<?php get_footer(); ?>