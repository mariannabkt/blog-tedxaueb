<?php get_header(); ?>
<h1 class="page-title" style="text-align: center;">TEDxAUEB Blog</h1>
<div class="grid-container">
    <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
            <div class="post-container">
                <a href="<?php the_permalink(); ?>">
                    <?php the_post_thumbnail(); ?>
                    <div class="post-meta">
                        <div class="post-author">
                            <?php echo get_avatar(get_the_author_meta('ID'), 300, '', '', array('class' => 'author-img')); ?>
                            <?php echo get_the_author(); ?>
                        </div>
                        <?php echo '<span class="post-date">' . get_the_date('j M Y') . '</span>'; ?>
                        <h2><?php the_title(); ?></h2>
                        <p><?php the_excerpt(); ?></p>
                        <div class=read-more>
                            <p>Read More</p>
                            <img class="diagonal-arrow" src="<?php echo get_template_directory_uri(); ?>/assets/right-arrow.png" alt="diagonal arrow down right">
                        </div>
                    </div>
                </a>
            </div>
    <?php endwhile;
    endif; ?>
</div>
<?php get_footer(); ?>