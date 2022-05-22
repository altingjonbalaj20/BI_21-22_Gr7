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
        <div class="form-container">
            <form action="../php/test.php" method="post" id="filter-form">
                <div class="filter-container">
                    <div class="filter-option">
                        <label id="author-label" for="author" class="filter-name">Autori</label>
                        <input id="author" type="text" onblur="onBlur('author','author-label')"
                            onfocus="onFocus('author-label')" id="author" placeholder="Author" class="input input-text"
                            name="author" />
                    </div>
                    <div class="filter-option">
                        <label id="address-label" for="address" class="filter-name">Adresa</label>
                        <input id="address" onblur="onBlur('address','address-label')"
                            onfocus="onFocus('address-label')" type="text" placeholder="Address"
                            class="input input-text" name="address" />
                    </div>
                    <div class="filter-option">
                        <label id="name-label" for="name" class="filter-name">Emri</label>
                        <input id="name" type="text" maxlength="40" onblur="onBlur('name','name-label')"
                            onfocus="onFocus('name-label')" placeholder="Name" class="input input-text" name="name" />
                    </div>
                </div>
                <details class="additional-filters">
                    <summary class="button">Additional Filters</summary>
                    <table>
                        <tr>
                            <td>
                                <div class="check-options">
                                    <label class="optionLabel" for="">Zgjedh:</label>
                                    <div class="check-option">
                                        <input type="checkbox" name="checkbox[]" value="checkbox1" id="" />
                                        <label for="">Checkbox1</label>
                                    </div>
                                    <div class="check-option">
                                        <input type="checkbox" name="checkbox[]" value="checkbox2" id="" />
                                        <label for="">Checkbox2</label>
                                    </div>
                                    <div class="check-option">
                                        <input type="checkbox" name="checkbox[]" value="checkbox3" id="" />
                                        <label for="">Checkbox3</label>
                                    </div>
                                </div>
                            </td>
                            <td>
                                <div class="radio-options">
                                    <label class="optionLabel" for="">Radio Options:</label>
                                    <div class="radio-option">
                                        <input type="radio" name="radio-option" value="radio-option1" id="" />
                                        <label for="">Radio Option1</label>
                                    </div>
                                    <div class="radio-option">
                                        <input type="radio" name="radio-option" value="radio-option2" id="" />
                                        <label for="">Radio Option2</label>
                                    </div>
                                    <div class="radio-option">
                                        <input type="radio" name="radio-option" value="radio-option3" id="" />
                                        <label for="">Radio Option3</label>
                                    </div>
                                </div>
                            </td>
                            <td>
                                <select name="optgroup1" id="">
                                    <label for="">Select Options:</label>
                                    <option value="">Select:</option>
                                    <optgroup label="Group Option 1">
                                        <option value="option1">
                                            Option1
                                        </option>
                                        <option value="option2">
                                            Option2
                                        </option>
                                    </optgroup>
                                    <optgroup label="Group Option 2">
                                        <option value="option3">
                                            Option3
                                        </option>
                                        <option value="option4">
                                            Option4
                                        </option>
                                    </optgroup>
                                </select>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <div class="filter-option">
                                    <label for="">Data: </label>
                                    <input type="date" name="data" id="" />
                                </div>
                            </td>
                            <td>
                                <div class="filter-option">
                                    <label for="">Ngjyra: </label>
                                    <input type="color" name="ngjyra" id="" />
                                </div>
                            </td>
                            <td>
                                <div class="filter-option">
                                    <label for="categories">Zgjedh kategorin&#516;:</label>
                                    <input list="categories" id="category" name="category">
                                    <datalist id="categories">
                                        <option value="nature">Natyr&#516;</option>
                                        <option value="animals">Kafsh&#516;</option>
                                        <option value="extremeSports">Sporte Ekstreme</option>
                                        <option value="travel">Udh&#516;time</option>
                                        <option value=""></option>
                                    </datalist>
                                </div>
                            </td>
                        </tr>
                    </table>
                </details>
                <input class="submit-button button" type="submit" value="Filter" />
            </form>
        </div>

        <div class="photos-container">
            <div class="photo-container">
                <figure>
                    <img src="../img/fourthwebsite/image.jpeg" alt="gallery image" srcset="" width="240px"
                        height="240px" />
                    <figcaption>Hello</figcaption>
                </figure>
            </div>
            <div class="photo-container">
                <figure>
                    <img src="../img/fourthwebsite/image.jpeg" alt="gallery image" srcset="" width="240px"
                        height="240px" />
                    <figcaption>Hello</figcaption>
                </figure>
            </div>
            <div class="photo-container">
                <figure>
                    <img src="../img/fourthwebsite/image.jpeg" alt="gallery image" srcset="" width="240px"
                        height="240px" />
                    <figcaption>Hello</figcaption>
                </figure>
            </div>
            <div class="photo-container">
                <figure>
                    <img src="../img/fourthwebsite/image.jpeg" alt="gallery image" srcset="" width="240px"
                        height="240px" />
                    <figcaption>Hello</figcaption>
                </figure>
            </div>
            <div class="photo-container">
                <figure>
                    <img src="../img/fourthwebsite/image.jpeg" alt="gallery image" srcset="" width="240px"
                        height="240px" />
                    <figcaption>Hello</figcaption>
                </figure>
            </div>
            <div class="photo-container">
                <figure>
                    <img src="../img/fourthwebsite/image.jpeg" alt="gallery image" srcset="" width="240px"
                        height="240px" />
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