export default function () {
    document.body.addEventListener('change', (e) => {
        const input =
            e.target.closest('input[type="date"]') ||
            e.target.closest('input[type="time"]');

        if (!input) return;

        if (input.value === '') {
            input.parentElement.classList.remove('filled');
        } else {
            input.parentElement.classList.add('filled');
        }
    });
}
