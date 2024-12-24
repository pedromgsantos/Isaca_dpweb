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
    </style>
</head>

<body style="background-color: #f5f5f5; max-width: 100%;"></body>

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
                            <a href="eventos.php" class="nav-link me-3">Eventos</a>
                            <a href="certificados.php" class="nav-link me-3">Certificados</a>
                            <a href="contactos.php" class="nav-link active me-3">Contactos</a>
                            <a href="en/contacts.php" class="nav-link me-3">
                                <img src="https://flagcdn.com/w40/gb.png" alt="English" style="width: 30px; height: auto;">
                            </a>
                        </div>
                    </div>
                </nav>
    </header>

    <!-- titulo -->
    <div>
        <h1 style="text-align: center; font-weight: 600; font-size:67px ;color: #0D2C6C; font-family: 'Outfit';">Contactos</h1>
    </div>

    <!-- Formulario -->
    <div class="container mb-5" style="margin-top: 40px;">
      <div class="row">
        <!-- Info Contacto -->
        <div class="col-md-4 mt-5 d-none d-lg-block">
          <h4 class="forms-title">Contactos</h4>
          <ul class="list-unstyled" >
            <li><i style = "font-size: 18px;color: #000000;" class="bi bi-envelope"></i> <a href="mailto:isaca.isg@gmail.com" style="color: #000000;">isaca.isg@gmail.com</a></li>
            <li><i style = "font-size: 18px;color: #000000;" class="bi bi-geo-alt"></i> <a href="https://www.google.com/maps/place/Institute+of+Accounting+and+Administration/@40.2096187,-8.4524684,17z/data=!3m1!4b1!4m6!3m5!1s0xd22f8f0b85baeb7:0x190fc4c9387ddaaa!8m2!3d40.2096187!4d-8.4524684!16s%2Fg%2F121hxw5z?entry=ttu&g_ep=EgoyMDI0MTExOC4wIKXMDSoASAFQAw%3D%3D" style="color: #000000;" target="_blank">Quinta Agrícola, 3045-601 Coimbra</a></li>
          </ul>
          <div style="margin-top: 10px; text-align: left; margin-right:50px;">
             <img src="imagens/imagem_contactos.png" alt="Ilustração Contactos" class="img-fluid" style="max-width: 100%; border-radius: 10px;">
          </div>
        </div>

        <!-- Info Contacto Mobile-->
        <div style="text-align: center;" class="col-md-4 mt-5 d-block d-lg-none">
          <h4 class="forms-title">Contactos</h4>
          <ul class="list-unstyled" >
            <li><i style = "font-size: 18px;color: #000000;" class="bi bi-envelope"></i> <a href="mailto:isaca.isg@gmail.com" style="color: #000000;">isaca.isg@gmail.com</a></li>
            <li><i style = "font-size: 18px;color: #000000;" class="bi bi-geo-alt"></i> <a href="https://www.google.com/maps/place/Institute+of+Accounting+and+Administration/@40.2096187,-8.4524684,17z/data=!3m1!4b1!4m6!3m5!1s0xd22f8f0b85baeb7:0x190fc4c9387ddaaa!8m2!3d40.2096187!4d-8.4524684!16s%2Fg%2F121hxw5z?entry=ttu&g_ep=EgoyMDI0MTExOC4wIKXMDSoASAFQAw%3D%3D" style="color: #000000;" target="_blank">Quinta Agrícola, 3045-601 Coimbra</a></li>
          </ul>
          <div style="margin-top: 10px; margin-right:50px;">
            <img src="imagens/imagem_contactos.png" alt="Ilustração Contactos" class="img-fluid" style="max-width: 60%; border-radius: 10px;">
          </div>
        </div>

        <!-- Formulário HTML -->
        <div class="col-md-8 mt-5">
          <h4 class="forms-title text-center">Entra em Contacto Connosco</h4>
          <form id="contactForm" onsubmit="submitFormAndReplace(event)">
            <div class="row">
                <div class="mb-3 col-md-6">
                  <label for="name" class="form-label">Nome *</label>
                  <input type="text" class="form-control" id="name" name="name" required>
                </div>
                <div class="mb-3 col-md-6">
                  <label for="email" class="form-label">Email *</label>
                  <input type="email" class="form-control" id="email" name="email" required>
                </div>
            </div>
            <div class="row">
              <div class="mb-3 col-md-12">
                <label for="subject" class="form-label">Assunto *</label>
                <select class="form-select" id="subject" name="subject" onchange="toggleFields()" required>
                  <option value="" disabled selected>Selecione o assunto</option>
                  <option value="Certificados">Certificados</option>
                  <option value="Ser Membro ISACA">Ser Membro ISACA</option>
                  <option value="Outro">Outro</option>
                </select>
              </div>
            </div>

            <div id="optionalFields" style="display: none;">
              <div class="row">
                <div class="mb-3 col-md-6">
                  <label for="year" class="form-label">Ano *</label>
                  <select class="form-select" id="year" name="year">
                    <option value="" disabled selected>Selecione o ano</option>
                    <option value="1">1º Ano</option>
                    <option value="2">2º Ano</option>
                    <option value="3">3º Ano</option>
                  </select>
                </div>
                <div class="mb-3 col-md-6">
                  <label for="program" class="form-label">Categoria *</label>
                  <select class="form-select" id="program" name="program" onchange="updateCourses()">
                    <option value="" disabled selected>Selecione a categoria</option>
                    <option value="licenciatura">Licenciatura</option>
                    <option value="mestrado">Mestrado</option>
                  </select>
                </div>
              </div>
              <div class="row">
                <div class="mb-3 col-md-6">
                  <label for="course" class="form-label">Curso *</label>
                  <select class="form-select" id="course" name="course">
                    <option value="" disabled selected>Selecione o curso</option>
                  </select>
                </div>
              </div>
              </div>
                <div class="mb-3">
                  <label for="mensagem" class="form-label">Mensagem *</label>
                  <textarea class="form-control" id="mensagem" name="mensagem" rows="3" required></textarea>
                </div>
                <button type="submit" class="btn-forms col-md-3">Enviar</button>
          </form>

        </div>
      </div>
    </div>

    <?php require('includes/footer.php') ?>  


    <script>
      // Cursos disponíveis para cada categoria
      const cursos = {
      licenciatura: ["Gestão de Empresas", "Contabilidade e Gestão Pública", "Informática de Gestão", 
      "Ciência de Dados para a Gestão", "Comércio e Relações Económicas Internacionais", "Contabilidade e Auditoria",
      "Finanças e Contabilidade", "Marketing e Negócios Internacionais", "Secretariado de Direção e Administração", "Solicitadoria e Administração" ],
      mestrado: ["Análise de Dados e Sistemas de Apoio à Decisão", "Análise Financeira", "Auditoria Empresarial e Pública", "Contabilidade e Fiscalidade Empresarial",
      "Contabilidade e Gestão Pública", "Controlo de Gestão", "Gestão de Empresas Agrícolas", "Gestão de Recursos Humanos", "Gestão Empresarial", "Inteligência Logística e Gestão da Cadeia de Abastecimento",
      "Marketing e Negócios Internacionais", "Sistemas de Informação de Gestão", "Solicitadoria"]
      };
    
      // Função para atualizar os cursos com base na categoria selecionada
      function updateCourses() {
      const program = document.getElementById("program").value;
      const courseSelect = document.getElementById("course");
            
      // Limpar opções atuais
      courseSelect.innerHTML = '<option value="" disabled selected>Selecione o curso</option>';
            
      // Adicionar os cursos correspondentes
      if (program && cursos[program]) {
          cursos[program].forEach(curso => {
          const option = document.createElement("option");
          option.value = curso.toLowerCase();
          option.textContent = curso;
          courseSelect.appendChild(option);
          });
        }
      }        
    </script>

    <script>
      function toggleFields() {
        const subject = document.getElementById("subject").value;
        const optionalFields = document.getElementById("optionalFields");
        if (subject === "Ser Membro ISACA") {
          optionalFields.style.display = "block";
        } else {
          optionalFields.style.display = "none";
        }
      }
      function submitFormAndReplace(event) {
        event.preventDefault(); // Evita o recarregamento da página

        const form = document.getElementById("contactForm"); // Seleciona o formulário
        const formData = new FormData(form); // Coleta os dados do formulário

        // Envia os dados para enviar_email.php usando fetch
        fetch("enviar_email.php", {
          method: "POST",
          body: formData,
        })
          .then((response) => {
            if (response.ok) {
              // Substitui o conteúdo do formulário pela mensagem de agradecimento
              document.getElementById("contactForm").innerHTML = `
                <h4 class="mt-4 text-center" style="color: #2a9d8f;">Mensagem enviada com sucesso!</h4>
                <p class="text-center">Obrigado por entrar em contacto. Responderemos em breve!</p>
              `;
            } else {
              alert("Erro ao enviar mensagem. Tente novamente.");
            }
          })
          .catch((error) => {
            console.error("Erro ao enviar o formulário:", error);
            alert("Erro ao enviar mensagem. Tente novamente.");
          });
      }

      
    </script>

  <script src="js/bootstrap.bundle.min.js"></script>

</body>
</html>