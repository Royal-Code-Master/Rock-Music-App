<?php

include '../connection.php';

session_start();
if (!isset($_SESSION['logged_in']) || $_SESSION['logged_in'] !== true) {
    header("Location: ./home.php");
    exit();
}



?>


<!DOCTYPE html>
<html lang="en">

<head>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css">

    <!-- bootstrap js -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>

    <link rel="shortcut icon" href="https://w7.pngwing.com/pngs/594/662/png-transparent-music-app-icon-mobile-launcher-icon-music-symbol-icon-pink-pink-music.png" type="image/x-icon">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Music Player | Songs</title>

</head>

<style>
    @import url('https://fonts.googleapis.com/css2?family=Alkatra:wght@700&family=Fasthand&family=Lobster&display=swap');

    * {

        padding: 0;
        margin: 0;

    }

    body {
        box-sizing: border-box;
        overscroll-behavior: none;
    }

    nav {
        background-color: rgb(249, 17, 141);
        height: auto;
        width: 100%;
    }

    #head1 {
        text-decoration: none;
        color: white;
        margin-top: 5px !important;
        letter-spacing: 2px;
        font-size: 20px;
        font-weight: 800;
        font-family: 'Lobster', cursive;
    }

    .col-sm-2 {
        max-width: 800px;
        background-color: rgb(249, 17, 141);
        padding: 10px;
        margin: 10px;
        border-radius: 20px;
    }

    .fa {
        color: white;
    }

    .t1 {
        font-size: 10px;
        color: rgb(249, 17, 141);
    }
</style>


<body>
    <header>
        <nav class="navbar justify-content-center">
            <p class="text" id="head1">Rock Music</p>
        </nav>
    </header>

    <main class="songs mt-5">
        <div class="portal">
            <center><br><br>
                <div class="container p-3">
                    <div class="details">
                        <div class="row mb-3 p-2 g-2 justify-content-center">
                            <div class="col-sm-2">
                                <a href="./portal.php">
                                    <i class="fa fa-home fa-4x p-3"></i>
                                </a>
                            </div>
                            <div class="col-sm-2">
                                <a href="../index.php">
                                    <i class="fa fa-music fa-4x p-3"></i>
                                </a>
                            </div>
                            <div class="col-sm-2">
                                <a href="./upload.php">
                                    <i class="fa fa-cloud-upload fa-4x p-3"></i>
                                </a>
                            </div>
                            <div class="col-sm-2">
                                <a href="./logout.php">
                                    <i class="fa fa-sign-out fa-4x p-3"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>

                <strong class="t1">Design & Developed by Eswar.</strong>
            </center>
        </div>
    </main>

</body>

</html>