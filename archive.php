<?php get_header(); ?>
<div class="container">
<div class="row">
    <div class="twelve columns" id="center">
        <h4>Archives</h4>
    </div>
</div>
<div class="row">
    <div class="nine columns">
        <?php if ( have_posts() ) : ?>
            <?php
            // The Loop
            while ( have_posts() ) : the_post();?>
            <!-- data context -->
            <?php
            if ( has_post_thumbnail() ) {
                the_post_thumbnail('full');
            }
            ?>
            <div class="overlay">
                <h3><a class="overlay-anchor" href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
                <?php the_excerpt(); ?>
                <p><a class="overlay-anchor" href="<?php the_permalink(); ?>">Read More</a></p>
            </div>
            <?php endwhile; ?> <!-- End Loop -->
        <?php else: ?>
        		<P>Sorry, no posts match your criteria</P>
        <?php endif; ?>
    </div>
    <?php get_sidebar(); ?>
</div>


<div class="row">
    <div class="twelve columns">
        <h2>Archives by Month:</h2>
        <ul>
            <?php wp_get_archives('type=monthly'); ?>
        </ul>
        <h2>Archives by Category:</h2>
        <ul>
             <?php wp_list_categories(); ?>
        </ul>
    </div>
</div>
<?php get_footer(); ?>