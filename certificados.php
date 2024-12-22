<!DOCTYPE html>
<html lang="pt">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ISACA Student Group - Certificados</title>
    
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/bootstrap-icons.min.css">
    <link href='https://fonts.googleapis.com/css?family=Roboto' rel='stylesheet'>
    <link href='https://fonts.googleapis.com/css?family=Outfit' rel='stylesheet'>
    <link rel ="icon" href = "imagens/ISACA_logo.png">
    <link rel="stylesheet" href="styles.css">
    <style>
        .body {
            font-family: 'Roboto', sans-serif;
            color: #333;
            background-color: #f5f5f5;
        }
    </style>

</head>
<body style="background-color: #f5f5f5; max-width: 100%;">
    
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
                    <a href="certificados.php" class="nav-link active me-3">Certificados</a>
                    <a href="contactos.php" class="nav-link me-3">Contactos</a>
                    <a href="index.php" class="nav-link me-3">
                        <img src="https://flagcdn.com/w40/gb.png" alt="English" style="width: 30px; height: auto;">
                    </a>
                </div>
            </div>
        </nav>
    </header>

     <!-- Secção1 -->
    <section class="container my-5 d-none d-lg-block">
        <div class="row justify-content-center">
            <!-- Left Image -->
            <div class="col-md-2 d-flex align-items-center justify-content-center">
                <img src="imagens/Screenshot_1.png" alt="Graduate Left" class="S1-img-left">
            </div>

            <!-- Text Section -->
            <div class="col-md-8 text-center">
                <h2 class="S1-text">Alguma vez pensaste em tirar uma certificação?</h2>
                <p class="S1-subtext">A ISACA é a alternativa perfeita para te ajudar com isso</p>
            </div>

            <!-- Right Image -->
            <div class="col-md-2 d-flex align-items-center justify-content-center">
                <img src="imagens/Screenshot_3.png" alt="Graduate Right" class="S1-img-right">
            </div>
        </div>
    </section>

    <!-- Secção1 Mobile-->
    <section class="container my-5 d-block d-lg-none">
        <div class="row justify-content-center">
            <!-- Left Image -->
            <div class="col-md-2 d-flex align-items-center justify-content-center">
                <img src="imagens/Screenshot_1.png" alt="Graduate Left" style="max-width: 25%;" class="S1-img-left">
            </div>

            <!-- Text Section -->
            <div class="col-md-8 text-center">
                <h2 style="font-size: 23px;" class="S1-text">Alguma vez pensaste em tirar uma certificação?</h2>
                <p style="font-size: 15px;" class="S1-subtext">A ISACA é a alternativa perfeita para te ajudar com isso</p>
            </div>

            <!-- Right Image -->
            <div class="col-md-2 d-flex align-items-center justify-content-center">
                <img src="imagens/Screenshot_3.png" alt="Graduate Right" style="max-width: 25%;" class="S1-img-right">
            </div>
        </div>
    </section>


    <!-- Certificados-->    
    <section class="container text-image-section d-none d-lg-block">
      <div class="row">
          <div class="col-9">

              <!-- Image 1 -->
      <div class="row mb-4">
          
          <div class="col-md-2 d-flex align-items-center justify-content-center">
              <img src="imagens/CISA.png" class="certificados-img" alt="Image 1">
          </div>
          
          <div class="col-md-8">
              <p class="certificado-text mt-4">Auditor Certificado de Sistemas de Informação. O “padrão ouro” em certificações de garantia de TI, 
                  foi conquistado por mais de 189.000 profissionais de auditoria, segurança e controle de TI, desde que foi oferecido 
                  pela primeira vez em 1978. Foi nomeado o Melhor Programa de Certificação Profissional pelo SC Awards nos últimos anos e é 
                  frequentemente listado como uma das certificações mais bem pagas</p>
          </div>
      </div>
      
          <!-- Image 2 -->
      <div class="row mb-4">
          
          <div class="col-md-2 d-flex align-items-center justify-content-center">
              <img src="imagens/CISM.png" class="certificados-img" alt="Image 2">
          </div>
          
          <div class="col-md-8">
              <p class="certificado-text mt-4">Gerente certificado de segurança da informação. Lançada em 2002, mais de 78.000 
                  profissionais obtiveram esta certificação e é também uma das certificações mais bem pagas.</p>
          </div>
      </div>

       
      
          <!-- Image 3 -->
      <div class="row mb-4 ">
          
          <div class="col-md-2 d-flex align-items-center justify-content-center">
              <img src="imagens/CRISC.png" class="certificados-img" alt="Image 3">
          </div>
          
          <div class="col-md-8">
              <p class="certificado-text mt-4">Certificado em Governança de TI Corporativa. Mais de 10.000 profissionais de governança de TI 
                  obtiveram esta certificação desde o seu desenvolvimento em 2007.</p>
          </div>
      </div>

     
      
          <!-- Image 4 -->
      <div class="row mb-4 ">
          
          <div class="col-md-2 d-flex align-items-center justify-content-center">
              <img class="certificados-img" src="imagens/CDPSE.png" alt="Image 4">
          </div>
          
          <div class="col-md-8">
              <p class="certificado-text mt-4">Certified Data Privacy Solutions Engineer, was launched in 2000 and quickly became a sought-after credential. It has also won an award from the 2021 IT World Awards. We had an overwhelming response to CDPSE at launch within our ISACA global community, and we expect additional interest as 
                  privacy-focused public policy efforts continue to move towards approval and enactment</p>
          </div>
      </div>

        
     
          <!-- Image 5 -->
      <div class="row mb-4 ">
          
          <div class=" col-md-2 d-flex align-items-center justify-content-center">
              <img src="imagens/CGEIT.png" class="certificados-img" alt="Image 5">
          </div>
          
          <div class="col-md-8">
              <p class="certificado-text mt-4">Certificada em Riscos e Controle de Sistemas de Informação. Mais de 36.000 profissionais de risco e 
                  controle de TI obtiveram a certificação CRISC desde sua estreia em 2010.​ Ela foi nomeada um dos Melhores Programas de Certificação Profissional 
                  pelo SC Awards e é classificada como uma das certificações mais bem pagas.</p>
          </div>
      </div> 
      
      
          <!-- Image 6 -->
      <div class="row mb-4 ">
          
          <div class="col-md-2 d-flex align-items-center justify-content-center">
              <img src="imagens/CET.png" class="certificados-img" alt="Image 6">
          </div>
          
          <div class="col-md-8">
              <p class="certificado-text mt-4">O IT Certified Associate é uma série de credenciais que um novo profissional de confiança digital pode 
                  obter no aprendizado básico para que possa começar a construir suas carreiras.</p>
          </div>
          </div>
      </div>
       
      <!-- Retangulos -->
      <div class="col">
          <!-- Blue Rectangle -->
          <section class="retangulo azul">
           <div class="row mt-5" style=" margin-top: 1000px; background-color: #202C5B; height: 618px; display: flex; flex-direction: column; justify-content: center; align-items: center; color: white; text-align: center;">
              <h2>SALÁRIOS MÉDIOS MUNDIAIS EM 2022</h2>
              <div style="display: flex; flex-direction: column; gap: 20px;">
                  <div>
                      <p style="font-size: 54px; font-weight: bold; color: #40AA92; margin: 0;">142K $</p>
                      <p style="font-size: 20px; font-weight: bold; margin: 0;">CISA</p>
                  </div>
                  <div>
                      <p style="font-size: 54px; font-weight: bold; color: #40AA92; margin: 0;">162K $</p>
                      <p style="font-size: 20px; font-weight: bold; margin: 0;">CISM</p>
                  </div>
                  <div>
                      <p style="font-size: 54px; font-weight: bold; color: #40AA92; margin: 0;">141K $</p>
                      <p style="font-size: 20px; font-weight: bold; margin: 0;">CGEIT</p>
                  </div>
              </div>
          </div>
         </section>
          <!-- Green Rectangle -->
          <div class="row" style="background-color: #71B144; height: 224px; display: flex; justify-content: center; align-items: center; color: white; text-align: center;">
              <a href = "https://www.isaca.org/credentialing/certifications" target="_blank" style="font-size: 24px; font-weight: bold; color: #ffffff;">CONHECE MAIS CERTIFICAÇÕES</a>
          </div>
      </div>
  </div>  
    </section>

    <!--  Certificados Mobile -->
    <section class="container text-image-section d-block d-lg-none">
        <div class="row">
            <div class="col-9">

            <!-- Image 1 Mobile-->
            <div class="row mb-4">
                
            <div class="col-md-2 d-flex align-items-center justify-content-center">
                <img src="imagens/CISA.png" style="max-width: 150px;" class="certificados-img" alt="Image 1">
            </div>
            
            <div class="col-md-8">
                <p style="font-size: 12px;" class="certificado-text mt-4">Auditor Certificado de Sistemas de Informação. O “padrão ouro” em certificações de garantia de TI, 
                    foi conquistado por mais de 189.000 profissionais de auditoria, segurança e controle de TI, desde que foi oferecido 
                    pela primeira vez em 1978. Foi nomeado o Melhor Programa de Certificação Profissional pelo SC Awards nos últimos anos e é 
                    frequentemente listado como uma das certificações mais bem pagas</p>
            </div>
        </div>
        
            <!-- Image 2 Mobile-->
            <div class="row mb-4">
                
            <div class="col-md-2 d-flex align-items-center justify-content-center">
                <img src="imagens/CISM.png" style="max-width: 150px;" class="certificados-img" alt="Image 2">
            </div>
            
            <div class="col-md-8">
                <p style="font-size: 12px;" class="certificado-text mt-4">Gerente certificado de segurança da informação. Lançada em 2002, mais de 78.000 
                    profissionais obtiveram esta certificação e é também uma das certificações mais bem pagas.</p>
            </div>
        </div>

        
        
            <!-- Image 3 Mobile-->
            <div class="row mb-4 ">
                
            <div class="col-md-2 d-flex align-items-center justify-content-center">
                <img src="imagens/CRISC.png" style="max-width: 150px;" class="certificados-img" alt="Image 3">
            </div>
            
            <div class="col-md-8">
                <p style="font-size: 12px;" class="certificado-text mt-4">Certificado em Governança de TI Corporativa. Mais de 10.000 profissionais de governança de TI 
                    obtiveram esta certificação desde o seu desenvolvimento em 2007.</p>
            </div>
        </div>

        
        
                <!-- Image 4 Mobile-->
                <div class="row mb-4">
                
                <div class="col-md-2 d-flex align-items-center justify-content-center">
                    <img class="img-certificados" style="max-width: 150px;" class="certificados-img" src="imagens/CDPSE.png" alt="Image 4">
                </div>
                
                <div class="col-md-8">
                    <p style="font-size: 12px;" class="certificado-text mt-4">Certified Data Privacy Solutions Engineer, was launched in 2000 and quickly became a sought-after credential. It has also won an award from the 2021 IT World Awards. We had an overwhelming response to CDPSE at launch within our ISACA global community, and we expect additional interest as 
                        privacy-focused public policy efforts continue to move towards approval and enactment</p>
                </div>
            </div>

            
        
            <!-- Image 5 Mobile-->
            <div class="row mb-4">
                
            <div class=" col-md-2 d-flex align-items-center justify-content-center">
                <img src="imagens/CGEIT.png" style="max-width: 150px;" class="certificados-img" alt="Image 5">
            </div>
            
            <div class="col-md-8">
                <p style="font-size: 12px;" class="certificado-text mt-4">Certificada em Riscos e Controle de Sistemas de Informação. Mais de 36.000 profissionais de risco e 
                    controle de TI obtiveram a certificação CRISC desde sua estreia em 2010.​ Ela foi nomeada um dos Melhores Programas de Certificação Profissional 
                    pelo SC Awards e é classificada como uma das certificações mais bem pagas.</p>
            </div>
        </div> 
        
        
                <!-- Image 6 Mobile-->
                <div class="row mb-4">
                            
                    <div class="col-md-2 d-flex align-items-center justify-content-center">
                        <img src="imagens/CET.png" style="max-width: 150px;" class="certificados-img" alt="Image 6">
                    </div>
                    
                    <div class="col-md-8">
                        <p style="font-size: 12px;" class="certificado-text mt-4">O IT Certified Associate é uma série de credenciais que um novo profissional de confiança digital pode 
                            obter no aprendizado básico para que possa começar a construir suas carreiras.</p>
                    </div>
                    </div>
                </div>

        
        <!-- Retangulos -->
        <div class="col">
            <!-- Blue Rectangle -->
            <section class="retangulo azul">
                <div class="row mt-5" style="margin: auto; background-color: #202C5B; height: 408px; width: 300px; display: flex; flex-direction: column; justify-content: center; align-items: center; color: white; text-align: center;">
                    <h2>SALÁRIOS MÉDIOS MUNDIAIS EM 2022</h2>
                    <div style="display: flex; flex-direction: column; gap: 20px;">
                        <div>
                            <p style="font-size: 36px; font-weight: bold; color: #40AA92; margin: 0;">142K $</p>
                            <p style="font-size: 15px; font-weight: bold; margin: 0;">CISA</p>
                        </div>
                        <div>
                            <p style="font-size: 36px; font-weight: bold; color: #40AA92; margin: 0;">162K $</p>
                            <p style="font-size: 15px; font-weight: bold; margin: 0;">CISM</p>
                        </div>
                        <div>
                            <p style="font-size: 36px; font-weight: bold; color: #40AA92; margin: 0;">141K $</p>
                            <p style="font-size: 15px; font-weight: bold; margin: 0;">CGEIT</p>
                        </div>
                    </div>
                </div>
            </section>
            <!-- Green Rectangle -->
            <div class="row" style="margin: auto; background-color: #71B144; height: 150px;width: 300px; display: flex; justify-content: center; align-items: center; color: white; text-align: center;">
                <a href ="https://www.isaca.org/credentialing/certifications" target="_blank" style="font-size: 20px; font-weight: bold; color: #FFFFFF;">CONHECE MAIS CERTIFICAÇÕES</a>
            </div>
        </div>
    </div>  
    </section>

    <!-- Duvida-->
    <section class="container my-6">
            <div class="row justify-content-center ">    
                
                <div class="col-md-8 d-none d-lg-block text-center">
                    <p class="duvida">Queres saber mais?</p>
                </div>
                <div class="d-flex justify-content-center align-items-center mt-4">
                    <button type="button" class="btn-duvida col-md-3 d-none d-lg-block">Contacta-nos aqui!</button>
                </div>
            </div>
    </section>

    <!-- Duvida mobile-->
    <section class="container my-6">
            <div class="row justify-content-center d-block d-lg-none  ">    
                
                <div class="col-md-8 text-center">
                    <p class="duvida" style="font-size:24px ;">Queres saber mais?</p>
                </div>
                <div class="d-flex justify-content-center align-items-center mt-4">
                    <button type="button" class="btn-duvida col-md-3" style="font-size: 16px; width: 250px;">Contacta-nos aqui!</button>
                </div>
            </div>
    </section>

    <!-- Formulario -->
    <div class="container">
            <div class="row">
              <!-- Info Contacto -->
              <div class="col-md-4 mt-5">
                <h4 class="forms-title">Contactos</h4>
                <ul class="list-unstyled" >
                    <li><i style = "font-size: 18px;color: #000000;" class="bi bi-envelope"></i> <a href="mailto:isaca.isg@gmail.com" style="color: #000000;">isaca.isg@gmail.com</a></li>
                    <li><i style = "font-size: 18px;color: #000000;" class="bi bi-geo-alt"></i> <a href="https://www.google.com/maps/place/Institute+of+Accounting+and+Administration/@40.2096187,-8.4524684,17z/data=!3m1!4b1!4m6!3m5!1s0xd22f8f0b85baeb7:0x190fc4c9387ddaaa!8m2!3d40.2096187!4d-8.4524684!16s%2Fg%2F121hxw5z?entry=ttu&g_ep=EgoyMDI0MTExOC4wIKXMDSoASAFQAw%3D%3D" style="color: #000000;" target="_blank">Quinta Agrícola, 3045-601 Coimbra</a></li>
                </ul>
                
            </div>
            
             
              <!-- Forms Contacto -->
              <div class="col-md-8 mt-5">
                <h4 class="forms-title">Entra em Contacto Connosco</h4>
                <form action="enviar_email.php" method="POST">
                    <div class="row">                       
                        <div class="mb-3 col-md-6">
                            <label for="name" class="form-label">Nome *</label>
                            <input type="text" class="form-control" id="name" placeholder="" required>
                        </div>                        
                        <div class="mb-3 col-md-6">
                            <label for="email" class="form-label">Email *</label>
                            <input type="email" class="form-control" id="email" placeholder="" required>
                        </div>
                  </div>
                    <div class="row">   
                  <div class="mb-3 col-md-6">
                    <label for="year" class="form-label">Ano *</label>
                    <select class="form-select" id="year" required>
                      <option value="" disabled selected></option>
                      <option value="1">1º Ano</option>
                      <option value="2">2º Ano</option>
                      <option value="3">3º Ano</option>
                    </select>
                  </div>
                  <div class="mb-3 col-md-6">
                    <label for="program" class="form-label">Categoria *</label>
                    <select class="form-select" id="program" onchange="updateCourses()" required>
                      <option value="" disabled selected></option>
                      <option value="licenciatura">Licenciatura</option>
                      <option value="mestrado">Mestrado</option>
                    </select>
                  </div>
                  </div>
                  <div class="mb-3">
                    <label for="course" class="form-label">Curso *</label>
                    <select class="form-select" id="course" required>
                      <option value="" disabled selected></option>
                    </select>
                  </div>
                  <div class="mb-3">
                    <label for="mensagem" class="form-label">Mensagem *</label>
                    <textarea class="form-control" id="mensagem" rows="3" placeholder="" required></textarea>
                  </div>
                  <button type="submit" class="btn-forms col-md-3">Enviar</button>
                </form>
              </div>
            </div>
    </div>
              
    <!-- FAIXA AZUL-->
    <div class="column mt-5 d-none d-lg-block" >
           <p class="Faixa-title">ESTAMOS ANSIOSOS POR TRABALHAR CONTIGO!</p>
    </div>

    <!-- FAIXA AZUL mobile-->
    <div class="column mt-5 d-block d-lg-none" >
            <p class="Faixa-title" style="font-size: 20px;">ESTAMOS ANSIOSOS POR TRABALHAR CONTIGO!</p>
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
    <script src="js/bootstrap.bundle.min.js"></script>

</body>
</html>