<div class="app__component">
    <div class="app__component__header">
        <h2 class="app__component__title">
            Tabbed card
        </h2>
        <button class="app__component__code-btn code-btn">
            <svg class="feather">
                <use href="./src/icons/feather-sprite.svg#code" />
            </svg>
        </button>
    </div>
    <div class="app__component__content">
        <div class="card--tabbed">
            <ul class="card--tabbed__tabs">
                <li class="card--tabbed__item">
                    <button class="card--tabbed__btn-tab active" data-target="tab-1">
                        First tab
                    </button>
                </li>
                <li class="card--tabbed__item">
                    <button class="card--tabbed__btn-tab" data-target="tab-2">
                        Second tab
                    </button>
                </li>
                <li class="card--tabbed__item">
                    <button class="card--tabbed__btn-tab" data-target="tab-3">
                        Third tab
                    </button>
                </li>
            </ul>
            <div class="card--tabbed__tab-content card--tabbed__tab-1 active">
                This is the first tab
            </div>
            <div class="card--tabbed__tab-content card--tabbed__tab-2">
                This is the second tab
            </div>
            <div class="card--tabbed__tab-content card--tabbed__tab-3">
                This is the third tab
            </div>
        </div>
    </div>
    <div class="app__component__code">
        <?php require 'partials/cards/code/_tabbed.php' ?>
    </div>
</div>