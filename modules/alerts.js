export default function () {
    const main = document.querySelector('.main');

    main.addEventListener('click', (e) => {
        const btnClose = e.target.closest('.alert__close-btn');

        if (!btnClose) return;

        btnClose.parentElement.classList.add('removing');

        btnClose.parentElement.addEventListener('transitionend', () => {
            btnClose.parentElement.remove();
        });
    });
}
