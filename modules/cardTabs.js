export default function () {
    document.body.addEventListener('click', (e) => {
        const btnTab = e.target.closest('.card--tabbed__btn-tab');

        if (!btnTab) return;

        const card = btnTab.closest('.card--tabbed');
        const tabs = card.querySelectorAll('.card--tabbed__tab-content');
        const btns = card.querySelectorAll('.card--tabbed__btn-tab');

        btns.forEach((btn) => {
            btn.classList.remove('active');
        });

        tabs.forEach((tab) => {
            tab.classList.remove('active');
        });

        card.querySelector(
            `.card--tabbed__${btnTab.dataset.target}`
        ).classList.add('active');

        btnTab.classList.add('active');
    });
}
