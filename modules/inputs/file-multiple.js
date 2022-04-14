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
                    <div class="form-input--file-multi__file__type${
                        file.type !== ''
                            ? '--' + file.type.split('/').at(0)
                            : ''
                    }">
                        ${file.name.split('.').at(-1)}
                    </div>
                    <div class="form-input--file-multi__file__data">
                        <span class="form-input--file-multi__file__name">
                            ${file.name}
                        </span>
                        <span class="form-input--file-multi__file__size">
                            ${(file.size / (1024 * 1024)).toFixed(2)}MB
                        </span>
                    </div>
                    <button class="form-input--file-multi__file__btn-remove" data-target="${index}">
                        <svg class="feather">
                            <use href="./src/icons/feather-sprite.svg#x" />
                        </svg>
                    </button>
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

        const inputFilePivot = btnUpload
            .closest('.form-input--file-multi')
            .querySelector('.form-input--file-multi__pivot');

        inputFilePivot.disabled = false;

        inputFilePivot.click();

        inputFilePivot.disabled = true;
    });

    // Trigger render
    document.body.addEventListener('change', (e) => {
        const inputFilePivot = e.target.closest(
            '.form-input--file-multi__pivot'
        );

        if (!inputFilePivot) return;

        const inputFile = inputFilePivot.parentElement.querySelector(
            '.form-input--file-multi__field'
        );
        const newFiles = inputFilePivot.files;
        const existingFiles = inputFile.files;

        let filesBuffer = new DataTransfer();

        [...newFiles, ...existingFiles].forEach((file) =>
            filesBuffer.items.add(file)
        );

        inputFile.files = filesBuffer.files;
        inputFilePivot.value = '';

        console.log(inputFile.files);

        renderFiles(inputFile);
    });

    // Trigger remove
    document.body.addEventListener('click', (e) => {
        const btnRemove = e.target.closest(
            '.form-input--file-multi__file__btn-remove'
        );

        if (!btnRemove) return;

        const inputFile = btnRemove
            .closest('.form-input--file-multi')
            .querySelector('.form-input--file-multi__field');

        const index = +btnRemove.dataset.target;

        const fileContainer = btnRemove.parentElement;

        removeFile(inputFile, index);

        fileContainer.remove();
    });

    // When user drags over drop-zone
    document.body.addEventListener('dragover', (e) => {
        e.preventDefault();

        const dropZone = e.target.closest('.form-input--file-multi__drop-zone');

        if (!dropZone) return;

        dropZone.classList.add('dragging');
    });

    // When user stop dragging over drop-zone
    document.body.addEventListener('dragleave', (e) => {
        e.preventDefault();

        const dropZone = e.target.closest('.form-input--file-multi__drop-zone');

        if (!dropZone) return;

        dropZone.classList.remove('dragging');
    });

    // When user drops inside drop-zone
    document.body.addEventListener('drop', (e) => {
        e.preventDefault();

        // 1) Select only drop-zone
        const dropZone = e.target.closest('.form-input--file-multi__drop-zone');

        if (!dropZone) return;

        // 2) Select input file
        const inputFile = dropZone
            .closest('.form-input--file-multi')
            .querySelector('.form-input--file-multi__field');

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

        // 7) Render files
        renderFiles(inputFile);

        // 8) Remove drop-zone dragging state
        dropZone.classList.remove('dragging');
    });
}
