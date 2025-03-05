<?php get_header(); ?>

<div class="post-container article">
    <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
            <?php the_post_thumbnail(); ?>
            <div class="post-meta">
                <a href="<?php echo get_author_posts_url(get_the_author_meta('ID')); ?>">
                    <div class="post-author">
                        <?php echo get_avatar(get_the_author_meta('ID'), 300, '', '', array('class' => 'author-img')); ?>
                        <?php echo get_the_author(); ?>
                    </div>
                </a>
                <?php echo '<span class="post-date">' . get_the_date('j M Y') . '</span>'; ?>
                <h1><?php the_title(); ?></h1>
                <div><?php the_content(); ?></div>

                <div class="post-navigation">
                    <div class="previous-post">
                        <?php
                        $prev_post = get_next_post();
                        if (!empty($prev_post)) :
                            $prev_post_url = get_permalink($prev_post->ID);
                        ?>
                            <a href="<?php echo esc_url($prev_post_url); ?>" class="previous-post">
                                <img class="diagonal-arrow prev-arrow" src='<?php echo get_template_directory_uri(); ?>/assets/right-arrow.png' alt='previous arrow'>
                                <button class="prev-button">
                                    <b>Previous:</b><br> <?php echo esc_html(get_the_title($prev_post->ID)); ?>
                                </button>
                            </a>
                        <?php endif; ?>
                    </div>

                    <div class="next-post">
                        <?php
                        $next_post = get_previous_post();
                        if (!empty($next_post)) :
                            $next_post_url = get_permalink($next_post->ID);
                        ?>
                            <a href="<?php echo esc_url($next_post_url); ?>" class="next-post">
                                <button class="next-button">
                                    <b>Next:</b><br> <?php echo esc_html(get_the_title($next_post->ID)); ?>
                                </button>
                                <img class="diagonal-arrow next-arrow" src='<?php echo get_template_directory_uri(); ?>/assets/right-arrow.png' alt='next arrow'>
                            </a>
                        <?php endif; ?>
                    </div>
                </div>
            </div>
    <?php endwhile;
    endif; ?>

</div>

<?php get_footer(); ?>