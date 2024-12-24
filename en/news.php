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
        html, body {
            height: 100%;
            margin: 0;
            display: flex;
            flex-direction: column;
        }
        .content {
            flex: 1;
        }
        .footer {
            position: relative;
            bottom: 0;
            width: 100%;
        }
    </style>
</head>
<body style="background-color: #f5f5f5; font-family: 'Roboto', sans-serif; margin: 0;">

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
                    <a href="news.php" class="nav-link active me-3">News</a>
                    <a href="events.php" class="nav-link me-3">Events</a>
                    <a href="certificates.php" class="nav-link me-3">Certificates</a>
                    <a href="contacts.php" class="nav-link me-3">Contacts</a>
                    <a href="../noticias.php" class="nav-link me-3">
                        <img src="https://flagcdn.com/w40/pt.png" alt="English" style="width: 30px; height: auto;">
                    </a>
                </div>
            </div>
        </nav>
    </header>

    <!-- Content Section -->
    <section class="news-section content mb-5">
        <div class="container">
            <h1 class="mb-3 text-center" style="font-weight: 600; font-size:67px; color: #0D2C6C; font-family: 'Outfit';">News</h1>
            <!-- Mensagem de carregamento -->
            <div id="loading-message" class="text-center">
                <p>Loading news, please wait...</p>
            </div>
            <div id="news-container" class="row row-cols-1 row-cols-md-2 g-4"></div>
        </div>
        <div id="extra-info" class="text-center mt-5" style="display: none;">
            <p style="font-family: 'Roboto', sans-serif; font-size: 20px; color: #0D2C6C;">
                The news we provide has come to an end, but there are many more on ISACA's Official Website!
            </p>
            <a href="https://www.isaca.org/resources/news-and-trends#sort=%40searchdate%20descending&layout=card" target="_blank" style="font-family: 'Roboto', sans-serif; font-size: 20px; color: #00A6E8; text-decoration: underline; font-weight: bold;">
                Visit website
            </a>
        </div>
    </section>

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
    </div>
    <script src="../js/bootstrap.bundle.min.js"></script>

    <script>
        fetch('../scraper.php')
            .then(response => response.json())
            .then(data => {
                let newsHTML = '';
                data.forEach(item => {
                    newsHTML += `
                        <div class="col">
                            <a href="${item.link}" target="_blank" class="news-card text-decoration-none d-flex flex-column flex-lg-row align-items-stretch" 
                               style="border: 1px solid #ddd; border-radius: 10px; overflow: hidden; transition: transform 0.3s ease, box-shadow 0.3s ease; background-color: #fff; text-decoration: none;">
                                <div class="p-2 flex-shrink-0">
                                    <img src="https://www.isaca.org/${item.image}" alt="Imagem da Notícia" 
                                         class="img-fluid" style="width: 100%; max-width: 218px; height: auto; object-fit: cover; border-radius: 5px;" loading="lazy">
                                </div>
                                <div class="news-card-body d-flex flex-column justify-content-between mb-1 p-3">
                                    <h5 class="news-card-title" style="font-family: 'Outfit', sans-serif; font-weight: 700; color: #0D2C6C; margin-bottom: 10px;">
                                        ${item.title}
                                    </h5>
                                    <p class="news-card-text text-muted mb-2" style="font-size: 15px;">
                                        ${item.summary}
                                    </p>
                                    <div class="news-card-text mt-auto" style="color: #07649D; font-weight: 700;">
                                        <span>${item.date}</span>
                                    </div>
                                </div>
                            </a>
                        </div>
                    `;
                });
                document.getElementById('news-container').innerHTML = newsHTML;
                document.getElementById('loading-message').style.display = 'none';
                document.getElementById('extra-info').style.display = 'block';
            })
            .catch(error => {
                console.error('Erro ao carregar notícias:', error);
                document.getElementById('news-container').innerHTML = `
                    <p class="text-danger text-center">Erro ao carregar notícias. Tente novamente mais tarde.</p>
                `;
                document.getElementById('loading-message').style.display = 'none';
            });
    </script>

    <script src="js/bootstrap.bundle.min.js"></script>
</body>
</html>
