export default function () {
    const app = document.querySelector('.app');
    const appSidebar = document.querySelector('.app__sidebar');
    const btnCollapse = document.querySelector('.app__sidebar__collapse-btn');
    const appSubmenus = document.querySelectorAll('.app__sidebar__submenu');

    // Toggle Mobile Sidebar Function
    const toggleMobileSidebar = () => {
        appSidebar.classList.toggle('visible');
        appSidebar.classList.remove('collapsed');
        app.classList.remove('stretched');
        appSubmenus.forEach((submenu) => (submenu.style.maxHeight = null));
        document.body.classList.toggle('hidden');
    };

    btnCollapse.addEventListener('click', function (e) {
        app.classList.toggle('stretched');
        appSidebar.classList.toggle('collapsed');
        appSubmenus.forEach((submenu) => (submenu.style.maxHeight = null));
    });

    // Mobile Sidebar Trigger
    document.body.addEventListener('click', (e) => {
        if (
            e.target.closest('.app__sidebar__close-btn') ||
            e.target.closest('.app__header__sidebar-btn') ||
            e.target.closest('.overlay')
        ) {
            toggleMobileSidebar();
        }
    });
}
