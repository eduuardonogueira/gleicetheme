<!DOCTYPE html>
<html lang="pt-BR">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="shortcut icon" href="assets/img/logo.webp" type="image/x-icon">
        
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Cormorant+Garamond&family=Fira+Code&family=Libre+Baskerville&display=swap" rel="stylesheet">
        
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
        
        <script src="https://unpkg.com/@phosphor-icons/web"></script>

        <link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri() ?>/style.css">
        <title><?php bloginfo('name'); ?></title>

        <!-- Header Wordpress -->
        <?php wp_head(); ?>
        <!-- Fecha header Wordpress -->
    </head>
    <body>
        <header class="menu">
            <nav class="menu-nav">
                <a href="#"><img class="menu-logo" src="<?php echo get_stylesheet_directory_uri() ?>/assets/img/logo.webp" alt="Logo dra. Gleice Rodrigues"></a>

                <ul id="menuLista" class="menu-lista up">
                    <li class="menu-item"><a href="#inicio">Inicio</a></li>
                    <li class="menu-item"><a href="#quem somos">Quem Somos</a></li>
                    <li class="menu-item"><a href="#areas de atuacao">Áreas de atuação</a></li>
                    <li class="menu-item"><a href="#depoimentos">Depoimentos</a></li>
                    <li class="menu-item"><a href="#contato">Contato</a></li>
                </ul>

                <button id="botaoMenu" class="menu-botao"><i class="ph ph-list"></i></button>
            </nav>
        </header>