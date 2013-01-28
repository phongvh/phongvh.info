<?php get_header(); ?>
<div id="top-wrap">&nbsp;</div>

<div id="main-wrap">
  <div class="container">
		<div class="inner-container">
			<div class="wsite-elements wsite-not-footer" id="wsite-content">
				<?php while ( have_posts() ) : the_post(); ?>

					<?php get_template_part( 'content', 'page' ); ?>

				<?php endwhile; // end of the loop. ?>
			</div>
		</div>
  </div><!-- end container -->
</div><!-- end main-wrap -->

<?php get_footer(); ?>
