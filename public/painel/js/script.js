$(document).on('click', '#btn-menu', function () {
    $(".side-menu").animate({ "left": "0" }, 300);
    // $(".menu-mobile").animate({ opacity: 1 }, 150);
    $(".fade-line").animate({ width: '100%' }, 0);
});
$(document).on('click', '.fade-line', function () {
    $(".side-menu").animate({ "left": "-100%" }, 300);
    // $(".menu-mobile").animate({ opacity: 0 }, 0);
    $(".fade-line").animate({ width: '0' }, 0);
});




// Adicionando imagem
$(document).on('click', '.btn-add-foto', function (e) {
    e.preventDefault();
    $(this).parent().find('.add-foto').trigger('click');
});
$(document).on('change', '.add-foto', function () {
    $(this).removeClass('add-foto');

    $(this).parent().find('.btn-add-foto').removeClass('btn-custom-1 btn-add-foto').addClass(
        'btn-custom-1 btn-remove-foto').html('x');

    $(this).parent().parent().append(
        '<div class="col-6 col-md-3 mb-2 preview-foto">' +
        '<button type="button" class="btn btn-custom-1 btn-add-foto mb-3">+</button>' +
        '<input type="file" class="d-none add-foto" name="foto[]">' +
        '<div class="foto"></div>' +
        '</div>'
    );

    var form_img = $(this).parent();

    var preview = form_img.find('.foto');
    var files = $(this).prop('files');

    function readAndPreview(file) {
        // Make sure file.name matches our extensions criteria
        if (/.(jpe?g|png|gif)$/i.test(file.name)) {
            var reader = new FileReader();

            reader.addEventListener("load", function () {
                var image = new Image();
                image.classList = 'rounded img-fluid';
                // image.height = 180;
                image.title = file.name;
                image.src = this.result;
                preview.append(image);
            }, false);

            reader.readAsDataURL(file);
        }
    }

    if (files) {
        [].forEach.call(files, readAndPreview);
    }
});
$(document).on('click', '.btn-remove-foto', function () {

    var foto = document.querySelector('.fotoVal').value
    console.log(foto)
    $.ajax({
        url: "/del",
        type: "POST",
        data: { value: foto, },
        success: function (data) {
            console.log(data);
        }
    });
    $(this).parent().remove();
});
