<?php
require('includes/connection.php');

// Ações possíveis
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if (isset($_POST['action'])) {
        switch ($_POST['action']) {

            case 'adicionar':
                $nome = $_POST['nome'];
                $data = $_POST['data'];
                $descricao = $_POST['descricao'];
                $imagem = $_POST['imagem'];
                $texto = $_POST['texto'];
                $visivel = isset($_POST['visivel']) ? 1 : 0;

                $sql = "INSERT INTO eventos (nome, data, descricao, imagem, texto, visivel) VALUES (?, ?, ?, ?, ?, ?)";
                $stmt = $dbh->prepare($sql);
                $stmt->execute([$nome, $data, $descricao, $imagem, $texto, $visivel]);
 
                // Redirecionar após adicionar o evento, para evitar duplicações de adição
                header("Location: " . $_SERVER['PHP_SELF']);
                exit;

            case 'visibilidade':
                $id = $_POST['id'];
                $visivel = $_POST['visivel'] == 1 ? 0 : 1;

                $sql = "UPDATE eventos SET visivel=? WHERE id=?";
                $stmt = $dbh->prepare($sql);
                $stmt->execute([$visivel, $id]);
                
                header("Location: " . $_SERVER['PHP_SELF']);
                exit;

            case 'editar':
                $id = $_POST['id'];
                $nome = $_POST['nome'];
                $data = $_POST['data'];
                $descricao = $_POST['descricao'];
                $imagem = $_POST['imagem'];
                $texto = $_POST['texto'];
                $visivel = isset($_POST['visivel']) ? 1 : 0;

                $sql = "UPDATE eventos SET nome=?, data=?, descricao=?, imagem=?, texto=?, visivel=? WHERE id=?";
                $stmt = $dbh->prepare($sql);
                $stmt->execute([$nome, $data, $descricao, $imagem, $texto, $visivel, $id]);
                
                header("Location: " . $_SERVER['PHP_SELF']);
                exit;
        }
    }
}

// Listar eventos
$sql = "SELECT * FROM eventos";
$stmt = $dbh->prepare($sql);
$stmt->execute();
$result = $stmt->fetchAll(PDO::FETCH_ASSOC);
?>

<!DOCTYPE html>
<html lang="pt">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Painel de administração de Eventos do website do ISG</title>

    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/bootstrap-icons.min.css">

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
</head>
<body style="background-color: #f5f5f5;">
    <div class="container mt-5" style="max-width: 900px;">
        <h1 class="mb-4 text-center" style="color: #0D2C6C;">Painel de administração de Eventos do website do ISG</h1>

        <!-- Adicionar eventos -->
        <div class="card mb-4" style="border-radius: 15px; box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);">
            <div class="card-body">
                <h5 class="card-title text-center">Adicionar Novo Evento</h5>
                <form method="POST">
                    <input type="hidden" name="action" value="adicionar">
                    <div class="mb-3">
                        <label for="nome" class="form-label">Nome</label>
                        <input type="text" name="nome" id="nome" class="form-control" placeholder="Nome do evento" required>
                    </div>
                    <div class="mb-3">
                        <label for="data" class="form-label">Data</label>
                        <input type="date" name="data" id="data" class="form-control" required>
                    </div>
                    <div class="mb-3">
                        <label for="descricao" class="form-label">Descrição</label>
                        <textarea name="descricao" id="descricao" class="form-control" rows="3" placeholder="Descrição do evento" required></textarea>
                    </div>
                    <div class="mb-3">
                        <label for="texto" class="form-label">Texto Completo</label>
                        <textarea name="texto" id="texto" class="form-control" rows="5" placeholder="Insira o texto completo do evento" required></textarea>
                    </div>
                    <div class="mb-3">
                        <label for="imagem" class="form-label">Imagem</label>
                        <input type="text" name="imagem" id="imagem" class="form-control" placeholder="Nome da Imagem (tem de estar dentro da pasta eventos)">
                    </div>
                    <div class="form-check mb-3">
                        <input type="checkbox" name="visivel" id="visivel" class="form-check-input">
                        <label for="visivel" class="form-check-label">Visível</label>
                    </div>
                    <div class="text-center">
                        <button type="submit" class="btn btn-primary px-4" style="border-radius: 50px;">Adicionar</button>
                    </div>
                </form>
            </div>
        </div>

        <!-- Lista de eventos -->
        <div class="card" style="border-radius: 15px; box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);">
            <div class="card-body">
                <h5 class="card-title text-center">Lista de Eventos</h5>
                <table class="table table-striped table-hover" style="margin-top: 20px;">
                    <thead class="table-dark">
                        <tr>
                            <th style="text-align: center;">ID</th>
                            <th style="text-align: center;">Nome</th>
                            <th style="text-align: center;">Data</th>
                            <th style="text-align: center;">Visível</th>
                            <th style="text-align: center;">Ações</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($result as $row): ?>
                            <tr>
                                <td style="text-align: center; vertical-align: middle;"><?= $row['id'] ?></td>
                                <td style="text-align: center; vertical-align: middle;"><?= $row['nome'] ?></td>
                                <td style="text-align: center; vertical-align: middle;"><?= $row['data'] ?></td>
                                <td style="text-align: center; vertical-align: middle;">
                                    <span class="badge bg-<?= $row['visivel'] ? 'success' : 'secondary' ?>">
                                        <?= $row['visivel'] ? 'Sim' : 'Não' ?>
                                    </span>
                                </td>
                                <td style="text-align: center; vertical-align: middle;">
                                    <!-- Botão para alternar visibilidade -->
                                    <form method="POST" class="d-inline">
                                        <input type="hidden" name="action" value="visibilidade">
                                        <input type="hidden" name="id" value="<?= $row['id'] ?>">
                                        <input type="hidden" name="visivel" value="<?= $row['visivel'] ?>">
                                        <button type="submit" class="btn btn-sm btn-warning" style="border-radius: 50px;">
                                            <?= $row['visivel'] ? 'Ocultar' : 'Exibir' ?>
                                        </button>
                                    </form>
                                    
                                    <!-- Botão de Edição -->
                                    <button class="btn btn-sm btn-primary" style="border-radius: 50px;" data-bs-toggle="modal" data-bs-target="#editModal<?= $row['id'] ?>">Editar</button>
                                </td>
                            </tr>

                            <!-- Modal de Edição -->
                            <div class="modal fade" id="editModal<?= $row['id'] ?>" tabindex="-1" aria-labelledby="editModalLabel<?= $row['id'] ?>" aria-hidden="true">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <form method="POST">
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="editModalLabel<?= $row['id'] ?>">Editar Evento</h5>
                                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                            </div>
                                            <div class="modal-body">
                                                <input type="hidden" name="action" value="editar">
                                                <input type="hidden" name="id" value="<?= $row['id'] ?>">
                                                <div class="mb-3">
                                                    <label for="nome<?= $row['id'] ?>" class="form-label">Nome</label>
                                                    <input type="text" name="nome" id="nome<?= $row['id'] ?>" class="form-control" value="<?= $row['nome'] ?>" required>
                                                </div>
                                                <div class="mb-3">
                                                    <label for="data<?= $row['id'] ?>" class="form-label">Data</label>
                                                    <input type="date" name="data" id="data<?= $row['id'] ?>" class="form-control" value="<?= $row['data'] ?>" required>
                                                </div>
                                                <div class="mb-3">
                                                    <label for="descricao<?= $row['id'] ?>" class="form-label">Descrição</label>
                                                    <textarea name="descricao" id="descricao<?= $row['id'] ?>" class="form-control" rows="3" required><?= $row['descricao'] ?></textarea>
                                                </div>
                                                <div class="mb-3">
                                                    <label for="texto<?= $row['id'] ?>" class="form-label">Texto Completo</label>
                                                    <textarea name="texto" id="texto<?= $row['id'] ?>" class="form-control" rows="5" required><?= $row['texto'] ?></textarea>
                                                </div>
                                                <div class="mb-3">
                                                    <label for="imagem<?= $row['id'] ?>" class="form-label">Imagem</label>
                                                    <input type="text" name="imagem" id="imagem<?= $row['id'] ?>" class="form-control" value="<?= $row['imagem'] ?>">
                                                </div>
                                                <div class="form-check mb-3">
                                                    <input type="checkbox" name="visivel" id="visivel<?= $row['id'] ?>" class="form-check-input" <?= $row['visivel'] ? 'checked' : '' ?>>
                                                    <label for="visivel<?= $row['id'] ?>" class="form-check-label">Visível</label>
                                                </div>
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancelar</button>
                                                <button type="submit" class="btn btn-primary">Salvar Alterações</button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        <?php endforeach; ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
<script src="js/bootstrap.bundle.min.js"></script>
</body>
</html>
