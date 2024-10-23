<?php get_header(); ?>

<?php include('pageheader.php') ?>
    
    <div id="pagewrapper">
    
    <div id="page">
    
            <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
        
        	<h1><?php the_title(); ?> </h1>
        
        	    <?php the_content(); ?>
        	    
        
        
        	
        	<?php endwhile; ?>
            <?php endif; ?>
        
        </div>
        
        </div>
     
     <div id="pagefooter">

<?php get_footer(); ?>

</div>