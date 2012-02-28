<?php get_header(); ?>
<?php get_sidebar(); ?>
                    <div id="content">
                    <?php if (have_posts()) ?>
                        <?php while(have_posts()) : the_post(); ?>
                        <div class="searchResult">
                        <h2><a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>"><?php the_title(); ?></a></h2>
                        <?php the_excerpt(); ?>
                        <h6><?php the_time('l jS F, Y - g:ia') ?></h6>
                        </div>
                        <?php endwhile; ?>
                    </div>
                </div>
            </div>
        </div>
<?php get_footer(); ?>
