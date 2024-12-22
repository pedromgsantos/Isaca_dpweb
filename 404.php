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
            <a class="navbar-brand" style="margin-top: 20px" href="index.html">
                <img src="imagens/LOGO1.2.png" alt="ISACA Student Group Logo" class="img-fluid ms-lg-5 ms-2" style="max-width: 200px; width: auto;">
            </a>
            
           <!--Hamburger--> 
            <button class="navbar-toggler me-3" type="button" data-bs-toggle="collapse" data-bs-target="#menu-principal" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <!-- NavBar-->
            <div id ="menu-principal" style="font-family: Outfit; font-size: 20px; font-weight: bold; margin-right: 50px;" class="collapse navbar-collapse">
                <div class="navbar-nav nav-underline mb-4 ms-auto" >
                    <a href="sobre_nos.html" class="nav-link me-3">Sobre&nbsp;Nós</a>
                    <a href="noticias.html" class="nav-link me-3">Notícias</a>
                    <a href="eventos.php" class="nav-link me-3">Eventos</a>
                    <a href="certificados.html" class="nav-link me-3">Certificados</a>
                    <a href="contactos.php" class="nav-link me-3">Contactos</a>
                    <a href="index.html" class="nav-link me-3">
                        <img src="https://flagcdn.com/w40/gb.png" alt="English" style="width: 30px; height: auto;">
                    </a>
                </div>
            </div>
        </nav>
    </header>

    <div style="font-family: Roboto, sans-serif; display: flex; justify-content: center; align-items: center; background-color: #F5F5F5; margin-top: 100px;">
        <div style="display: flex; align-items: center; gap: 80px; text-align: left;">
            <!-- Imagem do personagem -->
            <div>
                <img src="imagens/404.png" alt="Big Foot Illustration" style="width: 500px; height: auto;">
            </div>
            
            <!-- Texto e botão -->
            <div>
                <h1 style="font-size: 64px; font-weight: bold; color: #0D2C6C; margin-bottom: 30px;">OOPS!</h1>
                <p style="font-size: 32px; color: #6c6c6c; margin-bottom: 40px;">Não foi encontrada nenhuma página!</p>
                <a href="index.html" style="display: inline-block; padding: 10px 30px; background-color: #0D2C6C; color: #FFFFFF; text-decoration: none; font-size: 24px; font-weight: bold; border-radius: 10px;">Voltar à página inicial</a>
            </div>
        </div>
    </div>
</body>
</html>
