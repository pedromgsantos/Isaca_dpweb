<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ISACA Student Group - Noticias</title>

    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/bootstrap-icons.min.css">
    <link href='https://fonts.googleapis.com/css?family=Roboto' rel='stylesheet'>
    <link href='https://fonts.googleapis.com/css?family=Outfit' rel='stylesheet'>
    <link rel ="icon" href = "imagens/ISACA_logo.png">
    <link rel="stylesheet" href="styles.css">
    <style>
        html, body {
            height: 100%; /* Garante que a altura ocupe toda a janela */
            margin: 0;
            display: flex;
            flex-direction: column;
        }
        .content {
            flex: 1; /* Faz o conteúdo ocupar o espaço disponível */
        }
        .footer {
            position: relative; /* Remove comportamento flutuante */
            bottom: 0;
            width: 100%;
        }
    </style>
</head>
<body style="background-color: #f5f5f5; font-family: 'Roboto', sans-serif; margin: 0;">

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
                    <a href="noticias.php" class="nav-link active me-3">Notícias</a>
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

    <!-- Content Section -->
    <section class="news-section content">
        <div class="container">
            <h1 class="mb-3" style="text-align: center; font-weight: 600; font-size:67px ;color: #0D2C6C; font-family: 'Outfit';">Notícias</h1>
            <!-- Mensagem de carregamento -->
            <div id="loading-message" style="text-align: center;">
                <p>Carregando as notícias, por favor aguarde...</p>
            </div>
            <div id="news-container" class="row g-4"></div>
        </div>
    </section>

    <?php require('includes/footer.php') ?> 

    <script>
        fetch('scraper.php')
            .then(response => response.json())
            .then(data => {
                let newsHTML = '';
                data.forEach(item => {
                    newsHTML += `
                        <div class="col-md-6">
                            <a href="${item.link}" target="_blank" class="news-card text-decoration-none" 
                               style="border: 1px solid #ddd; border-radius: 10px; overflow: hidden; transition: transform 0.3s ease, box-shadow 0.3s ease; background-color: #fff; display: flex; align-items: center; text-decoration: none; height: 100%;">
                                <div style="flex: 0 0 auto; padding: 10px;">
                                    <img src="https://www.isaca.org/${item.image}" alt="Imagem da Notícia" 
                                         style="width: 218px; height: 218px; object-fit: cover; border-radius: 5px;" loading="lazy">
                                </div>
                                <div class="news-card-body" style="flex: 1; padding: 15px; display: flex; flex-direction: column; justify-content: space-between;">
                                    <h5 class="news-card-title" style="font-family: 'Outfit', sans-serif; font-size: 1.25rem; font-weight: 700; color: #0D2C6C; margin-bottom: 10px;">
                                        ${item.title}
                                    </h5>
                                    <p class="news-card-text" style="color: #6c757d; font-size: 0.95rem; margin-bottom: 10px;">
                                        ${item.summary}
                                    </p>
                                    <div class="news-card-text" style="padding: 10px 0; color: #07649D; font-weight: 700;">
                                        <span>${item.date}</span>
                                    </div>
                                </div>
                            </a>
                        </div>
                    `;
                });
                document.getElementById('news-container').innerHTML = newsHTML;
                document.getElementById('loading-message').style.display = 'none'; // Esconde a mensagem de carregamento
            })
            .catch(error => {
                console.error('Erro ao carregar notícias:', error);
                document.getElementById('news-container').innerHTML = `
                    <p style="color: red; text-align: center;">Erro ao carregar notícias. Tente novamente mais tarde.</p>
                `;
                document.getElementById('loading-message').style.display = 'none'; // Esconde a mensagem de carregamento
            });
    </script>
    <script src="js/bootstrap.bundle.min.js"></script>
</body>
</html>
