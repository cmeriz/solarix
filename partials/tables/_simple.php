<div class="card card--component">
    <div class="card--component__header">
        <h2 class="card--component__title">
            Tables
        </h2>
        <button class="card--component__code-btn code-btn">
            <svg class="feather">
                <use href="./src/icons/feather-sprite.svg#code" />
            </svg>
        </button>
    </div>
    <div class="card--component__content">
        <h3 class="card--component__label">Simple</h3>
        <div class="table-container">
            <table class="table">
                <thead class="table__header">
                    <tr class="table__header__row">
                        <th class="table__header__span sticky--left"></th>
                        <th class="table__header__item table__header__name sticky--left">
                            Name
                        </th>
                        <th class="table__header__item">Email</th>
                        <th class="table__header__item">Phone number</th>
                        <th class="table__header__item">Role</th>
                        <th class="table__header__item">Status</th>
                        <th class="table__header__span"></th>
                    </tr>
                </thead>
                <tbody class="table__body">
                    <tr class="table__body__row">
                        <td class="table__body__item table__body__photo">
                            <img class="table__user-photo" src="src/img/profile1.jpg" alt="">
                        </td>
                        <td class="table__body__item sticky--left">
                            <span class="table__body__user-name">
                                Tom Cook
                            </span>
                        </td>
                        <td class="table__body__item">
                            <span class="table__body__item__content">
                                tom@solarix.com
                            </span>
                        </td>
                        <td class="table__body__item">
                            <span class="table__body__item__content">
                                555-1234567
                            </span>
                        </td>
                        <td class="table__body__item">
                            <span class="table__body__item__content">
                                Admin
                            </span>
                        </td>
                        <td class="table__body__item">
                            <span class="table__body__item__content">
                                <div class="badge--success">
                                    Active
                                </div>
                            </span>
                        </td>
                        <td class="table__body__item table__body__actions">
                            <button class="table__body__btn-action table__body__btn-action--info">
                                <svg class="feather">
                                    <use href="./src/icons/feather-sprite.svg#edit" />
                                </svg>
                            </button>
                            <button class="table__body__btn-action table__body__btn-action--danger">
                                <svg class="feather">
                                    <use href="./src/icons/feather-sprite.svg#trash-2" />
                                </svg>
                            </button>
                        </td>
                    </tr>
                    <tr class="table__body__row">
                        <td class="table__body__item table__body__photo">
                            <img class="table__user-photo" src="src/img/profile2.jpg" alt="">
                        </td>
                        <td class="table__body__item sticky--left">
                            <span class="table__body__user-name">
                                Courtney Henry
                            </span>
                        </td>
                        <td class="table__body__item">
                            <span class="table__body__item__content">
                                courtney@solarix.com
                            </span>
                        </td>
                        <td class="table__body__item">
                            <span class="table__body__item__content">
                                555-1234567
                            </span>
                        </td>
                        <td class="table__body__item">
                            <span class="table__body__item__content">
                                Employee
                            </span>
                        </td>
                        <td class="table__body__item">
                            <span class="table__body__item__content">
                                <div class="badge--warning">
                                    Disabled
                                </div>
                            </span>
                        </td>
                        <td class="table__body__item table__body__actions">
                            <button class="table__body__btn-action table__body__btn-action--info">
                                <svg class="feather">
                                    <use href="./src/icons/feather-sprite.svg#edit" />
                                </svg>
                            </button>
                            <button class="table__body__btn-action table__body__btn-action--danger">
                                <svg class="feather">
                                    <use href="./src/icons/feather-sprite.svg#trash-2" />
                                </svg>
                            </button>
                        </td>
                    </tr>
                    <tr class="table__body__row">
                        <td class="table__body__item table__body__photo">
                            <img class="table__user-photo" src="src/img/profile3.jpg" alt="">
                        </td>
                        <td class="table__body__item sticky--left">
                            <span class="table__body__user-name">
                                Lindsay Walton
                            </span>
                        </td>
                        <td class="table__body__item">
                            <span class="table__body__item__content">
                                lindsay@solarix.com
                            </span>
                        </td>
                        <td class="table__body__item">
                            <span class="table__body__item__content">
                                555-1234567
                            </span>
                        </td>
                        <td class="table__body__item">
                            <span class="table__body__item__content">
                                Owner
                            </span>
                        </td>
                        <td class="table__body__item">
                            <span class="table__body__item__content">
                                <div class="badge--danger">
                                    Inactive
                                </div>
                            </span>
                        </td>
                        <td class="table__body__item table__body__actions">
                            <button class="table__body__btn-action table__body__btn-action--info">
                                <svg class="feather">
                                    <use href="./src/icons/feather-sprite.svg#edit" />
                                </svg>
                            </button>
                            <button class="table__body__btn-action table__body__btn-action--danger">
                                <svg class="feather">
                                    <use href="./src/icons/feather-sprite.svg#trash-2" />
                                </svg>
                            </button>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
    <div class="card--component__code">
        <?php require 'partials/tables/code/_simple.php' ?>
    </div>
</div>