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

        <!-- Number -->
        <div class="form-input form-input--number">
            <label class="form-input__label" for="number">
                Number
            </label>
            <div class="form-input--number__field-container">
                <input class="form-input--number__field" id="number" type="number" min="0" max="100" placeholder="Number">
                <button class="form-input--number__btn-minus" type="button">
                    <svg class="feather">
                        <use href="./src/icons/feather-sprite.svg#minus" />
                    </svg>
                </button>
                <button class="form-input--number__btn-plus" type="button">
                    <svg class="feather">
                        <use href="./src/icons/feather-sprite.svg#plus" />
                    </svg>
                </button>
            </div>
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

        <!-- Select -->
        <div class="form-input form-input--select form-input--icon">
            <label for="select" class="form-input__label">
                Select
            </label>
            <div class="form-input--select__custom-field">
                <div class="form-input--select__custom-field__box">
                    <span class="form-input--select__custom-field__box__placeholder">
                        Select and option
                    </span>
                    <span class="form-input--select__custom-field__box__icon">
                        <svg class="feather">
                            <use href="./src/icons/feather-sprite.svg#chevron-down" />
                        </svg>
                    </span>
                </div>
                <div class="form-input--select__custom-field__options">
                    <div class="form-input--select__custom-field__option" data-value="value-1">
                        Option 1
                    </div>
                    <div class="form-input--select__custom-field__option" data-value="value-2">
                        Option 2
                    </div>
                    <div class="form-input--select__custom-field__option" data-value="value-3">
                        Option 3
                    </div>
                    <div class="form-input--select__custom-field__option" data-value="value-4">
                        Option 4
                    </div>
                    <div class="form-input--select__custom-field__option" data-value="value-5">
                        Option 5
                    </div>
                </div>
            </div>
            <select class="form-input--select__field" name="select" id="select">
                <option value="" disabled selected>Select an option</option>
                <option value="value-1">Option 1</option>
                <option value="value-2">Option 2</option>
                <option value="value-3">Option 3</option>
                <option value="value-4">Option 4</option>
                <option value="value-5">Option 5</option>
            </select>
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
    </div>

    <div class="card--component__code">
        <?php require 'partials/inputs/code/_basic.php' ?>
    </div>
</div>