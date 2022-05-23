<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>View Post</title>
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
    $id = $_GET['id'];
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
            <div class="data-container">
                <div class="field">
                    <label for="">ID: <?php echo $id ?></label>
                </div>
                <div class="field">
                    <label for="">Title: <?php echo $title ?></label>
                </div>
                <div class="field">
                    <label for="">Author: <?php echo $author ?></label>
                </div>
                <div class="field">
                    <label for="">Address: <?php echo $address ?></label>
                </div>
                <div class="field">
                    <label for="">Description: <?php echo $description ?></label>
                </div>
            </div>
        </div>
        <form class="actions container" action="" method="POST">
            <input type="hidden" name="id" value="<?php echo $id ?>">
            <input type="submit" value="Edit Post" formaction="editpost.php" />
            <input type="submit" value="Delete Post" formaction="actions/deletepost.php" />
        </form>
    </main>

    <?php
    include("../partials/_footer.php.php");
    ?>
</body>

</html>