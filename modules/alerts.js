export default function () {
    const app = document.querySelector('.app');

    app.addEventListener('click', (e) => {
        const btnClose = e.target.closest('.alert__close-btn');

        if (!btnClose) return;

        btnClose.parentElement.classList.add('removing');

        btnClose.parentElement.addEventListener('transitionend', () => {
            btnClose.parentElement.remove();
        });
    });
}
