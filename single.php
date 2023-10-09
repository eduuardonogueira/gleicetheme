<?php 
// Template Name = Blog
?>
<?php get_header(); ?>

<?php if (has_post_thumbnail()) {
    $thumbnail_id = get_post_thumbnail_id(); // Obtém o ID da imagem de destaque
    $thumbnail_url = wp_get_attachment_image_src($thumbnail_id, 'full'); // Obtém a URL da imagem de destaque no tamanho 'full'

    $style = 'style="background-image: url(\'' . esc_url($thumbnail_url[0]) . '\');"';
    } else {
    // Se o post não tiver uma imagem de destaque, você pode definir um estilo padrão
    $style = 'style="background-image: url(\'' . get_stylesheet_directory_uri() . "/assets/img/background-blog.webp" . '\');"';
    }
?>
            <div class="blog-background" <?php echo $style; ?>>
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
