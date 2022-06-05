export default function () {
    /* Open Modal */
    document.body.addEventListener('click', (e) => {
        const modalTrigger = e.target.closest('.modal__trigger');

        if (!modalTrigger) return;

        modalTrigger.parentElement.classList.add('active');
        document.body.style.overflow = 'hidden';
    });

    /* Close Modal */
    document.body.addEventListener('click', (e) => {
        const modalClose =
            e.target.closest('.modal__btn-close') ||
            e.target.closest('.modal__btn-cancel') ||
            e.target.closest('.modal__overlay');

        if (!modalClose) return;

        modalClose.closest('.modal').classList.remove('active');
        document.body.style.overflow = 'overlay';
    });
}
