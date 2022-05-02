<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Solarix | UI Elements</title>
    <link rel="stylesheet" href="./build/css/main.css">
    <link rel="stylesheet" href="./src/css/github-dark.css">
    <script type="module" src="main.js"></script>
    <script src="src/js/highlight.min.js"></script>
    <script>
        hljs.highlightAll();
    </script>
</head>

<body class="theme">
    <div class="overlay"></div>
    <?php require 'partials/layout/sidebar.php' ?>

    <div class="app">
        <?php require 'partials/layout/header.php' ?>

        <div class="app__container">
            <?php

            require 'partials/tables.php';

            ?>
        </div>

        <footer class="app__footer">
            &copy;Solarix <?= date('Y') ?>. Developed by <a href="https://cmeriz.com/" class="app__footer__link">@cmeriz</a>.
        </footer>

    </div>

</body>

</html>