<header class="header">
    <div class="header__container">

        <button class="header__sidebar-btn">
            <svg class="feather">
                <use href="./src/icons/feather-sprite.svg#menu" />
            </svg>
        </button>

        <nav class="header__nav">
            <div class="header__search">
                <form action="" class="header__search__form">
                    <div class="form-input form-input--search form-input--icon">
                        <label for="search" class="form-input__label--hidden">
                            Search
                        </label>
                        <input id="search" class="header__search__input form-input--search__field" autocomplete="off" name="search" type="search" placeholder="Search something...">
                        <span class="form-input__icon">
                            <svg class="feather">
                                <use href="./src/icons/feather-sprite.svg#search" />
                            </svg>
                        </span>
                    </div>
                    <button type="button" class="header__search__close-btn">
                        <svg class="feather">
                            <use href="./src/icons/feather-sprite.svg#x" />
                        </svg>
                    </button>
                </form>
                <button class="header__search__btn" type="button">
                    <svg class="feather header__menu__icon">
                        <use href="./src/icons/feather-sprite.svg#search" />
                    </svg>
                </button>
            </div>
            <ul class="header__menu">
                <li class="header__menu__item">
                    <button id="fullscreen-btn" class="header__menu__btn fullscreen-btn">
                        <svg class="feather header__menu__icon fullscreen-btn__max-icon">
                            <use href="./src/icons/feather-sprite.svg#maximize" />
                        </svg>
                        <svg class="feather header__menu__icon fullscreen-btn__min-icon">
                            <use href="./src/icons/feather-sprite.svg#minimize" />
                        </svg>
                    </button>
                </li>
                <li class="header__menu__item">
                    <button id="btn-theme" class="header__menu__btn btn-theme">
                        <svg class="feather header__menu__icon btn-theme__dark-icon">
                            <use href="./src/icons/feather-sprite.svg#moon" />
                        </svg>
                        <svg class="feather header__menu__icon btn-theme__light-icon">
                            <use href="./src/icons/feather-sprite.svg#sun" />
                        </svg>
                    </button>
                </li>
                <li class="header__menu__item dropdown-container dropdown--notifications-container">
                    <button class="header__menu__btn dropdown-trigger">
                        <svg class="feather header__menu__icon">
                            <use href="./src/icons/feather-sprite.svg#bell" />
                        </svg>
                        <span class="header__menu__badge--danger">7</span>
                    </button>

                    <!-- Notifications Dropdown -->
                    <?php require 'partials/layout/header/_notifications-dropdown.php' ?>

                </li>
                <li class="header__menu__item dropdown-container dropdown--user-container">
                    <button class="header__menu__user-btn dropdown-trigger">
                        <img class="header__menu__user-photo" src="./src/img/user.jpg" alt="User photo">
                        <span class="header__menu__user-badge--success"></span>
                    </button>

                    <!-- User Dropdown -->
                    <?php require 'partials/layout/header/_user-dropdown.php' ?>
                </li>
            </ul>
        </nav>
    </div>
</header>