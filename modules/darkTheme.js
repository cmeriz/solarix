export default function () {
    const themeBtn = document.getElementById('theme-btn');

    const toggleDarkTheme = () => {
        document.querySelector('body').classList.toggle('theme--dark');
    };

    if (
        window.matchMedia &&
        window.matchMedia('(prefers-color-scheme: dark)').matches
    ) {
        toggleDarkTheme();
    }

    window
        .matchMedia('(prefers-color-scheme: dark)')
        .addEventListener('change', (e) => {
            toggleDarkTheme();
        });

    themeBtn.addEventListener('click', (e) => {
        toggleDarkTheme();
    });
}
