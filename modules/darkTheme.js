export default function () {
    const btnTheme = document.getElementById('btn-theme');

    const enableDarkTheme = () => {
        document.body.classList.add('theme--dark');
        localStorage.setItem('theme', 'dark');
    };

    const disableDarkTheme = () => {
        document.body.classList.remove('theme--dark');
        localStorage.setItem('theme', 'light');
    };

    // Click Handler
    btnTheme.addEventListener('click', (e) => {
        if (!btnTheme) return;

        if (document.body.classList.contains('theme--dark')) {
            disableDarkTheme();
        } else {
            enableDarkTheme();
        }
    });

    // Enable Dark Theme from Local Storage
    if (localStorage.getItem('theme') === 'dark') {
        enableDarkTheme();
    }

    // Disable Dark Theme from Local Storage
    if (localStorage.getItem('theme') === 'light') {
        disableDarkTheme();
    }

    //
    if (
        localStorage.getItem('theme') === 'dark' &&
        window.matchMedia &&
        window.matchMedia('(prefers-color-scheme: dark)').matches
    ) {
        enableDarkTheme();
    }
}
