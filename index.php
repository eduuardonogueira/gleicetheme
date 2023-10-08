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
    <title> DRA. Gleice Rodrigues | Advocacia & Consultoria </title>
</head>
<body>
    <header class="menu">
        <nav class="menu-nav">
            <a href="#"><img class="menu-logo" src="./assets/img/logo.webp" alt="Logo dra. Gleice Rodrigues"></a>

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

    <section id="inicio" class="inicio">
        <div class="inicio-imagem"></div>
    
        <div class="cont">
            <div class="inicio-cont">
                <h1 class="inicio-titulo">Gleice Rodrigues</h1>
                <hr class="inicio-linha">
                <p class="inicio-texto">Advocacia & <br> Consultoria</p>
            </div>
        </div>
    </section>

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
            <img class="sobre-imagem" src="./assets/img/sobre-imagem.webp" alt="Advogado assinando um contrato">
            <img class="sobre-imagem_desktop" src="./assets/img/sobre-imagem_desktop.webp" alt="balança com um livro no fundo">
            <div class="sobre-box">
                <p>Atenção personalizada e dedicada</p>
            </div>
        </div>
    </section>

    <section id="areas de atuacao" class="atuacao"> 
        <div class="container-box">
            <div class="atuacao-cont">
                <h1 class="atuacao-titulo">Áreas de Atuação</h1>
                <p class="atuacao-texto">
                    Especialista em diversos segmentos do direito, conte com minha 
                    ajuda para soluções jurídicas eficientes e personalizadas.
                </p>
            </div>
    
            <ul class="atuacao-cards">
                <li class="card">
                    <img class="card-imagem" src="/assets/img/direito-civil.webp" alt="ilutração de um homem com capacete">
                    <h2 class="card-titulo">
                        Direito Civil
                    </h2>
                    <p class="card-texto">
                        Serviços consultivos, preventivos e contenciosos em diversos segmentos do direito civil.
                    </p>
                </li>
                <li class="card">
                    <img class="card-imagem" src="/assets/img/direito-previdenciario.webp" alt="ilutração de um homem com capacete">
                    <h2 class="card-titulo">
                        Direito Previdenciário
                    </h2>
                    <p class="card-texto">
                        Serviços de consultoria, representação administrativa e judicial junto à Previdência
                    </p>
                </li>
                <li class="card">
                    <img class="card-imagem" src="/assets/img/direito-trabalhista.webp" alt="ilutração de um homem com capacete">
                    <h2 class="card-titulo">
                        Direito Trabalhista
                    </h2>
                    <p class="card-texto">
                        Foco na defesa de ações judiciais de alta complexidade. Promovendo uma abordagem jurídica especializada. 
                    </p>
                </li>
            </ul>
        </div>
    </section>

    <section id="depoimentos">
        <div id="carouselExampleIndicators" class="carousel slide">
            <div class="carousel-bg"></div>
            <h1 class="carousel-titulo">O que os meus clientes falam?</h1>
            <div class="carousel-indicators">
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
            </div>
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <div class="carousel-conteudo">
                        <blockquote class="comentario">
                            <i class="ph ph-quotes"></i> Contratei os serviços da Dra. Gleice para uma questão
                            trabalhista complexa, e fiquei extremamente satisfeita com o seu profissionalismo
                            e dedicação. Ela demonstrou amplo conhecimento na área e sempre esteve disponível 
                            para esclarecer minhas dúvidas. O desfecho do meu caso superou minhas expectativas,
                            e não hesitarei em recomendar seus serviços a amigos e familiares.
                            Muito obrigada, Dra. Gleice!
                        </blockquote>
                        <cite class="autor">Sofia Ramos.</cite>
                    </div>
                </div>
                <div class="carousel-item">
                    <div class="carousel-conteudo">
                        <blockquote class="comentario">
                            <i class="ph ph-quotes"></i> A Dra. Gleice foi uma verdadeira aliada na minha 
                            demanda cível. Desde o primeiro contato, ela demonstrou empatia e interesse 
                            genuíno em resolver o meu problema. Sua capacidade de análise e argumentação 
                            jurídica é notável, e me senti amparado durante todo o processo. Estou muito 
                            satisfeito com o resultado obtido e grato pelo excelente trabalho prestado 
                            pela Dra. Gleice. Recomendo-a sem qualquer dúvida!
                        </blockquote>
                        <cite class="autor">Pedro Rocha.</cite>
                    </div>
                </div>
                <div class="carousel-item">
                    <div class="carousel-conteudo">
                        <blockquote class="comentario">
                            <i class="ph ph-quotes"></i> Quando me deparei com questões previdenciárias 
                            que pareciam complicadas demais, encontrei na Dra. Gleice a solução que 
                            precisava. Sua habilidade em explicar os trâmites e possíveis desdobramentos
                            do meu caso me deixou tranquila desde o início. Ela mostrou-se altamente 
                            comprometida e diligente, conseguindo resultados além do que eu imaginava. 
                            Sou grata por sua atenção e profissionalismo e, certamente, a recomendaria
                            a todos que necessitem de uma advogada especializada em direito previdenciário.
    
                        </blockquote>
                        <cite class="autor">Isabela Oliveira.</cite>
                    </div>
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"><i class="ph ph-caret-left"></i></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"><i class="ph ph-caret-right"></i></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
    </section>

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

    <footer class="footer">
        <div class="container-box">
            <div class="footer-contato">
                <a class="contato-info" href="" target="_blank">
                    <i class="ph ph-phone"></i>
                    <p>(31) 3643-1274</p>
                </a>
    
                <a class="contato-info" href="" target="_blank">
                    <i class="ph ph-whatsapp-logo"></i>
                    <p>(31) 9 8471-9369</p>
                </a>
    
                <a class="contato-info" href="" target="_blank">
                    <i class="ph ph-envelope"></i>
                    <p>juridico@gleicerodrigues.adv.br</p>
                </a>
            </div>
            
            <a class="footer-local" href="" target="_blank">
                <i class="ph ph-map-pin"></i>
                <p>Av. Cel. José Dias Bicalho, 341, Loja 10<br> São Luiz, Belo Horizonte <br> MG, 31275-050</p>
            </a>
    
            <div class="footer-horario">
                <div>
                    <i class="ph ph-clock"></i>
                    <p> <strong>Horário de atendimento:</strong></p>
                </div>
    
                <p>Segunda a Sexta-feira <br> das 09h00 às 18h00.</p>
            </div>
        
            <p class="copyright">© Copyright 2023. Todos os direitos reservados.</p>
        </div>
    </footer>

    <!-- Botao do whatsapp -->
    <a 
        href="https://wa.me/5531984719369?text=Olá!%20Estou%20interessado%20em%20uma%20consultoria!" 
        class="botao-wpp"
        target="_blank"    
    >
        <i class="ph ph-whatsapp-logo"></i>
    </a>
        

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
    <script type="text/javascript" src="./assets/javascript/script.js"></script>
</body>
</html>