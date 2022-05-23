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
    require_once('../partials/_header.php')
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
                        <label id="author-label" for="author" class="filter-name">Autori</label>
                        <input id="author" type="text" onblur="onBlur('author','author-label')" onfocus="onFocus('author-label')" id="author" placeholder="Author" class="input input-text" name="author" />
                    </div>
                    <div class="filter-option">
                        <label id="address-label" for="address" class="filter-name">Adresa</label>
                        <input id="address" onblur="onBlur('address','address-label')" onfocus="onFocus('address-label')" type="text" placeholder="Address" class="input input-text" name="address" />
                    </div>
                    <div class="filter-option">
                        <label id="name-label" for="name" class="filter-name">Titulli</label>
                        <input id="title" type="text" maxlength="40" onblur="onBlur('name','name-label')" onfocus="onFocus('name-label')" placeholder="Title" class="input input-text" name="title" />
                    </div>
                </div>
                <details class="additional-filters">
                    <summary class="button">Additional Filters</summary>
                    <table>
                        <tr>
                            <td>
                                <div class="filter-option">
                                    <label for="">Data: </label>
                                    <input type="date" name="data" id="" />
                                </div>
                            </td>
                            <td>
                                <div class="filter-option">
                                    <label for="categories">Zgjedh kategorine: </label>
                                    <input list="categories" id="category" name="category">
                                    <datalist id="categories">
                                        <option value="nature">Natyre</option>
                                        <option value="animals">Kafshe</option>
                                        <option value="extremeSports">Sporte Ekstreme</option>
                                        <option value="travel">Udhetime</option>
                                        <option value=""></option>
                                    </datalist>
                                </div>
                            </td>
                        </tr>
                    </table>
                </details>
                <input class="submit-button button" type="submit" value="Filter" id="filter" name="filter" />
            </form>
        </div>
        <?php
        require_once('../php/posts.php');
        if (isset($_POST['filter'])) {
            $query = "select * from gallery where ";
            $and = false;
            if(strcmp($_POST['author'], "") != 0){
                $author = $_POST['author'];
                $query = $query . "author like '%$author%' ";
                $and = true;
            }
            if(strcmp($_POST['title'], "") != 0){
                $title = $_POST['title'];
                if($and){
                    $query = $query . "and ";
                }
                $query = $query . " title like '%$title%' ";
                $and = true;
            }
            if(strcmp($_POST['address'], "") != 0){
                $address = $_POST['address'];
                if($and){
                    $query = $query . "and ";
                }
                $query = $query . "address like '%$address%' ";
                $and = true;
            }
            echo " <h1 style='color:white'>$query</h1>";
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