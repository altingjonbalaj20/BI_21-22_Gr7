<!DOCTYPE html>
<html lang="en" manifest="firstwebsite.mf">
    <head>
        <meta charset="UTF-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <title>First Website</title>
        <link rel="stylesheet" href="../styles/reset.css" />
        <link rel="stylesheet" href="../styles/default.css" />
        <link rel="stylesheet" href="../styles/firstwebsite/firstwebsite.css" />
    </head>

    <body>
        <?php
            include('../partials/_header.php')
        ?>

        <main class="container">
            <div class="videos">
                <div class="video">
                    <video width="640" autoplay controls>
                        <source src="../resources/video/videoplayback1.mp4" type="video/mp4">
                    </video>
                </div>
                <div class="video">
                    <video width="640" autoplay controls>
                        <source src="../resources/video/videoplayback.mp4" type="">
                    </video>
                </div>
            </div>
            <div class="audios">
                <div class="audio">
                    <audio controls>
                        <source src="../resources/audio/Midnight-Stroll-Lofi-Study-Music.mp3" type="">
                    </audio>
                </div>
                <div class="audio">
                    <audio controls>
                        <source src="../resources/audio/purrple-cat-floating-castle.mp3" type="">
                    </audio>
                </div>
            </div>
        </main>

        <?php
            include('../partials/_footer.php')
        ?>
        <script src="../js/firstwebsite/videocontrolloer.js"></script>
    </body>
</html>
