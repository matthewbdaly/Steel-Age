<?php get_header(); ?>
<?php get_sidebar(); ?>
                    <div id="content">
                    <?php if (have_posts()) ?>
                        <?php while(have_posts()) : the_post(); ?>
                        <div class="post">
                            <h2>
                                <a href="<?php the_permalink(); ?>" rel="bookmark" title="Permanent Link to <?php the_title(); ?>">
                                <?php the_title(); ?>
                                </a>
                            </h2>
                            <div class="postContent">
                            <?php the_content(); ?>
                            </div>
                        </div>
                        <?php endwhile; ?>
                        <div class="navigation">
                            <div class="alignLeft"><?php previous_posts_link('&laquo; Previous Entries'); ?></div>
                            <div class="alignRight"><?php next_posts_link('Next Entries &raquo;'); ?></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
<?php get_footer(); ?>
