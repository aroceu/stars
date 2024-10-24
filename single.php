<?php
/*
Template Name: One Fic
*/
get_header(); ?>

<body>
    
    <script>
const selectedTheme = localStorage.getItem('selected-theme')
document.body.classList[selectedTheme === 'dark' ? 'add' : 'remove'](darkTheme)
   </script>

<div id="ficpage">
    
    <div id="singletop">

	<div id="icon"><a href="/fic"><img src="https://aroceu.com/fic/wp-content/themes/stars/site icon.png"> <?php bloginfo('name'); ?></a></div>
	
	<div class="theme-switch-wrapper">
       <label class="theme-switch" for="checkbox">
    <input type="checkbox" id="checkbox" />
    <div class="slider round"></div>
  </label>
  </div>

	<div id="navigation">
      <nav role="navigation" class="site-navigation main-navigation">
          <?php wp_nav_menu( array( 'theme_location' => 'primary' ) ); ?>
        </nav></div>
        
        <div class="borgerbutton">
  <button style="" onclick="toggleBorger()"><i class="fa-solid fa-bars"></i></button>
  </div>
  
  <div id="borger">
          <nav role="navigation" class="site-navigation main-navigation">
          <?php wp_nav_menu( array( 'theme_location' => 'primary' ) ); ?>
        </nav>
          <div class="close"><a onclick="toggleBorger()">&times;</a></div>
      </div>

      </div> <!--end top **/ -->
    
            <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
                
	
	<div id="container">

    <div class="ao3links">
        <?php
        
        if(get_field('twitter_link'))
            {
                echo '<a href="'. get_field('twitter_link') .'"><i class="fa-brands fa-twitter"></i></a> ';
            }
            
            if(get_field('ao3_link'))
            {
                echo '<a href="'. get_field('ao3_link') .'">AO3 Mirror</a>';
            }
            
            ?>
        <a href="https://archiveofourown.org/external_works/new?url_from_external=<?php the_permalink() ?>" target="_blank">Bookmark on AO3</a></div>

		<div id="metadata">
		    
		    <dl>
		       <dt>Rating:</dt> 
		            <dd><?php the_terms( get_the_id(), 'rating', __( "" ), "" ); ?></dd>
		      <dt>Category:</dt>
		      <dd><?php the_terms( get_the_id(), 'relationship', __( "" ), ", " ); ?></dd>
		      <dt>Fandom:</dt>
		      <dd><?php the_terms(get_the_id(), 'fandom', __( "" ), ", " ); ?></dd>
		      <dt>Relationship:</dt>
		      <dd><?php 
               $ship = get_the_term_list( get_the_id(), 'ship', '', ', ' );
               $minorship = get_the_terms( get_the_id(), 'minorfandomships');
                        if ( !empty( $ship)) {
                            echo $ship . '';
                        }
                        else if( !empty($minorship)){
                            echo the_terms( get_the_id(), 'minorfandomships', __( " " ), ", " );
                        }
                        else{
                            echo 'None';
                        }
                        ?></dd>
                        
                <?php

                        if(get_field('series'))
                        {
                            echo '<dt>Series:</dt>
                            <dd>Part of the '?> <?php the_terms(get_the_id(), 'series', __( "" ), " | " ); ?> <?php echo ' series</dd>';
                        }
                        
                        ?>

            <dt>Tags:</dt>
                <dd class="tags">
                    
                    <?php if(has_tag()) {
                    the_tags('',', ', ''); } 
                    else {
                    echo 'None';
                    }
                    ?></dd>
                
            <dt>Stats:</dt>
                <dd><dl>
                <dt class="inside">Posted on:</dt>
                <dd class="inside"><?php the_time('Y-m-d') ?></dd>
                
                <dt class="inside words">Words:</dt>
                <dd class="inside"><?php echo prefix_wcount(); ?></dd></dd>
		        
		    </dl></dl>
		    
		    </div>
		    
		    <div class="synopsis">
		               	<h1><?php the_title(); ?></h1> 
		               	<h2><a href="https://aroceu.com/fic">by <?php the_author ('') ?></a></h2>
		               	
		               	<div class="excerpt">
		               	<h3 class="summary">Summary:</h3>
		               	    <blockquote class="userstufflol"><?php the_excerpt(); ?></blockquote>
		               	    
		               	 <?php

                        if(get_field('top_notes') || get_field('related_work_link') || get_field('translation_link') || get_field('podfic_link') || (get_field('recip_name')))
                        {
                            
                                    
                        
                            echo '<h3 class="summary">Notes:</h3>';
                            
                            if(get_field('recip_name'))
                                {
                                    
                                    if(get_field('recip_link')){
                                        echo '<p class="related">For <b><a href="' . get_field('recip_link') . '">' . get_field('recip_name') . '</a></b>';
                                    }
                                    
                                    else{
                                    
                                    echo '<p class="related">For ' . get_field('recip_name') . '';
                                    
                                    }
                                    
                                    if(get_field('event_name'))
                                    {
                                        echo ' (' . get_field('event_name') . ')</p>';
                                    }
                                    
                                    else{
                                        echo '.</p>';
                                    }
                                }
                                
                                
                            
                            if(get_field('related_work_link'))
                                {
                                    echo '<p class="related"><b>Related work:</b> <a href="' . get_field('related_work_link') . '">' . get_field('related_work_title') . '</a> by ' . get_field('related_work_author') . '</p>';
                                }
                                
                            if(get_field('translation_link'))
                                {
                                    echo '<p class="related"><b>Translation into ' . get_field('translated_language') . ' available:</b> <a href="' . get_field('translation_link') . '">' . get_field('translation_title') . '</a> by ' . get_field('translation_author') . '</p>';
                                }
                                
                            if(get_field('podfic_link'))
                                {
                                    echo '<p class="related"><b>Podfic available:</b> <a href="' . get_field('podfic_link') . '">' . get_field('podfic_title') . '</a> by ' . get_field('podficcer') . '</p>';
                                }
                            
                            echo '<blockquote class="userstufflol"><p>' . get_field('top_notes') . '</p></blockquote>';
                        }
                        
                        ?>
                        
                        <?php

                        if(get_field('bottom_notes'))
                        {
                            echo '<p style="margin-top:1.5em">(See the end of the work for <a href="#bottomnotes">more notes</a>)</p>'; } ?>
                        
		               	</div>

		
             </div>

        
        	    <div id="entry"><?php the_content(); ?>
        	    </div>
        	    
        	    <div class="synopsis" id="bottomnotes"><?php

                        if(get_field('bottom_notes'))
                        {
                            echo '<h3 class="summary">Notes:</h3>
                            <blockquote class="userstufflol"><p>' . get_field('bottom_notes') . '</p></blockquote>';
                        }
                        
                        ?></div>
        	    
        	    	<?php comments_template(); ?>

        
        	</div>
        	
        	<?php endwhile; ?>
            <?php endif; ?>
        
        </div>
        
<div id="singlefooter">
<?php get_footer(); ?>
</div>