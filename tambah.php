<?php
session_start();

if( !isset($_SESSION["login"])){
    header("Location: login.php");
    exit;
}
require 'functions.php';
if (isset($_POST["submit"])) {
    $name = $_POST["name"];
    $jabatan = $_POST["jabatan"];
    $masajabatan = $_POST["masajabatan"];
    $nim = $_POST["nim"];

    if (tambah($_POST) > 0) {
        echo "
        <script>
        alert('data berhasil ditambahkan');
        document.location.href = ' tambah.php'; 
        </script> ";
    } else {
        echo "Data Gagal Ditambahkan!";
    }
}
?>

<!doctype html>
< lang="en">

<head>
    <meta charset='utf-8'>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <!-- title page -->
    <title>Tambah Anggota - Keluarga AEB'21</title>
    <!-- bootstrap 5 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <!-- favicon -->
    <link rel="shortcut icon" href="img/aeblogos-2.png">
    <!-- css custom -->
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
        href="https://fonts.googleapis.com/css2?family=Karla:ital,wght@0,200;0,300;0,400;0,500;0,600;0,700;0,800&display=swap"
        rel="stylesheet">
</head>

<body>

    <body onload="load()" id="body-pd">
        <!-- loading background-->
        <div class="bg-light" id="loading">
            <img class="heartbeat" src="img/aeblogos-2.png">
        </div>
        <header class="header" id="header">
            <div class="header_toggle">
                <i class='bx bx-menu' id="header-toggle"></i>
            </div>
            <div class="row pe-2">
                <div class="col pe-3 text-center">
                    <a class="">
                        <span class="buttondark">
                            <label class="switch" for="darkSwitch">
                                <input type="checkbox" id="darkSwitch">
                                <div class="darktogel">
                                    <i class='btn-moon bxs-moon bx nav_icon'></i>
                                    <i class='btn-sun bxs-sun d-none bx nav_icon'></i>
                                </div>
                            </label>
                        </span>
                    </a>
                </div>
                <div class="col text-center">
                    <i class='bx bxs-user-circle'></i>
                    <!-- <div class="header_img"> <img src="img/pp.jpg" alt=""> </div> -->
                </div>
            </div>
        </header>
        <div class="l-navbar" id="nav-bar">
            <nav class="nav">
                <div> <a href="#" class="img_logo">
                        <img src="img/aeblogos-2.png">
                        <span class="nav_logo-name">
                            <img src="img/aeblogos-1.png">
                        </span> </a>
                    <div class="nav_list">
                        <a href="#" class="nav_link active"> <i class='bx bx-home nav_icon'></i></i>
                            <span class="nav_name">Home</span></a>
                        <a href="#about" class="nav_link"> <i class='bx bx-info-circle nav_icon'></i></i>
                            <span class="nav_name">About</span> </a>
                        <a href="#history" class="nav_link">
                            <i class='bx bx-time nav_icon'></i></i> <span class="nav_name">History</span></a>
                        <a href="#division" class="nav_link"><i class='bx bxs-network-chart nav_icon'></i></i> <span
                                class="nav_name">Division</span> </a>
                        <a href="#leader" class="nav_link"> <i class='bx bxs-user-account nav_icon'></i><span
                                class="nav_name">Membership</span> </a>
                        <a href="#ae-pustaka" class="nav_link"> <i class='bx bxs-book nav_icon'></i>
                            <span class="nav_name">AEB-Pustaka</span></a>
                        <a href="#ae-informasi" class="nav_link"> <i class='bx bxs-info-square nav_icon'></i>
                            <span class="nav_name">AEB-Informasi</span></a>
                        <a href="./contact-form.html" class="nav_link"> <i
                                class='bx bxs-phone nav_icon'></i>Contact</span></a>

                    </div>
                </div>
                <a href="#" class="nav_link">
                    <i class='bx bx-log-in nav_icon'></i>
                    <span class="nav_name">Login</span>
                </a>
            </nav>
        </div>

        <div class="settings_account bg-light px-3 py-2 text-center d-none">
            <ul classs="list-unstyled">
                <li>
                    <i class='text-dark bx bxs-user-circle'></i>
                    <h2 class="text-dark">Guest</h2>
                </li>
                <li>
                    <p class="text-dark">You are not logged in!, Please Login</p>
                </li>
                <li>
                    <a href="login.php"><button class="btn btn-primary">Login</button></a>
                </li>
                <li>
                    <p>or</p>
                </li>
                <li>
                    <a href="registrasi.php"><button class="btn btn-primary">Sign Up</button></a>
                </li>
            </ul>
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
                    <a href="index.php"><button type="submit" name="submit" class="btn btn-primary">
                            << /button></a>
                    <div class="card">
                        <div class="card-body">
                            <h3 class="card-title text-center">Tambahkan Data</h3>
                            <!-- Form Tambah data -->
                            <form action="" method="post">
                                <ul>
                                    <li>
                                        <label for="jabatan" class="form-label">Jabatan : </label>
                                        <input type="text" name="jabatan" id="jabatan" class="form-control" required>
                                    </li>
                                </ul>
                                <ul>
                                    <li>
                                        <label for="name" class="form-label">Nama : </label>
                                        <input type="text" name="name" id="name" class="form-control" required>
                                    </li>
                                </ul>
                                <ul>
                                    <li>
                                        <label for="masajabatan" class="form-label">Masa Jabatan : </label>
                                        <input type="int" name="masajabatan" id="masajabatan" class="form-control" required>
                                    </li>
                                </ul>
                                <ul>
                                    <li>
                                        <label for="nim" class="form-label">NIM : </label>
                                        <input type="int" name="nim" id="nim" class="form-control" required>
                                    </li>
                                </ul>
                                <button type="submit" name="submit" class="btn btn-primary">Tambah Data</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>


        <!-- Bootstrap JS -->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>
        <!-- Custom JavaScript -->
        <script>
            document.getElementById('loginForm').addEventListener('submit', function(event) {
                // Ambil nilai email dan password
                var email = document.getElementById('email').value;
                var password = document.getElementById('password').value;

                // Validasi sederhana
                if (email === '' || password === '') {
                    alert('Email dan Password harus diisi!');
                    event.preventDefault(); // Mencegah form dikirim
                }
            });

            // Contoh untuk menampilkan panel "Guest" jika belum login
            document.addEventListener('DOMContentLoaded', function() {
                // Asumsikan pengguna belum login
                var isLoggedIn = false;

                if (!isLoggedIn) {
                    document.getElementById('settingsAccount').classList.remove('d-none');
                }
            });
        </script>
    </body>
</body>

</html>