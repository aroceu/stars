 <div id="footerwrapper">
           <div id="footer">
               


<div id="footerleft">
                <h5>search</h5>
               <?php get_search_form( ); ?>
               <p class="footersearchlinks"><a href="https://aroceu.com/fic/tag">tags</a> // <a href="https://aroceu.com/fic/c">categories</a> // <a href="https://aroceu.com/fic/filter">advanced filtering options</a></p>

               
</div>

<div id="webring">
    <SCRIPT LANGUAGE="JavaScript"><!--
if (navigator.appVersion.indexOf('MSIE 3') == -1)
    document.write('<SCRIPT LANGUAGE="JavaScript1.1" SRC="https://ficring.neocities.org/ring.js"><\/SCRIPT>');
else
    document.write('<CENTER><IFRAME FRAMEBORDER=0 WIDTH="100" HEIGHT="50" MARGINHEIGHT=0 MARGINWIDTH=0 SCROLLING=no SRC="https://ficring.neocities.org/ring.html"><\/IFRAME><\/CENTER>');
//--></SCRIPT> 
</div>

<div id="footerright">
                    <h5>&copy; 2009-<?php echo date("Y"); ?> aroceu</h5>
		<p>There are <b><?php echo do_shortcode('[sbs_posts]'); ?>
</b> fics here, with a total of <b><?php echo do_shortcode('[sbs_word_count_all]'); ?></b> words. 
</p>
<p>The most recent fic was posted on <b><?php echo do_shortcode('[sbs_updated]'); ?></b>.</p>
<p><a href="https://aroceu.com/fic/faq">credits & faq</a> // <a href="https://aroceu.com/fic/documentation/">documentation</a> // <a href="/">contact</a> // <a href="#">to top</a></p>

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