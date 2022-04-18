export default function () {
    // Click Custom Input File
    document.body.addEventListener('click', (e) => {
        const btnFile = e.target.closest(
            '.form-input--file-single__btn-upload'
        );

        if (!btnFile) return;

        btnFile.parentElement.nextElementSibling.click();
    });

    // After upload file
    document.body.addEventListener('change', (e) => {
        const inputFile = e.target.closest('.form-input--file-single__field');

        if (!inputFile) return;

        const formInput = inputFile.parentElement;

        formInput.querySelector('.form-input--file-single__label').innerHTML =
            inputFile.files[0].name;

        formInput.classList.add('uploading');
    });

    // Remove file
    document.body.addEventListener('click', (e) => {
        const btnRemove = e.target.closest(
            '.form-input--file-single__btn-remove'
        );

        if (!btnRemove) return;

        const formInput = btnRemove.closest('.form-input--file-single');

        const inputFile = formInput.querySelector(
            '.form-input--file-single__field'
        );

        const formLabel = formInput.querySelector(
            '.form-input--file-single__label'
        );

        formInput.classList.remove('uploading');
        formLabel.innerHTML = formLabel.dataset.placeholder;
        inputFile.value = null;
    });
}
