<div class="card card--component">
    <div class="card--component__header">
        <h2 class="card--component__title">
            Buttons
        </h2>
        <button class="card--component__code-btn code-btn">
            <svg class="feather">
                <use href="./src/icons/feather-sprite.svg#code" />
            </svg>
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
                <svg class="feather">
                    <use href="./src/icons/feather-sprite.svg#plus" />
                </svg>
            </button>
            <button class="btn--icon--outlined">
                <svg class="feather">
                    <use href="./src/icons/feather-sprite.svg#plus" />
                </svg>
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
                <svg class="feather">
                    <use href="./src/icons/feather-sprite.svg#plus" />
                </svg>
            </button>
            <button disabled class="btn--icon--outlined">
                <svg class="feather">
                    <use href="./src/icons/feather-sprite.svg#plus" />
                </svg>
            </button>
        </div>
    </div>
    <div class="card--component__code">
        <?php require 'partials/ui-elements/code/_buttons.php' ?>
    </div>
</div>