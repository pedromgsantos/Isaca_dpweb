<!DOCTYPE html>
<html lang="pt">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Erro 404 - Página não encontrada</title>

    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/bootstrap-icons.min.css">
    <link rel="icon" href="imagens/ISACA_logo.png">
    <link rel="stylesheet" href="css/styles.css">

</head>
<body style="background-color: #F5F5F5;" >

    <!-- Header -->
    <?php
    $english_page = "en/index.php";
    require('includes/header.php') 
    ?>

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
