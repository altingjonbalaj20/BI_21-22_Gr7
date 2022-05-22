<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>View Post : </title>
    <link rel="stylesheet" href="../styles/reset.css" />

    <link rel="stylesheet" href="./css/viewpost.css">
</head>

<body>
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
        <div class='left-container'>
            <figure>
                TESTING 
            </figure>
        </div>
        <div class="right-container">
            <div class="field">
                <label for="">ID:</label>
                <label for=""><?php echo $id ?></label>
            </div>
            <div class="field">
                <label for="">Title:</label>
                <label for=""><?php echo $title ?></label>
            </div>
            <div class="field">
                <label for="">Author:</label>
                <label for=""><?php echo $author ?></label>
            </div>
            <div class="field">
                <label for="">Address:</label>
                <label for=""><?php echo $address ?></label>
            </div>
            <div class="field">
                <label for="">Description:</label>
                <label for=""><?php echo $description ?></label>
            </div>
        </div>
    </main>
</body>

</html>