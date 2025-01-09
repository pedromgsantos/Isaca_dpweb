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
    <link rel="stylesheet" href="../css/styles.css">
    <style>
        body {
            font-family: 'Roboto';
            overflow-x: hidden;
        }

        
    </style>
</head> 
<body style = "height: 1000px;background-color: #f5f5f5; max-width: 100%;" >

    <!--Header-->
    <?php
    $portuguese_page = "../sobre_nos.php";
    require('../includes/headeren.php') 
    ?>

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
                <img src="../imagens/sei_la_num.svg" class="img-fluid" style="width: 100%;" alt="">
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

    <!-- Footer -->
    <footer>
    <?php require('../includes/footeren.php') ?> 
    </footer>
    
    <script src="../js/bootstrap.bundle.min.js"></script>

</body>
</html>