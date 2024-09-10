<?php
require 'functions.php';
$user = query("SELECT * FROM users")
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

        <!--Container Main start-->
        <div class="wrap bg-light">

            <section id="home">
                <div id="carouselExampleCaptions" class="carousel slide carousel-fade" data-bs-ride="carousel">
                    <div class="carousel-inner gs_reveal">
                        <div class="carousel-item drk active">
                            <img src="img/aeb-2.JPG" class="d-block gbr img-fluid">
                            <div class="carousel-caption">
                                <div class="row no-gutters slider-text2 align-items-center justify-content-center">
                                    <h1 class="quote">WELCOME TO <span>AEB HOME'S</span></h1>
                                    <p class="quote">AEB'21 SOLID AND CLASS FRIENDSHIP </span>
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="carousel-item drk">
                            <img src="img/aeb.jpg" class="d-block gbr img-fluid ">
                            <div class="carousel-caption">
                                <div class="row no-gutters slider-text align-items-center justify-content-center">
                                    <h1 class="quote">Still <span>Introvert</span></h1>
                                    <h1 class="quote">Still <span> The Bad </span></h1>
                                </div>
                            </div>
                        </div>
                        <button class="cntrl carousel-control-prev" type="button"
                            data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
                            <i class='bx bxs-chevron-left-circle carouselbtn'></i>
                            <span class="visually-hidden">Previous</span>
                        </button>
                        <button class="cntrl carousel-control-next" type="button"
                            data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
                            <i class='bx bxs-chevron-right-circle carouselbtn'></i>
                            <span class="visually-hidden">Next</span>
                        </button>
                    </div>
                    <!-- scrolldown -->
                    <a class="text-center" href="#about">
                        <div class="scroll-down"></div>
                    </a>

                </div>
            </section>

            <section id="about" class="about">
                <div class="container pb-3">
                    <div class="container pb-5 px-5 pt-5">
                        <div class="row">
                            <div class="col-md text-md-start">
                                <img class="logoae gs_reveal gs_reveal_fromLeft pt-3" src="">
                            </div>
                            <div class="col-md-7 gs_reveal gs_reveal_fromRight">
                                <h2 class="text-dark quote text-md-end pt-3">Siapa <span class="judul">
                                        AEB'21?</span></h2>
                                <p class="text-dark pt-2 text-md-end">
                                    AEB'21 merupakan kelas yang berisikan 22 orang dan memiliki wali dosen yaitu Sarosa Castrena Abadi,
                                    AEB'21 itu sendiri merupakan salah satu kelas dari jurusan TRMO Polman Bandung angkatan 2021 yang sekarang berubah namanya menjadi 3AEA-2.
                                </p>
                            </div>
                        </div>
                    </div>

                    <div class="container cont-2 px-5">
                        <div class="row">
                            <div class="col-md-7 gs_reveal gs_reveal_fromRight">
                                <h2 class="text-dark quote text-md-start pt-5">Apa visi & misi <span class="judul">
                                        AEB'21?
                                    </span></h2>
                                <p class="text-dark pt-2 text-md-start">
                                    Visi misi voya-voya, iri bilang bos!
                                </p>
                            </div>
                            <div class="col-md pb-5 text-md-end">
                                <img class="logoae gs_reveal gs_reveal_fromLeft pt-5" src="">
                            </div>
                        </div>
                    </div>

                    <div class="container gs_reveal pb-5">
                        <div class="row">
                            <div class="col-6 pt-5 text-center">
                                <i class='icon2 bx bxs-contact'></i>
                                <h2 class="value" count="22"></h2>
                                <h5 class="karla">Anggota</h5>
                            </div>
                            <div class="col-6 pt-5 text-center">
                                <i class='icon2 bx bxs-bank'></i>
                                <h2 class="value" count="2021"></h2>
                                <h5 class="karla">Angkatan</h5>
                            </div>
                            <div class="col-6 pt-5 text-center">
                                <i class='icon2 bx bxs-trophy'></i>
                                <h2 class="value" count="0"></h2>
                                <h5 class="karla">Kejuaran</h5>
                            </div>
                            <div class="col-6 pt-5 text-center">
                                <i class='icon2 bx bxs-flag'></i>
                                <h2 class="value" count="2"></h2>
                                <h5 class="karla">Ter-DO</h5>
                            </div>
                        </div>
                    </div>

                </div>
            </section>
            <section id="history" class="about">
                <div class="parallax">
                    <div class="container pt-4 pb-5 px-5">
                        <div class="row">
                            <div class="col gs_reveal gs_reveal_fromLeft pt-4">
                                <div class="row no-gutters slider-text text-md-start">
                                    <h1 class="quote">20 <span>Agustus</span> <br> <span>20</span>21</h1>
                                </div>
                            </div>
                            <div class="col-md-6 gs_reveal gs_reveal_fromRight">
                                <h2 class="text-white quote text-md-end pt-5">Sejarah <span class="judul">AEB'21</span>
                                </h2>
                                <p class="text-white pt-2 text-md-end">
                                    Isi sendiri dah mager
                                </p>
                            </div>
                        </div>
                    </div>
            </section>
            <section id="division">
                <div class="container gs_reveal gs_reveal_fromRight pt-5 pb-5 px-5">
                    <div class="row">
                        <div class="col pt-5 text-center">
                            <h2 class="text-dark quote text-md-start">Divisi <span class="judul">AEB'21</span>
                            </h2>
                            <p class="text-dark text-md-start">
                                Divisi AEB'21 dibagi menjadi beberapa divisi.
                                yaitu sebagai berikut :</p>
                        </div>
                        <div class="pt-3 col-md-10">
                            <div class="owl-carousel owl-one owl-theme">
                                <div class="block block-1">
                                    <h1 class="text-dark">PDD.</h1>
                                </div>
                                <div class="block block-2">
                                    <h1 class="text-dark">Bendahara.</h1>
                                </div>
                                <div class="block block-3">
                                    <h1 class="text-dark">Sekretaris.</h1>
                                </div>
                                <div class="block block-4">
                                    <h1 class="text-dark">Tim Pukul.</h1>
                                </div>
                                <div class="block block-5">
                                    <h1 class="text-dark">Acara</h1>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <section id="leader">
                <div class="container gs_reveal gs_reveal_fromLeft pt-4 pb-5 px-5">
                    <div class="row">
                        <div class="col-md-8 text-md-start">
                            <div class="featured-carousel owl-carousel">
                                <div class="item">
                                    <div class="work pb-4">
                                        <div class="img d-flex align-items-end justify-content-center"
                                            style="background-image: url(./img/leader.jpg);">
                                            <div class="text w-100">
                                                <span class="cat">KETUA KELAS</span>
                                                <h3><a href="#">ALI BARQI FAIRUZ</a></h3>
                                                <span>Masa jabatan : 2022 s/d 2025</span>
                                                <span>NIM : 221341023</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="item">
                                    <div class="work">
                                        <div class="img d-flex align-items-end justify-content-center"
                                            style="background-image: url(./img/cwk.jpg);">
                                            <div class="text w-100">
                                                <span class="cat">BENDAHARA</span>
                                                <h3><a href="#">HASNA AZKIYA</a></h3>
                                                <span>Masa jabatan : 2021 s/d 2025</span>
                                                <span>NIM : 221341028</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="item">
                                    <div class="work">
                                        <div class="img d-flex align-items-end justify-content-center"
                                            style="background-image: url(./img/cwk.jpg);">
                                            <div class="text w-100">
                                                <span class="cat">SEKRETARIS</span>
                                                <h3><a href="#">KINANTI DYAH H</a></h3>
                                                <span>Masa jabatan : 2022 s/d 2025</span>
                                                <span>NIM : 221341031</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="item">
                                    <div class="work">
                                        <div class="img d-flex align-items-end justify-content-center"
                                            style="background-image: url(./img/leader.jpg);">
                                            <div class="text w-100">
                                                <span class="cat">ANGGOTA</span>
                                                <h3><a href="#">AHMAD ZAKARYA</a></h3>
                                                <span>Masa jabatan : 2021 s/d 2025</span>
                                                <span>NIM : 221341022</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="item">
                                    <div class="work">
                                        <div class="img d-flex align-items-end justify-content-center"
                                            style="background-image: url(./img/leader.jpg);">
                                            <div class="text w-100">
                                                <span class="cat">ANGGOTA</span>
                                                <h3><a href="#">ALIF PRIMA UTAMA</a></h3>
                                                <span>Masa jabatan : 2021 s/d 2025</span>
                                                <span>NIM : 221341024</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="item">
                                    <div class="work">
                                        <div class="img d-flex align-items-end justify-content-center"
                                            style="background-image: url(./img/leader.jpg);">
                                            <div class="text w-100">
                                                <span class="cat">ANGGOTA</span>
                                                <h3><a href="#">HASAN AFANDI</a></h3>
                                                <span>Masa jabatan : 2021 s/d 2025</span>
                                                <span>NIM : 221341027</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="item">
                                    <div class="work">
                                        <div class="img d-flex align-items-end justify-content-center"
                                            style="background-image: url(./img/leader.jpg);">
                                            <div class="text w-100">
                                                <span class="cat">ANGGOTA</span>
                                                <h3><a href="#">IRZA ALIF MIFTAH</a></h3>
                                                <span>Masa jabatan : 2021 s/d 2025</span>
                                                <span>NIM : 221341029</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="item">
                                    <div class="work">
                                        <div class="img d-flex align-items-end justify-content-center"
                                            style="background-image: url(./img/leader.jpg);">
                                            <div class="text w-100">
                                                <span class="cat">ANGGOTA</span>
                                                <h3><a href="#">M. NAUFAL ADIVIANTO</a></h3>
                                                <span>Masa jabatan : 2021 s/d 2025</span>
                                                <span>NIM : 221341033</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="item">
                                    <div class="work">
                                        <div class="img d-flex align-items-end justify-content-center"
                                            style="background-image: url(./img/leader.jpg);">
                                            <div class="text w-100">
                                                <span class="cat">ANGGOTA</span>
                                                <h3><a href="#">M. GIBRAN ARIFIN</a></h3>
                                                <span>Masa jabatan : 2021 s/d 2025</span>
                                                <span>NIM : 221341034</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="item">
                                    <div class="work">
                                        <div class="img d-flex align-items-end justify-content-center"
                                            style="background-image: url(./img/cwk.jpg);">
                                            <div class="text w-100">
                                                <span class="cat">ANGGOTA</span>
                                                <h3><a href="#">NADYA ZAHRA</a></h3>
                                                <span>Masa jabatan : 2021 s/d 2025</span>
                                                <span>NIM : 221341035</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="item">
                                    <div class="work">
                                        <div class="img d-flex align-items-end justify-content-center"
                                            style="background-image: url(./img/leader.jpg);">
                                            <div class="text w-100">
                                                <span class="cat">ANGGOTA</span>
                                                <h3><a href="#">OKTA FERDIANSYAH</a></h3>
                                                <span>Masa jabatan : 2021 s/d 2025</span>
                                                <span>NIM : 221341037</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="item">
                                    <div class="work">
                                        <div class="img d-flex align-items-end justify-content-center"
                                            style="background-image: url(./img/leader.jpg);">
                                            <div class="text w-100">
                                                <span class="cat">ANGGOTA</span>
                                                <h3><a href="#">RAFI TSAQIF</a></h3>
                                                <span>Masa jabatan : 2021 s/d 2025</span>
                                                <span>NIM : 221341038</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="item">
                                    <div class="work">
                                        <div class="img d-flex align-items-end justify-content-center"
                                            style="background-image: url(./img/leader.jpg);">
                                            <div class="text w-100">
                                                <span class="cat">ANGGOTA</span>
                                                <h3><a href="#">RAIHAN SAR</a></h3>
                                                <span>Masa jabatan : 2021 s/d 2025</span>
                                                <span>NIM : 221341039</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="item">
                                    <div class="work">
                                        <div class="img d-flex align-items-end justify-content-center"
                                            style="background-image: url(./img/cwk.jpg);">
                                            <div class="text w-100">
                                                <span class="cat">ANGGOTA</span>
                                                <h3><a href="#">SHIRA ALYAA</a></h3>
                                                <span>Masa jabatan : 2021 s/d 2025</span>
                                                <span>NIM : 221341041</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="item">
                                    <div class="work">
                                        <div class="img d-flex align-items-end justify-content-center"
                                            style="background-image: url(./img/cwk.jpg);">
                                            <div class="text w-100">
                                                <span class="cat">ANGGOTA</span>
                                                <h3><a href="#">AFIFAH RAHMI</a></h3>
                                                <span>Masa jabatan : 2021 s/d 2025</span>
                                                <span>NIM : 221341042</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="item">
                                    <div class="work">
                                        <div class="img d-flex align-items-end justify-content-center"
                                            style="background-image: url(./img/leader.jpg);">
                                            <div class="text w-100">
                                                <span class="cat">ANGGOTA</span>
                                                <h3><a href="#">SATYO SEPTIANTYO</a></h3>
                                                <span>Masa jabatan : 2021 s/d 2025</span>
                                                <span>NIM : 221341043</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="item">
                                    <div class="work">
                                        <div class="img d-flex align-items-end justify-content-center"
                                            style="background-image: url(./img/leader.jpg);">
                                            <div class="text w-100">
                                                <span class="cat">ANGGOTA</span>
                                                <h3><a href="#">TAMIM MUDRIK</a></h3>
                                                <span>Masa jabatan : 2021 s/d 2025</span>
                                                <span>NIM : 221341044</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="item">
                                    <div class="work">
                                        <div class="img d-flex align-items-end justify-content-center"
                                            style="background-image: url(./img/cwk.jpg);">
                                            <div class="text w-100">
                                                <span class="cat">ANGGOTA</span>
                                                <h3><a href="#">TSALIS NAILUL</a></h3>
                                                <span>Masa jabatan : 2021 s/d 2025</span>
                                                <span>NIM : 221341045</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="item">
                                    <div class="work">
                                        <div class="img d-flex align-items-end justify-content-center"
                                            style="background-image: url(./img/cwk.jpg);">
                                            <div class="text w-100">
                                                <span class="cat">ANGGOTA</span>
                                                <h3><a href="#">VANNISA AZZAHRA</a></h3>
                                                <span>Masa jabatan : 2021 s/d 2025</span>
                                                <span>NIM : 221341046</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="item">
                                    <div class="work">
                                        <div class="img d-flex align-items-end justify-content-center"
                                            style="background-image: url(./img/leader.jpg);">
                                            <div class="text w-100">
                                                <span class="cat">ANGGOTA</span>
                                                <h3><a href="#">WIRDYAN DZAKWAN HANIF</a></h3>
                                                <span>Masa jabatan : 2021 s/d 2025</span>
                                                <span>NIM : 221341047</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="item">
                                    <div class="work">
                                        <div class="img d-flex align-items-end justify-content-center"
                                            style="background-image: url(./img/leader.jpg);">
                                            <div class="text w-100">
                                                <span class="cat">ANGGOTA</span>
                                                <h3><a href="#">ZULVAQI HIFZHAN</a></h3>
                                                <span>Masa jabatan : 2021 s/d 2025</span>
                                                <span>NIM : 221341048</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="item">
                                    <div class="work">
                                        <div class="img d-flex align-items-end justify-content-center"
                                            style="background-image: url(./img/leader.jpg);">
                                            <div class="text w-100">
                                                <span class="cat">ANGGOTA</span>
                                                <h3><a href="#">DIKI YUSRIL ILYAS</a></h3>
                                                <span>Masa jabatan : 2022 s/d 2025</span>
                                                <span>NIM : 220341029</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="teks col pt-5 text-center">
                            <h2 class="text-dark quote text-md-end"> <span
                                    class="judul">AEB-21</span>
                            </h2>
                            <p class="text-dark text-md-end">
                                Absensi mahasiswa kelas 3AEA-2 bisa dilihat disebelah sini ya guys!
                            </p>
                            <br>
                            <p class="text-dark text-md-end">
                                ⇦⇦⇦⇦⇦⇦⇦⇦⇦⇦⇦⇦⇦⇦⇦⇦⇦⇦⇦⇦
                            </p>
                        </div>
                    </div>
                </div>
            </section>
            <section id="ae-pustaka" class="about">
                <div class="parallax2">
                    <div class="container pb-3">
                        <div class="container pb-5 px-5 pt-5">
                            <div class="container cont-2 px-5">
                                <div class="row">
                                    <div class="col-md-12 text-center gs_reveal">
                                        <h3 class="text-white quote">Jelajahi Koleksi Kami</h3>
                                    </div>
                                </div>
                                <div class="row pt-3 subject-list">
                                    <div class="col-md-3 text-center">
                                        <div class="subject-box">
                                            <img src="./img/holiday.svg" alt="Robotika" class="subject-image">
                                            <a href="error404.php">
                                                <p class="subject-name">Album -<br>Liburan</p>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="col-md-3 text-center">
                                        <div class="subject-box">
                                            <img src="./img/kkn.svg" alt="Robotika" class="subject-image">
                                            <a href="error404.php">
                                                <p class="subject-name">Album -<br>KKN (Coming Soon)</p>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="col-md-3 text-center">
                                        <div class="subject-box">
                                            <img src="./img/cloud.svg" alt="Robotika" class="subject-image">
                                            <a href="error404.php">
                                                <p class="subject-name">Data -<br>Arsip</p>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="col-md-3 text-center">
                                        <div class="subject-box">
                                            <img src="./img/arsip.svg" alt="Robotika" class="subject-image">
                                            <a href="error404.php">
                                                <p class="subject-name">Dokumen -<br>Arsip</p>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <section id="ae-informasi" class="about bg-light">
                <div class="container pb-3">
                    <div class="container pb-5 px-5 pt-5">
                        <div class="row">
                            <div class="col-md-12 text-center gs_reveal">
                                <h2 class="text-dark quote"><span class="judul">AEB'21</span> Informasi</h2>
                                <p class="text-dark pt-2">
                                    Dapatkan informasi terbaru seputar 3AEA-2, termasuk
                                    berita terkini, acara mendatang, prestasi mahasiswa,
                                    dan ketololan mahasiswa.
                                </p>
                            </div>
                        </div>
                    </div>

                    <div class="container cont-2 px-5">
                        <div class="row">
                            <div class="col-md-12 text-center gs_reveal">
                                <h3 class="text-dark quote">Berita & Pengumuman Terbaru</h3>
                            </div>
                        </div>
                        <div class="row pt-3 info-list">
                            <a class="col-md-3 text-center" href="./detail-information.html">
                                <div class="info-box">
                                    <img src="./img/ean.jpg" alt="Berita 1" class="info-image">
                                    <p class="info-date">(02/07/2024)</p>
                                    <p class="info-title">PELAKU GAY DAGO BANDUNG</p>
                                </div>
                            </a>
                        </div>
                        <div class="row justify-content-center mt-4">
                            <div class="col-md-4 text-center">
                                <div class="info-button">
                                    <a href="./more-information.html" class="btn btn-primary">Lihat Informasi
                                        Lainnya</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <section id="prestation" class="about">
                <div class="parallax2">
                    <div class="container pt-5 pb-5 px-5">
                        <div class="row justify-content-center mb-4">
                            <div class="col-md-7 text-center">
                                <h1 class="mb-3 text-white quote">Apa Kata <span class="judul">Mereka?</span></h1>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="carousel-testimony gs_reveal wl-theme owl-carousel">
                                    <div class="item">
                                        <div class="testimony-wrap py-4">
                                            <div class="icon d-flex align-items-center justify-content-center">
                                                <i class='bx bxs-quote-right'></i>
                                            </div>
                                            <div class="text">
                                                <p class="mb-4">"aku suka sama jul.."
                                                </p>
                                                <div class="d-flex align-items-center">
                                                    <div class="user-img" style="background-image: url(./img/cwk.jpg)">
                                                    </div>
                                                    <div class="ps-3">
                                                        <p class="name">Kinanti Dyah Hapsari</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="item">
                                        <div class="testimony-wrap py-4">
                                            <div class="icon d-flex align-items-center justify-content-center">
                                                <i class='bx bxs-quote-right'></i>
                                            </div>
                                            <div class="text">
                                                <p class="mb-4">"ABADI!"
                                                </p>
                                                <div class="d-flex align-items-center">
                                                    <div class="user-img" style="background-image: url(./img/pp.jpg)">
                                                    </div>
                                                    <div class="ps-3">
                                                        <p class="name">M. Gibran Arifin</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="item">
                                        <div class="testimony-wrap py-4">
                                            <div class="icon d-flex align-items-center justify-content-center">
                                                <i class='bx bxs-quote-right'></i>
                                            </div>
                                            <div class="text">
                                                <p class="mb-4">"Cintai ususmu, makan cumi tiap hari"
                                                </p>
                                                <div class="d-flex align-items-center">
                                                    <div class="user-img" style="background-image: url(./img/leader.jpg)">
                                                    </div>
                                                    <div class="ps-3">
                                                        <p class="name">M. Naufal Adivianto</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="item">
                                        <div class="testimony-wrap py-4">
                                            <div class="icon d-flex align-items-center justify-content-center">
                                                <i class='bx bxs-quote-right'></i>
                                            </div>
                                            <div class="text">
                                                <p class="mb-4">
                                                    "Tetap tegang walau sudah keluar"
                                                </p>
                                                <div class="d-flex align-items-center">
                                                    <div class="user-img" style="background-image: url(./img/pp.jpg)">
                                                    </div>
                                                    <div class="ps-3">
                                                        <p class="name">Ahmad Zakarya</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <section id="video">
                <div class="container pt-5 pb-5 px-5">
                    <div class="row justify-content-center mb-4">
                        <div class="col-md-7 text-center">
                            <h1 class="mb-3 text-dark quote">Our <span class="judul">Moments</span></h1>
                        </div>
                    </div>
                    <div class="row">
                        <div class="text-center embed-responsive">
                            <iframe width="560" height="315" src="https://www.youtube.com/embed/47FWiBOZZsU?si=I7wD1jHQ8LlWDxo8" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
                        </div>
                    </div>
                </div>
            </section>

            <footer class="footer">
                <div class="container px-5">
                    <div class="row">
                        <div class="col-md pt-5 text-md-start">
                            <a href="https://bit.ly/keluarga-aeb21"><img src="img/aeblogos-1.png"></a>
                            <p class="text-white pt-3">AEB merupakan kelas tersolid yang pernah ada boskuh.
                            </p>
                            <ul class="footer-social list-unstyled pt-1">
                                <li class="">
                                    <a class="ig" target="_blank" href="https://www.instagram.com/keluarga.aeb2021/"><i
                                            class='text-white bx bxl-instagram'></i></a>
                                </li>
                                <li class="">
                                    <a class="yt" target="_blank"
                                        href="https://www.youtube.com/watch?v=47FWiBOZZsU&ab_channel=AhmadZakarya"><i
                                            class='text-white bx bxl-youtube'></i></i></a>
                                </li>
                                <li class="">
                                    <a class="email" target="_blank" href="mailto:kelas2aea2@gmail.com"><i
                                            class='text-white bx bxs-envelope'></i></a>
                                </li>
                            </ul>
                        </div>
                        <div class="col-md pt-5 text-md-start">
                            <h4 class="text-white quote">Helpful Links</h4>
                            <ul class="list-unstyled pt-1 text-white">
                                <li class="">
                                    <div class="row">
                                        <div class="col-tulisan">
                                        </div>
                                    </div>
                                </li>
                                <li class="">
                                    <div class="row pt-2">
                                        <!--<div class="col-icon">
                                            <i class='pe-3 footericon bx bx-globe'></i>
                                        </div>
                                        <div class="col-tulisan">
                                            <a target="_blank" href=""
                                                class="ps-2 text-white d-inline-block">
                                                Website POLMAN
                                            </a>
                                        </div>-->
                                    </div>
                                </li>
                                <li class="">
                                    <div class="row pt-2">
                                        <div class="col-icon">
                                            <i class='pe-3 footericon bx bx-sitemap'></i>
                                        </div>
                                        <div class="col-tulisan">
                                            <a target="_blank"
                                                href=""
                                                class="ps-2 text-white d-inline-block">
                                                Organigram 3AEA-2
                                            </a>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </div>
                        <div class="col-md pt-5 text-md-start">
                            <h4 class="text-white quote">Have a Question ?</h4>
                            <ul class="list-unstyled pt-1 text-white">
                                <li class="">
                                    <div class="row">
                                        <div class="col-icon">
                                            <i class='pe-3 footericon bx bxs-map-alt'></i>
                                        </div>
                                        <div class="col-tulisan">
                                            <p class="ps-2">
                                                Jl.Kanayakan No 21,Dago,Bandung
                                            </p>
                                        </div>
                                    </div>
                                </li>
                                <li class="">
                                    <div class="row">
                                        <div class="col-icon">
                                            <i class='pe-3 footericon bx bxs-envelope'></i>
                                        </div>
                                        <div class="col-tulisan">
                                            <p class="ps-2"><a href="mailto:kelas2aea2@gmail.com" class="ps-2 text-white d-inline-block">
                                                    kelas2aea2@gmail.com
                                                </a></p>
                                        </div>
                                    </div>
                                </li>
                                <li class="">
                                    <div class="row">
                                        <div class="col-icon">
                                            <i class='pe-3 footericon bx bx-globe'></i>
                                        </div>
                                        <div class="col-tulisan">
                                            <p class="ps-2">
                                                <a href="https://bit.ly/keluarga-aeb21" class="ps-2 text-white d-inline-block">Keluarga-aeb21</a>
                                            </p>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="credit py-2">
                    <div class="container pt-3 px-5">
                        <p class="">&copy;2024 | Made With <span><i
                                    class='bx bxs-heart'></i></span> By <span class="text-white">KeluargaAEB'21</span>
                        </p>
                    </div>
                </div>
            </footer>
        </div>
        <!--Container Main end-->
        <!--jquery-->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"
            integrity="sha512-bLT0Qm9VnAYZDflyKcBaQ2gg0hSYNQrJ8RilYldYQ1FxQYoCLtUjuuRuZo+fjqhx/qtq/1itJ0C2ejDxltZVFg=="
            crossorigin="anonymous" referrerpolicy="no-referrer"></script>
        <!--gsap-->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.9.1/gsap.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.9.1/ScrollTrigger.min.js"></script>
        <!-- js gue -->
        <script type='text/javascript' src='js/main.js'></script>
        <script src="js/dark-mode-switch.min.js"></script>
        <!--owlcarousel-->
        <script type='text/javascript' src='js/owl.carousel.min.js'></script>
        <!-- bootstrap -->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
        </script>

    </body>
</body>

</html>