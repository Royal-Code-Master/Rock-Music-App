<?php

include '../connection.php';

if (isset($_SESSION['logged_in']) && $_SESSION['logged_in'] == true) {
    header("Location: ./pages/board.php");
    exit();
} else {

    if (isset($_POST['signin'])) {
        $user_name = $_POST['user_name'];
        $user_password = $_POST['user_password'];

        $login_query = "SELECT * from adminlogin where username ='$user_name'";
        $result = mysqli_query($con, $login_query);
        $row_data = mysqli_fetch_array($result, MYSQLI_ASSOC);

        if ($user_name == $row_data['username'] && $user_password == $row_data['passwords']) {
            // session checking
            $_SESSION['logged_in'] = true;
            $_SESSION['user_name'] = $user_name;

            header('Refresh: 1; ./board.php');
            exit();
        }
    }
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

        height: 90vh;
        background-position: center;
        background-image: url('../imgs/bg.jpg');
        background-size: cover;
        background-repeat: no-repeat;
        box-sizing: border-box;
        overscroll-behavior: none;

    }

    form {
        box-shadow: rgba(0, 0, 0, 0.3) 0px 19px 38px, rgba(0, 0, 0, 0.22) 0px 15px 12px;
        border-radius: 10px !important;
        max-width: 320px;
        padding: 5px;
        border: 2px solid rgb(249, 17, 141) !important;
    }

    h6 {
        color: rgb(249, 17, 141);
        margin-top: 5px !important;
        letter-spacing: 2px;
        font-size: 20px;
        font-weight: 800;
        font-family: 'Lobster', cursive;
    }

    label {
        color: rgb(249, 17, 141);
        text-align: left;
        font-weight: 600;
        text-transform: capitalize;
    }

    input {
        font-weight: 500 !important;
        text-align: center;
        color: rgb(249, 17, 141) !important;
        margin-top: 3px !important;
        border-radius: 20px !important;
        border: 1px solid rgb(249, 17, 141) !important;
    }

    ::placeholder {
        color: gray;
        text-align: left;
        font-family: system-ui, -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif;
    }

    button {
        background-color: rgb(249, 17, 141) !important;
        text-align: center;
        color: white !important;
        border: 3px solid rgb(249, 17, 141);
    }

    .t1 {
        font-size: 10px;
        color: rgb(249, 17, 141);
    }
</style>


<body>
    <div class="login-page">
        <div class="container"><br><br>
            <center>
                <form action="" method="post" class="form-control mt-5">
                    <div class="row p-2 mb-3 mt-2">
                        <i class="fa fa-music fa-3x mb-3" style="color:rgb(249, 17, 141); padding: 5px;"></i>
                        <h6>Rock Music</h6>
                    </div>
                    <div class="row p-2">
                        <label for="">email</label>
                        <input type="text" name="user_name" id="" class="form-control" placeholder="email" required>
                    </div>
                    <div class="row p-2 mt-2">
                        <label for="">password</label>
                        <input type="text" name="user_password" id="" class="form-control" placeholder="password" required>
                    </div>
                    <div class="row p-2 mt-3 mb-4">
                        <button type="submit" class="btn form-control" name="signin">Signin</button>
                    </div>
                    <hr>
                    <strong class="t1">Designed by Eswar.</strong>
                </form>
            </center>
        </div>
    </div>
</body>

</html>