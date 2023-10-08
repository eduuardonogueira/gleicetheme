<!DOCTYPE html>
<html <?php language_attributes(); ?>
    <head>
        <meta charset="<?php bloginfo( 'charset' ); ?>">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>">
        <title><?php bloginfo('name'); ?> &raquo; <?php is_front_page() ? bloginfo('description') : wp_title(''); ?></title>
        <?php wp_head(); ?>
        <link rel="shortcut icon" href="assets/img/logo.webp" type="image/x-icon">
    </head>
    <body <?php body_class(); ?>>
        <header class="menu">
            <nav class="menu-nav">
                <a href="<?php echo esc_url( home_url( '/' ) ); ?>"><?php bloginfo('name'); ?>">
                    <img class="menu-logo" src="./assets/img/logo.webp" alt="Logo dra. Gleice Rodrigues">
                </a>

                <ul id="menuLista" class="menu-lista up">
                    <?php wp_nav_menu( array( 'header-menu' => 'header-menu' ) ); ?>
                    <li class="menu-item"><a href="#inicio">Inicio</a></li>
                    <li class="menu-item"><a href="#quem somos">Quem Somos</a></li>
                    <li class="menu-item"><a href="#areas de atuacao">Áreas de atuação</a></li>
                    <li class="menu-item"><a href="#depoimentos">Depoimentos</a></li>
                    <li class="menu-item"><a href="#contato">Contato</a></li>
                </ul>

                <button id="botaoMenu" class="menu-botao"><i class="ph ph-list"></i></button>
            </nav>
        </header>

        <header class="my-logo">
           <h1><a href="<?php echo esc_url( home_url( '/' ) ); ?>"><?php bloginfo('name'); ?></a></h1>
        </header>
    

