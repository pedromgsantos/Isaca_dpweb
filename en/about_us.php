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
                    <a href="about_us.php" class="nav-link active me-3">About&nbsp;Us</a>
                    <a href="news.php" class="nav-link me-3">News</a>
                    <a href="events.php" class="nav-link me-3">Events</a>
                    <a href="certificates.php" class="nav-link me-3">Certificates</a>
                    <a href="contacts.php" class="nav-link me-3">Contacts</a>
                    <a href="../sobre_nos.php" class="nav-link me-3">
                        <img src="https://flagcdn.com/w40/pt.png" alt="English" style="width: 30px; height: auto;">
                    </a>
                </div>
            </div>
        </nav>
    </header>

    <!--Who are we-->
    <div>
        <h1 style="text-align: center; font-weight: 600; font-size:67px ;color: #0D2C6C; font-family: 'Outfit';">Who Are We?</h1>
    </div>

    <!-- Content -->
    <div class="container-fluid">
        <div class="row">
            <!--Empty column up to lg, serves as "margin"-->
            <div class="col-1 d-none d-lg-block">
            </div>

            <!--Image up to lg-->
            <div class="col-5 d-none d-lg-block mt-5">
                <img src="../imagens/pessoas.jpg" class="img-fluid" style="width: 100%;" alt="ISACA Student Group ISCAC Members">
            </div>  

            <!--Text up to lg-->
            <div class="col-5 mt-5 d-none d-lg-block">
                <p style="line-height: 27.5px;" class="mt-4 ms-4 fs-5">
                    The ISACA Student Group of ISCAC (ISG-ISCAC) is composed of students from Management Informatics, Master's in Business and Public Auditing, Master's in Management Information Systems, and Postgraduate in Information Systems Audit, Risk, and Control. <br>
                    Any student can join the ISG-ISCAC as long as they have an interest in these topics. <br>
                    There have been collaborations from students of the Business Management, Accounting, and Auditing Bachelor's programs. ISG-ISCAC is open to all students.
                </p>
            </div>

            <!--2 empty columns up to lg-->
            <div class="col-1 d-none d-lg-block">
            </div>

            <!--Content below lg (for mobile)-->
            <div class="row d-block d-lg-none ms-auto me-auto mt-5">
                <img src="../imagens/pessoas.jpg" class="img-fluid" width="100%" alt="">
            </div>
            <div class="row d-block d-lg-none ms-auto me-auto mt-5">
                <p style="line-height: 27.5px; font-size: 16px;">
                    The ISACA Student Group of ISCAC (ISG-ISCAC) is composed of students from Management Informatics, Master's in Business and Public Auditing, Master's in Management Information Systems, and Postgraduate in Information Systems Audit, Risk, and Control. <br>
                    Any student can join the ISG-ISCAC as long as they have an interest in these topics. <br>
                    There have been collaborations from students of the Business Management, Accounting, and Auditing Bachelor's programs. ISG-ISCAC is open to all students.
                </p>
            </div>
        </div>
        <!--LARGE IMAGE-->
        <div class="row">
            <!--2 empty columns-->
            <div class="col-2 d-none d-lg-block">
            </div>

            <div class="col mb-5">
                <img src="imagens/sei_la_num.svg" class="img-fluid" style="width: 100%;" alt="">
            </div>
            <div class="col-2 d-none d-lg-block">
            </div>
        </div>
    </div>  

    <!-- ISACA BABY -->
    <div id="hino" class="estatisticas" style="height: auto; width: 100%; background-size: cover; background: rgb(15,105,160); background: linear-gradient(35deg, rgba(15,105,160,1) 0%, rgba(23,71,122,1) 15%, rgba(29,45,92,1) 30%, rgba(29,45,92,1) 60%, rgba(39,93,112,1) 85%, rgba(55,131,114,1) 100%);display: flex; flex-wrap: wrap; justify-content: center; align-items: center; padding: 20px 0;">
        <div style="text-align: center; margin: 10px; flex: 1 1 300px; max-width: 600px; background: none;">
            <h2 class="display-3 mb-4" style="text-align: center; font-weight: 600; color: #ffffff; font-family: 'Outfit'; background: none;">And there's much more!</h2>
            <h2 class="display-3 " style="text-align: center; font-weight: 600; color: #ffffff; font-family: 'Outfit'; background: none;">ISACA even has its own anthem.</h2>
            <p style="line-height: 1.5; background: none;" class=" fs-5 mt-3 ms-4 fs-5">
                What other organization has an anthem?
            </p>
        </div>
        <div style="display: flex; justify-content: center; align-items: center; margin: 10px; flex: 1 1 300px; max-width: 600px; background: none;">
            <iframe width="100%" height="315" src="https://www.youtube.com/embed/qBshpf-ZpD4" 
                title="YouTube video player" frameborder="0" 
                allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" 
                allowfullscreen>
            </iframe>
        </div>
    </div>

    <!-- Still have doubts? -->
    <div style="color: #35B390;" class = "mt-5 ">
        <h1 style="text-align: center; font-weight: bolder; font-size:57px ;">STILL HAVE DOUBTS?</h1>
    </div>
    <div style="text-align: center;" class="button mb-5">
        <a href="contacts.php" class="cta-button">
            CONTACT US
        </a>
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
    </div>
    
    <script src="../js/bootstrap.bundle.min.js"></script>

</body>
</html>