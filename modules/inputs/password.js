export default function () {
    document.body.addEventListener('click', (e) => {
        const btnPassword = e.target.closest('.form-input--password__btn');

        if (!btnPassword) return;

        const inputPassword = btnPassword.previousElementSibling;

        const inputType =
            inputPassword.getAttribute('type') === 'password'
                ? 'text'
                : 'password';

        btnPassword.parentElement.classList.toggle('visible');
        inputPassword.setAttribute('type', inputType);
    });
}
