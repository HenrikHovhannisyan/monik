
$(document).ready(function () {
    $('#sidebarCollapse').on('click', function () {
        $('#sidebar').toggleClass('active');
    });
});

/* Start upload image */
$('#imageUpload').change(function(){
    readImgUrlAndPreview(this);
    function readImgUrlAndPreview(input){
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

    discount_percent.addEventListener('input', () => {
        discount.value = price.value - (price.value * discount_percent.value) / 100;
    });
});



ClassicEditor.create(document.querySelector("#description_am"), {
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
    console.error(error);
});
ClassicEditor.create(document.querySelector("#description_ru"), {
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
    console.error(error);
});
ClassicEditor.create(document.querySelector("#description_en"), {
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
    console.error(error);
});
