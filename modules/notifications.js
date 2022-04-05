export default function () {
    const dropdown = document.querySelector('.dropdown--notifications');

    dropdown.addEventListener('click', (e) => {
        const closeBtn = e.target.closest(
            '.dropdown--notifications__close-btn'
        );

        if (!closeBtn) return;

        closeBtn.parentElement.classList.add('removing');
        closeBtn.parentElement.addEventListener('transitionend', () => {
            closeBtn.parentElement.remove();
        });
    });
}
