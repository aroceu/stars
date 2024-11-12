 <div id="footerwrapper">
           <div id="footer">
               


<div id="footerleft">

               <h5>Search</h5>

               [search_box]
               
               <p><a href="https://aroceu.com/fic/tag">tags</a> // <a href="https://aroceu.com/fic/c">categories</a> // <a href="https://aroceu.com/fic/filter">other filtering options</a></p>

               
</div>

<div id="footerright">

		<h5>&copy; 2009-<?php echo date("Y"); ?> aroceu</h5>
		<p>There are <b><?php echo do_shortcode('[sbs_posts]'); ?>
</b> fics here, with a total of <b><?php echo do_shortcode('[sbs_word_count_all]'); ?></b> words. 
</p>
<p>The most recent fic was posted on <b><?php echo do_shortcode('[sbs_updated]'); ?></b>.</p>
<p><a href="/">contact</a> // <a href="https://aroceu.com/fic/credits">credits, etc.</a> // 
	<a href="https://aroceu.com/fic/rss" target="_blank">feed</a> // 
	<a href="#">to top</a></p>

	</div>

<div style="clear: both;">
</div>

           </div>

        </div></div>
        
        <div style="position: fixed; bottom: 10px; right: 10px;">
        
        </div>
     <?php wp_footer(); ?>
     
     <script>
     
     function toggleBorger() {
    var element = document.getElementById("borger");
    if (element.style.display == "block") {
        element.style.display = "none";
    } else {
        element.style.display = "block";
    }
}

function borger_open() {
  document.getElementById("borger").style.display = "block";
}

function borger_close() {
  document.getElementById("borger").style.display = "none";
}

function filter_open() {
  document.getElementById("filter").style.display = "block";
}

function filter_close() {
  document.getElementById("filter").style.display = "none";
}

const toggleSwitch = document.querySelector('.theme-switch input[type="checkbox"]');
const currentTheme = localStorage.getItem('theme');

if (currentTheme) {
    document.documentElement.setAttribute('data-theme', currentTheme);
  
    if (currentTheme === 'dark') {
        toggleSwitch.checked = true;
    }
}

function switchTheme(e) {
    if (e.target.checked) {
        document.documentElement.setAttribute('data-theme', 'dark');
        localStorage.setItem('theme', 'dark');
    }
    else {        document.documentElement.setAttribute('data-theme', 'light');
          localStorage.setItem('theme', 'light');
    }    
}

toggleSwitch.addEventListener('change', switchTheme, false);

</script>

     </body>
</html>