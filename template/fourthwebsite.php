<!DOCTYPE html>
<html lang="en" manifest="fourthwebsite.mf">

<head id="head">
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Fourth Website</title>
    <link rel="stylesheet" href="../styles/reset.css" />
    <link rel="stylesheet" href="../styles/default.css" />
    <link rel="stylesheet" href="../styles/fourthwebsite/fourthwebsite.css">
    <link rel='stylesheet' href='../styles/fourthwebsite/darkmode.css' />
</head>

<body>
    <?php
    require_once('../partials/_header.php');
    $title = "";
    if (isset($_COOKIE['filter[title]'])) {
        $title = $_COOKIE['filter[title]'];
    }
    $author = "";
    if (isset($_COOKIE['filter[author]'])) {
        $author = $_COOKIE['filter[author]'];
        echo $author;
    }
    $address = "";
    if (isset($_COOKIE['filter[address]'])) {
        $address = $_COOKIE['filter[address]'];
    }
    $category = "";
    if (isset($_COOKIE['filter[category]'])) {
        $category = $_COOKIE['filter[category]'];
    }
    if (isset($_POST['filter'])) {
        $author = $_POST['author'];
        $title = $_POST['title'];
        $address = $_POST['address'];
        $category = $_POST['category'];
        setcookie("filter[author]", $author);
        setcookie("filter[title]", $title, time() + 3600);
        setcookie("filter[address]", $address, time() + 3600);
        setcookie("filter[category]", $category, time() + 3600);
    }
    ?>

    <?php
    include('../database/database.php');
    $db = new Database();
    $categories = $db->execQuery('select distinct category from gallery', 'Query to get categories not executed');
    ?>

    <main class="container">
        <div class="form-container">
            <form action="<?php $_PHP_SELF ?>" method="post" id="filter-form">
                <script>
                    form = document.getElementById('filter-form');
                    console.log(form.action);
                </script>
                <div class="filter-container">
                    <div class="filter-option">
                        <label id="author-label" for="author" class="filter-name" value="<?php echo $author ?>">Autori</label>
                        <input id="author" type="text" onblur="onBlur('author','author-label')" onfocus="onFocus('author-label')" id="author" placeholder="Author" class="input input-text" name="author" value="<?php if (isset($_POST['author'])) {
                                                                                                                                                                                                                        echo $_POST['author'];
                                                                                                                                                                                                                    } ?>" />
                    </div>
                    <div class="filter-option">
                        <label id="address-label" for="address" class="filter-name">Adresa</label>
                        <input id="address" value="<?php echo $address ?>" onblur="onBlur('address','address-label')" onfocus="onFocus('address-label')" type="text" placeholder="Address" class="input input-text" name="address" />
                    </div>
                    <div class="filter-option">
                        <label id="name-label" value="<?php echo $title ?>" for="name" class="filter-name">Titulli</label>
                        <input id="title" value="<?php if (isset($_POST['title'])) {
                                                        echo $_POST['title'];
                                                    } ?>" type="text" maxlength="40" onblur="onBlur('name','name-label')" onfocus="onFocus('name-label')" placeholder="Title" class="input input-text" name="title" />
                    </div>
                </div>
                <details class="additional-filters">
                    <summary class="button">Additional Filters</summary>
                    <table>
                        <tr>
                            <td>
                                <div class="filter-option">
                                    <label for="categories">Zgjedh kategorine: </label>
                                    <input value="<?php echo $category ?>" list="categories" id="category" name="category">
                                    <datalist id="categories">
                                        <?php
                                        $sort_cat = array();
                                        while ($row = mysqli_fetch_array($categories)) {
                                            $name = $row['category'];
                                            array_push($sort_cat, $name);
                                        }
                                        sort($sort_cat);
                                        foreach ($sort_cat as $category) {
                                            echo "<option value='$category'>$category</option>";
                                        }
                                        ?>
                                    </datalist>
                                </div>
                            </td>
                        </tr>
                    </table>
                </details>
                <input class="submit-button button" type="submit" value="Filter" id="filter" name="filter" />
            </form>
        </div>
        <button class="button" onclick="window.location.replace('../content/createpost.php');">Create Post</button>
        <?php
        require_once('../php/posts.php');
        if (isset($_POST['filter'])) {
            $query = "select * from gallery where ";
            $and = false;
            if (strcmp($_POST['author'], "") != 0) {
                $query = $query . "author like '%$author%' ";
                $and = true;
            }
            if (strcmp($_POST['title'], "") != 0) {
                if ($and) {
                    $query = $query . "and ";
                }
                $query = $query . " title like '%$title%' ";
                $and = true;
            }

            if (strcmp($_POST['address'], "") != 0) {
                if ($and) {
                    $query = $query . "and ";
                }
                $query = $query . "address like '%$address%' ";
                $and = true;
            }

            if (strcmp($_POST['category'], "") != 0) {
                if ($and) {
                    $query = $query . " and ";
                }
                $query = $query . "category like '%$category%' ";
                $and = true;
            }
            new Posts($query);
        } else {
            new Posts("select * from gallery");
        }

        ?>
    </main>

    <?php
    include('../partials/_footer.php')
    ?>
</body>

</html>