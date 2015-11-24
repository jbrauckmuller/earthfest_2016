<?php get_header(); ?>
<div class="container">
    <section class="row">
        <div class="twelve columns">
            <h4>Search</h4>
        </div>
    </section>
    <div class="row">
            <div class="nine columns">
                <?php if( have_posts() ) :?>
                    <h1><?php printf(__('Search Results for: %s'), '<span>' . get_search_query() . '</span>' ); ?></h1>

                    <?php if (have_posts()) :
                        while (have_posts()) : the_post(); ?>
                        	<h2><?php the_title(); ?></h2>
                            	<?php the_content();
                        endwhile;
                 	else : ?>
                    <h1>Nothing Found</h1>
                    <p>Sorry, but nothing matched your search criteria. Please try again with different search terms.</p>
                <?php endif; ?>
            </div>
                <?php get_sidebar(); ?>
        </div>
<?php get_footer(); ?>