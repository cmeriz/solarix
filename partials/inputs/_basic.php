<div class="card card--component">
    <div class="card--component__header">
        <h2 class="card--component__title">
            Basic
        </h2>
        <button class="card--component__code-btn code-btn">
            <i class="iconsax-message-programming"></i>
        </button>
    </div>
    <div class="card--component__content">
        <!-- Text -->

        <div class="form-input">
            <label class="form-input__label" for="text">
                Text
            </label>
            <input id="text" autocomplete="off" name="text" type="text" placeholder="Text">
        </div>

        <!-- User -->
        <div class="form-input--icon">
            <label for="user" class="form-input__label">
                User
            </label>
            <input id="user" autocomplete="off" name="user" type="text" placeholder="Username">
            <i class="iconsax-user"></i>
        </div>

        <!-- Email -->
        <div class="form-input--icon">
            <label for="email" class="form-input__label">
                Email
            </label>
            <input id="email" autocomplete="off" name="email" type="email" placeholder="user@mail.com">
            <i class="iconsax-sms"></i>
        </div>

        <!-- Textarea -->
        <div class="form-input--icon">
            <label for="message" class="form-input__label">
                Textarea
            </label>
            <textarea name="message" id="message" rows="6" placeholder="Message"></textarea>
        </div>

        <!-- Date -->
        <div class="form-input--icon">
            <label for="message" class="form-input__label">
                Date
            </label>
            <span class="form-input__custom-placeholder">
                Date
            </span>
            <input id="date" name="date" type="date">
            <i class="iconsax-calendar-1"></i>
        </div>

        <!-- Time -->
        <div class="form-input--icon">
            <label for="time" class="form-input__label">
                Time
            </label>
            <span class="form-input__custom-placeholder">
                Time
            </span>
            <input id="time" name="time" type="time">
            <i class="iconsax-clock"></i>
        </div>
    </div>

    <div class="card--component__code">
        <?php require 'partials/code/_badges.php' ?>
    </div>
</div>