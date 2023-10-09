<?php get_header(); ?>

        <section class="blog">
            <div class="blog-background">
                <div class="overlay"></div>
            </div>

            <div class="container-box">
                <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
                    <article class="blog-post">
                        <img src="<?php echo the_post_thumbnail_url()?>" alt="imagem do post">
    
                        <?php $thumbnail = get_the_post_thumbnail();
                            echo '<div class="post-thumbnail">' . $thumbnail . '</div>'; ?>
    
                        <div class="blog-post-content">
                            <p class="blog-post-date"><?php the_date(); ?></p>
                            <h1 class="blog-post-title"><?php the_title(); ?></h1>
                            <?php the_excerpt(); ?>
                            <a class="blog-post-link" href="<?php the_permalink() ?>">
                                <button>Leia mais</button>
                            </a>
                        </div>
                    </article>
                <?php endwhile; else: ?>
                <p><?php _e('Desculpe, não há posts no momento'); ?></p>
                <?php endif; ?>
            </div>
        </section>

<?php get_footer(); ?>

