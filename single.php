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

    <?php while ( have_posts() ) {
        the_post();

        $title = the_title();
        $published = the_date();
        $modified = the_modified_date();
        $author = the_author();
        $tags = the_tags();

    }; ?>
    
        
        <section class="blog">
            <div class="blog-background" <?php echo $style; ?> >
                <div class="overlay"></div>
                <span class="background-title"> <?php echo $title; ?> </span>
            </div>

            <article class="single-post-content">
                <h1 class="single-post-title"> <?php echo $title; ?> </h1>

                <p class="single-post-date"> <?php echo $published; ?> </p>
                
                <?php the_content(); ?>
                
                <?php
                    $tags = get_the_tags(); // Obtém as tags do post atual

                    if ($tags) {
                        echo '<ul class="single-post-tags">';
                        foreach ($tags as $tag) {
                            echo '<li class="post-tag">';
                            echo '<i class="ph ph-tag-chevron"></i>';
                            echo '<p>' . $tag->name . '</p>';
                            echo '</li>';
                        };
                        echo '</ul>';
                    } else {
                        echo '<li class="post-tag">';
                        echo '<i class="ph ph-tag-chevron"></i>';
                        echo '<p>Sem Tags</p>';
                        echo '</li>';
                    };
                ?>
                <ul class="single-post-description">
                    <li class="post-description">
                        <i class="ph ph-user"></i>
                        <p> <?php echo $author; ?> </p>
                    </li>
                    <li class="post-description">
                        <i class="ph ph-calendar"></i>
                        <p>Publicado em: <?php echo $published; ?> </p>
                    </li>
                    <li class="post-description">
                        <i class="ph ph-pencil-simple"></i>
                        <p>Modificado em: <?php echo $modified; ?> </p>
                    </li>
                </ul>
            </article>
            <article class="single-post-recents">
                <div class="container-box">
                    <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
                        <h1 class="post-recents-title">Posts recentes:</h1>

                        <article class="blog-post">
                            <?php if ( has_post_thumbnail()) {
                                $thumbnail_id = get_post_thumbnail_id();
                                $thumbnail_url = wp_get_attachment_image_src($thumbnail_id, 'full');
                            
                                echo '<img src="' . $thumbnail_url[0] . '" alt="Imagem de destaque">'; 
                            }; ?>
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
