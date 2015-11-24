<?php get_header(); ?>
<div class="container">
    <div class="row">
        <div class="twelve columns">
            <?php if (have_posts()) :      
				while (have_posts()) : the_post(); ?> 
                    <h4 class="center"><?php the_title(); ?></h4>
                    <?php the_content();
                endwhile;
            endif; ?>
        </div>
    </div>
</div>
<?php get_footer(); ?>