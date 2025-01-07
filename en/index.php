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

        
    </style>
</head> 
<body style = "height: 1000px;background-color: #f5f5f5; max-width: 100%;" >

    <?php
    $portuguese_page = "../index.php";
    require('../includes/headeren.php') 
    ?>
    
    <!-- Hero Section -->
    <section id = "hero" class="hero" style="background-color: #f5f5f5; max-width: 100%;">
        <div class="container-fluid">
            <div class="row" style="max-width: 100%;">
    
                <!--Content for lg (desktop)-->
                <div class="col-1 d-none d-lg-block"></div>
                
                <div class="col-5 d-none d-lg-block mt-5">
                    <h1 class="display-1" style="margin-bottom: 50px;color: #0D2C6C; font-size: 87px; font-family: Outfit; font-weight: 600; line-height: 100%;">
                        Become <br> part of <br> something bigger
                    </h1>
                    <p style="color: #000; font-family: Roboto; font-size: 24px;">
                        Gain leadership experience <br>and position yourself for success <br> after completing your education!
                    </p>
                </div>
                
                <div class="col-6 d-flex justify-content-end d-none d-lg-block">
                    <img src="../imagens/Seccao1.png" alt="Hero Image" class="img-fluid desktop-imagem">
                </div>
    
                <!--Content below lg (mobile)-->
                <div class="row d-block d-lg-none text-center" style="margin: auto; margin-left: 15px;">
                    <h1 class="display-1 mb-4" style="color: #0D2C6C;font-size: 60px; font-family: Outfit; font-weight: 600; line-height: 100%;">
                        Become <br> part of <br> something bigger
                    </h1>
                    <p style="line-height: 27.5px; font-size: 20px;">
                        Gain leadership experience <br>and position yourself for success <br> after completing your education!
                    </p>
                </div>
                
                <div class="row d-block d-lg-none ms-auto me-auto mt-5" style="max-width: 100%;">
                    <img src="../imagens/Seccao1.png" class="img-fluid mobile-imagem" alt="Hero Image">
                </div>
            </div>
        </div>
    </section>
    
    <!-- Benefits -->
    <section id="beneficios" class="beneficios" style="background-color: #f5f5f5; max-width: 100%;">
        <div class="beneficios container-fluid">
            <div class = "row mt-5">

                <!-- Content for desktop -->

                <!-- Margin -->
                <div class="col-1 d-none d-lg-block mt-5">
                </div>

                <div class = "col-4 d-none d-lg-block mt-5" >
                    <h2 class = "display-2" style = "font-family: Outfit; color: #0D2C6C; font-weight: bold; line-height: 100%;">
                        Incredible <br> Benefits</h2>
                    <p class="fs-5">Discover the benefits of belonging <br> to this ISACA Student Group</p>
                </div>
                <div class = "card col-2 d-none d-lg-block text-center mt-5" style="margin-right:15px; border: 5px solid #35B390;;padding: 10px;background-color: #f5f5f5;">
                    <i class="bi bi-file-earmark-fill" style="color: #0D2C6C;font-size: 50px;"></i>
                    <h3 class = ""style = "color:#00A6E8;">ONLINE <br> RESOURCES</h3>
                    <p>Online access to the ISACA journal, webcasts, and various resources for education beyond the classroom.</p>
                </div>
                <div class = "card col-2 d-none d-lg-block text-center mt-5" style="margin-right:15px; border: 5px solid #35B390;;padding: 10px;background-color: #f5f5f5;">
                    <i class="bi bi-star-fill" style="color: #0D2C6C;font-size: 50px;" ></i>
                    <h3 style = "color:#00A6E8;">PROFESSIONAL INTERACTIONS</h3>
                    <p>Opportunities to interact with local chapter members for meaningful interactions with professionals.</p>
                </div>
                <div class = "card col-2 d-none d-lg-block text-center mt-5" style="border: 5px solid #35B390;;padding: 10px;background-color: #f5f5f5;">
                    <i class="bi bi-lightbulb-fill" style="color: #0D2C6C;font-size: 50px;"></i>
                    <h3 style = "color: #00A6E8;">COMPETITIVE ADVANTAGES</h3>
                    <p>Knowledge and experience to place students far ahead of the competition when starting their careers.</p>
                </div>

                <!--Margin -->
                <div class="col-1 d-none d-lg-block">
                </div>

                <!--Content below lg (mobile)-->
                <div class="row d-block d-lg-none text-center mt-3" style="margin:auto">
                    <h2 class = "display-2" style = "font-family: Outfit; color: #0D2C6C; font-weight: bold; line-height: 100%;">
                        Incredible <br> Benefits</h2>
                    <p class="fs-5">Discover the benefits of belonging <br> to this ISACA Student Group</p>
                </div>
                <div class="row d-block d-lg-none text-center mt-2" style="border: 5px solid #35B390; max-width: 51%; margin:auto">
                    <i class="bi bi-star-fill" style="color: #0D2C6C;font-size: 30px;" ></i>
                    <h3 style = "color:#00A6E8; font-size: 21px;">ONLINE RESOURCES</h3>
                    <p style = "font-size: 19px;">Online access to the ISACA journal, webcasts, and various resources for education beyond the classroom.</p>
                </div>
                <div class="row d-block d-lg-none text-center mt-5" style="border: 5px solid #35B390; max-width: 51%; margin:auto">
                    <i class="bi bi-star-fill" style="color: #0D2C6C;font-size: 30px;" ></i>
                    <h3 style = "color: #00A6E8; font-size: 21px;">PROFESSIONAL INTERACTIONS</h3>
                    <p style="font-size: 19px;">Opportunities to interact with local chapter members for meaningful interactions with professionals.</p>
                </div>
                <div class="row d-block d-lg-none text-center mb-2 mt-5" style="border: 5px solid #35B390; max-width: 51%; margin:auto">
                    <i class="bi bi-lightbulb-fill" style="color: #0D2C6C;font-size: 30px;"></i>
                    <h3 style = "color: #00A6E8; font-size: 21px;">COMPETITIVE ADVANTAGES</h3>
                    <p style="font-size: 19px;">Knowledge and experience to place students far ahead of the competition when starting their careers.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- About Us -->
    <section id="sobre" class="sobre" style="max-width: 100%;background-color: #f5f5f5;">

        <div class="container-fluid mt-5">
            <div class="row" style="max-width: 100%;">
    
                <!--Content for lg (desktop)-->
                <div class="col-5 d-flex justify-content-end d-none d-lg-block mt-5 mb-5">
                    <img src="../imagens/Seccao2.1.png" alt="About Us Image" class="img-fluid" style="width: 100%; transform: translateX(-2%);">
                </div>
                <div class="col-6 d-flex d-none d-lg-block mt-5">
                    <p style="font-size:22px; color: #35B390; margin-bottom: -5px;">ABOUT US</p>
                    <h2 class="display-2" style="font-family: Outfit; color: #0D2C6C; font-weight: bold; line-height: 100%;">
                        ISACA STUDENT GROUP</h2>
                    <p style="color:#000;font-size: 20px;">It is formed by students attending the ADSAD master's program, the Postgraduate program in Audit, Risk, and SI Control, and the Bachelor's in Management Informatics. The group's goal is to educate and make students aware of emerging trends in IT/SI Audit and Assurance, Security, and IT/SI Governance. The group has the opportunity to participate in everything ISACA organizes.</p>
                    <a class="btn-sobre" href="about_us.php">Learn More</a>
                </div>

                <div class="col-1 d-none d-lg-block">
                </div>
    
                <!--Content below lg (mobile)-->
                <div class="row d-block d-lg-none text-center" style="margin: auto; margin-left: 15px;">
                    <p style="font-size:20px; color: #35B390; margin-bottom: -5px;">ABOUT US</p>
                    <h2 class="display-2" style="font-family: Outfit; color: #0D2C6C; font-weight: bold; line-height: 100%;">
                        ISACA STUDENT GROUP</h2>
                </div>
                <div class="row d-block d-lg-none ms-auto me-auto mt-3">
                    <img src="../imagens/Seccao2.1.png" class="img-fluid" style="max-width: 100%; transform: translateX(-5%);" alt="About Us Image">
                </div>
                <div class="row d-block d-lg-none text-center ms-auto mt-3">
                    <p class="mb-5 mt-4" style="color:#000;font-size: 20px;">It is formed by students attending the ADSAD master's program, the Postgraduate program in Audit, Risk, and SI Control, and the Bachelor's in Management Informatics. The group's goal is to educate and make students aware of emerging trends in IT/SI Audit and Assurance, Security, and IT/SI Governance. The group has the opportunity to participate in everything ISACA organizes.</p>
                    <a class="" href="about_us.php" class="mt-5" style="padding: 15px 25px; border-radius: 47px; background: #70B540; color: #fff; text-decoration: none; text-align: center;">Learn More</a>
                    </p>
                </div>
        
            </div>
        </div>
        
    </section>

    <!-- Statistics -->
    <section id="estatisticas" class="estatisticas mt-5" style="max-width: 100%; background: linear-gradient(180deg, #00A6E8 0%, #70B540 100%);display: flex; justify-content: space-around; padding: 20px 0;">
        <div class="estatisticas" style="background: none;">
            <h3 class="" style="background: none;">170k</h3>
            <p style="background: none;">MEMBERS</p>
        </div>
        <div style="background: none;">
            <h3 class="" style="background: none;">225</h3>
            <p style="background: none;">CHAPTERS <br> AROUND THE WORLD</p>
        </div>
        <div style="background: none;">
            <h3 class="" style="background: none;">190</h3>
            <p style="background: none;">COUNTRIES</p>
        </div>
        <div style="background: none;">
            <h3 class="" style="background: none;">10k</h3>
            <p style="background: none;">SERVED <br> COMPANIES</p>
        </div>
    </section>

    <!-- Certificates -->
    <section id="certificados" class="py-5" style="background-color: #f5f5f5;">
        <div class="container text-center">
            <h2 class="display-2 mt-4" style="font-family: Outfit; color: #0D2C6C; font-weight: bold; line-height: 100%;">CERTIFICATES</h2>
            <p class="fs-3" style="color: #28a745; font-weight: bold;">Are you thinking about earning a certification?</p>
            <p class="fs-5">ISACA offers the best on the market.</p>
    
            <div class="row justify-content-center mt-1 g-4">
                <!-- Card 1 -->
                <div class="col-12 col-sm-6 col-md-4 col-lg-3">
                    <a href="https://www.isaca.org/credentialing/crisc" class="text-decoration-none">
                        <div class="carde p-4">
                            <img src="../imagens/CRISC.png" alt="CRISC Logo" class="img-fluid" style="background-color: #ffffff;">
                            <p class="carde-text mt-3" style="background-color: #ffffff;">
                                The <strong>Certified in Risk and Information Systems Control™</strong> certification demonstrates expertise in identifying and managing enterprise IT risks and implementing and maintaining information system controls.
                            </p>
                            <p class="card-salary" style="color: #28a745; font-weight: bold; font-size: 18px; background-color: #ffffff;">
                                US$151,000+ Annual Average Salary
                            </p>
                        </div>
                    </a>
                </div>
    
                <!-- Card 2 -->
                <div class="col-12 col-sm-6 col-md-4 col-lg-3">
                    <a href="https://www.isaca.org/credentialing/cisa" class="text-decoration-none">
                        <div class="carde p-4">
                            <img src="../imagens/CISA.png" alt="CISA Logo" class="img-fluid" style="background-color: #ffffff;">
                            <p class="carde-text mt-3" style="background-color: #ffffff;">
                                The <strong>Certified Information Systems Auditor®</strong> certification is globally recognized as the standard of excellence for those who audit, control, monitor, and evaluate an organization's information systems and business processes.
                            </p>
                            <p class="card-salary" style="color: #28a745; font-weight: bold; font-size: 18px; background-color: #ffffff;">
                                US$149,000+ Annual Average Salary
                            </p>
                        </div>
                    </a>
                </div>
    
                <!-- Card 3 -->
                <div class="col-12 col-sm-6 col-md-4 col-lg-3">
                    <a href="https://www.isaca.org/credentialing/cgeit" class="text-decoration-none">
                        <div class="carde p-4">
                            <img src="../imagens/CGEIT.png" alt="CGEIT Logo" class="img-fluid" style="background-color: #ffffff;">
                            <p class="carde-text mt-3" style="background-color: #ffffff;">
                                The <strong>Certified in the Governance of Enterprise IT®</strong> certification by ISACA is unique and framework-independent. It is the only IT governance certification that provides the mindset needed to evaluate, design, implement, and manage IT governance systems aligned with business goals.
                            </p>
                            <p class="card-salary" style="color: #28a745; font-weight: bold; font-size: 18px; background-color: #ffffff;">
                                US$141,000+ Annual Average Salary
                            </p>
                        </div>
                    </a>
                </div>
    
                <!-- Card 4 -->
                <div class="col-12 col-sm-6 col-md-4 col-lg-3">
                    <a href="https://www.isaca.org/credentialing/cism" class="text-decoration-none">
                        <div class="carde p-4">
                            <img src="../imagens/CISM.png" alt="CISM Logo" class="img-fluid" style="background-color: #ffffff;">
                            <p class="carde-text mt-3" style="background-color: #ffffff;">
                                The <strong>Certified Information Security Manager®</strong> certification by ISACA demonstrates expertise in information security governance, program development and management, incident management, and risk management.
                            </p>
                            <p class="card-salary" style="color: #28a745; font-weight: bold; font-size: 18px; background-color: #ffffff;">
                                US$149,000+ Annual Average Salary
                            </p>
                        </div>
                    </a>
                </div>
            </div>
    
            <!-- Button :) -->
            <a href="certificates.php" class="cta-button mt-lg-5 mt-3">
                DISCOVER MORE HERE
            </a>
        </div>
    </section>

    <!-- Events -->
    <section id="eventos" class="carousel slide" data-bs-ride="carousel">
            <div class="container text-center">
                <h2 class="display-2 mt-4" style="font-family: Outfit; color: #0D2C6C; font-weight: bold; line-height: 100%;">EVENTS</h2>
                <p class="fs-4 mb-5" style="color: #000;">Are you interested in the topics promoted by ISACA? What are you waiting for?</p>
            </div>
        <div class="d-flex align-items-center mb-5">
            
          <!-- Left Arrow -->
          <button class="carousel-control-prev custom-arrow" type="button" data-bs-target="#eventos" data-bs-slide="prev" style="background-color: transparent !important; border: none;">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
          </button>
      
          <!-- Slides -->
          <div class="carousel-inner w-100">
            <!-- Slide 1 -->
            <div class="carousel-item active">
              <div class="d-flex justify-content-center align-items-center">
                <!-- Poster 1 -->
                <div class="poster-container">
                  <img src="../imagens/Conferencia2024.jpg" class="d-block mx-2" alt="Conference 2024">
                  <div class="poster-overlay">
                    <h3>9th International Conference ISACA Lisbon Chapter</h3>
                    <a href="events.php" class="btn btn-primary">See Details</a>
                  </div>
                </div>
                <!-- Poster 2 -->
                <div class="poster-container">
                  <img src="../imagens/GREENIT.jpeg" class="d-block mx-2" alt="Green IT">
                  <div class="poster-overlay">
                    <h3>Green IT</h3>
                    <a href="events.php" class="btn btn-primary">See Details</a>
                  </div>
                </div>
              </div>
            </div>
      
            <!-- Slide 2 -->
            <div class="carousel-item">
              <div class="d-flex justify-content-center align-items-center">
                <!-- Poster 3 -->
                <div class="poster-container">
                  <img src="../imagens/DLT.jpeg" class="d-block mx-2" alt="Digital Leaders of Tomorrow">
                  <div class="poster-overlay">
                    <h3>Digital Leaders of Tomorrow</h3>
                    <a href="events.php" class="btn btn-primary">See Details</a>
                  </div>
                </div>
                <!-- Poster 4 -->
                <div class="poster-container">
                  <img src="../imagens/AI.jpeg" class="d-block mx-2" alt="Future Event">
                  <div class="poster-overlay">
                    <h3>AI in Public Service</h3>
                    <a href="events.php" class="btn btn-primary">See Details</a>
                  </div>
                </div>
              </div>
            </div>
          </div>
      
          <!-- Right Arrow -->
          <button class="carousel-control-next custom-arrow" type="button" data-bs-target="#eventos" data-bs-slide="next" style="background-color: transparent !important; border: none;">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
          </button>
        </div>
    </section>

    <!-- FAQ -->
    <div class="container mb-5" style="max-width: 1200px;">
        <h2 class="mb-3" style="text-align: center; font-weight: 600; font-size:45px ;color: #0D2C6C; font-family: 'Outfit';">Frequently Asked Questions</h2>
        <div class="accordion" id="faqAccordion">
            <!-- The FAQ content will be inserted here via JavaScript -->
        </div>
    </div>
      
    <footer>
    <?php require('../includes/footeren.php') ?> 
    </footer>

<script>
        // FAQ - data
        const faqData = [
            {
                question: "What is an ISACA Student Group?",
                answer: "ISACA Student Groups (ISGs) are groups that take students beyond traditional education by providing networking, learning through peers or professionals, organizing events, and many other activities.<br><br>The ISACA Student Group of ISCAC aims to enhance and connect ISCAC students to the world of auditing, control, and governance through various dynamic activities."
            },
            {
                question: "Who can participate in the ISACA Student Group?",
                answer: "Any ISCAC student, whether enrolled in a Bachelor's or Master's program, can join the group and work with us!"
            },
            {
                question: "How do I join the group?",
                answer: "To join the group, simply send us a message via our social media or through our contact form <a href='contactos.php'>here</a>."
            },
            {
                question: "What are the benefits of being part of this ISACA Student Group?",
                answer: "Being part of the ISACA Student Group at ISCAC provides opportunities for networking with industry professionals, access to exclusive educational resources, support in preparing for internationally recognized certifications, and practical skill development in governance, auditing, and IT security, helping boost your career in the market."
            }
        ];

        // Render FAQs
        const faqAccordion = document.getElementById('faqAccordion');

        faqData.forEach((faq, index) => {
            const faqItem = document.createElement('div');
            faqItem.classList.add('accordion-item');

            faqItem.innerHTML = `
                <h2 class="accordion-header" id="heading${index}">
                    <button class="accordion-button ${index !== 0 ? 'collapsed' : ''}" type="button" data-bs-toggle="collapse" data-bs-target="#collapse${index}" aria-expanded="${index === 0}" aria-controls="collapse${index}" style="font-family: 'Outfit', sans-serif; font-size: 20px; font-weight:600;">
                        ${faq.question}
                    </button>
                </h2>
                <div id="collapse${index}" class="accordion-collapse collapse ${index === 0 ? 'show' : ''}" aria-labelledby="heading${index}" data-bs-parent="#faqAccordion">
                    <div class="accordion-body" style="font-family: 'Roboto', sans-serif; font-size: 16px;">
                        ${faq.answer}
                    </div>
                </div>
            `;

            faqAccordion.appendChild(faqItem);
        });
</script>


<script src="../js/bootstrap.bundle.min.js"></script>

</body>
</html>
