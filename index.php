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
            <?php require 'partials/layout/breadcrumb.php' ?>

            <section class="ui-elements section">
                <div class="section__column ui-elements__column">
                    <div class="card card--component">
                        <div class="card--component__header">
                            <h2 class="card--component__title">
                                Buttons
                            </h2>
                            <button class="card--component__code-btn code-btn">
                                <i class="iconsax-message-programming"></i>
                            </button>
                        </div>
                        <div class="card--component__content">
                            <h3 class="card--component__label">
                                Primary
                            </h3>
                            <div class="card--component__block">
                                <button class="btn--primary btn--large">
                                    Button
                                </button>
                                <button class="btn--primary btn--medium">
                                    Button
                                </button>
                                <button class="btn--primary btn--small">
                                    Button
                                </button>
                            </div>
                            <h3 class="card--component__label">
                                Outlined
                            </h3>
                            <div class="card--component__block">
                                <button class="btn--outlined btn--large">
                                    Button
                                </button>
                                <button class="btn--outlined btn--medium">
                                    Button
                                </button>
                                <button class="btn--outlined btn--small">
                                    Button
                                </button>
                            </div>
                            <h3 class="card--component__label">
                                Danger
                            </h3>
                            <div class="card--component__block">
                                <button class="btn--danger btn--large">
                                    Button
                                </button>
                                <button class="btn--danger btn--medium">
                                    Button
                                </button>
                                <button class="btn--danger btn--small">
                                    Button
                                </button>
                            </div>
                            <h3 class="card--component__label">
                                Icon
                            </h3>
                            <div class="card--component__block">
                                <button class="btn--icon--primary">
                                    <i class="iconsax-add"></i>
                                </button>
                                <button class="btn--icon--outlined">
                                    <i class="iconsax-add"></i>
                                </button>
                            </div>
                            <h3 class="card--component__label">
                                Disabled
                            </h3>
                            <div class="card--component__block">
                                <button disabled class="btn--primary">
                                    Button
                                </button>
                                <button disabled class="btn--outlined">
                                    Button
                                </button>
                                <button disabled class="btn--danger">
                                    Button
                                </button>
                                <button disabled class="btn--icon--primary">
                                    <i class="iconsax-add"></i>
                                </button>
                            </div>
                        </div>
                        <div class="card--component__code">
                            <?php require 'partials/code/_buttons.php' ?>
                        </div>
                    </div>
                </div>
                <div class="section__column"></div>
            </section>
        </div>

    </div>

</body>

</html>