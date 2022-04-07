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
        <h3 class="card--component__label">
            Text
        </h3>
        <div class="form-input">
            <label for="text">Search</label>
            <input id="text" autocomplete="off" name="text" type="text" placeholder="Text">
        </div>

        <!-- User -->
        <h3 class="card--component__label">
            User
        </h3>
        <div class="form-input--icon">
            <label for="text">User</label>
            <input id="text" autocomplete="off" name="text" type="text" placeholder="Text">
            <i class="iconsax-user"></i>
        </div>

        <!-- Email -->
        <h3 class="card--component__label">
            Email
        </h3>
        <div class="form-input--icon">
            <label for="email">Email</label>
            <input id="email" autocomplete="off" name="email" type="email" placeholder="user@mail.com">
            <i class="iconsax-sms"></i>
        </div>

        <!-- Textarea -->
        <h3 class="card--component__label">
            Textarea
        </h3>
        <div class="form-input--icon">
            <label for="email">Textarea</label>
            <textarea name="" id="" rows="6" placeholder="Message"></textarea>
        </div>

        <!-- Date -->
        <h3 class="card--component__label">
            Date
        </h3>
        <div class="form-input--icon">
            <label for="date">Date</label>
            <input id="date" name="date" type="text" placeholder="2013-01-25">
            <i class="iconsax-calendar-1"></i>
        </div>
    </div>

    <div class="card--component__code">
        <?php require 'partials/code/_badges.php' ?>
    </div>
</div>