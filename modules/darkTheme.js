export default function () {
    const btnTheme = document.getElementById('btn-theme');

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

    btnTheme.addEventListener('click', (e) => {
        if (!btnTheme) return;

        toggleDarkTheme();
    });
}
