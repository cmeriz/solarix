<div class="card card--component">
    <div class="card--component__header">
        <h2 class="card--component__title">
            Basic
        </h2>
        <button class="card--component__code-btn code-btn">
            <svg class="feather">
                <use href="./src/icons/feather-sprite.svg#code" />
            </svg>
        </button>
    </div>
    <div class="card--component__content">
        <!-- Text -->

        <div class="form-input form-input--text">
            <label class="form-input__label" for="text">
                Text
            </label>
            <input class="form-input--text__field" id="text" autocomplete="off" name="text" type="text" placeholder="Text">
        </div>

        <!-- User -->
        <div class="form-input form-input--text form-input--icon">
            <label for="user" class="form-input__label">
                User
            </label>
            <input class="form-input--text__field" id="user" autocomplete="off" name="user" type="text" placeholder="Username">
            <span class="form-input__icon">
                <svg class="feather">
                    <use href="./src/icons/feather-sprite.svg#user" />
                </svg>
            </span>
        </div>

        <!-- Email -->
        <div class="form-input form-input--email form-input--icon">
            <label for="email" class="form-input__label">
                Email
            </label>
            <input class="form-input--email__field" id="email" autocomplete="off" name="email" type="email" placeholder="user@mail.com">
            <span class="form-input__icon">
                <svg class="feather">
                    <use href="./src/icons/feather-sprite.svg#mail" />
                </svg>
            </span>
        </div>

        <!-- Textarea -->
        <div class="form-input form-input--textarea form-input--icon">
            <label for="message" class="form-input__label">
                Textarea
            </label>
            <textarea class="form-input--textarea__field" name="message" id="message" rows="6" placeholder="Message"></textarea>
        </div>

        <!-- Date -->
        <div class="form-input form-input--date form-input--icon">
            <label for="message" class="form-input__label">
                Date
            </label>
            <span class="form-input__custom-placeholder">
                Date
            </span>
            <input class="form-input--date__field" id="date" name="date" type="date">
            <span class="form-input__icon">
                <svg class="feather">
                    <use href="./src/icons/feather-sprite.svg#calendar" />
                </svg>
            </span>
        </div>

        <!-- Time -->
        <div class="form-input form-input--time form-input--icon">
            <label for="time" class="form-input__label">
                Time
            </label>
            <span class="form-input__custom-placeholder">
                Time
            </span>
            <input class="form-input--time__field" id="time" name="time" type="time">
            <span class="form-input__icon">
                <svg class="feather">
                    <use href="./src/icons/feather-sprite.svg#clock" />
                </svg>
            </span>
        </div>

        <!-- Search -->
        <div class="form-input form-input--search form-input--icon">
            <label for="search" class="form-input__label">
                Search
            </label>
            <input class="form-input--search__field" id="search" autocomplete="off" name="search" type="search" placeholder="Search something...">
            <span class="form-input__icon">
                <svg class="feather">
                    <use href="./src/icons/feather-sprite.svg#search" />
                </svg>
            </span>
        </div>

        <!-- Checkbox -->
        <div class="form-input form-input--checkbox">
            <span class="form-input--checkbox__advice">Checkbox</span>
            <div class="form-input--checkbox__option">
                <input class="form-input--checkbox__field" id="checkbox1" name="checkbox1" type="checkbox" checked>
                <span class="form-input--checkbox__not-checked"></span>
                <span class="form-input--checkbox__checked">
                    <svg class="feather">
                        <use href="./src/icons/feather-sprite.svg#check" />
                    </svg>
                </span>
                <label for="checkbox1">
                    This is another option
                </label>
            </div>
            <div class="form-input--checkbox__option">
                <input class="form-input--checkbox__field" id="checkbox2" name="checkbox2" type="checkbox">
                <span class="form-input--checkbox__not-checked"></span>
                <span class="form-input--checkbox__checked">
                    <svg class="feather">
                        <use href="./src/icons/feather-sprite.svg#check" />
                    </svg>
                </span>
                <label for="checkbox2">
                    This is another option
                </label>
            </div>
        </div>

        <!-- Radio Button -->
        <div class="form-input form-input--radio">
            <span class="form-input--radio__advice">Radio Button</span>
            <div class="form-input--radio__option">
                <input class="form-input--radio__field" id="option1" name="radio" type="radio" checked>
                <span class="form-input--radio__not-checked"></span>
                <span class="form-input--radio__checked"></span>
                <label for="option1">
                    This is another option
                </label>
            </div>
            <div class="form-input--radio__option">
                <input class="form-input--radio__field" id="option2" name="radio" type="radio">
                <span class="form-input--radio__not-checked"></span>
                <span class="form-input--radio__checked"></span>
                <label for="option2">
                    This is another option
                </label>
            </div>
        </div>
    </div>

    <div class="card--component__code">
        <?php require 'partials/inputs/code/_basic.php' ?>
    </div>
</div>