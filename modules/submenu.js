export default function () {
    const app = document.querySelector('.app');
    const appSidebar = document.querySelector('.app__sidebar');
    const appNav = document.querySelector('.app__sidebar__nav');

    appNav.addEventListener('click', (e) => {
        const menuItem = e.target.closest('.app__sidebar__menu__dropdown');

        if (!menuItem) return;

        const submenu = menuItem.nextElementSibling;

        // Open submenu
        if (submenu.clientHeight === 0) {
            submenu.style.maxHeight = `${submenu.scrollHeight}px`;
            appSidebar.classList.remove('collapsed');
            app.classList.remove('stretched');
        }
        // Close submenu
        else {
            submenu.style.maxHeight = 0;
        }
    });
}
