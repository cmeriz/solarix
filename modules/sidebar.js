export default function () {
    const main = document.querySelector('.main');
    const sidebar = document.querySelector('.sidebar');
    const btnCollapse = document.querySelector('.sidebar__collapse-btn');
    const submenus = document.querySelectorAll('.sidebar__submenu');

    // Toggle Mobile Sidebar Function
    const toggleMobileSidebar = () => {
        sidebar.classList.toggle('visible');
        sidebar.classList.remove('collapsed');
        main.classList.remove('stretched');
        submenus.forEach((submenu) => (submenu.style.maxHeight = null));
        document.body.classList.toggle('hidden');
    };

    btnCollapse.addEventListener('click', function (e) {
        main.classList.toggle('stretched');
        sidebar.classList.toggle('collapsed');
        submenus.forEach((submenu) => (submenu.style.maxHeight = null));
    });

    // Mobile Sidebar Trigger
    document.body.addEventListener('click', (e) => {
        if (
            e.target.closest('.sidebar__close-btn') ||
            e.target.closest('.header__sidebar-btn') ||
            e.target.closest('.overlay')
        ) {
            toggleMobileSidebar();
        }
    });
}
