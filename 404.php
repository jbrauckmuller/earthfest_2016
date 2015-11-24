<?php get_header(); ?>
<div class="container">
    <div class="row">
        <div class="nine columns">
            <h4 id="center">Not Found</h4>
            <h5>This is somewhat embarrassing, isn't it?</h5>
            <p>It looks like nothing was found at this location. Maybe try a search?</p>

            <h4>Try searching for what you need:</h4>
            <?php get_search_form(); ?>
        </div>
            <?php get_sidebar(); ?>
    </div>
<?php get_footer(); ?>