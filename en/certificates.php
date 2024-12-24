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
                <img src="../imagens/LOGO1.2.png" alt="ISACA Student Group Logo" class="img-fluid ms-lg-5 ms-2" style="max-width: 200px; width: auto;">
            </a>
            
           <!--Hamburger--> 
            <button class="navbar-toggler me-3" type="button" data-bs-toggle="collapse" data-bs-target="#menu-principal" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <!-- NavBar-->
            <div id ="menu-principal" style="font-family: Outfit; font-size: 20px; font-weight: bold; margin-right: 50px;" class="collapse navbar-collapse">
                <div class="navbar-nav nav-underline mb-4 ms-auto" >
                    <a href="about_us.php" class="nav-link me-3">About&nbsp;Us</a>
                    <a href="news.php" class="nav-link me-3">News</a>
                    <a href="events.php" class="nav-link me-3">Events</a>
                    <a href="certificates.php" class="nav-link active me-3">Certificates</a>
                    <a href="contacts.php" class="nav-link me-3">Contacts</a>
                    <a href="../certificados.php" class="nav-link me-3">
                        <img src="https://flagcdn.com/w40/pt.png" alt="English" style="width: 30px; height: auto;">
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
                <img src="../imagens/Screenshot_1.png" alt="Graduate Left" class="S1-img-left">
            </div>

            <!-- Text Section -->
            <div class="col-md-8 text-center">
                <h2 class="S1-text">Have you ever thought about getting a certification?</h2>
                <p class="S1-subtext">ISACA is the perfect alternative to help you with that</p>
            </div>

            <!-- Right Image -->
            <div class="col-md-2 d-flex align-items-center justify-content-center">
                <img src="../imagens/Screenshot_3.png" alt="Graduate Right" class="S1-img-right">
            </div>
        </div>
    </section>

    <!-- Secção1 Mobile-->
    <section class="container my-5 d-block d-lg-none">
        <div class="row justify-content-center">
            <!-- Left Image -->
            <div class="col-md-2 d-flex align-items-center justify-content-center">
                <img src="../imagens/Screenshot_1.png" alt="Graduate Left" style="max-width: 25%;" class="S1-img-left">
            </div>

            <!-- Text Section -->
            <div class="col-md-8 text-center">
                <h2 style="font-size: 25px;" class="S1-text">Have you ever thought about getting a certification?</h2>
                <p style="font-size: 17px;" class="S1-subtext">ISACA is the perfect alternative to help you with that</p>
            </div>

            <!-- Right Image -->
            <div class="col-md-2 d-flex align-items-center justify-content-center">
                <img src="../imagens/Screenshot_3.png" alt="Graduate Right" style="max-width: 25%;" class="S1-img-right">
            </div>
        </div>
    </section>

    <!-- Certificates-->    
    <section class="container text-image-section d-none d-lg-block">
      <div class="row">
          <div class="col-9">

              <!-- Image 1 -->
      <div class="row mb-4">
          
          <div class="col-md-2 d-flex align-items-center justify-content-center">
              <img src="../imagens/CISA.png" class="certificados-img" alt="Image 1">
          </div>
          
          <div class="col-md-8">
              <p class="certificado-text mt-4">Certified Information Systems Auditor. The 'gold standard' in IT assurance certifications, achieved by over 189,000 professionals in IT auditing, security, and control since it was first offered in 1978. It has been named the Best Professional Certification Program by the SC Awards in recent years and is frequently listed as one of the highest-paying certifications.</p>
          </div>
      </div>
      
          <!-- Image 2 -->
      <div class="row mb-4">
          
          <div class="col-md-2 d-flex align-items-center justify-content-center">
              <img src="../imagens/CISM.png" class="certificados-img" alt="Image 2">
          </div>
          
          <div class="col-md-8">
              <p class="certificado-text mt-4">Certified Information Security Manager. Launched in 2002, over 78,000 professionals have obtained this certification, and it is also one of the highest-paying certifications.</p>
          </div>
      </div>

       
      
          <!-- Image 3 -->
      <div class="row mb-4 ">
          
          <div class="col-md-2 d-flex align-items-center justify-content-center">
              <img src="../imagens/CGEIT.png" class="certificados-img" alt="Image 3">
          </div>
          
          <div class="col-md-8">
              <p class="certificado-text mt-4">Certified in Corporate IT Governance. Over 10,000 IT governance professionals have earned this certification since its development in 2007.</p>
          </div>
      </div>

     
      
          <!-- Image 4 -->
      <div class="row mb-4 ">
          
          <div class="col-md-2 d-flex align-items-center justify-content-center">
              <img class="certificados-img" src="../imagens/CDPSE.png" alt="Image 4">
          </div>
          
          <div class="col-md-8">
              <p class="certificado-text mt-4">Certified Data Privacy Solutions Engineer was launched in 2000 and quickly became a highly sought-after credential. It also won an award at the 2021 IT World Awards. We had an extraordinary response to CDPSE during its launch within our global ISACA community, and we expect additional interest as privacy-focused public policy efforts continue to progress towards approval and implementation.</p>
          </div>
      </div>

        
     
          <!-- Image 5 -->
      <div class="row mb-4 ">
          
          <div class=" col-md-2 d-flex align-items-center justify-content-center">
              <img src="../imagens/CRISC.png" class="certificados-img" alt="Image 5">
          </div>
          
          <div class="col-md-8">
              <p class="certificado-text mt-4">Certified in Risk and Information Systems Control. Over 36,000 IT risk and control professionals have earned the CRISC certification since its debut in 2010. It has been named one of the Best Professional Certification Programs by the SC Awards and is considered one of the highest-paying certifications.</p>
          </div>
      </div> 
      
      
          <!-- Image 6 -->
      <div class="row mb-4 ">
          
          <div class="col-md-2 d-flex align-items-center justify-content-center">
              <img src="../imagens/CET.png" class="certificados-img" alt="Image 6">
          </div>
          
          <div class="col-md-8">
              <p class="certificado-text mt-4">The IT Certified Associate is a series of credentials that a new digital trust professional can earn in basic learning to begin building their career.</p>
          </div>
          </div>
      </div>
       
      <!-- Retangulos -->
      <div class="col">
          <!-- Blue Rectangle -->
          <section class="retangulo azul">
           <div class="row mt-5" style=" margin-top: 1000px; background-color: #202C5B; height: 618px; display: flex; flex-direction: column; justify-content: center; align-items: center;  color: white; text-align: center;">
              <h2>AVERAGE GLOBAL SALARIES IN 2022</h2>
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
            <a href = "https://www.isaca.org/credentialing/certifications" target="_blank" style="font-size: 24px; font-weight: bold; color: #ffffff;">GET TO KNOW MORE CERTIFICATIONS AND STUDY MATERIALS</a>
        </div>
      </div>
      </div>  
    </section>

    <!--  Certificates Mobile -->
    <section class="container text-image-section d-block d-lg-none">
        <div class="row">
            <div class="col-9">

          <!-- Image 1 Mobile-->
          <div style="margin: auto;" class="row mb-4">
                
            <div class="col-md-2 d-flex align-items-center justify-content-center">
                <img src="../imagens/CISA.png" style="max-width: 150px;" class="certificados-img" alt="Image 1">
            </div>
            
            <div class="col-md-8">
                <p style="font-size: 15px;" class="certificado-text mt-4">Certified Information Systems Auditor. The 'gold standard' in IT assurance certifications, achieved by over 189,000 professionals in IT auditing, security, and control since it was first offered in 1978. It has been named the Best Professional Certification Program by the SC Awards in recent years and is frequently listed as one of the highest-paying certifications.</p>
            </div>
        </div>
        
          <!-- Image 2 Mobile-->
          <div style="margin: auto;" class="row mb-4">
                
              <div class="col-md-2 d-flex align-items-center justify-content-center">
                  <img src="../imagens/CISM.png" style="max-width: 150px;" class="certificados-img" alt="Image 2">
              </div>
              
              <div class="col-md-8">
                  <p style="font-size: 15px;" class="certificado-text mt-4">Certified Information Security Manager. Launched in 2002, over 78,000 professionals have obtained this certification, and it is also one of the highest-paying certifications.</p>
              </div>
          </div>

        
        
          <!-- Image 3 Mobile-->
          <div style="margin: auto;" class="row mb-4 ">
                
            <div class="col-md-2 d-flex align-items-center justify-content-center">
                <img src="../imagens/CGEIT.png" style="max-width: 150px;" class="certificados-img" alt="Image 3">
            </div>
            
            <div class="col-md-8">
                <p style="font-size: 15px;" class="certificado-text mt-4">Certified in Corporate IT Governance. Over 10,000 IT governance professionals have obtained this certification since its development in 2007.</p>
            </div>
          </div>

      
        
              <!-- Image 4 Mobile-->
              <div style="margin: auto;" class="row mb-4">
                
                <div class="col-md-2 d-flex align-items-center justify-content-center">
                    <img class="img-certificados" style="max-width: 150px;" class="certificados-img" src="../imagens/CDPSE.png" alt="Image 4">
                </div>
                
                <div class="col-md-8">
                    <p style="font-size: 15px;" class="certificado-text mt-4">Certified Data Privacy Solutions Engineer was launched in 2000 and quickly became a highly sought-after credential. It also won an award at the 2021 IT World Awards. We had an extraordinary response to CDPSE during its launch within our global ISACA community, and we expect additional interest as privacy-focused public policy efforts continue to progress towards approval and implementation.</p>
                </div>
              </div>

          
      
          <!-- Image 5 Mobile-->
          <div style="margin: auto;"class="row mb-4">
                
            <div class=" col-md-2 d-flex align-items-center justify-content-center">
                <img src="../imagens/CRISC.png" style="max-width: 150px;" class="certificados-img" alt="Image 5">
            </div>
            
            <div class="col-md-8">
                <p style="font-size: 15px;" class="certificado-text mt-4">Certified in Risk and Information Systems Control. Over 36,000 IT risk and control professionals have earned the CRISC certification since its debut in 2010. It has been named one of the Best Professional Certification Programs by the SC Awards and is ranked among the highest-paying certifications.</p>
            </div>
          </div> 
        
        
                <!-- Image 6 Mobile-->
                <div style="margin: auto;" class="row mb-4">
                          
                  <div  class="col-md-2 d-flex align-items-center justify-content-center">
                      <img src="../imagens/CET.png" style="max-width: 150px;" class="certificados-img" alt="Image 6">
                  </div>
                  
                  <div class="col-md-8">
                      <p style="font-size: 15px;" class="certificado-text mt-4">Certified in Risk and Information Systems Control. Over 36,000 IT risk and control professionals have earned the CRISC certification since its debut in 2010. It has been named one of the Best Professional Certification Programs by the SC Awards and is considered one of the highest-paying certifications.</p>
                  </div>
                  </div>
              </div>

        
        <!-- Retangulos -->
        <div class="col">
            <!-- Blue Rectangle -->
            <section class="retangulo azul">
              <div class="row mt-5" style="margin: auto; background-color: #202C5B; height: 408px; width: 300px; display: flex; flex-direction: column; justify-content: center; align-items: center; color: white; text-align: center;">
                  <h2>AVERAGE GLOBAL SALARIES IN 2022</h2>
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
              <a href ="https://www.isaca.org/credentialing/certifications" target="_blank" style="font-size: 20px; font-weight: bold; color: #FFFFFF;">GET TO KNOW MORE CERTIFICATIONS AND STUDY MATERIALS</a>
          </div>
        </div>
      </div>  
    </section>
  
    <!--Decision Tree-->
    <div class="container mt-5">
        <div class=" tree-text text-center ">
            <h2 style="margin: auto; font-size: 40px ; font-weight: bold ;color: #0D2C6C;">DISCOVER THE BEST CERTIFICATION FOR YOU!</h2>
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
            <h1 style="font-size: 54px ; font-weight: bold ; color: #0D2C6C;"> NEVER STOP LEARNING <br>
            <span>WITH ISACA</span>
            </h1>
            <p style="font-size: 27px;" class=" text-center mt-3">
            Explore new ways to expand your network and advance your career.
            </p>
        </div>
    </section>

    <!-- Texto acima dos cards Mobile -->
    <section class="container text-image-section d-block d-lg-none">
    <div class="container mt-5">
        <div class="text-center">
        <h1 style="font-size: 25px; color: #0D2C6C; font-weight: bold ;">NEVER STOP LEARNING <br>
            <span>WITH ISACA</span>
        </h1>
        <p style="font-size: 17px;" class="text-center mt-3">Explore new ways to expand your network and advance your career.</p>
        </div>
    </div>
    </section>

    <!-- Cards -->
    <div class="container mt-2 d-none d-lg-block">
    <div class="row">
        <!-- Card 1 -->
        <div class="col-12 col-sm-6 col-md-3">
        <div class="card_cert mb-4 ">
            <a href="https://www.isaca.org/training-and-events/conferences" class="text-decoration-none">
            <img class="card-img" src="../imagens/card-cert-1.png" alt="Card Image 1">
            <div style="color: black;">
                <p>webpage</p>
                <h5>Conferences</h5>
                <p>Join an upcoming ISACA conference to network, learn from experts, earn CPE credits, and advance your IS/IT career.</p>
            </div>
            </a>
        </div>
        </div>
        <!-- Card 2 -->
        <div class="col-12 col-sm-6 col-md-3">
        <div class="card_cert mb-4 ">
            <a href="https://www.isaca.org/training-and-events/training-topics/browse-all-training" class="text-decoration-none">
            <img class="card-img" src="../imagens/card-cert-2.png" alt="Card Image 2">
            <div style="color: black;">
                <p>webpage</p>
                <h5>Learn Your Way</h5>
                <p>Choose training that fits your goals, schedule, and learning preferences.</p>
            </div>
            </a>
        </div>
        </div>
        <!-- Card 3 -->
        <div class="col-12 col-sm-6 col-md-3">
        <a href="https://www.isaca.org/training-and-events/online-training/webinars" class="text-decoration-none">
            <div class="card_cert mb-4 ">
            <img class="card-img" src="../imagens/card-cert-3.png" alt="Card Image 3">
            <div style="color: black;">
                <p>webinar</p>
                <h5>Upcoming Webinars</h5>
                <p>Gain new tools, insights, or a fresh perspective on a challenge in a 60-minute ISACA webinar.</p>
            </div>
            </div>
        </a>
        </div>
        <!-- Card 4 -->
        <div class="col-12 col-sm-6 col-md-3">
        <a href="https://www.isaca.org/training-and-events/conferences" class="text-decoration-none">
            <div class="card_cert mb-4 ">
            <img class="card-img" src="../imagens/card-cert-4.png" alt="Card Image 4">
            <div style="color: black;">
                <p>webpage</p>
                <h5>ISACA Training and Events</h5>
                <p>Hands-on experiences are often the best way to learn. Earn additional CPE credits and network with other IT professionals at these events. Check the details!</p>
            </div>
            </div>
        </a>
        </div>
    </div>
    </div>

    <!-- Cards Mobile -->
    <div class="container mt-2 d-block d-lg-none">
    <div class="row">
        <!-- Card 1 Mobile -->
        <div class="col-12 col-sm-6 col-md-3">
        <a href="https://www.isaca.org/training-and-events/conferences" class="text-decoration-none">
            <div style="margin: auto;" class="card_cert-mobile mb-4">
            <img class="card-img" src="../imagens/card-cert-1.png" alt="Card Image 1">
            <div style="color: black;" class="card-body">
                <p>webpage</p>
                <h5>Conferences</h5>
                <p>Join an upcoming ISACA conference to network, learn from experts, earn CPE credits, and advance your IS/IT career.</p>
            </div>
            </div>
        </a>
        </div>
        <!-- Card 2 Mobile -->
        <div class="col-12 col-sm-6 col-md-3">
        <a href="https://www.isaca.org/training-and-events/training-topics/browse-all-training" class="text-decoration-none">
            <div style="margin: auto;" class="card_cert-mobile mb-4">
            <img class="card-img" src="../imagens/card-cert-2.png" alt="Card Image 2">
            <div style="color: black;" class="card-body">
                <p>webpage</p>
                <h5>Learn Your Way</h5>
                <p>Choose training that fits your goals, schedule, and learning preferences.</p>
            </div>
            </div>
        </a>
        </div>
        <!-- Card 3 Mobile -->
        <div class="col-12 col-sm-6 col-md-3">
        <a href="https://www.isaca.org/training-and-events/online-training/webinars" class="text-decoration-none">
            <div style="margin: auto;" class="card_cert-mobile mb-4">
            <img class="card-img" src="../imagens/card-cert-3.png" alt="Card Image 3">
            <div style="color: black;" class="card-body">
                <p>webinar</p>
                <h5>Upcoming Webinars</h5>
                <p>Gain new tools, insights, or a fresh perspective on a challenge in a 60-minute ISACA webinar.</p>
            </div>
            </div>
        </a>
        </div>
        <!-- Card 4 Mobile -->
        <div class="col-12 col-sm-6 col-md-3">
        <a href="https://www.isaca.org/training-and-events/conferences" class="text-decoration-none">
            <div style="margin: auto;" class="card_cert-mobile mb-4">
            <img class="card-img" src="../imagens/card-cert-4.png" alt="Card Image 4">
            <div style="color: black;" class="card-body">
                <p>webpage</p>
                <h5>ISACA Training and Events</h5>
                <p>Hands-on experiences are often the best way to learn. Earn additional CPE credits and network with other IT professionals at these events. Check the details!</p>
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
                    <p class="duvida">STILL HAVE QUESTIONS?</p>
                </div>
                <div class="d-flex justify-content-center align-items-center mt-4">
                    <a href = "contacts.php" type="button" class="btn-duvida col-md-3 d-none d-lg-block text-center" style= "text-decoration:none;">CONTACT US HERE!</a>
                </div>
            </div>
    </section>

    <!-- Duvida mobile-->
    <section class="container my-6 mt-5">
            <div class="row justify-content-center d-block d-lg-none  ">    
                
                <div class="col-md-8 text-center">
                    <p class="duvida" style="font-size:24px;">STILL HAVE QUESTIONS?</p>
                </div>
                <div class="d-flex justify-content-center align-items-center mt-4">
                    <a href= "contacts.php"type="button" class="btn-duvida col-md-3 text-center" style="font-size: 16px; width: 250px;text-decoration:none; ">CONTACT US HERE!</a>
                </div>
            </div>
    </section>

    <!-- FAIXA AZUL-->
    <div class="column mt-5 d-none d-lg-block" >
           <p class="Faixa-title">WE LOOK FORWARD TO WORKING WITH YOU!</p>
    </div>

    <!-- FAIXA AZUL mobile-->
    <div class="column mt-5 d-block d-lg-none" >
            <p class="Faixa-title" style="font-size: 20px;">WE LOOK FORWARD TO WORKING WITH YOU!</p>
    </div>
            
    <div class="footer" style="background-color: #D9D9D9;">
            <div class="container" style="background-color: #D9D9D9;">
            <div class="row align-items-center" style="background-color: #D9D9D9;">

                <!-- Logo and Contacts -->
                <div class="col-md-6" style="background-color: #D9D9D9">
                    <a class="navbar-brand" style="margin-top: 20px;background-color: #D9D9D9;" href="index.php">
                        <img src="../imagens/LOGO2.png" alt="ISACA Student Group Logo" class="img-fluid" style="max-width: 270px;width: auto; background-color: #D9D9D9">
                    </a>
                    
                    <p style="font-size: 16px; color: #000; margin: 0; background-color: #D9D9D9;">
                        <a href="https://www.google.com/maps/place/Institute+of+Accounting+and+Administration/@40.2096187,-8.4524684,17z/data=!3m1!4b1!4m6!3m5!1s0xd22f8f0b85baeb7:0x190fc4c9387ddaaa!8m2!3d40.2096187!4d-8.4524684!16s%2Fg%2F121hxw5z?entry=ttu&g_ep=EgoyMDI0MTExOC4wIKXMDSoASAFQAw%3D%3D" 
                           target="_blank" class="link1"
                           style="text-decoration: underline; font-size: 18px;background-color: #D9D9D9;">
                            Quinta Agrícola, 3045-601 Coimbra
                        </a>
                    </p>
                    <p style="font-size: 16px; color: #000; background-color: #D9D9D9;" class="link1 mt-2">
                        <a href="cookies.html" target="_blank" class="link1"
                           style="text-decoration: underline; font-size: 18px; background-color: #D9D9D9;">
                            Cookies Policy
                        </a>
                    </p>
                    
                    <div class="social-links mt-2" style="background-color: #D9D9D9;">
                        <a href="https://www.linkedin.com/company/isg-iscac/" target="_blank" style="margin-right: 20px;background-color: #D9D9D9;">
                            <i class="bi bi-linkedin" style="font-size: 26px; color: #0A66C2;background-color: #D9D9D9;"></i>
                        </a>
                        <a href="https://www.instagram.com/isaca_sg_iscac/?hl=en" target="_blank" class="social-link instagram" style="background-color: #d9d9d9; margin-right: 20px;">
                            <img src="../imagens/instagram.png" alt="" style="height: 40px; background-color: #D9D9D9; margin-bottom: 8px;">
                        </a>
                        <a href="mailto:isaca.isg@gmail.com" target="_blank" style="margin-right: 20px; background-color: #D9D9D9;">
                            <i class="bi bi-envelope" style="font-size: 26px; color: black;background-color: #D9D9D9;"></i>
                        </a>
                    </div>
                </div>

                <!-- Subscribe to the Newsletter -->
                <div class="col-md-6" style="background-color: #D9D9D9;">
                    <h5 style="font-size: 26px; font-weight: bold; color: #000; margin-bottom: 25px;background-color: #D9D9D9;">Subscribe to our Newsletter!</h5>

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
                            echo "<div class='alert alert-success'>Sent with success!</div>";
                        } else {
                            echo "<div class='alert alert-danger'>Error. Try again.</div>";
                        }
                    } else {
                        echo "<div class='alert alert-warning'>Please, fill all fields!</div>";
                    }
                }
                ?>

                    <form method="POST" action="">
                        <div class="row g-2" style="background-color: #D9D9D9">
                          <div class="col" style="background-color: #D9D9D9">
                            <input type="text" class="form-control" name="nome" placeholder="First Name" required>
                          </div>
                          <div class="col" style="background-color: #D9D9D9">
                            <input type="text" class="form-control" name="apelido" placeholder="Last Name" required>
                          </div>
                        </div >
                        <div class="mt-2" style="background-color: #D9D9D9">
                          <input type="email" class="form-control" name="email" placeholder="Email" required>
                        </div>
                        <div class="mt-3" style="background-color: #D9D9D9">
                          <button type="submit" class="btn btn-success w-100">Send</button>
                        </div>
                        <div class="text-end mt-3" style="background-color: #D9D9D9;">
                            <p style="font-size: 14px; color: #000; background-color: #D9D9D9;">&copy;2024 ISACA Student Group ISCAC All rights reserved.</p>
                        </div>
                    </form>
                </div>
            </div>

            <!-- Footer Nav -->
            <div class="text-center mt-3" style="margin-bottom: -20px;">
                <ul class="nav justify-content-center" style="background-color: #d9d9d9;">
                  <li class="nav-item"><a style="text-decoration: none;" href="index.php" class="nav-link">Home</a></li>
                  <li class="nav-item"><a style="text-decoration: none;" href="about_us.php" class="nav-link">About Us</a></li>
                  <li class="nav-item"><a style="text-decoration: none;" href="news.php" class="nav-link">News</a></li>
                  <li class="nav-item"><a style="text-decoration: none;" href="events.php" class="nav-link">Events</a></li>
                  <li class="nav-item"><a style="text-decoration: none;" href="certificates.php" class="nav-link">Certificates</a></li>
                  <li class="nav-item"><a style="text-decoration: none;" href="contacts.php" class="nav-link">Contacts</a></li>
                </ul>
              </div>
    </div>

    </div> 

  <script>
      // Perguntas e respostas
    const questions = [
        {
            question: "Which area interests you the most?",
            options: ["Information Security", "IT Governance", "Risk Management"],
            next: [1, 2, 3]
        },
        {
            question: "Do you have experience in Information Security?",
            options: ["Yes", "No"],
            next: [4, 5]
        },
        {
            question: "Do you have experience in IT Governance?",
            options: ["Yes", "No"],
            next: [6, 7]
        },
        {
            question: "Do you have experience in Risk Management?",
            options: ["Yes", "No"],
            next: [8, 9]
        },
        {
            question: "Which topic interests you the most?",
            options: ["Auditing", "Management"],
            results: ["CISA", "CISM"]
        },
        {
            question: "Do you want to explore something practical?",
            options: ["Yes", "No"],
            results: ["CSX-P", "CET"]
        },
        {
            question: "Are you interested in leading IT strategies?",
            options: ["Yes", "No"],
            results: ["CGEIT", "CRISC"]
        },
        {
            question: "Do you have basic knowledge of IT concepts?",
            options: ["Yes", "No"],
            results: ["ITCA", "CET"]
        },
        {
            question: "Do you prefer auditing risks?",
            options: ["Yes", "No"],
            results: ["CRISC", "CDPSE"]
        },
        {
            question: "Are you interested in learning about data privacy?",
            options: ["Yes", "No"],
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
          resultDiv.textContent = `Recommended Certification: ${result}`;
      }

      renderQuestion();
  </script>

  <script src="../js/bootstrap.bundle.min.js"></script>  

</body>
</html>
