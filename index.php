<?php 
// Template Name = Blog
?>

<?php get_header(); ?>

<style>
    .menu-lista .menu-item:nth-child(3) a{
        color: #ffc655;
    }
</style>

        <section class="blog">
            <div class="blog-background">
                <div class="overlay"></div>
                <span class="background-title">Blog</span>
            </div>

            <div class="container-box">
                <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
                    <article class="blog-post">
                        <?php 
                            if ( has_post_thumbnail()) {
                                $thumbnail_id = get_post_thumbnail_id();
                                $thumbnail_url = wp_get_attachment_image_src($thumbnail_id, 'full');
                        
                                echo '<img src="' . $thumbnail_url[0] . '" alt="Imagem de destaque">'; 
                            } else {
                                echo '<img src="' . get_stylesheet_directory_uri() .'/assets/img/background-blog.webp" alt="Imagem de destaque">';
                            }; 
                        ?>
                        <div class="blog-post-content">
                            <p class="blog-post-date"><?php the_date(); ?></p>
                            <h1 class="blog-post-title"><?php the_title(); ?></h1>
                            <?php the_excerpt(); ?>
                            <button class="blog-post-link"">
                                <a href="<?php the_permalink() ?>">Continuar leitura</a>
                            </button>
                        </div>
                    </article>
                <?php endwhile; else: ?>
                <p><?php _e('Desculpe, não há posts no momento'); ?></p>
                <?php endif; ?>
            </div>
        </section>

<?php get_footer(); ?>

