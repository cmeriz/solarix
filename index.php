<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Solarix | Admin Template</title>
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

    <div class="main">
        <?php require 'partials/layout/header.php' ?>

        <div class="content">
            <?php require 'partials/ui-elements.php' ?>
        </div>

    </div>

</body>

</html>