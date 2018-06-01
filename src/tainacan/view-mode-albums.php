<?php if (have_posts()):  ?>

    <div class="tainacan-albums-container">

        <div class="row no-gutters">
        <?php while (have_posts()): the_post(); ?>
            <div class="col col-sm-12 col-md-6 col-lg-4 col-xl-3">
                <div class="tainacan-album">
                    <?php if ( tainacan_current_view_displays('thumbnail') ): ?>
                        <a href="<?php the_permalink(); ?>">              
                            <div class="cd" style="background-image: url('<?php the_post_thumbnail_url('medium'); ?>')"></div>
                            <?php the_post_thumbnail('medium_large'); ?>
                        </a>
                    <?php endif; ?>
                    <?php if ( tainacan_current_view_displays('title') ): ?>
                        <a href="<?php the_permalink(); ?>">
                            <p class="metadata-title"><?php the_title(); ?></p>
                        </a>
                    <?php endif; ?>
                </div>
            </div>            
            
        <?php endwhile; ?>
        </div>
    </div>

<?php else: ?>
    <div class="tainacan-albums-container">
        Nenhum item encontrado
    </div>
<?php endif; ?>
