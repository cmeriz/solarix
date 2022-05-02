export default function () {
    const app = document.querySelector('.app');

    app.addEventListener('click', (e) => {
        const codeBtn = e.target.closest('.code-btn');

        if (!codeBtn) return;

        const container =
            codeBtn.closest('.card--component') ||
            codeBtn.closest('.component');
        container.classList.toggle('code-preview');
    });
}
