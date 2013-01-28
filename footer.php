<?php
/**
 * The template for displaying the footer.
 *
 * @package Mentor.Makerspace.com
 * @since Mentor.Makerspace.com 1.0
 */
?>

		<script>
			//uncomment this code and update the UA code to add your Google Analytics
			/*var _gaq=[['_setAccount','UA-XXXXX-X'],['_trackPageview']];`
			(function(d,t){var g=d.createElement(t),s=d.getElementsByTagName(t)[0];
			g.src=('https:'==location.protocol?'//ssl':'//www')+'.google-analytics.com/ga.js';
			s.parentNode.insertBefore(g,s)}(document,'script'));*/
		</script>

		<!--[if lt IE 7 ]>
			<script src="//ajax.googleapis.com/ajax/libs/chrome-frame/1.0.3/CFInstall.min.js"></script>
			<script>window.attachEvent('onload',function(){CFInstall.check({mode:'overlay'})})</script>
		<![endif]-->
		
		<?php mms_ga_code(); ?>
		
		<?php wp_footer(); ?>
	</body>
</html>