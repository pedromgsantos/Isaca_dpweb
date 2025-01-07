<?php
// Obter o nome do arquivo atual
$current_page = basename($_SERVER['PHP_SELF']);

// Verificar se a página em inglês foi definida
$english_page = isset($english_page) ? $english_page : "en/$current_page";
?>

<header class="bg-light">
    <nav class="navbar navbar-expand-lg navbar-light" style="background-color: #f5f5f5; margin-top: -20px;">
        <a class="navbar-brand" style="margin-top: 20px" href="index.php">
            <img src="imagens/LOGO1.2.png" alt="ISACA Student Group Logo" class="img-fluid ms-lg-5 ms-2" style="max-width: 200px; width: auto;">
        </a>
        
        <!-- Hamburger -->
        <button class="navbar-toggler me-3" type="button" data-bs-toggle="collapse" data-bs-target="#menu-principal" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <!-- NavBar -->
        <div id="menu-principal" style="font-family: Outfit; font-size: 20px; font-weight: bold; margin-right: 50px;" class="collapse navbar-collapse">
            <div class="navbar-nav nav-underline mb-4 ms-auto">
                <a href="sobre_nos.php" class="nav-link <?= $current_page == 'sobre_nos.php' ? 'active' : '' ?> me-3">Sobre&nbsp;Nós</a>
                <a href="noticias.php" class="nav-link <?= $current_page == 'noticias.php' ? 'active' : '' ?> me-3">Notícias</a>
                <a href="eventos.php" class="nav-link <?= $current_page == 'eventos.php' ? 'active' : '' ?> me-3">Eventos</a>
                <a href="certificados.php" class="nav-link <?= $current_page == 'certificados.php' ? 'active' : '' ?> me-3">Certificados</a>
                <a href="contactos.php" class="nav-link <?= $current_page == 'contactos.php' ? 'active' : '' ?> me-3">Contactos</a>
                <a href="<?= $english_page ?>" class="nav-link me-3">
                    <img src="https://flagcdn.com/w40/gb.png" alt="English" style="width: 30px; height: auto;">
                </a>
            </div>
        </div>
    </nav>
</header>
