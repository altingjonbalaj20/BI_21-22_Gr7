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
        include('../partials/_header.php')
    ?>

    <main class="container">
        <?php
        if (isset($_POST['filter'])) {
            require_once('../database/conn.php');
            execQuery('select * from gallery', 'Error on fourthwebsite, on filter form');
        }
        ?>
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
                        <label id="name-label" for="name" class="filter-name">Emri</label>
                        <input id="name" type="text" maxlength="40" onblur="onBlur('name','name-label')" onfocus="onFocus('name-label')" placeholder="Name" class="input input-text" name="name" />
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
        <div class="photos-container">
            <div class="photo-container">
                <figure>
                    <img src="../img/fourthwebsite/image.jpeg" alt="gallery image" srcset="" width="240px" height="240px" />
                    <figcaption>Hello</figcaption>
                </figure>
            </div>
            <div class="photo-container">
                <figure>
                    <img src="../img/fourthwebsite/image.jpeg" alt="gallery image" srcset="" width="240px" height="240px" />
                    <figcaption>Hello</figcaption>
                </figure>
            </div>
            <div class="photo-container">
                <figure>
                    <img src="../img/fourthwebsite/image.jpeg" alt="gallery image" srcset="" width="240px" height="240px" />
                    <figcaption>Hello</figcaption>
                </figure>
            </div>
            <div class="photo-container">
                <figure>
                    <img src="../img/fourthwebsite/image.jpeg" alt="gallery image" srcset="" width="240px" height="240px" />
                    <figcaption>Hello</figcaption>
                </figure>
            </div>
            <div class="photo-container">
                <figure>
                    <img src="../img/fourthwebsite/image.jpeg" alt="gallery image" srcset="" width="240px" height="240px" />
                    <figcaption>Hello</figcaption>
                </figure>
            </div>
            <div class="photo-container">
                <figure>
                    <img src="../img/fourthwebsite/image.jpeg" alt="gallery image" srcset="" width="240px" height="240px" />
                    <figcaption>Hello</figcaption>
                </figure>
            </div>
        </div>
    </main>

    <?php
    include('../partials/_footer.php')
    ?>
</body>

</html>