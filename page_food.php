<?php /*
Template Name: food
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
        		<?php query_posts('cat=3'); ?>
                <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
              <div class="blog-post"> 	
                <div class="post-image"><?php if(has_post_thumbnail()) {
                  $image_src = wp_get_attachment_image_src( get_post_thumbnail_id(),'full' );
                  echo '<img src="' . $image_src[0]  . '" width="100%"  />';
                  }
               	?></div>
                <div class="post-content">
                <h5><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h5>
               	<?php the_excerpt(); ?>
                </div>
              </div>
                <?php endwhile; endif; ?>
        </div>
        <div class="three columns">
          <h5>Menus</h5>
          <ul>
            <li><a href="http://offthegriddle.net/menu/" target="_blank">Off the Griddle</a></li>
            <li><a href="http://souptruck.wix.com/souptonutstruck#!our-menu/cfvg" target="_blank">Soup to Nuts</li>
            <li><a href="http://www.krishnalunch.com/jom25/index.php/krishna-lunch/menu" target="_blank">Krishna</a></li>
            <li><a href="http://curbiessidewalkcafe.com/" target="_blank">Curbie's Sidewalk Café</a></li>
          </ul>
        </div>
    </section>
</div>
<?php get_footer(); ?>
