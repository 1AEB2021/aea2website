<?php
session_start();

if( !isset($_SESSION["login"])){
    header("Location: login.php");
    exit;
}
?>

<!doctype html>
<html lang="en">

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
                <br>            
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
        <!--Container Main start-->
        <div class="bg-light">
            <div class="container errpage px-5">
                <div class="row">
                    <div class="col-md pt-md-5">
                        <h1 class="errtitle">404</h1>
                        <h5 class="pb-4 errtext">Looks like this page is missing. Dont worry though, our best man is on
                            the
                            case.</h5>
                        <a href="#">
                            <button type="button" class=" btn-md btn btn-primary">BACK TO HOME</button>
                        </a>
                    </div>
                    <div class="col-md-8 text-md-end">
                        <img class="err404" src="img/14.png" alt="ERROR 404">
                    </div>
                </div>
            </div>
        </div>
        <!--Container Main end-->
        <script src="js/dark-mode-switch.min.js"></script>
        <!-- bootstrap -->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
        </script>
        <script type='text/javascript'>
            document.addEventListener("DOMContentLoaded", function (event) {

                const showNavbar = (toggleId, navId, bodyId, headerId) => {
                    const toggle = document.getElementById(toggleId),
                        nav = document.getElementById(navId),
                        bodypd = document.getElementById(bodyId),
                        headerpd = document.getElementById(headerId)

                    // Validate that all variables exist
                    if (toggle && nav && bodypd && headerpd) {
                        toggle.addEventListener('click', () => {
                            // show navbar
                            nav.classList.toggle('show')
                            // change icon
                            toggle.classList.toggle('bx-x')
                            // add padding to body
                            bodypd.classList.toggle('body-pd')
                            // add padding to header
                            headerpd.classList.toggle('header-pd')
                        })
                    }
                }

                showNavbar('header-toggle', 'nav-bar', 'body-pd', 'header')

                /*===== LINK ACTIVE =====*/
                const linkColor = document.querySelectorAll('.nav_link')

                function colorLink() {
                    if (linkColor) {
                        linkColor.forEach(l => l.classList.remove('active'))
                        this.classList.add('active')
                    }
                }
                linkColor.forEach(l => l.addEventListener('click', colorLink))

                // Your code to run since DOM is loaded and ready
            });
        </script>
        <script>
            var preloader = document.getElementById("loading");

            function load() {
                preloader.style.display = 'none';
            }
        </script>
        <script>
            var moon = document.querySelector('.btn-moon');
            var sun = document.querySelector('.btn-sun');

            document.getElementById("darkSwitch").addEventListener("click", function () {
                moon.classList.toggle('d-none');
                sun.classList.toggle('d-none');
            });
        </script>
        <script>
            // account settings 

            var user_button = document.querySelector('.bxs-user-circle');
            var settings_account = document.querySelector('.settings_account');

            user_button.addEventListener("click", function () {
                settings_account.classList.toggle('d-none');
            })
        </script>
    </body>

</html>