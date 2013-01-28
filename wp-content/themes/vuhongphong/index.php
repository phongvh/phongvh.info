<?php get_header(); ?>

    <div id="banner-wrap">
        <div class="container">
            <div id="banner">
            
                <div id="bannerleft">
                	<div class="wsite-header"></div>
                </div><!-- end banner-left -->
                
                <div id="bannerright">
                	<h2><span class="wsite-text">What am I good at?</span></h2>
                	<p><span class="wsite-text"><a href="http://php.net">PHP</a>, <a href="http://mysql.com">MySQL</a>, <a href="http://www.w3schools.com/html/html5_intro.asp">HTML</a> (including HTML5), <a href="http://www.w3schools.com/cssref/default.asp">CSS</a> (including CSS3), <a href="http://www.w3schools.com/js/default.asp">JavaScript</a>, <a href="http://api.jquery.com/">Jquery</a>, <a href="http://api.jquery.com/category/ajax/">Ajax</a>, <a href="http://twitter.github.com/bootstrap">Twitter Bootstrap</a>, <a href="http://github.com">Git</a>, <a href="http://lucene.apache.org/solr/">Solr</a>, <a href="http://redis.io/clients">Redis</a>, <a href="http://ellislab.com/codeigniter">CodeIgniter</a>, <a href="http://wordpress.org">Wordpress</a>, <a href="http://drupal.org">Drupal</a>...</span></p>
                	<div style="text-align:left;"><div style="height: 0px; overflow: hidden;"></div>
<a href="javascript:window.location.href='http://<?php echo $_SERVER['SERVER_NAME'];?>/contact';" class="wsite-button wsite-button-large wsite-button-highlight">
<span class="wsite-button-inner">Contact me</span>
</a>
<div style="height: 0px; overflow: hidden;"></div></div>
                </div><!-- end banner-right -->
                
                <div style="clear:both;"></div>
            </div><!-- end banner -->
        </div><!-- end container -->
    </div><!-- end banner-wrap -->

    <div id="main-wrap">
        <div class="container">
			<div class="inner-container">
				<div class="wsite-elements wsite-not-footer" id="wsite-content">
				<div style="text-align:left;" class="paragraph"><h4>What have I done?</h4></div>
				
				<div><div class="wsite-multicol"><div style="margin:0 -20px" class="wsite-multicol-table-wrap">
				<table class="wsite-multicol-table">
				<tbody class="wsite-multicol-tbody">
				<tr class="wsite-multicol-tr">
				<td style="width:50%;padding:0 20px" class="wsite-multicol-col col-1">
				
				<h2 style="text-align:left;">A small app of my own<br></h2>
				<a href="http://viiew.info" target="_blank"><img src="<?php bloginfo('template_url') ?>/img/viiew.png" width="316" height="186"></a>
				<div class="description">This app is based on Geolocation API in HTML5. It allows you to show your current position and you can share that position with your friends. It helps them find you easier.
				<a target="_blank" href="http://viiew.info">
					<span>Visit page</span>
				</a>
				</div>
				
				</td>
				<td style="width:50%;padding:0 20px" class="wsite-multicol-col">
				
				<h2 style="text-align:left;">Some projects from clients<br></h2>
				<div id="slider-container">
				<div id="slider">
				<div class="slider-feature">
					<a href="http://solo.vn" target="_blank"><img class="slider-image" src="<?php bloginfo('template_url') ?>/img/solo.jpg"></a>
					<div class="slider-caption">
					Solo is a one of the leading e-commerce sites in Vietnam. You can find most of things like books, clothes, mobiles... It also suggests you thing you may love.
					<a target="_blank" href="http://solo.vn">
					<span>Visit page</span>
					</a>
					</div>
					<div class="shadow">
					<img class="slider-image" src="<?php bloginfo('template_url') ?>/img/shadow.png"></div>
				</div>
				
				<div class="slider-feature">
					<a href="http://openwave.com" target="_blank"><img class="slider-image" src="<?php bloginfo('template_url') ?>/img/openwave.jpg"></a>
					<div class="slider-caption">
					Openwave is a company that invented the mobile internet, pioneering many of the technologies that allow mobile devices to connect to the Internet.
					<a target="_blank" href="http://openwave.com">
					<span>Visit page</span>
					</a>
					</a>
					</div>
					<div class="shadow">
					<img class="slider-image" src="<?php bloginfo('template_url') ?>/img/shadow.png"></div>
				</div>
				
				<div class="slider-feature">
					<a href="#" target="_blank"><img class="slider-image" src="<?php bloginfo('template_url') ?>/img/page1.png"></a>
					<div class="slider-caption">
					This is one of many projects I've worked on but for some reasons I can't give you much more information about them.
					</div>
					<div class="shadow">
					<img class="slider-image" src="<?php bloginfo('template_url') ?>/img/shadow.png"></div>
				</div>
				
				<div class="slider-feature">
					<a href="http://www.tymphany.com/" target="_blank"><img class="slider-image" src="<?php bloginfo('template_url') ?>/img/tymphany.jpg"></a>
					<div class="slider-caption">
					Tymphany is a western-owned and operated, Asian-based designer and manufacturer of advanced acoustic solutions.
					<a target="_blank" href="http://www.tymphany.com/">
					<span>Visit page</span>
					</a>
					</div>
					<div class="shadow">
					<img class="slider-image" src="<?php bloginfo('template_url') ?>/img/shadow.png"></div>
				</div>
				</div>
				<div id="slider-left">&nbsp;</div>
				<div id="slider-right">&nbsp;</div>
				</div>
				
				</td>
				</tr>
				</tbody>
				</table>
				</div></div></div></div>

			</div>
        </div><!-- end container -->
    </div><!-- end main-wrap -->
    <link rel="stylesheet" href="<?php bloginfo('template_url') ?>/css/Slider.css" type="text/css">
            
    <script type="text/javascript" language="javascript" src="<?php bloginfo('template_url') ?>/js/jquery.featureCarousel.js"></script>
    <script>
    $(document).ready(function() {
    		var pluginData = {
    				largeFeatureWidth :   330,
    			    largeFeatureHeight:	  200,
    			    smallFeatureWidth:    220,
    			    smallFeatureHeight:	  137.5,
  		    };
    	  carousel =  $("#slider").QatarSlider(pluginData);
        carousel.start();
      });

</script>
<?php get_footer(); ?>