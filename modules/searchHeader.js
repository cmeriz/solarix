export default function () {
    const btnSearch = document.querySelector('.header__search__btn');
    const form = btnSearch.previousElementSibling;

    document.body.addEventListener('click', (e) => {
        if (!e.target.closest('.header__search')) {
            form.classList.remove('visible');
            return;
        }

        if (
            e.target.closest('.header__search__btn') ||
            e.target.closest('.header__search__close-btn')
        ) {
            form.classList.toggle('visible');

            form.addEventListener('transitionend', () => {
                form.querySelector('input').focus();
            });
        }
    });
}
