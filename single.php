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

        <section class="blog">
            <div class="blog-background" <?php echo $style; ?> >
                <div class="overlay"></div>
                <span class="background-title"> <?php the_title(); ?> </span>
            </div>

            <article class="single-post-content">
                <h1 class="single-post-title"> <?php the_title(); ?> </h1>

                <p class="single-post-date"> <?php the_date(); ?> </p>
                
                <?php the_content(); ?>

                <ul class="single-post-tags">
                    <li class="post-tag">
                        <i class="ph ph-tag-chevron"></i>
                        <p> <?php the_category() ?> </p>
                    </li>
                </ul>
                <ul class="single-post-description">
                    <li class="post-description">
                        <i class="ph ph-user"></i>
                        <p> <?php the_author() ?> </p>
                    </li>
                    <li class="post-description">
                        <i class="ph ph-calendar"></i>
                        <p>Publicado em: <?php the_date() ?></p>
                    </li>
                    <li class="post-description">
                        <i class="ph ph-pencil-simple"></i>
                        <p>Modificado em: <?php the_modified_date() ?> </p>
                    </li>
                </ul>
            </article>

            <article class="single-post-recents">
                <div class="container-box">
                    <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
                        <h1 class="post-recents-title">Posts recentes:</h1>

                        <article class="blog-post">
                            <img src="/assets/img/background-blog.webp" alt="Imagem de destaque"> 

                            <div class="blog-post-content">
                                <p class="blog-post-date"> <?php the_date(); ?> </p>
                                <h1 class="blog-post-title"> <?php the_title(); ?> </h1>
                                <?php the_excerpt(); ?>
                                <button class="blog-post-link"">
                                    <a href="<?php the_permalink() ?>">Continuar leitura</a>
                                </button>
                            </div>
                        </article>

                        <button class="post-recents-button">
                            <a href="/blog">Ver mais posts</a>
                        </button>
                    <?php endwhile; else: ?>
                    <p><?php _e('Desculpe, não há posts no momento'); ?></p>
                    <?php endif; ?>
                </div>
            </article>
        </section>

<?php get_footer(); ?>
