export default function () {
    const sidebar = document.querySelector('.sidebar');
    const nav = document.querySelector('.sidebar__nav');

    nav.addEventListener('click', (e) => {
        e.preventDefault();

        const menuItem = e.target.closest('.sidebar__menu__dropdown');

        if (!menuItem) return;

        const submenu = menuItem.nextElementSibling;

        // Open submenu
        if (submenu.clientHeight === 0) {
            submenu.style.maxHeight = `${submenu.scrollHeight}px`;
            sidebar.classList.remove('collapsed');
        }
        // Close submenu
        else {
            submenu.style.maxHeight = 0;
        }
    });
}
