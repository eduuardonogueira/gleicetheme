<?php get_header(); ?>
    <?php $style = 'style="background-image: url(\'' . get_stylesheet_directory_uri() . "/assets/img/background-blog.webp" . '\');"';?>

        <section class="blog">
            <div class="blog-background" <?php echo $style; ?>>
                <div class="overlay"></div>
            </div>

            <div class="container-box">
                    <article class="blog-post">
                        <?php if ( has_post_thumbnail()) {
                             $thumbnail_id = get_post_thumbnail_id();
                             $thumbnail_url = wp_get_attachment_image_src($thumbnail_id, 'full');
                        
                            echo '<img src="' . $thumbnail_url[0] . '" alt="Imagem de destaque">'; 
                        }; ?>
                        <div class="blog-post-content">
                            <p class="blog-post-date"><?php the_date(); ?></p>
                            <h1 class="blog-post-title"><?php the_title(); ?></h1>
                            <?php the_excerpt(); ?>
                            <a class="blog-post-link" href="<?php the_permalink() ?>">
                                <button>Continuar leitura</button>
                            </a>
                        </div>
                    </article>
            </div>
        </section>

<?php get_footer(); ?>

