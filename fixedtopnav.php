<body id="index">

<div id="top">

	<div id="icon"><a href="/fic"><img src="https://aroceu.com/fic/wp-content/themes/stars/site icon.png" alt="aroceu's default icon, chibi of Pran from Bad Buddy with Kirby"> <?php bloginfo('name'); ?></a></div>
	
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
     <button style="" onclick="filter_open()"><i class="fa-solid fa-filter"></i></button>
  <button style="" onclick="toggleBorger()"><i class="fa-solid fa-bars"></i></button>
  </div>
  
  <div id="borger">
          <nav role="navigation" class="site-navigation main-navigation">
          <?php wp_nav_menu( array( 'theme_location' => 'primary' ) ); ?>
        </nav>
          <div class="close"><a onclick="toggleBorger()">&times;</a></div>
      </div>

      </div> <!--end top **/ -->
      
      
      
      
      <div id="filter">
  <div class="close"><a onclick="filter_close()">&times;</a></div>
  <?php echo do_shortcode( '[searchandfilter fields="rating,fandom,ship" headings="Rating,Fandoms,Ships" types="radio,select,select" order_by="id,count,count" order_dir="desc,desc,desc" all_items_labels="All Ratings, Select Fandom, Select Ship" show_count="0,1,1" submit_label="Filter"]' ); ?>
</div>

