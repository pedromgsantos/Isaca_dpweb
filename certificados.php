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
        body {
            font-family: 'Roboto';
            overflow-x: hidden;
        }
        .tree-text p {
            font-size: 25px;
            color: #000000;
        }

        .question-container {
            background-color: #ffffff;
            border-radius: 8px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
            padding: 30px;
            margin: 20px 0;
        }

        .btn-option {
            margin: 10px 0;
            padding: 12px 20px;
            border-radius: 8px;
            font-size: 16px;
            font-weight: bold;
        }

        .result {
            font-weight: bold;
            font-size: 24px;
            color: #28a745;
            margin-top: 20px;
        }

        /* Estilos para os cards de certificados */
        .card_cert {
            margin-bottom: 20px;
            border-radius: 10px;
            padding: 15px;
            transition: transform 0.3s ease, box-shadow 0.3s ease;
            height: 100%;
            display: flex;
            flex-direction: column;
            justify-content: space-between;
        }

        .card_cert:hover {
            transform: translateY(-10px);
            box-shadow: 0px 10px 20px rgba(0, 0, 0, 0.15);
        }

        .card-img {
            object-fit: cover;
            max-width: 300px;
            height: auto;
        }

        .card_cert {
            margin-bottom: 20px;
            border-radius: 10px;
            padding: 15px;
            transition: transform 0.3s ease, box-shadow 0.3s ease;
            height: 100%;
            max-width: 70%;
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
        }

        .card_cert:hover {
            transform: translateY(-10px);
            box-shadow: 0px 10px 20px rgba(0, 0, 0, 0.15);
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
                  <a href="en/certificates.php" class="nav-link me-3">
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
                <h2 style="font-size: 25px;" class="S1-text">Alguma vez pensaste em tirar uma certificação?</h2>
                <p style="font-size: 17px;" class="S1-subtext">A ISACA é a alternativa perfeita para te ajudar com isso</p>
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
                <p class="certificado-text mt-4">Certified Information Systems Auditor. O “padrão ouro” em certificações de garantia de TI, 
                    foi conquistado por mais de 189.000 profissionais de auditoria, segurança e controle de TI, desde que foi oferecido 
                    pela primeira vez em 1978. Foi nomeado o Melhor Programa de Certificação Profissional pelo SC Awards nos últimos anos e é 
                    frequentemente listado como uma das certificações mais bem pagas.</p>
            </div>
      </div>
        
      <!-- Image 2 -->
      <div class="row mb-4">
            
            <div class="col-md-2 d-flex align-items-center justify-content-center">
                <img src="imagens/CISM.png" class="certificados-img" alt="Image 2">
            </div>
            
            <div class="col-md-8">
                <p class="certificado-text mt-4">Certified Information Security Manager. Lançada em 2002, mais de 78.000 
                    profissionais obtiveram esta certificação e é também uma das certificações mais bem pagas.</p>
            </div>
      </div>

      <!-- Image 3 -->
      <div class="row mb-4 ">
            
            <div class="col-md-2 d-flex align-items-center justify-content-center">
                <img src="imagens/CGEIT.png" class="certificados-img" alt="Image 3">
            </div>
            
            <div class="col-md-8">
                <p class="certificado-text mt-4">Certified in the Governance of Enterprise IT. Mais de 10.000 profissionais de governança de TI 
                    obtiveram esta certificação desde o seu desenvolvimento em 2007.</p>
            </div>
      </div>

      <!-- Image 4 -->
      <div class="row mb-4 ">
            
            <div class="col-md-2 d-flex align-items-center justify-content-center">
                <img class="certificados-img" src="imagens/CDPSE.png" alt="Image 4">
            </div>
            
            <div class="col-md-8">
                <p class="certificado-text mt-4">Certified Data Privacy Solutions Engineer foi lançado em 2000 e rapidamente se tornou uma credencial muito procurada. Também ganhou um prêmio no IT World Awards de 2021. Tivemos uma resposta extraordinária ao CDPSE durante o lançamento dentro da nossa comunidade global da ISACA, e esperamos um interesse adicional à medida que os esforços de políticas públicas focadas na privacidade continuam a avançar para aprovação e implementação.</p>
            </div>
      </div>

      <!-- Image 5 -->
      <div class="row mb-4 ">
            
            <div class=" col-md-2 d-flex align-items-center justify-content-center">
                <img src="imagens/CRISC.png" class="certificados-img" alt="Image 5">
            </div>
            
            <div class="col-md-8">
                <p class="certificado-text mt-4">Certified in Risk and Information Systems Control. Mais de 36.000 profissionais de risco e 
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
                <p class="certificado-text mt-4">O Certified in Emerging Technology é uma série de credenciais que um novo profissional de confiança digital pode 
                    obter no aprendizado básico para que possa começar a construir a sua carreira.</p>
            </div>
            </div>
      </div>
       
      <!-- Retangulos -->
      <div class="col">
          <!-- Blue Rectangle -->
          <section class="retangulo azul">
           <div class="row mt-5" style=" margin-top: 1000px; background-color: #202C5B; height: 618px; display: flex; flex-direction: column; justify-content: center; align-items: center;  color: white; text-align: center;">
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
            <a href = "https://www.isaca.org/credentialing/certifications" target="_blank" style="font-size: 24px; font-weight: bold; color: #ffffff;">CONHECE MAIS CERTIFICAÇÕES E SO SEUS MATERIAIS DE ESTUDO</a>
        </div>
      </div>
      </div>  
    </section>

    <!--  Certificados Mobile -->
    <section class="container text-image-section d-block d-lg-none">
        <div class="row">
            <div class="col-9">

          <!-- Image 1 Mobile-->
          <div style="margin: auto;" class="row mb-4">
                
            <div class="col-md-2 d-flex align-items-center justify-content-center">
                <img src="imagens/CISA.png" style="max-width: 150px;" class="certificados-img" alt="Image 1">
            </div>
            
            <div class="col-md-8">
                <p style="font-size: 15px;" class="certificado-text mt-4">Certified Information Systems Auditor. O “padrão ouro” em certificações de garantia de TI, 
                    foi conquistado por mais de 189.000 profissionais de auditoria, segurança e controle de TI, desde que foi oferecido 
                    pela primeira vez em 1978. Foi nomeado o Melhor Programa de Certificação Profissional pelo SC Awards nos últimos anos e é 
                    frequentemente listado como uma das certificações mais bem pagas.</p>
            </div>
        </div>
        
          <!-- Image 2 Mobile-->
          <div style="margin: auto;" class="row mb-4">
                
              <div class="col-md-2 d-flex align-items-center justify-content-center">
                  <img src="imagens/CISM.png" style="max-width: 150px;" class="certificados-img" alt="Image 2">
              </div>
              
              <div class="col-md-8">
                  <p style="font-size: 15px;" class="certificado-text mt-4">Certified Information Security Manager. Lançada em 2002, mais de 78.000 
                      profissionais obtiveram esta certificação e é também uma das certificações mais bem pagas.</p>
              </div>
          </div>

        
        
          <!-- Image 3 Mobile-->
          <div style="margin: auto;" class="row mb-4 ">
                
            <div class="col-md-2 d-flex align-items-center justify-content-center">
                <img src="imagens/CGEIT.png" style="max-width: 150px;" class="certificados-img" alt="Image 3">
            </div>
            
            <div class="col-md-8">
                <p style="font-size: 15px;" class="certificado-text mt-4">Certified in the Governance of Enterprise IT. Mais de 10.000 profissionais de governança de TI 
                    obtiveram esta certificação desde o seu desenvolvimento em 2007.</p>
            </div>
          </div>

      
        
              <!-- Image 4 Mobile-->
              <div style="margin: auto;" class="row mb-4">
                
                <div class="col-md-2 d-flex align-items-center justify-content-center">
                    <img class="img-certificados" style="max-width: 150px;" class="certificados-img" src="imagens/CDPSE.png" alt="Image 4">
                </div>
                
                <div class="col-md-8">
                    <p style="font-size: 15px;" class="certificado-text mt-4">Certified Data Privacy Solutions Engineer foi lançado em 2000 e rapidamente se tornou uma credencial muito procurada. Também ganhou um prêmio no IT World Awards de 2021. Tivemos uma resposta extraordinária ao CDPSE durante o lançamento dentro da nossa comunidade global da ISACA, e esperamos um interesse adicional à medida que os esforços de políticas públicas focadas na privacidade continuam a avançar para aprovação e implementação.</p>
                </div>
              </div>

          
      
          <!-- Image 5 Mobile-->
          <div style="margin: auto;"class="row mb-4">
                
            <div class=" col-md-2 d-flex align-items-center justify-content-center">
                <img src="imagens/CRISC.png" style="max-width: 150px;" class="certificados-img" alt="Image 5">
            </div>
            
            <div class="col-md-8">
                <p style="font-size: 15px;" class="certificado-text mt-4">Certified in Risk and Information Systems Control. Mais de 36.000 profissionais de risco e 
                    controle de TI obtiveram a certificação CRISC desde sua estreia em 2010.​ Ela foi nomeada um dos Melhores Programas de Certificação Profissional 
                    pelo SC Awards e é classificada como uma das certificações mais bem pagas.</p>
            </div>
          </div> 
        
        
                <!-- Image 6 Mobile-->
                <div style="margin: auto;" class="row mb-4">
                          
                  <div  class="col-md-2 d-flex align-items-center justify-content-center">
                      <img src="imagens/CET.png" style="max-width: 150px;" class="certificados-img" alt="Image 6">
                  </div>
                  
                  <div class="col-md-8">
                      <p style="font-size: 15px;" class="certificado-text mt-4">O Certified in Emerging Technology é uma série de credenciais que um novo profissional de confiança digital pode 
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
              <a href ="https://www.isaca.org/credentialing/certifications" target="_blank" style="font-size: 20px; font-weight: bold; color: #FFFFFF;">CONHECE MAIS CERTIFICAÇÕES E SO SEUS MATERIAIS DE ESTUDO</a>
          </div>
        </div>
      </div>  
    </section>
  
    <!--Decision Tree-->
    <div class="container mt-5">
        <div class=" tree-text text-center ">
            <h2 style="margin: auto; font-size: 40px ; font-weight: bold ;color: #0D2C6C;">DESCOBRE QUAL É A MELHOR CERTIFICAÇÃO PARA TI!</h2>
        </div>
        <div id="decision-tree" class="question-container">
            <div id="question" class="question text-center fs-4 mb-4"></div>
            <div id="options" class="d-flex flex-column align-items-center"></div>
            <div id="result" class="result text-center"></div>
        </div>
    </div>
  
    <!-- Texto acima dos cards -->
    <section class="container mt-2 text-image-section d-none d-lg-block">
      <div class=" text-center">
        <h1 style="font-size: 54px ; font-weight: bold ; color: #0D2C6C;"> NUNCA PARES DE APRENDER <br>
          <span>COM A ISACA</span>
        </h1>
        <p style="font-size: 27px;" class=" text-center mt-3">
          Explora novas formas de expandir a tua rede e de avançares com a tua carreira.
        </p>
      </div>
    </section>
    
    <!-- Texto acima dos cards Mobile -->
    <section class="container text-image-section d-block d-lg-none">
      <div  class="container mt-5">
        <div class=" text-center">
        <h1 style="font-size: 25px; color: #0D2C6C; font-weight: bold ;">NUNCA PARES DE APRENDER <br>
          <span>COM A ISACA</span>
        </h1>
        <p style="font-size: 17px;" class="text-center mt-3">Explora novas formas de expandir a tua rede e de avançares com a tua carreira.</p>
        </div>
      </div>
    </section>

    <!--Cards-->
    <div class="container mt-2 d-none d-lg-block">
    <div class="row">
      <!-- Card 1 -->
      <div class="col-12 col-sm-6 col-md-3">
        <div class="card_cert mb-4 ">
        <a href="https://www.isaca.org/training-and-events/conferences" class="text-decoration-none">
            <img class="card-img" src="imagens/card-cert-1.png" alt="Imagem do card 1">
            <div style=" color: black;">
              <p>webpage</p>
              <h5 >Conferências</h5>
              <p >Participe numa próxima conferência da ISACA para fazer networking, aprender com especialistas, ganhar créditos CPE e progredir na sua carreira em IS/IT.</p>
            </div>
          </div>
        </a>
      </div>
           <!--Card 2-->
      <div class="col-12 col-sm-6 col-md-3">
        <div class="card_cert mb-4 ">
          <a href="https://www.isaca.org/training-and-events/training-topics/browse-all-training" class="text-decoration-none">
          <img class="card-img" src="imagens/card-cert-2.png" alt="Imagem do card 1">
          <div style=" color: black;">
            <p>webpage</p>
            <h5 >Aprenda à Sua Maneira</h5>
            <p >Escolha a formação que se adapta aos seus objetivos, horário e preferências de aprendizagem.</p>
          </div>
        </div>
        </a>
      </div>
         <!--Card 3-->
      <div class="col-12 col-sm-6 col-md-3">
        <a href="https://www.isaca.org/training-and-events/online-training/webinars" class="text-decoration-none">
        <div class="card_cert mb-4 ">
          <img class="card-img" src="imagens/card-cert-3.png" alt="Imagem do card 1">
          <div style=" color: black;" >
            <p>webinar</p>
            <h5 >Próximos Webinars</h5>
            <p >Obtenha novas ferramentas, insights ou uma nova perspetiva sobre um desafio num webinar de 60 minutos da ISACA.</p>
          </div>
        </div>
        </a>
      </div>
           <!--Card 4-->
      <div class="col-12 col-sm-6 col-md-3">
        <a href="https://www.isaca.org/training-and-events" class="text-decoration-none">
        <div class="card_cert mb-4 ">
          <img class="card-img" src="imagens/card-cert-4.png" alt="Imagem do card 1">
          <div style=" color: black;" >
            <p>webpage</p>
            <h5 >Formações e Eventos ISACA</h5>
            <p >Experiências práticas são muitas vezes a melhor forma de aprender. Ganhe créditos CPE adicionais e faça networking com outros profissionais de IT nestes eventos. Veja os detalhes!</p>
          </div>
        </div>
      </a>
      </div>
    </div>
    </div>
    
    <!--Cards Mobile-->
    <div class="container mt-2 d-block d-lg-none">
    <div class="row">
      <!-- Card 1 mobile -->
      <div class="col-12 col-sm-6 col-md-3">
        <a href="https://www.isaca.org/training-and-events/conferences" class="text-decoration-none">
        <div style="margin: auto;"class="card_cert-mobile mb-4 ">
          <img  class="card-img" src="imagens/card-cert-1.png" alt="Imagem do card 1">
          <div style=" color: black;" class="card-body">
            <p>webpage</p>
            <h5 >Conferencias</h5>
            <p >Participe numa próxima conferência da ISACA para fazer networking, aprender com especialistas, ganhar créditos CPE e progredir na sua carreira em IS/IT.</p>
          </div>
        </div>
        </a>
      </div>
           <!--Card 2 mobile-->
      <div class="col-12 col-sm-6 col-md-3">
          <a href="https://www.isaca.org/training-and-events/training-topics/browse-all-training" class="text-decoration-none">
            <div style="margin: auto;" class="card_cert-mobile mb-4 ">
            <img class="card-img" src="imagens/card-cert-2.png" alt="Imagem do card 1">
            <div style=" color: black;" class="card-body">
            <p>webpage</p>
            <h5 >Aprenda à Sua Maneira</h5>
            <p >Escolha a formação que se adapta aos seus objetivos, horário e preferências de aprendizagem.</p>
          </div>
        </div>
        </a>
      </div>
         <!--Card 3 mobile-->
      <div class="col-12 col-sm-6 col-md-3">
        <a href="https://www.isaca.org/training-and-events/online-training/webinars" class="text-decoration-none">
        <div style="margin: auto;" class="card_cert-mobile mb-4 ">
          <img class="card-img" src="imagens/card-cert-3.png" alt="Imagem do card 1">
          <div style=" color: black;" class="card-body">
            <p>webinar</p>
            <h5 >Próximos Webinars</h5>
            <p >Obtenha novas ferramentas, insights ou uma nova perspetiva sobre um desafio num webinar de 60 minutos da ISACA.</p>
          </div>
        </div>
        </a>
      </div>
           <!--Card 4 mobile-->
      <div class="col-12 col-sm-6 col-md-3">
        <a href="https://www.isaca.org/training-and-events" class="text-decoration-none">
        <div style="margin: auto;" class="card_cert-mobile mb-4 ">
          <img class="card-img" src="imagens/card-cert-4.png" alt="Imagem do card 1">
          <div style=" color: black;" class="card-body">
            <p>webpage</p>
            <h5 >Formações e Eventos ISACA</h5>
            <p >Experiências práticas são muitas vezes a melhor forma de aprender. Ganhe créditos CPE adicionais e faça networking com outros profissionais de IT nestes eventos. Veja os detalhes!</p>
          </div>
        </div>
      </a>
      </div>
    </div>
    </div>
  
    <!-- Duvida-->
    <section class="container my-6 mt-5">
            <div class="row justify-content-center ">    
                
                <div class="col-md-8 d-none d-lg-block text-center">
                    <p class="duvida">AINDA TENS DUVIDAS?</p>
                </div>
                <div class="d-flex justify-content-center align-items-center mt-4">
                    <a href = "contactos.php" type="button" class="btn-duvida col-md-3 d-none d-lg-block text-center" style= "text-decoration:none;">CONTACTA-NOS AQUI!</a>
                </div>
            </div>
    </section>

    <!-- Duvida mobile-->
    <section class="container my-6 mt-5">
            <div class="row justify-content-center d-block d-lg-none  ">    
                
                <div class="col-md-8 text-center">
                    <p class="duvida" style="font-size:24px;">AINDA TENS DUVIDAS?</p>
                </div>
                <div class="d-flex justify-content-center align-items-center mt-4">
                    <a href= "contactos.php"type="button" class="btn-duvida col-md-3 text-center" style="font-size: 16px; width: 250px;text-decoration:none; ">CONTACTA-NOS AQUI!</a>
                </div>
            </div>
    </section>

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
      // Perguntas e respostas
      const questions = [
          {
              question: "Qual das áreas tens mais interesse?",
              options: ["Segurança da Informação", "Governança de TI", "Gestão de Riscos"],
              next: [1, 2, 3]
          },
          {
              question: "Tens experiência na área de Segurança da Informação?",
              options: ["Sim", "Não"],
              next: [4, 5]
          },
          {
              question: "Tens experiência em Governança de TI?",
              options: ["Sim", "Não"],
              next: [6, 7]
          },
          {
              question: "Tens experiência em Gestão de Riscos?",
              options: ["Sim", "Não"],
              next: [8, 9]
          },
          {
              question: "Qual dos tópicos te desperta mais interesse?",
              options: ["Auditoria", "Gestão"],
              results: ["CISA", "CISM"]
          },
          {
              question: "Desejas explorar algo prático?",
              options: ["Sim", "Não"],
              results: ["CSX-P", "CET"]
          },
          {
              question: "Tens interesse em liderar estratégias de TI?",
              options: ["Sim", "Não"],
              results: ["CGEIT", "CRISC"]
          },
          {
              question: "Tens conhecimento de conceitos básicos eM TI?",
              options: ["Sim", "Não"],
              results: ["ITCA", "CET"]
          },
          {
              question: "Tens preferencia em auditoria de riscos?",
              options: ["Sim", "Não"],
              results: ["CRISC", "CDPSE"]
          },
          {
              question: "Tens interesse em aprender sobre privacidade de dados?",
              options: ["Sim", "Não"],
              results: ["CDPSE", "CET"]
          }
      ];

      const resultDiv = document.getElementById("result");
      const questionDiv = document.getElementById("question");
      const optionsDiv = document.getElementById("options");

      let currentQuestion = 0;

      function renderQuestion() {
          const q = questions[currentQuestion];
          questionDiv.textContent = q.question;
          optionsDiv.innerHTML = "";
          resultDiv.textContent = "";

          q.options.forEach((option, index) => {
              const button = document.createElement("button");
              button.textContent = option;
              button.className = "btn btn-primary btn-option";
              button.onclick = () => {
                  if (q.results) {
                      showResult(q.results[index]);
                  } else {
                      currentQuestion = q.next[index];
                      renderQuestion();
                  }
              };
              optionsDiv.appendChild(button);
          });
      }

      function showResult(result) {
          questionDiv.textContent = "";
          optionsDiv.innerHTML = "";
          resultDiv.textContent = `Certificação recomendada: ${result}`;
      }

      renderQuestion();
  </script>

  <script src="js/bootstrap.bundle.min.js"></script>  

</body>
</html>
