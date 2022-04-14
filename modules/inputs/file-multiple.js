export default function () {
    const removeFile = (inputFile, index) => {
        // 1) Put files into an array
        const filesArr = Array.from(inputFile.files);

        // 2) Declaring DT object
        let fileBuffer = new DataTransfer();

        // 3) Filtering files array and adding the others to DT Object
        filesArr
            .filter((_, i) => i !== index)
            .forEach((file) => fileBuffer.items.add(file));

        // 4) Putting DT Object files to original Input File
        inputFile.files = fileBuffer.files;

        // 5) Updating Files Buttons
        renderFiles(inputFile);
    };

    const renderFiles = (inputFile) => {
        const filesArr = Array.from(inputFile.files);
        const filesContainer = inputFile.parentElement.querySelector(
            '.form-input--file-multi__files-container'
        );

        filesContainer.innerHTML = '';

        filesArr.forEach((file, index) => {
            filesContainer.insertAdjacentHTML(
                'beforeend',
                `
                <div class="form-input--file-multi__file">
                    <button class="form-input--file-multi__btn-remove" data-target="${index}">
                        <svg class="feather">
                            <use href="./src/icons/feather-sprite.svg#x" />
                        </svg>
                    </button>
                    <span class="form-input--file-multi__file__icon">
                        <svg class="feather">
                            <use href="./src/icons/feather-sprite.svg#file" />
                        </svg>
                    </span>
                    <span class="form-input--file-multi__file__name">
                        ${file.name}
                    </span>
                </div>
               
            `
            );
        });
    };

    // Trigger upload
    document.body.addEventListener('click', (e) => {
        const btnUpload = e.target.closest(
            '.form-input--file-multi__drop-zone'
        );

        if (!btnUpload) return;

        const inputFile = btnUpload
            .closest('.form-input--file-multi')
            .querySelector('.form-input--file-multi__field');

        inputFile.click();
    });

    // Trigger render
    document.body.addEventListener('change', (e) => {
        const inputFile = e.target.closest('.form-input--file-multi__field');

        if (!inputFile) return;

        renderFiles(inputFile);
    });

    // When user drags over drop-zone
    document.body.addEventListener('dragover', (e) => {
        e.preventDefault();

        const dragZone = e.target.closest('.form-input--file-multi__drop-zone');

        if (!dragZone) return;

        dragZone.classList.add('dragging');
    });

    // When user stop dragging over drop-zone
    document.body.addEventListener('dragleave', (e) => {
        e.preventDefault();

        const dragZone = e.target.closest('.form-input--file-multi__drop-zone');

        if (!dragZone) return;

        dragZone.classList.remove('dragging');
    });

    // When user drops inside drop-zone
    document.body.addEventListener('drop', (e) => {
        e.preventDefault();

        // 1) Select only drop-zone
        const dropZone = e.target.closest('.form-input--file-multi__drop-zone');

        if (!dropZone) return;

        // 2) Select input file
        const inputFile = dropZone.parentElement.querySelector(
            '.form-input--file-multi__field'
        );

        // 3) Get new files & existing files
        const newFiles = e.dataTransfer.files;
        const existingFiles = inputFile.files;

        // 4) Creating files buffer
        let filesBuffer = new DataTransfer();

        // 5) Adding files from new & existing files to buffer
        [...newFiles, ...existingFiles].forEach((file) =>
            filesBuffer.items.add(file)
        );

        // 6) Replacing files in input with our buffer
        inputFile.files = filesBuffer.files;
    });

    // Drag Enter
    /* document.body.addEventListener('dragenter', (e) => {
        const formInput = e.target.closest('.form-input--file-multi');

        if (!formInput) return;

        console.log('You are dragging');

        document.body.removeEventListener('dragenter');
    }); */

    /* // Drag Enter
    document.body.addEventListener('dragleave', (e) => {
        const formInput = e.target.closest('.form-input--file-multi.dragging');

        if (!formInput) return;

        console.log('You are leaving drag');

        formInput.classList.remove('dragging');
    }); */
}
