<?php
require('connection.php');
?>

<div class="footer" style="background-color: #D9D9D9;">
    <div class="container" style="background-color: #D9D9D9;">
        <div class="row align-items-center" style="background-color: #D9D9D9;">

            <!-- Logo e contactos -->
            <div class="col-md-6" style="background-color: #D9D9D9">
                <a class="navbar-brand" style="margin-top: 20px;background-color: #D9D9D9;" href="index.php">
                    <img src="imagens/LOGO2.png" alt="ISACA Student Group Logo" class="img-fluid" style="max-width: 270px;;width: auto; background-color: #D9D9D9">
                </a>
                
                <p style="font-size: 16px; color: #000; margin: 0; background-color: #D9D9D9; ">
                    <a href="https://www.google.com/maps/place/Institute+of+Accounting+and+Administration/@40.2096187,-8.4524684,17z/data=!3m1!4b1!4m6!3m5!1s0xd22f8f0b85baeb7:0x190fc4c9387ddaaa!8m2!3d40.2096187!4d-8.4524684!16s%2Fg%2F121hxw5z?entry=ttu&g_ep=EgoyMDI0MTExOC4wIKXMDSoASAFQAw%3D%3D" 
                       target="_blank" class = "link1"
                       style="text-decoration: underline; font-size: 18px;background-color: #D9D9D9;">
                        Quinta Agrícola, 3045-601 Coimbra
                    </a>
                </p>
                <p style="font-size: 16px; color: #000; background-color: #D9D9D9;" class="link1 mt-2">
                    <a href="cookies.html" target="_blank" class = "link1"
                       style="text-decoration: underline; font-size: 18px ;background-color: #D9D9D9;">
                        Política de Cookies
                    </a>
                </p>
                
                <div class="social-links mt-2" style="background-color: #D9D9D9;">
                    <a href="https://www.linkedin.com/company/isg-iscac/" target="_blank" style="margin-right: 20px;background-color: #D9D9D9;">
                        <i class="bi bi-linkedin" style="font-size: 26px; color: #0A66C2;background-color: #D9D9D9;"></i>
                    </a>
                    <a href="https://www.instagram.com/isaca_sg_iscac/?hl=en" target="_blank" class = "social-link instagram" style="background-color: #d9d9d9; margin-right: 20px;">
                        <img src="imagens/instagram.png" alt="" style="height: 40px; background-color: #D9D9D9; margin-bottom: 8px;">
                    </a>
                    <a href="mailto:isaca.isg@gmail.com" target="_blank" style="margin-right: 20px; background-color: #D9D9D9;">
                        <i class="bi bi-envelope" style="font-size: 26px; color: black;background-color: #D9D9D9;"></i>
                    </a>
                </div>
            </div>

            <!-- Subscreva a newsletter-->
            <div class="col-md-6" style="background-color: #D9D9D9;">
                <h5 style="font-size: 26px; font-weight: bold; color: #000; margin-bottom: 25px;background-color: #D9D9D9;">Subscreve a nossa Newsletter!</h5>

                <?php
                if ($_SERVER["REQUEST_METHOD"] == "POST") {
                    // Obter os dados do formulário
                    $nome = trim($_POST['nome']);
                    $apelido = trim($_POST['apelido']);
                    $email = trim($_POST['email']);

                    if (!empty($nome) && !empty($apelido) && !empty($email)) {
                        $sql = "INSERT INTO newsletter (nome, apelido, email) VALUES (:nome, :apelido, :email)";
                        $stmt = $dbh->prepare($sql);
                        $stmt->bindParam(':nome', $nome, PDO::PARAM_STR);
                        $stmt->bindParam(':apelido', $apelido, PDO::PARAM_STR);
                        $stmt->bindParam(':email', $email, PDO::PARAM_STR);

                        if ($stmt->execute()) {
                            echo "<div class='alert alert-success'>Dados enviados com sucesso!</div>";
                        } else {
                            echo "<div class='alert alert-danger'>Erro ao enviar os dados. Tente novamente.</div>";
                        }
                    } else {
                        echo "<div class='alert alert-warning'>Por favor, preencha todos os campos.</div>";
                    }
                }
                ?>

                <form method="POST" action="">
                    <div class="row g-2" style="background-color: #D9D9D9">
                      <div class="col" style="background-color: #D9D9D9">
                        <input type="text" class="form-control" name="nome" placeholder="Nome" required>
                      </div>
                      <div class="col" style="background-color: #D9D9D9">
                        <input type="text" class="form-control" name="apelido" placeholder="Apelido" required>
                      </div>
                    </div >
                    <div class="mt-2" style="background-color: #D9D9D9">
                      <input type="email" class="form-control" name="email" placeholder="Email" required>
                    </div>
                    <div class="mt-3" style="background-color: #D9D9D9">
                      <button type="submit" class="btn btn-success w-100">Enviar</button>
                    </div>
                    <div class="text-end mt-3" style="background-color: #D9D9D9;">
                        <p style="font-size: 14px; color: #000; background-color: #D9D9D9;">&copy;2024 ISACA Student Group do ISCAC Todos os direitos reservados.</p>
                    </div>
                  </form>
            </div>
        </div>

        <!-- Nav do footer -->
        <div class="text-center mt-3" style = "margin-bottom: -20px;">
            <ul class="nav justify-content-center" style = "background-color: #d9d9d9;">
              <li class="nav-item"><a style = "text-decoration: none;" href="index.php" class="nav-link">Home</a></li>
              <li class="nav-item"><a style = "text-decoration: none;" href="sobre_nos.php" class="nav-link">Sobre Nós</a></li>
              <li class="nav-item"><a style = "text-decoration: none;" href="noticias.php" class="nav-link">Notícias</a></li>
              <li class="nav-item"><a style = "text-decoration: none;" href="eventos.php" class="nav-link">Eventos</a></li>
              <li class="nav-item"><a style = "text-decoration: none;" href="certificados.php" class="nav-link">Certificados</a></li>
              <li class="nav-item"><a style = "text-decoration: none;" href="contactos.php" class="nav-link">Contactos</a></li>
            </ul>
          </div>
    </div>
</div>

