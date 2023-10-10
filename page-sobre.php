<?php 
// Template Name = Sobre
?>
<?php get_header(); ?>

<article class="single-post-content">
    <h1 class="single-post-title"> <?php the_title() ?> </h1>
    <?php the_content(); ?>
</article>

<section id="quem somos" class="sobre">
    <div class="container-box">
        <div class="sobre-conteudo">
            <h1 class="sobre-titulo">Sobre a Dra. Gleice</h1>
            <p class="sobre-texto">
                A trajetória da Dra. Gleice no mundo jurídico é marcada por uma paixão inabalável 
                pela defesa dos direitos individuais e coletivos. Sua ética e integridade são os 
                pilares que sustentam sua atuação, garantindo um trabalho transparente e responsável, 
                pautado na honestidade e no respeito.
            </p>
        </div>
        <img class="sobre-imagem" src="<?php echo get_stylesheet_directory_uri() ?>/assets/img/sobre-imagem.webp" alt="Advogado assinando um contrato">
        <img class="sobre-imagem_desktop" src="<?php echo get_stylesheet_directory_uri() ?>/assets/img/sobre-imagem_desktop.webp" alt="balança com um livro no fundo">
        <div class="sobre-box">
            <p>Atenção personalizada e dedicada</p>
        </div>
    </div>
</section>

<?php get_footer(); ?>
