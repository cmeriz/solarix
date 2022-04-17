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

    /* function handleInputChange(e) {
        let target = e.target;
        if (e.target.type !== 'range') {
            target = document.getElementById('range');
        }
        const min = target.min;
        const max = target.max;
        const val = target.value;

        target.style.backgroundSize =
            ((val - min) * 100) / (max - min) + '% 100%';
    }

    rangeInputs.forEach((input) => {
        input.addEventListener('input', handleInputChange);
    });

    numberInput.addEventListener('input', handleInputChange); */
}
