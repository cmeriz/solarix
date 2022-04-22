<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Solarix | Login</title>
    <link rel="stylesheet" href="./build/css/main.css">
    <script type="module" src="login.js"></script>
</head>

<body class="theme">
    <section class="login">
        <div class="login__form-container">
            <form class="login__form">
                <h1 class="login__title">
                    Log in
                </h1>
                <!-- Email -->
                <div class="login__form__row">
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
                </div>

                <!-- Password -->
                <div class="login__form__row">
                    <div class="form-input form-input--password">
                        <label class="form-input__label" for="password">
                            Password
                        </label>
                        <input class="form-input--password__field" id="password" autocomplete="off" name="password" type="password" placeholder="Password">
                        <button class="form-input--password__btn" type="button">
                            <svg class="feather form-input--password__btn__icon--show">
                                <use href="./src/icons/feather-sprite.svg#eye" />
                            </svg>
                            <svg class="feather form-input--password__btn__icon--hide">
                                <use href="./src/icons/feather-sprite.svg#eye-off" />
                            </svg>
                        </button>
                    </div>
                </div>

                <div class="login__form__row login__form__remember-forgot">
                    <div class="form-input form-input--checkbox">
                        <span class="form-input--checkbox__advice form-input--checkbox__advice--hidden">
                            Remember me
                        </span>
                        <div class="form-input--checkbox__option">
                            <input class="form-input--checkbox__field" id="remember-me" name="remember-me" type="checkbox" checked>
                            <span class="form-input--checkbox__not-checked"></span>
                            <span class="form-input--checkbox__checked">
                                <svg class="feather">
                                    <use href="./src/icons/feather-sprite.svg#check" />
                                </svg>
                            </span>
                            <label for="remember-me">
                                Remember me
                            </label>
                        </div>
                    </div>
                    <a href="#" class="login__form__link">
                        Forgot my password
                    </a>
                </div>

                <div class="login__form__row">
                    <button class="btn--primary login__form__btn-submit" type="submit">
                        Log in
                    </button>
                </div>

                <div class="login__form__row">
                    <p>
                        Don't have an account? <a href="#" class="login__form__link">Register here</a>
                    </p>
                </div>

            </form>
        </div>
    </section>
    <section class="banner">
        <div class="banner__container">
            <header class="banner__header">

                <button id="btn-theme" class="banner__btn-theme">
                    <svg class="feather banner__btn-theme__dark-icon">
                        <use href="./src/icons/feather-sprite.svg#moon" />
                    </svg>
                    <svg class="feather banner__btn-theme__light-icon">
                        <use href="./src/icons/feather-sprite.svg#sun" />
                    </svg>
                </button>

                <a class="logo" href="./">
                    <span class="logo__img">
                        <svg data-name="Capa 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 73.58 72.4">
                            <path class="cls-1" d="M87.27,276.82a75.55,75.55,0,0,0,9.14,5.83,48.06,48.06,0,0,0,11,4.38,18,18,0,0,0,5.36.59,6.22,6.22,0,0,0,2.06-.46,1.44,1.44,0,0,0,.84-.8,3,3,0,0,0,.1-1,9.42,9.42,0,0,0-.29-1.78,22.17,22.17,0,0,0-1.83-4.48,65.52,65.52,0,0,0-6.07-9.14,184.68,184.68,0,0,0-15.22-17,186.28,186.28,0,0,0-17-15.25,64.24,64.24,0,0,0-9.15-6.08,21.45,21.45,0,0,0-4.49-1.83,8.65,8.65,0,0,0-1.79-.29,3.15,3.15,0,0,0-1,.11,1.5,1.5,0,0,0-.8.86,6,6,0,0,0-.46,2.07,17.91,17.91,0,0,0,.59,5.36,48,48,0,0,0,4.4,11,80.57,80.57,0,0,0,10,14.32l-.11.13a170,170,0,0,1-11.51-13.39,68,68,0,0,1-6.75-10.55,24.68,24.68,0,0,1-2.26-6.4,12.67,12.67,0,0,1-.11-4,8.65,8.65,0,0,1,2-4.44,9.38,9.38,0,0,1,4.27-2.7,14.62,14.62,0,0,1,4.25-.62,27.29,27.29,0,0,1,7.27,1A57.38,57.38,0,0,1,82,227.3a91.32,91.32,0,0,1,20.46,15.5A91.33,91.33,0,0,1,118,263.24a56.91,56.91,0,0,1,5.1,12.37,27.44,27.44,0,0,1,1,7.29,14.73,14.73,0,0,1-.62,4.26,9.45,9.45,0,0,1-2.72,4.29,8.78,8.78,0,0,1-4.45,2,12.72,12.72,0,0,1-4-.12,24.62,24.62,0,0,1-6.41-2.26,67.53,67.53,0,0,1-10.54-6.77c-3-2.28-5.32-5-8.08-7.49Z" transform="translate(-50.49 -221.17)" />
                            <path class="cls-2" d="M102.06,263.29m-.11-.12M87.27,276.82,102,263.17a80,80,0,0,0,10-14.34,47.64,47.64,0,0,0,4.39-11,18.28,18.28,0,0,0,.58-5.36,6.17,6.17,0,0,0-.45-2.06,1.48,1.48,0,0,0-.81-.85,3.35,3.35,0,0,0-1-.09,9.18,9.18,0,0,0-1.78.29,21.94,21.94,0,0,0-4.48,1.83,66.2,66.2,0,0,0-9.15,6.07,206.83,206.83,0,0,0-32.29,32.24,65,65,0,0,0-6.07,9.15A21,21,0,0,0,59,283.57a8.56,8.56,0,0,0-.28,1.79,3.2,3.2,0,0,0,.1,1,1.5,1.5,0,0,0,.86.8,6.15,6.15,0,0,0,2.07.46,18,18,0,0,0,5.37-.59,48,48,0,0,0,11-4.4,77,77,0,0,0,9.15-5.84h0c-2.77,2.46-5.13,5.2-8.1,7.48a67.06,67.06,0,0,1-10.55,6.75,24.55,24.55,0,0,1-6.4,2.26,12.6,12.6,0,0,1-4,.11,8.65,8.65,0,0,1-4.44-2,9.45,9.45,0,0,1-2.71-4.27,15.33,15.33,0,0,1-.62-4.25,27.69,27.69,0,0,1,1-7.27,56.86,56.86,0,0,1,5.08-12.37,94.35,94.35,0,0,1,36-36,56.7,56.7,0,0,1,12.37-5.1,27.38,27.38,0,0,1,7.29-1,14.67,14.67,0,0,1,4.25.62,9.4,9.4,0,0,1,4.29,2.72,8.62,8.62,0,0,1,2,4.45,12.42,12.42,0,0,1-.12,4,24.26,24.26,0,0,1-2.26,6.41,67.53,67.53,0,0,1-6.77,10.54,166.8,166.8,0,0,1-11.53,13.4Z" transform="translate(-50.49 -221.17)" />
                        </svg>
                    </span>
                </a>
            </header>
        </div>
    </section>

</body>

</html>