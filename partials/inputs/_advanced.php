<div class="card card--component">
    <div class="card--component__header">
        <h2 class="card--component__title">
            Advanced
        </h2>
        <button class="card--component__code-btn code-btn">
            <svg class="feather">
                <use href="./src/icons/feather-sprite.svg#code" />
            </svg>
        </button>
    </div>
    <div class="card--component__content">

        <!-- Password -->
        <div class="form-input form-input--password">
            <label class="form-input__label" for="password">
                Password
            </label>
            <input id="password" autocomplete="off" name="password" type="password" placeholder="Password">
            <button class="form-input--password__btn">
                <svg class="feather form-input--password__btn__icon--show">
                    <use href="./src/icons/feather-sprite.svg#eye" />
                </svg>
                <svg class="feather form-input--password__btn__icon--hide">
                    <use href="./src/icons/feather-sprite.svg#eye-off" />
                </svg>
            </button>
        </div>

        <div class="form-input form-input--file-single">
            <label class="form-input__label" for="file">Single File</label>
            <div class="form-input form-input--file-single__custom-field-container">
                <div class="form-input--file-single__custom-field">
                    <span class="form-input--file-single__label" data-placeholder="Filename">
                        Filename
                    </span>
                    <button class="form-input--file-single__btn-remove">
                        <svg class="feather">
                            <use href="./src/icons/feather-sprite.svg#x" />
                        </svg>
                    </button>
                </div>
                <button class="form-input--file-single__btn-upload">
                    Select file
                </button>
            </div>
            <input id="file" type="file" class="form-input--file-single__field">
        </div>

    </div>

    <div class="card--component__code">
        <?php require 'partials/inputs/code/_basic.php' ?>
    </div>
</div>