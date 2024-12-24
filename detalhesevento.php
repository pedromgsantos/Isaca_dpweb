<?php
require('includes/connection.php');

// Verifica se o parâmetro 'id' foi passado
if (!isset($_GET['id']) || empty($_GET['id'])) {
    header("Location: 404.php");
    exit;
}

$id = (int)$_GET['id']; // Converte o ID para um inteiro

// Verifica se o evento existe no banco de dados
$sql = 'SELECT * FROM eventos WHERE id = ? AND visivel = 1';
$stmt = $dbh->prepare($sql);
$stmt->execute([$id]);

$evento = $stmt->fetchObject();

if (!$evento) {
    // Se o evento não existir, redireciona para a página de erro
    header("Location: 404.php");
    exit;
}
?>
<?php 
if (empty($_GET['id'])) {
    header('Location:index.html');
    die();
} else{
    $id = $_GET['id'];
}
?>
    <?php
    if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['mensagem'])) {
        $mensagem = trim($_POST['mensagem']);
        $email = isset($_POST['email']) && !empty($_POST['email']) ? $_POST['email'] : 'Anónimo';

        if (!empty($mensagem)) {
            $sql = 'INSERT INTO comentarios (eventoId, mensagem, email, date) VALUES (:eventoId, :mensagem, :email, NOW())';
            $stmt = $dbh->prepare($sql);
            $stmt->bindValue(':eventoId', $id, PDO::PARAM_INT);
            $stmt->bindValue(':mensagem', $mensagem, PDO::PARAM_STR);
            $stmt->bindValue(':email', $email, PDO::PARAM_STR);  // Inserir o email no banco de dados
            $stmt->execute();

            // Evitar redirecionamento após saída do conteúdo, oculta o formulário
            header('Location: ' . $_SERVER['REQUEST_URI']);
            exit();
        } else {
            $error = "O comentário não pode estar vazio!";
        }
    }
    ?>
<!DOCTYPE html>
<html lang="pt">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ISACA Student Group do ISCAC</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/bootstrap-icons.min.css">
    <link rel ="icon" href = "imagens/ISACA_logo.png">

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

</head>
<body>

    <!-- Header -->
    <header class="bg-light py-3 shadow-sm">
        <div class="container d-flex justify-content-between align-items-center">
            <!-- Botão de voltar -->
            <a href="eventos.php" class="btn btn-outline-primary d-flex align-items-center" style="font-size: 1.2rem;">
                <i class="bi bi-arrow-left me-2" style="font-size: 1.5rem;"></i> Voltar
            </a>
            <!-- Logo como imagem -->
            <img src="imagens/LOGO1.2.png" 
                alt="ISACA Logo" 
                style="max-width: 100%; height: auto; max-height: 100px; object-fit: contain;" 
                class="img-fluid ms-lg-5 ms-2">
        </div>
    </header>


<?php
$sql = 'SELECT * FROM eventos WHERE id = :id';
$stmt = $dbh->prepare($sql);
$stmt->bindValue(':id', $id);
$stmt->execute();
if ($stmt && $stmt->rowCount() == 1) {
    $evento = $stmt->fetchObject();
    $imagem = filter_var($evento->imagem, FILTER_VALIDATE_URL) !== false ? $evento->imagem : 'imagens/eventos/'.$evento->imagem;
    $data = new DateTime($evento->data);
    $formatada = new IntlDateFormatter(
        'pt_pt', // Idioma
        IntlDateFormatter::FULL, // Estilo para a data completa
        IntlDateFormatter::NONE // Sem hora
    );
    $eventbrite_code = $evento->eventbrite_code;
}
?>
<div class="container mt-5">
    <div class="row">
        <div class="col-lg-8 col-md-7">
            <div class="display-5 fw-bold"><?= $evento->nome ?></div>
            <p class="mt-5 fs-5 fw-bold"><i class="me-2 bi bi-calendar3"></i><?= $formatada->format($data) ?></p>
            <p class="mt-2 fs-5"><i class="me-2 bi bi-card-text"></i><?= $evento->descricao ?></p>
            <div style = ""><?php echo $eventbrite_code; ?></div>
        </div>
        <div class="col-lg-4 col-md-5 mt-4 mb-4 mt-lg-1 mb-lg-1">
            <img class="img-fluid w-100 rounded" src="<?= $imagem ?>" alt="imagem do evento">
        </div> 
    </div>
</div>

<!-- descrição mais completa e algumas imagens -->
<div class="container">
    <div class="row">
        <div class="col-6 fs-3 border-bottom border-dark">Descrição</div>
    </div>
    <div class="row mt-3">
        <div class="col-9">
            <p class="lh-lg fs-5">
                <?= $evento->texto ?>
            </p>
        </div>   
    </div>
</div>

<!-- comentários -->
<?php
$sql = 'SELECT * FROM comentarios WHERE eventoId = :i';
$stmt = $dbh->prepare($sql);
$stmt->bindValue(':i', $id);
$stmt->execute();
if(!$stmt || $stmt->rowCount() == 0){
    $resultados = false;
}else {
    $resultados = true;
}
?>

<div class="container">
    <div class="row">
        <div class="col-6 fs-3 border-bottom border-dark">Comentários</div>
    </div>
    <?php
    if ($resultados) {
        while ($c = $stmt->fetchObject()) {
    ?>
            <div class="row">
                <div class="col-auto">
                    <i class="bi bi-person-bounding-box" style="font-size:48px;"></i>
                </div>
                <div class="col p-3">
                    <div class="fw-light">
                        <?= !empty($c->email) && $c->email != 'Anônimo' ? $c->email : 'Anónimo' ?>, <?= $c->date ?>
                    </div>
                    <div><?= $c->mensagem ?></div>
                </div>
            </div>
    <?php 
        }
    } else {
        echo '<p>Ainda não foram inseridos comentários.</p>';
    }
    ?>  


    <!-- Formulário de comentário (apenas exibido se não foi enviado) -->
    <?php if (!isset($comentario_enviado)) { ?>
    <div class="rounded mt-5 p-4" style="background-color: #f0f0f0; border: 1px solid #dcdcdc; max-width: 600px; margin: 0 auto;">
        <h5 style="color: #333; font-weight: bold; margin-bottom: 1rem; text-align: center;">Deixe o seu comentário:</h5>
        <form method="POST" action="">
            <!-- Campo de email opcional -->
            <div class="mb-3">
                <label for="email" class="form-label" style="color: #495057;">Email (opcional)</label>
                <input type="email" name="email" id="email" class="form-control" placeholder="Seu email..." style="border-radius: 5px;">
            </div>
            <!-- Campo de comentário -->
            <div class="input-group mb-3">
                <span class="input-group-text" style="background-color: #e9ecef; color: #495057;">Comentário</span>
                <textarea name="mensagem" class="form-control" rows="4" placeholder="Escreva aqui o seu comentário..." style="resize: none;" required></textarea>
            </div>
            <div class="form-check mb-3">
                 <input type="checkbox" name="consentimento" id="consentimento" class="form-check-input" required>
                 <label for="consentimento" class="form-check-label">
                Concordo com os <a target="_blank" href="termos_de_uso.html">termos de uso</a> e autorizo o uso das minhas informações.
            </div>
            <!-- Botão enviar centralizado -->
            <div style="text-align: center;">
                <button type="submit" class="btn btn-success" style="font-weight: bold; padding: 0.5rem 2rem;">Enviar</button>
            </div>
        </form>
    </div>
    <?php } ?>
    </div>

<div style="height:300px;"></div>
<script src="js/bootstrap.bundle.min.js"></script>
</body>
</html>
