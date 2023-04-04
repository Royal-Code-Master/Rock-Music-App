 <?php

    if (isset($_POST['songs'])) {

        $movie_name = $_POST['mname'];
        $song_name = $_POST['sname'];
        $singer = $_POST['singer'];
        $release = $_POST['release'];
        $language = $_POST['language'];
        $song_type = $_POST['song_type'];
        $cover_image = $_FILES['cover']['name'];
        $audio_file = $_FILES['audiofile']['name'];

        // checking file extensions.
        //image file.
        $cover_image_extension = pathinfo($cover_image, PATHINFO_EXTENSION);
        //mp3 file.
        $audio_file_extension = pathinfo($audio_file, PATHINFO_EXTENSION);

        if ($cover_image_extension != "jpg" && $cover_image_extension != "png" && $cover_image_extension != "jpeg") {
            echo "
                <script>alert('Please select images only.')</script>
           ";
        } elseif ($audio_file_extension != "mp3") {
            echo "
                <script>alert('Please select Audion files only.')</script>
           ";
        } else {
            // target uploading.
            $target_folder = "C:/xampp/htdocs/rock/playlist/";
            $target_folder2 = "C:/xampp/htdocs/rock/Coverimg/";

            
            $cover_image_temp = $_FILES['cover']['tmp_name'];
            $file_temp = $_FILES['audiofile']['tmp_name'];

            if (move_uploaded_file($file_temp, $target_folder . $audio_file) && move_uploaded_file($cover_image_temp, $target_folder2 . $cover_image)) {
                echo "
                <script>alert('File uploaded.')</script>
           ";
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
         box-sizing: border-box;
         overscroll-behavior: none;
     }

     nav {
         background-color: rgb(249, 17, 141);
         height: auto;
         width: 100%;
     }

     #head1 {
         color: white;
         margin-top: 5px !important;
         letter-spacing: 2px;
         font-size: 20px;
         font-weight: 800;
         font-family: 'Lobster', cursive;
     }

     form {
         padding: 5px;
         box-shadow: rgba(0, 0, 0, 0.19) 0px 10px 20px, rgba(0, 0, 0, 0.23) 0px 6px 6px;
         max-width: 800px;
         border: 1px solid rgb(249, 17, 141) !important;
         border-radius: 20px;

     }

     .t1 {
         font-family: Verdana, Geneva, Tahoma, sans-serif;
         font-weight: 600;
         padding: 10px;
         color: rgb(249, 17, 141);
         font-family: 'Lobster';
         letter-spacing: 1px;
         font-size: 20px;

     }

     #btn1 {
         background-color: rgb(249, 17, 141) !important;
         color: white;

     }
 </style>


 <body>
     <header>
         <nav class="navbar justify-content-center">
             <p class="text" id="head1">Rock Music</p>
         </nav>
     </header>
     <br>
     <main class="songs mt-5">
         <div class="container upload-song">
             <center>
                 <form action="" method="post" class="form-control mt-5 g-3" enctype="multipart/form-data">
                     <p class="t1 mb-3">Upload Your Favourite Songs</p>

                     <div class="row mt-2">
                         <div class="col-md-6">
                             <input type="text" class="form-control" name="mname" required placeholder="Movie name">
                         </div>
                         <div class="col-md-6">
                             <input type="text" class="form-control" name="sname" required placeholder="Song name">
                         </div>
                     </div>

                     <div class="row mt-2">
                         <div class="col-md-6">
                             <input type="text" class="form-control" name="singer" required placeholder="Singer name">
                         </div>
                         <div class="col-md-6">
                             <input type="text" class="form-control" name="release" required placeholder="Release Date">
                         </div>
                     </div>

                     <div class="row mt-2">
                         <div class="col-md-6">
                             <input type="text" class="form-control" name="language" required placeholder="Song Language">
                         </div>
                         <div class="col-md-6">
                             <select class="form-select" name="song_type" id="">
                                 <option>Select one</option>
                                 <option value="">Cassic</option>
                                 <option value="">DJ</option>
                                 <option value="">Trending</option>
                             </select>
                         </div>
                     </div>

                     <div class="row mt-2">
                         <div class="col-md-6">
                             <label for="" class="form-label">Song cover image</label>
                             <input type="file" class="form-control" name="cover" required>
                         </div>
                         <div class="col-md-6">
                             <label for="" class="form-label">Song Audio file</label>
                             <input type="file" class="form-control" name="audiofile" required>
                         </div>
                     </div>
                     <br>
                     <button type="submit" class="btn mb-3" id="btn1" name="songs">Upload Song</button>
                 </form>
                 <br>
             </center>
         </div>
     </main>

 </body>

 </html>