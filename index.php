<?php get_header(); ?>

        <section class="blog">
            <div class="blog-background">
                <div class="overlay"></div>
            </div>

            <div class="container-box">
                <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
                <article class="blog-post">
                    <img src="<?php the_post_thumbnail_url() ?>" alt="imagem do post">
                    <div class="blog-post-content">
                        <p class="blog-post-date"><?php get_post_time(); ?></p>
                        <p class="blog-post-date"><?php the_date(); ?></p>
                        <h1 class="blog-post-title"><?php the_title(); ?></h1>
                        <p class="blog-post-text"><?php the_content(); ?></p>
                    </div>
                </article>
                <?php endwhile; else: ?>
                <p><?php _e('Desculpe, não há posts no momento'); ?></p>
                <?php endif; ?>
            </div>
        </section>

<?php get_footer(); ?>

