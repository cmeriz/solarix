import customPlaceholder from './inputs/custom-placeholder.js';
import password from './inputs/password.js';
import fileSingle from './inputs/file-single.js';
import fileMultiple from './inputs/file-multiple.js';
import range from './inputs/range.js';
import number from './inputs/number.js';
import select from './inputs/select.js';

export default function () {
    customPlaceholder();
    password();
    fileSingle();
    fileMultiple();
    range();
    number();
    select();
}
