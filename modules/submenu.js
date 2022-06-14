export default function () {
    const app = document.querySelector('.app');
    const appSidebar = document.querySelector('.app__sidebar');
    const appNav = document.querySelector('.app__sidebar__nav');

    const openSubmenu = (submenu) => {
        submenu.style.maxHeight = `${submenu.scrollHeight}px`;
        appSidebar.classList.remove('collapsed');
        app.classList.remove('stretched');
    };
    const closeSubmenu = (submenu) => {
        submenu.style.maxHeight = 0;
    };

    appNav.addEventListener('click', (e) => {
        const menuItem = e.target.closest('.app__sidebar__menu__dropdown');

        if (!menuItem) return;

        const submenu = menuItem.nextElementSibling;

        // Open submenu
        if (submenu.clientHeight === 0) {
            openSubmenu(submenu);
        }
        // Close submenu
        else {
            closeSubmenu(submenu);
        }
    });

    // Open Active Submenu Links on init
    const activeSubmenuLinks = document.querySelectorAll(
        '.app__sidebar__submenu__link.active'
    );
    activeSubmenuLinks.forEach((link) => {
        const submenu = link.closest('.app__sidebar__submenu');
        openSubmenu(submenu);
    });
}
