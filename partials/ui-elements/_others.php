<div class="card card--component">
    <div class="card--component__header">
        <h2 class="card--component__title">
            Others
        </h2>
        <button class="card--component__code-btn code-btn">
            <svg class="feather">
                <use href="./src/icons/feather-sprite.svg#code" />
            </svg>
        </button>
    </div>
    <div class="card--component__content">
        <h3 class="card--component__label">
            Progress bar
        </h3>
        <div class="card--component__block">
            <div class="progress-bar">
                <div class="progress-bar__buffer">
                    <div class="progress-bar__fill" style="width: 50%;"></div>
                </div>
                <span class="progress-bar__label">
                    Progress: 20%
                </span>
            </div>
        </div>
    </div>
    <div class="card--component__content">
        <h3 class="card--component__label">
            Dropdown
        </h3>
        <div class="card--component__block">
            <div class="dropdown-container">
                <button class="dropdown-btn dropdown-trigger">
                    <span class="dropdown-btn__icon">
                        <svg class="feather">
                            <use href="./src/icons/feather-sprite.svg#more-vertical" />
                        </svg>
                    </span>
                </button>
                <div class="dropdown dropdown--left">
                    <div class="dropdown__header">
                        <h3 class="dropdown__header__title">
                            Dropdown to left
                        </h3>
                        <span class="dropdown__header__detail">
                            With icon button.
                        </span>
                    </div>
                    <ul class="dropdown__menu">
                        <li class="dropdown__menu__item">
                            <a href="#" class="dropdown__menu__link">
                                <span class="dropdown__menu__icon">
                                    <svg class="feather">
                                        <use href="./src/icons/feather-sprite.svg#check-circle" />
                                    </svg>
                                </span>
                                <span class="dropdown__menu__label">
                                    Option A1
                                </span>
                            </a>
                        </li>
                        <li class="dropdown__menu__item">
                            <a href="#" class="dropdown__menu__link">
                                <span class="dropdown__menu__icon">
                                    <svg class="feather">
                                        <use href="./src/icons/feather-sprite.svg#check-circle" />
                                    </svg>
                                </span>
                                <span class="dropdown__menu__label">
                                    Option A2
                                </span>
                            </a>
                        </li>
                        <li class="dropdown__separator"></li>
                        <li class="dropdown__menu__item">
                            <a href="#" class="dropdown__menu__link">
                                <span class="dropdown__menu__icon">
                                    <svg class="feather">
                                        <use href="./src/icons/feather-sprite.svg#check-circle" />
                                    </svg>
                                </span>
                                <span class="dropdown__menu__label">
                                    Option B1
                                </span>
                            </a>
                        </li>
                        <li class="dropdown__menu__item">
                            <a href="#" class="dropdown__menu__link">
                                <span class="dropdown__menu__icon">
                                    <svg class="feather">
                                        <use href="./src/icons/feather-sprite.svg#check-circle" />
                                    </svg>
                                </span>
                                <span class="dropdown__menu__label">
                                    Option B2
                                </span>
                            </a>
                        </li>
                    </ul>
                    <div class="dropdown__footer">
                        <button class="btn--primary dropdown__footer__btn">
                            Footer
                        </button>
                    </div>
                </div>
            </div>

            <div class="dropdown-container">
                <button class="dropdown-btn dropdown-trigger">
                    <span class="dropdown-btn__label">
                        Click me!
                    </span>
                </button>
                <div class="dropdown dropdown--right">
                    <div class="dropdown__header">
                        <h3 class="dropdown__header__title">
                            Dropdown to right
                        </h3>
                        <span class="dropdown__header__detail">
                            With labeled button.
                        </span>
                    </div>
                    <ul class="dropdown__menu">
                        <li class="dropdown__menu__item">
                            <a href="#" class="dropdown__menu__link">
                                <span class="dropdown__menu__icon">
                                    <svg class="feather">
                                        <use href="./src/icons/feather-sprite.svg#check-circle" />
                                    </svg>
                                </span>
                                <span class="dropdown__menu__label">
                                    Option A1
                                </span>
                            </a>
                        </li>
                        <li class="dropdown__menu__item">
                            <a href="#" class="dropdown__menu__link">
                                <span class="dropdown__menu__icon">
                                    <svg class="feather">
                                        <use href="./src/icons/feather-sprite.svg#check-circle" />
                                    </svg>
                                </span>
                                <span class="dropdown__menu__label">
                                    Option A2
                                </span>
                            </a>
                        </li>
                        <li class="dropdown__separator"></li>
                        <li class="dropdown__menu__item">
                            <a href="#" class="dropdown__menu__link">
                                <span class="dropdown__menu__icon">
                                    <svg class="feather">
                                        <use href="./src/icons/feather-sprite.svg#check-circle" />
                                    </svg>
                                </span>
                                <span class="dropdown__menu__label">
                                    Option B1
                                </span>
                            </a>
                        </li>
                        <li class="dropdown__menu__item">
                            <a href="#" class="dropdown__menu__link">
                                <span class="dropdown__menu__icon">
                                    <svg class="feather">
                                        <use href="./src/icons/feather-sprite.svg#check-circle" />
                                    </svg>
                                </span>
                                <span class="dropdown__menu__label">
                                    Option B2
                                </span>
                            </a>
                        </li>
                    </ul>
                    <div class="dropdown__footer">
                        <button class="btn--primary dropdown__footer__btn">
                            Footer
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="card--component__content">
        <h3 class="card--component__label">
            Modal
        </h3>
        <div class="card--component__block">
            <div class="modal">
                <button class="modal__btn modal__trigger">
                    Click me!
                </button>
                <div class="modal__container">
                    <div class="modal__overlay"></div>
                    <div class="modal__window">
                        <div class="modal__header">
                            <h3 class="modal__title">
                                This is a modal
                            </h3>
                            <button class="modal__btn-close">
                                <svg class="feather">
                                    <use href="./src/icons/feather-sprite.svg#x" />
                                </svg>
                            </button>
                        </div>
                        <div class="modal__content">
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Cum, earum est. Dignissimos aspernatur, assumenda quam provident illum laboriosam veritatis ducimus vel neque odio ullam non odit dolorum inventore consequatur! Facere!</p>
                        </div>
                        <div class="modal__actions">
                            <button class="btn--outlined modal__btn-cancel">
                                Cancel
                            </button>
                            <button class="btn--primary">
                                Accept
                            </button>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
    <div class="card--component__code">
        <?php require 'partials/ui-elements/code/_others.php' ?>
    </div>
</div>