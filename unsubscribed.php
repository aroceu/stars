<?php /* Template Name: Unsubscribed */
?>

<!doctype html>
<html lang="en">
   <head><meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Inconsolata:wght@300&family=Cookie&family=Open+Sans:ital,wght@0,400;0,700;1,400;1,700&family=Playfair+Display:ital,wght@0,400;0,600;1,400;1,600&display=swap" rel="stylesheet">

<script src="https://kit.fontawesome.com/fbb66f1bce.js" crossorigin="anonymous"></script>
	
	<meta name="viewport" content="initial-scale=1.0, maximum-scale=1, width=device-width">
	<link rel="alternate" type="application/rss+xml" title="<?php bloginfo('name'); ?> RSS Feed" href="<?php bloginfo('rss2_url'); ?>" />
	<link rel="alternate" type="application/atom+xml" title="<?php bloginfo('name'); ?> Atom Feed" href="<?php bloginfo('atom_url'); ?>" />

      <link rel="shortcut icon" type="image/x-icon" href="https://aroceu.com/fic/wp-content/themes/stars/favicon.png" />

	<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />
	<title>Unsubscribed / <?php bloginfo('name'); ?></title>
	
	<style type="text/css">
	    
	    html, body{
			min-height: 100vh;
	padding: 0;
	margin: 0;
	word-wrap: break-word;
	overflow: hidden;
	}

	body{
		background: #ffc7c3 url('https://aroceu.com/fic/wp-content/themes/stars/stars.png');
		margin: 0;
    	padding: 0;
          color: #5a4a57;
    	font: normal 100%/160% 'Open Sans';
    	overflow-x: hidden;
    	overflow-y: scroll;
	}

    #error{
      margin: 10vh auto;
      font: normal 150% 'Playfair Display';
      text-align: center;
      padding: 3em;
    width: 50%;
    background: #ffc7c3;
    }


    h1{
    font: normal 450% 'Cookie';
    text-align: center;
    text-shadow: none;
    margin: 0;
    text-shadow: -5px -5px 0px #FFE6C7;
    display: inline-block;
    padding: 0;
    }

    #error a:link, #error a:visited{
      text-decoration: none;
		border-bottom: none;
		font: normal 150% 'Cookie';
    }
    
    a:link, a:visited{
         color: #5a4a57;
        font-weight: bold;
	    text-shadow: -3px -3px 0px #FFE6C7;
    }
    
    a:hover, a:active{
       color: #FFE6C7;
        font-weight: bold;
	    text-shadow: -3px -3px 0px #5a4a57;
    }

    
	</style>
	
	
	
     <?php wp_head(); ?>
   </head>

     <body>

     	<div id="error">

     		<div id="errornotif">

<h1>You've unsubscribed.</h1>


		<p><a href="https://aroceu.com"><i class="fa-regular fa-paper-plane"></i></a> <a href="https://aroceu.com/fic"><i class="fa-solid fa-pen"></i></a></p>
</div>

</div>
</body>

</html>