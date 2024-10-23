<?php 
/**
 * Fandoms taxonomy archive
 */
get_header();
?>

<?php include('pageheader.php') ?>

    <div id="taxresults"><big><?php
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
<?php echo $first_post . '-' . $last_post; ?> of <?php echo $all_posts; ?> works in <strong><?php single_cat_title(); ?></strong></big></div>

<!-- <p align="center" class="category"><big>
</?php
   global $wp_query;
   
   echo '1-'.$wp_query->post_count.' of ';
   $not_singular = $wp_query->found_posts > 1 ? 'works' : 'work'; // if found posts is greater than one echo results(plural) else echo result (singular)
   echo $wp_query->found_posts . " $not_singular in ";
?><b></?php single_cat_title(); ?></b></big></p>  -->

<?php if (have_posts()); ?>

<?php include('resultsfilter.php') ?>

<?php get_footer(); ?>