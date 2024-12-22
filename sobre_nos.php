<!DOCTYPE html>
<html lang="pt">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ISACA Student Group - Sobre Nós</title>

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
<body style= "height: 1000px;background-color: #f5f5f5; max-width: 100%;">

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
                    <a href="sobre_nos.php" class="nav-link active me-3">Sobre&nbsp;Nós</a>
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

    <!--Quem somos-->
    <div>
        <h1 style="text-align: center; font-weight: 600; font-size:67px ;color: #0D2C6C; font-family: 'Outfit';">Quem Somos?</h1>
    </div>
    
    <!-- Conteúdo -->
    <div class="container-fluid">
        <div class="row">
            <!--Coluna sem nada até lg, serve como "margem"-->
            <div class="col-1 d-none d-lg-block">
            </div>
    
            <!--Imagem até lg-->
            <div class="col-5 d-none d-lg-block mt-5">
                <img src="imagens/pessoas.jpg" class="img-fluid" style="width: 100%;" alt="Membros ISACA Student Group do ISCAC">
            </div>  
    
            <!--Texto até lg-->
            <div class="col-5 mt-5 d-none d-lg-block">
                <p style="line-height: 27.5px;" class="mt-4 ms-4 fs-5">
                    O ISACA Student Group do ISCAC (ISG-ISCAC) é composto por Alunos de Informática de Gestão, Mestrado em Auditoria Empresarial e Pública, Mestrado em Sistemas de Informação de Gestão e Pós-graduação em Auditoria, Risco e Controlo de Sistemas de informação. <br>
                    Qualquer aluno pode integrar o ISG-ISCAC desde que tenha interesse nestes temas. <br>
                    Já existiram colaborações de alunos da Licenciatura em Gestão de Empresas, Contabilidade e Auditoria. O ISG-ISCAC está aberto a todos os alunos.
                </p>
            </div>
    
            <!--2 colunas sem nada até lg-->
            <div class="col-1 d-none d-lg-block">
    
            </div>

            <!--Conteúdo abaixo de lg (para mobile)-->
            <div class="row d-block d-lg-none ms-auto me-auto mt-5">
                <img src="imagens/pessoas.jpg" class="img-fluid" width="100%" alt="">
            </div>
            <div class="row d-block d-lg-none ms-auto me-auto mt-5">
                <p style="line-height: 27.5px; font-size: 16px;">
                    O ISACA Student Group do ISCAC (ISG-ISCAC) é composto por Alunos de Informática de Gestão, Mestrado em Auditoria Empresarial e Pública, Mestrado em Sistemas de Informação de Gestão e Pós-graduação em Auditoria, Risco e Controlo de Sistemas de informação. <br>
                    Qualquer aluno pode integrar o ISG-ISCAC desde que tenha interesse nestes temas. <br>
                    Já existiram colaborações de alunos da Licenciatura em Gestão de Empresas, Contabilidade e Auditoria. O ISG-ISCAC está aberto a todos os alunos.
                </p>
            </div>
        </div>
        <!--IMAGEM GRANDE-->
        <div class="row">
                <!--2 colunas sem nada-->
                <div class="col-2 d-none d-lg-block">
    
                </div>
    
                <div class="col mb-5">
                    <img src="imagens/sei_la_num.svg" class="img-fluid" style="width: 100%;" alt="">
                </div>
                <div class="col-2 d-none d-lg-block">
    
                </div>
        </div>
    </div>  

    <div id="hino" class="estatisticas" 
    style="height: auto; width: 100%; background-size: cover; background: rgb(15,105,160); 
    background: linear-gradient(35deg, rgba(15,105,160,1) 0%, rgba(23,71,122,1) 15%, 
    rgba(29,45,92,1) 30%, rgba(29,45,92,1) 60%, rgba(39,93,112,1) 85%, rgba(55,131,114,1) 100%);
    display: flex; flex-wrap: wrap; justify-content: center; align-items: center; padding: 20px 0;">
        <div style="text-align: center; margin: 10px; flex: 1 1 300px; max-width: 600px; background: none;">
            <h2 class="display-3 mb-4" style="text-align: center; font-weight: 600; color: #ffffff; font-family: 'Outfit'; background: none;">E há muito mais!</h2>
            <h2 class="display-3 " style="text-align: center; font-weight: 600; color: #ffffff; font-family: 'Outfit'; background: none;">A ISACA até tem um hino próprio.</h2>
            <p style="line-height: 1.5; background: none;" class=" fs-5 mt-3 ms-4 fs-5">
                Que outra empresa tem um hino?
            </p>
        </div>
        <div style="display: flex; justify-content: center; align-items: center; margin: 10px; flex: 1 1 300px; max-width: 600px; background: none;">
            <iframe width="100%" height="315" src="https://www.youtube.com/embed/qBshpf-ZpD4" 
                title="YouTube video player" frameborder="0" 
                allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" 
                allowfullscreen>
            </iframe>
        </div>
    </div>

    <div style="color: #35B390;" class = "mt-4 ">
        <h1 style="text-align: center; font-weight: bolder; font-size:57px ;">AINDA COM DÚVIDAS?</h1>
    </div>

    <div style="text-align: center;" class="button mb-5">
        <a href="contactos.html" target="_blank" class="cta-button">
            CONTACTA-NOS
        </a>
    </div>

    <?php require('includes/footer.php') ?> 

    <script src="js/bootstrap.bundle.min.js"></script>
</body>
</html>