<header class="header">
    <div class="header__container">

        <button class="header__sidebar-btn">
            <i class="iconsax-menu-1"></i>
        </button>

        <nav class="header__nav">
            <div class="header__search">
                <form action="" class="header__search__form">
                    <div class="form-input--icon">
                        <label for="search">Search</label>
                        <input id="search" class="header__search__input" autocomplete="off" name="search" type="search" placeholder="Search something...">
                        <i class="iconsax-search-normal-1"></i>
                    </div>
                    <button type="button" class="header__search__close-btn">
                        <i class="iconsax-close"></i>
                    </button>
                </form>
                <button class="header__search__btn" type="button">
                    <i class="iconsax-search-normal-1"></i>
                </button>
            </div>
            <ul class="header__menu">
                <li class="header__menu__item">
                    <button id="fullscreen-btn" class="header__menu__btn fullscreen-btn">
                        <i class="iconsax-maximize-21 header__menu__icon"></i>
                    </button>
                </li>
                <li class="header__menu__item">
                    <button id="theme-btn" class="header__menu__btn theme-btn">
                        <i class="iconsax-moon header__menu__icon theme-btn--dark"></i>
                        <i class="iconsax-sun-1 header__menu__icon theme-btn--light"></i>
                    </button>
                </li>
                <li class="header__menu__item dropdown-container dropdown--notifications-container">
                    <button class="header__menu__btn dropdown-trigger">
                        <i class="iconsax-notification header__menu__icon"></i>
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