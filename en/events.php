<?php
require('../includes/connection.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ISACA Student Group</title>


    <link rel="stylesheet" href="../css/bootstrap.min.css">
    <link rel="stylesheet" href="../css/bootstrap-icons.min.css">
    <link href='https://fonts.googleapis.com/css?family=Roboto' rel='stylesheet'>
    <link href='https://fonts.googleapis.com/css?family=Outfit' rel='stylesheet'>
    <link rel ="icon" href = "../imagens/ISACA_logo.png">
    <link rel="stylesheet" href="../styles.css">
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

    <!--Header-->
    <?php
    $portuguese_page = "../eventos.php";
    require('../includes/headeren.php') 
    ?>

    <!-- titulo -->
    <div>
        <h1 style="text-align: center; font-weight: 600; font-size:67px ;color: #0D2C6C; font-family: 'Outfit';">Events</h1>
    </div>

    <!-- Dynamic Events -->
    <div class="container my-5">
        <div class="row row-cols-1 row-cols-md-2 g-4">
        <?php
            $sql = 'SELECT * FROM eventos WHERE visivel = 1 ORDER BY data';
            $stmt = $dbh->prepare($sql);
            $stmt->execute();

            if ($stmt && $stmt->rowCount() > 0) {
                while ($evento = $stmt->fetchObject()) {
                    $imagem = filter_var($evento->imagem, FILTER_VALIDATE_URL) !== false ? $evento->imagem : '../imagens/eventos/' . $evento->imagem;
                    ?>
                    <div class="col d-flex">
                        <div class="card shadow-sm">
                            <img class="card-img-top border-end border-5" src="<?= $imagem ?>" alt="<?= $evento->nome ?>">
                            <div class="card-body">
                                <h5 class="card-title fw-bold"><?= $evento->nome ?></h5>
                                <p class="card-text text-muted">Date: <?= $evento->data ?></p>
                                <p class="card-text"> <strong>Description: </strong><?= $evento->descricao ?></p>
                                <a href="detalhesevento.php?id=<?= $evento->id ?>" class="cta-button" style="text-align: center; padding: 8px 15px">Details</a>
                            </div>
                        </div>
                    </div>
            <?php
                }
            }
            ?>
            
        </div>
    </div>

    <!-- Footer -->
    <footer>
    <?php require('../includes/footeren.php') ?> 
    </footer>

    <script src="../js/bootstrap.bundle.min.js"></script>

</body>
</html>