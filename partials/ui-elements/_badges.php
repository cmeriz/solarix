<div class="card card--component">
    <div class="card--component__header">
        <h2 class="card--component__title">
            Badges
        </h2>
        <button class="card--component__code-btn code-btn">
            <svg class="feather">
                <use href="./src/icons/feather-sprite.svg#code" />
            </svg>
        </button>
    </div>
    <div class="card--component__content">
        <h3 class="card--component__label">
            States
        </h3>
        <div class="card--component__block">
            <div class="badge--success">
                Success
            </div>
            <div class="badge--warning">
                Warning
            </div>
            <div class="badge--danger">
                Danger
            </div>
        </div>
    </div>
    <div class="card--component__code">
        <?php require 'partials/ui-elements/code/_badges.php' ?>
    </div>
</div>