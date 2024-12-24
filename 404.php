<!DOCTYPE html>
<html lang="pt">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Erro 404 - Página não encontrada</title>

    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/bootstrap-icons.min.css">
    <link rel="icon" href="imagens/ISACA_logo.png">
    <link rel="stylesheet" href="styles.css">

</head>
<body style="background-color: #F5F5F5;" >

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

    <!-- Conteúdo -->
    <div class="container d-flex align-items-center justify-content-center ">
        <div class="row align-items-center text-center text-lg-start">
            <!-- Imagem do 404-->
            <div class="col-12 col-lg-6 mb-4 mb-lg-0">
                <img src="imagens/404.png" alt="Big Foot Illustration" class="img-fluid" style="max-width: 100%; height: auto;">
            </div>

            <!-- Texto e botão -->
            <div class="col-12 col-lg-6">
                <h1 class="display-3 fw-bold " style="color: #0D2C6C">OOPS!</h1>
                <p class="fs-4 text-muted">Não foi encontrada nenhuma página!</p>
                <a href="index.php" class="btn btn-lg mt-3 px-4 py-2 fw-bold" style="background-color: #0D2C6C; color: #FFFFFF">Voltar à página inicial</a>
            </div>
        </div>
    </div>
</body>
</html>
