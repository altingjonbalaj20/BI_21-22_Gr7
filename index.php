<!DOCTYPE html>
<html lang="en" manifest="index.mf">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="./styles/reset.css" />
    <link rel="stylesheet" href="./styles/default.css" />
    <link rel="stylesheet" href="./styles/main/style.css" />
    <link rel="stylesheet" href="./js/slick/slick.css" />
    <title>Photoart</title>
</head>
<style>
    * {
        margin: 0;
        padding: 0;
        box-sizing: border-box;
    }
</style>

<body style="background-color: #050505">
    <?php
    include('./partials/_header.php')
    ?>
    <main class="container">
        <div class="carusel">
            <div class="arrows">
                <img src="./img/Left arrow.svg" class="prev-btn" alt="" />
                <img src="./img/Right arrow.svg" class="next-btn" alt="" />
            </div>
            <div class="carusel-content">
                <div class="carusel-body">
                    <img src="./img/carusel-1.jfif" alt="" />
                    <div class="carusel-info">
                        <h2>Heyy Llama</h2>
                        <br />
                        <p>
                            Lorem ipsum dolor, sit amet consectetur adipisicing elit.
                            Deleniti nihil, placeat incidunt sequi nam earum corporis sit
                            reiciendis autem id voluptate? Eaque animi, consequuntur
                            nesciunt doloribus earum impedit itaque quaerat?
                        </p>
                        <a href="#">Read More</a>
                    </div>
                </div>
                <div class="carusel-body">
                    <img src="./img/carusel-2.jfif" alt="" />
                    <div class="carusel-info">
                        <h2>Heyy ALbinisi</h2>
                        <br />
                        <p>
                            Lorem ipsum dolor, sit amet consectetur adipisicing elit.
                            Deleniti nihil, placeat incidunt sequi nam earum corporis sit
                            reiciendis autem id voluptate? Eaque animi, consequuntur
                            nesciunt doloribus earum impedit itaque quaerat?
                        </p>
                        <a href="#">Read More</a>
                    </div>
                </div>
                <div class="carusel-body">
                    <img src="./img/carusel-3.jfif" alt="" />
                    <div class="carusel-info">
                        <h2>Heyy Shpati</h2>
                        <br />
                        <p>
                            Lorem ipsum dolor, sit amet consectetur adipisicing elit.
                            Deleniti nihil, placeat incidunt sequi nam earum corporis sit
                            reiciendis autem id voluptate? Eaque animi, consequuntur
                            nesciunt doloribus earum impedit itaque quaerat?
                        </p>
                        <a href="#">Read More</a>
                    </div>
                </div>
            </div>
        </div>
    </main>
    <div class="container sm-photos">
        <div class="sm-photo">
            <div class="title-photo">
                <h2>Sport Photography</h2>
            </div>
            <div class="photo">
                <a href="https://antoinesoto.com/photolux/wp-content/uploads/2012/07/balls.jpg" target="_blank">
                    <img src="https://antoinesoto.com/photolux/wp-content/uploads/2012/07/balls.jpg" alt="" />
                </a>
            </div>
        </div>
        <div class="sm-photo">
            <div class="title-photo">
                <h2>Wedding Photography</h2>
            </div>
            <div class="photo">
                <a href="https://antoinesoto.com/photolux/wp-content/uploads/2012/07/balls.jpg" target="_blank">
                    <img src="https://antoinesoto.com/photolux/wp-content/uploads/2012/07/balls.jpg" alt="" />
                </a>
            </div>
        </div>
        <div class="sm-photo">
            <div class="title-photo">
                <h2>Active Photography</h2>
            </div>
            <div class="photo">
                <a href="https://antoinesoto.com/photolux/wp-content/uploads/2012/07/balls.jpg" target="_blank">
                    <img src="https://antoinesoto.com/photolux/wp-content/uploads/2012/07/balls.jpg" alt="" />
                </a>
            </div>
        </div>
    </div>
    <?php
        include('./partials/_footer.php')
    ?>
    <!-- Scripts -->
    <script src="./js/app.js"></script>
    <script type="text/javascript" src="//code.jquery.com/jquery-1.11.0.min.js"></script>
    <script type="text/javascript" src="//code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
    <script type="text/javascript" src="./js/slick/slick.min.js"></script>
    <script>
        $(document).ready(function() {
            $(".carusel-content").slick({
                dots: false,
                infite: true,
                speed: 500,
                fade: true,
                cssEase: "linear",
                prevArrow: $(".prev-btn"),
                nextArrow: $(".next-btn"),
            });
        });
    </script>
</body>

</html>