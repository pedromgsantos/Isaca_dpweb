<?php require('includes/connection.php') ?> 

<?php
// Verificar se o formulário foi submetido
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Captura os dados do formulário
    $nome = $_POST['name'];
    $email = $_POST['email'];
    $ano = $_POST['year'];
    $categoria = $_POST['program'];
    $curso = $_POST['course'];
    $assunto = $_POST['subject'];
    $mensagem = $_POST['mensagem'];

    // Query para inserir os dados na tabela
    $sql = "INSERT INTO contactos (nome, email, ano, categoria, curso, assunto, mensagem) 
            VALUES ('$nome', '$email', '$ano', '$categoria', '$curso', '$assunto', '$mensagem')";

    // Executar a query e verificar o resultado
    if ($dbh->query($sql) === TRUE) {
        echo "Mensagem enviada com sucesso!";
    }
}
