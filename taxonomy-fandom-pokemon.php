<?php get_header(); ?>

<style type="text/css">

#fandombanner{
	background: url('https://aroceu.com/fic/wp-content/themes/main/banners/pkmn banner.png') center no-repeat;
	background-size: 50em;
	height: 20em;
	margin-top: 55px;
}

#fandomtempbanner{
	background: url('https://aroceu.com/fic/wp-content/themes/main/stars.png') repeat;
		border-bottom: 5px solid #ffcba7;
}

@media only screen and (max-width: 768px) and (min-width: 0px) {
    
    #fandombanner{
    background-size: 24em;
    height: 10em;
    
    }
}

</style>

<?php include('fixedtopnav.php') ?>

    <div id="fandomtempbanner"><div id="fandombanner"></div></div>
    
<?php include('resultsfilter.php') ?>


<?php get_footer(); ?>