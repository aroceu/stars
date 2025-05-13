<!doctype html>
<html lang="en">
    
   <head>        
    <meta http-equiv="cache-control" content="public">
       <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
       <meta name="robots" content="noai, noimageai">
	<meta name="description" content="<?php bloginfo('description'); ?>"/>
	<meta property="og:title" content="aroceu's fic" />
	<meta property="og:description" content="<?php bloginfo('description'); ?>" />
	<meta property="og:image" content="https://aroceu.com/assets/preview.png" />
	<meta property="og:url" content="https://aroceu.com/fic" />
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Inconsolata:wght@300&family=Cookie&family=Open+Sans:ital,wght@0,400;0,700;1,400;1,700&family=Playfair+Display:ital,wght@0,400;0,600;1,400;1,600&display=swap" rel="stylesheet">

<script src="https://kit.fontawesome.com/fbb66f1bce.js" crossorigin="anonymous"></script>
	
	<meta name="viewport" content="initial-scale=1.0, maximum-scale=5, width=device-width">
	<link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>" type="text/css" media="screen" />
	<link rel="alternate" type="application/rss+xml" title="<?php bloginfo('name'); ?> RSS Feed" href="<?php bloginfo('rss2_url'); ?>" />
	<link rel="alternate" type="application/atom+xml" title="<?php bloginfo('name'); ?> Atom Feed" href="<?php bloginfo('atom_url'); ?>" />

      <link rel="shortcut icon" type="image/x-icon" href="https://aroceu.com/fic/wp-content/themes/stars/favicon.png" />

	<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />
	<title><?php wp_title('/', true, 'right'); ?> <?php bloginfo('name'); ?> </title>
<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.3.2/jquery.min.js"></script>
	<script type="text/javascript" src="https://aroceu.com/assets/scripts/jquery-1.10.1.min.js"></script>
	
	<script type="text/javascript" src="https://aroceu.com/assets/scripts/animatedcollapse.js">

/***********************************************
* Animated Collapsible DIV v2.4- (c) Dynamic Drive DHTML code library (www.dynamicdrive.com)
* Please keep this notice intact
* Visit Dynamic Drive at http://www.dynamicdrive.com/ for this script and 100s more
***********************************************/

</script>
	   <script type="text/javascript">

animatedcollapse.addDiv('fandoms', 'hide=1,fade=1,group=fandoms')

animatedcollapse.ontoggle=function($, divobj, state){ //fires each time a DIV is expanded/contracted
	//$: Access to jQuery
	//divobj: DOM reference to DIV being expanded/ collapsed. Use "divobj.id" to get its ID
	//state: "block" or "none", depending on state
}

animatedcollapse.init()

$(function() {
  $('a[href*="#"]:not([href="#"])').click(function() {
    if (location.pathname.replace(/^\//,'') == this.pathname.replace(/^\//,'') && location.hostname == this.hostname) {
      var target = $(this.hash);
      target = target.length ? target : $('[name=' + this.hash.slice(1) +']');
      if (target.length) {
        $('html, body').animate({
          scrollTop: target.onset().top
        }, 500);
        return false;
      }
    }
  });
});

</script>


<?php
if ( is_single() && comments_open() && get_option( 'thread_comments' ) ) {
    wp_enqueue_script( 'comment-reply' );
}
?>

	   
     <?php wp_head(); ?>
     

   </head>
   
  