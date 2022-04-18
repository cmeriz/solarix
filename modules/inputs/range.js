export default function () {
    const rangeInputs = document.querySelectorAll('input[type="range"]');
    const numberInput = document.querySelector('input[type="number"]');

    document.body.addEventListener('input', (e) => {
        const inputRange = e.target.closest('.form-input--range__field');

        if (!inputRange) return;

        const inputVal = inputRange.nextElementSibling;

        const min = inputRange.min;
        const max = inputRange.max;
        const val = inputRange.value;

        const inputBuffer = inputRange.previousElementSibling;

        inputRange.style.backgroundSize =
            ((val - min) * 100) / (max - min) + '% 100%';

        inputVal.innerHTML = val;
    });
}
