$(document).ready(function () {
    $('#sidebarCollapse').on('click', function () {
        $('#sidebar').toggleClass('active');
    });
});

/* Start upload image */
$('#imageUpload').change(function () {
    readImgUrlAndPreview(this);

    function readImgUrlAndPreview(input) {
        if (input.files && input.files[0]) {
            var reader = new FileReader();
            reader.onload = function (e) {
                $('#imagePreview').attr('src', e.target.result);
                $('#imagePreview').css('opacity', 1);
            }
        }
        reader.readAsDataURL(input.files[0]);
    }
});
/* End upload image */

document.addEventListener('DOMContentLoaded', function () {
    let price = document.querySelector('#price');
    let discount_percent = document.querySelector('#discount_percent');
    let discount = document.querySelector('#discount');

    if (price && discount_percent && discount) {
        discount_percent.addEventListener('input', () => {
            discount.value = price.value - (price.value * discount_percent.value) / 100;
        });
    }
});

function textEditor(name) {
    return ClassicEditor.create(document.querySelector(name), {
        toolbar: {
            items: [
                'undo', 'redo',
                '|', 'heading',
                '|', 'fontfamily', 'fontsize', 'fontColor', 'fontBackgroundColor',
                '|', 'bold', 'italic', 'strikethrough', 'subscript', 'superscript', 'code',
                '|', 'link', 'codeBlock',
                '|', 'bulletedList', 'numberedList', 'todoList',
            ],
            shouldNotGroupWhenFull: false
        }
    }).catch((error) => {

    });
}

textEditor("#description_am");
textEditor("#description_ru");
textEditor("#description_en");
textEditor("#answer_am");
textEditor("#answer_ru");
textEditor("#answer_en");
textEditor("#question_am");
textEditor("#question_ru");
textEditor("#question_en");


// Start product search
$(document).ready(function () {
    $('table').DataTable({
        "paging": true,
        "searching": true,
        "ordering": true,
        "info": true,
        "lengthChange": true,
        "responsive": true,
        "columnDefs": [
            {"orderable": false, "targets": [2, 6, 7]}
        ]
    });
});

// End product search

// Start (check that the expiry_date field is required.)
document.querySelector('select[name="type"]').addEventListener('change', function () {
    const expiryDateField = document.querySelector('input[name="expiry_date"]');
    const isMultiUse = this.value === 'multi-use';
    expiryDateField.required = isMultiUse;
    expiryDateField.disabled = !isMultiUse;

    if (!isMultiUse) {
        expiryDateField.value = '';
    }
});

// End (check that the expiry_date field is required.)
