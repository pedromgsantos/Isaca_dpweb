<!DOCTYPE html>
<html lang="pt">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ISACA Student Group - Eventos</title>

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
        .card {
            display: flex;
            flex-direction: row;
            align-items: center;
            gap: 15px;
        }
        .card img {
            width: 200px;
            height: auto;
            object-fit: cover;
        }
        .card-body {
            flex: 1;
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
                    <a href="eventos.php" class="nav-link active me-3">Eventos</a>
                    <a href="certificados.php" class="nav-link me-3">Certificados</a>
                    <a href="contactos.php" class="nav-link me-3">Contactos</a>
                    <a href="index.php" class="nav-link me-3">
                        <img src="https://flagcdn.com/w40/gb.png" alt="English" style="width: 30px; height: auto;">
                    </a>
                </div>
            </div>
        </nav>
    </header>

    <div>
        <h1 style="text-align: center; font-weight: 600; font-size:67px ;color: #0D2C6C; font-family: 'Outfit';">Eventos</h1>
    </div>

    <?php require('includes/connection.php') ?>  

    <div class="container my-5">
        <div class="row row-cols-1 row-cols-md-2 g-4">
        <?php
            $sql = 'SELECT * FROM eventos WHERE visivel = 1 ORDER BY data';
            $stmt = $dbh->prepare($sql);
            $stmt->execute();

            if ($stmt && $stmt->rowCount() > 0) {
                while ($evento = $stmt->fetchObject()) {
                    $imagem = filter_var($evento->imagem, FILTER_VALIDATE_URL) !== false ? $evento->imagem : 'imagens/eventos/' . $evento->imagem;
                    ?>
                    <div class="col d-flex">
                        <div class="card shadow-sm">
                            <img class="card-img-top border-end border-5" src="<?= $imagem ?>" alt="<?= $evento->nome ?>">
                            <div class="card-body">
                                <h5 class="card-title fw-bold"><?= $evento->nome ?></h5>
                                <p class="card-text text-muted">Data: <?= $evento->data ?></p>
                                <p class="card-text">Descrição: <?= $evento->descricao ?></p>
                                <a href="detalhesevento.php?id=<?= $evento->id ?>" class="cta-button" style="text-align: center; padding: 8px 15px">Detalhes</a>
                            </div>
                        </div>
                    </div>
            <?php
                }
            }
             ?>
             
        </div>
    </div>

    <?php require('includes/footer.php') ?>  

    <script src="js/bootstrap.bundle.min.js"></script>

</body>
</html>
