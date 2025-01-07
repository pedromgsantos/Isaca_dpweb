<?php
// Obter o nome do arquivo atual
$current_page = basename($_SERVER['PHP_SELF']);

// Verificar se a página em português foi definida
$portuguese_page = isset($portuguese_page) ? $portuguese_page : "../index.php";
?>

<header class="bg-light">
    <nav class="navbar navbar-expand-lg navbar-light" style="background-color: #f5f5f5; margin-top: -20px;">
        <a class="navbar-brand" style="margin-top: 20px" href="index.php">
            <img src="../imagens/LOGO1.2.png" alt="ISACA Student Group Logo" class="img-fluid ms-lg-5 ms-2" style="max-width: 200px; width: auto;">
        </a>
        
        <!-- Hamburger -->
        <button class="navbar-toggler me-3" type="button" data-bs-toggle="collapse" data-bs-target="#menu-principal" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <!-- NavBar -->
        <div id="menu-principal" style="font-family: Outfit; font-size: 20px; font-weight: bold; margin-right: 50px;" class="collapse navbar-collapse">
            <div class="navbar-nav nav-underline mb-4 ms-auto">
                <a href="about_us.php" class="nav-link <?= $current_page == 'about_us.php' ? 'active' : '' ?> me-3">About&nbsp;Us</a>
                <a href="news.php" class="nav-link <?= $current_page == 'news.php' ? 'active' : '' ?> me-3">News</a>
                <a href="events.php" class="nav-link <?= $current_page == 'events.php' ? 'active' : '' ?> me-3">Events</a>
                <a href="certificates.php" class="nav-link <?= $current_page == 'certificates.php' ? 'active' : '' ?> me-3">Certificates</a>
                <a href="contacts.php" class="nav-link <?= $current_page == 'contacts.php' ? 'active' : '' ?> me-3">Contacts</a>
                <a href="<?= $portuguese_page ?>" class="nav-link me-3">
                    <img src="https://flagcdn.com/w40/pt.png" alt="Portuguese" style="width: 30px; height: auto;">
                </a>
            </div>
        </div>
    </nav>
</header>
