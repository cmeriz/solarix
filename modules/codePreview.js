export default function () {
    const main = document.querySelector('.main');

    main.addEventListener('click', (e) => {
        const codeBtn = e.target.closest('.code-btn');

        if (!codeBtn) return;

        const container = codeBtn.closest('.card--component');
        container.classList.toggle('code-preview');
    });
}
