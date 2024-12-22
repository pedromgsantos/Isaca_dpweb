<!DOCTYPE html>
<html lang="pt">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ISACA Student Group</title>


    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/bootstrap-icons.min.css">
    <link href='https://fonts.googleapis.com/css?family=Roboto' rel='stylesheet'>
    <link href='https://fonts.googleapis.com/css?family=Outfit' rel='stylesheet'>
    <link rel ="icon" href = "imagens/ISACA_logo.png">
    <link rel="stylesheet" href="styles.css">
    <style>
        body {
            font-family: 'Roboto';
            overflow-x: hidden;
        }
    </style>
</head> 
<body style = "height: 1000px;background-color: #f5f5f5; max-width: 100%;" >

    <!-- Header -->
    <header class="bg-light">
        <nav class="navbar navbar-expand-lg navbar-light" style="background-color: #f5f5f5; margin-top: -20px;">
            <a class="navbar-brand" style="margin-top: 20px" href="index.php">
                <img src="imagens/LOGO1.2.png" alt="ISACA Student Group Logo" class="img-fluid ms-lg-5 ms-2" style="max-width: 200px; width: auto;">
            </a>
            
           <!--Hamburger--> 
            <button class="navbar-toggler me-3" type="button" data-bs-toggle="collapse" data-bs-target="#menu-principal" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <!-- NavBar-->
            <div id ="menu-principal" style="font-family: Outfit; font-size: 20px; font-weight: bold; margin-right: 50px;" class="collapse navbar-collapse">
                <div class="navbar-nav nav-underline mb-4 ms-auto" >
                    <a href="sobre_nos.php" class="nav-link me-3">Sobre&nbsp;Nós</a>
                    <a href="noticias.php" class="nav-link me-3">Notícias</a>
                    <a href="eventos.php" class="nav-link me-3">Eventos</a>
                    <a href="certificados.php" class="nav-link me-3">Certificados</a>
                    <a href="contactos.php" class="nav-link me-3">Contactos</a>
                    <a href="index.php" class="nav-link me-3">
                        <img src="https://flagcdn.com/w40/gb.png" alt="English" style="width: 30px; height: auto;">
                    </a>
                </div>
            </div>
        </nav>
    </header>

    <!-- Hero Section -->
    <section id = "hero" class="hero" style="background-color: #f5f5f5; max-width: 100%;">
        <div class="container-fluid">
            <div class="row" style="max-width: 100%;">
    
                <!--Conteúdo para lg (desktop)-->
                <!--Coluna vazia para margem-->
                <div class="col-1 d-none d-lg-block"></div>
                
                <div class="col-5 d-none d-lg-block mt-5">
                    <h1 class="display-1" style="margin-bottom: 50px;color: #0D2C6C; font-size: 87px; font-family: Outfit; font-weight: 600; line-height: 100%;">
                        Torna-te <br> parte de <br> algo maior
                    </h1>
                    <p style="color: #000; font-family: Roboto; font-size: 24px;">
                        Permite-te ganhar experiência em liderança <br>e posiciona-te para o sucesso <br> após terminares a tua formação!
                    </p>
                </div>
                
                <div class="col-6 d-flex justify-content-end d-none d-lg-block">
                    <img src="imagens/Seccao1.png" alt="Imagem Hero" class="img-fluid desktop-imagem">
                </div>
    
                <!--Conteúdo abaixo de lg (para mobile)-->
                <div class="row d-block d-lg-none text-center" style="margin: auto; margin-left: 15px;">
                    <h1 class="display-1 mb-4" style="color: #0D2C6C;font-size: 60px; font-family: Outfit; font-weight: 600; line-height: 100%;">
                        Torna-te <br> parte de <br> algo maior
                    </h1>
                    <p style="line-height: 27.5px; font-size: 20px;">
                        Permite-te ganhar experiência em liderança <br>e posiciona-te para o sucesso <br> após terminares a tua formação!
                    </p>
                </div>
                
                <div class="row d-block d-lg-none ms-auto me-auto mt-5" style="max-width: 100%;">
                    <img src="imagens/Seccao1.png" class="img-fluid mobile-imagem" alt="Imagem Hero">
                </div>
            </div>
        </div>
    </section>
    
    <!-- Benefícios -->
    <section id="beneficios" class="beneficios" style="background-color: #f5f5f5; max-width: 100%;">
        <div class="beneficios container-fluid">
            <div class = "row mt-5">

                <!-- Conteúdo para desktop -->

                <!-- Margem -->
                <div class="col-1 d-none d-lg-block mt-5">
                </div>

                <div class = "col-4 d-none d-lg-block mt-5" >
                    <h2 class = "display-2" style = "font-family: Outfit; color: #0D2C6C; font-weight: bold; line-height: 100%;">
                        Benefícios <br> Incríveis</h2>
                    <p class="fs-5">Conhece os benefícios de pertencer <br> a este ISACA Student Group</p>
                </div>
                <div class = "card col-2 d-none d-lg-block text-center mt-5" style="margin-right:15px; border: 5px solid #35B390;;padding: 10px;background-color: #f5f5f5;">
                    <i class="bi bi-file-earmark-fill" style="color: #0D2C6C;font-size: 50px;"></i>
                    <h3 class = ""style = "color:#00A6E8;">RECURSOS <br> ONLINE</h3>
                    <p>Acesso online ao diário da ISACA, webcasts e recursos diversos para educação além da sala de aula.</p>
                </div>
                <div class = "card col-2 d-none d-lg-block text-center mt-5" style="margin-right:15px; border: 5px solid #35B390;;padding: 10px;background-color: #f5f5f5;">
                    <i class="bi bi-star-fill" style="color: #0D2C6C;font-size: 50px;" ></i>
                    <h3 style = "color:#00A6E8;">INTERAÇÕES PROFISSIONAIS</h3>
                    <p>Oportunidades de interagir com os membros do capítulo local para interações significativas com profissionais.</p>
                </div>
                <div class = "card col-2 d-none d-lg-block text-center mt-5" style="border: 5px solid #35B390;;padding: 10px;background-color: #f5f5f5;">
                    <i class="bi bi-lightbulb-fill" style="color: #0D2C6C;font-size: 50px;"></i>
                    <h3 style = "color: #00A6E8;">VANTAGENS COMPETITIVAS</h3>
                    <p>Conhecimento e experiência para colocar os alunos muito à frente da concorrência na hora de começar as suas carreiras.</p>
                </div>

                <!--Margem -->
                <div class="col-1 d-none d-lg-block">
                </div>

                <!--Conteúdo abaixo de lg (para mobile)-->
                <div class="row d-block d-lg-none text-center mt-3" style="margin:auto">
                    <h2 class = "display-2" style = "font-family: Outfit; color: #0D2C6C; font-weight: bold; line-height: 100%;">
                        Benefícios <br> Incríveis</h2>
                    <p class="fs-5">Conhece os benefícios de pertencer <br> a este ISACA Student Group</p>
                </div>
                <div class="row d-block d-lg-none text-center mt-2" style="border: 5px solid #35B390; max-width: 51%; margin:auto">
                    <i class="bi bi-star-fill" style="color: #0D2C6C;font-size: 30px;" ></i>
                    <h3 style = "color:#00A6E8; font-size: 21px;">RECURSOS ONLINE</h3>
                    <p style = "font-size: 19px;">Acesso online ao diário da ISACA, webcasts e recursos diversos para educação além da sala de aula.</p>
                </div>
                <div class="row d-block d-lg-none text-center mt-5" style="border: 5px solid #35B390; max-width: 51%; margin:auto">
                    <i class="bi bi-star-fill" style="color: #0D2C6C;font-size: 30px;" ></i>
                    <h3 style = "color: #00A6E8; font-size: 21px;">INTERAÇÕES PROFISSIONAIS</h3>
                    <p style="font-size: 19px;">Oportunidades de interagir com os membros do capítulo local para interações significativas com profissionais.</p>
                </div>
                <div class="row d-block d-lg-none text-center mb-2 mt-5" style="border: 5px solid #35B390; max-width: 51%; margin:auto">
                    <i class="bi bi-lightbulb-fill" style="color: #0D2C6C;font-size: 30px;"></i>
                    <h3 style = "color: #00A6E8; font-size: 21px;">VANTAGENS COMPETITIVAS</h3>
                    <p style="font-size: 19px;">Conhecimento e experiência para colocar os alunos muito à frente da concorrência na hora de começar as suas carreiras.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Sobre Nós -->
    <section id = "sobre" class="sobre" style = "max-width: 100%;background-color: #f5f5f5;">

        <div class="container-fluid mt-5">
            <div class="row" style="max-width: 100%;">
    
                <!--Conteúdo para lg (desktop)-->
                <div class="col-5 d-flex justify-content-end d-none d-lg-block mt-5 mb-5" >
                    <img src="imagens/Seccao2.1.png" alt="Imagem Sobre Nós" class="img-fluid" style="width: 100%; transform: translateX(-2%);">
                </div>
                <div class="col-6 d-flex d-none d-lg-block mt-5">
                    <p style = "font-size:22px; color: #35B390; margin-bottom: -5px;">SOBRE NÓS</p>
                    <h2 class = "display-2" style = "font-family: Outfit; color: #0D2C6C; font-weight: bold; line-height: 100%;">
                        ISACA STUDENT GROUP</h2>
                    <p style="color:#000;font-size: 20px;">É formado por alunos que frequentam o mestrado ADSAD, da Pós graduação de Auditoria, Risco e Controlo de SI e da licenciatura em informática de gestão. O objetivo do grupo é
                        educar e tornar os alunos conscientes das tendências emergentes no SI / TI Auditoria e Assurance, de Segurança e de SI / TI governança. O grupo tem a oportunidade de participar em tudo o que a ISACA organiza.</p>
                    <a class="btn-sobre" href="sobre_nos.html">Saber Mais</a>
                </div>

                <div class="col-1 d-none d-lg-block">
                </div>
    
                <!--Conteúdo abaixo de lg (para mobile)-->
                <div class="row d-block d-lg-none text-center" style="margin: auto; margin-left: 15px;">
                    <p style = "font-size:20px; color: #35B390; margin-bottom: -5px;">SOBRE NÓS</p>
                    <h2 class = "display-2" style = "font-family: Outfit; color: #0D2C6C; font-weight: bold; line-height: 100%;">
                        ISACA STUDENT GROUP</h2>
                </div>
                <div class="row d-block d-lg-none ms-auto me-auto mt-3">
                    <img src="imagens/Seccao2.1.png" class="img-fluid" style="max-width: 100%; transform: translateX(-5%);" alt="Imagem Sobre Nós">
                </div>
                <div class="row d-block d-lg-none text-center ms-auto mt-3">
                    <p class ="mb-5 mt-4"style="color:#000;font-size: 20px;">É formado por alunos que frequentam o mestrado ADSAD, da Pós graduação de Auditoria, Risco e Controlo de SI e da licenciatura em informática de gestão. O objetivo do grupo é
                        educar e tornar os alunos conscientes das tendências emergentes no SI / TI Auditoria e Assurance, de Segurança e de SI / TI governança. O grupo tem a opotunidade de participar em tudo o que a ISACA organiza.</p>
                    <a class= "" href="sobre_nos.html" class = "mt-5"style="padding: 15px 25px; border-radius: 47px; background: #70B540; color: #fff; text-decoration: none; text-align: center;">Saber Mais</a>
                    </p>
                </div>
        
            </div>
        </div>
        
    </section>

    <!-- Estatísticas -->
    <section id = "estatisticas" class="estatisticas mt-5" style="max-width: 100%; background: linear-gradient(180deg, #00A6E8 0%, #70B540 100%);display: flex; justify-content: space-around; padding: 20px 0;">
        <div class = "estatisticas" style = "background: none;">
            <h3 class = "" style="background: none;">170k</h3>
            <p style="background: none;">MEMBROS</p>
        </div>
        <div style="background: none;">
            <h3 class = "" style="background: none;">225</h3>
            <p style="background: none;">CHAPTERS <br> PELO MUNDO</p>
        </div>
        <div style="background: none;">
            <h3 class = "" style="background: none;">190</h3>
            <p style="background: none;">PAÍSES</p>
        </div>
        <div style="background: none;">
            <h3 class = "" style="background: none;">10k</h3>
            <p style="background: none;">EMPRESAS <br> ATENDIDAS</p>
        </div>
    </section>

    <!-- Certificados -->
    <section id ="Certificados" class="py-5" style="background-color: #f5f5f5;">
        <div class="container text-center">
            <h2 class = "display-2 mt-4" style = "font-family: Outfit; color: #0D2C6C; font-weight: bold; line-height: 100%;">CERTIFICADOS</h2>
            <p class= "fs-3"style="color: #28a745; font-weight: bold;">Estás a pensar tirar uma certificação?</p>
            <p class = "fs-5" >A ISACA oferece as melhores do mercado.</p>
    
            <div class="row justify-content-center mt-1 g-4">
                <!-- Card 1 -->
                <div class="col-12 col-sm-6 col-md-4 col-lg-3">
                    <a href="https://www.isaca.org/credentialing/crisc" class="text-decoration-none">
                        <div class="carde p-4">
                            <img src="imagens/CRISC.png" alt="CRISC Logo" class="img-fluid" style="background-color: #ffffff;">
                            <p class="carde-text mt-3" style="background-color: #ffffff;">
                                A certificação <strong>Certified in Risk and Information Systems Control™</strong> demonstra expertise na identificação e gestão de riscos de TI empresarial, bem como na implementação e manutenção de controlos de sistemas de informação.
                            </p>
                            <p class="card-salary" style="color: #28a745; font-weight: bold; font-size: 18px; background-color: #ffffff;">
                                US$151.000+ Salário anual médio
                            </p>
                        </div>
                    </a>
                </div>
    
                <!-- Card 2 -->
                <div class="col-12 col-sm-6 col-md-4 col-lg-3">
                    <a href="https://www.isaca.org/credentialing/cisa" class="text-decoration-none">
                        <div class="carde p-4">
                            <img src="imagens/CISA.png" alt="CISA Logo" class="img-fluid" style="background-color: #ffffff;">
                            <p class="carde-text mt-3" style="background-color: #ffffff;">
                                A certificação <strong>Certified Information Systems Auditor®</strong> é reconhecida mundialmente como o padrão de excelência para aqueles que auditam, controlam, monitoram e avaliam os sistemas de informação e negócios de uma organização.
                            </p>
                            <p class="card-salary" style="color: #28a745; font-weight: bold; font-size: 18px; background-color: #ffffff;">
                                US$149.000+ Salário anual médio
                            </p>
                        </div>
                    </a>
                </div>
    
                <!-- Card 3 -->
                <div class="col-12 col-sm-6 col-md-4 col-lg-3">
                    <a href="https://www.isaca.org/credentialing/cgeit" class="text-decoration-none">
                        <div class="carde p-4">
                            <img src="imagens/CGEIT.png" alt="CGEIT Logo" class="img-fluid" style="background-color: #ffffff;">
                            <p class="carde-text mt-3" style="background-color: #ffffff;">
                                A certificação <strong>Certified in the Governance of Enterprise IT®</strong> da ISACA é única e independente de frameworks. É a única certificação de governança de TI que proporciona a mentalidade necessária para avaliar, projetar, implementar e gerir sistemas de governança de TI alinhados aos objetivos gerais de negócios.
                            </p>
                            <p class="card-salary" style="color: #28a745; font-weight: bold; font-size: 18px; background-color: #ffffff;">
                                US$141.000+ Salário anual médio
                            </p>
                        </div>
                    </a>
                </div>
    
                <!-- Card 4 -->
                <div class="col-12 col-sm-6 col-md-4 col-lg-3">
                    <a href="https://www.isaca.org/credentialing/cism" class="text-decoration-none">
                        <div class="carde p-4">
                            <img src="imagens/CISM.png" alt="CISM Logo" class="img-fluid" style="background-color: #ffffff;">
                            <p class="carde-text mt-3" style="background-color: #ffffff;">
                                A certificação <strong>Certified Information Security Manager®</strong> da ISACA demonstra expertise em governança de segurança da informação, desenvolvimento e gestão de programas, gestão de incidentes e gestão de riscos.
                            </p>
                            <p class="card-salary" style="color: #28a745; font-weight: bold; font-size: 18px; background-color: #ffffff;">
                                US$149.000+ Salário anual médio
                            </p>
                        </div>
                    </a>
                </div>
            </div>
    
            <!-- Botão :) -->
            <a href="certificados.html" target="_blank" class="cta-button mt-lg-5 mt-3">
                CONHECE MAIS AQUI
            </a>
        </div>
    </section>


    <!-- Eventos -->
    <section id="eventos" class="carousel slide" data-bs-ride="carousel">
        <div class= "container text-center">
            <h2 class = "display-2 mt-4" style = "font-family: Outfit; color: #0D2C6C; font-weight: bold; line-height: 100%;">EVENTOS</h2>
            <p class= "fs-4 mb-5"style="color: #000;">Se tens interesse nos temas promovidos pela ISACA, do que estás à espera?</p>
        </div>
        <div class="d-flex align-items-cente mb-5">
            
          <!-- Seta da esquerda -->
          <button class="carousel-control-prev custom-arrow" type="button" data-bs-target="#eventos" data-bs-slide="prev" style="background-color: transparent !important; border: none;">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Anterior</span>
          </button>
      
          <!-- Slides -->
          <div class="carousel-inner w-100">
            <!-- Slide 1 -->
            <div class="carousel-item active">
              <div class="d-flex justify-content-center align-items-center">
                <!-- Poster 1 -->
                <div class="poster-container">
                  <img src="imagens/Conferencia2024.jpg" class="d-block mx-2" alt="Conferência 2024">
                  <div class="poster-overlay">
                    <h3> 9ª Conferência Internacional ISACA Lisbon Chapter</h3>
                    <a href="eventos.php" class="btn btn-primary">Ver detalhes</a>
                  </div>
                </div>
                <!-- Poster 2 -->
                <div class="poster-container">
                  <img src="imagens/GREENIT.jpeg" class="d-block mx-2" alt="Green IT">
                  <div class="poster-overlay">
                    <h3>Green IT</h3>
                    <a href="eventos.php" class="btn btn-primary">Ver detalhes</a>
                  </div>
                </div>
              </div>
            </div>
      
            <!-- Slide 2 -->
            <div class="carousel-item">
              <div class="d-flex justify-content-center align-items-center">
                <!-- Poster 3 -->
                <div class="poster-container">
                  <img src="imagens/DLT.jpeg" class="d-block mx-2" alt="Digital Leaders of Tomorrow">
                  <div class="poster-overlay">
                    <h3>Digital Leaders of Tomorrow</h3>
                    <a href="eventos.php" class="btn btn-primary">Ver detalhes</a>
                  </div>
                </div>
                <!-- Poster 4 -->
                <div class="poster-container">
                  <img src="imagens/AI.jpeg" class="d-block mx-2" alt="Future Event">
                  <div class="poster-overlay">
                    <h3>IA no serviço público</h3>
                    <a href="eventos.php" class="btn btn-primary">Ver detalhes</a>
                  </div>
                </div>
              </div>
            </div>
          </div>
      
          <!-- Seta da direita -->
          <button class="carousel-control-next custom-arrow" type="button" data-bs-target="#eventos" data-bs-slide="next" style="background-color: transparent !important; border: none;">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Próximo</span>
          </button>
        </div>
    </section>
      
    <?php require('includes/footer.php') ?>  
      
    <script src="js/bootstrap.bundle.min.js"></script>

</body>
</html>
