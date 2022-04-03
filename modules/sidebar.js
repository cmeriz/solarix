export default function () {
    const sidebar = document.querySelector('.sidebar');
    const collapseBtn = document.querySelector('.sidebar__collapse-btn');
    const submenus = document.querySelectorAll('.sidebar__submenu');

    collapseBtn.addEventListener('click', function (e) {
        sidebar.classList.toggle('collapsed');
        submenus.forEach((submenu) => (submenu.style.maxHeight = null));
    });
}
