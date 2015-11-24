<?php
/*
Template Name: Search Page
*/
?>
<?php get_header(); ?>
<section class="container">
    <div class="row">
        <div class="eight columns">
            <?php if ( have_posts() ) : ?>
                <h4 class="center"><?php printf( __( 'Search Results for: %s'), '<span>' . get_search_query() . '</span>' ); ?></h4>
            <?php /* Start the Loop */ ?>
            <?php while ( have_posts() ) : the_post(); ?>
            <div class="blog-post">
                <h5><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h5>
                <?php the_excerpt(); ?>
                <?php endwhile; ?>
                <?php else : ?>
                <div class="center"><h4>Nothing Found</h4></div>
                <p>Sorry, but nothing matched your search criteria. Please try again with different search terms.</p>
                <?php endif; ?>
            </div>
            </div>
            </div>
        </div>
        <div class="four columns">
            <?php get_sidebar(); ?>
        </div>
    </div>
</section>
<?php get_footer(); ?>
