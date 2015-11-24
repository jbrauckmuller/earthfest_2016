<?php /*
Template Name: Organizations
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
<!-- Food Category Blog Posts Appear Here  -->
    <section class="row">
        <div class="nine columns">
            <?php query_posts('cat=6'); ?>
                <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
                <?php if ( has_post_thumbnail() ) {
                  the_post_thumbnail('medium');
                }
                ?>
                <h5><?php the_title(); ?></h5>
                <?php the_excerpt(); ?>
                <a class="blog-post" href="<?php the_permalink(); ?>">Read More &rsaquo;</a>
                <?php endwhile; endif; ?>
        </div>
        <div class="three columns">
          <h5>Static Sidebar</h5>
          <p>This information is changed in the file specific to each section (organizations, food, etc.)</p>
          <h5>Common Sidebar</h5>
          <p>This area can also be a common sidebar that will have information that can be changed in one place and appear across all pages.</p>
        </div>
    </section>
</div>
<?php get_footer(); ?>
