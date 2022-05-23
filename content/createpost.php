<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Create Post</title>
    <link rel="stylesheet" href="../styles/reset.css" />
    <link rel="stylesheet" href="../styles/default.css">
    <link rel="stylesheet" href="css/post.css">
</head>

<body>
    <?php
    include("../partials/_header.php");
    ?>
    <?php
    require_once('../database/database.php');
    $db = new Database();
    ?>
    <main>
        <div class="container">
            <div class='photo-container'>
                <figure>
                    <img src='../img/fourthwebsite/image.jpeg' alt='gallery image' srcset='' width='240px' height='240px' />
                </figure>
            </div>
            <form id="createPost" class="data-container" method="POST" enctype="multipart/form-data">
                <div class="field">
                    <label for="">Title: </label>
                    <input type="text" name="title" value="">
                </div>
                <div class="field">
                    <label for="">Author: </label>
                    <input type="text" name="author" value="">
                </div>
                <div class="field">
                    <label for="">Address: </label>
                    <input type="text" name="address" value="">
                </div>
                <div class="field">
                    <label for="">Description: </label>
                    <textarea name="description" id="" cols="30" rows="10"></textarea>
                </div>
                <div class="field">
                    <label for="">Category: </label>
                    <input type="text" name="category" value="">
                </div>
                <div class="field">
                    <label for="">Upload Image: </label>
                    <input type="file" name="fileToUpload" id="fileToUpload">
                </div>
            </div>
        </div>
        <div class="actions container">
            <input type="submit" form="createPost" value="Create" formaction="actions/insertpost.php" />
            <input type="button" value="Cancel" onclick="window.location.replace('../template/fourthwebsite.php')" nosubmit/>
        </div>
    </main>

    <?php
    include("../partials/_footer.php");
    ?>
</body>

</html>