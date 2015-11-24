<?php /*
Template Name: News & Updates
*/ ?>

<?php get_header(); ?>
<div class="container">
<!-- Static Information for Food Page -->
	<div class="row">
		<div class="twelve columns">
			<h3 class="center"><?php echo get_the_title( $ID ); ?></h3>
				<?php if ( have_posts() ) : while( have_posts() ) : the_post();
    			the_content();
				endwhile; endif; ?>
				<?php wp_reset_query(); ?>
		</div>
	</div>
<!-- Food Category Blog Posts Appear Here	 -->
    <section class="row">
        <div class="nine columns">
    		<?php query_posts('cat=4'); ?>
            <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
           	<?php if ( has_post_thumbnail() ) {
           		the_post_thumbnail('medium');
           	}
           	?>
           	<div class="blog-post">
              <h5><?php the_title(); ?></h5>
              <?php the_excerpt(); ?>
              <a class="blog-post" href="<?php the_permalink(); ?>">Read More &rsaquo;</a>
              <?php endwhile; endif; ?>
            </div>
        </div>
<!-- Side Column - Static Content -->
        <div class="three columns">
          <h5>Event Details</h5>
          <p>Saturday, March 4th<br>Flavet Field<br>11am - 5pm</p>
          <a class="twitter-timeline" href="https://twitter.com/UFEarthFest" data-widget-id="664498720445214720">Tweets by @UFEarthFest</a>
          <script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+"://platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs");</script>
        </div>
    </section>
</div>
<?php get_footer(); ?>
