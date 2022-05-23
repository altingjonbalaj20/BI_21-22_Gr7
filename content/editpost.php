<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Edit Post</title>
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
    $id = $_POST['id'];
    $post = $db->execQuery("select * from gallery where id = '$id' limit 1", "Post with id $id does not exist in database.");
    while ($row = mysqli_fetch_array($post)) {
        $title = $row['title'];
        $description = $row['description'];
        $image = $row['imagename'];
        $author = $row['author'];
        $address = $row['address'];
        $category = $row['category'];
    }
    printf("Title, description, imagename, author, address, category", $title, $description, $image, $author, $address, $category);
    ?>
    <main>
        <div class="container">
            <div class='photo-container'>
                <figure>
                    <img src='../img/fourthwebsite/image.jpeg' alt='gallery image' srcset='' width='240px' height='240px' />
                </figure>
            </div>
            <form id="editPost" class="data-container" method="POST">
                <div class="field">
                    <label for="">ID: </label>
                    <label for=""><?php echo $id ?></label>
                    <input type="hidden" name="id" value="<?php echo $id ?>">
                </div>
                <div class="field">
                    <label for="">Title: </label>
                    <input type="text" name="title" value="<?php echo $title ?>">
                </div>
                <div class="field">
                    <label for="">Author: </label>
                    <input type="text" name="author" value="<?php echo $author ?>">
                </div>
                <div class="field">
                    <label for="">Address: </label>
                    <input type="text" name="address" value="<?php echo $address ?>">
                </div>
                <div class="field">
                    <label for="">Description: </label>
                    <textarea name="description" id="" cols="30" rows="10"><?php echo $description ?></textarea>
                </div>
            </div>
        </div>
        <div class="actions container">
            <input type="submit" form="editPost" value="Save" formaction="actions/updatepost.php" />
            <input type="button" value="Cancel" onclick="window.location.replace('../template/fourthwebsite.php')" />
        </div>
    </main>

    <?php
    include("../partials/_footer.php");
    ?>
</body>

</html>