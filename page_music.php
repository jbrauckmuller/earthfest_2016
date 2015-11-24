<?php /*
Template Name: Music & Entertainment
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
        <div class="twelve columns">
            <?php query_posts('cat=5'); ?>
                <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
              <div class="blog-post">
                <h5 class="center"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h5>
                <div class="post-image"><?php if(has_post_thumbnail()) {
                  $image_src = wp_get_attachment_image_src( get_post_thumbnail_id(),'full' );
                  echo '<img src="' . $image_src[0]  . '" width="100%"  />';
                  }
                ?></div>
                <div class="post-content">
                <?php the_excerpt(); ?>
                </div>
              </div>
                <?php endwhile; endif; ?>
            </div>
        </div>
      </section>
</div>
<?php get_footer(); ?>
