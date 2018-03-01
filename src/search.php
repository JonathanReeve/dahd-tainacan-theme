<?php get_header(); ?>

<div class="container-fluid mt-5">
    <div class="row">

        <div class="col-sm">
            <div id="content" role="main">
                <header class="mb-4 border-bottom">
                    <h1><?php _e('Search Results for', 'tainacan-theme'); ?> &ldquo;<?php the_search_query(); ?>&rdquo;</h1>
                </header>
            <?php get_template_part('template-parts/search-results'); ?>
            </div><!-- /#content -->
        </div>

        <?php get_sidebar(); ?>

    </div><!-- /.row -->
</div><!-- /.container-fluid -->

<?php get_footer(); ?>