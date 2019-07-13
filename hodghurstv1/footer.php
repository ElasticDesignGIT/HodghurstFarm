<?php
/**
 *
 * @package WordPress
 * @subpackage hodghurstv1
 * @since Hodhurst Version 1
 */

?>
<!-- JavaScript at the bottom for fast page loading -->

<footer class="container">
	 <div class="brown-bar">
        <div class="container">
        	<p>&copy; <?php echo date("Y") ?> Copyright Hodghurst Farm</p>
            <ul class="footer-nav">
             	<li><a href="http://www.hodghurstfarm.co.uk/sitemap/">Sitemap</a></li>
	    		<li><a href="http://www.hodghurstfarm.co.uk/terms-and-conditions/">Terms &amp; Conditions</a></li>
	    		<li>Web design by <a href="http://www.eligomedia.co.uk">Eligo Media</a></li>
            </ul>
        </div>
    </div>
</footer>

<!-- For any custom JS -->

<script type="text/javascript">
 //Webfont async loader
  WebFontConfig = {
    google: { families: [ 'Rokkitt:400,700:latin' ] }
  };
  (function() {
    var wf = document.createElement('script');
    wf.src = 'https://ajax.googleapis.com/ajax/libs/webfont/1/webfont.js';
    wf.type = 'text/javascript';
    wf.async = 'true';
    var s = document.getElementsByTagName('script')[0];
    s.parentNode.insertBefore(wf, s);
  })(); 
</script>

<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-47991612-2', 'hodghurstfarm.co.uk');
  ga('send', 'pageview');

</script>
<?php wp_footer(); ?> 
</body>
</html>

