export default function () {
    const state = {
        selectOpened: null,
    };

    const openSelect = (select) => {
        if (state.selectOpened) {
            state.selectOpened.classList.remove('open');
        }
        select.classList.add('open');
        state.selectOpened = select;
    };

    const closeSelect = (select) => {
        select.classList.remove('open');
        state.selectOpened = null;
    };

    // Select toggle class
    document.body.addEventListener('click', (e) => {
        const inputSelect = e.target.closest(
            '.form-input--select__custom-field__box'
        );

        if (!inputSelect) return;

        const selectCustom = inputSelect.parentElement;
        if (!selectCustom.classList.contains('open')) openSelect(selectCustom);
        else closeSelect(selectCustom);
    });

    // Close select when click away
    document.body.addEventListener('click', (e) => {
        if (e.target.closest('.form-input--select')) return;

        if (state.selectOpened) {
            state.selectOpened.classList.remove('open');
        }
    });

    // Selecting options
    document.body.addEventListener('click', (e) => {
        const option = e.target.closest(
            '.form-input--select__custom-field__option'
        );

        if (!option) return;

        const selectCustom = option.closest(
            '.form-input--select__custom-field'
        );

        const selectBox = selectCustom.querySelector(
            '.form-input--select__custom-field__box'
        );

        const selectPlaceholder = selectBox.querySelector(
            '.form-input--select__custom-field__box__placeholder'
        );

        const selectField = option
            .closest('.form-input--select')
            .querySelector('.form-input--select__field');

        selectField.value = option.dataset.value;
        selectPlaceholder.innerHTML = option.innerHTML;
        selectBox.classList.add('filled');
        closeSelect(selectCustom);
    });
}
