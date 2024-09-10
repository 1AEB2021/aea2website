<?php
require 'functions.php';

if (isset($_POST["register"])) {
    $result = mysqli_query($conn, "SELECT * FROM registrasi where username = '$username' and password= '$password'");

    if (registrasi($_POST) > 0) {
        echo '<script>alert("Berhasil Mendaftar! Selamat Datang, '.$_POST['username'].'");
        location.href="indexadm.php";</script>';
    } else {
        echo mysqli_error($conn);
    }
}
?>

<!doctype html>
<html lang="en">

<head>
    <meta charset='utf-8'>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <!-- title page -->
    <title>Keluarga AEB'21</title>
    <!-- bootstrap 5 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <!-- <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css"> -->
    <!-- favicon -->
    <link rel="shortcut icon" href="img/aeblogos-2.png">
    <!-- css gue -->
    <link href="css/style.css" rel="stylesheet">
    <link rel="stylesheet" href="css/dark-mode.css">
    <!-- icon from boxicon -->
    <link href='https://cdn.jsdelivr.net/npm/boxicons@latest/css/boxicons.min.css' rel='stylesheet'>
    <!-- font spectral-->
    <link
        href="https://fonts.googleapis.com/css2?family=Spectral:ital,wght@0,200;0,300;0,400;0,500;0,700;0,800;1,200;1,300;1,400;1,500;1,700&display=swap"
        rel="stylesheet">
    <!-- font karla -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Karla:ital,wght@0,200;0,300;0,400;0,500;0,600;0,700;0,800;1,200;1,300;1,400;1,500;1,600;1,700;1,800&display=swap"
        rel="stylesheet">
    <!-- owlcarousel -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css"
        integrity="sha512-tS3S5qG0BlhnQROyJXvNjeEM4UpMXHrQfTGmbQ1gKmelCxlSEBUaxhRBj/EFTzpbP4RVSrpEikbmdJobCvhE3g=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <style>
        #loading {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background-color: #fff;
            display: flex;
            justify-content: center;
            align-items: center;
            z-index: 9999;
        }
    </style>
</head>

<body>

    <body onload="load()" id="body-pd">
        <!-- loading background-->
        <div class="bg-light" id="loading">
            <img class="heartbeat" src="img/aeblogos-2.png">
        </div>
        <!--BUTON TO UP-->
        <a onclick="topFunction()">
            <div id="myBtn" class="scroll-up text-center butonUP">
                <span>
                    <i class='text-white pt-2 bx bx-up-arrow-alt'></i>
                </span>
            </div>
        </a>
        <div class="container mt-5">
            <div class="row justify-content-center">
                <div class="col-md-6">
                    <div class="card">
                        <div class="card-body">
                            <a href="index.php">
                                <img src="./img/backbutton.svg" alt="back button" class="subject-image">
                            </a>
                            <h3 class="card-title text-center">Selamat Datang!</h3>
                            <!-- Form Regiter -->
                            <form action="" method="post">
                                <ul>
                                    <li>
                                        <label for="username" class="form-label">Username : </label>
                                        <input type="text" name="username" id="username" class="form-control" required>
                                    </li>
                                </ul>
                                <ul>
                                    <li>
                                        <label for="password1" class="form-label">Password : </label>
                                        <input type="password" name="password1" id="password1" class="form-control" required>
                                    </li>
                                </ul>
                                <ul>
                                    <li>
                                        <label for="confirm_password" class="form-label">Konfirmasi Password : </label>
                                        <input type="password" name="confirm_password" id="confirm_password" class="form-control" required>
                                    </li>
                                </ul>
                                <button type="submit" name="register" class="btn btn-primary">Sign Up</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <script>
            function load() {
                document.getElementById('loading').style.display = 'none';
            }
        </script>
    </body>
</body>

</html>