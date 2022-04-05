export default function () {
    const main = document.querySelector('.main');
    const state = {
        dropdownActive: null,
    };

    const openDropdown = (dropdown) => {
        if (state.dropdownActive) {
            state.dropdownActive.classList.remove('visible');
        }
        dropdown.classList.add('visible');
        state.dropdownActive = dropdown;
    };

    const closeDropdown = (dropdown) => {
        dropdown.classList.remove('visible');
        state.dropdownActive = null;
    };

    // Toggle class to dropdown
    main.addEventListener('click', (e) => {
        const btn = e.target.closest('.dropdown-trigger');
        if (!btn) return;

        const dropdown = btn.nextElementSibling;
        if (!dropdown.classList.contains('visible')) openDropdown(dropdown);
        else closeDropdown(dropdown);
    });

    // Close dropdown when click away
    document.body.addEventListener('click', (e) => {
        if (e.target.closest('.dropdown-container')) return;

        if (state.dropdownActive) {
            state.dropdownActive.classList.remove('visible');
        }
    });
}
