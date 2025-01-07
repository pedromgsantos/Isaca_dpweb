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
    
    <!--Header-->
    <?php
    $portuguese_page = "../certificados.php";
    require('../includes/headeren.php') 
    ?>

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
        <a href="https://www.isaca.org/training-and-events" class="text-decoration-none">
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
        <a href="https://www.isaca.org/training-and-events" class="text-decoration-none">
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
            
    <!-- Footer -->
    <footer>
    <?php require('../includes/footeren.php') ?> 
    </footer>

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
