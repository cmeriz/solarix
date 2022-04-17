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
            <input class="form-input--password__field" id="password" autocomplete="off" name="password" type="password" placeholder="Password">
            <button class="form-input--password__btn">
                <svg class="feather form-input--password__btn__icon--show">
                    <use href="./src/icons/feather-sprite.svg#eye" />
                </svg>
                <svg class="feather form-input--password__btn__icon--hide">
                    <use href="./src/icons/feather-sprite.svg#eye-off" />
                </svg>
            </button>
        </div>

        <!-- Input File Single -->
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

        <!-- Multiple File -->
        <div class="form-input form-input--file-multi">
            <label class="form-input__label form-input--file-multi__label" for="file-1">
                Multiple File
            </label>
            <div class="form-input--file-multi__container">
                <div class="form-input--file-multi__drop-zone">
                    <span class="form-input--file-multi__drop-zone__icon">
                        <svg class="feather">
                            <use href="./src/icons/feather-sprite.svg#upload-cloud" />
                        </svg>
                    </span>
                    <span class="form-input--file-multi__drop-zone__icon-drop">
                        <svg class="feather">
                            <use href="./src/icons/feather-sprite.svg#file-plus" />
                        </svg>
                    </span>
                    <span class="form-input--file-multi__drop-zone__advice">
                        Drop your files or click to upload
                    </span>
                    <span class="form-input--file-multi__drop-zone__detail">
                        Max file size: 10MB
                    </span>
                </div>
                <div class="form-input--file-multi__files-container"></div>
            </div>

            <input id="file-1" type="file" class="form-input--file-multi__field" multiple>
            <input id="file-pivot-1" type="file" class="form-input--file-multi__pivot" multiple disabled>
        </div>

        <!-- Input Range -->
        <div class="form-input form-input--range">
            <label class="form-input__label form-input--range__label" for="range">
                Range
            </label>
            <!-- <input type="range" value="70" min="0" max="100" oninput="rangevalue.value=value" /> -->
            <div class="form-input--range__container">
                <span class="form-input--range__buffer"></span>
                <input id="range" value="0" min="0" max="100" type="range" class="form-input--range__field" style="background-size: 0% 100%;">
                <span class="form-input--range__value">0</span>
            </div>
        </div>

    </div>

    <div class="card--component__code">
        <?php require 'partials/inputs/code/_advanced.php' ?>
    </div>
</div>