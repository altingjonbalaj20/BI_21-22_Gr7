<!DOCTYPE html>
<html lang="en" manifest="thirdwebsite.mf">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Third Website</title>
    <link rel="stylesheet" href="../styles/reset.css" />
    <link rel="stylesheet" href="../styles/default.css" />
    <link rel="stylesheet" href="../styles/thirdwebsite/thirdwebsite.css" />
</head>

<body>
    <?php
        include('../partials/_header.php')
    ?>

    <main class="container">
        <h2>Contact us</h2>
        <div class="form-container">
            <form action="http://www.randyconnolly.com/tests/process.php" name="contact-form">
                <!-- <div class="contact-input"> -->
                <div class="name-input">
                    <div class="fname-field">
                        <label id="fname-label" for="fname" class="input-name">First Name</label>
                        <input id="fname" type="text" placeholder="First Name" class="input input-text" name="fname" />
                    </div>
                    <div class="lname-field">
                        <label id="lname-label" for="lname" class="input-name">Last Name</label>
                        <input id="lname" type="text" placeholder="Last Name" class="input input-text" name="lname" />
                    </div>
                </div>
                <div class="email-field">
                    <label id="email-label" for="email" class="input-name">Email</label>
                    <input id="email" type="email" required placeholder="Email" class="input input-text" name="email" />
                </div>
                <div class="message-field">
                    <label id="message-label" for="message" class="input-name">Message</label>
                    <textarea id="message" type="text" required placeholder="Message" class="input input-text"
                        name="message"></textarea>
                </div>
                <input class="submit-button button" type="submit" value="Submit" />
                <!-- </div>  -->
            </form>
        </div>
    </main>

    <?php
        include('../partials/_footer.php')
    ?>

</body>

</html>