<?php 
// Template Name = Contato
?>
<?php get_header(); ?>

<section id="contato" class="contato">
    <div class="container-box">
        <form class="contato-form" action="send-email.php" method="post">
            <h1 class="contato-titulo">Fale Conosco</h1>
            <input 
                name="nome" 
                type="text" 
                class="form-input" 
                placeholder="Nome" 
                required
            >

            <input 
                name="email" 
                type="email" 
                class="form-input" 
                placeholder="E-mail" 
                required
            >

            <div class="select-box">
                <select name="area" class="form-select" required>
                    <option value="">Escolha a área</option>
                    <option value="Trabalhista">Trabalhista</option>
                    <option value="Civil">Civil</option>
                    <option value="Previdenciário">Previdenciário</option>
                </select>
                <i class="ph ph-caret-down"></i>
            </div>
 
            <textarea 
                name="mensagem" 
                cols="30" 
                rows="10" 
                class="form-text" 
                placeholder="Mensagem" 
                required
            ></textarea>

            <button id="enviar" class="form-botao" type="submit">Enviar</button>
        </form>
        <iframe class="contato-mapa" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d788.8814125665016!2d-43.962459304240994!3d-19.857988888638577!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0xa69067888270c1%3A0xbf6fe233aeb412d!2sAv.%20Cel.%20Jos%C3%A9%20Dias%20Bicalho%2C%20341%20-%2010%20-%20S%C3%A3o%20Luiz%2C%20Belo%20Horizonte%20-%20MG%2C%2031275-050!5e0!3m2!1spt-BR!2sbr!4v1691008097614!5m2!1spt-BR!2sbr" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
    </div>
</section>

<?php get_footer(); ?>