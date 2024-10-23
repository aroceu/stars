<div id="contentwrapper">

<div id="content">
    
    <div id="searchfilter">
            <?php echo do_shortcode( '[searchandfilter fields="rating,fandom,ship" headings="Rating,Fandoms,Ships" types="radio,select,select" order_by="id,count,count" order_dir="desc,desc,desc" all_items_labels="All Ratings, Select Fandom, Select Ship" show_count="0,1,1" submit_label="Filter"]' ); ?>
            
            </div>

        <div class="inner">
        
        <div id="posts">
            
            <div id="upper"><?php the_posts_pagination( array(
    'mid_size'  => 3,
    'prev_text' => __( '&laquo; Back', 'textdomain' ),
    'next_text' => __( 'Next &raquo;', 'textdomain' ),
) ); ?></div>

<div id="uppermobile"><?php the_posts_pagination( array(
    'mid_size'  => 1,
    'prev_text' => __( '&laquo; Back', 'textdomain' ),
    'next_text' => __( 'Next &raquo;', 'textdomain' ),
) ); ?></div>
    
            <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
        
        	<div class="fic">
        
            <div class="meta-top">
        	<h2><a href="<?php the_permalink() ?>" rel="bookmark"><?php the_title(); ?></a> <span class="theauthor">by <?php the_author ('') ?></span></h2>
             

             <div class="date"><?php the_time('j M Y') ?></div></div>

             <div class="categories"><?php edit_post_link('Edit', '', ' |'); ?>                 <?php the_terms(get_the_id(), 'fandom', __( "" ), " | " ); ?>
             
              
               <?php 
               $ship = get_the_term_list( get_the_id(), 'ship', ' | ', ', ' );
if ( !empty( $ship)) {
    echo $ship . ' ';
} ?> |

<?php the_terms( get_the_id(), 'relationship', __( "" ), " | " ); ?>  |
               
               <?php the_terms( get_the_id(), 'rating', __( "" ), " | " ); ?> 
 | <?php echo prefix_wcount(); ?>w </div>
             
        
        	    <div id="entry"><?php the_excerpt(); ?>
        	    </div>

                <div class="tags"><?php the_terms( get_the_id(), 'minorfandomships', __( " " ), " " ); ?> <?php the_terms( get_the_id(), 'series', __( " " ), " " ); ?>
<?php the_tags('',' ', ''); ?></div>
        
        	</div>
        	
        	<?php endwhile; ?>
            <?php endif; ?>

            <div id="pagebottom">
            <div id="bottom"><?php the_posts_pagination( array(
    'mid_size'  => 3,
    'prev_text' => __( '&laquo; Back', 'textdomain' ),
    'next_text' => __( 'Next &raquo;', 'textdomain' ),
) ); ?></div>

<div id="bottommobile"><?php the_posts_pagination( array(
    'mid_size'  => 1,
    'prev_text' => __( '&laquo; Back', 'textdomain' ),
    'next_text' => __( 'Next &raquo;', 'textdomain' ),
) ); ?></div>
</div>
        
        
        </div>
    
    </div>
    </div>
    
    </div>