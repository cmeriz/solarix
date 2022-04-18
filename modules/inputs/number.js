export default function () {
    document.body.addEventListener('click', (e) => {
        const btnNumber =
            e.target.closest('.form-input--number__btn-minus') ||
            e.target.closest('.form-input--number__btn-plus');

        if (!btnNumber) return;

        const inputNumber = btnNumber.parentElement.querySelector(
            '.form-input--number__field'
        );

        const inputVal = +inputNumber.value || 0;

        if (
            btnNumber.classList.contains('form-input--number__btn-minus') &&
            inputVal > +inputNumber.min
        ) {
            inputNumber.value = inputVal - 1;
        }

        if (
            btnNumber.classList.contains('form-input--number__btn-plus') &&
            inputVal < +inputNumber.max
        ) {
            inputNumber.value = inputVal + 1;
        }
    });
}
